<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string("name",55);
            $table->string("main_image",255)->nullable();
            $table->text("shortcut")->nullable();
            $table->string("region",255)->nullable();
            $table->string("category",255)->nullable();
            $table->integer("visible")->default(0);
            $table->string("price",20)->nullable();
            $table->date("deadline")->nullable();
            $table->text("description")->nullable();
            $table->integer("creator_id")->nullable();
            $table->integer("pledged")->default(0);
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
        Schema::dropIfExists('projects');
    }
}
