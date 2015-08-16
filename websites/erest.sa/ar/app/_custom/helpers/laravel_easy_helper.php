<?php

/*****************************************************************
View Generators
*****************************************************************/
	// function get_view($view,$data,$layout=DEFAULT_LAYOUT){
	// 	// $data["content"] = get_location($view);
 //        // return view(get_location("-layouts.$layout.-box2"),$data);
 //        return $layout->nest('content', $view, $data);
	// }
	function get_location($view , $exact_location=null){
//        return "main-site.left.$view";
        return $view;
    }
    function get_it($file_name,$attrs=null){
        $path = [
            "jquery" => "jQuery/jQuery.js",
            "bootstrap.css"=>"Bootstrap/css/bootstrap.min.css",
            "bootstrap.js"=>"Bootstrap/js/bootstrap.min.js",
            "custombox.css"=>"jQuery/plugins/CustomBox/jquery.custombox.css",
            "custombox.js"=>"jQuery/plugins/CustomBox/jquery.custombox.js",
            "icheck.css"=>"jQuery/plugins/iCheck/css/flat/blue.css",
            "icheck.js"=>"jQuery/plugins/iCheck/js/icheck.min.js",
            "jquery.mask.js"=>"jQuery/plugins/jQuery Mask/jquery.mask.min.js",
            "jquery.form.js"=>"jQuery/plugins/jQuery Form/jquery.form.min.js",
            "font-awesome.css"=>"plugins/font-awesome/css/font-awesome.min.css",
            "angular"=>"angular/sources/angular.min.js",
            "ngRoute"=>"angular/sources/angular-route.min.js",
            "ngResource"=>"angular/sources/angular-resource.min.js",
        ];

        if(!Dev){
            $production_paths = [
"bootstrap.css" => '<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">',
"bootstrap.js" => '<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>',
"jquery" => '<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>',
"font-awesome.css" => '<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">',
"angular" => '<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.13/angular.min.js"></script>',
            ];
            if(in_array($file_name, array_keys($production_paths) )){
                return $production_paths[$file_name];
            }
        }

        $keys_array = array_keys($path);

        if(in_array($file_name, $keys_array)){
             return (preg_match("/.css$/",$file_name)) ? 
                    "<link media='all' type='text/css' rel='stylesheet' $attrs href='".theme_dir.$path[$file_name].VersionNumber."' />" :
                    "<script src='".theme_dir.$path[$file_name].VersionNumber."'></script>";
        }elseif(preg_match("/^custom_css\/.*\.css$/is",$file_name)){
            $file_name = preg_replace('/custom_css\//is','',$file_name);
            $final = "<link media='all' type='text/css' rel='stylesheet' $attrs href='".theme_dir."custom_pages/".$file_name.VersionNumber."' />";
        }elseif(preg_match("/\.css$/i", $file_name)){
            $final = "<link media='all' type='text/css' rel='stylesheet' $attrs href='".theme_dir.$file_name.VersionNumber."' />";
        }elseif(preg_match("/\.js$/i", $file_name)){
            $final = "<script src='".theme_dir.$file_name.VersionNumber."'></script>";
        }elseif(preg_match("/\.img|jpg|tif|png|gif|ico$/i", $file_name)){
            $final = public_dir.$file_name;
        }
        if(!isset($final)) die("we cound't find a match for: ".$file_name);
        // die($final);
        return $final;
    }



    function th($src,$width=140,$height=140){
        return url("api/thumb/$src?width=$width&height=$height");
    }

    function get_thumb($src,$width=140,$height=140){
        // th($src,$width,$height);
        // die;
        // die('hello');
		$path_array = explode(".",$src);
		$ext = array_pop($path_array);
		$file_path = implode(".",$path_array);
		$thumb_format = $file_path."-$width"."x"."$height.jpg";

// --------------------just temprory--------------------------------------------------
		// if(file_exists(real_imgs_dir.$thumb_format)){
		// 	// die("1-".imgs_dir.$thumb_format);
  //   		return imgs_dir.$thumb_format;
  //   	}elseif(file_exists(real_imgs_dir.$file_path.".".$ext)){
//           die("2-");
//           return imgs_dir.$file_path.".".$ext;
  //   	}else{
  //   		die("3-".real_imgs_dir.$file_path.".".$ext);
  //   		return '';
  //   	}
// ----------------------------------------------------------------------

    	if(file_exists(real_imgs_dir.$thumb_format)){
            // die("file_exists: ".real_imgs_dir.$thumb_format);
    		return imgs_dir.$thumb_format;
    	}else{      // Create Thumb
    		if(!file_exists(real_imgs_dir.$src)) die("$src --> image doesn't exist.") ;
	    	else{
	    		// die("Current image is: $src") ;
	    		create_thumbnail(real_imgs_dir.$src , real_imgs_dir.$thumb_format , $width,$height);
		    	return imgs_dir.$thumb_format;
		    }
		    die("fuck Get Thumb Didn't work on : $src");
    	}
    }

    function get_thumb2($path,$width=140){
        // $img_path= (Dev) ? Croppa::url('ahmed-badawy/public/'.$path, $width, $height) 
        //                                         : Croppa::url('site/public/'.$path, $width, $height);
        // return "http:$img_path";
        // $path = preg_replace("/.jpg/","-140x140.jpg",$path);
        // return public_dir.$path;
die;
        $path_array = explode(".",$path);
        $extention = array_pop($path_array);
        $path = implode(".",$path_array);

        $save_path = real_imgs_dir.$path.'.'.$extention;
        $resized_save_path = $save_path."_resized-Width-$width.jpg";
        $get_img_path = imgs_dir.$path.'.'.$extention."_resized-Width-$width.jpg";
        $old_path = $path."-140x140.jpg";
        
        if(file_exists($resized_save_path)) return $get_img_path;
        elseif(file_exists(real_imgs_dir.$old_path)) return imgs_dir.$old_path;
        elseif(!file_exists($save_path)) die("image ($path) -> doesn't exist...");
        else{
            $image = new \SimpleImage();
            $image->load($save_path);
            $image->resizeToWidth($width);
            // $image->resize($width,$height);
            $image->save($resized_save_path);
        }
        return $get_img_path;
    }
    
    function get_angular($project=null,$folder='projects'){
        $ans = null;
        $ans.= get_it('angular')."\n";
        $ans.= get_it('ngResource')."\n";
        $ans.= get_it('ngRoute')."\n";
        if($project){
            $file = theme_dir."angular/app/$folder/$project.js";
            $ans.= "<script src='".$file.VersionNumber."'></script>"."\n";
        }
        return $ans;
    }
/****************************************************************/




    function get_routes_array($routes){
      $arr = [];
      foreach($routes as $route){
            $arr[] = [
                  "logo"=>$route['logo'],
                  "title"=>$route['page_title'],
                  'link'=>$route['link']
            ];
      }
      return $arr;
    }