@extends('layouts.app')

@section('content')
    <h1>LabVantage</h1>
    <table class="table table-striped">
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
    @if(count($lv) > 1)
        @foreach($lv as $lv)
            <tr>
            <th>{{$lv->cpCohort}}</th>
            <th>{{$lv->clinicalEvent}}</th>
            <th>{{$lv->sampleType}}</th>
            <th>{{$lv->externalSubject}}</th>
            <th>{{$lv->sample}}</th>
            <th>{{$lv->currentLocation}}</th>
            <th>{{$lv->container}}</th>
            <th>{{$lv->preptype}}</th>
            <th>{{$lv->treatmentMethod}}</th>
            <th>{{$lv->initialMass}}</th>           
            <th>{{$lv->initialmassUnits}}</th>  
            <th>{{$lv->initialVolume}}</th>  
            <th>{{$lv->initialvolumeUnits}}</th>  
            <th>{{$lv->collection}}</th>  
            <th>{{$lv->clinicalProtocol}}</th>  
            <th>{{$lv->storageStatus}}</th>  
            <th>{{$lv->studysite}}</th>  
            </tr>
        @endforeach
    @else
        <p>No samples found</p>
    @endif
    </table>
@endsection