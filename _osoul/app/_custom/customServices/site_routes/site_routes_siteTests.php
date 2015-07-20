<?php 

	$routes_array = [
          "facebook-login"=>[
              "code"=>"facelogin",
              "logo"=>'facebook',
              "page_name"=>"FaceBook Login System",
              "page_title"=>"FaceBook Login System",
              "page_desc"=>"Testing FaceBook's SDK Login Feature",
              "page_img"=>"site-tests/facelogin.jpg",
              "keywords" => [],  
              "breadcrumbs"=>[
                                "Home"=>[
                                      'logo'=>'home',
                                      'site_routes_subs'=>"home_list",
                                      'link'=> url('/')
                                ],
                                "Projects"=>[
                                      'logo'=>'cogs',
                                      'site_routes_subs'=>"projects_list",
                                      'link'=> url('projects')
                                ],
              ],
              "link"=>url('site-tests/facelogin'),
          ],
          "facebook-tools"=>[
              "code"=>"facetools",
              "logo"=>'facebook-square',
              "page_name"=>"FaceBook SDK Testing",
              "page_title"=>"FaceBook SDK Testing",
              "page_desc"=>"Testing FaceBook's SDK Features",
              "page_img"=>"site-tests/facebook.jpg",
              "keywords" => [],  
              "breadcrumbs"=>[
                                "Home"=>[
                                      'logo'=>'home',
                                      'site_routes_subs'=>"home_list",
                                      'link'=> url('/')
                                ],
                                "Projects"=>[
                                      'logo'=>'cogs',
                                      'site_routes_subs'=>"projects_list",
                                      'link'=> url('projects')
                                ],
              ],
              "link"=>url('site-tests/facetools'),
          ],                                             
          "twitter"=>[
              "code"=>"twitter",
              "logo"=>'twitter',
              "page_name"=>"Twitter Developer Tool",
              "page_title"=>"Twitter Developer Tool",
              "page_desc"=>"Connect to twitter in different ways",
              "page_img"=>"site-tests/twitter.jpg",
              "keywords" => [],  
              "breadcrumbs"=>[
                                "Home"=>[
                                      'logo'=>'home',
                                      'site_routes_subs'=>"home_list",
                                      'link'=> url('/')
                                ],
                                "Projects"=>[
                                      'logo'=>'cogs',
                                      'site_routes_subs'=>"projects_list",
                                      'link'=> url('projects')
                                ],
              ],
              "link"=>url('site-tests/twitter'),
          ],
          "google-plus"=>[
              "code"=>"google-plus",
              "logo"=>'google-plus',
              "page_name"=>"Google+ Interactions",
              "page_title"=>"Google+ Interactions",
              "page_desc"=>"Tests Google+ Interactions",
              "page_img"=>"site-tests/google.jpg",
              "keywords" => [],  
              "breadcrumbs"=>[
                                "Home"=>[
                                      'logo'=>'home',
                                      'site_routes_subs'=>"home_list",
                                      'link'=> url('/')
                                ],
                                "Projects"=>[
                                      'logo'=>'cogs',
                                      'site_routes_subs'=>"projects_list",
                                      'link'=> url('projects')
                                ],
              ],
              "link"=>url('site-tests/google'),
          ],
          "currency"=>[
              "code"=>"currency",
              "logo"=>'dollar',
              "page_name"=>"Currency Rate Calculator",
              "page_title"=>"Currency Rate Calculator",
              "page_desc"=>"Calculates Currency Exchange Rates",
              "page_img"=>"site-tests/dollar.jpg",
              "keywords" => [],  
              "breadcrumbs"=>[
                                "Home"=>[
                                      'logo'=>'home',
                                      'site_routes_subs'=>"home_list",
                                      'link'=> url('/')
                                ],
                                "Projects"=>[
                                      'logo'=>'cogs',
                                      'site_routes_subs'=>"projects_list",
                                      'link'=> url('projects')
                                ],
              ],
              "link"=>url('projects/currency'),
          ],
          "discus"=>[
              "code"=>"disqus",
              "logo"=>'comments',
              "page_name"=>"Comments API",
              "page_title"=>"Comments API",
              "page_desc"=>"comments on any page you want",
              "page_img"=>"site-tests/disqus.jpg",
              "keywords" => [],  
              "breadcrumbs"=>[
                                "Home"=>[
                                      'logo'=>'home',
                                      'site_routes_subs'=>"home_list",
                                      'link'=> url('/')
                                ],
                                "Projects"=>[
                                      'logo'=>'cogs',
                                      'site_routes_subs'=>"projects_list",
                                      'link'=> url('projects')
                                ],
              ],
              "link"=>url('site-tests/comments'),
          ],
          "ip_location"=>[
              "code"=>"ip_location",
              "logo"=>'map-marker',
              "page_name"=>"Ip Location Recognition",
              "page_title"=>"Ip Location Recognition",
              "page_desc"=>"Determine some info about the client that depends on the client ip or any given ip",
              "page_img"=>"site-tests/ip.jpg",
              "keywords" => [],  
              "breadcrumbs"=>[
                                "Home"=>[
                                      'logo'=>'home',
                                      'site_routes_subs'=>"home_list",
                                      'link'=> url('/')
                                ],
                                "Projects"=>[
                                      'logo'=>'cogs',
                                      'site_routes_subs'=>"projects_list",
                                      'link'=> url('projects')
                                ],
              ],
              "link"=>url('site-tests/ip'),
          ],     
          "google_security_apis"=>[
              "code"=>"google_security_apis",
              "logo"=>'key',
              "page_name"=>"ReCaptcha & Email-Hide",
              "page_title"=>"ReCaptcha & Email-Hide",
              "page_desc"=>"Google Service : Views & validates a Recaptcha or email-with-a Recaptcha",
              "page_img"=>"site-tests/captcha.jpg",
              "keywords" => [],  
              "breadcrumbs"=>[
                                "Home"=>[
                                      'logo'=>'home',
                                      'site_routes_subs'=>"home_list",
                                      'link'=> url('/')
                                ],
                                "Projects"=>[
                                      'logo'=>'cogs',
                                      'site_routes_subs'=>"projects_list",
                                      'link'=> url('projects')
                                ],
              ],
              "link"=>url('site-tests/captcha'),
          ],       
          "time"=>[
              "code"=>"time",
              "logo"=>'clock-o',
              "page_name"=>"Time Api",
              "page_title"=>"Time Api",
              "page_desc"=>"To Know the current time in any country<br>",
              "page_img"=>"site-tests/time.jpg",
              "keywords" => [],  
              "breadcrumbs"=>[
                                "Home"=>[
                                      'logo'=>'home',
                                      'site_routes_subs'=>"home_list",
                                      'link'=> url('/')
                                ],
                                "Projects"=>[
                                      'logo'=>'cogs',
                                      'site_routes_subs'=>"projects_list",
                                      'link'=> url('projects')
                                ],
              ],
              "link"=>url('site-tests/time'),
          ],      
          "map_generator"=>[
              "code"=>"map",
              "logo"=>'file-image-o',
              "page_name"=>"Map Generator",
              "page_title"=>"Map Generator",
              "page_desc"=>"Generate A map that depends on the Latitude & Longitude that you provide the application with",
              "page_img"=>"site-tests/map.jpg",
              "keywords" => [],  
              "breadcrumbs"=>[
                                "Home"=>[
                                      'logo'=>'home',
                                      'site_routes_subs'=>"home_list",
                                      'link'=> url('/')
                                ],
                                "Projects"=>[
                                      'logo'=>'cogs',
                                      'site_routes_subs'=>"projects_list",
                                      'link'=> url('projects')
                                ],
              ],
              "link"=>url('site-tests/locator'),
          ],   
          "forcast"=>[
              "code"=>"forecast",
              "logo"=>'cloud',
              "page_name"=>"Weather Forecast Provider",
              "page_title"=>"Weather Forecast Provider",
              "page_desc"=>"Provide forecast for weather currently & in the neer feature, but still needs some refining",
              "page_img"=>"site-tests/weather.jpg",
              "keywords" => [],  
              "breadcrumbs"=>[
                                "Home"=>[
                                      'logo'=>'home',
                                      'site_routes_subs'=>"home_list",
                                      'link'=> url('/')
                                ],
                                "Projects"=>[
                                      'logo'=>'cogs',
                                      'site_routes_subs'=>"projects_list",
                                      'link'=> url('projects')
                                ],
              ],
              "link"=>url('site-tests/forecast'),
          ],
	];
