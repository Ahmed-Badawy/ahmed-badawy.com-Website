<!-- ******************************************************************** -->
<h3 id="tools_used" class='acc_header' dir='rtl'>أدوات و برمجيات أستخدمها</h3>

<div id="tools_used_accordion" class='custom_accordion'>

    <div class='col-sm-12 english'>
        <h3 class="text-center english">Tools I Use</h3>

        <ul class='col-sm-6'>
            <li>Sublime Text IDE</li>
            <li>NetBeans IDE</li>
            <li>Emmet For Shortcuts in HTML & CSS</li>
        </ul>
        <ul class='col-sm-6'>
            <li>Twitter BootStrap for Fast Designs</li>
            <li>PHP Composer</li>
            <li>PHP Packagist</li>
        </ul> 

<div class="clearfix"></div>
<hr>

                
<?php 
    $array = array(
              "php" => "http://www.php.net/",
              "laravel" => "http://laravel.com/",
              "codeigniter" => "http://ellislab.com/codeigniter",
              "zend" => "http://framework.zend.com/",
              "wordpress" => "http://wordpress.org/",
              "html5" => "http://www.w3schools.com/html/html5_intro.asp",
              "css3" => "http://www.w3schools.com/css/DEFAULT.asp",
              "javascript" => "http://www.w3schools.com/js/DEFAULT.asp",
              "jquery" => "http://jquery.com/",
              "AngularJS" => "https://angularjs.org/",
              "json" => "http://www.json.org/",
              "less" => "http://lesscss.org/",
              "sass" => "http://sass-lang.com/",
              "java" => "http://www.java.com/",
              "smarty" => "http://www.smarty.net/",
              "regex" => "http://www.regular-expressions.info/",
              "composer" => "https://getcomposer.org",
              "tb" => "http://getbootstrap.com/",
              "emmet" => "http://emmet.io/",
              "photoshop" => "www.photoshop.com/",
              "excel" => "#",
              "word" => "#",
              "ccna" => "#",
              "ccnp" => "#",
      );
 ?>

<div class="well">
<div class="row" id='tec8'>
<?php 
$i = 0;
    foreach($array as $img => $site){
echo "<div class='col-xs-6 col-sm-3 col-md-2'><a href='$site'><img src='".th("cv/$img.jpg")."' class='img-responsive img-thumbnail img-force'></a></div>";
// if($i==5 || $i==11 || $i==17) echo "</div><br><div class='row'>";
$i++;
    }
?>
</div>
</div>



        <div class="clearfix"></div>
    </div>

    <div class="clearfix"></div>


</div>