<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\fetch;


class FetchController extends Controller
{
    public function index()
    {
    $data = fetch::join('school', 'school.r_id', '=', 'principal.r_id')
              		->join('p_message', 'p_name.state_id', '=', 'state.state_id')
              		->get(['country.country_name', 'state.state_name', 'city.city_name']);

       	/*Above code will produce following query

        Select 
        	`country`.`country_name`, 
        	`state`.`state_name`, 
        	`city`.`city_name` 
        from `country` 
        inner join `state` 
        	on `state`.`country_id` = `country`.`country_id` 
        inner join `city` 
        	on `city`.`state_id` = `state`.`state_id`

        */

        return view('fetch-view', compact('data'));
    
    }
}
