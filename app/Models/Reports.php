<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reports extends Model
{
    //

    public static function GetReports(){
          $data = [
            [
                'id' => 1,
                'name' => 'Aerospace & Defense',
                'categories' => [
                    '1' => ['name' => 'Airport Operations', 'report_count' => '124'],
                    '2' => ['name' => 'Aviation', 'report_count' => '24'],
                    '3' => ['name' => 'Space', 'report_count' => '10'],
                ],
            ],

            [
                'id' => 2,
                'name' => 'Agriculture',
                'categories' => [
                    '1' => ['name' => 'Seeds', 'report_count' => '11'],
                    '2' => ['name' => 'Crop Protection', 'report_count' => '24'],
                    '3' => ['name' => 'Fertilizers', 'report_count' => '10'],
                ],
            ],

            [
                'id' => 3,
                'name' => 'Animal Nutrition & Wellness',
                'categories' => [
                    '1' => ['name' => 'Compound Feed', 'report_count' => '336'],
                    '2' => ['name' => 'Feed Additives', 'report_count' => '100'],
                    '3' => ['name' => 'Pet Care', 'report_count' => '10'],
                ],
            ],

            [
                'id' => 4,
                'name' => 'Animal Nutrition & Wellness',
                'categories' => [
                    '1' => ['name' => 'Compound Feed', 'report_count' => '336'],
                    '2' => ['name' => 'Feed Additives', 'report_count' => '100'],
                    '3' => ['name' => 'Pet Care', 'report_count' => '10'],
                ],
            ],

            [
                'id' => 5,
                'name' => 'Automotive',
                'categories' => [
                    '1' => ['name' => 'Vehicles', 'report_count' => '336'],
                    '2' => ['name' => 'Auto Parts', 'report_count' => '100'],

                ],
            ]



        ];
        return $data;
    }


    public static function GetreportList(){
        $name= "Test name"; 
           $data = [
            [

                'id' => 1,
                'slug' => 'report-1',
                'name' => 'SAUDI ARABIA SEALANTS MARKET SIZE & SHARE ANALYSIS - GROWTH TRENDS & FORECASTS UP TO 2028',
                'hub' => $name,
                'publish_date' => '2022-11-07',
                'study_period' => '2017-2028',
                'format' => 'pdf,excel',
                'country_covered' => 'India,Saudia Arbai',
                'img' => 'https://s3.mordorintelligence.com/CP/logo_1707916753069.png',
            ],

            [
                'id' => 2,
                'slug' => 'report-2',
                'name' => 'SAUDI ARABIA SEALANTS MARKET SIZE & SHARE ANALYSIS - GROWTH TRENDS & FORECASTS UP TO 2028',
                'hub' => $name,
                'publish_date' => '2022-11-07',
                'study_period' => '2017-2028',
                'format' => 'pdf,excel',
                'country_covered' => 'India,Saudia Arbai',
                'img' => 'https://s3.mordorintelligence.com/CP/logo_1707916753069.png',
            ],

            [
                'id' => 3,
                'slug' => 'report-3',
                'name' => 'SAUDI ARABIA SEALANTS MARKET SIZE & SHARE ANALYSIS - GROWTH TRENDS & FORECASTS UP TO 2028',
                'hub' => $name,
                'publish_date' => '2024-11-07',
                'study_period' => '2017-2028',
                'format' => 'pdf,excel',
                'country_covered' => 'India,Saudia Arbai',
                'img' => 'https://s3.mordorintelligence.com/CP/logo_1707916753069.png',
            ],

            [
                'id' => 4,
                'slug' => 'report-4',
                'name' => 'EVA ADHESIVES MARKET SIZE & SHARE ANALYSIS - GROWTH TRENDS & FORECASTS UP TO 2028',
                'hub' => $name,
                'publish_date' => '2024-11-07',
                'study_period' => '2017-2028',
                'format' => 'pdf,excel',
                'country_covered' => 'India,Saudia Arbai',
                'img' => 'https://s3.mordorintelligence.com/CP/logo_1707916753069.png',
            ],


            [
                'id' => 5,
                'slug' => 'report-5',
                'name' => 'ASIA-PACIFIC EVA ADHESIVES MARKET SIZE & SHARE ANALYSIS - GROWTH TRENDS & FORECASTS UP TO 2028',
                'hub' => $name,
                'publish_date' => '2024-11-07',
                'study_period' => '2017-2028',
                'format' => 'pdf,excel',
                'country_covered' => 'India,Saudia Arbai',
                'img' => 'https://s3.mordorintelligence.com/CP/logo_1707916753069.png',
            ]
        ];

        return $data ; 
    }


    public static function GetReportDetails(){
           $slug  = request()->slug; 
           return collect(Reports::GetreportList())
            ->firstWhere('slug', $slug)['name'] ?? null;
    }

    public static function GetReportContents(){
          $contents = []; 
          return $contents; 
    }
}
