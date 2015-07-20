<?php 

function create_thumbnail( $path , $save , $width , $height ){
        $info =getimagesize($path);
        $size=array($info[0],$info[1]);
        
        if($info['mime'] == 'image/png'){
            $image=imagecreatefrompng($path);
        }elseif($info['mime'] == 'image/jpeg'){
            $image=imagecreatefromjpeg($path);
        }elseif($info['mime'] == 'image/gif'){
            $image=imagecreatefromgif($path);
        }else{
            return false;
        }
        
        $thumb= imagecreatetruecolor($width,$height);

        $src_aspect = $size[0] / $size[1];
        $thumb_aspect = $width / $height;
        
        if($src_aspect < $thumb_aspect){
            //narrower
                $scale=$width / $size[0];
                $new_size =array($width , $width / $src_aspect );
                $src_pos=array(0, ($size[1] * $scale - $height)/$scale/2);
        }elseif($src_aspect > $thumb_aspect){
            //wider
                $scale=$height / $size[1];
                $new_size =array($height * $src_aspect , $height );
                $src_pos=array( ($size[0] * $scale - $width)/$scale/2 , 0);
                // var_export($src_pos);
        }else{
            $new_size=array($width,$height);
            $src_pos=[0,0];
        }
              
        $new_size[0]=max($new_size[0],1);
        $new_size[1]=max($new_size[1],1);
        

        imagecopyresampled($thumb, $image, 0, 0, $src_pos[0], $src_pos[1], $new_size[0], $new_size[1], $size[0], $size[1]);


        if($save == false){
            header('Content-Type: image/jpeg');
            return imagejpeg($thumb);
        }else{
            return imagejpeg($thumb,$save);
        }

        
}


?>