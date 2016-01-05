@section('css_add')
          .img{
            border:2px solid white;
            padding:4px;
          }
          .book-name{
              display:inline-block;
              height:1em;
              overflow:hidden;
          }
@overwrite





<div class="container">


    <div class="well" id="project_desc">
        <div>
            <img class="img-thumbnail img-responsive" src='{!! imgs_dir.$page_img !!}'>
        </div>
        <h3> {!!fa2($logo)!!} Book Sharing System !</h3>
        <div>
            <p style="color:white">Read books online. Aslo you can download them.</p>
            <p class='arabic' dir='rtl' style="color:white" >ﻫﻮ ﻋﺒﺎﺭﺓ ﻋﻦ ﻧﻈﺎﻡ ﻟﻤﺸﺎﺭﻛﺔ اﻟﻜﺘﺐ ﻭ اﻟﻮﺛﺎﺋﻖ. ﻭ ﻳﻤﻜﻨﻚ ﻗﺮاءﺓ اﻟﻜﺘﺐ ﻭ اﻟﻮﺛﺎﺋﻖ ﻣﺒﺎﺷﺮﺓ ﻋﻠﻰ اﻷﻧﺘﺮﻧﺖ ﺃﻭ ﺗﻨﺰﻳﻠﻬﺎ ﻋﻠﻰ ﺟﻬﺎﺯﻙ.</p>

            <button class="btn btn-primary" data-toggle="modal" data-target="#short_info">
                {!! fa2('question-circle') !!} <b>What is This App ?</b>
            </button>

        </div>
        <div class="clearfix"></div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="short_info" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h3  class="modal-title" id="myModalLabel"> {!!fa2($logo)!!}  Book Sharing System !</h3>
                </div>
                <div class="modal-body">
                    <p style="color:white">Read books online. Aslo you can download them.</p>
                    <hr>
                    <p class='arabic' dir='rtl' style="color:white">ﻫﻮ ﻋﺒﺎﺭﺓ ﻋﻦ ﻧﻈﺎﻡ ﻟﻤﺸﺎﺭﻛﺔ اﻟﻜﺘﺐ ﻭ اﻟﻮﺛﺎﺋﻖ. ﻭ ﻳﻤﻜﻨﻚ ﻗﺮاءﺓ اﻟﻜﺘﺐ ﻭ اﻟﻮﺛﺎﺋﻖ ﻣﺒﺎﺷﺮﺓ ﻋﻠﻰ اﻷﻧﺘﺮﻧﺖ ﺃﻭ ﺗﻨﺰﻳﻠﻬﺎ ﻋﻠﻰ ﺟﻬﺎﺯﻙ.</p>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>







<!-- Button trigger modal -->
<button class="btn btn-info" data-toggle="modal" data-target="#book_info">
  {!! fa2('question-circle') !!} <b>Book Sharing System ?</b>
</button>
<button class="btn btn-primary" data-toggle="modal" data-target="#newBook">
  {!!fa2('plus-square')!!} <b>Add New Book</b>
</button>
<hr>




<div class="row">
<?php $i = 0; ?>
@foreach($books as $book)

@section('dropdown-menu')
  <ul class="dropdown-menu">
    <li><a target='_blank' href="{{public_dir.'pdf/web/viewer.php?book_name='.$book->name_in_server}}">{!!fa2('eye')!!} Read</a></li>
    <!-- <li><a href="{{public_dir.'pdf/books/'.$book->name_in_server}}">{{fa('download',0)}} Download</a></li> -->
    <li><a href="{{url('projects/books/download/'.$book->id)}}">{!!fa2('download')!!} Download</a></li>
    <li><a href="{{url('projects/books/delete/'.$book->id)}}" class='delete-book'>{!!fa2('trash-o')!!}  Report / Delete</a></li>
    <li><a data-toggle="modal" data-target="#ban">{!!fa2('ban')!!}
 Ban</a></li>
    <li class="divider"></li>
    <li><a data-toggle="modal" data-target="#newBook">{!!fa2('plus-square')!!} Add New Book</a></li>
  </ul>
@overwrite


 <div class="col-sm-3 text-center">
  <input type="hidden" name="book_name" value='{{$book["name"]}}'>
           <p class='bright bright-background' style='margin-bottom:0px'>{{u($book->book_name)}}</p>

<div class="btn-group col-sm-12">
<!--   <a class="btn btn-primary btn-xs" href="#"><i class="fa fa-user fa-fw"></i> User</a> -->
  <a class="btn btn-primary btn-block dropdown-toggle btn-sm" data-toggle="dropdown" href="#">
    {!!fa2('cog')!!}</a>
@yield('dropdown-menu')
</div>  


<div class="btn-group">
<!--   <a class="btn btn-primary btn-xs" href="#"><i class="fa fa-user fa-fw"></i> User</a> -->
<a class="dropdown-toggle" data-toggle="dropdown" href="#">
  <img class="img-thumbnail img img-responsive" src='{{get_thumb("projects/pdf_book_imgs/".$book->img,230,300)}}' alt="{{u($book->book_name)}}">
</a>
@yield('dropdown-menu')
</div> 





  <a href="{{public_dir.'pdf/web/viewer.php?book_name='.$book->name_in_server}}" class='btn btn-primary btn-sm' style='width:85%' target='_blank'>
   {!! fa2('eye',0) !!} Read
  </a>           
 </div><!-- /.col-sm-2 text-center -->
 <?php
  $i++;
  if(($i%4)==0) echo "</div><br> <div class='row'>"
 ?>
@endforeach





</div>            








<!-- Modal -->
<div class="modal fade" id="newBook" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h2 class="modal-title" id="myModalLabel">Add New Book</h2>
      </div>


<form action='{{url("projects/books/new")}}' method='post' enctype="multipart/form-data">
      <div class="modal-body">


<div class="input-group margin-bottom-sm">
  <span class="input-group-addon">{!!fa2('envelope-o')!!}</span>
  <input class="form-control" type="email" placeholder="Your Email address" name='email' required>
</div>

<div class="input-group">
  <span class="input-group-addon">{!!fa2('book')!!}</span>
  <input class="form-control" type="text" placeholder="Book Name" name='book_name' required>
</div>

<div class="input-group">
  <span class="input-group-addon">{!!fa2('ticket')!!}</span>
  <select class="form-control" required name='cate'>
    <option value='0'>Select Category</option>
    @foreach($categories as $cate)
     <option>{{$cate}}</option>
    @endforeach
  </select>
</div>



<h4 class='col-md-6'>Upload .pdf Book</h4>
<h4 class='col-md-6'>Upload Book Image</h4>

<div class="input-group">
  <span class="input-group-addon">{!!fa2('upload')!!}</span>
  <input class="form-control" type="file" name='upload_file' placeholder="Upload PDF Book" required 
  accept="application/pdf" >
  <span class="input-group-addon">{!!fa2('file-image-o')!!}</span>
  <input class="form-control" type="file" name='upload_img' placeholder="Book Img" accept="image/*" >
</div>



      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Add Book</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    
</form>     


    </div>
  </div>
</div>








<!-- Modal -->
<div class="modal fade" id="ban" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h3 class="modal-title" id="myModalLabel">Sorry !</h3>
      </div>
      <div class="modal-body">
<h3>This user isn't Allowed to ban Books.</h3>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>



{!! br(5) !!}


 </div>



