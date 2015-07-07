
    <div class="panel panel-default">
  <div class="panel-heading">
    <h1 class="panel-title"></h1><h2 class='text-center'>Acceleration Conversion</h2>
  </div>
  <div class="panel-body">
    <h5>

<?php 
      $acceleration = [
["meter per second squared","m/s2","1"],
["centimeter per second squared","cm/s2","0.01"],
["foot per second squared","ft/s2","0.3048"],
["foot per minute per second","ft/(min·s)","0.00508"],
["foot per hour per second","ft/(h·s)","8.46667E-05"],
["galileo","Gal","0.01"],
["gravity (standard)","gn","9.80665"],
["inch per second squared","in/s2","0.0254"],
["inch per minute per second","in/(min·s)","4.23333E-04"],
["inch per hour per second","in/(h·s)","7.05556E-06"],
["knot per second","kn/s","0.5144444"],
["mile per second squared","mi/s2","1609.344"],
["mile per minute per second","mi/(min·s)","26.8244"],
["mile per hour per second","mi/(h·s)","0.44704"],
      ];


      $cols=4;
      $itiration = $acceleration;
?>


@include(get_location("Projects.conversions.partials._common"))





<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">

    <div class="modal-content">

<!--       <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h3 class="modal-title text-center" id="myModalLabel">The Logic Behind</h3>
      </div>
      <div class="modal-body"> -->
        <button type="button" class="btn btn-danger col-xs-12" data-dismiss="modal" aria-label="Close">{!!fa2('times-circle')!!} Close</button>

<div class="" style='padding:10px'>
<table class="prettytable table border table-bordered table-condenced">
              <tbody><tr>
                <th>To Convert from<br>
                  Unit</th>
                <th>Unit<br>
                  Symbol</th>
                <th>Multiply by<br>
                  ( m/s <sup>2</sup> / Unit )</th>
              </tr>
              <tr>
                <td>centimeter per second squared</td>
                <td>cm/s<sup>2</sup></td>
                <td class="alignRight">0.01</td>
              </tr>
              <tr>
                <td>foot per hour per second</td>
                <td>ft/(h·s)</td>
                <td class="alignRight">8.46667E-05</td>
              </tr>
              <tr>
                <td>foot per minute per second</td>
                <td>ft/(min·s)</td>
                <td class="alignRight">0.00508</td>
              </tr>
              <tr>
                <td>foot per second squared</td>
                <td>ft/s<sup>2</sup></td>
                <td class="alignRight">0.3048</td>
              </tr>
              <tr>
                <td>galileo</td>
                <td>Gal</td>
                <td class="alignRight">0.01</td>
              </tr>
              <tr>
                <td>gravity (standard)</td>
                <td>g<sub>n</sub></td>
                <td class="alignRight">9.80665</td>
              </tr>
              <tr>
                <td>inch per hour per second</td>
                <td>in/(h·s)</td>
                <td class="alignRight">7.05556E-06</td>
              </tr>
              <tr>
                <td>inch per minute per second</td>
                <td>in/(min·s)</td>
                <td class="alignRight">4.23333E-04</td>
              </tr>
              <tr>
                <td>inch per second squared</td>
                <td>in/s<sup>2</sup></td>
                <td class="alignRight">0.0254</td>
              </tr>
              <tr>
                <td bgcolor="#CCCCCC"><strong>meter per second squared</strong></td>
                <td bgcolor="#CCCCCC"><strong>m/s<sup>2</sup></strong></td>
                <td bgcolor="#CCCCCC"><strong>1</strong></td>
              </tr>
              <tr>
                <td>knot per second</td>
                <td>kn/s</td>
                <td class="alignRight">0.5144444</td>
              </tr>
              <tr>
                <td>mile per hour per second</td>
                <td>mi/(h·s)</td>
                <td class="alignRight">0.44704</td>
              </tr>
              <tr>
                <td>mile per minute per second</td>
                <td>mi/(min·s)</td>
                <td class="alignRight">26.8244</td>
              </tr>
              <tr>
                <td>mile per second squared</td>
                <td>mi/s<sup>2</sup></td>
                <td class="alignRight">1609.344</td>
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
