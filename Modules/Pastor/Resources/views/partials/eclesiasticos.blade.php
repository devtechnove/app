 <h1 class="text-center mt-3 mb-3">
        Datos eclesiásticos
      </h1><br>
 <div class="row">
    <div class="col-sm-4 mt-2">
        <label>¿Bautizado(a) con el Espíritu Santo?</label><br>
            {{ Form:: text('nb_bau_espiritu_santo',null,['class'=>'form-control','placeholder' => 'Bautizado(a) con el Espíritu Santo','id'=>'nb_bau_espiritu_santo']) }}
    </div>
    <div class="col-sm-4 mt-2">
        <label for="role">Grado ministerial</label>
          <div class="input-group">
             {!! Form::select('grado_ministerial_id', $gradoMin, null,array('class' => 'form-control input-sm','placeholder'=>'Grado ministerial','id'=>'grado_ministerial_id')) !!}
        </div>
    </div>
    <div class="col-sm-4 mt-2">
     <div class="form-group">
        <label for="role">Zona</label>
        <div class="input-group">
          {{ Form:: number('nu_zona',null,['class'=>'form-control','placeholder' => 'Zona que pertenece','id'=>'nu_zona']) }}
        </div>
      </div>
    </div>
    <div class="col-sm-4 mt-2">
      <div class="form-group">
        <label for="role">Distrito</label>
          <div class="input-group">
           {{ Form:: text('distrito',null,['class'=>'form-control','placeholder' => 'Distrito que pertenece','id'=>'distrito']) }}
       </div>
      </div>
    </div>
    <div class="col-sm-4 mt-2">
      <div class="form-group">
        <label for="role">Tiempo de trabajo</label>
          <div class="input-group">

          {{ Form:: text('fe_ingreso',null,['class'=>'form-control','placeholder' => 'Ejemplo: 1 mes','id'=>'fe_ingreso']) }}
         </div>
      </div>
     </div>

    <div class="col-sm-4 mt-2">
       <div class="form-group">
            <label for="role">Año de promoción</label>
            <div class="input-group">

               {{ Form:: text('ano_promocion',null,['class'=>'form-control','placeholder' => 'Ejemplo: 2015','id'=>'ano_promocion']) }}
            </div>
          </div>
    </div>
    <div class="col-sm-4 mt-2">
        <div class="form-group">
            <label>¿Estudios Teológicos?</label>
                <select class="form-control " style="width: 100%;" id ="nb_ins_teologico" name="nb_ins_teologico">
                  <option selected="selected">Seleccione</option>
                  <option value="Si">Si</option>
                  <option value="No">No</option>
                </select>
        </div>
    </div>
    <div class="col-sm-4 mt-2">
        <div class="form-group">
         <label for="role">Nombre del instituto teológico</label>
            <div class="input-group">

            {{ Form:: text('nb_desc_ins_teologico',null,['class'=>'form-control','placeholder' => 'Nombre del instituto teológico','id'=>'nb_desc_ins_teologico']) }}
            </div>
        </div>
    </div>
    <div class="col-sm-4 mt-2">
        <div class="form-group">
          <label for="role">Tiempo de estudio</label>
           <div class="input-group">
          {{ Form:: text('nu_tiempo_ins',null,['class'=>'form-control','placeholder' => 'Tiempo de estudio','id'=>'nu_tiempo_ins']) }}
       </div>
     </div>
    </div>
    <div class="col-sm-12 mt-2 mb-2">
        <div class="form-group">
            <label for="role">Título obtenido</label>
            <div class="input-group">

               {{ Form:: text('nb_titulo_obtenido',null,['class'=>'form-control','placeholder' => 'Título obtenido','id'=>'nb_titulo_obtenido']) }}
            </div>
          </div>
    </div>
</div>


         
