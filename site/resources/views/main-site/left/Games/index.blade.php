
<?php   
$index = [
        "img" => get_thumb($page_img),
        "title" => "Games I Developed",
        "desc" => "This is Some of the Games i have Developed.",
        "desc2"=>'معذرة! بعض هذه الألعاب غير مجهز للعمل مع الأجهزة المحمولة (الموبيل - التابلت)',
        "itiration" => sr::games(),
];
?>


@include(get_location("index"))
