<?php 

function bad_style($type){
	 	$style= array(
	 		'border1'=>
 			'
 				font-family:Monaco,Menlo,Consolas,"Courier New",monospace;
	 			border:solid black 2px;
	 			width:800px;
	 			border-radius:30px;
	 			padding:10px;
	 			margin:0 auto;
			',
			'border2'=>
			'
                border:solid blue 2px;
                padding:10px; 
                border-radius:30px;
                background-color:yellow;
                text-align:center;
                font-size:1.5em;
                font-family:tahoma;
			',
			'border3'=>
			'
				color:white;
				background-color:gray;
				border-radius:20px;
				text-align:center;
			'
		);
		return $style[$type];
	}

?>