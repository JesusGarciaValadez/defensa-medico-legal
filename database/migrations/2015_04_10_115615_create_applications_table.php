<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApplicationsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /*$speciality = [ 'Otra',
                        'Alergologia',
                        'Cardiología',
                        'Cirugía Cardiaca',
                        'Cirugía Estética',
                        'Cirugía General',
                        'Cirugía Plastica',
                        'Cirugía de Mama',
                        'Cirugía Maxilofacial',
                        'Cirugía Vascular',
                        'Dermatología',
                        'Endocrinología y Nutrición',
                        'Gastroenterología- Digestivo',
                        'Genética',
                        'Geriatría',
                        'Ginecología',
                        'Hematología',
                        'Enfermedades del Hígado (Hepatología)',
                        'Enfermedades Infecciosas',
                        'Medicina Interna',
                        'Nefrología',
                        'Neumologia',
                        'Neurología',
                        'Neurocirugía',
                        'Oftalmología',
                        'Otorrinolaringologia',
                        'Oncología',
                        'Pediatría',
                        'Proctología',
                        'Psiquiatría',
                        'Rehabilitación y M. Deportiva',
                        'Reumatología',
                        'Traumatología',
                        'Urología'
                        ];*/
        Schema::create( 'applications', function( Blueprint $table )
        {
            $table->increments('id');
            $table->string('nombre_doctor');
            $table->string('email')->unique();
            $table->string('cedula_1')->unique();
            $table->string('cedula_2')->unique()->nullable();
            $table->string('cedula_3')->unique()->nullable();
            $table->string('especialidad');
            $table->string('telefono_contacto');
            $table->string('telefono_celular');
            $table->string('parte_republica');
            $table->string('direccion_calle_1');
            $table->string('direccion_calle_2')->nullable();
            $table->string('direccion_ciudad');
            $table->string('direccion_estado');
            $table->string('direccion_pais');
            $table->string('direccion_postal');
            $table->boolean('confirmed_contract');
            $table->boolean('confirmed_policy');
            $table->rememberToken();
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
        //
    }

}
