    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <h1 class='text-center' id="page_header">Ahmed Badawy
                    <p class="lead">مطور و مبرمج محترف</p>

                    <div class="text-center">
                        <a href="{{social("github")}}" target="_blank" class="professional_link">{!! fa2('github-square') !!}</a>
                        <a href="{{social("linkedin")}}" target="_blank" class="professional_link">{!! fa2('linkedin-square') !!}</a>
                    </div>
                    <div class="clearfix"></div>

                </h1>
            </div>
            <div class="col-md-5">
                <div class="well well-lg">
                    <div class="row">
                        <div class="col-sm-6">
                            <img src="{{ th('private-photos/me.jpg',255,255) }}" class="img-responsive img-thumbnail img">
                        </div>
                        <div class="col-sm-6 text-center">
                            <h2>أحمد بدوى</h2>
                            <h2>C.V</h2>
                            <div class="btn-group">

                                <button type="button" class="btn btn-default dropdown-toggle arabic" dir='rtl' data-toggle="dropdown" aria-expanded="false">
                                    {!! fa2('download') !!} مشاركة الـ C.V &nbsp;&nbsp;<span class="caret"></span>
                                </button>


                                <ul class="dropdown-menu" role="menu">
                                    <li role="presentation" class="dropdown-header english">Download</li>
                                    <li><a href="{!! url('cv/download/jpg') !!}" class="deny english">{!! fa2('image') !!} CV -- jpg</a></li>
                                    <li><a href="{!! url('cv/download/pdf') !!}" class="deny english">{!! fa2('file-pdf-o') !!} CV -- pdf</a></li>
                                    <li><a href="{!! url('cv/download/rar') !!}" class="deny english">{!! fa2('external-link-square') !!} CV -- win shortcut</a></li>
                                    <li class="divider"></li>



                                    <li role="presentation" class="dropdown-header english">Share With</li>

                                    <li><a class="english social_share_link" target="_blank" shareType="facebook">{!! fa2('facebook-square') !!} Facebook</a></li>
                                    <li><a class='english social_share_link' target="_blank" shareType="twitter">{!! fa2('twitter-square') !!} Twitter</a></li>
                                    <li><a class='english social_share_link' target="_blank" shareType="google-plus">{!! fa2('google-plus-square') !!} Google+</a></li>

                                    <li><a class='english social_share_link' target="_blank" shareType="linked-in">{!! fa2('linkedin-square') !!} Linked-In</a></li>
                                    <li><a class='english social_share_link' target="_blank" shareType="google-plus">{!! fa2('pinterest-square') !!} Pinterest</a></li>
                                    <li><a class='english social_share_link' target="_blank" shareType="stumbleupon">{!! fa2('stumbleupon',0) !!} stumbleUpon</a></li>
                                    <li><a class='english social_share_link' target="_blank" shareType="vk">{!! fa2('vk',0) !!} VK</a></li>
                                    <li><a class='english social_share_link' target="_blank" shareType="xing">{!! fa2('xing-square',0) !!} Xing</a></li>
                                    <li><a class='english social_share_link' target="_blank" shareType="tumblr">{!! fa2('tumblr-square',0) !!} Tumblr</a></li>
                                    <li><a class='english social_share_link' target="_blank" shareType="reddit">{!! fa2('reddit-square',0) !!} Reddit</a></li>

                                    <li class="divider"></li>
                                    <li role="presentation" class="dropdown-header english">Send To</li>
                                    <li><a target="_blank" class="english social_share_link" shareType="whatsapp">{!! fa2('whatsapp') !!} WhatsApp</a></li>
                                    <li><a target="_blank" class="english social_share_link" shareType="email">{!! fa2('send') !!} Email</a></li>

                                    <li class="divider"></li>
                                    <li><a href="#" class="deny english" data-toggle="modal" data-target=".send-cv-modal">{!! fa2('envelope',0) !!} Send C.V to an Email</a></li>
                                </ul>
                                <script type="text/javascript">
                                    var shared_data = {
                                        url         : "http://ahmed-badawy.com/site/cv",
                                        title       : "Ahmed-Badawy's C.V (Please Read Me)",
                                        text        : " -!--Ahmed Badawy - أحمد بدوى--!- Hello! This is My C.V : http://ahmed-badawy.com/site/cv",
                                        img         : "http://ahmed-badawy.com/site/public/site-imgs/site/logo.jpg",
                                        phone_num   : "01111988246",
                                        google_maps : "30,31",
                                    };
                                    shared_data.prepared_url = encodeURIComponent(shared_data.url);
                                    shared_data.prepared_img = encodeURIComponent(shared_data.img);

                                    function get_share_link(share_type){
                                        var $link;
                                        if(share_type=="facebook") $link = "https://www.facebook.com/sharer/sharer.php?u="+shared_data.prepared_url;
                                        if(share_type=="twitter") $link = "http://twitter.com/home?status="+shared_data.text;
                                        if(share_type=="google-plus") $link = "https://plus.google.com/share?url="+shared_data.prepared_url+"&gpsrc=frameless";
                                        if(share_type=="linked-in") $link = "https://www.linkedin.com/shareArticle?mini=true&url="+shared_data.prepared_url+"&title="+shared_data.title+"&summary="+shared_data.text+"";
                                        if(share_type=="pinterest") $link = "https://www.pinterest.com/pin/create/button/?url="+shared_data.prepared_url+"&media=$img&description="+shared_data.text+"";
                                        if(share_type=="stumbleupon") $link = "http://www.stumbleupon.com/submit?url="+shared_data.prepared_url+"&title="+shared_data.title+"";
                                        if(share_type=="vk") $link = "https://vk.com/share.php?url="+shared_data.prepared_url+"&title="+shared_data.title+"&description="+shared_data.text+"&image=$img&noparse=true";
                                        if(share_type=="xing") $link = "https://www.xing-share.com/app/user?op=share;sc_p=xing-share;url="+shared_data.prepared_url+"";
                                        if(share_type=="tumblr") $link = "http://www.tumblr.com/share/link?url="+shared_data.prepared_url+"&title="+shared_data.title+"&description="+shared_data.text+"";
                                        if(share_type=="reddit") $link = "http://www.reddit.com/submit?url="+shared_data.prepared_url+"&title="+shared_data.title+"";
                                        if(share_type=="whatsapp") $link = "whatsapp://send?text="+shared_data.text+"";
                                        if(share_type=="email") $link = "mailto:?subject="+shared_data.title+"&body="+shared_data.text+"";
                                        if(share_type=="call_phone") $link = "tel:"+shared_data.phone_num;
                                        if(share_type=="internet_call") $link = "callTo:"+shared_data.phone_num;
                                        if(share_type=="google_maps") $link = "geo:"+shared_data.google_maps;
                                        return $link;
                                    }

                                    function centeredPopup(url,winName,w,h,scroll){
                                        LeftPosition = (screen.width) ? (screen.width-w)/2 : 0;
                                        TopPosition = (screen.height) ? (screen.height-h)/2 : 0;
                                        settings =
                                                'height='+h+',width='+w+',top='+TopPosition+',left='+LeftPosition+',scrollbars='+scroll+',resizable'
                                        popupWindow = window.open(url,winName,settings);
                                    }

                                    $('.social_share_link').on('click',function(){
                                        share_type = this.getAttribute('shareType');
                                        link = get_share_link(share_type);
                                        console.log(link);
                                        num = Math.random();
                                        centeredPopup(link, num+"toString" ,'700','300','yes');
                                        return false;
                                    });
                                </script>





                                <div class="modal fade send-cv-modal" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <h1>Sending C.V To Email</h1>

                                            <form class="form-inline" method='post' action='{!!url("cv/send")!!}' style='padding:20px'>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail2" class='bright'><h4>Please Enter The Send-to Email</h4></label>
                                                    <input type="email" name='email' class="form-control" style='width:100%' placeholder="Enter Your Email">
                                                </div>
                                                {{br(2)}}
                                                <button type="submit" class="btn btn-primary">Send C.V</button>
                                                <button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Cancel</button>
                                            </form>

                                            <br><br><br><br><br>
                                            <div class='clearfix'></div>

                                        </div>
                                    </div>
                                </div>


                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- /cont -->

