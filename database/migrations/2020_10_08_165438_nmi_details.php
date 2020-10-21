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
            $table->bigIncrements('rid');
            $table->string('incidenttype');
            $table->string('category');
            $table->string('date');
            $table->string('time');
            $table->string('location');
            $table->string('incident_description');
            $table->string('nearmiss_description');
            $table->string('persons_involved');
            $table->string('root_cause_analysis');
            $table->string('measures_taken');
            $table->string('witnesses');
            $table->string('comments');
            $table->string('supporting_documents');
            $table->string('status');
            $table->string('created_by');
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
        Schema::dropIfExists('nmidatabase');
    }
}
