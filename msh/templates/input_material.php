<legend>{{INPUT_MATERIAL_HEADING}}</legend>
<div>
<form action="/php/input_material_into_SQL.php" method="post" class="form-horizontal">
<fieldset>

<div class="form-group">
  <label class="col-md-4 control-label" for="MATERIAL_NAME">{{MATERIAL_NAME}}</label>  
  <div >
    <input id="customer" name="MATERIAL_NAME" type="text" class="form-control input-md" />
  </div>
</div>
<br/>

<div class="form-group">
  <label class="col-md-4 control-label" for="MATERIAL_CATEGORY">{{MATERIAL_CATEGORY}}</label>  
  <div >
    <input id="customer" name="MATERIAL_CATEGORY" type="text" class="form-control input-md" />
  </div>
</div>
<br/> 

<div class="form-group">
  <label class="col-md-4 control-label" for="MATERIAL_DENSITY">{{MATERIAL_DENSITY}}</label>  
  <div >
    <input id="customer" name="MATERIAL_DENSITY" type="text" class="form-control input-md" />
  </div>
</div>
<br/> 
    
<div class="form-group">
  <label class="col-md-4 control-label" for="MATERIAL_PICTURE">{{MATERIAL_PICTURE}}</label>  
  <div >
    {{MATERIAL_PICTURES}}
  </div>
</div>
<br/> 

<div class="form-group">
  <label class="col-md-4 control-label" for="MATERIAL_SIGN">{{MATERIAL_SIGN}}</label>  
  <div >
      {{MATERIAL_SIGNS}}
  </div>
</div>
    <br/> 

<div class="form-group">
  <label class="col-md-4 control-label" for="MATERIAL_ELECTRICAL_INSULATOR">{{MATERIAL_ELECTRICAL_INSULATOR}}</label>  
  <div >
      <select id="printer" name="MATERIAL_ELECTRICAL_INSULATOR" class="form-control">
        <option value="1">{{TRUE}}</option>
        <option value="0">{{FALSE}}</option>
  </select>
  </div>
</div>
<br/> 
<div class="form-group">
  <label class="col-md-4 control-label" for="MATERIAL_THERMAL_INSULATOR">{{MATERIAL_THERMAL_INSULATOR}}</label>  
  <div >
      <select id="printer" name="MATERIAL_THERMAL_INSULATOR" class="form-control">
        <option value="1">{{TRUE}}</option>
        <option value="0">{{FALSE}}</option>
  </select>
  </div>
</div>
<br/> 

<div class="form-group">
  <label class="col-md-4 control-label" for="MATERIAL_PHONIC_INSULATOR">{{MATERIAL_PHONIC_INSULATOR}}</label>  
  <div >
      <select id="printer" name="MATERIAL_PHONIC_INSULATOR" class="form-control">
        <option value="1">{{TRUE}}</option>
        <option value="0">{{FALSE}}</option>
  </select>
  </div>
</div>
<br/> 

<div class="form-group">
  <label class="col-md-4 control-label" for="MATERIAL_INFLAMABLE">{{MATERIAL_INFLAMABLE}}</label>  
  <div >
      <select id="printer" name="MATERIAL_INFLAMABLE" class="form-control">
        <option value="1">{{TRUE}}</option>
        <option value="0">{{FALSE}}</option>
  </select>
  </div>
</div>
<br/> 

<div class="form-group">
  <label class="col-md-4 control-label" for="MATERIAL_MECHANICAL_STRESS">{{MATERIAL_MECHANICAL_STRESS}}</label>  
  <div >
    <input id="customer" name="MATERIAL_MECHANICAL_STRESS" type="text" class="form-control input-md">
  </div>
</div>    
    <br/> 

<div class="form-group">
  <label class="col-md-4 control-label" for="MATERIAL_ELONGATION_AT_BREAK">{{MATERIAL_ELONGATION_AT_BREAK}}</label>  
  <div >
    <input id="customer" name="MATERIAL_ELONGATION_AT_BREAK" type="text" class="form-control input-md">
  </div>
</div>
    <br/> 

<div class="form-group">
  <label class="col-md-4 control-label" for="MATERIAL_BREAKINGPOINT">{{MATERIAL_BREAKINGPOINT}}</label>  
  <div >
    <input id="customer" name="MATERIAL_BREAKINGPOINT" type="text" class="form-control input-md">
  </div>
</div>   
    <br/> 

<div class="form-group">
  <label class="col-md-4 control-label" for="MATERIAL_PRICE_PER_KG">{{MATERIAL_PRICE_PER_KG}}</label>  
  <div >
    <input id="customer" name="MATERIAL_PRICE_PER_KG" type="text" class="form-control input-md">
  </div>
</div>
<br/> 

<div class="form-group">
  <label class="col-md-4 control-label" for="MATERIAL_MELTINGPOINT">{{MATERIAL_MELTINGPOINT}}</label>  
  <div >
    <input id="customer" name="MATERIAL_MELTINGPOINT" type="text" class="form-control input-md">
  </div>
</div>   
<br/> 

<div class="form-group">
  <label class="col-md-4 control-label" for="MATERIAL_YOUNGS_MODULE">{{MATERIAL_YOUNGS_MODULE}}</label>  
  <div >
    <input id="customer" name="MATERIAL_YOUNGS_MODULE" type="text" class="form-control input-md">
  </div>
</div>   
 <br/> 

<div class="form-group">
  <label class="col-md-4 control-label" for="printer"></label>
  <div >
    <label for="comment">{{MATERIAL_ADDITIONAL_INFORMATION}}</label><br/>
    <textarea class="form-control" rows="5" name="MATERIAL_ADDITIONAL_INFORMATION" id="MATERIAL_ADDITIONAL_INFORMATION">{{MATERIAL_ADDITIONAL_INFORMATION}}</textarea>
  </div>
</div>
 <br/> 

<div class="form-group">
  <label class="col-md-4 control-label" for="submit"></label>
  <div class="col-md-8">  
    <button id="Eintragen" name="submit" class="btn btn-info">{{SUBMIT}}</button>
  </div>
</div>
</fieldset>
</form>
</div>