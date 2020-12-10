@extends('layouts.app')

@section('content')
    <h1>RedCap Completion Checklist Data</h1>
    <table class="table table-striped">
        <thead class="bg-primary text-white">
            <tr>
                <th scope="col">Household ID</th>
                <th scope="col">Clinical Event</th>
                <th scope="col">Pregnancy Arm</th>
                <th scope="col">Sample</th>
            </tr>
        </thead>
            <tbody>
            @if(count($outputs) > 0)
                @foreach($outputs as $o)
                    <tr>
                        <th>{{$o['hhid']}}</th> 
                    </tr>
                @endforeach
        
            @else
                <p>No samples found</p>
            @endif
    </table>
@endsection