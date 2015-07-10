<?php 


    function render_loader(){
        $loader="
<div id='loader' class='text-center' ng-show='loader'>
    <span style='position: relative;'>
      <p class='loader-text' >
      <img src=".imgs_dir.'site/spinners/1.gif'." width='90dp'>Loading</p>
    </span>
</div>
        ";
        return $loader;
    }
    
    
if ( ! function_exists('br')){
    function br($int=1){
        for( $i =0 ; $i !=$int ; $i++ ){ echo "<br>"; }
    }
} 

if ( ! function_exists('sp')){
    function sp($int=1){
        for( $i =0 ; $i !=$int ; $i++ ){ echo "&nbsp;"; }
    }
} 

if ( ! function_exists('hr')){
    function hr($int=1){
        for( $i =0 ; $i !=$int ; $i++ ){ echo "<hr class='clear' >"; }
    }
}

if ( ! function_exists('icon')){
    function icon($icon='user',$size=1){
        echo "<i class='icon-$icon icon-".$size."x'></i> ";
    }
}

if ( ! function_exists('fa')){
    function fa($icon,$size=1,$color=null,$options=null){
        if($color) $options .= " style='color:$color'";
        if($size==null) $final = "<i class='fa fa-$icon fa-fw' $options></i>";
        elseif($size==1) $final = "<i class='fa fa-$icon fa-fw fa-lg' $options></i>";
        else $final = "<i class='fa fa-$icon fa-fw fa-".$size."x' $options></i>";
        return $final;
    }
}

if ( ! function_exists('fa2')){
    function fa2($icon,$outer_class_addons=[],$options=null){
        $inner_class_addons = [$icon,"fw"];
        if( $outer_class_addons==0 ) $inner_class_addons[] = '';
        elseif( !isset($outer_class_addons['size']) ) $inner_class_addons[] = "lg";
        if(!empty($outer_class_addons)) $class_addons = array_merge($inner_class_addons,$outer_class_addons);
        else $class_addons = $inner_class_addons;
        $str = "fa";
        foreach($class_addons as $val){
            if(substr($val,0,6) == "notFa_"){ //means don't put the fa in front of the word
                    $str .= "  ".substr($val,6);
            }else $str .= " fa-$val";
        }
        $final = "<i class='$str' $options></i>";
        return $final;        
    }
}


if ( ! function_exists('echo_link')){    
        function echo_link($href, $str , $class=null ,$return=null,$attributes=null){
            $link = "<a href='".$href."' class='".$class."' ".$attributes." >".$str."</a>";
            if($return==null){ echo $link; }else{ return $link; }
        } 
}

/**
 * if finds // in a string return true
 */
if ( ! function_exists('seperator_check')){    
        function seperator_check($str){
            if(strstr($str, "//" )){ return true; }else{ return false; }
        }
}

if ( ! function_exists('U')){
    function U($str){
        return ucwords(unslash($str));
    }
}


/** 
 * takes number of any thing and get responding text...
 */
if ( ! function_exists('lorem')){    
    function lorem($phars=1,$words=null){  //can call it lipsum
        
        if($phars){
            for($i = 0;$i<$phars;$i++){
            echo   "
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam
mollis venenatis erat, at condimentum tellus eleifend eget. Etiam
nibh sem, tempus non lobortis sit amet, faucibus sed nisl.
Suspendisse mollis auctor quam et suscipit. Praesent porttitor
lacinia pharetra. Nunc magna nulla, ullamcorper id cursus quis,
fringilla ac felis. Suspendisse rutrum consequat ante, quis pretium
massa semper at. Nam malesuada rhoncus ante eget congue. Aliquam
mollis ullamcorper sapien eget lobortis. Praesent libero quam,
fringilla eu mattis sed, dapibus in nisl. In placerat viverra ipsum.
Ut vitae orci sit amet mi condimentum aliquam.<br />
            ";
            }
        }
        if($words){
            for($i = 0;$i<$words;$i++){
                echo "Lorem ipsum ";
            }            
        }
        
    }
}

if ( ! function_exists('j_open')){    
    function j_open(){
        $open = "<script>$('document').ready(function (){";
        echo $open;
    }
}

if ( ! function_exists('j_close')){    
    function j_close(){
        $close = "});</script>";
        echo $close;
    }
}

if ( ! function_exists('echo_js')){    
    function echo_js($script){
        j_open();
        echo $script;
        j_close();
    }
}

//---------------------------------------How to use a modal--------------------------------------
if ( ! function_exists('modal_here')){    
    function modal_here($write_what){
        $config = func_get_args();
        $config = $config[1];
        if($write_what =="button"){
            $return = '
             <a style="'.$config['style'].'" id="'.$config['id'].'" data-toggle="modal" href="'.$config['href'].'">
            <button class="'.$config['class'].'">'.$config['text'].'</button>
            </a>';
        }elseif($write_what=="body"){
            $return = '
<div class="modal fade" id="'.$config['id'].'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<h4 class="modal-title">'.$config['title'].'</h4>
</div>
<div class="modal-body">
            ';
        }elseif($write_what=="footer"){
$config = ($config!='') ? $config : '<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>';
$return = '         
</div>
<div class="modal-footer">
'.$config.'
</div>
</div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
</div><!-- /.modal -->
  ';
        }
        return $return;
    }
}
//testing:-
/*   
$attrs = array(
      "id"=>"auto_trigger", //if auto_trigger ,it will run directly when load...
      "href"=>"#login_error", // id of the body part of the modal...
      "style"=>"display:inline;",
      "text"=>"hahaha",
      "class"=>"btn btn-danger",
      );
echo modal_here("button",$attrs);

$attrs =array(
    'id'=>'login_error',
    'title'=>"sorry man",
);
echo modal_here("body",$attrs);
?>
here is the body of the modal. this is changeable...
<?php
$content = '
<button type="button" class="btn btn-primary">Save changes</button>    
<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        ';
echo modal_here("footer",$content); 
?>
*/
//-------------------------------modal--------------------------------------------------------

if ( ! function_exists('function_name')){    

}
    
?>