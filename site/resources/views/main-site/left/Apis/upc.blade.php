{!! get_angular("upc",'apis') !!}


<div class="container">
  <div class="col-sm-8 col-sm-offset-2">
    <div class="panel panel-default">
  <div class="panel-heading">
    <h1 class="panel-title"></h1><h2 class='text-center'>(UPC-Code/BarCode) Generator API</h2>
  </div>
  <div class="panel-body">
    <h5>

    <p class='arabic' dir='rtl'>هذا هو كود لتوليد الباركود. كتب ليعمل كـ API. ثم تم تصميم هذا الموقع ليعمل كـ GUI لهذا الكود.</p>
    <hr>


    <script type="text/javascript">
	    var base_url = '{{base_url}}';
    </script>



<!-- <select name="type" id="type" size="1">
  <option value="BCGcodabar">Codabar</option>
  <option value="BCGcode11">Code 11</option>
  <option value="BCGcode39">Code 39</option>
  <option selected="selected" value="BCGcode39extended">Code 39 Extended</option>
  <option value="BCGcode93">Code 93</option>
  <option value="BCGcode128">Code 128</option>
  <option value="BCGean8">EAN-8</option>
  <option value="BCGean13">EAN-13</option>
  <option value="BCGgs1128">GS1-128 (EAN-128)</option>
  <option value="BCGisbn">ISBN</option>
  <option value="BCGi25">Interleaved 2 of 5</option>
  <option value="BCGs25">Standard 2 of 5</option>
  <option value="BCGmsi">MSI Plessey</option>
  <option value="BCGupca">UPC-A</option>
  <option value="BCGupce">UPC-E</option>
  <option value="BCGupcext2">UPC Extenstion 2 Digits</option>
  <option value="BCGupcext5">UPC Extenstion 5 Digits</option>
  <option value="BCGpostnet">Postnet</option>
  <option value="BCGintelligentmail">Intelligent Mail</option>
  <option value="BCGothercode">Other Barcode</option>
</select> -->

<form ng-submit='render_img()' name='myform'>

  <table class='table table-striped table-hover table-condensed table-bordered'>
    <colgroup>
    <col class="col1">
    <col class="col2">
  </colgroup>
  <tbody>
    <tr>
      <td><label for="filetype">File type</label></td>
      <td>
        <select class='form-control widthfix' name="filetype" id="filetype" size="1" ng-model='file_type'>
         <option value="PNG">PNG - Portable Network Graphics</option>
         <option selected="selected" value="JPEG">JPEG - Joint Photographic Experts Group</option>
         <option value="GIF">GIF - Graphics Interchange Format</option>
       </select>
     </td>
   </tr>
   <tr >
    <td><label for="dpi">DPI</label></td>
    <td>
      <input type="number" class='form-control widthfix' required="@{{file_type!='GIF'}}" max="300" min="72" name="dpi" id="dpi" ng-model='dpi' ng-disabled='file_type=="GIF"'> 
<ul>
<li ng-show='file_type=="GIF"' class='bg-danger'>DPI is available only for PNG and JPEG.</li>
</ul>

    </td>
  </tr>
  <tr>
    <td><label for="thickness">Thickness</label></td>
    <td>
      <input class='form-control widthfix' type="number" value="30" required="required" step="5" max="90" min="20" name="thickness" id="thickness" ng-model='thickness'>
    </td>
  </tr>                    
  <tr >
    <td><label for="scale">Scale</label></td>
    <td>
      <input class='form-control widthfix' type="number" value="4" required="required" max="4" min="1" name="scale" id="scale" ng-model='scale'>
    </td>
  </tr>
  <tr>
    <td><label for="rotation">Rotation</label></td>
    <td>
      <select class='form-control widthfix' name="rotation" id="rotation" size="1" ng-model='rotation'>
        <option selected="selected" value="0">No rotation</option>
        <option value="90">90° clockwise</option>
        <option value="180">180° clockwise</option>
        <option value="270">270° clockwise</option>
      </select>
    </td>
  </tr>
  <tr>
    <td><label for="font">Font</label></td>
    <td>
      <select class='form-control' name="font" id="font" size="1" style="display:inline" ng-model='font'>
        <option selected="selected" value="0">No Label</option>
        <option selected="selected" value="Arial.ttf">Arial.ttf</option>
      </select> 
      <input class='form-control' style="display:inline" type="number" value="20" max="30" min="1" name="font_size" id="font_size" ng-model='font_size'></td>
    </tr>
    <tr >
      <td><label for="text">Word to Convert</label></td>
      <td>
        <input  class='form-control widthfix' type="text" required="required" name="text" id="text" ng-model='text'> 
        <ul>
          <li class='bg-danger' ng-show='myform.text.$error.required'>This Field Required</li>
        </ul>
        </td>
      </tr>
    </tbody>
  </table>

    <button type='submit' class="btn btn-primary btn-lg pull-right" ng-class='{"btn-danger" : myform.$invalid}' ng-disabled='myform.$invalid'>Generate BarCode - ولد الباركود</button>

</form>

<div class="clearfix"></div>
<hr>

    <image class='img img-rounded' ng-src='@{{link}}' style='border:2px solid #333;padding:5px'>

<div class="clearfix"></div>
{{br(1)}}


<b>The Link: </b>
    <div class='well well-sm'>
        @{{link}}
    </div>




<div class="clearfix"></div>

<br><br>
<a href="{{url('apis')}}" class='btn btn-danger btn-lg btn-block'>Back To APIs main Page</a>

    </h5>
  </div>


  </div>
</div>  

</div>

