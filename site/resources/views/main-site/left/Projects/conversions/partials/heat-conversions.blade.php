
    <div class="panel panel-default">
  <div class="panel-heading">
    <h1 class="panel-title"></h1><h2 class='text-center'>Power and Heat Flow Conversion Calculator</h2>
  </div>
  <div class="panel-body">
    <h5>

<?php 
    $cols = 4;
    $itiration = [
            ["watt","W","1"],
            ["BTU [IT] per hour","BTUIT/h","0.2930711"],
            ["BTU [IT] per minute","BTUIT/min","0.2930711*60"],
            ["BTU [IT] per second","BTUIT/s","0.293071160*60"],
            ["calorie [IT] per hour","calIT/h","4.186860/60"],
            ["calorie [IT] per minute","calIT/min","4.1868/60"],
            ["calorie [IT] per second","calIT/sec","4.1868"],
            ["BTU [th] per hour","BTUth/h","0.2928751"],
            ["BTU [th] per minute","BTUth/min","0.2928751*60"],
            ["BTU [th] per second","BTUth/s","0.2928751*60*60"],
            ["calorie [th] per hour","calth/h","4.184/60/60"],
            ["calorie [th] per minute","calth/min","4.184/60"],
            ["calorie [th] per second","calth/s","4.184"],
            ["cheval-vapeur","cv","735.49875"],
            ["erg per hour","erg/h","0.0000001/60/60"],
            ["erg per minute","erg/min","0.0000001/60"],
            ["erg per second","erg/s","0.0000001"],
            ["foot-pound-force per hour","ft·lbf/h","1.355818/60/60"],
            ["foot-pound-force per minute","ft·lbf/min","1.355818/60"],
            ["foot-pound-force per second","ft·lbf/s","1.355818"],
            ["foot-poundal per hour","ft·pdl/h","0.04214011/60/60"],
            ["foot-poundal per minute","ft·pdl/min","0.04214011/60"],
            ["foot-poundal per second","ft·pdl/s","0.04214011"],
            ["horsepower (550 ft � lbf/s)","hp","745.6999"],
            ["horsepower (boiler)","hp","9809.5"],
            ["horsepower (electric)","hp","746"],
            ["horsepower (metric)","hp","735.49875"],
            ["horsepower (U.K.)","hp","745.7"],
            ["horsepower (water)","hp","746.043"],
            ["joule per hour","J/h","1/60/60"],
            ["joule per minute","J/min","1/60"],
            ["joule per second","J/s","1"],
            ["kilowatt","kW","1000"],
            ["pferdestarke","PS","49875735."],
            
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
                ( W<sup></sup> / Unit )</th>
            </tr>
            <tr>
              <td width="201">BTU [IT] per hour</td>
              <td>BTU<sub>IT</sub>/h</td>
              <td class="alignRight">0.2930711</td>
            </tr>
            <tr>
              <td>BTU [IT] per minute</td>
              <td>BTU<sub>IT</sub>/min</td>
              <td class="alignRight">0.2930711*60</td>
            </tr>
            <tr>
              <td>BTU [IT] per second</td>
              <td>BTU<sub>IT</sub>/s</td>
              <td class="alignRight">0.2930711*60*60</td>
            </tr>
            <tr>
              <td bgcolor="#CCCCCC"><strong>watt</strong></td>
              <td bgcolor="#CCCCCC"><strong>W</strong></td>
              <td bgcolor="#CCCCCC"><strong>1</strong></td>
            </tr>
            <tr>
              <td>calorie [IT] per hour</td>
              <td>cal<sub>IT</sub>/h</td>
              <td class="alignRight">4.1868/60/60</td>
            </tr>
            <tr>
              <td>calorie [IT] per minute</td>
              <td>cal<sub>IT</sub>/min</td>
              <td class="alignRight">4.1868/60</td>
            </tr>
            <tr>
              <td>calorie [IT] per second</td>
              <td>cal<sub>IT</sub>/sec</td>
              <td class="alignRight">4.1868</td>
            </tr>
            <tr>
              <td>BTU [th] per hour</td>
              <td>BTU<sub>th</sub>/h</td>
              <td class="alignRight">0.2928751</td>
            </tr>
            <tr>
              <td>BTU [th] per minute</td>
              <td>BTU<sub>th</sub>/min</td>
              <td class="alignRight">0.2928751*60</td>
            </tr>
            <tr>
              <td>BTU [th] per second</td>
              <td>BTU<sub>th</sub>/s</td>
              <td class="alignRight">0.2928751*60*60</td>
            </tr>
            <tr>
              <td>calorie [th] per hour</td>
              <td>cal<sub>th</sub>/h</td>
              <td class="alignRight">4.184/60/60</td>
            </tr>
            <tr>
              <td>calorie [th] per minute</td>
              <td>cal<sub>th</sub>/min</td>
              <td class="alignRight">4.184/60</td>
            </tr>
            <tr>
              <td>calorie [th] per second</td>
              <td>cal<sub>th</sub>/s</td>
              <td class="alignRight">4.184</td>
            </tr>
            <tr>
              <td>cheval-vapeur</td>
              <td>cv</td>
              <td class="alignRight">735.49875</td>
            </tr>
            <tr>
              <td>erg per hour</td>
              <td>erg/h</td>
              <td class="alignRight">0.0000001/60/60</td>
            </tr>
            <tr>
              <td>erg per minute</td>
              <td>erg/min</td>
              <td class="alignRight">0.0000001/60</td>
            </tr>
            <tr>
              <td>erg per second</td>
              <td>erg/s</td>
              <td class="alignRight">0.0000001</td>
            </tr>
            <tr>
              <td>foot-pound-force per hour</td>
              <td>ft·lbf/h</td>
              <td class="alignRight">1.355818/60/60</td>
            </tr>
            <tr>
              <td>foot-pound-force per minute</td>
              <td>ft·lbf/min</td>
              <td class="alignRight">1.355818/60</td>
            </tr>
            <tr>
              <td>foot-pound-force per second</td>
              <td>ft·lbf/s</td>
              <td class="alignRight">1.355818</td>
            </tr>
            <tr>
              <td>foot-poundal per hour</td>
              <td>ft·pdl/h</td>
              <td class="alignRight">0.04214011/60/60</td>
            </tr>
            <tr>
              <td>foot-poundal per minute</td>
              <td>ft·pdl/min</td>
              <td class="alignRight">0.04214011/60</td>
            </tr>
            <tr>
              <td>foot-poundal per second</td>
              <td>ft·pdl/s</td>
              <td class="alignRight">0.04214011</td>
            </tr>
            <tr>
              <td>horsepower (550 ft � lbf/s)</td>
              <td>hp</td>
              <td class="alignRight">745.6999</td>
            </tr>
            <tr>
              <td>horsepower (boiler) </td>
              <td>hp</td>
              <td class="alignRight">9809.5</td>
            </tr>
            <tr>
              <td>horsepower (electric)</td>
              <td>hp</td>
              <td class="alignRight">746</td>
            </tr>
            <tr>
              <td>horsepower (metric)</td>
              <td>hp</td>
              <td class="alignRight">735.49875</td>
            </tr>
            <tr>
              <td>horsepower (U.K.) </td>
              <td>hp</td>
              <td class="alignRight">745.7</td>
            </tr>
            <tr>
              <td>horsepower (water)</td>
              <td>hp</td>
              <td class="alignRight">746.043</td>
            </tr>
            <tr>
              <td>joule per hour</td>
              <td>J/h</td>
              <td class="alignRight">1/60/60</td>
            </tr>
            <tr>
              <td>joule per minute</td>
              <td>J/min</td>
              <td class="alignRight">1/60</td>
            </tr>
            <tr>
              <td>joule per second</td>
              <td>J/s</td>
              <td class="alignRight">1</td>
            </tr>
            <tr>
              <td>kilowatt</td>
              <td>kW</td>
              <td class="alignRight">1000</td>
            </tr>
            <tr>
              <td>pferdestarke</td>
              <td>PS</td>
              <td class="alignRight">735.49875</td>
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



