 <h1 class="text-center">
        Datos personales
      </h1><br>
 <div class="row">
      <div class="col-sm-4 mt-2">
         <div class="form-group">
          <label>Nombres</label>
            {{ Form:: text('tx_nombres',null,['class'=>'form-control','placeholder' => 'Nombres','id'=>'tx_nombres']) }}
             <input name="users_id" type="hidden" value=" {{ auth()->user()->id}}" id="users_id">
          </div>
      </div> 
      <div class="col-sm-4 mt-2">
        <label>Apellidos</label>
        <div class="form-group">
          {{ Form:: text('tx_apellidos',null,['class'=>'form-control','placeholder' => 'Apellidos','id'=>'tx_apellidos']) }}        
      </div> 
      </div> 
      <div class="col-sm-4 mt-2">
        <div class="form-group">
          <label>Cédula</label>
                  {{ Form:: text('nu_cedula',null,['class'=>'form-control','placeholder' => 'Cédula','id'=>'nu_cedula']) }}       
      </div> 
    </div>
    <div class="col-sm-4 mt-2">
      <label>Edad</label>
        <div class="form-group">
         {{ Form:: text('nu_edad',null,['class'=>'form-control','placeholder' => 'Edad','id'=>'nu_edad']) }}       
      </div> 
    </div>
    <div class="col-sm-4 mt-2">
        <div class="form-group">
          <label>Correo</label>
          {{ Form:: text('tx_correo',null,['class'=>'form-control','placeholder' => 'Correo electrónico','id'=>'tx_correo']) }}   
      </div> 
    </div>
    
    <div class="col-sm-4 mt-2">
      <label>Teléfono</label>
        <div class="form-group">
          {{ Form:: text('nu_telefono',null,['class'=>'form-control','placeholder' => 'Número telefónico','id'=>'nu_telefono','data-inputmask'=>"'mask' : '(9999) 999-9999'",'data-mask' ]) }}   
      </div> 
    </div>
   
    <div class="col-sm-4 mt-2">
      <label>Lugar de nacimiento</label>
        <div class="form-group">
          {!! Form::select('lugar_nacimiento_id', $pais, null,array('class' => 'form-control ','placeholder'=>'Lugar de nacimiento','id'=>'lugar_nacimiento_id')) !!}      
      </div> 
    </div>
    <div class="col-sm-4 mt-2">
      <label>Nacionalidad</label>
        <div class="form-group">
            {!! Form::select('nacionalidad_id', $nacionalidad, null,array('class' => 'form-control ','placeholder'=>'Nacionalidad','id'=>'nacionalidad_id')) !!}    
      </div> 
    </div>
    <div class="col-sm-4 mt-2">
      <label>Fecha de nacimiento</label>
        <div class="form-group">
          {{ Form:: date('fe_nacimiento',null,['class'=>'form-control','placeholder' => 'Fecha de nacimiento','id'=>'fe_nacimiento','data-inputmask'=>"'alias' : 'yyyy/mm/dd'",'data-mask' ]) }}      
      </div> 
    </div>
    <div class="col-sm-4 mt-2">
      <label>Género</label>
        <div class="form-group">
         {!! Form::select('genero_id', $genero, null,array('class' => 'form-control input-sm ','placeholder'=>'Género','id'=>'genero_id')) !!}      
      </div> 
    </div>
    <div class="col-sm-4 mt-2">
      <label>Grado de instrucción</label>
        <div class="form-group">
           {!! Form::select('grado_instruccion_id', $gradoIns, null,array('class' => 'form-control ','placeholder'=>'Grado de instruccion','id'=>'grado_instruccion_id')) !!}    
      </div> 
    </div>
    <div class="col-sm-4 mt-2">
      <label>Ocupación</label>
        <div class="form-group">
          {{ Form:: text('nb_ocupacion',null,['class'=>'form-control','placeholder' => 'Ocupación','id'=>'nb_ocupacion' ]) }}      
      </div> 
    </div>
    <div class="col-sm-12 mt-2">
      <label>Estado civil</label>
        <div class="form-group">
          {!! Form::select('estado_civil_id', $estadoC, null,array('class' => 'form-control ','placeholder'=>'Estado civil','id'=>'estado_civil_id')) !!}     
      </div> 
    </div>
    <div class="col-sm-12 mt-2 ">
      <label>Carga familiar actual del pastor</label>
        <div class="form-group">
          {!! Form::textarea('carga_familiar', null,array('class' => 'form-control input-sm','placeholder'=>'Ejemplo: El pastor fué cambiado a la zona 1','id'=>'carga_familiar')) !!}     
      </div> 
    </div>

  </div>

        
