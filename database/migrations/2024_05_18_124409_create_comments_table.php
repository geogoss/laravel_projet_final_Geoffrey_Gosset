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
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->string('year')->nullable();
            $table->string('month')->nullable();
            $table->string('dayMonth')->nullable();
            $table->string('dayWeek')->nullable();
            $table->string('hour')->nullable();
            $table->string('pm')->nullable();
            $table->string('author')->nullable();
            $table->string('email')->nullable();
            $table->longText('content')->nullable();
            $table->foreignId('article_id')->nullable()->constrained();
            $table->foreignId('foto_id')->nullable()->constrained();
            $table->foreignId('user_id')->nullable()->constrained();
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
        Schema::dropIfExists('comments');
    }
};
