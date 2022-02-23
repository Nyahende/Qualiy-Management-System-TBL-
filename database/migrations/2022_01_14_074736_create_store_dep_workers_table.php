<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStoreDepWorkersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('store_dep_workers', function (Blueprint $table) {
            $table->id();
            $table->string('Full_Name');
            $table->string('Education');
            $table->string('Experience');
            $table->string('Employment_Type');
            $table->string('Position');
            $table->date('Since');
            $table->date('Until');
            $table->string('Disability')->nullable();
            $table->string('Extra');
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
        Schema::dropIfExists('store_dep_workers');
    }
}
