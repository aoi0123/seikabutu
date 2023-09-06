<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('name',50);
            $table->string('body',200);
            $table->integer('time');
            $table->integer('calorie');
            $table->integer('cost');
            $table->foreignId('resource_id')->constrained('resourcies');
            $table->foreignId('step_id')->constrained();
            $table->foreignId('user_id')->constrained();
            $table->timestamps();
            $table->softDeletes();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
};
