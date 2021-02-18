<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class NmiDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nmi_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('incident_type');
            $table->unsignedBigInteger('category');
            $table->string('date');
            $table->string('time');
            $table->unsignedBigInteger('location');
            $table->string('incident_description');
            $table->string('nearmiss_description');
            $table->string('persons_involved')->nullable();
            $table->string('root_cause_analysis')->nullable();
            $table->string('measures_taken')->nullable();
            $table->string('witnesses')->nullable();
            $table->string('comments')->nullable();
            $table->string('supporting_documents')->nullable();
            $table->string('status');
            $table->unsignedBigInteger('created_by');
            $table->timestamps();


            $table->foreign('incident_type')->references('id')->on('incident_types');
            $table->foreign('category')->references('id')->on('category_types');
            $table->foreign('location')->references('id')->on('location_details');
            $table->foreign('created_by')->references('id')->on('users');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nmi_details');
    }
}
