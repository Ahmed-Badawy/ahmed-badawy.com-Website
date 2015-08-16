<?php


//offline version
$config['db_host']='localhost';
$config['db_name']='courtaks_erest';
$config['db_user']='root';
$config['db_pass']='';


//online version
$config['db_host']='localhost';
$config['db_name']='erests8_ar';
$config['db_user']='erests8_sadmin';
$config['db_pass']='ahmedBadawy_com123';




foreach ($config as $key=>$value){
    define( strtoupper($key) , $value );
}

//this is how we make a connection:-
$connection = mysql_connect(DB_HOST,DB_USER,DB_PASS);
if( !$connection ){
	die( "DataBase connection Failed " . mysql_error() );
}
$db_select=mysql_select_db(DB_NAME,$connection);//you don't have to spell the $connection
if(!$db_select){
	die( "can't select DataBase" . mysql_error() );
}


	$out = [];
	$query=mysql_query("SELECT * FROM users");
	while ($row = mysql_fetch_assoc($query)){  
		$out[] = $row;         
	} 
    echo "<pre>";
    var_export($out);



