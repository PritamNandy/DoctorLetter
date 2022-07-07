@extends('layouts.app')
@section('title','Doctor\'s Letter')

@section('content')
    <style>
        #datatable_wrapper .row {
            margin-top: 10px !important;
        }
    </style>
    <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
        <div>
            <h4 class="mb-3 mb-md-0">Welcome to Dashboard</h4>
        </div>
    </div>

    <div class="row">
        <div class="col-12 col-xl-12 stretch-card">
            <div class="row flex-grow-1">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-baseline">
                            <h6 class="card-title mb-0">Patients List</h6>
                        </div>
                        <table class="table table-bordered mt-3" id="datatable">
                            <thead class="thead-dark">
                                <th>PATIENT ID</th>
                                <th>FIRST NAME</th>
                                <th>LAST NAME</th>
                                <th>CURRENT STATUS</th>
                                <th>ACTION</th>
                            </thead>
                            <tbody>
                                @foreach($patients as $patient)
                                    <tr>
                                        <td>{{ $patient->patient_id }}</td>
                                        <td>{{ $patient->first_name }}</td>
                                        <td>{{ $patient->last_name }}</td>
                                        <td>
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" style="width: {{ rand(0, 100) }}%" aria-valuenow="{{ rand(0, 100) }}" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <div style="margin-top: 10px !important;">
                                                <p><strong>MISSING INFORMATION</strong></p>
                                                <p>Summery</p>
                                            </div>
                                        </td>
                                        <td>
                                            <a class="btn btn-primary" href="{{ url('generate-letter').'/'.$patient->id }}">
                                                Generate Letter
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- row -->
@endsection

@push('script')
@endpush
