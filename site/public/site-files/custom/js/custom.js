$(document).ready(function(){

	$('.footer-icons').hover(function(){
		$(this).css('color','white').css('text-decoration','none');
	},function(){
		$(this).css('color','#2a9fd6').css('text-decoration','none');
	})

});



	function close_window(msg) {
		if (confirm(msg)) {
			close();
		}
	}