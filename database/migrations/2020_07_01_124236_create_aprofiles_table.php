<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAprofilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aprofiles', function (Blueprint $table) {
            $table->bigIncrements('id');
             $table->string('name');
             $table->string('department');
            $table->string('batch_id');
            $table->string('graduation_year');
            $table->string('email');
            $table->string('phone');            
            $table->string('address');
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
        Schema::dropIfExists('aprofiles');
    }
}
