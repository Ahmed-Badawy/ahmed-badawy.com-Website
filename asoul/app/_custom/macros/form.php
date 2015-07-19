<?php 

function ititrate($list){
	$new_list = null;
	foreach($list as $key => $val){
		if(is_array($val)){
			$new_list[$key] = ititrate($val);
		}else{
			if(!is_numeric($key)) $new_list[$key] = $val;
			else $new_list[$val] = $val; 
		}
	}
	return $new_list;
}

Form::macro('new_select', function($name,$label,$list,$selected,$class=null,$options=[]){
	if(empty($options)) $options = ['class'=>'form-control '.$class, 'required' ];
	$new_list = ititrate($list);
 	echo $field = Form::label($name,$label);
 	$field = Form::select($name,$new_list,$selected,$options);
	return $field;
});

Form::macro('num', function($name,$value,$attrs=null){
	$options = null;
	if(isset($attrs)){
		foreach($attrs as $attr=>$val){
			$options .= "$attr='$val'";
		}
	}	
 	$field = "<input type='number' value='$value' name='$name' $options>";
	return $field;
});