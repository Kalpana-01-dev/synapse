<?php

namespace App\Http\Controllers;

use App\Models\Reports;
use Illuminate\Http\Request;

class ReportsController extends Controller
{
    //
    public function Reports(){
        $sidebarData = Reports::GetReports();
        return view('main.reports' ,compact('sidebarData'));
    }
}
