@extends('layouts.app')

@section('content')
    <h1>RedCap Completion Checklist Data</h1>
    <table class="table table-striped">
        <thead class="bg-primary text-white">
            <tr>
                <th scope="col">RedCap Household ID</th>
                <th scope="col">RedCap Pregnancy Arm</th>
                <th scope="col">RedCap Visit/SampleType</th>
                <th scope="col">RedCap Collection Date</th>
                <th scope="col">LV Household ID</th>
                <th scope="col">LV Pregnancy Arm</th>
                <th scope="col">LV Visit/SampleType</th>
                <th scope="col">LV Collection Date</th>
            </tr>
        </thead>
            <tbody>
            @if(count($lvs) > 0)
            @foreach($lvs as $lv)
                <tr>
                <th>{{$lv->hhid}}</th>
                <th>{{$lv->visit_sampleType}}</th>
                </tr>
            @endforeach
    
        @else
            <p>No samples found</p>
        @endif
    </table>
@endsection