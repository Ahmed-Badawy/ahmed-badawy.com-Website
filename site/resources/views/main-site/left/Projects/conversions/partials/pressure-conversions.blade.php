
    <div class="panel panel-default">
  <div class="panel-heading">
    <h1 class="panel-title"></h1><h2 class='text-center'>Pressure Conversion Calculator</h2>
  </div>
  <div class="panel-body">
    <h5>

<?php 
    $cols = 4;
    $itiration = [
        ["pascal","Pa","1"],
        ["atmosphere-standard","atm","101325"],
        ["atmosphere-technical","at","98066.5"],
        ["bar","bar","100000"],
        ["decibar","dbar","1000"],
        ["millibar","mbar","100"],
        ["barye (cgs unit)","barye","0.1"],
        ["centimeter of mercury","cmHg","1333.22"],
        ["centimeter of water (4 °C)","cmH2O","98.0638"],
        ["foot of mercury (conventional)","ftHg","40636.66"],
        ["foot of water (39.2 °F)","ftH2O","2988.98"],
        ["inch of mercury (conventional)","inHg","3386.389"],
        ["inch of water (39.2 °F)","inH2O","248.082"],
        ["kilogram-force per square millimeter","kgf/mm2","9806650"],
        ["kip per square inch","kip/in2","6894757"],
        ["millimeter of mercury","mmHg","133.3224"],
        ["millimeter of water(3.98 °C)","mmH2O","9.80638"],
        ["hectopascal","hPa","100"],
        ["kilopascal","kPa","1000"],
        ["pound per square foot","lb/ft2","47.88025"],
        ["pound per square inch","lb/in2 or psi","6894.757"],
        ["poundal per square foot","pdl/ft2","1.488164"],
        ["short ton per square foot","sh tn/ft2","95760.518"],
        ["torr","torr","133.3224"],
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
                  ( g / Unit )</th>
              </tr>
              <tr>
                <td>carat (metric)</td>
                <td>ct</td>
                <td class="alignRight">0.2</td>
              </tr>
              <tr>
                <td>point (metric)</td>
                <td>pt</td>
                <td class="alignRight">0.002</td>
              </tr>
              <tr>
                <td>dram (avdp)</td>
                <td>dr</td>
                <td class="alignRight">1.771845195</td>
              </tr>
              <tr>
                <td>dram (troy)</td>
                <td>dr</td>
                <td class="alignRight">3.8879346</td>
              </tr>
              <tr>
                <td>grain (metric)</td>
                <td>gr</td>
                <td class="alignRight">0.05</td>
              </tr>
              <tr>
                <td>grain (troy)</td>
                <td>gr</td>
                <td class="alignRight">0.06479891</td>
              </tr>
              <tr>
                <td bgcolor="#CCCCCC"><strong>gram</strong></td>
                <td bgcolor="#CCCCCC"><strong>g</strong></td>
                <td bgcolor="#CCCCCC"><strong>1</strong></td>
              </tr>
              <tr>
                <td>hundredweight (long)</td>
                <td>hwt</td>
                <td class="alignRight">50802.34544</td>
              </tr>
              <tr>
                <td>hundredweight (short)</td>
                <td>hwt</td>
                <td class="alignRight">45359.237</td>
              </tr>
              <tr>
                <td>kilogram</td>
                <td>kg</td>
                <td class="alignRight">1000</td>
              </tr>
              <tr>
                <td>megagram</td>
                <td>Mg</td>
                <td class="alignRight">1000000</td>
              </tr>
              <tr>
                <td>milligram</td>
                <td>mg</td>
                <td class="alignRight">0.001</td>
              </tr>
              <tr>
                <td>ounce (avdp)</td>
                <td>oz</td>
                <td class="alignRight">28.34952313</td>
              </tr>
              <tr>
                <td>ounce (troy)</td>
                <td>oz</td>
                <td class="alignRight">31.1034768</td>
              </tr>
              <tr>
                <td>pennyweight</td>
                <td>dwt</td>
                <td class="alignRight">1.55517384</td>
              </tr>
              <tr>
                <td>pound (avdp)</td>
                <td>lb</td>
                <td class="alignRight">453.59237</td>
              </tr>
              <tr>
                <td>pound (metric)</td>
                <td>lb</td>
                <td class="alignRight">500</td>
              </tr>
              <tr>
                <td>pound (troy)</td>
                <td>lb</td>
                <td class="alignRight">373.2417216</td>
              </tr>
              <tr>
                <td>slug</td>
                <td>slug</td>
                <td class="alignRight">14593.903</td>
              </tr>
              <tr>
                <td>stone</td>
                <td>st</td>
                <td class="alignRight">6350.29318</td>
              </tr>
              <tr>
                <td>ton-assay (long)</td>
                <td>l AT</td>
                <td class="alignRight">32.666667</td>
              </tr>
              <tr>
                <td>ton-assay (short)</td>
                <td>sh AT</td>
                <td class="alignRight">29.166667</td>
              </tr>
              <tr>
                <td>ton (long)</td>
                <td>l tn</td>
                <td class="alignRight">1016046.909</td>
              </tr>
              <tr>
                <td>ton (short)</td>
                <td>sh tn</td>
                <td class="alignRight">907184.74</td>
              </tr>
              <tr>
                <td>ton-metric</td>
                <td>t</td>
                <td class="alignRight">1000000</td>
              </tr>
              <tr>
                <td>tonne (U.S. metric ton)</td>
                <td>t</td>
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



