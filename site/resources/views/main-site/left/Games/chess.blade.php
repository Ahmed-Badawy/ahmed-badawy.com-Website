@section('breadcrumbs')
@overwrite
@section('media')
@overwrite
@section('header')
@overwrite
@section('footer')
@overwrite
@section('css_section')
@overwrite
@section('js_section')
@overwrite
@section('modals')
@overwrite


    <h1 class="text-center bright bright-background">Chess Game</h1>
	<div id="game"></div>


<!--
	<script type="text/javascript" src='jquery.chess.min.js'></script>
-->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
{!! get_it('jQuery/plugins/chess/jquery.chess.min.js') !!}
<script type="text/javascript">
	$(document).ready(function(){
		$("#game").chess();
	});
</script>

