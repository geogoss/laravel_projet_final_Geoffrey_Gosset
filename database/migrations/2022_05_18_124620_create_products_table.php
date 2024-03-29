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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->boolean('bool')->default(false);
            $table->string('name');
            $table->string('state')->nullable();
            $table->longText('description')->nullable();
            $table->integer('price');
            $table->integer('discount')->nullable();
            $table->foreignId('type_id')->nullable()->constrained()->nullOnDelete('cascade');
            $table->foreignId('size_id')->nullable()->constrained()->nullOnDelete('cascade');
            $table->foreignId('user_id')->nullable()->constrained()->nullOnDelete('cascade');
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
        Schema::dropIfExists('products');
    }
};
