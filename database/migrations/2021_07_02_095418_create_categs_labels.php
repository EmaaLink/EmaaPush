<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategsLabels extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categs_labels', function (Blueprint $table) {
            $table->id();
            $table->string('labelFr');
            $table->string('labelEn');
            $table->string('icon');
            $table->integer('order');
            $table->foreignId('section_id')->constrained('sections_labels')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('categs_labels');
    }
}
