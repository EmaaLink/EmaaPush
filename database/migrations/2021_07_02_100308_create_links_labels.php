<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLinksLabels extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('links_labels', function (Blueprint $table) {
            $table->id();
            $table->string('labelFr');
            $table->string('labelEn');
            $table->string('url');
            $table->integer('order');
            $table->foreignId('categ_id')->constrained('categs_labels')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('links_labels');
    }
}
