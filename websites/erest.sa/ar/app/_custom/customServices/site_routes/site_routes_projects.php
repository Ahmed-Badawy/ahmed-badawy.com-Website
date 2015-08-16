<?php


	$routes_array = [

//    "thumb-gene"=>self::api("thumb-gene"),
//    "captcha-gene"=>self::api("captcha-gene"),
//    "qr-gene"=>self::api("qr-gene"),
//    "upc-gene"=>self::api("upc-gene"),


   "selling-manager"=>self::selling_manager("new-invoice"),


        "dynamic_text"=>[
            "code"=>"dynamic_text",
            "logo"=>'text-height',
            "page_title"=>"Dynamic Text",
            "page_name"=>"التحكم النصى",
            "page_desc"=>"هى طريقة تسمح لك بالتلاعب بالصفحة دون الحاجة لأى GUI من أى نوع. وهى أسرع طريقة لتعديل نصوص المواقع أو الصفحات الخاصة بك.",
            "page_img"=>"projects/text.png",
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
            "link"=>route('dynamic'),
        ],


        "video_book"=>[
            "code"=>"video_book",
            "logo"=>'eye',
            "page_title"=>"Video Book Project",
            "page_name"=>"مشروع الكتاب المرئى",
            "page_desc"=>"هى فكرة لربط فيديو بنص للأغراض المختلفة مثلا(قصص أطفال - فيديوهات تعليمية - أفلام أنترنت مترجمة بعدة لغات)",
            "page_img"=>"projects/video-book.jpg",
            "keywords" => ["الكتاب المرئى","حكاوى مرئية","حكاية هارى بوتر"],
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
            "link"=>url('projects/video-book'),
        ],

        "quran"=>[
            "code"=>"quran",
            "logo"=>'file-text',
            "page_title"=>"Quran !",
            "page_name"=>"برنامج القرءان الكريم",
            "page_desc"=>"هى فكرة لربط صوت بنص لقرائة الكتب المختلفة. و عمل playlist لمجموعة من الصوتيات يتم تحميلها بشكل متوازى عبر الـ Ajax.
      الإستخدمات: عمل Playlist من مجموعة أغانى أو صوتيات تعليمية - أو قرائة كتاب ما بشكل صوتى",
             "page_img"=>"projects/quran.jpg",
//            "page_img"=>"projects/quran.jpg",
            "keywords" => ["القرءان الكريم"],
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
            "link"=>url('projects/quran'),
        ],



        "movies"=>[
            "code"=>"movies",
            "logo"=>'play-circle-o',
            "page_title"=>"Movies Indexer",
            "page_name"=>"قاموس أفلام الـ Box Office",
            "page_desc"=>"برنامج يحتوى على جميع بيانات أفلام البوكس أوفيس من عام 1980 إلى الآن. و يمكنك التصفية و الإختيار كما تريد.",
            "page_img"=>"projects/movies.jpg",
            "keywords" => ["برنامج الأفلام","أفلام البوكس أوفيس","عرض أفلام البوكس أوفيس","الممثلين و الممثلات","هوليوود"],
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
            "link"=>route('movies'),
        ],


        "actors"=>[
      "code"=>"actors",
      "logo"=>'star-o',
      "page_title"=>"Actors Rate",
      "page_name"=>"ترتيب الممثلين",
      "page_desc"=>"هو برنامج يمكنك من عرض بيانات و التصويت للممثلين أو الشخصيات المرغوب فيها. ويمكنك البحث عن شخصيات معينة.",
      "page_img"=>"projects/actorsrate.jpg",
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
      "link"=>url('projects/actors'),
],  

"socialite"=>[
      "code"=>"socialite",
      "logo"=>'sign-in',
      "page_title"=>"Remote Sign in",
      "page_name"=>"إثبات الشخصية (فيس-جوجل-تويتر)",
      "page_desc"=>"تطبيق لنظرية الـ Open-Id فى الدخول للمواقع عن طريق حسابات موحدة. تم التنفيذ بإستخدام (Google-Facebook-Twitter-Github)",
      "page_img"=>"projects/key.gif",
      "keywords" => ['دخول الانترنت','تواصل إجتماعى'],  
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
                        // "Remote Sign-In"=>[
                        //       'logo'=>$routes_array['socialite']['logo'],
                        // ],
      ],
      // "link"=>url('projects/r-s-in'),
      "link"=>url('spidro/login'),
],   



"book_reader"=>[
      "logo"=>'book',
      "page_title"=>"Book Reader",
      "page_name"=>"قارئ كتب الـ PDF",
      "page_desc"=>"هو عبارة عن تطبيق لـ كود الـ pdf.js لقراءة الكتب عبر الويب.",
      "page_img"=>"projects/pdf.png",
      "link"=>url('public/pdf/web/viewer.php?book_name=va7jUIrOhpuA.pdf'),
], 

"social-id"=>[
      "code"=>"social-id",
      "logo"=>'credit-card',
      "page_name"=>"تحليل بيانات البطاقة الشخصية",
      "page_title"=>"Social ID",
      "page_desc"=>"يحلل رقم البطاقة الشخصية لأى شخص للحصول على بعض البيانات عن هذا الشخص.",
      "page_img"=>"projects/social-id.jpg",
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
      "link"=>route('social-id'),
],


"favorite"=>[
      "code"=>"favorite",
      "logo"=>'heart',
      "page_name"=>"برنامج المواقع المفضلة",
      "page_title"=>"Favorite Sites",
      "page_desc"=>"يحفظ البرنامج المواقع المفضلة لك و يسجل عدد مرات دخولك إليها. ويرتب المفضلات لك حسب بياناتك و بيانات المستخدمين الآخرين للبرنامج.",
      "page_img"=>"projects/heart.jpg",
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
      "link"=>url('projects/favorite'),
      "under_construction"=>false      
], 


"todo"=>[
      "code"=>"todo",
      "logo"=>'check-square-o',
      "page_name"=>"برنامج قائمة المهام",
      "page_title"=>"Todo List Manager",
      "page_desc"=>"هذا البرنامج يسجل المهام المراد القيام بها. و يتيح لك التحكم بها بعد ذلك. يعمل كـ To-Do Manager.",
      "page_img"=>"projects/todo.png",
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
      "link"=>url('projects/todo'),
], 

"Movies_actors"=>[
      "code"=>"Movies_actors",
      "logo"=>'users',
      "page_title"=>"Box Office Actors",
      "page_name"=>"قاموس ممثلين أفلام الـ Box Office",
      "page_desc"=>"ملف به كثير من الممثلين و أفلاهم على مدى السنوات. ويمكنك أيضا البحث عنهم فى جوجل أو صورهم. وكذلك الربط بمواقع التواصل الإلكترونى المختلفة.",
      "page_img"=>"projects/actors.jpg",
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
      "link"=>route('movies')."#/actors",
],  


"countdown"=>[
      "code"=>"countdown",
      "logo"=>'clock-o',
      "page_name"=>"العد التننازلى",
      "page_title"=>"CountDown Generator",
      "page_desc"=>'برنامج يسمح لك يتسجيل تاريخ ثم يصنع عد تنازلى حتى هذا التاريخ. ويسمح لك بمشاركة أصدقائك هذا البرنامج.',
      "program_full_desc"=>"This is a program that Lets you choose a date for an event in your life then creates a countDown to this date.
                    also it enable you to share this Event-CountDown with your friends on social networks like facebook. هذا برنامج يسمح لك بإختيار تاريخ و موعد لحادث ما فى حياتك ثم يسمح لك بعمل صفحة عد تنازلى لهاذا الموعد. و يمكنك مشاركة صفحة العد التنازلى لأصدقائك على مختلف
                    الشبكات الإجتماعية مثل الفيسبوك.",
      "page_img"=>"projects/countdown.png",
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
      "link"=>route('countdown/index'),
      "under_construction"=>false
 ], 


"currency"=>[
      "code"=>"currency",
      "logo"=>'dollar',
      "page_name"=>"برنامج تحويل العملات",
      "page_title"=>"Currency Calculator",
      "page_desc"=>"برنامج يحسب التحويلات بين المعملات المختلفة.",
      "page_img"=>"projects/dollar.jpg",
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
      "link"=>route('currency'),
],


"currency-advanced"=>[
      "code"=>"currency-advanced",
      "logo"=>'money',
      "page_name"=>"برنامج تحويلات العملات المطور",
      "page_title"=>"Advanced Currency Calculator",
      "page_desc"=>"يحسب التحويلات بين العملات المختلفة. تطوير لبرنامج سابق.",
      "page_img"=>"projects/currency-advanced.jpg",
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
      "link"=>url('projects/currency-advanced'),
],


"postalcodes"=>[
      "code"=>"postalcodes",
      "logo"=>'search',
      "page_title"=>"Postal Codes Query",
      "page_name"=>"البحث عن كود البريد",
      "page_desc"=>"البحث عن أكواد البريد و بيانات مكاتب البريد فى مصر, وكذلك الأرقام البريدية لهم.
      يوضح لك بيانات مفصلة بجميع البيانات المتعلقة بمكاتب البريد المراد الإستفسار عنها.",
      "page_img"=>"projects/postal-offices.jpg",
      "keywords" => ["البريد المصرى","مكاتب البريد","أرقام البريد"],  
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
      "link"=>url('projects/postal#/postalcodes'),
], 


"postaloffices"=>[
      "code"=>"postaloffices",
      "logo"=>'search-plus',
      "page_title"=>"Postal Offices Query",
      "page_name"=>"البحث عن بيانات مكاتب البريد",
      "page_desc"=>"يبحث عن جميع بيانات و خواص مكاتب البريد بداخل مصر.",
      "page_img"=>"projects/postal-code.jpg",
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
      "link"=>url('projects/postal#/postaloffices'),
],  

"persentage"=>[
      "code"=>"persentage",
      "logo"=>'clock-o',
      "page_name"=>"حاسبة النسب",
      "page_title"=>"Persentage Caclulator",
      "page_desc"=>"عليك إدخال النسب و على البرنامج تقسيم المبالغ الواردة بعد ذلك. الإستخدامات(حالات الميراث - حلات المشاركات المالية) ",
      "page_img"=>"projects/persentage.jpg",
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
      "link"=>route('persentage'),
 ], 
 
"electricity"=>[
      "code"=>"electricity",
      "logo"=>'flash',
      "page_name"=>"حاسبة الإستهلاك الكهربائى",
      "page_title"=>"Electricity Consumption Caclulator",
      "page_desc"=>"برنامج لحساب السحب الكهربائى بالكيلو وات و تحديد كم الكهرباء المسحوبة و تكلفتها تبعا لآخر قرارات الوزارة.",
      "page_img"=>"projects/elec.jpg",
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
      "link"=>url('projects/electricity'),
], 

"water"=>[
      "code"=>"water",
      "logo"=>'coffee',
      "page_name"=>"حاسبة الإستهلاك المياه",
      "page_title"=>"Water Consumption Caclulator",
      "page_desc"=>"برنامج لحساب لإستهلاك المياه.",
      "page_img"=>"projects/water.jpg",
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
      "link"=>url('projects/water'),
],

"money-calc"=>[
      "code"=>"money-calc",
      "logo"=>'money',
      "page_name"=>"عداد النقود",
      "page_title"=>"Money Calculator",
      "page_desc"=>"برنامج يساعد على عد النقود. Helps You to count money using the number of papers in each currency value. ",
      "page_img"=>"projects/money-count.jpg",
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
      "link"=>route('money-calc'),
],   



"num-conv"=>[
      "code"=>"num-conv",
      "logo"=>'calculator',
      "page_name"=>"التحويلات بين الأنظمة الرقمية",
      "page_title"=>"Number Converters",
      "page_desc"=>"التحويل بين الأنظمة الرقمية المختلفة (العشرى-الثنائى-الثمانى-السداسى عشر).",
      "page_img"=>"projects/nums.jpg",
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
      "link"=>url('projects/converter#/number'),
],  


"conversions"=>[
      "code"=>"conversions",
      "logo"=>'cubes',
      "page_name"=>"حاسبة تحويلات الوحدات",
      "page_title"=>"Conversion Calculators",
      "page_desc"=>"تستخدم للتحويل بين الوحدات المختلفة.",
      "page_img"=>"projects/converter.png",
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
      "link"=>route('converter'),
], 



"books"=>[
      "code"=>"books",
      "logo"=>'book',
      "page_name"=>"نظام مشاركة الوثائق",
      "page_title"=>"Book Sharing System",
      "page_desc"=>"موقع لمشاركة الكتب مع أصدقائك - و قراءتها على الويب دون الحاجة تحميلها - و أيضا يساعدك على حفظ الكتب و الوثائق و تنظيمها.",
      "page_img"=>"projects/books.jpg",
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
      "link"=>route('books'),
      "under_construction"=>false      
], 



"oil"=>[
      "code"=>"oil",
      "logo"=>'car',
      "page_name"=>"برنامج حساب أسعار الوقود",
      "page_title"=>"Oil Calculator",
      "page_desc"=>"برنامج لحساب أسعار البنزين بعد الزيادة. أدخل الألتار يحسب الثمن - أو العكس. (بنزين 80 - 92 - 95 - سولار - غاز)",
      "page_img"=>"projects/oil.jpg",
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
      "link"=>route('oil'),
],


"bank"=>[
      "code"=>"bank",
      "logo"=>'bank',
      "page_name"=>"برنامج حساب أرباح البنوك",
      "page_title"=>"Banks Profit Calculator",
      "page_desc"=>"يحسب أرباح البنك - يشترط أن تدخل الفائدة الشهرية المتفق عليها مع البنك.",
      "page_img"=>"projects/bank.jpg",
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
      "link"=>route('bank'),
],                                                








"regist"=>self::common("regist"),

"domain"=>[
      "code"=>"domain",
      "logo"=>'italic',
      "page_name"=>"البحث عن أسم دومين",
      "page_title"=>"Domain Name Search",
      "page_desc"=>"برنامج يساعدك على البحث عن أسم الدومين",
      "page_img"=>"projects/domain.jpg",
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
      "link"=>url('projects/domain'),
      "under_construction"=>true      
],

"site-thumbnail"=>[
      "code"=>"site-thumbnail",
      "logo"=>'image',
      "page_name"=>"برنامج تصوير المواقع",
      "page_title"=>"Site Thumbnail Generator",
      "page_desc"=>"برنامج مهمته تصوير المواقع التى ترغب بها.",
      "page_img"=>"projects/thumbnail.png",
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
      "link"=>url('projects/site-thumbnail'),
      "under_construction"=>true      
],   


// "dictionary"=>[
//       "code"=>"books",
//       "logo"=>'ticket',
//       "page_name"=>"برنامج القاموس",
//       "page_title"=>"Dictionary",
//       "page_desc"=>"",
//       "page_img"=>"projects/dic.jpg",
//       "keywords" => [],  
//       "breadcrumbs"=>[
//                         "Home"=>[
//                               'logo'=>'home',
//                               'site_routes_subs'=>"home_list",
//                               'link'=> url('/')
//                         ],
//                         "Projects"=>[
//                               'logo'=>'cogs',
//                               'site_routes_subs'=>"projects_list",
//                               'link'=> url('projects')
//                         ],
//       ],
//       "link"=>route('books'),
//       "under_construction"=>true      
// ], 
// "recipes"=>[
//       "code"=>"books",
//       "logo"=>'spoon',
//       "page_name"=>"نظام مشاركة الوصفات",
//       "page_title"=>"Recipes Sharing System",
//       "page_desc"=>"",
//       "page_img"=>"projects/recipes.jpg",
//       "keywords" => [],  
//       "breadcrumbs"=>[
//                         "Home"=>[
//                               'logo'=>'home',
//                               'site_routes_subs'=>"home_list",
//                               'link'=> url('/')
//                         ],
//                         "Projects"=>[
//                               'logo'=>'cogs',
//                               'site_routes_subs'=>"projects_list",
//                               'link'=> url('projects')
//                         ],
//       ],
//       "link"=>route('books'),
//       "under_construction"=>true      
// ],

 	];



