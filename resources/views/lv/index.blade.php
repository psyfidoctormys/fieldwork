@extends('layouts.app')

@section('content')
    <h1>LabVantage</h1>
    @if(count($lv) > 1)
        @foreach($lv as $lv)
            <div class="card">
            <h3>{{$lv->externalSubject}}</h3>
            </div>
        @endforeach
    @else
        <p>No posts found</p>
    @endif
@endsection