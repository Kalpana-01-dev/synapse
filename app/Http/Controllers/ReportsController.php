<?php

namespace App\Http\Controllers;

use App\Models\Reports;
use App\Models\Hub;



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
      
        $html = view('main.reports.contents' ,compact('data'))->render(); 
        return response()->json([
            'html' => $html, 
            'msg'=>'Found the data',
        ]);
    }

    public function ReportDashbord(){
         $data = Reports::GetDashboardData(); 
         $html = view('main.reports.dashboard' ,compact('data'))->render();
         return response()->json([
              'html' =>$html , 
              'msg' => 'Data found'
         ]);
    }

    public function ExecutionSummary(){
         $data = Reports::ExecutionSummary(); 
         $table = $data['table']; 
         $content = $data['content_data'];

         $html  = view('main.reports.execution_summary' ,compact('table' ,'content'))->render(); 
         return response()->json([
              'html' =>$html , 
              'msg' => 'Data found'
         ]);
    }

    public function ReportPdf(){
        $html = view('main.reports.report_pdf')->render(); 
          return response()->json([
              'html' =>$html , 
              'msg' => 'Data found'
         ]);
    }

    public function DataSheet(){
        $rows = Reports::DataSheet();
        $html = view('main.reports.report_datasheet' ,compact('rows'))->render();
         return response()->json([
              'html' =>$html , 
              'msg' => 'data found'
         ]);
    }
    
}
