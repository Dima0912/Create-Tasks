<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTaskLabelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('task_labels', function (Blueprint $table) {
           
            $table->unsignedBigInteger('task_id');
            $table->foreign('task_id')
            ->references('id')
            ->on('tasks');

            $table->unsignedBigInteger('label_id');
            $table->foreign('label_id')
            ->references('id')
            ->on('labels');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('task_labels');
    }
}
