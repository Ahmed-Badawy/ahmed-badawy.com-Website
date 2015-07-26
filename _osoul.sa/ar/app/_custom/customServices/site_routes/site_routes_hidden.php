<?php 


        $routes_array = [
  "pornstars"=>[
      "code"=>"",
      "logo"=>fa2('cog',['size'=>0]),
      "page_name"=>"Pornstars Rate",
      "page_title"=>"Pornstars Rate",
      "page_desc"=>"Searchs for Pornstars",
      "page_img"=>"hidden/pornstars.jpg",
      "keywords" => [],  
      "breadcrumbs"=>[
                        "Home"=>[
                              'logo'=>'home',
                              'site_routes_subs'=>"home_list",
                              'link'=> url('/')
                        ],
                        "hidden"=>[
                              'logo'=>'cogs',
                              'link'=> url('projects')
                        ],
      ],      
      "link"=>url('hidden/pornstars'),
  ],      
  "inhertance_me"=>[
    "code"=>"inhertance",
      "logo"=>'',
      "page_name"=>"Inhertance Calculator",      
      "page_title"=>"حساب تقسيمة الميراث لى",
      "page_desc"=>"يحسب تقسيمة الميراث بالنسبة لى",
      "page_img"=>"projects/projects.jpg",
      "keywords" => [],  
      "breadcrumbs"=>[
                        "Home"=>[
                              'logo'=>'home',
                              'site_routes_subs'=>"home_list",
                              'link'=> url('/')
                        ],
                        "hidden"=>[
                              'logo'=>'cogs',
                              'link'=> url('projects')
                        ],
      ],      
      "link"=>url('hidden/inhertance/me'),
  ],  
            ];
