<?php


	$routes_array = [

"thumb-gene"=>[
      "code"=>"thumb-gene",
      "logo"=>'camera',
      "page_title"=>"Thumb Generator",
      "page_name"=>"مولد الصور المصغرة",
      "page_desc"=>"تحجيم الصور المختلفة. يصلح للتصغير أو التكبير. صمم خصيصا ليعمل كـ Thumb Generator API.",
      "page_img"=>"api/thumb.png",
      "keywords" => [],  
      "breadcrumbs"=>[
                        "Home"=>[
                              'logo'=>'home',
                              'site_routes_subs'=>"home_list",
                              'link'=> url('/')
                        ],
                        "api"=>[
                              'logo'=>'cogs',
                              'site_routes_subs'=>"apis_list",
                              'link'=> url('apis')
                        ],
      ],
      "link"=>url('api/thumb-view'),
],    

"captcha-gene"=>[
      "code"=>"captcha-gene",
      "logo"=>'minus-square',
      "page_title"=>"Captcha Generator",
      "page_name"=>"مولد صور الـ Captcha",
      "page_desc"=>"توليد جمل الكابتشا بالخطوط و الطرق المختلفة. يمتاز بسهولة إستخدامه و سرعته و مرونته فى توليد الأكود. تم تصميم API كامل لتوليد الأكواد لأى موقع على الويب.",
      "page_img"=>"api/captcha.png",
      "keywords" => [],  
      "breadcrumbs"=>[
                        "Home"=>[
                              'logo'=>'home',
                              'site_routes_subs'=>"home_list",
                              'link'=> url('/')
                        ],
                        "api"=>[
                              'logo'=>'cogs',
                              'site_routes_subs'=>"apis_list",
                              'link'=> url('apis')
                        ],
      ],
      "link"=>url('api/captcha-view'),
],   

"qr-gene"=>[
      "code"=>"qr-gene",
      "logo"=>'qrcode',
      "page_title"=>"QR Generator",
      "page_name"=>"مولد كود الـ QR",
      "page_desc"=>"يولد كود QR. يمتاز بسهولة إستخدامة و التحكم فيه. تم تصميم API كامل للتحكم بكيفية رسم الكود.",
      "page_img"=>"api/qr.png",
      "keywords" => [],  
      "breadcrumbs"=>[
                        "Home"=>[
                              'logo'=>'home',
                              'site_routes_subs'=>"home_list",
                              'link'=> url('/')
                        ],
                        "api"=>[
                              'logo'=>'cogs',
                              'site_routes_subs'=>"apis_list",
                              'link'=> url('apis')
                        ],
      ],
      "link"=>url('api/qr-gene-view'),
],

"upc-gene"=>[
      "code"=>"upc-gene",
      "logo"=>'barcode',
      "page_title"=>"BarCode Generator",
      "page_name"=>"مولد كود الـ UPC باركود",
      "page_desc"=>"تم تصميم API كامل ليعمل مولد لـأكواد الـ UPC/BarCode المختلفة بأنواعها.",
      "page_img"=>"api/upc.png",
      "keywords" => [],  
      "breadcrumbs"=>[
                        "Home"=>[
                              'logo'=>'home',
                              'site_routes_subs'=>"home_list",
                              'link'=> url('/')
                        ],
                        "api"=>[
                              'logo'=>'cogs',
                              'site_routes_subs'=>"apis_list",
                              'link'=> url('apis')
                        ],
      ],
      "link"=>url('api/upc-view'),
], 


 	];



