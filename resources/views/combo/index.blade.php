@extends('layouts.app')

@section('content')
    <h1>Samples to be Loaded</h1>
    <div class="card">
        <h3>Missing Participant</h3>
        <table class="table table-striped">
            <thead class="bg-primary text-white">
                <tr>
                    <th scope="col">RedCap Household ID</th>
                    <th scope="col">RedCap Pregnancy Arm</th>
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
                    </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
        </div>
    <div class="card">
        <h3>2T Spot Blood</h3>
        <table class="table table-striped">
            <thead class="bg-primary text-white">
                <tr>
                    <th scope="col">RedCap Household ID</th>
                    <th scope="col">RedCap Pregnancy Arm</th>
                    <th scope="col">RedCap Collection Date</th>
                </tr>
            </thead>
            <tbody>
                @if($twotsb->count() > 0)
                    @foreach($twotsb as $twotsbItem)
                    <tr>
                        <td>
                            {{ $twotsbItem['hhid']}}
                        </td>
                        <td>
                            {{ $twotsbItem['redcap_event_name']}}
                        </td>
                        <td>
                            {{ $twotsbItem['twotsbdate']}}
                        </td>                    
                    </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
        </div>
    <div class="card">
    <h3>2T Urine Date</h3>
    <table class="table table-striped">
        <thead class="bg-primary text-white">
            <tr>
                <th scope="col">RedCap Household ID</th>
                <th scope="col">RedCap Pregnancy Arm</th>
                <th scope="col">RedCap Collection Date</th>
            </tr>
        </thead>
        <tbody>
            @if($twotudate->count() > 0)
                @foreach($twotudate as $twotudateItem)
                <tr>
                    <td>
                        {{ $twotudateItem['hhid']}}
                    </td>
                    <td>
                        {{ $twotudateItem['redcap_event_name']}}
                    </td>
                    <td>
                        {{ $twotudateItem['twotsbdate']}}
                    </td>                    
                </tr>
                @endforeach
            @endif
            </tbody>
        </table>
    </div>
@endsection