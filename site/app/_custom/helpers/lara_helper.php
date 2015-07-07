<?php

/*--------------------------------------------------------------
          User Helpers
--------------------------------------------------------------*/
if ( ! function_exists('is_in')){
    function is_in(){
        $obj = new Services\Common\User();
        $answer = $obj->is_in();
        return $answer;
    }
}

if ( ! function_exists('is_active')){
    function is_active($user){
        $obj = new Services\Common\User();
        return $obj->is_active($user);
    }
}

if ( ! function_exists('is_admin')){
    function is_admin(){
        if(is_in() && user_data('email')=='courtaks@yahoo.com') return true;
        return false;
    }
}


if ( ! function_exists('user_data')){
    function user_data($get_what){
        $obj = new Services\Common\User();
        return $obj->user_data($get_what);
    }
}

if ( ! function_exists('get_user_from_db')){
    function get_user_from_db($field_name,$field_value){
        $obj = new Services\Common\User();
        return $obj->get_user_from_db($field_name,$field_value);
    }
}

if ( ! function_exists('get_user_data_array')){
    function get_user_data_array(){
        $obj = new Services\Common\user();
        return $obj->get_user_data_array();
    }
}


if ( ! function_exists('update_last_hear')){
    function update_last_hear(){
        $obj = new Services\Common\User();
        $obj->update_last_hear();
    }
}

if ( ! function_exists('set_session')){
    function set_session($user_obj=null,$key=null,$value=null){
        $obj = new Services\Common\User();
        $obj->set_user_session_from_db($user_obj,$key,$value);
    }
}

if ( ! function_exists('session_flush_user')){
    function session_flush_user(){
        $obj = new Services\Common\User();
        $obj->session_flush_user();
    }
}

if ( ! function_exists('other_user')){
    function other_user($id){
        $obj = new Services\Common\User();
        return $obj->other_user($id);
    }
}



/*--------------------------------------------------------------
          Supper User Area:
--------------------------------------------------------------*/
if ( ! function_exists('is_banned')){
    function is_banned($email){
        $banned_array = ['admin','admin2','admin3'];
        return ( in_array($email,$banned_array) ) ? true : false; 
    }
}


/*--------------------------------------------------------------
          Lang Helpers
--------------------------------------------------------------*/
// if ( ! function_exists('get_location')){
//     function get_location($view , $exact_location=null){
//         // $obj = new Services\Langu;
//         // $location = $obj->get_lang_view_folder_name($view,$exact_location);
//         // return $location;
//         return "main-site.left.$view";
//     }
// }

if ( ! function_exists('get_lang')){
    function get_lang(){
        $obj = new Services\Langu;
        return $lang = $obj->get_lang();
    }
}

if ( ! function_exists( 'Lset')){
    function Lset($line){
        if(empty($line)) die('You didn\'t put any files in Lset function');
        $obj = new Services\Langu;
        $obj->set_lang_files( func_get_args() );
    }
}

if ( ! function_exists('t')){
    function t($line,$file_num=null,$talk_array=[]){
        $obj = new Services\Langu();
        $lang_files = Session::get('used_lang_files');
        $obj->used_lang_files = $lang_files;
        $out = $obj->t($line,$file_num,$talk_array);
        return $out;
    }
}
if ( ! function_exists('tu')){
    function tu($line,$file_num=null,$talk_array=[]){
        $ans = t($line,$file_num,$talk_array);
        return ucwords($ans);
    }
}
if ( ! function_exists('ft')){
    function ft($en_string,$ar_string){
        if(get_lang() == 'en') return $en_string;
        if(get_lang() == 'ar') return $ar_string;
    }
}



/*********************************************************************
                            View Helpers
**********************************************************************/ 
if ( ! function_exists('VM')){
    function VM($term ,$data=null,$basic_layout = null,$msg=null){
        $VM = new Services\Common\VM($term,$data,$basic_layout,$msg);
        $res = $VM->vm(); 
        return $res;
    }
}


/*********************************************************************
                              Sanitize Helpers
**********************************************************************/
if ( ! function_exists('sani')){
    function sani($term,$input=null,$options=null){
        $obj = new Services\Common\Sanitize($term , $input,$options);
        return $obj->san();
    }
}


// /*********************************************************************
//                 get css,js,img files from the theme folders
// **********************************************************************/
// if ( ! function_exists('get_it')){
//     function get_it($file_name,$attrs=null){

//         $path = [
//             "jquery" => "jQuery/jQuery.js",
//             "bootstrap.css"=>"Bootstrap/css/bootstrap.min.css",
//             "bootstrap.js"=>"Bootstrap/js/bootstrap.min.js",
//             "custombox.css"=>"plugins/_jquery/CustomBox/jquery.custombox.css",
//             "custombox.js"=>"plugins/_jquery/CustomBox/jquery.custombox.js",
//             "icheck.css"=>"plugins/_jquery/iCheck/css/flat/blue.css",
//             "icheck.js"=>"plugins/_jquery/iCheck/js/icheck.min.js",
//             "jquery.mask.js"=>"plugins/_jquery/jQuery Mask/jquery.mask.min.js",
//             "jquery.form.js"=>"plugins/_jquery/jQuery Form/jquery.form.min.js",
//             "font-awesome.css"=>"plugins/font-awesome/css/font-awesome.min.css",
//             "angular"=>"angular/sources/angular.min.js",
//             "ngRoute"=>"angular/sources/angular-route.min.js",
//             "ngResource"=>"angular/sources/angular-resource.min.js",
//         ];

//         if(!Dev){
//             $production_paths = [
// "bootstrap.css" => '<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">',
// "bootstrap.js" => '<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>',
// "jquery" => '<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>',
// "font-awesome.css" => '<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">',
// "angular" => '<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.12/angular.min.js"></script>',
//             ];
//             if(in_array($file_name, array_keys($production_paths) )){
//                 return $production_paths[$file_name];
//             }
//         }

//         $keys_array = array_keys($path);

//         if(in_array($file_name, $keys_array)){
//              return (preg_match("/.css$/",$file_name)) ? 
//                     "<link media='all' type='text/css' rel='stylesheet' $attrs href='".theme_dir.$path[$file_name].VersionNumber."'>" :
//                     "<script src='".theme_dir.$path[$file_name].VersionNumber."'></script>";
//         }elseif(preg_match("/^custom_css\/.*\.css$/is",$file_name)){
//             $file_name = preg_replace('/custom_css\//is','',$file_name);
//             $final = "<link media='all' type='text/css' rel='stylesheet' $attrs href='".public_dir."pages/".$file_name.VersionNumber."'>";
//         }elseif(preg_match("/\.css$/i", $file_name)){
//             $final = "<link media='all' type='text/css' rel='stylesheet' $attrs href='".theme_dir.$file_name.VersionNumber."'>";
//         }elseif(preg_match("/\.js$/i", $file_name)){
//             $final = "<script src='".theme_dir.$file_name.VersionNumber."'></script>";
//         }elseif(preg_match("/\.img|jpg|tif|png|gif$/i", $file_name)){
//             $final = imgs_dir.$file_name;
//         }
//         if(!isset($final)) die("we cound't find a match for: ".$file_name);
//         return $final;
//     }
// }
// if ( ! function_exists('get_thumb')){
//     function get_thumb($path,$width=140,$height=140){
//         $img_path= (Dev) ? Croppa::url('ahmed-badawy/public/'.$path, $width, $height) 
//                                                 : Croppa::url('site/public/'.$path, $width, $height);
//         return "http:$img_path";
//     }
// }

//     function get_angular($project=null){
//         $ans = null;
//         $ans.= get_it('angular');
//         $ans.= get_it('ngResource');
//         $ans.= get_it('ngRoute');
//         if($project) $ans.= get_it("angular/app/projects/".$project.".js");
//         return $ans;
//     }











?>