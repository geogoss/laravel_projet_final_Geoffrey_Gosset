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
            $table->string('year');
            $table->string('month');
            $table->string('dayMonth');
            $table->string('dayWeek');
            $table->string('hour');
            $table->string('pm');
            $table->string('author');
            $table->string('email');
            $table->longText('content');
            $table->foreignId('article_id')->nullable()->constrained();
            $table->foreignId('foto_id')->nullable()->constrained();
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
