<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrateRewardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('rewards', function (Blueprint $table) {
            $table->id();
            $table->string("name",200);
            $table->text("description");
            $table->integer("price");
            $table->integer("quantity")->nullable();
            $table->boolean("visible")->default(0);
            $table->string("main_image",255)->nullable();
            $table->integer("creator_id")->nullable();
            $table->integer("project_id")->nullable();

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
        //
    }
}
