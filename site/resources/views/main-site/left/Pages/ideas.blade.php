@section('breadcrumbs')
@overwrite
@section("media")
@overwrite

@section("css_add")
    .jumbotron{
        background-color:rgba(0,0,0,.8)
    }
    section h4 a,section h4 a:hover,section h4 a:visited{
        display:block;
        color:inherit;
        text-decoration: none;
        font-size:20px;
    }
    .avgrund-contents{
        font-size:50%;
    }
    .english{
        font-family: 'Open Sans','Lato', Helvetica, sans-serif;
    }
@overwrite

@section('head_add')
    {!! get_it('plugins/avgrund/avgrund.css') !!}
    {!! get_it('plugins/avgrund/avgrund.js') !!}

    <script>
        function openDialog(add) {
//            alert('hi');
            var project_id = "";
            project_id = "#modal_"+add;
            console.log(project_id);
            Avgrund.show( project_id );
        }
        function closeDialog() {
            Avgrund.hide();
        }
    </script>
@overwrite



    {!! get_it("plugins/isotope/isotope.pkgd.min.js") !!}

    <?php

        $websites = [
                "ahmed-badawy.com"=>[
                        "code"=>"ahmed-badawy",
                        "logo"=>'',
                        "page_title"=>"Ahmed-Badawy.com",
                        "page_name"=>"Ahmed-Badawy.com",
                        "page_desc"=>"",
                        "page_img"=>"cv/prev/ahmed-badawy.com.jpg",
                        "keywords" => [],
                        "breadcrumbs"=>[],
                        "date"=>"9/2012",
                        "client"=>"none",
                        "full_desc"=>"
                            هذا هو موقعى الخاص. حيث أحتفظ بمعظم أكوادى و برامجى.
                        ",
                        "skills"=>"HTML, CSS, PHP, Laravel Framework, JavaScript, AngularJS, jQuery",
                        "link"=>"http://ahmed-badawy.com",
                ],
                "spidro.com"=>[
                        "code"=>"spidro",
                        "logo"=>'',
                        "page_title"=>"Spidro.com",
                        "page_name"=>"Spidro.com",
                        "page_desc"=>"",
                        "page_img"=>"cv/prev/spidro.com.jpg",
                        "keywords" => [],
                        "breadcrumbs"=>[],
                        "date"=>"6/2013",
                        "full_desc"=>"
                            هذا هو موقع شركة Spidro لخدمات الإستضافة و البرمجة
                        ",
                        "skills"=>"HTML, CSS, PHP, Laravel Framework, JavaScript, jQuery",
                        "link"=>"http://spidro.com",
                ],
                "ahmed-badawy.com/blog"=>[
                        "code"=>"personal_blog",
                        "logo"=>'',
                        "page_title"=>"Personal Blog",
                        "page_name"=>"Personal Blog",
                        "page_desc"=>"",
                        "page_img"=>"cv/prev/blog.ahmed-badawy.com.jpg",
                        "keywords" => [],
                        "breadcrumbs"=>[],
                        "date"=>"10/2012",
                        "full_desc"=>"
                           البلوج الخاصة بى حيث أحتفظ بالأفكار و الأخبار التقنية
                        ",
                        "skills"=>"HTML, CSS, WordPress",
                        "link"=>"http://blog.ahmed-badawy.com",
                ],



                "erest.sa"=>[
                        "code"=>"erest",
                        "logo"=>'',
                        "page_title"=>"Erest.sa",
                        "page_name"=>"إنجاز لتقنية المعلومات بالمملكة السعودية  -- Erest.sa ",
                        "page_desc"=>"",
                        "page_img"=>"cv/prev/erest.sa.jpg",
                        "keywords" => [],
                        "breadcrumbs"=>[],
                        "date"=>"2/2014",
                        "full_desc"=>"
                           موقع شركة إنجاز للبرمجيات و التصميمات و المطبوعات و كذلك الإستضافة-
                           <br>
                           تم أضافة التالى:-
                           <br>
                           <ul>
                                <li>نظام التحكم فى الموقع بالكامل كل جزئية على حدة</li>
                                <li>نظام التحكم فى العملاء و التواصل معهم عن طريق الإيميلات و رسائل الـSMS</li>
                                <li>نظام دخول للموقع و تسجيل الأعضاء و العملاء </li>
                                <li>نظام حجز الطلبات و التواصل مع خدمة العملاء بالكامل </li>
                                <li>نظام فتح الـ Tickets للتواصل مع الدعم الفنى للموقع و السرفر</li>
                                <li>نظام بحث عن الدومينات للحجز بالكامل</li>
                            </ul>
                        ",
                        "skills"=>"HTML, CSS, PHP, Laravel Framework, JavaScript, jQuery",
                        "link"=>"http://erest.sa",
                ],



                "drk.com.sa"=>[
                        "code"=>"drk",
                        "logo"=>'',
                        "page_title"=>"DRK.com.sa",
                        "page_name"=>"DRK.com.sa دار البحث و المعرفة و النشر",
                        "page_desc"=>"",
                        "page_img"=>"cv/prev/drk.com.sa.jpg",
                        "keywords" => [],
                        "breadcrumbs"=>[],
                        "date"=>"10/2015",
                        "full_desc"=>"
                          موقع مؤسسة DRk للبحث و النشر بالمملكة العربية السعودية
                           <br>
                           تم أضافة التالى:-
                           <br>
                           <ul>
                                <li>نظام التحكم فى الموقع بالكامل كل جزئية على حدة</li>
                                <li>نظام التحكم فى العملاء و التواصل معهم عن طريق الإيميلات و رسائل الـSMS</li>
                                <li>نظام دخول للموقع و تسجيل الأعضاء و العملاء </li>
                                <li>نظام حجز الطلبات و التواصل مع خدمة العملاء بالكامل </li>
                                <li>نظام فتح الـ Tickets للتواصل مع الدعم الفنى للموقع و السرفر</li>
                                <li>نظام التواصل مع العملاء برسائل الـ SMS</li>
                                <li>نظام التفاعل الكامل مع الدعم الفنى</li>
                                <li>ربط نظام دفع كامل بحسابات البنوك و بالـ paypal</li>
                                <li>نسخة عربية و إنجليزية للموقع مع التحكم الكامل فى كل جزء من النسختين</li>
                            </ul>
                        ",
                        "skills"=>"HTML, CSS, PHP, Laravel Framework, JavaScript, jQuery",
                        "link"=>"http://drk.com.sa",
                ],



                "alaryafest.com"=>[
                        "code"=>"alaryafest",
                        "logo"=>'',
                        "page_title"=>"Alaryafest.com",
                        "page_name"=>"Alaryafest.com -- للسواتر و المظلات بالمملكة العربية السعودية",
                        "page_desc"=>"",
                        "page_img"=>"cv/prev/alaryafest.com.jpg",
                        "keywords" => [],
                        "breadcrumbs"=>[],
                        "date"=>"6/2015",
                        "full_desc"=>"

                        ",
                        "skills"=>"HTML, CSS, JavaScript, AngularJS, jQuery",
                        "link"=>"http://alaryafest.com",
                ],
                "osoul.sa"=>[
                        "code"=>"osoul",
                        "logo"=>'',
                        "page_title"=>"Osoul.sa",
                        "page_name"=>"Osoul.sa",
                        "page_desc"=>"",
                        "page_img"=>"cv/prev/osoul.sa.jpg",
                        "keywords" => [],
                        "breadcrumbs"=>[],
                        "date"=>"4/2015",
                        "full_desc"=>"

                        ",
                        "skills"=>"HTML, CSS, JavaScript, AngularJS, jQuery",
                        "link"=>"http://osoul.sa",
                ],




                "ahmed-badawy.com23"=>[
                        "code"=>"ahmed-badawy",
                        "logo"=>'',
                        "page_title"=>"Ahmed-Badawy.com",
                        "page_name"=>"Ahmed-Badawy.com",
                        "page_desc"=>"",
                        "page_img"=>"cv/prev/ahmed-badawy.com.png",
                        "keywords" => [],
                        "breadcrumbs"=>[],
                        "full_desc"=>"
                            هذا هو موقعى الخاص. حيث أحتفظ بمعظم أكوادى و برامجى.
                        ",
                        "skills"=>"HTML, CSS, JavaScript, AngularJS, jQuery",
                        "link"=>"http://ahmed-badawy.com",
                ],
                "ahmed-badawy.com24"=>[
                        "code"=>"ahmed-badawy",
                        "logo"=>'',
                        "page_title"=>"Ahmed-Badawy.com",
                        "page_name"=>"Ahmed-Badawy.com",
                        "page_desc"=>"",
                        "page_img"=>"cv/prev/ahmed-badawy.com.png",
                        "keywords" => [],
                        "breadcrumbs"=>[],
                        "full_desc"=>"
                            هذا هو موقعى الخاص. حيث أحتفظ بمعظم أكوادى و برامجى.
                        ",
                        "skills"=>"HTML, CSS, JavaScript, AngularJS, jQuery",
                        "link"=>"http://ahmed-badawy.com",
                ],
                "ahmed-badawy.com25"=>[
                        "code"=>"ahmed-badawy",
                        "logo"=>'',
                        "page_title"=>"Ahmed-Badawy.com",
                        "page_name"=>"Ahmed-Badawy.com",
                        "page_desc"=>"",
                        "page_img"=>"cv/prev/ahmed-badawy.com.png",
                        "keywords" => [],
                        "breadcrumbs"=>[],
                        "full_desc"=>"
                            هذا هو موقعى الخاص. حيث أحتفظ بمعظم أكوادى و برامجى.
                        ",
                        "skills"=>"HTML, CSS, JavaScript, AngularJS, jQuery",
                        "link"=>"http://ahmed-badawy.com",
                ],
        ];



    $index = [
            "img" => get_thumb($page_img),
            "title" => "My Ideas! - أفكارى",
            "desc" => "Just Testing & Documentating Some of My Projects & ideas & APIs",
            "desc2" => "ملحوظة: جميع البرامج هنا تجريبية - إذا كنت تريد شراء النسخ المكتملة منها يمكنك الإتصال بـ <span class='bright'>".social('my_phone_1')."</span>.",
        // "desc2" => "These Applications are not in a stable final state, meant to be used for testing purposes only. This means that there will be unfinished features, bugs, many updates and even untested modules, code & plugins. These Applications require internet connection to work on our server. if you need a private version for your own work please call the developer: ahmed badawy -- 01111988246",
    ];

    $index['itiration'] = $websites;

    ?>



    <!-- Begin Body -->
<div class="container-fluid">
	<div class="row" id='main-page'>

      		<div class="col-md-12 arabic">



                <h4>Filtering</h4>

                <p><input type="text" class="quicksearch" placeholder="Search" /></p>

                <div class="button-group filters-button-group">
                    <button class="button is-checked" data-filter="*">show all</button>
                    <button class="button" data-filter=".metal">metal</button>
                    <button class="button" data-filter=".transition">transition</button>
                    <button class="button" data-filter=".imperial">imperial</button>
                    <button class="button" data-filter=".alkali, .alkaline-earth">alkali and alkaline-earth</button>
                    <button class="button" data-filter=":not(.transition)">not transition</button>
                    <button class="button" data-filter=".metal:not(.transition)">metal but not transition</button>
                    <button class="button" data-filter="numberGreaterThan50">number > 50</button>
                    <button class="button" data-filter="ium">name ends with &ndash;ium</button>
                </div>
                <hr>



                <h4>Sorting</h4>
                <div class="button-group sort-by-button-group">
                    <button class="button is-checked" data-sort-value="original-order">original order</button>
                    <button class="button" data-sort-value="name">name</button>
                    <button class="button" data-sort-value="symbol">symbol</button>
                    <button class="button" data-sort-value="number">number</button>
                    <button class="button" data-sort-value="weight">weight</button>
                    <button class="button" data-sort-value="category">category</button>
                </div>
                <hr>


                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
                    Launch demo modal
                </button>

                <!-- Modal -->
                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                            </div>
                            <div class="modal-body">
                                ...
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                    </div>
                </div>

            @foreach($ideas as $idea)



                <aside id="modal_{{$idea['code']}}" class="avgrund-popup col-sm-8 col-sm-offset-2">

                    <div class="row">
                        <div class="col-sm-8">
                            <h4 style="color:#444;font-weight:bolder">{!! $idea['name'] !!}</h4>

                            <table class="table" style="background-color:white;color:#333;">
                                @if($idea->client && false)
                                <tr class="english">
                                    <th>Client :</th>
                                    <td>{!! $idea->client !!}</td>
                                </tr>
                                @endif
                                @if($idea->date)
                                <tr class="english">
                                    <th>Date :</th>
                                    <td>{!! $idea->date !!}</td>
                                </tr>
                                @endif

                                <tr class="english">
                                    <th>Skills :</th>
                                    <td class="english">{!! $idea['skills'] !!}</td>
                                </tr>
                                <tr class="english">
                                    <th>Link :</th>
                                    <td><a href="{{$idea['link']}}" target="_blank" class="btn btn-default btn-xs english">{{$idea['link']}}</a></td>
                                </tr>
                                <tr>
                                    <td colspan="2" dir="rtl">{!! $idea['desc'] !!}</td>
                                </tr>
                            </table>

                        </div>
                        <div class="col-sm-4">
                            <a class="btn btn-danger btn-xs pull-right" onclick="javascript:closeDialog();">X</a>
                            <div class="clearfix"></div>
                            <br>
                            <img src='{{th($idea["img"],350,200)}}' alt="{{$idea['name']}}" >
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </aside>
            @endforeach




                <div class="avgrund-contents grid">
                        @foreach($ideas as $idea)
                                <section class="element-item col-sm-2 text-center space_above grid-elm">
                                    <a link='{{$idea["link"]}}' target='_blank' onclick="javascript:openDialog( '{{$idea['code']}}' );">
                                        <img src='{{th($idea["img"],350,200)}}' width='100%' height='70%' alt="Generic placeholder image" >
                                    </a>
                                    <br>
                                    <h4 class='english btn' dir='rtl' style="margin-top:-48px;color:white;background-color:rgba(0,0,0,.6);"><a href='#' onclick="javascript:openDialog( '{{$idea['code']}}' );return false;" target='_blank'>{{$idea['title']}}</a></h4>
                                </section><!-- /.col-md-4 text-center -->
                        @endforeach
                </div>


                <div class="avgrund-cover" onclick="javascript:closeDialog();"></div>





                <script type="text/javascript">
                    $( function() {
                        // init Isotope
                        var $grid = $('.grid').isotope({
                            itemSelector: '.element-item',
                            layoutMode: 'fitRows',
                            //Setting the Sorting function:-
                            getSortData: {
                                name: '.name',
                                symbol: '.symbol',
                                number: '.number parseInt',
                                category: '[data-category]',
                                weight: function( itemElem ) {
                                    var weight = $( itemElem ).find('.weight').text();
                                    return parseFloat( weight.replace( /[\(\)]/g, '') );
                                }
                            },
                            //
                            filter: function() {
                                return qsRegex ? $(this).text().match( qsRegex ) : true;
                            }
                        });




                        /*--------------------------------------------------------------
                         Filter Functions
                         --------------------------------------------------------------*/
                        var filterFns = {
                            // show if number is greater than 50
                            numberGreaterThan50: function() {
                                var number = $(this).find('.number').text();
                                return parseInt( number, 10 ) > 50;
                            },
                            // show if name ends with -ium
                            ium: function() {
                                var name = $(this).find('.name').text();
                                return name.match( /ium$/ );
                            }
                        };
                        // bind filter button click
                        $('.filters-button-group').on( 'click', 'button', function() {
                            var filterValue = $( this ).attr('data-filter');
                            // use filterFn if matches value
                            filterValue = filterFns[ filterValue ] || filterValue;
                            $grid.isotope({ filter: filterValue });
                        });
                        // change is-checked class on buttons
                        $('.button-group').each( function( i, buttonGroup ) {
                            var $buttonGroup = $( buttonGroup );
                            $buttonGroup.on( 'click', 'button', function() {
                                $buttonGroup.find('.is-checked').removeClass('is-checked');
                                $( this ).addClass('is-checked');
                            });
                        });
                        /**********************************************************************/


                        /*--------------------------------------------------------------
                         Filtering By Text
                         --------------------------------------------------------------*/
                        // quick search regex
                        var qsRegex;
                        // debounce so filtering doesn't happen every millisecond
                        function debounce( fn, threshold ) {
                            var timeout;
                            return function debounced() {
                                if ( timeout ) {
                                    clearTimeout( timeout );
                                }
                                function delayed() {
                                    fn();
                                    timeout = null;
                                }
                                timeout = setTimeout( delayed, threshold || 100 );
                            }
                        }

                        // use value of search field to filter
                        var $quicksearch = $('.quicksearch').keyup( debounce( function() {
                            qsRegex = new RegExp( $quicksearch.val(), 'gi' );
                            $grid.isotope();
                        }, 200 ) );
                        /**********************************************************************/


                        /*--------------------------------------------------------------
                         Sorting Functions
                         --------------------------------------------------------------*/
//bind sorting functionality to the sorting function
                        // bind sort button click
                        $('.sort-by-button-group').on( 'click', 'button', function() {
                            var sortValue = $(this).attr('data-sort-value');
                            $grid.isotope({ sortBy: sortValue });
                        });

                        // change is-checked class on buttons
                        $('.button-group').each( function( i, buttonGroup ) {
                            var $buttonGroup = $( buttonGroup );
                            $buttonGroup.on( 'click', 'button', function() {
                                $buttonGroup.find('.is-checked').removeClass('is-checked');
                                $( this ).addClass('is-checked');
                            });
                        });
                        /**********************************************************************/



                        // now i will fix the popup
//                        $( "body" ).scroll(function() {
//                            $( ".avgrund-popup" ).append( "<div>Handler for .scroll() called.</div>" );
//                        });

                    });

                </script>



            </div>
  	</div>
</div>



