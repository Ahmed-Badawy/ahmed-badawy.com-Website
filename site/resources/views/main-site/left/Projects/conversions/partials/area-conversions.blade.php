
    <div class="panel panel-default">
  <div class="panel-heading">
    <h1 class="panel-title"></h1><h2 class='text-center'>Area Conversion</h2>
  </div>
  <div class="panel-body">
    <h5>

<?php 

$cols=4; 
$itiration = [
      ["square meter - متر مربع","m2","1"],
      ["square inch","in2","0.00064516"],
      ["square foot","ft2","0.09290304"],
      ["square yard","yd2","0.83612736"],
      ["square mile","mi2","2589988.110336"],
      ["acre","ac","4046.8564224"],
      ["hectare","ha","10000"],
      ["square millimeter","mm2","0.000001"],
      ["square centimeter","cm2","0.0001"],
      ["square kilometer","km2","1000000"],
];

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
                  ( m<sup>2</sup> / Unit )</th>
              </tr>
              <tr>
                <td> square inch </td>
                <td>in<sup>2</sup></td>
                <td class="alignRight">0.00064516</td>
              </tr>
              <tr>
                <td>square foot </td>
                <td>ft<sup>2</sup></td>
                <td class="alignRight">0.09290304</td>
              </tr>
              <tr>
                <td>square yard </td>
                <td>yd<sup>2</sup></td>
                <td class="alignRight">0.83612736</td>
              </tr>
              <tr>
                <td>square mile </td>
                <td>mi<sup>2</sup></td>
                <td class="alignRight">2589988.110336</td>
              </tr>
              <tr>
                <td>acre </td>
                <td>ac<sup></sup></td>
                <td class="alignRight">4046.8564224</td>
              </tr>
              <tr>
                <td>hectare </td>
                <td>ha</td>
                <td class="alignRight">10000</td>
              </tr>
              <tr>
                <td>square millimeter </td>
                <td>mm<sup>2</sup></td>
                <td class="alignRight">0.000001</td>
              </tr>
              <tr>
                <td>square centimeter </td>
                <td>cm<sup>2</sup></td>
                <td class="alignRight">0.0001</td>
              </tr>
              <tr>
                <td bgcolor="#CCCCCC"><strong>square meter </strong></td>
                <td bgcolor="#CCCCCC"><strong>m<sup>2</sup></strong></td>
                <td bgcolor="#CCCCCC"><strong>1</strong></td>
              </tr>
              <tr>
                <td>square kilometer </td>
                <td>km<sup>2</sup></td>
                <td class="alignRight">1000000</td>
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

