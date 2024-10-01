<?php
namespace Database\Seeders;

use App\Models\Country;
use App\Models\State;
use App\Models\City;
use Illuminate\Database\Seeder;

class CountryStateCitySeeder extends Seeder
{
    public function run()
    {
        // ** Country 1: India **
        $india = Country::create(['name' => 'India']);

        // India States and Cities
        $maharashtra = State::create(['name' => 'Maharashtra', 'country_id' => $india->id]);
        City::create(['name' => 'Mumbai', 'state_id' => $maharashtra->id]);
        City::create(['name' => 'Pune', 'state_id' => $maharashtra->id]);
        City::create(['name' => 'Nagpur', 'state_id' => $maharashtra->id]);
        City::create(['name' => 'Thane', 'state_id' => $maharashtra->id]);
        City::create(['name' => 'Nashik', 'state_id' => $maharashtra->id]);

        $karnataka = State::create(['name' => 'Karnataka', 'country_id' => $india->id]);
        City::create(['name' => 'Bengaluru', 'state_id' => $karnataka->id]);
        City::create(['name' => 'Mysuru', 'state_id' => $karnataka->id]);
        City::create(['name' => 'Mangaluru', 'state_id' => $karnataka->id]);
        City::create(['name' => 'Hubballi', 'state_id' => $karnataka->id]);
        City::create(['name' => 'Kalaburagi', 'state_id' => $karnataka->id]);

        // ** Country 2: United States **
        $usa = Country::create(['name' => 'United States']);

        // United States States and Cities
        $california = State::create(['name' => 'California', 'country_id' => $usa->id]);
        City::create(['name' => 'Los Angeles', 'state_id' => $california->id]);
        City::create(['name' => 'San Francisco', 'state_id' => $california->id]);
        City::create(['name' => 'San Diego', 'state_id' => $california->id]);
        City::create(['name' => 'San Jose', 'state_id' => $california->id]);
        City::create(['name' => 'Sacramento', 'state_id' => $california->id]);

        $texas = State::create(['name' => 'Texas', 'country_id' => $usa->id]);
        City::create(['name' => 'Houston', 'state_id' => $texas->id]);
        City::create(['name' => 'Dallas', 'state_id' => $texas->id]);
        City::create(['name' => 'Austin', 'state_id' => $texas->id]);
        City::create(['name' => 'San Antonio', 'state_id' => $texas->id]);
        City::create(['name' => 'Fort Worth', 'state_id' => $texas->id]);

        // ** Country 3: Australia **
        $australia = Country::create(['name' => 'Australia']);

        // Australia States and Cities
        $newSouthWales = State::create(['name' => 'New South Wales', 'country_id' => $australia->id]);
        City::create(['name' => 'Sydney', 'state_id' => $newSouthWales->id]);
        City::create(['name' => 'Newcastle', 'state_id' => $newSouthWales->id]);
        City::create(['name' => 'Wollongong', 'state_id' => $newSouthWales->id]);
        City::create(['name' => 'Central Coast', 'state_id' => $newSouthWales->id]);
        City::create(['name' => 'Coffs Harbour', 'state_id' => $newSouthWales->id]);

        $victoria = State::create(['name' => 'Victoria', 'country_id' => $australia->id]);
        City::create(['name' => 'Melbourne', 'state_id' => $victoria->id]);
        City::create(['name' => 'Geelong', 'state_id' => $victoria->id]);
        City::create(['name' => 'Ballarat', 'state_id' => $victoria->id]);
        City::create(['name' => 'Bendigo', 'state_id' => $victoria->id]);
        City::create(['name' => 'Melton', 'state_id' => $victoria->id]);

        // ** Country 4: Canada **
        $canada = Country::create(['name' => 'Canada']);

        // Canada States and Cities
        $ontario = State::create(['name' => 'Ontario', 'country_id' => $canada->id]);
        City::create(['name' => 'Toronto', 'state_id' => $ontario->id]);
        City::create(['name' => 'Ottawa', 'state_id' => $ontario->id]);
        City::create(['name' => 'Mississauga', 'state_id' => $ontario->id]);
        City::create(['name' => 'Brampton', 'state_id' => $ontario->id]);
        City::create(['name' => 'Hamilton', 'state_id' => $ontario->id]);

        $britishColumbia = State::create(['name' => 'British Columbia', 'country_id' => $canada->id]);
        City::create(['name' => 'Vancouver', 'state_id' => $britishColumbia->id]);
        City::create(['name' => 'Victoria', 'state_id' => $britishColumbia->id]);
        City::create(['name' => 'Surrey', 'state_id' => $britishColumbia->id]);
        City::create(['name' => 'Burnaby', 'state_id' => $britishColumbia->id]);
        City::create(['name' => 'Kelowna', 'state_id' => $britishColumbia->id]);

        // ** Country 5: United Kingdom **
        $uk = Country::create(['name' => 'United Kingdom']);

        // United Kingdom States and Cities
        $england = State::create(['name' => 'England', 'country_id' => $uk->id]);
        City::create(['name' => 'London', 'state_id' => $england->id]);
        City::create(['name' => 'Manchester', 'state_id' => $england->id]);
        City::create(['name' => 'Liverpool', 'state_id' => $england->id]);
        City::create(['name' => 'Birmingham', 'state_id' => $england->id]);
        City::create(['name' => 'Leeds', 'state_id' => $england->id]);

        $scotland = State::create(['name' => 'Scotland', 'country_id' => $uk->id]);
        City::create(['name' => 'Edinburgh', 'state_id' => $scotland->id]);
        City::create(['name' => 'Glasgow', 'state_id' => $scotland->id]);
        City::create(['name' => 'Aberdeen', 'state_id' => $scotland->id]);
        City::create(['name' => 'Dundee', 'state_id' => $scotland->id]);
        City::create(['name' => 'Inverness', 'state_id' => $scotland->id]);
    }
}
