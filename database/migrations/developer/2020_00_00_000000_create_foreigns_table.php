<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateForeignsTable extends Migration
{
    /**
     * Run the migrations to create foreign keys.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('developer')->table('users', function (Blueprint $table) {
            $table->integer('cities_id')->nullable()->unsigned();
            $table->integer('countries_id')->nullable()->unsigned();
            $table->integer('regions_id')->nullable()->unsigned();

            $table->foreign('cities_id')->references('id')->on('cities')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('countries_id')->references('id')->on('countries')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('regions_id')->references('id')->on('regions')
                ->onUpdate('cascade')->onDelete('cascade');
                
        });
        Schema::connection('developer')->table('TBL_Recursos', function (Blueprint $table) {
            $table->integer('FK_AreasId')->nullable()->unsigned();

            $table->foreign('FK_AreasId')->references('PK_IdArea')->on('TBL_Areas')
                ->onUpdate('cascade')->onDelete('cascade');
        });
        Schema::connection('developer')->table('TBL_Controles', function (Blueprint $table) {
            $table->integer('FK_UsuarioId')->nullable()->unsigned();
            $table->integer('FK_RecursoId')->nullable()->unsigned();

            $table->foreign('FK_RecursoId')->references('PK_IdRecurso')->on('TBL_Recursos')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('FK_UsuarioId')->references('id')->on('users')
                ->onUpdate('cascade')->onDelete('cascade');
        });
        Schema::connection('developer')->table('TBL_Listen', function (Blueprint $table) {
            $table->integer('FK_UsuarioId')->nullable()->unsigned();

            $table->foreign('FK_UsuarioId')->references('id')->on('users')
                ->onUpdate('cascade')->onDelete('cascade');
        });
        Schema::connection('developer')->table('users', function (Blueprint $table) {
            $table->integer('FK_ProgramaId')->nullable()->unsigned();

            $table->foreign('FK_ProgramaId')->references('PK_IdProgramas')->on('TBL_Programas')
                ->onUpdate('cascade')->onDelete('cascade');
        });
        
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

    }
}