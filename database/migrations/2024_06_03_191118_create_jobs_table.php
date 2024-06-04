<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->string('titre');
            $table->date('publie_le');
            $table->string('publie_par');
            $table->enum('extension', ['pdf', 'doc', 'xlxs', 'png', 'jpg']);
            $table->string('type_document');
            $table->boolean('etat');
            $table->text('description');
            $table->integer('nombre_vue');
            $table->string('fichier')->nullable();
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
        Schema::dropIfExists('jobs');
    }
}
