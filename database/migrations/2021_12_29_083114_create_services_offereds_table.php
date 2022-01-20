<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesOfferedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services_offereds', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('visitation_id');
            $table->unsignedBigInteger('service_id');

            $table->timestamps();

            $table->index('visitation_id');
            $table->index('service_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('services_offereds');
    }
}
