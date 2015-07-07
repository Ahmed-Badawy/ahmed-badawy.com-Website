

@section("get_angular")
	{!! get_angular("pornstars") !!}
@show



@section("css_add")

.thumbnail {
    background-color: transparent;
}

	.thumbnail.with-caption {
		display: inline-block;
		margin-right:1px;
		border:0;
		margin-bottom:10px;
	}
	.with-caption p {
		margin-top: -8px;
		font-weight:bolder;
		padding-top: 0.5em;
		font-family: 'Open Sans';
		font-size:130%;
		padding-bottom:10px;
		border-radius:0px 0px 10px 10px;
		width:80%;
		margin:0 auto;
	}

	.thumbnail.with-caption img {
		height:340px;
		border-radius:10px;
		border:2px dashed #fff;
		padding:1px;
		margin:0;
	}
	@media screen and (max-width: 768px) {
	    .thumbnail.with-caption img {
	    		height:230px;
	    }
	}
	@media screen and (max-width: 350px) {
	    .thumbnail.with-caption img {
	    	height:300px;
	    }
	}

	.thumbnail.with-caption small:before {
		content: '\2014 \00A0';
	}
	.thumbnail.with-caption small {
		width: 100%;
		text-align: right;
		display: inline-block;
		color: #999;
	}


	p{
		margin:0;
		padding:0;
	}




	.page2{
			position:fixed;
			z-index:900;
			background-color:white;
			border:4px solid #5a5a5a;
			padding:10px;
			border-radius:10px;
			margin-top:10px;
	}
	.page2 img{
		height: 300px;
		margin-right:10px;
	}
	@media screen and (max-width: 700px){
		.page2 img{
			height: 200px;
		}
	}

	.cover{
		position:fixed;
		padding:0;
		margin:0;
		width: 100%;
		height: 100%;
		z-index:800;
		background:black;
		visibility: hidden;
		transition : all 3s liner;
	}
	.dimScreen{
		opacity:.6;
		visibility: visible;
	}


	.thumbnail{
		position: relative;
	}
	.num{
		color:white;
		font:bolder;
		font-size: 120%;
		position:absolute;
		background:rgba(100,100,100,.9);
		border-radius: 10px;
		border:white solid 1px;
		width:50px;
		top:-3px;
	}

	.fixed-button{
		position:fixed;
		top:30%;
		z-index:999;	
	}
	.next-fixed-button{
		right:-5px;
	}
	.back-fixed-button{
		left:-5px;
	}
@overwrite



<div class="row">
<div class="col-md-12">
      <ng-view></ng-view>
</div>
</div>


