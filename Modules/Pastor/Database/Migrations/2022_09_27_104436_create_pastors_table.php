<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePastorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pastor', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tx_nombres')->nullable();
            $table->string('tx_apellidos')->nullable();
            $table->string('nu_cedula')->nullable();
            $table->string('nu_edad')->nullable()->default(20);
            $table->string('tx_correo')->nullable()->default('example@mail.com');
            $table->string('nu_telefono')->nullable();
            $table->string('fe_ingreso')->nullable();
            $table->string('nb_bau_espiritu_santo')->nullable()->default('NO');
            $table->string('nb_ins_teologico')->nullable()->default('N/A');
            $table->string('nb_desc_ins_teologico')->nullable()->default('N/A');
            $table->string('nu_tiempo_ins')->nullable()->default('N/A');
            $table->string('nb_titulo_obtenido')->nullable()->default('N/A');
            $table->string('nb_sufre_enfermedad')->nullable()->default('NO');
            $table->string('nb_descripcion_enfermedad')->nullable()->default('N/A');
            $table->integer('tipo_sangre_id')->nullable()->default(1);
            $table->string('nb_ocupacion')->nullable()->default('OCUPACIÓN DEL PASTOR');
            $table->string('nu_zona')->nullable();
            $table->integer('distrito')->nullable();
            $table->integer('lugar_nacimiento_id')->unsigned()->nullable()->default(189);
            $table->integer('nacionalidad_id')->unsigned()->nullable()->default(1);
            $table->date('fe_nacimiento')->nullable()->default(date('d/m/Y'));
            $table->integer('genero_id')->unsigned()->nullable();
            $table->integer('grado_instruccion_id')->unsigned()->nullable();
            $table->integer('grado_ministerial_id')->unsigned()->nullable();
            $table->integer('estado_civil_id')->unsigned()->nullable()->default(2);
            $table->string('carga_familiar')->nullable();
            $table->integer('status')->default(1);
            $table->string('ano_promocion')->nullable();
            $table->string('picture')->nullable();

            /**
             *  Add foreign key constraints to these columns
             */

            $table->foreign('lugar_nacimiento_id')->references('id')->on('pais');
            $table->foreign('nacionalidad_id')->references('id')->on('nacionalidads');
            $table->foreign('grado_instruccion_id')->references('id')->on('grado_instruccions');
            $table->foreign('grado_ministerial_id')->references('id')->on('grado_ministerials');
            $table->foreign('estado_civil_id')->references('id')->on('estadoc');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pastors');
    }
}
