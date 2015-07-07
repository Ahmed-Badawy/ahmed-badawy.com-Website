
    <div class="panel panel-default">
  <div class="panel-heading">
    <h1 class="panel-title"></h1><h2 class='text-center '>Density Conversion</h2>
  </div>
  <div class="panel-body">
    <h5>

<?php 

$cols=4; 
$itiration = [
          ["kilogram per cubic meter","kg/m3","1"],
          ["gram per cubic centimeter","g/cm3","1000"],
          ["kilogram per cubic centimeter","kg/cm3","1000000"],
          ["gram per cubic meter","g/m3","0.001"],
          ["gram per milliliter","g/mL","1000"],
          ["gram per liter","g/L","1"],
          ["kilogram per liter","kg/L","1000"],
          ["ounce per cubic inch","oz/in3","1729.994"],
          ["ounce per cubic foot","oz/ft3","1.001153"],
          ["pound per cubic inch","lb/in3","27679.90471"],
          ["pound per cubic foot","lb/ft3","16.018463"],
          ["ounce per gallon (Imperial)","oz/gal","6.236023"],
          ["ounce per gallon (U.S. fluid)","oz/gal","7.489151"],
          ["pound per gallon (Imperial)","lb/gal","99.776372"],
          ["pound per gallon (U.S. fluid)","lb/gal","119.826"],
          ["slug per cubic foot","slug/ft3","515.3788184"],
          ["ton per cubic yard (long)","l ton/yd3","1328.939"],
          ["ton per cubic yard (short)","sh ton/yd3","1186.553"],
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
                  ( kg/m<sup>3</sup> / Unit )</th>
              </tr>
              <tr>
                <td> gram per cubic centimeter</td>
                <td>g/cm<sup>3</sup></td>
                <td class="alignRight">1000</td>
              </tr>
              <tr>
                <td> kilogram per cubic centimeter</td>
                <td>kg/cm<sup>3</sup></td>
                <td class="alignRight">1000000</td>
              </tr>
              <tr>
                <td> gram per cubic meter</td>
                <td>g/m<sup>3</sup></td>
                <td class="alignRight">0.001</td>
              </tr>
              <tr>
                <td bgcolor="#CCCCCC"><strong> kilogram per cubic meter</strong></td>
                <td bgcolor="#CCCCCC"><strong>kg/m<sup>3</sup></strong></td>
                <td bgcolor="#CCCCCC"><strong>1</strong></td>
              </tr>
              <tr>
                <td>gram per milliliter</td>
                <td>g/mL</td>
                <td class="alignRight">1000</td>
              </tr>
              <tr>
                <td> gram per liter</td>
                <td>g/L</td>
                <td class="alignRight">1</td>
              </tr>
              <tr>
                <td> kilogram per liter</td>
                <td>kg/L</td>
                <td class="alignRight">1000</td>
              </tr>
              <tr>
                <td> ounce per cubic inch</td>
                <td>oz/in<sup>3</sup></td>
                <td class="alignRight">1729.994</td>
              </tr>
              <tr>
                <td> ounce per cubic foot</td>
                <td>oz/ft<sup>3</sup></td>
                <td class="alignRight">1.001153</td>
              </tr>
              <tr>
                <td> pound per cubic inch</td>
                <td>lb/in<sup>3</sup></td>
                <td class="alignRight">27679.90471</td>
              </tr>
              <tr>
                <td> pound per cubic foot</td>
                <td>lb/ft<sup>3</sup></td>
                <td class="alignRight">16.018463</td>
              </tr>
              <tr>
                <td>ounce per gallon (Imperial)</td>
                <td>oz/gal</td>
                <td class="alignRight">6.236023</td>
              </tr>
              <tr>
                <td>ounce per gallon (U.S. fluid)</td>
                <td>oz/gal</td>
                <td class="alignRight">7.489151</td>
              </tr>
              <tr>
                <td>pound per gallon (Imperial)</td>
                <td>lb/gal</td>
                <td class="alignRight">99.776372</td>
              </tr>
              <tr>
                <td>pound per gallon (U.S. fluid)</td>
                <td>lb/gal</td>
                <td class="alignRight">119.826</td>
              </tr>
              <tr>
                <td>slug per cubic foot</td>
                <td>slug/ft<sup>3</sup></td>
                <td class="alignRight">515.3788184</td>
              </tr>
              <tr>
                <td>ton per cubic yard (long)</td>
                <td>l ton/yd<sup>3</sup></td>
                <td class="alignRight">1328.939</td>
              </tr>
              <tr>
                <td>ton per cubic yard (short)</td>
                <td>sh ton/yd<sup>3</sup></td>
                <td class="alignRight">1186.553</td>
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
