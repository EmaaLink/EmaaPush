<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PivoteSectionsLabelsUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sections_labels_users', function (Blueprint $table) {
            $table->id();
            $table->foreignId('sections_label_id')->constrained('sections_labels')->onUpdate('cascade')->onDelete('cascade');

            $table->foreignId('admin_id')->constrained('admins')->onUpdate('cascade')->onDelete('cascade');
            $table->string('label')->unique();

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
        Schema::dropIfExists('sections_labels_users');
    }
}
