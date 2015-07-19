<?php 

	$routes_array = [

"siteTests_index"=>[
	"logo"=>'',
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
	"logo"=>'play-circle-o',
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

"apis_index"=>[
	"logo"=>'',
	"page_title" => "APIs Index",
	"page_desc" => "",
	"page_img" => "api/apis.jpg",
	"keywords" => [],
	"breadcrumbs" => [
                        "Home"=>[
                              'logo'=>'home',
                              'site_routes_subs'=>"home_list",
                              'link'=> url('/')
                        ],
    ],
	"link"=>url('apis/index')
],

"hidden_index"=>[
	"logo"=> '',
	"page_title" => "",
	"page_desc" => "",
	"page_img" => "hidden/index.jpg",
	"keywords" => [],
	"breadcrumbs" => [
                        "Home"=>[
                              'logo'=>'home',
                              'site_routes_subs'=>"home_list",
                              'link'=> url('/')
                        ],
    ],
	"link"=>url('hidden')
],    
"regist"=>[
	"logo"=>'user',
	"page_name" => "نظام تسجيل دخول محدث",
	"page_title" => "Registration Area",
	"page_desc" => "This is a Highly effective Registration System ready to be implemented on any site.",
	"page_img" => "projects/register.jpg",
	"keywords" => [],  
	"breadcrumbs" => [
                        "Home"=>[
                              'logo'=>'home',
                              'site_routes_subs'=>"home_list",
                              'link'=> url('/')
                        ],
    ],
	"link" => route('regist'),
	"under_construction"=>true
],

	];

