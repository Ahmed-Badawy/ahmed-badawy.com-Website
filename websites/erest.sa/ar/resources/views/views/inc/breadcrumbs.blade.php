
@section('breadcrumbs')

<!-- Breadcrumps -->
<div class="breadcrumbs">
    <div class="row">

        <div class="col-sm-12">
            <ol class="breadcrumb">

                <?php
                    $array_keys = array_keys($breadcrumbs);
                    $end_array_key = end($array_keys);
                ?>
                
                <li></li>
                @foreach($breadcrumbs as $key=>$val)
                        @if($key == $end_array_key)
                            <li class='active'>{{$key}}</li>
                        @else
                            <li><a href="{{$val}}">{{$key}}</a></li>
                        @endif
                @endforeach
            </ol>
        </div>
    </div>
</div>
<!-- End of Breadcrumps -->

@show