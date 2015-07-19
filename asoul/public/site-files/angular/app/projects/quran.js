var myApp = angular.module('myApp',['ngRoute','ngResource']);

myApp.controller('main',function($scope,$timeout,$http){
//setting up audio
var audio = window.document.getElementById('audio');
audio.volume = 1;
$scope.playlist = [];
$scope.currently_playing = null;
bs1 = document.getElementById('bs1');
bs2 = document.getElementById('bs2');

$scope.config_playlist = function(begin){
    this.stop = false;
    playlist = [];
    soras.forEach(function(sora,sora_key){
        sora.forEach(function(aya,aya_key){
            // console.log(sora_key+"-"+aya_key);
            if ( (sora_key>begin.sora && aya_key==0) || (sora_key==begin.sora && begin.aya==0 && aya_key==0) ){
                playlist.push({sora:sora_key,aya:0,bas:"true"});
            }
            if(sora_key==begin.sora && aya_key>=begin.aya) playlist.push({sora:sora_key,aya:aya_key});
            else if(sora_key>begin.sora) playlist.push({sora:sora_key,aya:aya_key});
        });
    });
    $scope.playlist = playlist;
    // console.log($scope.playlist);
}
$scope.config_playlist({sora:0,aya:0});


$scope.cover_area = function(){
    if($scope.playlist[0].bas=="true") return false;
    points = soras[$scope.playlist[0].sora][$scope.playlist[0].aya];
    if(points.length<2) bs2.setAttribute('style','');
    points.forEach(function(point,key){
        cor = "left:"+point[0]+"px;top:"+point[1]+"px;width:"+point[2]+"px;height:"+point[3]+"px;";
        if(key==0) bs1.setAttribute('style',cor);
        if(key==1) bs2.setAttribute('style',cor);
    });
}

$scope.check_style = function(sora,aya){
    format = sora+"---"+aya;
    if(format == $scope.currently_playing) return 'bright';
}


$scope.go_play = function(){
    sora = $scope.playlist[0].sora;
    aya = $scope.playlist[0].aya;
    $scope.currently_playing = sora+"---"+aya;

    if($scope.playlist[0].bas=="true"){
        bs1.setAttribute('style','');
        bs2.setAttribute('style','');
        url = base_url+"bismillah.mp3";
    }else{
        $scope.cover_area();
        url = base_url+sora+"/"+aya+".mp3";
    }
    audio.src = url;
    audio.play();
}
$scope.go_play();

$scope.new_playlist = function(sora,aya){
        audio.pause();
        $scope.config_playlist({sora:sora,aya:aya});
        $scope.go_play();
}

audio.addEventListener("ended", function(){
    if(playlist.length>0){
        $scope.playlist.shift();
        console.log($scope.playlist);
        sora = $scope.playlist[0].sora;
        aya = $scope.playlist[0].aya;
        $scope.currently_playing = sora+"---"+aya;
        $scope.go_play();
    }
});

    audio.play();
});




