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
        Schema::create('geo_gallaries', function (Blueprint $table) {
            $table->id();
            $table->string('fileName');
            $table->longText('comment');
            $table->tinyInteger('type')->default(1);//if 0 type = image if 1 type = video
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('geo_gallaries');
    }
};
