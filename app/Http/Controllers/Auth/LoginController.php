<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\User; 
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request; 
use Yajra\DataTables\DataTables;
class LoginController extends Controller
{

    
    public function showLoginForm()
    {
        return view('login'); 
    }

    
    public function login(Request $request)
{
    $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);

    $user = User::where('email', $request->email)->first();

    if (!$user) {
        return back()->with('error', 'Email address not found. Please register first.');
    }

    if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
        
        return redirect()->route('index')->with('success', 'Logged in successfully!');
    } else {
        
        return back()->with('error', 'Invalid password. Please try again.');
    }
}


    public function index(Request $request)
    {
        if ($request->ajax()) {
            try {
                $cities = City::with('state.country')->get(); 
    
                return DataTables::of($cities)
                    ->addColumn('state', function($city) {
                        return $city->state->name; 
                    })
                    ->addColumn('country', function($city) {
                        return $city->state->country->name; 
                    })
                    ->make(true);
            } catch (\Exception $e) {
                return response()->json(['error' => $e->getMessage()], 500); 
            }
        }
    
        return view('index'); 
    }
    


}
