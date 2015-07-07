
    <div class="panel panel-default">
  <div class="panel-heading">
    <h1 class="panel-title"></h1><h2 class='text-center'>Energy(Or Work) Conversion</h2>
  </div>
  <div class="panel-body">
    <h5>

<?php 
$cols=4; 
$itiration = [
      ["joule","J","1"],
      ["British thermal unit [IT]","BTUIT","1055.056"],
      ["British thermal unit [th]","BTUth","1054.35"],
      ["British thermal unit [mean]","BTUmean","1055.87"],
      ["British thermal unit [39°F]","BTU39°F","1059.67"],
      ["British thermal unit [59°F]","BTU59°F","1054.8"],
      ["British thermal unit [60°F] ","BTU60°F","1054.68"],
      ["calorie [IT]","calIT","4.1868"],
      ["calorie [th]","calth","4.184"],
      ["calorie [mean]","calmean","4.19002"],
      ["calorie [15°C]","cal15°C","4.1858"],
      ["calorie [20°C]","cal20°C","4.1819"],
      ["electronvolt","eV","1.60218E-19"],
      ["erg","erg","0.0000001"],
      ["foot-poundal","ft·pdl","0.04214011"],
      ["foot-pound-force","ft·lbf","1.355818"],
      ["inch-pound-force","in·lbf","0.112984829"],
      ["megajoule","MJ","1000000"],
      ["kilocalorie [IT]","kcalIT","4186.8"],
      ["kilocalorie [th]","kcalth","4184"],
      ["kilocalorie [mean]","kcalmean","4190.02"],
      ["kilowatt-hour","kW·h","3600000"],
      ["quad (IT)","quad","1.05506E+18"],
      ["therm (EC)","therm","105506000"],
      ["therm (U.S.)","therm","105480400"],
      ["ton-of-coal-equivalent","TOC","29307600000"],
      ["ton-of-oil-equivalent","TOE","41868000000"],
      ["ton-of-TNT-equivalent","tTNT","4184000000"],
      ["watt-hour","W·h", "3600"],
      ["watt-second","W·s", "1"],
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
                  ( J / Unit )</th>
              </tr>
              <tr>
                <td>British thermal unit [IT]</td>
                <td>BTU<sub>IT</sub></td>
                <td class="alignRight">1055.056</td>
              </tr>
              <tr>
                <td>British thermal unit [th]</td>
                <td>BTU<sub>th</sub></td>
                <td class="alignRight">1054.35</td>
              </tr>
              <tr>
                <td>British thermal unit [mean]</td>
                <td>BTU<sub>mean</sub></td>
                <td class="alignRight">1055.87</td>
              </tr>
              <tr>
                <td>British thermal unit [39°F]</td>
                <td>BTU<sub>39°F</sub></td>
                <td class="alignRight">1059.67</td>
              </tr>
              <tr>
                <td>British thermal unit [59°F]</td>
                <td>BTU<sub>59°F</sub></td>
                <td class="alignRight">1054.8</td>
              </tr>
              <tr>
                <td>British thermal unit [60°F]</td>
                <td>BTU<sub>60°F</sub></td>
                <td class="alignRight">1054.68</td>
              </tr>
              <tr>
                <td>calorie [IT]</td>
                <td>cal<sub>IT</sub></td>
                <td class="alignRight">4.1868</td>
              </tr>
              <tr>
                <td>calorie [th]</td>
                <td>cal<sub>th</sub></td>
                <td class="alignRight">4.184</td>
              </tr>
              <tr>
                <td>calorie [mean]</td>
                <td>cal<sub>mean</sub></td>
                <td class="alignRight">4.19002</td>
              </tr>
              <tr>
                <td>calorie [15°C]</td>
                <td>cal<sub>15°C</sub></td>
                <td class="alignRight">4.1858</td>
              </tr>
              <tr>
                <td>calorie [20°C]</td>
                <td>cal<sub>20°C</sub></td>
                <td class="alignRight">4.1819</td>
              </tr>
              <tr>
                <td>electronvolt</td>
                <td>eV</td>
                <td class="alignRight">1.60218E-19</td>
              </tr>
              <tr>
                <td>erg</td>
                <td>erg</td>
                <td class="alignRight">0.0000001</td>
              </tr>
              <tr>
                <td>foot-poundal</td>
                <td>ft·pdl</td>
                <td class="alignRight">0.04214011</td>
              </tr>
              <tr>
                <td>foot-pound-force</td>
                <td>ft·lbf</td>
                <td class="alignRight">1.355818</td>
              </tr>
              <tr>
                <td>inch-pound-force</td>
                <td>in·lbf</td>
                <td class="alignRight">0.112984829</td>
              </tr>
              <tr>
                <td bgcolor="#CCCCCC"><strong>joule</strong></td>
                <td bgcolor="#CCCCCC"><strong>J</strong></td>
                <td bgcolor="#CCCCCC"><strong>1</strong></td>
              </tr>
              <tr>
                <td>megajoule</td>
                <td>MJ</td>
                <td class="alignRight">1000000</td>
              </tr>
              <tr>
                <td>kilocalorie [IT]</td>
                <td>kcal<sub>IT</sub></td>
                <td class="alignRight">4186.8</td>
              </tr>
              <tr>
                <td>kilocalorie [th]</td>
                <td>kcal<sub>th</sub></td>
                <td class="alignRight">4184</td>
              </tr>
              <tr>
                <td>kilocalorie [mean]</td>
                <td>kcal<sub>mean</sub></td>
                <td class="alignRight">4190.02</td>
              </tr>
              <tr>
                <td>kilowatt-hour</td>
                <td>kW·h</td>
                <td class="alignRight">3600000</td>
              </tr>
              <tr>
                <td>quad (IT)</td>
                <td>quad</td>
                <td class="alignRight">1.05506E+18</td>
              </tr>
              <tr>
                <td>therm (EC)</td>
                <td>therm</td>
                <td class="alignRight">105506000</td>
              </tr>
              <tr>
                <td>therm (U.S.)</td>
                <td>therm</td>
                <td class="alignRight">105480400</td>
              </tr>
              <tr>
                <td>ton-of-coal-equivalent</td>
                <td>TOC</td>
                <td class="alignRight">29307600000</td>
              </tr>
              <tr>
                <td>ton-of-oil-equivalent</td>
                <td>TOE</td>
                <td class="alignRight">41868000000</td>
              </tr>
              <tr>
                <td>ton-of-TNT-equivalent</td>
                <td>tTNT</td>
                <td class="alignRight">4184000000</td>
              </tr>
              <tr>
                <td>watt-hour</td>
                <td>W·h</td>
                <td class="alignRight">3600</td>
              </tr>
              <tr>
                <td>watt-second</td>
                <td>W·s</td>
                <td class="alignRight">1</td>
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





