<?php

class Site_routes {

    public static function get($require, $what = null) {
        // $routes_array = [];
        if ($require == 1) {
            require("site_routes/site_routes_common.php");
        } elseif ($require == 2) {
            require("site_routes/site_routes_pages.php");
        } elseif ($require == 3) {
            require("site_routes/site_routes_projects.php");
        } elseif ($require == 4) {
            require("site_routes/site_routes_hidden.php");
        } elseif ($require == 5) {
            require("site_routes/site_routes_siteTests.php");
        } elseif ($require == 6) {
            require("site_routes/site_routes_api.php");
        } elseif ($require == 7) {
            require("site_routes/site_routes_spidro.php");
        } elseif ($require == 8) {
            require("site_routes/site_routes_sellingManager.php");            
        } elseif ($require == 9) {
            require("site_routes/site_routes_games.php");                 
        } else {
            err("not a defined site route");
        }
        // err($require."--".$what);
        // err($routes_array[$what]);
        if ($what == null) $ans = $routes_array;
        else $ans = $routes_array[$what];
        return $ans;
    }


    public static function common($what = null) {
        return self::get(1, $what);
    }

    public static function pages($what = null) {
        return self::get(2, $what);
    }

    public static function projects($what = null) {
        return self::get(3, $what);
    }

    public static function hidden($what = null) {
        return self::get(4, $what);
    }

    public static function siteTests($what = null) {
        return self::get(5, $what);
    }

    public static function api($what = null) {
        return self::get(6, $what);
    }
    public static function spidro($what=null){
        return self::get(7,$what);
    }
    public static function selling_manager($what = null) {
        return self::get(8, $what);
    }
    public static function games($what = null) {
        return self::get(9, $what);
    }
    
/*****************************************************
**  Build Site Map
*****************************************************/
    public static function bulid_links_site_map(){
        $site_map_links = [];
        $files_to_require_array = [
                "site_routes_common",
                "site_routes_pages",
                "site_routes_projects",
//                "site_routes_hidden",
                "site_routes_siteTests",
                "site_routes_api",
                "site_routes_spidro",
                "site_routes_sellingManager"
        ];
        foreach($files_to_require_array as $file_to_require){
            require("site_routes/".$file_to_require.".php");
            foreach($routes_array as $route){
                $site_map_links[] = $route['link'];
            }
        }
        return $site_map_links;
    }
/*--------------------------------------------------*/





    


    

}