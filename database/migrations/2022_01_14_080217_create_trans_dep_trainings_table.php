<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransDepTrainingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trans_dep_trainings', function (Blueprint $table) {
            $table->id();
            $table->string('Title');
            $table->String('Participants');
            $table->date('Starts');
            $table->date('Ends');
            $table->string('Approval');
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
        Schema::dropIfExists('trans_dep_trainings');
    }
}
