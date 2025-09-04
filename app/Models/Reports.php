<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Maatwebsite\Excel\Facades\Excel;


class Reports extends Model
{
    //

    public static function GetReports()
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


    public static function GetreportList()
    {
        $name = "Test name";
        $data = [
            [

                'id' => 1,
                'slug' => 'report-1',
                'name' => 'Japan Processed Meat Market',
                'hub' => 'Japan Processed Meat Market',
                'publish_date' => '2022-11-07',
                'study_period' => '2017-2028',
                'format' => 'pdf,excel',
                'country_covered' => 'India,Saudia Arbai',
                'img' => 'assets/img/main/partner_1.png',
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

        return $data;
    }


    public static function GetReportDetails()
    {
        $slug  = request()->slug;
        return collect(Reports::GetreportList())
            ->firstWhere('slug', $slug)['name'] ?? null;
    }

    public static function GetReportContents()
    {
        $content = [];

        if (request()->id == 'report-1') {
            $content = [
                [
                    'id' => 1,
                    'heading' => 'Introduction',
                    'content' => '
                     <ul>
                       <li>
                            Report Ocean provides a full scope of business intelligence solution for solving your toughest challenges. RO is an emerging global expert & pioneer in the
market research and provision of exclusive market INTEL. We optimize your decision making by equipping your industry with an accurate & better market
research according to the industry demands through our professionally designed qualitative & quantitative research methods
                       </li>

                       <li>
                          We believe in delivering strategic blueprint of success that will help our Clients to pave their paths of success. Industries we are catering to are as below: 

                          <img src="' .asset("assets/img/main/default/path.png") .'" alt="" srcset="">
                       </li>
                     </ul>
                    
                    '
                ],


                [
                    'id' => 2,
                    'heading' => 'SCOPE OF WORK',
                    'content' => '<div>
                         <p><strong> Market Taxonomy - Segmentation </strong> </p>
                          <ul> 
                           <li> <strong>By Meat Type</strong> </li>
                            <ul>
                                <li><strong>Poultry</strong></li>
                                 <ul>
                                    <li>Chicken</li>
                                    <li>Turkey</li>
                                    <li>Duck</li>
                                 </ul>
                                <li><strong>Pork</strong></li>
                                <li><strong>Beef</strong></li>
                                <li><strong>Others</strong></li>
                            </ul>
 
                           <li> <strong>By Product Type</strong> </li>
                             <ul>
                                <li> <strong>Cured</strong> </li>
                                <li> <strong>Dried</strong> </li>
                                <li> <strong>Fresh Processed</strong> </li>
                                <li> <strong>Precooked-Cooked</strong> </li>
                                <li> <strong>Raw Fermented Sausages</strong> </li>
                                <li> <strong>Raw Cooked</strong> </li>
                                <li> <strong>Others </strong> </li>
                             </ul>


                             <li> <strong>By Packaging Type</strong> </li>
                             <ul>
                                <li> <strong>By Packaging Type</strong> </li>
                                <li> <strong>Modified Atmosphere Packaging(MAP)</strong> </li>
                                <li> <strong>Canned Packaging</strong> </li>
                                <li> <strong>Plastic Wrappers/Foil</strong> </li>
                                <li> <strong>Tray Packs</strong> </li>
                                <li> <strong>Others</strong> </li>
                                
                             </ul>


                          </ul>

                            <p><strong> Market Taxonomy - Segmentation </strong> </p>
                             <ul> 
                                   <li> <strong>By End User</strong> </li>
                                   <ul>
                                   <li> <strong>  Household   </strong> </li>
                                    <li>  <strong> Foodservice Sector </strong> </li>
                                    <ul>
                                          <li>  Hotels, Restaurants, and Cafés (HoReCa) </li>
                                            <li> Catering Services </li>
                                    </ul>

                                   <li> <strong>   Institutional Buyers  </li> </strong> 
                                   <li> <strong>   Others  </li> </strong> 
                                    </ul>



                                      <li> <strong>By Distribution Channel</strong> </li>
                                   <ul>
                                   <li> <strong> Online   </strong> </li>
                                        <ul>
                                                <li>eMarketplaces</li>
                                                <li> Company websites </li>
                                        </ul>
                                        <li> <strong> Offline   </strong> </li>
                                        <ul>
                                                 <li> Supermarkets/Hypermarkets </li>
                                                 <li> Convenience Stores  </li>
                                        </ul>

                                    </ul>


                                       <li> <strong>By Region</strong> </li>
                                   <ul>
                                        <li> <strong> Hokkaido  </strong> </li>
                                        <li> <strong> Honshu  </strong> </li>
                                        <li> <strong> Shikoku  </strong> </li>
                                        <li> <strong> Kyushu  </strong> </li>
                                        <li> <strong> Rest of Japan  </strong> </li>
                                    
                                    </ul>

                            </ul>
                         </div>'
                ],



                [
                    'id' => 3,
                    'heading' => 'Research Objective & Definition',
                    'content' => '<div>
                                <p> 
                                Years Considered for the
                                Report:
                                Historic Year: 2020-2023
                                Base Year: 2024
                                Forecast Period: 2025 – 2033
                                </p>
                                <p>To estimate, forecast and analyze opportunity for Processed Meat Market round
                                the country.</p>
                                <p>To understand shift in consumer demand for Product and impact of country
                                companies expanding their operations in the Region, based on segmentations
                                covered in the scope- By Meat Type, Product Type, Packaging Type, End
                                User and Distribution Channel.</p>
                                <p>
                                To analyze the competitive landscape in the region based on business
                                profiles, their strategies, and game-changing developments such as
                                collaborations, mergers and acquisitions, so on.
                                                            </p>
                                                            <p>
                                                                To strategically profile the key players and comprehensively analyze their
                                market shares along with detailing the competitive landscape.
                                 To analyze strategic developments such as joint ventures, mergers and
                                acquisitions, new product developments, and R&D in the market.
                                                            </p>

                                                            <p>
                                                             Market Definition: Scope of the report takes into consideration revenue generated through sales of Processed Meat Market across the country. It
                                provides an estimate for the same in terms of US$ Mn & Tons. Market revenue is calculated based on average prices. The market study includes indepth regional analysis to understand the overall market scenario.

                                                            </p>
                                                        </div>'
                ],

                [
                    'id' => 4 , 
                     'heading' => 'Research Framework', 
                     'content' => '<div>
                      <h3>SYSTEMATIC RESEARCH APPROACH </h3>
                       <ol>
                          <li> Market Profiling:  <span> In-depth secondary research is used to
                            arrive at overall market size, top industry
                            players, top products, industry
                            associations, etc </span>  
                          </li>

                          <li>
                             Formulating Discussion Guide : <span>  Formulatesa detailed discussion guide in order to conduct expert and industryinterviews </span>
                          </li>


                           <li>
                             Developing List of Respondents : <span>  List of industry players (manufacturers), distributors, retailers, and industry experts </span>
                          </li>

                           <li>
                            Data Collection : <span> Conducts interviews with industry experts, industry players, distributors, and retailers </span>
                          </li>

                           <li>
                            Data Validation : <span> Data is validated by triangulation method,wherein primary, secondary, and ’sanalysis contribute to the final data</span>
                          </li>

                          <li>
                              Data Analysis : <span> The data is scrutinized using MS-Excel, to obtain qualitative and quantitative insights about the industry</span>
                          </li>
                           <li>
                              Delivery : <span> Delivers industry insights and information in the required format(PDF) </span>
                          </li>

                       </ol>
                     
                     </div>'
                ],

                [
                   'id' => 5 , 
                    'heading' => 'Breakdown of Primary Research Respondents, By Region' , 
                    'content' => '<div>  
                      <img src="'.asset('assets/img/main/default/map.png').'" />
                    </div>'
                ],

                 [
                   'id' => 6 , 
                    'heading' => 'Breakdown of Primary Research Respondents – By Respondent Role in Supply Chain' , 
                    'content' => '<div>
                                <p><strong>Manufacture </strong></p>
                                <ul>
                                    <li>VerticalIntegration</li>
                                    <li>Forward Supply Chain(Distributors/Value resellers)</li>
                                    <li>Horizontal Integration</li>
                                    <li>Backward Supply Chain(Suppliers)</li>
                                </ul>
                                <div>                      
                                        <table>
                                        <tr>
                                            <th>Backward Supply Chain(Suppliers)</th>
                                            <th>Horizontal Integration</th>
                                            <th>Forward Supply Chain(Distributors/ Value resellers/End-users)</th>
                                            <th>Vertical Integration</th>
                                            <th>Industry</th>
                                        </tr>
                                        <tr>
                                            <td>35%</td>
                                            <td>5%</td>
                                            <td>41%</td>
                                            <td>7%%</td>
                                            <td>12%</td>
                                        </tr>
                                        </table>
                                </div>
                            </div>'
                 ],



                   [
                   'id' => 7 , 
                    'heading' => 'Breakdown of Primary Research Respondents – By Designation' , 
                    'content' => '<div>
                               
                                <ul>
                                    <li>CXOs/VP/Directors</li>
                                    <li>Product Managers/ Research Heads/Sales Managers/ Zonal Managers </li>
                                    <li>Industry Experts/ Technology Enthusiasts/ Academicians</li>
                                    <li>Customers/ Distributors/ Value Resellers</li>
                                </ul>
                               
                            </div>'
                 ],


                       [
                        'id' => 8 , 
                            'heading' => 'Quantitative Research' , 
                            'content' => '<div>  
                                        <h3>PRIMARY RESEARCH</h3>
                                        <p>
                                        Extensive primary research was
                                        conducted to gain a deeper insight into
                                        the market and industry performance. For
                                        this report, we have conducted primary
                                        surveys (interviews) with the key level
                                        executives (VPs, CEOs, marketing
                                        directors, and business development
                                        managers, among others) of the major
                                        players across ecosystem, active in the
                                        market. In addition to analyzing the
                                        current and historical trends, our analysts
                                        predict where the market is headed in the
                                        next eight years
                                        </p>
                                        <ul>
                                            <strong> List of sources include:</strong>
                                            <li>SC Foods Co.,Ltd</li>
                                            <li>Prima Meat Packers, Ltd .</li>
                                            <li>Starzen Co., Ltd .</li>
                                            <li>Ito-Yokado Co., Ltd .</li>
                                        </ul>
                              </div>'
                       ],

                      [
                         'id'  => 9 , 
                         'heading' => 'SECONDARY RESEARCH', 
                         'content' => '<div>
                        <p> Secondary research was mainly used to
                        collect and identify information useful for
                        an extensive, technical, market-oriented,
                        and commercial study of the Japan
                        Processed Meat Market . It was also
                        used to obtain key information about
                        major players, market classification and
                        segmentation according to industry
                        trends, and developments related to the
                        market and Product. For this study,
                        analysts have gathered information from
                        various credible sources such as annual
                        reports, SEC filings, journals, white
                        papers, corporate presentations,  company websites, international organizations, and paid databases.
                        </p>
                        <strong>List of major sources include:</strong>
                        <ul>
                            <li>Company PR</li>
                            <li>White paper</li>
                            <li>Secondary domains</li>
                            <li>News Articles</li>
                            <li>Industry experts</li>
                            <li>Relevant consultants</li>
                            <li>OEC</li>
                             <li>Treding Economics</li>
                        </ul>
                         
                         </div>'
                      ],

                      [
                        'id' => 10 , 
                        'heading' => 'Vendor Screening', 
                        'content' => '<div>
                            <p>Key Vendors </p>
                             <ul>
                                <li>Itoham Foods Inc.</li>
                                <li>NH Foods Ltd. (Nippon Ham)</li>
                                <li>Nichirei Corporation</li>
                                <li>Prima Meat Packers</li>
                             </ul>
                             <p>Vendor PortfolioAnalysis</p> 
                               <ul>
                                <li>Products and Services offering</li>
                                <li>AnnualTurnover</li>
                             </ul>
                             <p>Market Share (%) of Key Vendors </p>
                               <ul>
                                <li>Key vendors comprising 61.73% of total Processed Meat Market </li>
                             </ul>

                             <p>Total Market Size</p>
                               <ul>
                                <li>Total Market= 67.3% of key vendors+ 38.27% of other/remainingvendors</li>
                             </ul>
                          </div>'
                      ], 

                    [
                        'id' => 10 , 
                        'heading' => 'Assumption for the Study', 
                          'content' => '<div>
                                <p><strong>Currency Value</strong> : All the forecasts are done with the revenue and
                                    volume (users) calculated under the standard
                                    assumption that the globally accepted currency -
                                    the U.S. Dollar`s value remains constant over the
                                    next six years. 
                                </p>


                               <p><strong>Niche Market Segments</strong> : 
                                    For niche market segments where accurate data of the respective timeline
                                    was not available, the data was calculated using trend line analysis. In
                                    some instances, where mathematical and statistical models could not be
                                    applied to arrive at the number, generalizations of specific related trends
                                    to that market were done.
                                </p>

                                <p><strong>Exchange Rates & Currency</strong> : For conversion of various currencies to USD, average
                                    historical exchange rates were used according to the year
                                    specified. For all historical and current exchange rates
                                    required for calculations & currency conversions - OANDA -
                                    website was used in this research study.
                                </p>

                                <p><strong>Qualitative Analysis</strong> : 
                                        The qualitative analysis done from the quantitative data
                                        arrived at is solely based on the understanding of the
                                        market and its trends by the team of experts involved in
                                        making this report.
                                </p>

                          </div>'
                    ], 

                    [
                        'id' => 11, 
                        'heading' => 'Market Size Estimation', 
                        'content' => '<ul>
                         <li>  Both the top-down and bottom-up approaches were used to estimate and validate the size of the market and to estimate the size of various other dependent sub-markets of the overall Japan Processed Meat Market.
                         </li>
                         <li>
                            Both the top-down and bottom-up approaches were used to estimate and validate the size of the market and to
                             estimate the size of various other dependent sub-markets of the overall Japan Processed Meat Market.
                         </li>

                         <li>
                            This data has been consolidated and detailed inputs and analysis is added before being presented in this report. The
                            following figure shows an illustrative representation of the overall market size estimation process employed for the
                            purpose of this study.
                         </li>
                        </ul>'
                    ], 
                    [
                        'id' =>12 , 
                        'heading' => 'Data Triangulation', 
                        'content' => '<div><ul>
                          <li>MARKET BREAKDOWN & DATA TRIANGULATION </li>
                          <li>Data triangulation technique was used to showcase the process of using data from two or more sources. The approach was used to validate the data sets and information that were useful in the overall analysis and create actionable insights.</li> 
                           </ul>
                           <img  src="'.asset('assets/img/main/default/methodlogy.png').'"  >
                        </div>'
                    ], 
                
            ];
        }
        return $content;
    }

    public static function GetDashboardData()
    {
        $data = [
            [
                'title' => 'Sports Apparel Market (Specialty Stores, 2019-2029)',
                'type' => 'bar', // chart type
                'data' => [
                    ['year' => 2019, 'value' => 109.96],
                    ['year' => 2020, 'value' => 93.78],
                    ['year' => 2021, 'value' => 113.58],
                    ['year' => 2022, 'value' => 127.26],
                    ['year' => 2023, 'value' => 138.67],
                    ['year' => 2024, 'value' => 150.36],
                    ['year' => 2029, 'value' => 209.15],
                ]
            ],
            [
                'title' => 'Sports Apparel Market (Men, 2019-2029)',
                'type' => 'pie', // chart type
                'data' => [
                    ['year' => 2019, 'value' => 109.75],
                    ['year' => 2020, 'value' => 96.91],
                    ['year' => 2021, 'value' => 112.24],
                    ['year' => 2022, 'value' => 125.14],
                    ['year' => 2023, 'value' => 135.69],
                    ['year' => 2024, 'value' => 146.39],
                    ['year' => 2029, 'value' => 198.57],
                ]
            ]
        ];

        return $data;
    }

    public static function ExecutionSummary()
    {
         $slug = request()->id ; 
         $table_data =[]; 
         $content = [];
        
        if($slug =='report-1'){
            $table_data = [
                [
                'metric' =>'By Meat Type', 
                'value' =>  '6.30%' , 
                'name' => 'Beef'

                ] , 

                [
                'metric' =>'Product Type', 
                'value' =>  '6.54%' , 
                'name' => 'Raw Cooked'
                ] , 

                [
                'metric' =>'Packaging', 
                'value' =>  '5.19%' , 
                'name' => 'Vacuum Packaging'
                ] , 

                [
                'metric' =>'End user', 
                'value' =>  '7.07%' , 
                'name' => 'Institutional Buyers'
                ] , 

                [
                'metric' =>'Distribution Channel', 
                'value' =>  '5.86%' , 
                'name' => 'Online'
                ] , 

                [
                'metric' =>'Region', 
                'value' =>  '5.77%' , 
                'name' => 'Honshu'
                ] , 


            ];

            $content = [
                    [
                        'id' => 1, 
                        'heading' => 'Executive Summary – Market Dynamics', 
                        'content' => '<div>
                         <h3>Growth factor</h3>
                           <ul>
                              <li>
                                <strong>Urban Lifestyles and Busy Consumers Fueling Demand for Ready-to-Cook/Eat Meat Items :</strong>
                                        In Japan, the rise of urban lifestyles and an increasingly busy
                                        consumer base are major forces driving the demand for ready-to-cook
                                        and ready-to-eat processed meat products. With more dual-income
                                        households and fast-paced city living, especially in metropolitan hubs
                                        like Tokyo and Osaka, consumers have less time for traditional cooking
                                        and seek convenient meal solutions. Processed meats such as
                                        sausages, sliced ham, and pre-packaged deli items offer quick,
                                        protein-rich options that fit into hectic daily routines. This growing
                                        preference aligns with modern consumption habits where speed and
                                        ease of preparation are highly valued, making processed meat
                                        products a staple for on-the-go meals and quick dining occasions
                                        across Japan.
                              </li>

                              <li>
                                 <strong>Convenience Retail Ecosystem Amplifying Demand  :</strong>
                                Japan’s sophisticated convenience retail ecosystem plays a pivotal role in
                                amplifying demand for processed meat products. Convenience stores
                                (konbini), supermarkets, and specialty food outlets are ubiquitous and
                                continuously innovate to meet consumer needs with a wide variety of highquality, ready-to-eat meat offerings. These retail channels focus on product freshness, packaging innovations, and seasonal selections, making processed
                                meats easily accessible and appealing to consumers nationwide. The
                                convenience store culture, in particular, supports frequent, small purchases
                                and meal solutions, thereby fostering consistent demand growth in the
                                processed meat sector. This well-established retail infrastructure effectively
                                bridges consumer lifestyle changes with product availability, significantly
                                fueling market expansion in Japan.
                              </li>
                           </ul>

                            <h3>Restraining factor</h3>
                           <ul>
                              <li>
                                <strong>Rising Health Consciousness and Growing Aversion Toward Processed Meat Consumption :</strong>
                                Despite strong demand, Japan’s processed meat market faces increasing challenges from a rising tide of health consciousness among consumers. Japanese
                                consumers are becoming more aware of the potential health risks linked to excessive consumption of processed meats, such as concerns over sodium content,
                                preservatives, and links to lifestyle diseases. This growing aversion is partly driven by public health campaigns, media coverage, and an aging population that
                                prioritizes balanced diets and clean eating habits. Furthermore, younger generations are showing a marked preference for fresh, natural foods and plant-based
                                alternatives, perceiving processed meats as less healthy and more artificial. This shift in attitude has pressured manufacturers to reformulate products by
                                reducing additives, fat, and salt while offering healthier alternatives such as low-fat or additive-free processed meats.
                              </li>
                           </ul>

                           
                          </div>'
                    ],
                    [
                       'id' => 2 , 
                        'heading' => 'Industry Value Chain Analysis', 
                        'content' => '<div>
                                        <div>
                                           <p><strong>Raw Material Sourcing </strong> </p>
                                            <ul>
                                                <li> 
                                                        <strong>Description:</strong>
                                                        This foundational stage involves the
                                                        procurement of livestock such as pork, beef,
                                                        poultry, and mutton. Japan maintains strict
                                                        standards for animal health and traceability.
                                                        While domestic farms supply a portion of the
                                                        demand, Japan heavily relies on imports from
                                                        countries like the U.S., Australia, and Brazil to
                                                        ensure consistent supply and quality.
                                                        Sustainability and ethical sourcing are becoming
                                                        increasingly important in procurement
                                                        decisions  
                                                </li>
                                                <li>
                                                <strong>Key Players::</strong>
                                                </li>
                                                <li>
                                                <strong> NH Foods Ltd :</strong>
                                                – Japan’s largest meat producer
                                                and importer, with a strong global sourcing
                                                network
                                                </li>
                                                <li>
                                                <strong>Itoham Foods Inc.</strong> – Operates integrated farms
                                                and sourcing operations
                                                </li>
                                                <li>
                                                <strong> Marudai Food Co. </strong> – Focuses on domestic
                                                livestock and quality control
                                                </li>

                                                </ul>
                                            </div>

                                            <div>
                                           <p><strong>Primary Processing</strong> </p>
                                            <ul>
                                                <li> 
                                                        <strong>Description:</strong>
                                                At this stage, raw meat undergoes slaughtering,
                                                    deboning, trimming, and initial preservation.
                                                    Hygiene and food safety are paramount, with
                                                    increasing automation to reduce human contact
                                                    and contamination risks. Advanced chilling and
                                                    freezing technologies are used to maintain
                                                    freshness and prevent spoilage. Traceability
                                                    systems are integrated to monitor meat origin
                                                    and handling, ensuring transparency, regulatory
                                                    compliance, and swift recall in case of
                                                    contamination or quality issues across the
                                                    supply chain.
  
                                                </li>
                                                <li>
                                                <strong>Key Players::</strong>
                                                </li>
                                                <li>
                                                <strong> Nichirei Foods :</strong>
                                                 Known for its advanced freezing and preservation technologies
                                                </li>
                                                <li>
                                                <strong>Prima Meat Packers.</strong> – – Specializes in pork and beef processing at scale
                                                </li>
                                                <li>
                                                <strong> Marudai Food Co. </strong> – Brings international expertise in automated meat processing
                                                </li>

                                                </ul>
                                            </div>

                                            
                                        <div>
                                           <p><strong>Secondary Processing</strong> </p>
                                            <ul>
                                                <li> 
                                                        <strong>Description:</strong>This is the value-adding stage where meat is
                                                            transformed into consumer-ready products.
                                                            Techniques include curing, smoking, fermenting,
                                                            cooking, and seasoning. Products are tailored to
                                                            Japanese tastes, with a focus on umami-rich
                                                            flavors and health-conscious formulations. This
                                                            stage also includes the integration of additives
                                                            for shelf life extension, flavor enhancement, and
                                                            improved product texture and consistency.
                                                </li>
                                                <li>
                                                <strong>Key Players:</strong>
                                                </li>
                                                <li>
                                                <strong> Johnsonville Japan –</strong>
                                                   Offers premium sausages and smoked meats
                                                </li>
                                                <li>
                                                <strong>Ajinomoto Co., Inc..</strong> – – Specializes in pork and beef processing at scale
                                                </li>
                                                <li>
                                                <strong> Marudai Food Co. </strong> – – Integrates flavor science and seasoning technologies
                                                </li>

                                                </ul>
                                            </div>

                                             <div>
                                           <p><strong>Packaging & Logistics</strong> </p>
                                            <ul>
                                                <li> 
                                                        <strong>Description:</strong>Packaging plays a critical role in preserving
                                                            product quality, ensuring safety, and enhancing
                                                            shelf appeal. Technologies like vacuum sealing
                                                            and modified atmosphere packaging (MAP) are
                                                            widely used. Logistics involves cold chain
                                                            infrastructure to maintain temperature control
                                                            from factory to retail. Japan’s logistics sector is
                                                            highly efficient, with real-time tracking and
                                                            temperature monitoring systems.
                                                </li>
                                                <li>
                                                <strong>Key Players:</strong>
                                                </li>
                                                <li>
                                                <strong> JYamato Transport –</strong>
                                                   Leader in cold chain logistics and last-mile delivery
                                                </li>
                                            
                                                <li>
                                                <strong> Sagawa Express </strong> – Offers nationwide distribution with temperature-controlled fleets
                                                </li>

                                                </ul>
                                            </div>
                                     </div>'
                    ], 
                 
                 ];

        }


        return ['table' => $table_data , 'content_data' =>$content];
    }

    public static function DataSheet()
    {

        return $data = [];
    }
}
