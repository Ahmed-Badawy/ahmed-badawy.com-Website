<a id='contributers_priorityModalButton' class='btn btn-default btn-lg col-sm-6' href="#contributers_priority" data-toggle='modal' role='button'>{!! fa2('arrow-up',['size'=>0]) !!} تعديل ترتيب العرض</a>


<!--login modal-->
<div id="contributers_priority" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
  <div class="modal-content">

      <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          <h2 class="text-center">{!! fa('arrow-up') !!} تعديل ترتيب العرض</h2>
      </div>

      <div class="modal-body">




@foreach($contributors as $con)
  <div class="contr">

    <div class="col-sm-10">
      <form method='post' action="{{url('admin/modify-id/contributer/'.$con->id)}}">

        <b>{{$con->name}}</b>
<br>

<input type="number" name='item_priority' class='form-control form-sm' style='display:inline;'>
<a myhref="{{url('admin/delete-id/contributer/'.$con->id)}}" class='btn btn-sm btn-warning delete_button'>{!! fa2('arrow-up') !!} تعديل الأولوية</a>



      </form>
    </div>
    <img src="{{get_it("site-imgs/asol/contributors/".$con->img)}}" class='col-sm-2' />

  </div>
  <div class="clearfix"></div>
  <br>
@endforeach





</div>



<div class="clearfix" style='margin-bottom:2%;'></div>
</div>
      </div>
  </div>
