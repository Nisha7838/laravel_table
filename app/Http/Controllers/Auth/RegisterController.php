<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\Country; 
use App\Models\State;  
use App\Models\City;    




class RegisterController extends Controller
{
    
    public function showRegistrationForm()
    {   
        $countries = Country::all();
        return view('register', ['countries' => $countries]); 
    }

   
    public function getStates($countryId)
    {
        $states = State::where('country_id', $countryId)->get(); 
        return response()->json($states);
    }

    
    public function getCities($stateId)
    {
        $cities = City::where('state_id', $stateId)->get(); 
        return response()->json($cities);
    }


public function register(Request $request)
{
    
    $validatedData = $request->validate([
        'first_name' => 'required|string|max:255',
        'last_name' => 'required|string|max:255',
        'dob' => 'required|date',
        'email' => 'required|email',
        'mobile' => 'required|string|max:15',
        'country' => 'required',
        'state' => 'required',
        'city' => 'required',
        'locality' => 'required|string|max:255',
        'pincode' => 'required|string|max:10',
        'password' => 'required|string|min:6|confirmed',
    ]);

    try {
        
        $existingUser = User::where('email', $validatedData['email'])->first();
        
        if ($existingUser) {
            
            return redirect()->back()->with('error', 'User already exists. Please login.')->withInput();
        }

        
        $user = User::create([
            'first_name' => $validatedData['first_name'],
            'last_name' => $validatedData['last_name'],
            'dob' => $validatedData['dob'],
            'email' => $validatedData['email'],
            'mobile_number' => $validatedData['mobile'],
            'country_id' => $validatedData['country'], 
            'state_id' => $validatedData['state'],     
            'city_id' => $validatedData['city'],       
            'locality' => $validatedData['locality'],
            'pincode' => $validatedData['pincode'],
            'password' => bcrypt($validatedData['password']),
        ]);

        
        return redirect()->back()->with('success', 'Registration successful! You are now logged in.');

    } catch (QueryException $e) {
        
        return redirect()->back()->with('error', 'An error occurred while creating your account. Please try again.')->withInput();
    } catch (\Exception $e) {
        
        return redirect()->back()->with('error', 'An unexpected error occurred. Please try again.')->withInput();
    }
}


}
