@extends('layouts.app')

@section('content')
    <h1>2T Spot Blood Samples to be Loaded</h1>
    <div class="container">
    <table class="table table-striped">
        <thead class="bg-primary text-white">
            <tr>
                <th scope="col">Household ID</th>
                <th scope="col">Pregnancy Arm</th>
                <th scope="col">Collection Date</th>
            </tr>
        </thead>
        <tbody>
            @if($redCapDataMissingLvData->count() > 0)
                @foreach($redCapDataMissingLvData as $redCapDataMissingLvDataItem)
                <tr>
                    <td>
                        {{ $redCapDataMissingLvDataItem['hhid']}}
                    </td>
                    <td>
                        {{ $redCapDataMissingLvDataItem['redcap_event_name']}}
                    </td>
                    <td>
                        {{ $redCapDataMissingLvDataItem['twotsbdate']}}
                    </td>                    
                </tr>
                @endforeach
            @endif
            </tbody>
        </table>
    </div>
@endsection