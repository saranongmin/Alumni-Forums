<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGarosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('garos', function (Blueprint $table) {
             $table->bigIncrements('id');
            $table->string('image')->nullable();
            $table->string('name');
            $table->string('university');
            $table->string('department');
             $table->string('graduation_year');
            $table->string('email');
            $table->string('phone');
            $table->string('company_name');
            $table->string('position');
            $table->string('company_location');
            $table->softDeletes();

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
        Schema::dropIfExists('garos');
    }
}
