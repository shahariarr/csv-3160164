<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCohortsTable extends Migration
{
    public function up()
    {
        Schema::create('cohorts', function (Blueprint $table) {
            $table->id();
            $table->string('CancerType');
            $table->string('PatientID');
            $table->string('SlideID');
            $table->string('image');
            $table->text('url');
            $table->string('gender');
            $table->string('race');
            $table->string('ethnicity');
            $table->string('primary_diagnosis');
            $table->string('tumor_stage');
            $table->integer('Diagnosis_Age_Yrs');
            $table->string('vital_status');
            $table->string('tissue_or_organ_of_origin');
            $table->string('Ball_Hall_Adjusted');
            $table->string('Banfeld_Raftery_Adjusted');
            $table->string('C_index_Adjusted');
            $table->string('Det_Ratio_Adjusted');
            $table->string('PatternLabels')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('cohorts');
    }
}

