<?php

namespace App\Http\Controllers;

use App\Models\Hub;
use Illuminate\Http\Request;

class HubController extends Controller
{
    //

    public function Hub(){
        if(request()->slug){
            return view('main.hub.hub_details');
        }

        $sidebarData = Hub::GetHubList(); 
        $hub_catalouge= Hub::GetHubCatalog();
        return view('main.hub' ,compact('sidebarData' , 'hub_catalouge'));
    }

    public function About(){
        
        $html = view('main.hub.about')->render(); 
        
        return response()->json([
            'html' => $html, 
            'msg'=>'Found the data',
        ]);
    }

    public function Report(){
        $hubReport = Hub::GetHubReport(); 
        $region = Hub::GetRegion(); 
        $country = Hub::GetCountry();

        $html = view('main.hub.report' ,compact('hubReport' ,'region' , 'country'))->render(); 
        
        return response()->json([
            'html' => $html, 
            'msg'=>'Found the data',
        ]);
    }

    public function Companies(){
        $companies = Hub::GetCompanyList();
        $html = view('main.hub.companies' ,compact('companies'))->render(); 
        return response()->json([
            'html' => $html, 
            'msg'=>'Found the data',
        ]); 
    }

}
