
{!! get_angular("domain") !!}

    {{--@section('head_add')--}}
        {{--{!! get_it("plugins/sweetAlert/sweet-alert.min.css") !!}--}}
        {{--{!! get_it("plugins/sweetAlert/sweet-alert.min.js") !!}--}}
    {{--@overwrite--}}



            <!-- Main -->
    <div class="container" ng-app="myApp">
        <div class="row" ng-controller="main">

            <div class="panel panel-default">
                <div class="panel-heading"><h1 class="text-center">Domain Name Search</h1></div>
                <div class="panel-body">

                    <ul class='arabic' dir='rtl'>
                        <li>البرنامج ده يسمحلك تختبر إتاحة الدومين المراد لك. </li>
                        <li>يعرض لك الدومينات المتاحة و يوضع الدومنات المأخوذة مسبقا</li>
                    </ul>

                    <hr>

                    <form>
            <div class="col-sm-10">
                <input type="text" ng-model="domain" class="form-control widthfix" placeholder="Domain Name Without Extension"/>
            </div>


            <div class="col-sm-2">
                <button class="btn btn-primary btn-block" ng-click="search_domain(domain)" type="submit">Check</button>
            </div>
            <div class="col-sm-12">
                <p class="help-block">put the domain name here EX: Spidro Or sooq7. dont't follow with the extention like .com</p>
            </div>

                    </form>

                    <div class="clearfix"></div>

                    <hr/>

            <div class="col-sm-12">


                {!! render_loader() !!}


                <table class="table table-hover table-bordered" ng-show='!loader'>
                <tr class="warning">
                    <th class='text-center'>Status</th>
                    <th class='text-center'>Domain</th>
                    <th class='text-center'>Extentsion</th>
                </tr>

                <tr ng-repeat="domain in domains_data" ng-class="get_class(domain)">
                    <td class='text-center'>
                        {!!fa2('check',null,"ng-show='domain.available'")!!}
                        {!!fa2('remove',null,"ng-hide='domain.available'")!!}
                    </td>
                    <td class='text-center'>@{{ domain.domain }}</td>
                    <td class='text-center'>@{{ domain.ext }}</td>
                </tr>


            </table>

            </div>

                    <div class="clearfix"></div>
                    
                </div>
                </div>


        </div>
    </div>
    <!-- /Main -->