<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hub extends Model
{
    //

    public static function GetHubList()
    {
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

    public static function GetHubCatalog()
    {
        $data = [
            [
                'id' => 1,
                'name' => 'Adheivie and sealants',
                'img' => 'https://subscription-public.s3.us-west-2.amazonaws.com/static-assets/A%26S/adhesive_latest.png',
                'report_count' => 3,
                'purchases_count' => 0,
                'slug' => 'adhesives-and-sealants'
            ],
            [
                'id' => 2,
                'name' => 'meats and meat subsitibude  ',
                'img' => 'https://subscription-public.s3.us-west-2.amazonaws.com/static-assets/Meat/meat_latest.png',
                'report_count' => 71,
                'purchases_count' => 0,
                'slug' => 'meats-and-meat'

            ],

            [
                'id' => 3,
                'name' => 'feeds additive',
                'img' => 'https://subscription-public.s3.us-west-2.amazonaws.com/static-assets/feed-additive/feed_additive_latest.png',
                'report_count' => 70,
                'purchases_count' => 0,
                'slug' => 'feed-additive',
            ],


            [
                'id' => 4,
                'name' => 'seeds',
                'img' => 'https://subscription-public.s3.us-west-2.amazonaws.com/static-assets/Seeds/27.png',
                'report_count' => 70,
                'purchases_count' => 3,
                'slug' => 'seeds',

            ],

            [
                'id' => 5,
                'name' => 'Crop protection chemical',
                'img' => 'https://subscription-public.s3.us-west-2.amazonaws.com/static-assets/crop-protection/cpc_latest.png',
                'report_count' => 70,
                'purchases_count' => 2,
                'slug' => 'crop-protection',

            ],

        ];

        return $data;
    }


    public static function GetHubReport()
    {
        $slug = request()->slug;
        $name = Hub::GetNameBySlug($slug);
        $data = [
            [
                'id' => 1,
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
                'name' => 'ASIA-PACIFIC EVA ADHESIVES MARKET SIZE & SHARE ANALYSIS - GROWTH TRENDS & FORECASTS UP TO 2028',
                'hub' => $name,
                'publish_date' => '2024-11-07',
                'study_period' => '2017-2028',
                'format' => 'pdf,excel',
                'country_covered' => 'India,Saudia Arbai',
                'img' => 'https://s3.mordorintelligence.com/CP/logo_1707916753069.png',
            ]
        ];

        return $data;
    }

    public static function GetNameBySlug($slug)
    {
        return collect(self::GetHubCatalog())
            ->firstWhere('slug', $slug)['name'] ?? null;
    }


    public static function GetRegion()
    {
        $region = [
            '4' => 'All',
            '1' => 'Europse',
            '2' => 'North America',
            '3' => 'Middle East Africa ',
            '5' => 'Asia-Pacific',
            '6' => 'South america'
        ];
        return $region;
    }

    public static function GetCountry()
    {
        $country = [
            '1' => 'India',
            '2' => 'Austriala',
            '3' => "Newzeland"
        ];
        return $country;
    }


    public static function GetCompanyList() {
       
        $data = [
             ['id'=>1,
               'logo' => '', 
               'heading'=>'PPC Inderuius , INC', 
               'est' => '01-01-1990' ,
             ],
            ];

        return $data;

    }
}
