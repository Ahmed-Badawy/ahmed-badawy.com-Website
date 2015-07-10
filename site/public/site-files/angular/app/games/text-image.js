var myApp = angular.module('myApp',['ngRoute','ngResource']);



var canvas , ctx ;
var saved_img_name = false;

		

myApp.controller('text_image',function($scope,$http,$timeout){
    var img_data;
    $scope.canvas_show = false;
    $scope.share = {};
    $scope.show_status = "main";
    $scope.share_links = {};

    canvas=document.getElementById("myCanvas");
    ctx=canvas.getContext("2d");

    if(layout=="pepsi"){
        $scope.text1 = "ضع أسمك هنا";
        $scope.text2 = "بيبسى أحلى مع";
        $scope.font1 = "andalus";
        $scope.font2 = "andalus";
        $scope.font_size1 = 45;
        $scope.font_size2 = 50;
    }
    else if(layout=="facebook"){
        $scope.text1 = "ضع أسمك هنا";
        $scope.text2 = "الفيسبوك أحلى مع";
        $scope.font1 = "andalus";
        $scope.font2 = "andalus";
        $scope.font_size1 = 45;
        $scope.font_size2 = 50;
    }
    else if(layout=="ramadan"){
        $scope.text1 = "ضع أسمك هنا";
        $scope.text2 = "رمضان كريم";
        $scope.font1 = "andalus";
        $scope.font2 = "andalus";
        $scope.font_size1 = 40;
        $scope.font_size2 = 50;
    }
    else if(layout=="cocacola"){
        $scope.text1 = "ضع أسمك هنا";
        $scope.text2 = "كوكاكولا أحلى مع";
        $scope.font1 = "andalus";
        $scope.font2 = "andalus";
        $scope.font_size1 = 40;
        $scope.font_size2 = 50;
    }
    else if(layout=="cocacola-2"){
        $scope.text1 = "ضع أسمك هنا";
        $scope.text2 = "Ahmed Badawy";
        $scope.font1 = "andalus";
        $scope.font2 = "andalus";
        $scope.font_size1 = 70;
        $scope.font_size2 = 30;
    }  
    else if(layout=="cocacola-3"){
        $scope.text1 = "كوكاكولا أحلى مع";
        $scope.text2 = "ضع أسمك هنا";
        $scope.font1 = "andalus";
        $scope.font2 = "andalus";
        $scope.font_size1 = 15;
        $scope.font_size2 = 50;
    }       
    else if(layout=="whatsapp"){
        $scope.text1 = "ضيفنى على الواتس ";
        $scope.text2 = "ضع أسمك هنا - 01111988246";
        $scope.font1 = "andalus";
        $scope.font2 = "andalus";
        $scope.font_size1 = 40;
        $scope.font_size2 = 25;
    }
    else if(layout=="viper"){
        $scope.text1 = "معلم معلمين الفيبر";
        $scope.text2 = "ضع أسمك هنا";
        $scope.font1 = "andalus";
        $scope.font2 = "andalus";
        $scope.font_size1 = 40;
        $scope.font_size2 = 50;
    }
    else if(layout=="messenger"){
        $scope.text1 = "Facebook Messenger";
        $scope.text2 = "ضع أسمك هنا";
        $scope.font1 = "andalus";
        $scope.font2 = "andalus";
        $scope.font_size1 = 40;
        $scope.font_size2 = 50;
    }
    else if(layout=="microsoft"){
        $scope.text1 = "أنا بدرس ميكروسوفت";
        $scope.text2 = "ضع أسمك هنا";
        $scope.font1 = "andalus";
        $scope.font2 = "andalus";
        $scope.font_size1 = 40;
        $scope.font_size2 = 50;
    }
    else if(layout=="cisco"){
        $scope.text1 = "أنا بدرس سيسكو";
        $scope.text2 = "ضع أسمك هنا";
        $scope.font1 = "andalus";
        $scope.font2 = "andalus";
        $scope.font_size1 = 40;
        $scope.font_size2 = 50;
    }
    else if(layout=="oracle"){
        $scope.text1 = "أنا بحب أوراكل";
        $scope.text2 = "ضع أسمك هنا";
        $scope.font1 = "andalus";
        $scope.font2 = "andalus";
        $scope.font_size1 = 40;
        $scope.font_size2 = 50;
    }
    else if(layout=="crysis"){
        $scope.text1 = "CRYSIS";
        $scope.text2 = "ضع أسمك هنا";
        $scope.font1 = "tahoma";
        $scope.font2 = "andalus";
        $scope.font_size1 = 60;
        $scope.font_size2 = 50;
    }
    else if(layout=="game-of-thrones"){
        $scope.text1 = "Game of Thrones";
        $scope.text2 = "ضع أسمك هنا";
        $scope.font1 = "andalus";
        $scope.font2 = "andalus";
        $scope.font_size1 = 40;
        $scope.font_size2 = 50;
    }
    else if(layout=="rip"){
        $scope.text1 = "rip";
        $scope.text2 = "ضع أسمك هنا";
        $scope.font1 = "andalus";
        $scope.font2 = "andalus";
        $scope.font_size1 = 40;
        $scope.font_size2 = 50;
    }

    $scope.draw = function(){
        $scope.canvas_show = true;
        // console.log(layout);
        // ctx.clearRect(0, 0, canvas.width, canvas.height);
        canvas.width = canvas.width;
        saved_img_name = false;
        if(layout == "pepsi") draw_pepsi( $scope.text1, $scope.text2, $scope.font1, $scope.font2, $scope.font_size1, $scope.font_size2 );
        if(layout=='ramadan') draw_ramadan( $scope.text1, $scope.text2, $scope.font1, $scope.font2, $scope.font_size1, $scope.font_size2 );
        if(layout=='facebook') draw_facebook( $scope.text1, $scope.text2, $scope.font1, $scope.font2, $scope.font_size1, $scope.font_size2 );
        if(layout=='cocacola') draw_cocacola( $scope.text1, $scope.text2, $scope.font1, $scope.font2, $scope.font_size1, $scope.font_size2 );
        if(layout=='cocacola-2') draw_cocacola2( $scope.text1, $scope.text2, $scope.font1, $scope.font2, $scope.font_size1, $scope.font_size2 );
        if(layout=='cocacola-3') draw_cocacola3( $scope.text1, $scope.text2, $scope.font1, $scope.font2, $scope.font_size1, $scope.font_size2 );
        if(layout=='whatsapp') draw_whatsapp( $scope.text1, $scope.text2, $scope.font1, $scope.font2, $scope.font_size1, $scope.font_size2 );
        if(layout=='viper') draw_viper( $scope.text1, $scope.text2, $scope.font1, $scope.font2, $scope.font_size1, $scope.font_size2 );
        if(layout=='messenger') draw_messenger( $scope.text1, $scope.text2, $scope.font1, $scope.font2, $scope.font_size1, $scope.font_size2 );
        if(layout=='cisco') draw_cisco( $scope.text1, $scope.text2, $scope.font1, $scope.font2, $scope.font_size1, $scope.font_size2 );
        if(layout=='microsoft') draw_microsoft( $scope.text1, $scope.text2, $scope.font1, $scope.font2, $scope.font_size1, $scope.font_size2 );
        if(layout=='oracle') draw_oracle( $scope.text1, $scope.text2, $scope.font1, $scope.font2, $scope.font_size1, $scope.font_size2 );
        if(layout=='crysis') draw_crysis( $scope.text1, $scope.text2, $scope.font1, $scope.font2, $scope.font_size1, $scope.font_size2 );
        if(layout=='game-of-thrones') draw_game_of_thrones( $scope.text1, $scope.text2, $scope.font1, $scope.font2, $scope.font_size1, $scope.font_size2 );
        if(layout=='rip') draw_rip( $scope.text1, $scope.text2, $scope.font1, $scope.font2, $scope.font_size1, $scope.font_size2 );
    }
    // $scope.draw();

    $scope.save_img = function(){
        img_data = canvas.toDataURL();
        request = $http.post("save",{img:img_data});
        return request;
    }

    // $scope.download_img = function(){
    //     if(saved_img_name) window.location = ;
    //     else{
    //         request = $scope.save_img();
    //         request.success(function(image_name){
    //             console.log(image_name);
    //             // $http.get("text-image/download/"+image_name);
    //             saved_img_name = image_name;
    //             window.location = "text-image/download/"+image_name;
    //         });
    //     }
    // }

    $scope.share_prepare = function(saved_img_name){
        var share_obj = {};
        base_link = "http://ahmed-badawy.com/site/games/";
        title = $scope.text2+" - "+$scope.text1;
        
        share_obj.title = replaceAll(' ',"_",title);
        share_obj.link = base_link+"text-image/share/"+saved_img_name+"/"+share_obj.title;            
        share_obj.text = "برنامج جامد ورهيب بيحط أسمك على أى حاجة بتحبها فى 5 ثوانى. جرب البرنامج من هنا: "+base_link+"text-image";
        share_obj.image = base_link+"text-images/saved-images"+saved_img_name;

        $scope.share_links.facebook = "https://www.facebook.com/sharer/sharer.php?u="+share_obj.link;
        $scope.share_links.twitter = "http://twitter.com/home?status="+share_obj.text;
        $scope.share_links.google_plus = "https://plus.google.com/share?url="+share_obj.link+"&gpsrc=frameless";
        $scope.share_links.linkedin = "https://www.linkedin.com/shareArticle?mini=true&url="+share_obj.link+"&title="+share_obj.title+"&summary="+share_obj.text;
        $scope.share_links.pinterest = "https://www.pinterest.com/pin/create/button/?url="+share_obj.link+"&media=$img&description="+share_obj.text;
        $scope.share_links.stumbleupon = "http://www.stumbleupon.com/submit?url="+share_obj.link+"&title="+share_obj.text;
        $scope.share_links.whatsapp = "whatsapp://send?text="+share_obj.text;
        $scope.share_links.email = "mailto:?subject="+share_obj.title+"&body="+share_obj.text;
        $scope.share_links.download_link = "download/"+saved_img_name;
        // window.location = $link; 
        centeredPopup($scope.share_links.facebook,"facebook",'700','300','yes');
    }


    $scope.prepare_img = function(){
        $scope.show_status = $scope.loader = "loading";
        request = $scope.save_img();
        request.success(function(image_name){
            saved_img_name = image_name;
            $scope.saved_img_name = saved_img_name;
            $scope.loader = false;
            $scope.share_prepare(saved_img_name);
            $scope.show_status = "final";
            // window.alert("success");
        });
    }

    $scope.share_with = function(share_type){
        if(share_type=='facebook') current_link = $scope.share_links.facebook;
        if(share_type=='twitter') current_link = $scope.share_links.twitter;
        if(share_type=='google-plus') current_link = $scope.share_links.google_plus;
        if(share_type=='linkedin') current_link = $scope.share_links.linkedin;
        if(share_type=='pinterest') current_link = $scope.share_links.pinterest;
        if(share_type=='stumbleupon') current_link = $scope.share_links.stumbleupon;
        // window.location = $current_link; 
        // centeredPopup(current_link,share_type,'700','300','yes');
    }


});





    var popupWindow = null;
    function centeredPopup(url,winName,w,h,scroll){
      LeftPosition = (screen.width) ? (screen.width-w)/2 : 0;
      TopPosition = (screen.height) ? (screen.height-h)/2 : 0;
      settings =
      'height='+h+',width='+w+',top='+TopPosition+',left='+LeftPosition+',scrollbars='+scroll+',resizable'
      popupWindow = window.open(url,winName,settings);
    }


function replaceAll(find, replace, str) {
  return str.replace(new RegExp(find, 'g'), replace);
}


function draw_pepsi(text1,text2,font1,font2,font_size1,font_size2){  
//draw img
    var img=document.getElementById("img");
    ctx.drawImage(img,0,0);

//draw text
    ctx.beginPath();
    ctx.font= font_size1+"px "+font1;
    ctx.textAlign="center"; 
    ctx.lineWidth = 5;
    ctx.strokeStyle = "white";
    ctx.strokeText(text1,125,260);
    ctx.fillStyle = "#222";
    ctx.fillText(text1,125,260);


    ctx.beginPath();
    ctx.font= font_size2+"px "+font2;
    ctx.textAlign="center"; 
    ctx.fillStyle = "white";
    ctx.fillText(text2,130,200);


    ctx.beginPath();
    ctx.font="11px andalus";
    ctx.fillStyle = "white";
    ctx.rotate(-90*Math.PI/180);
    ctx.fillText(text1,-215,320);

    ctx.beginPath();
    ctx.font= "10px arial";
    ctx.fillStyle = "#333";
    ctx.fillText(my_underline_text,530,306);

    ctx.closePath();
}



function draw_facebook(text1,text2,font1,font2,font_size1,font_size2){
//draw img
    var img=document.getElementById("img");
    ctx.drawImage(img,0,0);


//draw text
    ctx.beginPath();
    ctx.font= font_size1+"px "+font1;
    ctx.textAlign="center"; 
    ctx.lineWidth = 4;
    ctx.strokeStyle = "white";
    ctx.strokeText(text1,150,260);
    ctx.fillStyle = "#333";
    ctx.fillText(text1,150,260);

    ctx.beginPath();
    ctx.font= font_size2+"px "+font2;
    ctx.textAlign="center"; 
    ctx.lineWidth = 6;
    ctx.strokeStyle = "#333";
    ctx.strokeText(text2,145,200);
    ctx.fillStyle = "white";
    ctx.fillText(text2,145,200);

    ctx.beginPath();
    ctx.font= "10px arial";
    ctx.fillStyle = "#333";
    ctx.fillText(my_underline_text,530,306);

    ctx.closePath();
}

function draw_ramadan(text1,text2,font1,font2,font_size1,font_size2){
//draw img
    var img=document.getElementById("img");
    ctx.drawImage(img,0,0);

//draw text
    ctx.beginPath();
    ctx.font= font_size1+"px "+font1;
    ctx.textAlign="center"; 
    ctx.lineWidth = 4;
    ctx.strokeStyle = "white";
    ctx.strokeText(text1,470,100);
    ctx.fillStyle = "#333";
    ctx.fillText(text1,470,100);


    ctx.beginPath();
    ctx.font= font_size2+"px "+font2;
    ctx.textAlign="center"; 
    ctx.lineWidth = 4;
    ctx.strokeStyle = "#fff";
    ctx.strokeText(text2,470,50);
    ctx.fillStyle = "#333";
    ctx.fillText(text2,470,50);


    ctx.beginPath();
    ctx.font= "10px arial";
    ctx.fillStyle = "#fff";
    ctx.fillText(my_underline_text,530,306);


    ctx.closePath();
}


function draw_cocacola(text1,text2,font1,font2,font_size1,font_size2){
//draw img
    var img=document.getElementById("img");
    ctx.drawImage(img,0,0);

//draw text
    ctx.beginPath();
    ctx.font= font_size1+"px "+font1;
    ctx.textAlign="center"; 
    ctx.lineWidth = 4;
    ctx.strokeStyle = "white";
    ctx.strokeText(text1,160,280);
    ctx.fillStyle = "#333";
    ctx.fillText(text1,160,280);

    ctx.beginPath();
    ctx.font= font_size2+"px "+font2;
    ctx.textAlign="center"; 
    ctx.lineWidth = 6;
    ctx.strokeStyle = "#333";
    ctx.strokeText(text2,160,220);
    ctx.fillStyle = "white";
    ctx.fillText(text2,160,220);

    ctx.beginPath();
    ctx.font= "35px Urdu Typesetting";
    ctx.textAlign="center"; 
    ctx.fillStyle = "#fff";
    ctx.fillText(text1,490,110);

    ctx.beginPath();
    ctx.font= "10px arial";
    ctx.fillStyle = "#333";
    ctx.fillText(my_underline_text,530,306);

    ctx.closePath();
}


function draw_whatsapp(text1,text2,font1,font2,font_size1,font_size2){
//draw img
    var img=document.getElementById("img");
    ctx.drawImage(img,0,0);


//draw text
    ctx.beginPath();
    ctx.font= font_size1+"px "+font1;
    ctx.textAlign="center"; 
    ctx.lineWidth = 4;
    ctx.strokeStyle = "#333";
    ctx.strokeText(text1,150,50);
    ctx.fillStyle = "#fff";
    ctx.fillText(text1,150,50);


    ctx.beginPath();
    ctx.font= font_size2+"px "+font2;
    ctx.textAlign="center"; 
    ctx.lineWidth = 3;
    ctx.strokeStyle = "#fff";
    ctx.strokeText(text2,150,100);
    ctx.fillStyle = "#333";
    ctx.fillText(text2,150,100);

    ctx.beginPath();
    ctx.font= "10px arial";
    ctx.fillStyle = "#fff";
    ctx.fillText(my_underline_text,530,306);

    ctx.closePath();
}

function draw_viper(text1,text2,font1,font2,font_size1,font_size2){
//draw img
    var img=document.getElementById("img");
    ctx.drawImage(img,0,0);


//draw text
    ctx.beginPath();
    ctx.font= font_size1+"px "+font1;
    ctx.textAlign="center"; 
    ctx.lineWidth = 4;
    ctx.strokeStyle = "#333";
    ctx.strokeText(text1,290,270);
    ctx.fillStyle = "#fff";
    ctx.fillText(text1,290,270);


    ctx.beginPath();
    ctx.font= font_size2+"px "+font2;
    ctx.textAlign="center"; 
    ctx.lineWidth = 6;
    ctx.strokeStyle = "#fff";
    ctx.strokeText(text2,290,220);
    ctx.fillStyle = "#333";
    ctx.fillText(text2,290,220);

    ctx.beginPath();
    ctx.font= "10px arial";
    ctx.fillStyle = "#fff";
    ctx.fillText(my_underline_text,530,306);

    ctx.closePath();
}




function draw_messenger(text1,text2,font1,font2,font_size1,font_size2){
//draw img
    var img=document.getElementById("img");
    ctx.drawImage(img,0,0);


//draw text
    ctx.beginPath();
    ctx.font= font_size1+"px "+font1;
    ctx.textAlign="center"; 
    ctx.lineWidth = 4;
    ctx.strokeStyle = "#333";
    ctx.strokeText(text1,290,270);
    ctx.fillStyle = "#fff";
    ctx.fillText(text1,290,270);


    ctx.beginPath();
    ctx.font= font_size2+"px "+font2;
    ctx.textAlign="center"; 
    ctx.lineWidth = 6;
    ctx.strokeStyle = "#333";
    ctx.strokeText(text2,290,220);
    ctx.fillStyle = "#fff";
    ctx.fillText(text2,290,220);

    ctx.beginPath();
    ctx.font= "10px arial";
    ctx.fillStyle = "#fff";
    ctx.fillText(my_underline_text,530,306);

    ctx.closePath();
}


function draw_cisco(text1,text2,font1,font2,font_size1,font_size2){
//draw img
    var img=document.getElementById("img");
    ctx.drawImage(img,0,0);
//draw text
    ctx.beginPath();
    ctx.font= font_size1+"px "+font1;
    ctx.textAlign="center"; 
    ctx.lineWidth = 4;
    ctx.strokeStyle = "#333";
    ctx.strokeText(text1,310,270);
    ctx.fillStyle = "#fff";
    ctx.fillText(text1,310,270);

    ctx.beginPath();
    ctx.font= font_size2+"px "+font2;
    ctx.textAlign="center"; 
    ctx.lineWidth = 6;
    ctx.strokeStyle = "#333";
    ctx.strokeText(text2,310,220);
    ctx.fillStyle = "#fff";
    ctx.fillText(text2,310,220);

    ctx.beginPath();
    ctx.font= "10px arial";
    ctx.fillStyle = "#fff";
    ctx.fillText(my_underline_text,530,306);

    ctx.closePath();
}

function draw_cocacola2(text1,text2,font1,font2,font_size1,font_size2){
//draw img
    var img=document.getElementById("img");
    ctx.drawImage(img,0,0);
//draw text
    ctx.beginPath();
    ctx.font= font_size1+"px "+font1;
    ctx.textAlign="right"; 
    ctx.lineWidth = 7;
    ctx.strokeStyle = "#333";
    ctx.strokeText(text1,370,182);
    ctx.fillStyle = "#fff";
    ctx.fillText(text1,370,182);

    ctx.beginPath();
    ctx.font= font_size2+"px "+font2;
    ctx.lineWidth = 5;
    ctx.textAlign="center"; 
    ctx.fillStyle = "white";
    ctx.strokeStyle = "#333";
    ctx.rotate(-90*Math.PI/180);
    // ctx.strokeText(text2,-160,440);
    ctx.fillText(text2,-160,440);

    ctx.beginPath();
    ctx.font= "10px arial";
    ctx.fillStyle = "black";
    ctx.fillText(my_underline_text,530,306);

    ctx.closePath();
}

function draw_cocacola3(text1,text2,font1,font2,font_size1,font_size2){
//draw img
    var img=document.getElementById("img");
    ctx.drawImage(img,0,0);
//draw text
    ctx.beginPath();
    ctx.font= font_size1+"px "+font1;
    ctx.textAlign="right"; 
    ctx.lineWidth = 7;
    ctx.textAlign="center"; 
    ctx.strokeStyle = "#333";
    // ctx.strokeText(text1,382,230);
    ctx.fillStyle = "#fff";
    ctx.fillText(text1,320,230);

    ctx.beginPath();
    ctx.font= font_size2+"px "+font2;
    ctx.lineWidth = 5;
    ctx.textAlign="center"; 
    ctx.fillStyle = "white";
    ctx.strokeStyle = "#333";
    // ctx.strokeText(text2,-160,440);
    ctx.fillText(text2,325,260);

    ctx.beginPath();
    ctx.font= "10px arial";
    ctx.fillStyle = "white";
    ctx.fillText(my_underline_text,530,306);

    ctx.closePath();
}

function draw_oracle(text1,text2,font1,font2,font_size1,font_size2){
//draw img
    var img=document.getElementById("img");
    ctx.drawImage(img,0,0);
//draw text
    ctx.beginPath();
    ctx.font= font_size1+"px "+font1;
    ctx.textAlign="center"; 
    ctx.lineWidth = 4;
    ctx.strokeStyle = "#333";
    ctx.strokeText(text1,290,290);
    ctx.fillStyle = "#fff";
    ctx.fillText(text1,290,290);

    ctx.beginPath();
    ctx.font= font_size2+"px "+font2;
    ctx.textAlign="center"; 
    ctx.lineWidth = 6;
    ctx.strokeStyle = "#333";
    ctx.strokeText(text2,300,240);
    ctx.fillStyle = "#fff";
    ctx.fillText(text2,300,240);

    ctx.beginPath();
    ctx.font= "10px arial";
    ctx.fillStyle = "#fff";
    ctx.fillText(my_underline_text,530,306);

    ctx.closePath();
}

function draw_microsoft(text1,text2,font1,font2,font_size1,font_size2){
//draw img
    var img=document.getElementById("img");
    ctx.drawImage(img,0,0);
//draw text
    ctx.beginPath();
    ctx.font= font_size1+"px "+font1;
    ctx.textAlign="center"; 
    ctx.lineWidth = 4;
    ctx.strokeStyle = "#333";
    ctx.strokeText(text1,290,270);
    ctx.fillStyle = "#fff";
    ctx.fillText(text1,290,270);


    ctx.beginPath();
    ctx.font= font_size2+"px "+font2;
    ctx.textAlign="center"; 
    ctx.lineWidth = 6;
    ctx.strokeStyle = "#333";
    ctx.strokeText(text2,290,220);
    ctx.fillStyle = "#fff";
    ctx.fillText(text2,290,220);

    ctx.beginPath();
    ctx.font= "10px arial";
    ctx.fillStyle = "#fff";
    ctx.fillText(my_underline_text,530,306);

    ctx.closePath();
}



function draw_crysis(text1,text2,font1,font2,font_size1,font_size2){
//draw img
    var img=document.getElementById("img");
    ctx.drawImage(img,0,0);
//draw text
    ctx.beginPath();
    ctx.font= font_size1+"px "+font1;
    ctx.textAlign="center"; 
    ctx.lineWidth = 4;
    ctx.strokeStyle = "#333";
    ctx.strokeText(text1,480,70);
    ctx.fillStyle = "#fff";
    ctx.fillText(text1,480,70);

    ctx.beginPath();
    ctx.font= font_size2+"px "+font2;
    ctx.textAlign="center"; 
    ctx.lineWidth = 6;
    ctx.strokeStyle = "#333";
    ctx.strokeText(text2,480,120);
    ctx.fillStyle = "#fff";
    ctx.fillText(text2,480,120);

    ctx.beginPath();
    ctx.font= "10px arial";
    ctx.fillStyle = "#fff";
    ctx.fillText(my_underline_text,530,306);

    ctx.closePath();
}


function draw_game_of_thrones(text1,text2,font1,font2,font_size1,font_size2){
//draw img
    var img=document.getElementById("img");
    ctx.drawImage(img,0,0);
//draw text
    ctx.beginPath();
    ctx.font= font_size1+"px "+font1;
    ctx.textAlign="center"; 
    ctx.lineWidth = 4;
    ctx.strokeStyle = "#333";
    ctx.strokeText(text1,290,270);
    ctx.fillStyle = "#fff";
    ctx.fillText(text1,290,270);

    ctx.beginPath();
    ctx.font= font_size2+"px "+font2;
    ctx.textAlign="center"; 
    ctx.lineWidth = 6;
    ctx.strokeStyle = "#333";
    ctx.strokeText(text2,290,220);
    ctx.fillStyle = "#fff";
    ctx.fillText(text2,290,220);

    ctx.beginPath();
    ctx.font= "10px arial";
    ctx.fillStyle = "#fff";
    ctx.fillText(my_underline_text,530,306);

    ctx.closePath();
}

function draw_rip(text1,text2,font1,font2,font_size1,font_size2){
//draw img
    var img=document.getElementById("img");
    ctx.drawImage(img,0,0);
//draw text
    ctx.beginPath();
    ctx.font= font_size2+"px "+font2;
    ctx.textAlign="center"; 
    ctx.lineWidth = 6;
    // ctx.strokeStyle = "#333";
    // ctx.strokeText(text2,290,220);
    ctx.fillStyle = "#5c5c5c";
    ctx.fillText(text2,290,200);


    ctx.beginPath();
    ctx.font= "30px andalus";
    ctx.textAlign="center"; 
    ctx.lineWidth = 4;
    // ctx.strokeStyle = "#333";
    // ctx.strokeText(text1,290,270);
    ctx.fillStyle = "#5c5c5c";
    ctx.fillText( death_cause ,290,300);


death_causes = [
    "الكحول",
    "مقتول",
    "شنقا",
    "خناقة عائلية",
    "السجائر",
    "جرعة مخدر زائدة"
];
death_cause = death_causes[getRandomInt(0,death_causes.length)];
    ctx.beginPath();
    ctx.font= "30px andalus";
    ctx.textAlign="center"; 
    ctx.lineWidth = 4;
    // ctx.strokeStyle = "#333";
    // ctx.strokeText(text1,290,270);
    ctx.fillStyle = "#5c5c5c";
    ctx.fillText( death_cause ,290,300);



    ctx.beginPath();
    ctx.font= "10px arial";
    ctx.fillStyle = "#fff";
    ctx.fillText(my_underline_text,510,306);

    ctx.closePath();
}




function getRandomInt(min, max) {
  return window.Math.floor(window.Math.random() * (max - min)) + min;
  // return i;
}