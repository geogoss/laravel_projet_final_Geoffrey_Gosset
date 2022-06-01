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
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            // $table->string('date');
            $table->string('year')->nullable();
            $table->string('month')->nullable();
            $table->string('dayMonth')->nullable();
            $table->string('dayWeek')->nullable();
            $table->string('hour')->nullable();
            $table->string('pm')->nullable();
            $table->longText('content1')->nullable();
            $table->longText('content2')->nullable();
            $table->boolean('bool')->default(false)->nullable();
            $table->foreignId('categorie_id')->nullable()->constrained()->nullOnDelete();
            $table->foreignId('user_id')->nullable()->constrained()->nullOnDelete();
            $table->foreignId('blog_id')->nullable()->constrained()->nullOnDelete();
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
        Schema::dropIfExists('articles');
    }
};
