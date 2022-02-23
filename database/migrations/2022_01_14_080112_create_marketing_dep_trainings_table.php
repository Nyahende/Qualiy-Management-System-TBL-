<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMarketingDepTrainingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('marketing_dep_trainings', function (Blueprint $table) {
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
        Schema::dropIfExists('marketing_dep_trainings');
    }
}