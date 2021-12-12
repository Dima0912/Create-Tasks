<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('tasks')) {
            Schema::create('tasks', function (Blueprint $table) {
                $table->bigIncrements('id');
                
                $table->unsignedBigInteger('creator_id');
                $table->foreign('creator_id')
                ->references('id')
                ->on('users');
        
                $table->string('title', 50);
                $table->string('content');

                $table->unsignedBigInteger('status_id');
                $table->foreign('status_id')
                ->references('id')
                ->on('statuses');
                
                $table->timestamp('created_at');
                $table->timestamp('updated_at');
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tasks');
    }
}
