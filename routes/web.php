<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController; 
use App\Http\Controllers\HubController;
use App\Http\Controllers\ReportsController;
use App\Http\Controllers\CompanyController;
use Illuminate\Auth\Events\Logout;

Route::any('/' ,[AuthController::class , 'Login'])->name('login');
Route::post('login_user' ,[AuthController::class , 'LoginUser'])->name('login_user');

Route::any('/signup' ,[AuthController::class ,'Signup'])->name('signup');

Route::middleware('auth')->group(function(){
Route::any('hub/{slug?}' ,[HubController::class ,'Hub'])->name('hub');
Route::group(['prefix' => 'hub_details'], function () {
    Route::any('/about', [HubController::class, 'About'])->name('hub_details.about');
    Route::any('/report', [HubController::class, 'Report'])->name('hub_details.report');
    Route::post('/companies' ,[HubController::class , 'Companies'])->name('hub_details.companies'); 
});

Route::get('reports/{slug?}' ,[ReportsController::class ,'Reports'])->name('reports');
  Route::group(['prefix'=>'reports_details'] ,function(){
      Route::post('contents' , [ReportsController::class ,'ReportContents'])->name('report_details.contents');
      Route::post('dashboard' , [ReportsController::class ,'ReportDashbord'])->name('report_details.dashboard');
      Route::post('execution_summary' , [ReportsController::class ,'ExecutionSummary'])->name('report_details.execution_summary');
      Route::post('report_pdf' ,[ReportsController::class ,'ReportPdf'])->name('report_details.report_pdf');
      Route::post('data_sheet' ,[ReportsController::class ,'DataSheet'])->name('report_details.data_sheet');
  });

Route::get('companies' ,[CompanyController::class ,'Companies'])->name('companies');

Route::any('logout' ,[AuthController::class ,'Logout'])->name('logout'); 
});

Route::get('/test', function () {
    return view('welcome');
});


