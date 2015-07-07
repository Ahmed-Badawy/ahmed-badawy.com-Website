
    <div class="panel panel-default">
  <div class="panel-heading">
    <h1 class="panel-title"></h1><h2 class='text-center'>Length Conversion</h2>
  </div>
  <div class="panel-body">
    <h5>

<?php 
$cols=3; 
$itiration = [
      ["meter - متر","m","1"],
      ["centimeter - سنتيمتر","cm","0.01"],
      ["millimeter - ميلىمتر","mm","0.001"],
      ["kilometer - كيلو متر","km","1000"],
      ["inch - بوصة","in","0.0254"],
      ["mile - ميل","mi","1609.344"],
      ["mil (0.001 in)","mil","0.0000254"],
      ["foot - قدم","ft","0.3048"],
      ["yard","yd","0.9144"],
      ["capefoot","cf","0.314856"],
      ["rod","rd","5.0292"],
      ["angstrom","Å","1E-10"],
      ["nanometer","n","0.000000001"],
      ["micron","µ","0.000001"],
      ["light-year","l.y.","9460730472580800"],
      ["light-day","","25902068371200"],
      ["light-hour","","1079252848800"],
      ["light-minute","","17987547480"],
      ["light-second","","299792458}"],
];

?>
@include(get_location("Projects.conversions.partials._common"))





<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">

    <div class="modal-content">


        <button type="button" class="btn btn-danger col-xs-12" data-dismiss="modal" aria-label="Close">{!!fa2('times-circle')!!} Close</button>

<div class="" style='padding:10px'>
<table class="prettytable table border table-bordered table-condenced">
              <tbody><tr>
                <th>To Convert from<br>
                  Unit</th>
                <th>Unit<br>
                  Symbol</th>
                <th>Multiply by<br>
                  ( m / Unit )</th>
              </tr>
              <tr>
                <td>mil (0.001 in)</td>
                <td>mil</td>
                <td class="alignRight">0.0000254</td>
              </tr>
              <tr>
                <td>inch</td>
                <td>in</td>
                <td class="alignRight">0.0254</td>
              </tr>
              <tr>
                <td>foot</td>
                <td>ft</td>
                <td class="alignRight">0.3048</td>
              </tr>
              <tr>
                <td>yard</td>
                <td>yd</td>
                <td class="alignRight">0.9144</td>
              </tr>
              <tr>
                <td>mile</td>
                <td>mi</td>
                <td class="alignRight">1609.344</td>
              </tr>
              <tr>
                <td>capefoot</td>
                <td>cf</td>
                <td class="alignRight">0.314856</td>
              </tr>
              <tr>
                <td>rod</td>
                <td>rd</td>
                <td class="alignRight">5.0292</td>
              </tr>
              <tr>
                <td>angstrom</td>
                <td>Å</td>
                <td class="alignRight">1E-10</td>
              </tr>
              <tr>
                <td>nanometer</td>
                <td>n</td>
                <td class="alignRight">0.000000001</td>
              </tr>
              <tr>
                <td>micron</td>
                <td>µ</td>
                <td class="alignRight">0.000001</td>
              </tr>
              <tr>
                <td>millimeter</td>
                <td>mm</td>
                <td class="alignRight">0.001</td>
              </tr>
              <tr>
                <td>centimeter</td>
                <td>cm</td>
                <td class="alignRight">0.01</td>
              </tr>
              <tr>
                <td bgcolor="#CCCCCC"><strong>meter</strong></td>
                <td bgcolor="#CCCCCC"><strong>m</strong></td>
                <td bgcolor="#CCCCCC"><strong>1</strong></td>
              </tr>
              <tr>
                <td>kilometer</td>
                <td>km</td>
                <td class="alignRight">1000</td>
              </tr>
              <tr>
                <td>light-year</td>
                <td>l.y.</td>
                <td class="alignRight">9,460,730,472,580,800</td>
              </tr>
              <tr>
                <td>light-day</td>
                <td>&nbsp;</td>
                <td class="alignRight">25,902,068,371,200</td>
              </tr>
              <tr>
                <td>light-hour</td>
                <td>&nbsp;</td>
                <td class="alignRight">1,079,252,848,800</td>
              </tr>
              <tr>
                <td>light-minute</td>
                <td>&nbsp;</td>
                <td class="alignRight">17,987,547,480</td>
              </tr>
              <tr>
                <td>light-second</td>
                <td>&nbsp;</td>
                <td class="alignRight">299,792,458</td>
              </tr>
            </tbody></table>

    <div class="clearfix"></div>
</div>
        <button type="button" class="btn btn-danger col-xs-12" data-dismiss="modal" aria-label="Close">{!!fa2('times-circle')!!} Close</button>


</div>


<div class="clearfix"></div>
</div>
</div>


    </h5>
  </div>
  </div>


