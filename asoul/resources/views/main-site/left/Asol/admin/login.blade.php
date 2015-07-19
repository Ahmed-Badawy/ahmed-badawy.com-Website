@section('head_add')
  {!! get_it("plugins/sweetAlert/sweetalert-ar.css") !!}
  {!! get_it("plugins/sweetAlert/sweet-alert.min.js") !!}
@overwrite


<form method='post' action='{{url("admin/login")}}'>


  <div class='col-sm-4 col-sm-offset-4' style='margin-top:12%'>
<!-- 
  @if(\Session::has('error'))
      <h4 style='color:red'>{{\Session::get('error')}}</h4>
  @endif


      <label class='h4'>User Name</label>
      <input type='text' name='username' class='form-control widthfix'>
      <label class='h4'>Password</label>
      <input type='password' name='password' class='form-control widthfix'>
<br>
<br>
      <button type='submit' class='btn btn-lg btn-primary btn-block arabic'> دخول {!! fa2('sign-in') !!} </button> -->
      <a href="" class='btn btn-lg btn-primary btn-block arabic' onclick="do_a_login();return false;"> أدخل لوحة التحكم {!! fa2('sign-in') !!} </a>
  </div>

</form>



<script type="text/javascript">
  function do_a_login(){
    swal({
      title: "لوحة الدخول",
      text: "من فضلك أدخل باسورد الدخول",
      type: "input",
      showCancelButton: true,
      closeOnConfirm: false,
      // animation: "slide-from-top",
      animation: "slide-from-top",
      inputPlaceholder: "باسورد الدخول"
    },
    function(inputValue){
      if (inputValue === false) return false;

      if (inputValue === "") {
        swal.showInputError("معذرة! يجب ملئ البيانات المطلوبة.");
        return false
      }
      if(inputValue!="admin"){
        swal.showInputError("معذرة! هذا الباسورد خاطئ.");
        return false
      }

      swal("باسورد صحيح!", "تم الدخول بنجاح" , "success");
        setTimeout(function(){
          window.location.assign("{{url('admin')}}")
        }, 2000);
      ;
    });    
  }

</script>