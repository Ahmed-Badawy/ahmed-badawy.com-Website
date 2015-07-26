@section('clients_cursor')
@overwrite


    <div class="container">
    <div class="body-content">
        <div class="row">
            <div class="col-md-12 padd-left padd-right">
                <div class="clients">

                    <h3 class="tit-cl">عملائنا</h3>


                    @foreach($clients as $con)
                    <div class="item-client">
                        <div class="col-md-2">
                            <img src="{{get_it('site-imgs/_CMS/clients/'.$con->img)}}" />
                        </div>
                        <div class="col-md-10">
                            <h3>{{$con->name}}</h3>
                            <p>{{$con->desc}}</p>
                        </div>
                    </div>
                    @endforeach



                </div>
            </div>



        </div>
    </div>
</div>