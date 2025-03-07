<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('portofolios', function (Blueprint $table) {
            $table->id();
            //add column title
            $table->string('title');
            //add column description
            $table->text('description');
            //add column image
            $table->string('image');
            // add foreign key one to many from portofolio category to portofolio
            $table->foreignId('category_id')->references('id')->on('portofolio_categories');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('portofolios');
    }
};
