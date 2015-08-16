{{--@foreach($breadcrumbs as $key=>$val)--}}
    {{--<h1>{{$key}}</h1>--}}
    {{--<h1>{{$val}}</h1>--}}
{{--@endforeach--}}

<?php
$array = array_keys($breadcrumbs);

        dd(end($array));