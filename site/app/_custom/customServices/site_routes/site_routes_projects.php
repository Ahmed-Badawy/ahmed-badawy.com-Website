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
            "page_name"=>"Improved Text Editor",
            "page_name_ar"=>"التحكم النصى",
            "page_desc"=>"it's a new way to edit side texts without the familiar textarea box, It Uses contentEditable HTML 5 API & uses json cashes in the backend.",
            "page_desc_ar"=>"هى طريقة تسمح لك بالتلاعب بالصفحة دون الحاجة لأى GUI من أى نوع. وهى أسرع طريقة لتعديل نصوص المواقع أو الصفحات الخاصة بك.",
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
            "page_name"=>"Visual Book",
            "page_name_ar"=>"مشروع الكتاب المرئى",
            "page_desc"=>"Bring books to life with a video & voice, also can be translated in multiple languages.",
            "page_desc_ar"=>"هى فكرة لربط فيديو بنص للأغراض المختلفة مثلا(قصص أطفال - فيديوهات تعليمية - أفلام أنترنت مترجمة بعدة لغات)",
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
            "page_name"=>"Holy Quran !",
            "page_name_ar"=>"برنامج القرءان الكريم",
            "page_desc"=>"it's an idea to read attach books to a voice, also can be used to view books in a different languages.",
            "page_desc_ar"=>"هى فكرة لربط صوت بنص لقرائة الكتب المختلفة. و عمل playlist لمجموعة من الصوتيات يتم تحميلها بشكل متوازى عبر الـ Ajax.
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
            "page_name"=>"Box Office Lister",
            "page_name_ar"=>"قاموس أفلام الـ Box Office",
            "page_desc"=>"An app that lists all BoxOffice movies from 1980 to know, it's based on a BoxOffice mojo ripper i developed earlier.",
            "page_desc_ar"=>"برنامج يحتوى على جميع بيانات أفلام البوكس أوفيس من عام 1980 إلى الآن. و يمكنك التصفية و الإختيار كما تريد.",
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
      "page_name"=>"Actors Rater",
      "page_name_ar"=>"ترتيب الممثلين",
      "page_desc"=>"simple rater that enables you to rate character or any other thing.",
      "page_desc_ar"=>"هو برنامج يمكنك من عرض بيانات و التصويت للممثلين أو الشخصيات المرغوب فيها. ويمكنك البحث عن شخصيات معينة.",
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
      "page_name"=>"Sign-In manager",
      "page_name_ar"=>"إثبات الشخصية (فيس-جوجل-تويتر)",
      "page_desc"=>"code to login using (facebook,google,twitter,github) written fully in PHP.",
      "page_desc_ar"=>"تطبيق لنظرية الـ Open-Id فى الدخول للمواقع عن طريق حسابات موحدة. تم التنفيذ بإستخدام (Google-Facebook-Twitter-Github)",
      "page_img"=>"projects/key.jpg",
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
      "page_name"=>"Online PDF Reader",
      "page_name_ar"=>"قارئ كتب الـ PDF",
      "page_desc"=>"reads pdf books online instead of downloading a pdf reader on your device.",
      "page_desc_ar"=>"هو عبارة عن تطبيق لـ كود الـ pdf.js لقراءة الكتب عبر الويب.",
      "page_img"=>"projects/pdf.png",
      "link"=>url('public/pdf/web/viewer.php?book_name=va7jUIrOhpuA.pdf'),
], 

"social-id"=>[
      "code"=>"social-id",
      "logo"=>'credit-card',
    "page_title"=>"Social ID",
    "page_name"=>"Egyption Social-ID Analyzer",
    "page_name_ar"=>"تحليل بيانات البطاقة الشخصية",
      "page_desc"=>"this will analyze the social id card number & extract data from it.",
      "page_desc_ar"=>"يحلل رقم البطاقة الشخصية لأى شخص للحصول على بعض البيانات عن هذا الشخص.",
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
      "page_name"=>"Favorite Websites",
      "page_name_ar"=>"برنامج المواقع المفضلة",
      "page_title"=>"Favorite Sites",
      "page_desc"=>"saves your favorite websites & there sub pages- & order them with number of access to them",
      "page_desc_ar"=>"يحفظ البرنامج المواقع المفضلة لك و يسجل عدد مرات دخولك إليها. ويرتب المفضلات لك حسب بياناتك و بيانات المستخدمين الآخرين للبرنامج.",
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
      "page_name"=>"ToDo List",
      "page_name_ar"=>"برنامج قائمة المهام",
      "page_title"=>"Todo List Manager",
      "page_desc"=>"A basic todo manager",
      "page_desc_ar"=>"هذا البرنامج يسجل المهام المراد القيام بها. و يتيح لك التحكم بها بعد ذلك. يعمل كـ To-Do Manager.",
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
      "page_name"=>"Actors Movies",
      "page_name_ar"=>"قاموس ممثلين أفلام الـ Box Office",
      "page_desc"=>"Lists actor's movies over the years",
      "page_desc_ar"=>"ملف به كثير من الممثلين و أفلاهم على مدى السنوات. ويمكنك أيضا البحث عنهم فى جوجل أو صورهم. وكذلك الربط بمواقع التواصل الإلكترونى المختلفة.",
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
      "page_name"=>"Count Down Manager",
      "page_name_ar"=>"العد التننازلى",
      "page_title"=>"CountDown Generator",
      "page_desc"=>'Save a countdown then allows you to share it with your friends',
      "page_desc_ar"=>'برنامج يسمح لك يتسجيل تاريخ ثم يصنع عد تنازلى حتى هذا التاريخ. ويسمح لك بمشاركة أصدقائك هذا البرنامج.',
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


        "conversions"=>[
            "code"=>"conversions",
            "logo"=>'cubes',
            "page_name"=>"Units Converter",
            "page_name_ar"=>"حاسبة تحويلات الوحدات",
            "page_title"=>"Conversion Calculators",
            "page_desc"=>"Converts between different units",
            "page_desc_ar"=>"تستخدم للتحويل بين الوحدات المختلفة.",
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



        "currency"=>[
      "code"=>"currency",
      "logo"=>'dollar',
      "page_name"=>"Currency Calculator",
      "page_name_ar"=>"برنامج تحويل العملات",
      "page_title"=>"Currency Calculator",
      "page_desc"=>"Converts between different currencies",
      "page_desc_ar"=>"برنامج يحسب التحويلات بين المعملات المختلفة.",
      "page_img"=>"projects/dollar.png",
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
      "page_name"=>"Advanced Currency Conveter",
      "page_name_ar"=>"برنامج تحويلات العملات المطور",
      "page_title"=>"Advanced Currency Calculator",
      "page_desc"=>"Advanced Currency Converter",
      "page_desc_ar"=>"يحسب التحويلات بين العملات المختلفة. تطوير لبرنامج سابق.",
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
      "page_name"=>"Egypt's Postal Codes",
      "page_name_ar"=>"البحث عن كود البريد",
      "page_desc"=>"view all postal code data related to a city or a street (egypt only)",
    "page_desc_ar"=>"البحث عن أكواد البريد و بيانات مكاتب البريد فى مصر, وكذلك الأرقام البريدية لهم.
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
      "page_name"=>"Search For Postal Offices",
      "page_name_ar"=>"البحث عن بيانات مكاتب البريد",
      "page_desc"=>"search all postal office's data",
      "page_desc_ar"=>"يبحث عن جميع بيانات و خواص مكاتب البريد بداخل مصر.",
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
      "page_name"=>"Percentage Calculator",
      "page_name_ar"=>"حاسبة النسب",
      "page_title"=>"Percentage Calculator",
      "page_desc"=>"save a persentage then enabels you to useit where every you want",
      "page_desc_ar"=>"عليك إدخال النسب و على البرنامج تقسيم المبالغ الواردة بعد ذلك. الإستخدامات(حالات الميراث - حلات المشاركات المالية) ",
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
      "page_name"=>"Electric Consumption Calculator",
      "page_name_ar"=>"حاسبة الإستهلاك الكهربائى",
      "page_title"=>"Electricity Consumption Calculator",
      "page_desc"=>"an app to Calculator electric consumption & bill inside egypt",
      "page_desc_ar"=>"برنامج لحساب السحب الكهربائى بالكيلو وات و تحديد كم الكهرباء المسحوبة و تكلفتها تبعا لآخر قرارات الوزارة.",
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
      "page_name"=>"Water Consumption Calculator",
      "page_name_ar"=>"حاسبة الإستهلاك المياه",
      "page_title"=>"Water Consumption Caclulator",
      "page_desc"=>"an app to Calculator electric consumption & bill inside egypt",
      "page_desc_ar"=>"برنامج لحساب لإستهلاك المياه.",
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
      "page_name"=>"Money Calculation Helper",
      "page_name_ar"=>"Money Calculator Helper",
      "page_title"=>"Money Calculator",
      "page_desc"=>"برنامج يساعد على عد النقود. Helps You to count money using the number of papers in each currency value. ",
      "page_desc_ar"=>"برنامج يساعد على عد النقود. Helps You to count money using the number of papers in each currency value. ",
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
      "page_name"=>"Numbers System Converter",
      "page_name_ar"=>"التحويلات بين الأنظمة الرقمية",
      "page_title"=>"Number Converters",
      "page_desc"=>"Converts Between HexaDecimal,Binary,Octal,Decimal ",
      "page_desc_ar"=>"التحويل بين الأنظمة الرقمية المختلفة (العشرى-الثنائى-الثمانى-السداسى عشر).",
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



"books"=>[
      "code"=>"books",
      "logo"=>'book',
      "page_name"=>"Book Sharing System",
      "page_name_ar"=>"نظام مشاركة الوثائق",
      "page_title"=>"Book Sharing System",
      "page_desc"=>"Enabels you to do operation on books: upload , share , read online , download",
      "page_desc_ar"=>"موقع لمشاركة الكتب مع أصدقائك - و قراءتها على الويب دون الحاجة تحميلها - و أيضا يساعدك على حفظ الكتب و الوثائق و تنظيمها.",
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
      "page_name"=>"Oil Prices Calculator",
      "page_name_en"=>"برنامج حساب أسعار الوقود",
      "page_title"=>"Oil Calculator",
      "page_desc"=>"as a solution to fast oil prices changes in egypt, this application shows you what's the price of oil today",
      "page_desc_en"=>"برنامج لحساب أسعار البنزين بعد الزيادة. أدخل الألتار يحسب الثمن - أو العكس. (بنزين 80 - 92 - 95 - سولار - غاز)",
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
      "page_name"=>"Bank Profit Calculator",
      "page_name_ar"=>"برنامج حساب أرباح البنوك",
      "page_title"=>"Banks Profit Calculator",
      "page_desc"=>"just add the monthly benefit you decided on with the bank",
      "page_desc_ar"=>"يحسب أرباح البنك - يشترط أن تدخل الفائدة الشهرية المتفق عليها مع البنك.",
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

//"domain"=>[
//      "code"=>"domain",
//      "logo"=>'italic',
//      "page_name"=>"البحث عن أسم دومين",
//      "page_title"=>"Domain Name Search",
//      "page_desc"=>"برنامج يساعدك على البحث عن أسم الدومين",
//      "page_img"=>"projects/domain.jpg",
//      "keywords" => [],
//      "breadcrumbs"=>[
//                        "Home"=>[
//                              'logo'=>'home',
//                              'site_routes_subs'=>"home_list",
//                              'link'=> url('/')
//                        ],
//                        "Projects"=>[
//                              'logo'=>'cogs',
//                              'site_routes_subs'=>"projects_list",
//                              'link'=> url('projects')
//                        ],
//      ],
//      "link"=>url('projects/domain'),
//      "under_construction"=>true
//],

//"site-thumbnail"=>[
//      "code"=>"site-thumbnail",
//      "logo"=>'image',
//      "page_name"=>"برنامج تصوير المواقع",
//      "page_title"=>"Site Thumbnail Generator",
//      "page_desc"=>"برنامج مهمته تصوير المواقع التى ترغب بها.",
//      "page_img"=>"projects/thumbnail.png",
//      "keywords" => [],
//      "breadcrumbs"=>[
//                        "Home"=>[
//                              'logo'=>'home',
//                              'site_routes_subs'=>"home_list",
//                              'link'=> url('/')
//                        ],
//                        "Projects"=>[
//                              'logo'=>'cogs',
//                              'site_routes_subs'=>"projects_list",
//                              'link'=> url('projects')
//                        ],
//      ],
//      "link"=>url('projects/site-thumbnail'),
//      "under_construction"=>true
//],





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



