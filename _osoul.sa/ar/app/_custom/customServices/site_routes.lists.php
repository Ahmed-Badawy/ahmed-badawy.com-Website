<?php 


	$home_list = [
		"Home"=>[	
                  "title"=>"Home",
			"logo"=>"home",
			"link"=>url('/')
		],
            "My Blog"=>[      
                  "title"=>"My Blog",
                  "logo"=>"wordpress",
                  "link"=>url('blog')
            ],
            "Contact Me"=>[   
                  "title"=>"Contact Me",
                  "logo"=>"user",
                  "link"=>url('contact')
            ],
            // "My C.V"=>[ 
            //       "title"=>"My C.V",
            //       "logo"=>"suitcase",
            //       "link"=>url('cv')
            // ],
            [      
                  "title"=>"Projects",
                  "logo"=>"cogs",
                  "link"=>url('projects')
            ],
            [      
                  "title"=>"Tests & APIs",
                  "logo"=>"magic",
                  "link"=>url('site-tests')
            ],            
	];

      
      $projects_list = get_routes_array(\sr::projects());
      $apis_list = get_routes_array(\sr::api());
      $games_list = get_routes_array(\sr::games());
