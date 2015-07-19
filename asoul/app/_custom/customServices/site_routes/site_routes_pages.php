<?php 



    $routes_array = [
        "home"=>[
          "logo"=>'home',
          'page_title'=>'Home',
          'page_desc'=>"Ahmed Badawy WebSite Home Page, Here i put all my work.",
          'page_img' => "site/logo.jpg",
          'keywords'=>[],
          "breadcrumbs" => [
                        "Home"=>[
                              'logo'=>'home',
                              'site_routes_subs'=>"home_list",
                              'link'=> url('/')
                        ],
        ],
          "link"=>url('/')
        ], 

        "cv"=>[
          "logo" => 'user',
          "page_name" => "My Personal C.V",
          "page_title" => "My C.V",
          "page_desc" => "Ahmed Badawy C.V : Professional Developer",
          "page_img" => "private-photos/me.jpg",
          "keywords" => [],      
          "breadcrumbs" => [
                        "Home"=>[
                              'logo'=>'home',
                              'site_routes_subs'=>"home_list",
                              'link'=> url('/')
                        ],
          ],
          "link" => url("cv"),
        ],

"siteTests_index"=>[
  "logo"=>fa2('',['size'=>0]),
  'page_title'=> 'Site Tests',
  'page_desc'=>"Just Testing Diffrent APIs & SDKs & Some of my Projects",
  'page_img' => "site-tests/google.jpg",
  "keywords" => [],
  "breadcrumbs" => [
                        "Home"=>[
                              'logo'=>'home',
                              'site_routes_subs'=>"home_list",
                              'link'=> url('/')
                        ],
    ],
  "link"=>url('site-tests')
],  

"projects_index"=>[
  "logo"=>fa2('play-circle-o',['size'=>0]),
  "page_title" => "Projects Index",
  "page_desc" => "See Some Of My Projects & ideas.",
  "page_img" => "projects/projects.jpg",
  "keywords" => [],
  "breadcrumbs" => [
                        "Home"=>[
                              'logo'=>'home',
                              'site_routes_subs'=>"home_list",
                              'link'=> url('/')
                        ],
    ],
  "link"=>url('projects/index')
],


        "contact"=>[
          "logo" => 'user',
          "page_name" => "Contact Me",
          "page_title" => "Contact",
          "page_desc" => "Contact Me through this page, Ahmed Badawy!",
          "page_img" => "private-photos/me.jpg",
          "keywords" => [],      
          "breadcrumbs" => [
                        "Home"=>[
                              'logo'=>'home',
                              'site_routes_subs'=>"home_list",
                              'link'=> url('/')
                        ],
        ],
          "link" => url("contact"),
        ],   

    ];
