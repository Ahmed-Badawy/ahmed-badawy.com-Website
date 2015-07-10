
<?php   
$index = [
        "img" => get_thumb($page_img),
        "title" => "My Ideas! - أفكارى",
        "desc" => "Just Testing & Documentating Some of My Projects & ideas & APIs",
        "desc2" => "ملحوظة: جميع البرامج هنا تجريبية - إذا كنت تريد شراء النسخ المكتملة منها يمكنك الإتصال بـ <span class='bright'>".social('my_phone_1')."</span>.",
        // "desc2" => "These Applications are not in a stable final state, meant to be used for testing purposes only. This means that there will be unfinished features, bugs, many updates and even untested modules, code & plugins. These Applications require internet connection to work on our server. if you need a private version for your own work please call the developer: ahmed badawy -- 01111988246",
        "itiration" => sr::projects(),
];
?>


@include(get_location("index"))
