<?php

namespace App\Http\Controllers;

use App\Models\Reports;
use App\Models\Hub;

use Illuminate\Http\Request;

class ReportsController extends Controller
{
    //
    public function Reports(){
        $slug = request()->slug; 
        if($slug){
               $data= Reports::GetReportDetails(); 
               return view('main.reports.details' ,compact('data'));
        }
        $region = Hub::GetRegion(); 
        $country = Hub::GetCountry(); 
        $reports = Reports::GetreportList(); 
        return view('main.reports' ,compact('region' ,'country' ,'reports'));
    }


    public function ReportContents(){
        $data = Reports::GetReportContents();
        return view('main.reports.contents' ,compact('data')); 
    }
    
}
