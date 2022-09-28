 <h1 class="text-center">
        Datos médicos
      </h1><br>
 <div class="row">
    <div class="col-md-4">
            <div class="box-body">
              <div class="form-group">
                <label>¿Sufre alguna enfermedad?</label>
                <select class="form-control" style="width: 100%;" id ="nb_sufre_enfermedad" name="nb_sufre_enfermedad">
                  <option selected="selected">Seleccione</option>
                  <option value="Si">Si</option>
                  <option value="No">No</option>
                </select>
              </div>
            </div>
          </div>
         <div class="col-md-4">
          <div class="box-body">
              <div class="form-group">
                <label for="role">Nombre de la enfermedad</label>
                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="glyphicon glyphicon-lock"></i>
                  </div> 
                  {{ Form:: text('nb_descripcion_enfermedad',null,['class'=>'form-control','placeholder' => 'Nombre de la enfermedad','id'=>'nb_descripcion_enfermedad']) }}
                </div>
              </div>
            </div>
          </div>
        <div class="col-md-4">
          <div class="box-body">
              <div class="form-group">
                <label for="role">Tipo de sangre</label>
                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="glyphicon glyphicon-lock"></i>
                  </div> 
                  {!! Form::select('tipo_sangre_id', $tipoSangre, null,array('class' => 'form-control input-sm','placeholder'=>'Tipo de sangre','id'=>'tipo_sangre_id')) !!}
                </div>
              </div>
            </div>
          </div>

         
        </div>


         