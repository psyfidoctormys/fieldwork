@extends('layouts.app')

@section('content')
<h1 class="page-header text-monospace text-primary font-weight-bold">LabVantage TABLE</h1>
            <table class="table table-striped" id="myTable">
            <thead class="bg-primary text-white">
                <tr>
                    <th scope="col">Cohort</th>
                    <th scope="col">Clinical Event</th>
                    <th scope="col">Sample Type</th>
                    <th scope="col">External Participant ID</th>
                    <th scope="col">LV Sample ID</th>
                    <th scope="col">Current Location</th>
                    <th scope="col">Container Type</th>
                    <th scope="col">Prep Type</th>
                    <th scope="col">Treatment Method</th>
                    <th scope="col">Initial Mass</th>
                    <th scope="col">Initial Mass Units</th>
                    <th scope="col">Initial Volume</th>
                    <th scope="col">Initial Volume Units</th>
                    <th scope="col">Collection Date/Time</th>
                    <th scope="col">Clinical Protocol</th>
                    <th scope="col">Storage Status</th>
                    <th scope="col">Study Site</th>
                </tr>
            </thead>
                <tbody>
@endsection