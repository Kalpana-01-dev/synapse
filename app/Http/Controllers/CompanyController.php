<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompanyController extends Controller
{
    //
    public function Companies(){
        
        $sidebarData = []; 

        return view('main.companies' ,compact('sidebarData'));
        
    }
}
