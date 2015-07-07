
    <div class="panel panel-default">
  <div class="panel-heading">
    <h1 class="panel-title"></h1><h2 class='text-center'>Weight Conversion</h2>
  </div>
  <div class="panel-body">
    <h5>

<?php 
    $cols = 4;
    $itiration = [
          ["gram - جرام","g","1"],
          ["kilogram - كيلو جرام","kg","1000"],
          ["pound (avdp) - رطل","lb","453.59237"],
          ["caret (metric)","ct","0.2"],
          ["point (metric)","pt","0.002"],
          ["dram (avdp)","dr","1.771845195"],
          ["dram (troy)","dr","3.8879346"],
          ["grain (metric)","gr","0.05"],
          ["grain (troy)","gr","0.06479891"],
          ["hundredweight (long)","hwt"," 50802.34544"],
          ["hundredweight (short)","hwt","  45359.237"],
          ["mega Gram","Mg","1000000"],
          ["milli Gram","mg","0.001"],
          ["ounce (avdp)","oz","28.34952313"],
          ["ounce (troy)","oz","31.1034768"],
          ["pennyweight","dwt","1.55517384"],
          ["pound (metric)","lb","500"],
          ["pound (troy)","lb","373.2417216"],
          ["slug","slug","14593.903"],
          ["stone","st","6350.29318"],
          ["ton-assay (long)","l AT"," 32.666667"],
          ["ton-assay (short)","sh AT"," 29.166667"],
          ["ton (long)","l tn","  1016046.909"],
          ["ton (short)","sh tn","907184.74"],
          ["ton-metric","t","1000000"],
          ["tonne (U.S metric ton)","t","1000000"],
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



