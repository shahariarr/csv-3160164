<?php

namespace App\Http\Controllers;

use App\Models\Cohort;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class CohortController extends Controller
{
    public function importCsv()
    {
        $filePath = storage_path('app/public/cohort.csv'); // Ensure your file is here
        $file = fopen($filePath, 'r');

        $header = fgetcsv($file);
        $data = [];

        while (($row = fgetcsv($file)) !== false) {
            $data[] = array_combine($header, $row);
        }

        fclose($file);

        foreach (array_chunk($data, 500) as $chunk) {
            DB::table('cohorts')->insert($chunk);
        }

        return redirect('/cohorts')->with('success', 'CSV data imported successfully!');
    }

    public function showCohorts()
    {
        $cohorts = Cohort::all();
        return view('cohorts.index', compact('cohorts'));
    }
}
