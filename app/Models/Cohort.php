<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cohort extends Model
{
    use HasFactory;

    protected $fillable = [
        'CancerType', 'PatientID', 'SlideID', 'image', 'url', 'gender', 
        'race', 'ethnicity', 'primary_diagnosis', 'tumor_stage', 
        'Diagnosis_Age_Yrs', 'vital_status', 'tissue_or_organ_of_origin', 
        'Ball_Hall_Adjusted', 'Banfeld_Raftery_Adjusted', 'C_index_Adjusted', 
        'Det_Ratio_Adjusted', 'PatternLabels'
    ];
}
