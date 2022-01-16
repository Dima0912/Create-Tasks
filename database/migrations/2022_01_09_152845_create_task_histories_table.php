<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTaskHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('task_histories', function (Blueprint $table) {
            $table->increments('id');
            $table->decimal('version')->nullable();
            $table->unsignedBigInteger('task_id');
            $table->foreign('task_id')
            ->references('id')
            ->on('tasks');
            $table->string('title')->unique();
            $table->string('content')->unique();
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
        Schema::dropIfExists('task_histories');
    }
}
