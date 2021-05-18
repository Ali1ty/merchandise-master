<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModulecategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modulecategories', function (Blueprint $table) {
            $table->id();
            $table->text('name');
            $table->boolean('status');
            $table->foreign('id')->references('modules')->onDelete('CASCADE');
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
        Schema::dropIfExists('modulecategories');
    }
}
