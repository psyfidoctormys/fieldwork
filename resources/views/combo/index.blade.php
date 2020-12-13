@extends('layouts.app')

@section('content')
    <h1>RedCap Completion Checklist Data</h1>
    <div class="container">
    <table class="table table-striped">
        <thead class="bg-primary text-white">
            <tr>
                <th scope="col">RedCap Household ID</th>
                <th scope="col">RedCap Pregnancy Arm</th>
                <th scope="col">RedCap Visit/SampleType</th>
                <th scope="col">RedCap Collection Date</th>
            </tr>
        </thead>
        <tbody>
            @if(count($outputs) > 0 && count($lvs) > 0)
                @foreach($outputs as $o )
                @if ($lvs->hhid != $o['hhid']) {
                    <p>Not breaking</p>
                }
                @else
                    <p>Poop</p>
                @endif
                @endforeach
        
            @else
                <p>No samples found</p>
            @endif
            </tbody>
        </table>
    </div>
@endsection