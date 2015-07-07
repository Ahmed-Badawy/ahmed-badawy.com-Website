@section('font_section')
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:600' rel='stylesheet' type='text/css'>
@stop
@section('css_add')
  body{
      font-family: 'Open Sans';
  }
@stop
@section('js_section')
@stop
@section('header')
@stop

      {{get_it('angular')}}
      {{get_it('angular/sources/angular-resource.min.js')}}
      {{get_it('angular/app/projects/dictionary.js')}}


<div style='margin-top:3%' ng-app='myApp'>
  <div ng-controller='dictionary_controller'>
  <div class="col-md-12">

<table class='table table-bordered table-striped widthfix '>
    <tr>
      <th>Number</th>
      <th>English</th>
      <th>Arabic</th>
      <th>Operations</th>
    </tr>
    <tr ng-repeat='word in data.words' ng-show='words'>
      <td>@{{$index}}</td>
      <td>@{{word.ar}}</td>
      <td>@{{word.non}}</td>
      <td><a class='btn btn-sm btn-danger' ng-click='delete_word(word)'>delete</a></td>
    </tr>
    <tr>
      <td>New Word</td>
      <td><input type="text" class='form-control widthfix' ng-model='newWord.english' placeholder='english'></td>
      <td><input type="text" class='form-control widthfix' ng-model='newWord.arabic' placeholder='العربى' dir='rtl'></td>
      <td><a class='btn btn-success btn-sm' ng-click='add_sub()'>Add Sub-Task</a></td>
    </tr>
</table>

  </div>


<div class="col-md-6 col-md-offset-3">
<br><br>
<a href="{{url('projects')}}" class='btn btn-primary btn-lg btn-block'>Back To Projects</a>
</div>

  </div>
</div>

@section('footer')
@stop