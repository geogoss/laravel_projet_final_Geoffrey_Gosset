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
        Schema::create('notes', function (Blueprint $table) {
            $table->id();
            $table->string('year')->nullable();
            $table->string('month')->nullable();
            $table->string('dayMonth')->nullable();
            $table->string('dayWeek')->nullable();
            $table->string('hour')->nullable();
            $table->string('pm')->nullable();
            $table->string('author')->nullable();
            $table->string('subject')->nullable();
            $table->longText('content')->nullable();
            $table->foreignId('product_id')->nullable()->constrained()->nullOnDelete();
            $table->foreignId('foto_id')->nullable()->constrained()->nullOnDelete();
            $table->foreignId('user_id')->nullable()->constrained()->nullOnDelete();
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
        Schema::dropIfExists('notes');
    }
};
