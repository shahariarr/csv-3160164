<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cohorts Data</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Cohort Data</h1>

        <!-- Success Message -->
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <!-- Import Button -->
        <!-- <a href="{{ url('/import-cohort') }}" class="btn btn-primary mb-3" onclick="return confirm('Are you sure you want to import data?');">
            Import Data
        </a> -->

        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Cancer Type</th>
                    <th>Patient ID</th>
                    <th>Slide ID</th>
                    <th>Image</th>
                    <th>URL</th>
                    <th>Gender</th>
                    <th>Race</th>
                    <th>Ethnicity</th>
                    <th>Primary Diagnosis</th>
                    <th>Tumor Stage</th>
                    <th>Diagnosis Age (Years)</th>
                    <th>Vital Status</th>
                    <th>Tissue/Organ of Origin</th>
                    <th>Ball Hall Adjusted</th>
                    <th>Banfeld Raftery Adjusted</th>
                    <th>C Index Adjusted</th>
                    <th>Det Ratio Adjusted</th>
                    <th>Pattern Labels</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cohorts as $cohort)
                    <tr>
                        <td>{{ $cohort->id }}</td>
                        <td>{{ $cohort->CancerType }}</td>
                        <td>{{ $cohort->PatientID }}</td>
                        <td>{{ $cohort->SlideID }}</td>
                        <td><img src="{{ asset('storage/' . $cohort->image) }}" alt="Image" width="100"></td>
                        <td><a href="{{ $cohort->url }}" target="_blank">View Slide</a></td>
                        <td>{{ $cohort->gender }}</td>
                        <td>{{ $cohort->race }}</td>
                        <td>{{ $cohort->ethnicity }}</td>
                        <td>{{ $cohort->primary_diagnosis }}</td>
                        <td>{{ $cohort->tumor_stage }}</td>
                        <td>{{ $cohort->Diagnosis_Age_Yrs }}</td>
                        <td>{{ $cohort->vital_status }}</td>
                        <td>{{ $cohort->tissue_or_organ_of_origin }}</td>
                        <td>{{ $cohort->Ball_Hall_Adjusted }}</td>
                        <td>{{ $cohort->Banfeld_Raftery_Adjusted }}</td>
                        <td>{{ $cohort->C_index_Adjusted }}</td>
                        <td>{{ $cohort->Det_Ratio_Adjusted }}</td>
                        <td>{{ $cohort->PatternLabels }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
