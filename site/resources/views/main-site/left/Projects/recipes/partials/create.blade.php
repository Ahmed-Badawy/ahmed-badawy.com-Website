<div class="panel panel-default" ng-show='true'>
  <div class="panel-heading"><h3 class='text-center'>أضف طبخة جديدة</h3></div>
  <div class="panel-body">
      

<form ng-submit="add_new(new_recipe)" enctype="multipart/form-data" accept-charset="UTF-8" method="POST">

<div class="row">
    <div class="col-sm-6">

  <label class='widthfix text-right space_above' dir='rtl'>الكمية (تكفى كم شخصا)</label>
  <div class="input-group">     
    <span class="input-group-addon">{{fa2('users')}}</span>
   <input type="number" class='form-control widthfix' placeholder='تكفى لكم شخصا' dir='rtl' ng-model='new_recipe.info.num'>
  </div>

<label class='widthfix text-right space_above' dir='rtl'>مدة التحضير</label>
<div class="input-group">
  <span class="input-group-addon">{{fa('clock-o')}}</span>
         <input type="number" class='form-control widthfix' placeholder='زمن التحضير بالدقائق' dir='rtl' ng-model='new_recipe.info.prepare_time'>
</div>

<label class='widthfix text-right space_above' dir='rtl'>مدة الطهو</label>
<div class="input-group">
  <span class="input-group-addon">{{fa('clock-o')}}</span>
         <input type="number" class='form-control widthfix' placeholder='زمن الطهو بالدقائق' dir='rtl' ng-model='new_recipe.info.cook_time'>
</div>

  <label class='widthfix text-right space_above' dir='rtl'>Tags</label>
  <div class="input-group">     
    <span class="input-group-addon">{{fa2('users')}}</span>
   <input type="text" class='form-control widthfix' ng-model='new_recipe.info.tags'>
  </div>

    </div>


    <div class="col-sm-6">
    
  <label class='widthfix text-right'>أسم الوصفة</label>
  <div class="input-group">     
    <span class="input-group-addon">{{fa2('star')}}</span>
    <input type="text" ng-model='new_recipe.info.title' placeholder="أسم الوصفة" class="form-control" dir='rtl'>
  </div>


<label class='widthfix text-right space_above' dir='rtl'>ضع صورة للوصفه</label>
<div class="input-group">
  <span class="input-group-addon">{{fa('upload')}}</span>
  <input class="form-control widthfix" dir='rtl' type="file" placeholder="Recipe Image" accept="image/*" ng-model='new_recipe.img'>
</div>


  <label class='widthfix text-right space_above' dir='rtl'>أسلوب الوصفة (مثلا: أمريكى - مغربى - تركى)</label>
  <div class="input-group">     
    <span class="input-group-addon">{{fa2('star')}}</span>
    <input type="text" ng-model='new_recipe.info.recipe_orgin' placeholder="أسلوب الوصفة (أمريكى - مغربى - تركى)" class="form-control" dir='rtl'>
  </div>


  <label class='widthfix text-right space_above' dir='rtl'>درجة الصعوبة</label>
  <div class="input-group">     
    <span class="input-group-addon">{{fa2('users')}}</span>
   <select class='form-control widthfix' dir='rtl' ng-model='new_recipe.info.difficulty'>
     <option value="none" disabled>أختر درجة صعوبة الوصفة</option>
     <option value="easy">سهل</option>
     <option value="medium">معتدل</option>
     <option value="hard">صعب</option>
   </select>
  </div>

  <label class='widthfix text-right space_above' dir='rtl'>تكلفة الوصفة</label>
  <div class="input-group">     
    <span class="input-group-addon">{{fa2('users')}}</span>
   <select class='form-control widthfix' dir='rtl' ng-model='new_recipe.info.price'>
     <option value="none" disabled>أختر تكلفة الوصفة</option>
     <option value="cheap">غير مكلف</option>
     <option value="ok">معتدل التكلفة</option>
     <option value="expensive">غال</option>
   </select>
  </div>      



  
    </div>
    <div class="col-sm-6">
<label class='widthfix text-right space_above' dir='rtl'>المكوّنات</label>
<div class="input-group">     
<span class="input-group-addon">{{fa2('users')}}</span>
<textarea class='form-control widthfix' rows='8' dir='rtl' placeholder='المكونات' ng-model='new_recipe.info.components'></textarea>
</div>    
    </div>
    <div class="col-sm-6">
<label class='widthfix text-right space_above' dir='rtl'>طريقة التحضير</label>
<div class="input-group">     
<span class="input-group-addon">{{fa2('users')}}</span>
<textarea class='form-control widthfix' dir='rtl' rows="8" placeholder='طريقة التحضير' ng-model='new_recipe.info.prepreation_method'></textarea>
</div>    
    </div>
</div>





<hr>

<div class="btn-group btn-group-justified">
  <div class="btn-group">
    <button type='submit' class="btn btn-primary"><b>Save</b></button>
  </div>
  <div class="btn-group">
    <button type="reset" class="btn btn-danger"><b>Reset</b></button>
  </div>  
</div>

</form>


  </div>
</div>
      <hr>   