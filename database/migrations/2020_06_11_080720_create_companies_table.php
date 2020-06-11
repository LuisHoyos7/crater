<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('nit')->unique();
            $table->string('name', 400);
            $table->string('business_name', 400);
            $table->string('legal_representative', 255);
            $table->string('comercial_activity', 255);
            $table->integer('phone_number');
            $table->string('address', 400);
            $table->string('logo');
            $table->foreignId('location_id')->constrained()->cascadeOnDelete();
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
        Schema::dropIfExists('companies');
    }
}
