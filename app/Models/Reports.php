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
}
