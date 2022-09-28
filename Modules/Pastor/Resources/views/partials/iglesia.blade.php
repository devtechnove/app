<h4 class="text-center">
        Ingrese los datos
</h4><br> 
<div class="row">
      <div class="col-sm-6">
         <div class="form-group">
          <label>Nombre de la iglesia</label>
            {{ Form:: text('nb_nombre',null,['class'=>'form-control','placeholder' => 'Nombre de la iglesia','id'=>'nb_nombre']) }}
             <input name="users_id" type="hidden" value=" {{ auth()->user()->id}}" id="users_id">

             <input name="pastor_id" type="hidden" value=" {{ $pastor->id}}" id="users_id">
          </div>
      </div> 
      <div class="col-sm-6">
         <div class="form-group">
          <label>Zona que pertenece</label>
            {{ Form:: number('nu_zona',Auth::user()->zona,['class'=>'form-control','placeholder' => 'Nombre de la iglesia','id'=>'nu_zona','value'=>'Auth::user()->id']) }}
            
          </div>
      </div> 
  </div>

    <h4 class="text-center mt-3">
        Ingrese los datos de la ubicación de la congregación
</h4><br>

<div class="row">
	<div class="col-sm-6">
         <div class="form-group">
          <label>Urbanización</label>
            {{ Form:: text('nb_urbanizacion',null,['class'=>'form-control','placeholder' => 'Urbanización','id'=>'nb_urbanizacion']) }}
            
          </div>
    </div>
    <div class="col-sm-6">
         <div class="form-group">
          <label>Calle / carrera / avenida </label>
            {{ Form:: text('nb_urbanizacion',null,['class'=>'form-control','placeholder' => 'Calle / carrera / avenida ','id'=>'nb_urbanizacion']) }}
            
          </div>
    </div>  
	 <div class="col-sm-6">
         <div class="form-group">
          <label>Edificio / conjunto / quinta  </label>
            {{ Form:: text('nb_edificio',null,['class'=>'form-control','placeholder' => 'Edificio / conjunto / quinta  ','id'=>'nb_edificio']) }}
            
          </div>
    </div>
	<div class="col-sm-6">
         <div class="form-group">
          <label>N°. de piso / apartamento / casa  </label>
            {{ Form:: number('nu_casa',null,['class'=>'form-control','placeholder' => 'N°. de piso / apartamento / casa  ','id'=>'nu_casa']) }}
            
          </div>
    </div>
   
     
    
    <div class="col-sm-6">
      <label>Tipo del local de culto</label>
        <div class="form-group">
           {!! Form::select('tipo_local_id', $locales, null,array('class' => 'form-control input-sm','placeholder'=>'Selecione tipo del local','id'=>'estado_id')) !!}    
      </div> 
    </div>
    
	<div class="col-sm-6">
         <div class="form-group">
          <label>Zona postal </label>
            {{ Form:: number('nu_codigo_postal',null,['class'=>'form-control','placeholder' => 'Zona postal  ','id'=>'nu_codigo_postal']) }}
            
          </div>
    </div>
	<div class="col-sm-12">
	    <label>Teléfono</label>
        <div class="form-group">
          {{ Form:: text('nu_telefono',null,['class'=>'form-control','placeholder' => 'Número telefónico','id'=>'nu_telefono','data-inputmask'=>"'mask' : '(9999) 999-9999'",'data-mask' ]) }}   
      </div> 
	 </div>
	 <div class="col-sm-4">
      <label>Estado del país</label>
        <div class="form-group">
           {!! Form::select('estado_id', $estado, null,array('class' => 'form-control input-sm','placeholder'=>'Selecione un estado del país','id'=>'estados_id')) !!}    
      </div> 
    </div>
    <div class="col-sm-4">
      <label>Municipio</label>
        <div class="form-group">
           {!! Form::select('municipio_id', $estado, null,array('class' => 'form-control input-sm','placeholder'=>'Selecione un municipio del estado','id'=>'municipio_id')) !!}    
      </div> 
    </div>

<div class="col-sm-4">
      <label>Parroquia</label>
        <div class="form-group">
           {!! Form::select('parroquia_id', $estado, null,array('class' => 'form-control input-sm','placeholder'=>'Selecione una parroquia del estado','id'=>'parroquia_id')) !!}    
      </div> 
    </div>


</div>