<!DOCTYPE html>
<html>
<head>
	<meta charset='utf-8'>
	<title></title>
</head>
<body>

<h1>Mobile Intents</h1>

<a href="mailto:admin@ahmed-badawy.com?subject=this is the subject">
  أرسل رسالة ميل
</a>
<hr>

<a href="tel:01028999810">Make a Phone Call to: 01028999810</a>
<hr>

<a href="whatsapp://send?text=The text to share!" data-action="share/whatsapp/share">Share a text via Whatsapp</a>
<hr>

<a href="geo:30,31">Open Location on Google Maps</a>
<hr>

<label>take img & upload</label>
<input type="file" accept="image/*;capture=camera">
<hr>

<label>take a video & upload</label>
<input type="file" accept="video/*;capture=camcorder">
<hr>

<label>take a Sound & upload</label>
<input type="file" accept="audio/*;capture=microphone">
<hr>


    autocorrect<input type="text" placeholder="Star's name"/>
    <br>
    no autocorrect<input type="text" autocorrect="off" placeholder="Star's name"/>
<hr>
    autocapitalize<input type="text" placeholder="Tag your sighting"/>
    <br>
    no autocapitalize<input type="text" autocapitalize="off" placeholder="Tag your sighting"/>
<hr>



<h1>Sharing Buttons</h1>

<?php 
  $url = rawurlencode("http://ahmed-badawy.com/site/projects/quran");
  $title = rawurlencode("this is the title");
  $img = "http://ahmed-badawy.com/site/public/site-imgs/met/1.jpg";
  $text = rawurlencode("body - hello! my website: http://ahmed-badawy.com/site
<br>br
a new mention: @ahmed_badawy التانى: @ahmed_badawy_x  ده واح كمان #هشخ_يعنى_هشخ");
?>

<a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $url; ?>" onclick="centeredPopup(this.href,'myWindow','700','300','yes');return false">Share in Facebook</a>

<hr>

<a target="_blank" href="http://twitter.com/home?status=<?php echo $text; ?>" onclick="centeredPopup(this.href,'myWindow','700','300','yes');return false">Share in Twitter</a>

<hr>

<a target="_blank" href="https://plus.google.com/share?url=<?php echo $url; ?>&gpsrc=frameless" onclick="centeredPopup(this.href,'myWindow','700','300','yes');return false">Share in Google+</a>

<hr>

<a target="_blank" href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo $url; ?>&title=<?php echo $title; ?>&summary=<?php echo $text; ?>" onclick="centeredPopup(this.href,'myWindow','700','300','yes');return false">Share in Linked-In</a>

<hr>

<a target="_blank" href="https://www.pinterest.com/pin/create/button/?url=<?php echo $url; ?>&media=<?php echo $img; ?>&description=<?php echo $text; ?>" onclick="centeredPopup(this.href,'myWindow','700','300','yes');return false">Share in Pinterest</a>

<hr>

<a target="_blank" href="mailto:?subject=<?php echo $title ?>&body=<?php echo $text ?>">Send Email</a>
<br>
<a target="_blank" href="whatsapp://send?text=<?php echo $text; ?>">Share in whatsApp</a>


  </p>




  <script language="javascript">
  //to use this function just call it on click: onclick="centeredPopup(this.href,'myWindow','700','300','yes');return false"
    var popupWindow = null;
    function centeredPopup(url,winName,w,h,scroll){
      LeftPosition = (screen.width) ? (screen.width-w)/2 : 0;
      TopPosition = (screen.height) ? (screen.height-h)/2 : 0;
      settings =
      'height='+h+',width='+w+',top='+TopPosition+',left='+LeftPosition+',scrollbars='+scroll+',resizable'
      popupWindow = window.open(url,winName,settings);
    }

  </script>
  <!-- <p><a href="http://www.quackit.com/common/link_builder.cfm" onclick="centeredPopup(this.href,'myWindow','700','300','yes');return false">Centered Popup</a></p> -->


</body>
</html>