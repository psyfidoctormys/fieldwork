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
                    <th scope="col">Maternal Consent Date</th>
                    <th scope="col">Withdrawn Date</th>
                    <th scope="col">2T Spot Blood Date</th>
                    <th scope="col">2T Urine Date</th>
                    <th scope="col">2T Urine Time</th>
                    <th scope="col">Maternal hair Prenatal Date</th>
                    <th scope="col">Prenatal Maternal Blood Date</th>
                    <th scope="col">Perinatal Dust Date</th>
                    <th scope="col">Prenatal Saliva Date</th>
                    <th scope="col">3T Urine Date</th>
                    <th scope="col">3T Urine Time</th>
                    <th scope="col">3T Spot Blood Date</th>
                    <th scope="col">3T Green Top Venous Blood Date</th>
                    <th scope="col">Child DOB</th>
                    <th scope="col">Birth Tissue Date</th>
                    <th scope="col">Placenta Delivery Time</th>
                    <th scope="col">Placenta Delivery Date</th>
                    <th scope="col">Umbilical Cord Date</th>
                    <th scope="col">Green Top Birth Date</th>
                    <th scope="col">Umbilical Cord Blood Date</th>
                    <th scope="col">Child Consent Date</th>
                    <th scope="col">Postnatal Maternal Hair Date</th>
                    <th scope="col">Breastmilk Date</th>
                    <th scope="col">30day Infant Hair Date</th>
                    <th scope="col">30day Infant Spot Blood Date</th>
                    <th scope="col">30day Buccal Swab Date</th>
                    <th scope="col">30day Nasal Swab Date</th>
                    <th scope="col">6monthHome Saliva Date</th>
                    <th scope="col">6monthLab Saliva Date</th>
                    <th scope="col">6month Hair Date</th>
                    <th scope="col">6month Buccal Swab Date</th>
                    <th scope="col">6month Nasal Swab Date</th>
                    <th scope="col">12month Spot Blood Date</th>
                    <th scope="col">12month Venous Blood Date/th>
                    <th scope="col">18month Spot Blood Date</th>
                    <th scope="col">2year Spot Blood Date</th>
                    <th scope="col">2year Venous Blood Date</th>
                    <th scope="col">2year Hair Date</th>
                    <th scope="col">2year Urine Date</th>
                    <th scope="col">ECHO-2year Hair Date</th>
                    <th scope="col">ECHO-2year Urine Date</th>
                    <th scope="col">ECHO-2year Spot Blood Date</th>
                    <th scope="col">ECHO-2year Venous Blood Date</th>
                    <th scope="col">2-2.5year Spot Blood Date</th>
                    <th scope="col">2-2.5year Venous Blood Date</th>
                    <th scope="col">2.5year Spot Blood Date</th>
                    <th scope="col">2.5year Venous Blood Blood Date</th>
                    <th scope="col">2.5yearHome Saliva Date</th>
                    <th scope="col">2.5year Dust Date</th>
                    <th scope="col">2.5year Buccal Swab Date</th>
                    <th scope="col">2.5year Nasal Swab Date</th>
                    <th scope="col">3.5year Spot Blood Date</th>
                    <th scope="col">3.5year Urine Date</th>
                    <th scope="col">3.5year Hair Date</th>
                    <th scope="col">3.5year Venous Blood Date</th>
                    <th scope="col">3.5yearLab Saliva Date</th>
                    <th scope="col">3.5yearHome Saliva Date</th>
                    <th scope="col">3.5year Buccal Swab Date</th>
                    <th scope="col">3.5year Nasal Swab Date</th>
                    <th scope="col">5year Spot Blood Date</th>
                    <th scope="col">5year Urine Date</th>
                    <th scope="col">5year Hair Date</th>
                    <th scope="col">5year Venous Blood Date</th>
                    <th scope="col">5yearLab Saliva Date</th>
                    <th scope="col">5yearHome Saliva Date</th>
                    <th scope="col">ECHO-4-5year Spot Blood Date</th>
                    <th scope="col">ECHO-4-5year Urine Date</th>
                    <th scope="col">ECHO-4-5year Hair Date</th>
                    <th scope="col">ECHO-4-5year Venous Blood Date</th>
                    <th scope="col">ECHO-7-8year Hair Date</th>
                    <th scope="col">ECHO-7-8year Spot Blood Date</th>
                    <th scope="col">ECHO-7-8year Venous Blood Date</th>
                    <th scope="col">ECHO-7-8year Urine Date</th>
                    <th scope="col">ECHO-Tooth#1 Date</th>
                    <th scope="col">ECHO-Tooth#2 Date</th>
                    <th scope="col">ECHO-Tooth#3 Date</th>
                    <th scope="col">ECHO-Tooth#4 Date</th>
                    <th scope="col">ECHO-Tooth#5 Date</th>
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
                        <td>{{$redCapDataMissingLvDataItem['maternal_consent_date']}}</td>
                        <td>{{$redCapDataMissingLvDataItem['withdrawndate']}}</td>
                        <td>{{$redCapDataMissingLvDataItem['twotsbdate']}}</td>
                        <td>{{$redCapDataMissingLvDataItem['twotudate']}}</td>
                        <td>{{$redCapDataMissingLvDataItem['twotutime']}}</td>
                        <td>{{$redCapDataMissingLvDataItem['maternalhairprenataldate']}}</td>
                        <td>{{$redCapDataMissingLvDataItem['blmaternalblooddate']}}</td>
                        <td>{{$redCapDataMissingLvDataItem['dustdate']}}</td>
                        <td>{{$redCapDataMissingLvDataItem['cortdate']}}</td>
                        <td>{{$redCapDataMissingLvDataItem['threetudate']}}</td>
                        <td>{{$redCapDataMissingLvDataItem['threetutime']}}</td>
                        <td>{{$redCapDataMissingLvDataItem['threetsbdate']}}</td>
                        <td>{{$redCapDataMissingLvDataItem['threetgreentoptube_date']}}</td>
                        <td>{{$redCapDataMissingLvDataItem['childbday']}}</td>
                        <td>{{$redCapDataMissingLvDataItem['birthtissuedate']}}</td>
                        <td>{{$redCapDataMissingLvDataItem['placentattime']}}</td>
                        <td>{{$redCapDataMissingLvDataItem['placentatdate']}}</td>
                        <td>{{$redCapDataMissingLvDataItem['corddate']}}</td>
                        <td>{{$redCapDataMissingLvDataItem['greentop_tube_cord']}}</td>
                        <td>{{$redCapDataMissingLvDataItem['cordbdate']}}</td>
                        <td>{{$redCapDataMissingLvDataItem['childconsentdate']}}</td>
                        <td>{{$redCapDataMissingLvDataItem['mhairdate']}}</td>
                        <td>{{$redCapDataMissingLvDataItem['brstmlkdate']}}</td>
                        <td>{{$redCapDataMissingLvDataItem['ihairdate']}}</td>
                        <td>{{$redCapDataMissingLvDataItem['isbdate']}}</td>
                        <td>{{$redCapDataMissingLvDataItem['buccal_swab_date_1mnth']}}</td>
                        <td>{{$redCapDataMissingLvDataItem['nasal_swab_date_1mnth']}}</td>
                        <td>{{$redCapDataMissingLvDataItem['isalivahomedate']}}</td>
                        <td>{{$redCapDataMissingLvDataItem['isalivalabdate']}}</td>
                        <td>{{$redCapDataMissingLvDataItem['ihair6date']}}</td>
                        <td>{{$redCapDataMissingLvDataItem['buccal_swab_date_6mnth']}}</td>
                        <td>{{$redCapDataMissingLvDataItem['nasal_swab_date_6mnth']}}</td>
                        <td>{{$redCapDataMissingLvDataItem['sbdate12mo']}}</td>
                        <td>{{$redCapDataMissingLvDataItem['ivblood12modate']}}</td>
                        <td>{{$redCapDataMissingLvDataItem['sb18modate']}}</td>
                        <td>{{$redCapDataMissingLvDataItem['sb24modate']}}</td>
                        <td>{{$redCapDataMissingLvDataItem['b24modate']}}</td>
                        <td>{{$redCapDataMissingLvDataItem['hair24modate']}}</td>
                        <td>{{$redCapDataMissingLvDataItem['urine24date']}}</td>
                        <td>{{$redCapDataMissingLvDataItem['echo2yrhairdate']}}</td>
                        <td>{{$redCapDataMissingLvDataItem['echo2yrurinedate']}}</td>
                        <td>{{$redCapDataMissingLvDataItem['echo2yrsbdate']}}</td>
                        <td>{{$redCapDataMissingLvDataItem['echo2yrvenousblooddate']}}</td>
                        <td>{{$redCapDataMissingLvDataItem['sb2430date']}}</td>
                        <td>{{$redCapDataMissingLvDataItem['vb2430date']}}</td>
                        <td>{{$redCapDataMissingLvDataItem['thirtymonthsbdate']}}</td>
                        <td>{{$redCapDataMissingLvDataItem['venousblood30modate']}}</td>
                        <td>{{$redCapDataMissingLvDataItem['saliva30mohomedate']}}</td>
                        <td>{{$redCapDataMissingLvDataItem['thirtymonthdustdate']}}</td>
                        <td>{{$redCapDataMissingLvDataItem['buccal_swab_date_30mnth']}}</td>
                        <td>{{$redCapDataMissingLvDataItem['nasal_swab_date_30_mnth']}}</td>
                        <td>{{$redCapDataMissingLvDataItem['spotblood42modate']}}</td>
                        <td>{{$redCapDataMissingLvDataItem['urine42modate']}}</td>
                        <td>{{$redCapDataMissingLvDataItem['hair42modate']}}</td>
                        <td>{{$redCapDataMissingLvDataItem['venousblood42modate']}}</td>
                        <td>{{$redCapDataMissingLvDataItem['saliva42modate']}}</td>
                        <td>{{$redCapDataMissingLvDataItem['saliva42mohomedate']}}</td>
                        <td>{{$redCapDataMissingLvDataItem['buccalswab_date']}}</td>
                        <td>{{$redCapDataMissingLvDataItem['nasalswab_date']}}</td>
                        <td>{{$redCapDataMissingLvDataItem['spotblood60modate']}}</td>
                        <td>{{$redCapDataMissingLvDataItem['urine60modate']}}</td>
                        <td>{{$redCapDataMissingLvDataItem['hair60modate']}}</td>
                        <td>{{$redCapDataMissingLvDataItem['venousblood60modate']}}</td>
                        <td>{{$redCapDataMissingLvDataItem['labsaliva60modate']}}</td>
                        <td>{{$redCapDataMissingLvDataItem['homesaliva60modate']}}</td>
                        <td>{{$redCapDataMissingLvDataItem['echo4to5yrspotblooddate']}}</td>
                        <td>{{$redCapDataMissingLvDataItem['echo4to5yrurinedate']}}</td>
                        <td>{{$redCapDataMissingLvDataItem['echo4to5yrhairdate']}}</td>
                        <td>{{$redCapDataMissingLvDataItem['echo4to5yrvenousblooddate']}}</td>
                        <td>{{$redCapDataMissingLvDataItem['echo7to8yrhairdate']}}</td>
                        <td>{{$redCapDataMissingLvDataItem['echo7yrto8yrsbdate']}}</td>
                        <td>{{$redCapDataMissingLvDataItem['echo7yrto8yrvbdate']}}</td>
                        <td>{{$redCapDataMissingLvDataItem['echo7yrto8yrurinedate']}}</td>
                        <td>{{$redCapDataMissingLvDataItem['echotooth1date']}}</td>
                        <td>{{$redCapDataMissingLvDataItem['echotooth2date']}}</td>
                        <td>{{$redCapDataMissingLvDataItem['echotooth3date']}}</td>
                        <td>{{$redCapDataMissingLvDataItem['echotooth4date']}}</td>
                        <td>{{$redCapDataMissingLvDataItem['echotooth5date']}}</td>            
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
    <h3 id="2">2T Urine Date</h3>
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
                        {{ $twotudateItem['twotudate']}}
                    </td>                    
                </tr>
                @endforeach
            @endif
            </tbody>
        </table>
    </div>
    <div class="card">
        <h3>Maternal Hair Prenatal Date</h3>
        <table class="table table-striped">
            <thead class="bg-primary text-white">
                <tr>
                    <th scope="col">RedCap Household ID</th>
                    <th scope="col">RedCap Pregnancy Arm</th>
                    <th scope="col">RedCap Collection Date</th>
                </tr>
            </thead>
            <tbody>
                @if($maternalhairprenataldate->count() > 0)
                    @foreach($maternalhairprenataldate as $maternalhairprenataldateItem)
                    <tr>
                        <td>
                            {{ $maternalhairprenataldateItem['hhid']}}
                        </td>
                        <td>
                            {{ $maternalhairprenataldateItem['redcap_event_name']}}
                        </td>
                        <td>
                            {{ $maternalhairprenataldateItem['maternalhairprenataldate']}}
                        </td>                    
                    </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
        </div>
    <div class="card">
        <h3>Prenatal Maternal Blood Date</h3>
        <table class="table table-striped">
            <thead class="bg-primary text-white">
                <tr>
                    <th scope="col">RedCap Household ID</th>
                    <th scope="col">RedCap Pregnancy Arm</th>
                    <th scope="col">RedCap Collection Date</th>
                </tr>
            </thead>
            <tbody>
                @if($blmaternalblooddate->count() > 0)
                    @foreach($blmaternalblooddate as $blmaternalblooddateItem)
                    <tr>
                        <td>
                            {{ $blmaternalblooddateItem['hhid']}}
                        </td>
                        <td>
                            {{ $blmaternalblooddateItem['redcap_event_name']}}
                        </td>
                        <td>
                            {{ $blmaternalblooddateItem['blmaternalblooddate']}}
                        </td>                    
                    </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
        </div>
    <div class="card">
        <h3>Perinatal Dust Date</h3>
        <table class="table table-striped">
            <thead class="bg-primary text-white">
                <tr>
                    <th scope="col">RedCap Household ID</th>
                    <th scope="col">RedCap Pregnancy Arm</th>
                    <th scope="col">RedCap Collection Date</th>
                </tr>
            </thead>
            <tbody>
                @if($dustdate->count() > 0)
                    @foreach($dustdate as $dustdateItem)
                    <tr>
                        <td>
                            {{ $dustdateItem['hhid']}}
                        </td>
                        <td>
                            {{ $dustdateItem['redcap_event_name']}}
                        </td>
                        <td>
                            {{ $dustdateItem['dustdate']}}
                        </td>                    
                    </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
        </div>
    <div class="card">
        <h3>Prenatal Saliva Date</h3>
        <table class="table table-striped">
            <thead class="bg-primary text-white">
                <tr>
                    <th scope="col">RedCap Household ID</th>
                    <th scope="col">RedCap Pregnancy Arm</th>
                    <th scope="col">RedCap Collection Date</th>
                </tr>
            </thead>
            <tbody>
                @if($cortdate->count() > 0)
                    @foreach($cortdate as $cortdateItem)
                    <tr>
                        <td>
                            {{ $cortdateItem['hhid']}}
                        </td>
                        <td>
                            {{ $cortdateItem['redcap_event_name']}}
                        </td>
                        <td>
                            {{ $cortdateItem['cortdate']}}
                        </td>                    
                    </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
        </div>
    <div class="card">
        <h3>3T Urine Date</h3>
        <table class="table table-striped">
            <thead class="bg-primary text-white">
                <tr>
                    <th scope="col">RedCap Household ID</th>
                    <th scope="col">RedCap Pregnancy Arm</th>
                    <th scope="col">RedCap Collection Date</th>
                </tr>
            </thead>
            <tbody>
                @if($threetudate->count() > 0)
                    @foreach($threetudate as $threetudateItem)
                    <tr>
                        <td>
                            {{ $threetudateItem['hhid']}}
                        </td>
                        <td>
                            {{ $threetudateItem['redcap_event_name']}}
                        </td>
                        <td>
                            {{ $threetudateItem['threetudate']}}
                        </td>                    
                    </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
        </div>
    <div class="card">
        <h3>3T Spot Blood Date</h3>
        <table class="table table-striped">
            <thead class="bg-primary text-white">
                <tr>
                    <th scope="col">RedCap Household ID</th>
                    <th scope="col">RedCap Pregnancy Arm</th>
                    <th scope="col">RedCap Collection Date</th>
                </tr>
            </thead>
            <tbody>
                @if($threetsbdate->count() > 0)
                    @foreach($threetsbdate as $threetsbdateItem)
                    <tr>
                        <td>
                            {{ $threetsbdateItem['hhid']}}
                        </td>
                        <td>
                            {{ $threetsbdateItem['redcap_event_name']}}
                        </td>
                        <td>
                            {{ $threetsbdateItem['threetsbdate']}}
                        </td>                    
                    </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
        </div>
    <div class="card">
        <h3>3T Green Top Venous Blood Date</h3>
        <table class="table table-striped">
            <thead class="bg-primary text-white">
                <tr>
                    <th scope="col">RedCap Household ID</th>
                    <th scope="col">RedCap Pregnancy Arm</th>
                    <th scope="col">RedCap Collection Date</th>
                </tr>
            </thead>
            <tbody>
                @if($threetgreentoptube_date->count() > 0)
                    @foreach($threetgreentoptube_date as $threetgreentoptube_dateItem)
                    <tr>
                        <td>
                            {{ $threetgreentoptube_dateItem['hhid']}}
                        </td>
                        <td>
                            {{ $threetgreentoptube_dateItem['redcap_event_name']}}
                        </td>
                        <td>
                            {{ $threetgreentoptube_dateItem['threetgreentoptube_date']}}
                        </td>                    
                    </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
        </div>
    <div class="card">
        <h3>Birth Tissue Date</h3>
        <table class="table table-striped">
            <thead class="bg-primary text-white">
                <tr>
                    <th scope="col">RedCap Household ID</th>
                    <th scope="col">RedCap Pregnancy Arm</th>
                    <th scope="col">RedCap Collection Date</th>
                </tr>
            </thead>
            <tbody>
                @if($birthtissuedate->count() > 0)
                    @foreach($birthtissuedate as $birthtissuedateItem)
                    <tr>
                        <td>
                            {{ $birthtissuedateItem['hhid']}}
                        </td>
                        <td>
                            {{ $birthtissuedateItem['redcap_event_name']}}
                        </td>
                        <td>
                            {{ $birthtissuedateItem['birthtissuedate']}}
                        </td>                    
                    </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
        </div>
    <div class="card">
        <h3>Placenta Delivery Date</h3>
        <table class="table table-striped">
            <thead class="bg-primary text-white">
                <tr>
                    <th scope="col">RedCap Household ID</th>
                    <th scope="col">RedCap Pregnancy Arm</th>
                    <th scope="col">RedCap Collection Date</th>
                </tr>
            </thead>
            <tbody>
                @if($placentatdate->count() > 0)
                    @foreach($placentatdate as $placentatdateItem)
                    <tr>
                        <td>
                            {{ $placentatdateItem['hhid']}}
                        </td>
                        <td>
                            {{ $placentatdateItem['redcap_event_name']}}
                        </td>
                        <td>
                            {{ $placentatdateItem['placentatdate']}}
                        </td>                    
                    </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
        </div>
    <div class="card">
        <h3>Umbilical Cord Date</h3>
        <table class="table table-striped">
            <thead class="bg-primary text-white">
                <tr>
                    <th scope="col">RedCap Household ID</th>
                    <th scope="col">RedCap Pregnancy Arm</th>
                    <th scope="col">RedCap Collection Date</th>
                </tr>
            </thead>
            <tbody>
                @if($corddate->count() > 0)
                    @foreach($corddate as $corddateItem)
                    <tr>
                        <td>
                            {{ $corddateItem['hhid']}}
                        </td>
                        <td>
                            {{ $corddateItem['redcap_event_name']}}
                        </td>
                        <td>
                            {{ $corddateItem['corddate']}}
                        </td>                    
                    </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
        </div>
    <div class="card">
        <h3>Umbilical Cord Blood Date</h3>
        <table class="table table-striped">
            <thead class="bg-primary text-white">
                <tr>
                    <th scope="col">RedCap Household ID</th>
                    <th scope="col">RedCap Pregnancy Arm</th>
                    <th scope="col">RedCap Collection Date</th>
                </tr>
            </thead>
            <tbody>
                @if($cordbdate->count() > 0)
                    @foreach($cordbdate as $cordbdateItem)
                    <tr>
                        <td>
                            {{ $cordbdateItem['hhid']}}
                        </td>
                        <td>
                            {{ $cordbdateItem['redcap_event_name']}}
                        </td>
                        <td>
                            {{ $cordbdateItem['cordbdate']}}
                        </td>                    
                    </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
        </div>
    <div class="card">
        <h3>Green Top Birth Date</h3>
        <table class="table table-striped">
            <thead class="bg-primary text-white">
                <tr>
                    <th scope="col">RedCap Household ID</th>
                    <th scope="col">RedCap Pregnancy Arm</th>
                    <th scope="col">RedCap Collection Date</th>
                </tr>
            </thead>
            <tbody>
                @if($birth_green_tube_date->count() > 0)
                    @foreach($birth_green_tube_date as $birth_green_tube_dateItem)
                    <tr>
                        <td>
                            {{ $birth_green_tube_dateItem['hhid']}}
                        </td>
                        <td>
                            {{ $birth_green_tube_dateItem['redcap_event_name']}}
                        </td>
                        <td>
                            {{ $birth_green_tube_dateItem['birth_green_tube_date']}}
                        </td>                    
                    </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
        </div>
    <div class="card">
        <h3>Postnatal Maternal Hair Date</h3>
        <table class="table table-striped">
            <thead class="bg-primary text-white">
                <tr>
                    <th scope="col">RedCap Household ID</th>
                    <th scope="col">RedCap Pregnancy Arm</th>
                    <th scope="col">RedCap Collection Date</th>
                </tr>
            </thead>
            <tbody>
                @if($mhairdate->count() > 0)
                    @foreach($mhairdate as $mhairdateItem)
                    <tr>
                        <td>
                            {{ $mhairdateItem['hhid']}}
                        </td>
                        <td>
                            {{ $mhairdateItem['redcap_event_name']}}
                        </td>
                        <td>
                            {{ $mhairdateItem['mhairdate']}}
                        </td>                    
                    </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
        </div>
    <div class="card">
        <h3>Breastmilk Date</h3>
        <table class="table table-striped">
            <thead class="bg-primary text-white">
                <tr>
                    <th scope="col">RedCap Household ID</th>
                    <th scope="col">RedCap Pregnancy Arm</th>
                    <th scope="col">RedCap Collection Date</th>
                </tr>
            </thead>
            <tbody>
                @if($brstmlkdate->count() > 0)
                    @foreach($brstmlkdate as $brstmlkdateItem)
                    <tr>
                        <td>
                            {{ $brstmlkdateItem['hhid']}}
                        </td>
                        <td>
                            {{ $brstmlkdateItem['redcap_event_name']}}
                        </td>
                        <td>
                            {{ $brstmlkdateItem['brstmlkdate']}}
                        </td>                    
                    </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
        </div>
    <div class="card">
        <h3>30day Infant Hair Date</h3>
        <table class="table table-striped">
            <thead class="bg-primary text-white">
                <tr>
                    <th scope="col">RedCap Household ID</th>
                    <th scope="col">RedCap Pregnancy Arm</th>
                    <th scope="col">RedCap Collection Date</th>
                </tr>
            </thead>
            <tbody>
                @if($ihairdate->count() > 0)
                    @foreach($ihairdate as $ihairdateItem)
                    <tr>
                        <td>
                            {{ $ihairdateItem['hhid']}}
                        </td>
                        <td>
                            {{ $ihairdateItem['redcap_event_name']}}
                        </td>
                        <td>
                            {{ $ihairdateItem['ihairdate']}}
                        </td>                    
                    </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
        </div>
    <div class="card">
        <h3>30day Infant Spot Blood Date</h3>
        <table class="table table-striped">
            <thead class="bg-primary text-white">
                <tr>
                    <th scope="col">RedCap Household ID</th>
                    <th scope="col">RedCap Pregnancy Arm</th>
                    <th scope="col">RedCap Collection Date</th>
                </tr>
            </thead>
            <tbody>
                @if($isbdate->count() > 0)
                    @foreach($isbdate as $isbdateItem)
                    <tr>
                        <td>
                            {{ $isbdateItem['hhid']}}
                        </td>
                        <td>
                            {{ $isbdateItem['redcap_event_name']}}
                        </td>
                        <td>
                            {{ $isbdateItem['isbdate']}}
                        </td>                    
                    </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
        </div>
    <div class="card">
        <h3>30day Buccal Swab Date</h3>
        <table class="table table-striped">
            <thead class="bg-primary text-white">
                <tr>
                    <th scope="col">RedCap Household ID</th>
                    <th scope="col">RedCap Pregnancy Arm</th>
                    <th scope="col">RedCap Collection Date</th>
                </tr>
            </thead>
            <tbody>
                @if($buccal_swab_date_1mnth->count() > 0)
                    @foreach($buccal_swab_date_1mnth as $buccal_swab_date_1mnthItem)
                    <tr>
                        <td>
                            {{ $buccal_swab_date_1mnthItem['hhid']}}
                        </td>
                        <td>
                            {{ $buccal_swab_date_1mnthItem['redcap_event_name']}}
                        </td>
                        <td>
                            {{ $buccal_swab_date_1mnthItem['buccal_swab_date_1mnth']}}
                        </td>                    
                    </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
        </div>
    <div class="card">
        <h3>30day Nasal Swab Date</h3>
        <table class="table table-striped">
            <thead class="bg-primary text-white">
                <tr>
                    <th scope="col">RedCap Household ID</th>
                    <th scope="col">RedCap Pregnancy Arm</th>
                    <th scope="col">RedCap Collection Date</th>
                </tr>
            </thead>
            <tbody>
                @if($nasal_swab_date_1mnth->count() > 0)
                    @foreach($nasal_swab_date_1mnth as $nasal_swab_date_1mnthItem)
                    <tr>
                        <td>
                            {{ $nasal_swab_date_1mnthItem['hhid']}}
                        </td>
                        <td>
                            {{ $nasal_swab_date_1mnthItem['redcap_event_name']}}
                        </td>
                        <td>
                            {{ $nasal_swab_date_1mnthItem['nasal_swab_date_1mnth']}}
                        </td>                    
                    </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
        </div>
    <div class="card">
        <h3>6monthHome Saliva Date</h3>
        <table class="table table-striped">
            <thead class="bg-primary text-white">
                <tr>
                    <th scope="col">RedCap Household ID</th>
                    <th scope="col">RedCap Pregnancy Arm</th>
                    <th scope="col">RedCap Collection Date</th>
                </tr>
            </thead>
            <tbody>
                @if($isalivahomedate->count() > 0)
                    @foreach($isalivahomedate as $isalivahomedateItem)
                    <tr>
                        <td>
                            {{ $isalivahomedateItem['hhid']}}
                        </td>
                        <td>
                            {{ $isalivahomedateItem['redcap_event_name']}}
                        </td>
                        <td>
                            {{ $isalivahomedateItem['isalivahomedate']}}
                        </td>                    
                    </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
        </div>
    <div class="card">
        <h3>6monthLab Saliva Date</h3>
        <table class="table table-striped">
            <thead class="bg-primary text-white">
                <tr>
                    <th scope="col">RedCap Household ID</th>
                    <th scope="col">RedCap Pregnancy Arm</th>
                    <th scope="col">RedCap Collection Date</th>
                </tr>
            </thead>
            <tbody>
                @if($isalivalabdate->count() > 0)
                    @foreach($isalivalabdate as $isalivalabdateItem)
                    <tr>
                        <td>
                            {{ $isalivalabdateItem['hhid']}}
                        </td>
                        <td>
                            {{ $isalivalabdateItem['redcap_event_name']}}
                        </td>
                        <td>
                            {{ $isalivalabdateItem['isalivalabdate']}}
                        </td>                    
                    </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
        </div>
        <div class="card">
            <h3>6month Hair Date</h3>
            <table class="table table-striped">
                <thead class="bg-primary text-white">
                    <tr>
                        <th scope="col">RedCap Household ID</th>
                        <th scope="col">RedCap Pregnancy Arm</th>
                        <th scope="col">RedCap Collection Date</th>
                    </tr>
                </thead>
                <tbody>
                    @if($ihair6date->count() > 0)
                        @foreach($ihair6date as $ihair6dateItem)
                        <tr>
                            <td>
                                {{ $ihair6dateItem['hhid']}}
                            </td>
                            <td>
                                {{ $ihair6dateItem['redcap_event_name']}}
                            </td>
                            <td>
                                {{ $ihair6dateItem['ihair6date']}}
                            </td>                    
                        </tr>
                        @endforeach
                    @endif
                    </tbody>
                </table>
            </div>
    <div class="card">
        <h3>6month Buccal Swab Date</h3>
        <table class="table table-striped">
            <thead class="bg-primary text-white">
                <tr>
                    <th scope="col">RedCap Household ID</th>
                    <th scope="col">RedCap Pregnancy Arm</th>
                    <th scope="col">RedCap Collection Date</th>
                </tr>
            </thead>
            <tbody>
                @if($buccal_swab_date_6mnth->count() > 0)
                    @foreach($buccal_swab_date_6mnth as $buccal_swab_date_6mnthItem)
                    <tr>
                        <td>
                            {{ $buccal_swab_date_6mnthItem['hhid']}}
                        </td>
                        <td>
                            {{ $buccal_swab_date_6mnthItem['redcap_event_name']}}
                        </td>
                        <td>
                            {{ $buccal_swab_date_6mnthItem['buccal_swab_date_6mnth']}}
                        </td>                    
                    </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
        </div>
    <div class="card">
        <h3>6month Nasal Swab Date</h3>
        <table class="table table-striped">
            <thead class="bg-primary text-white">
                <tr>
                    <th scope="col">RedCap Household ID</th>
                    <th scope="col">RedCap Pregnancy Arm</th>
                    <th scope="col">RedCap Collection Date</th>
                </tr>
            </thead>
            <tbody>
                @if($nasal_swab_date_6mnth->count() > 0)
                    @foreach($nasal_swab_date_6mnth as $nasal_swab_date_6mnthItem)
                    <tr>
                        <td>
                            {{ $nasal_swab_date_6mnthItem['hhid']}}
                        </td>
                        <td>
                            {{ $nasal_swab_date_6mnthItem['redcap_event_name']}}
                        </td>
                        <td>
                            {{ $nasal_swab_date_6mnthItem['nasal_swab_date_6mnth']}}
                        </td>                    
                    </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
        </div>
    <div class="card">
        <h3>12month Spot Blood Date</h3>
        <table class="table table-striped">
            <thead class="bg-primary text-white">
                <tr>
                    <th scope="col">RedCap Household ID</th>
                    <th scope="col">RedCap Pregnancy Arm</th>
                    <th scope="col">RedCap Collection Date</th>
                </tr>
            </thead>
            <tbody>
                @if($sbdate12mo->count() > 0)
                    @foreach($sbdate12mo as $sbdate12moItem)
                    <tr>
                        <td>
                            {{ $sbdate12moItem['hhid']}}
                        </td>
                        <td>
                            {{ $sbdate12moItem['redcap_event_name']}}
                        </td>
                        <td>
                            {{ $sbdate12moItem['sbdate12mo']}}
                        </td>                    
                    </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
        </div>
    <div class="card">
        <h3>12month Venous Blood Date</h3>
        <table class="table table-striped">
            <thead class="bg-primary text-white">
                <tr>
                    <th scope="col">RedCap Household ID</th>
                    <th scope="col">RedCap Pregnancy Arm</th>
                    <th scope="col">RedCap Collection Date</th>
                </tr>
            </thead>
            <tbody>
                @if($ivblood12modate->count() > 0)
                    @foreach($ivblood12modate as $ivblood12modateItem)
                    <tr>
                        <td>
                            {{ $ivblood12modateItem['hhid']}}
                        </td>
                        <td>
                            {{ $ivblood12modateItem['redcap_event_name']}}
                        </td>
                        <td>
                            {{ $ivblood12modateItem['ivblood12modate']}}
                        </td>                    
                    </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
        </div>
    <div class="card">
        <h3>18month Venous Blood Date</h3>
        <table class="table table-striped">
            <thead class="bg-primary text-white">
                <tr>
                    <th scope="col">RedCap Household ID</th>
                    <th scope="col">RedCap Pregnancy Arm</th>
                    <th scope="col">RedCap Collection Date</th>
                </tr>
            </thead>
            <tbody>
                @if($sb18modate->count() > 0)
                    @foreach($sb18modate as $sb18modateItem)
                    <tr>
                        <td>
                            {{ $sb18modateItem['hhid']}}
                        </td>
                        <td>
                            {{ $sb18modateItem['redcap_event_name']}}
                        </td>
                        <td>
                            {{ $sb18modateItem['sb18modate']}}
                        </td>                    
                    </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
        </div>
    <div class="card">
        <h3>2year Spot Blood Date</h3>
        <table class="table table-striped">
            <thead class="bg-primary text-white">
                <tr>
                    <th scope="col">RedCap Household ID</th>
                    <th scope="col">RedCap Pregnancy Arm</th>
                    <th scope="col">RedCap Collection Date</th>
                </tr>
            </thead>
            <tbody>
                @if($sb24modate->count() > 0)
                    @foreach($sb24modate as $sb24modateItem)
                    <tr>
                        <td>
                            {{ $sb24modateItem['hhid']}}
                        </td>
                        <td>
                            {{ $sb24modateItem['redcap_event_name']}}
                        </td>
                        <td>
                            {{ $sb24modateItem['sb24modate']}}
                        </td>                    
                    </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
        </div>
    <div class="card">
        <h3>2year Venous Blood Date</h3>
        <table class="table table-striped">
            <thead class="bg-primary text-white">
                <tr>
                    <th scope="col">RedCap Household ID</th>
                    <th scope="col">RedCap Pregnancy Arm</th>
                    <th scope="col">RedCap Collection Date</th>
                </tr>
            </thead>
            <tbody>
                @if($b24modate->count() > 0)
                    @foreach($b24modate as $b24modateItem)
                    <tr>
                        <td>
                            {{ $b24modateItem['hhid']}}
                        </td>
                        <td>
                            {{ $b24modateItem['redcap_event_name']}}
                        </td>
                        <td>
                            {{ $b24modateItem['b24modate']}}
                        </td>                    
                    </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
        </div>
    <div class="card">
        <h3>2year Hair Date</h3>
        <table class="table table-striped">
            <thead class="bg-primary text-white">
                <tr>
                    <th scope="col">RedCap Household ID</th>
                    <th scope="col">RedCap Pregnancy Arm</th>
                    <th scope="col">RedCap Collection Date</th>
                </tr>
            </thead>
            <tbody>
                @if($hair24modate->count() > 0)
                    @foreach($hair24modate as $hair24modateItem)
                    <tr>
                        <td>
                            {{ $hair24modateItem['hhid']}}
                        </td>
                        <td>
                            {{ $hair24modateItem['redcap_event_name']}}
                        </td>
                        <td>
                            {{ $hair24modateItem['hair24modate']}}
                        </td>                    
                    </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
        </div>
    <div class="card">
        <h3>2year Urine Date</h3>
        <table class="table table-striped">
            <thead class="bg-primary text-white">
                <tr>
                    <th scope="col">RedCap Household ID</th>
                    <th scope="col">RedCap Pregnancy Arm</th>
                    <th scope="col">RedCap Collection Date</th>
                </tr>
            </thead>
            <tbody>
                @if($urine24date->count() > 0)
                    @foreach($urine24date as $urine24dateItem)
                    <tr>
                        <td>
                            {{ $urine24dateItem['hhid']}}
                        </td>
                        <td>
                            {{ $urine24dateItem['redcap_event_name']}}
                        </td>
                        <td>
                            {{ $urine24dateItem['urine24date']}}
                        </td>                    
                    </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
        </div>
    <div class="card">
        <h3>ECHO-2year Hair Date</h3>
        <table class="table table-striped">
            <thead class="bg-primary text-white">
                <tr>
                    <th scope="col">RedCap Household ID</th>
                    <th scope="col">RedCap Pregnancy Arm</th>
                    <th scope="col">RedCap Collection Date</th>
                </tr>
            </thead>
            <tbody>
                @if($echo2yrhairdate->count() > 0)
                    @foreach($echo2yrhairdate as $echo2yrhairdateItem)
                    <tr>
                        <td>
                            {{ $echo2yrhairdateItem['hhid']}}
                        </td>
                        <td>
                            {{ $echo2yrhairdateItem['redcap_event_name']}}
                        </td>
                        <td>
                            {{ $echo2yrhairdateItem['echo2yrhairdate']}}
                        </td>                    
                    </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
    </div>
    <div class="card">
        <h3>ECHO-2year Urine Date</h3>
        <table class="table table-striped">
            <thead class="bg-primary text-white">
                <tr>
                    <th scope="col">RedCap Household ID</th>
                    <th scope="col">RedCap Pregnancy Arm</th>
                    <th scope="col">RedCap Collection Date</th>
                </tr>
            </thead>
            <tbody>
                @if($echo2yrurinedate->count() > 0)
                    @foreach($echo2yrurinedate as $echo2yrurinedateItem)
                    <tr>
                        <td>
                            {{ $echo2yrurinedateItem['hhid']}}
                        </td>
                        <td>
                            {{ $echo2yrurinedateItem['redcap_event_name']}}
                        </td>
                        <td>
                            {{ $echo2yrurinedateItem['echo2yrurinedate']}}
                        </td>                    
                    </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
        </div>
    </div>
    <div class="card">
        <h3>ECHO-2year Spot Blood Date</h3>
        <table class="table table-striped">
            <thead class="bg-primary text-white">
                <tr>
                    <th scope="col">RedCap Household ID</th>
                    <th scope="col">RedCap Pregnancy Arm</th>
                    <th scope="col">RedCap Collection Date</th>
                </tr>
            </thead>
            <tbody>
                @if($echo2yrsbdate->count() > 0)
                    @foreach($echo2yrsbdate as $echo2yrsbdateItem)
                    <tr>
                        <td>
                            {{ $echo2yrsbdateItem['hhid']}}
                        </td>
                        <td>
                            {{ $echo2yrsbdateItem['redcap_event_name']}}
                        </td>
                        <td>
                            {{ $echo2yrsbdateItem['echo2yrsbdate']}}
                        </td>                    
                    </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
        </div>
    <div class="card">
        <h3>ECHO-2year Venous Blood Date</h3>
        <table class="table table-striped">
            <thead class="bg-primary text-white">
                <tr>
                    <th scope="col">RedCap Household ID</th>
                    <th scope="col">RedCap Pregnancy Arm</th>
                    <th scope="col">RedCap Collection Date</th>
                </tr>
            </thead>
            <tbody>
                @if($echo2yrvenousblooddate->count() > 0)
                    @foreach($echo2yrvenousblooddate as $echo2yrvenousblooddateItem)
                    <tr>
                        <td>
                            {{ $echo2yrvenousblooddateItem['hhid']}}
                        </td>
                        <td>
                            {{ $echo2yrvenousblooddateItem['redcap_event_name']}}
                        </td>
                        <td>
                            {{ $echo2yrvenousblooddateItem['echo2yrvenousblooddate']}}
                        </td>                    
                    </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
        </div>
    <div class="card">
        <h3>2-2.5year Spot Blood Date</h3>
        <table class="table table-striped">
            <thead class="bg-primary text-white">
                <tr>
                    <th scope="col">RedCap Household ID</th>
                    <th scope="col">RedCap Pregnancy Arm</th>
                    <th scope="col">RedCap Collection Date</th>
                </tr>
            </thead>
            <tbody>
                @if($sb2430date->count() > 0)
                    @foreach($sb2430date as $sb2430dateItem)
                    <tr>
                        <td>
                            {{ $sb2430dateItem['hhid']}}
                        </td>
                        <td>
                            {{ $sb2430dateItem['redcap_event_name']}}
                        </td>
                        <td>
                            {{ $sb2430dateItem['sb2430date']}}
                        </td>                    
                    </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
        </div>
    <div class="card">
        <h3>2-2.5year Venous Blood Date</h3>
        <table class="table table-striped">
            <thead class="bg-primary text-white">
                <tr>
                    <th scope="col">RedCap Household ID</th>
                    <th scope="col">RedCap Pregnancy Arm</th>
                    <th scope="col">RedCap Collection Date</th>
                </tr>
            </thead>
            <tbody>
                @if($vb2430date->count() > 0)
                    @foreach($vb2430date as $vb2430dateItem)
                    <tr>
                        <td>
                            {{ $vb2430dateItem['hhid']}}
                        </td>
                        <td>
                            {{ $vb2430dateItem['redcap_event_name']}}
                        </td>
                        <td>
                            {{ $vb2430dateItem['vb2430date']}}
                        </td>                    
                    </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
        </div>
    <div class="card">
        <h3>2.5year Spot Blood Date</h3>
        <table class="table table-striped">
            <thead class="bg-primary text-white">
                <tr>
                    <th scope="col">RedCap Household ID</th>
                    <th scope="col">RedCap Pregnancy Arm</th>
                    <th scope="col">RedCap Collection Date</th>
                </tr>
            </thead>
            <tbody>
                @if($thirtymonthsbdate->count() > 0)
                    @foreach($thirtymonthsbdate as $thirtymonthsbdateItem)
                    <tr>
                        <td>
                            {{ $thirtymonthsbdateItem['hhid']}}
                        </td>
                        <td>
                            {{ $thirtymonthsbdateItem['redcap_event_name']}}
                        </td>
                        <td>
                            {{ $thirtymonthsbdateItem['thirtymonthsbdate']}}
                        </td>                    
                    </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
        </div>
    <div class="card">
        <h3>2.5year Venous Blood Blood Date</h3>
        <table class="table table-striped">
            <thead class="bg-primary text-white">
                <tr>
                    <th scope="col">RedCap Household ID</th>
                    <th scope="col">RedCap Pregnancy Arm</th>
                    <th scope="col">RedCap Collection Date</th>
                </tr>
            </thead>
            <tbody>
                @if($venousblood30modate->count() > 0)
                    @foreach($venousblood30modate as $venousblood30modateItem)
                    <tr>
                        <td>
                            {{ $venousblood30modateItem['hhid']}}
                        </td>
                        <td>
                            {{ $venousblood30modateItem['redcap_event_name']}}
                        </td>
                        <td>
                            {{ $venousblood30modateItem['venousblood30modate']}}
                        </td>                    
                    </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
        </div>
    <div class="card">
        <h3>2.5yearHome Saliva Date</h3>
        <table class="table table-striped">
            <thead class="bg-primary text-white">
                <tr>
                    <th scope="col">RedCap Household ID</th>
                    <th scope="col">RedCap Pregnancy Arm</th>
                    <th scope="col">RedCap Collection Date</th>
                </tr>
            </thead>
            <tbody>
                @if($saliva30mohomedate->count() > 0)
                    @foreach($saliva30mohomedate as $saliva30mohomedateItem)
                    <tr>
                        <td>
                            {{ $saliva30mohomedateItem['hhid']}}
                        </td>
                        <td>
                            {{ $saliva30mohomedateItem['redcap_event_name']}}
                        </td>
                        <td>
                            {{ $saliva30mohomedateItem['saliva30mohomedate']}}
                        </td>                    
                    </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
        </div>
    <div class="card">
        <h3>2.5year Dust Blood Date</h3>
        <table class="table table-striped">
            <thead class="bg-primary text-white">
                <tr>
                    <th scope="col">RedCap Household ID</th>
                    <th scope="col">RedCap Pregnancy Arm</th>
                    <th scope="col">RedCap Collection Date</th>
                </tr>
            </thead>
            <tbody>
                @if($thirtymonthdustdate->count() > 0)
                    @foreach($thirtymonthdustdate as $thirtymonthdustdateItem)
                    <tr>
                        <td>
                            {{ $thirtymonthdustdateItem['hhid']}}
                        </td>
                        <td>
                            {{ $thirtymonthdustdateItem['redcap_event_name']}}
                        </td>
                        <td>
                            {{ $thirtymonthdustdateItem['thirtymonthdustdate']}}
                        </td>                    
                    </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
        </div>
    <div class="card">
        <h3>2.5year Buccal Swab Date</h3>
        <table class="table table-striped">
            <thead class="bg-primary text-white">
                <tr>
                    <th scope="col">RedCap Household ID</th>
                    <th scope="col">RedCap Pregnancy Arm</th>
                    <th scope="col">RedCap Collection Date</th>
                </tr>
            </thead>
            <tbody>
                @if($buccal_swab_date_30mnth->count() > 0)
                    @foreach($buccal_swab_date_30mnth as $buccal_swab_date_30mnthItem)
                    <tr>
                        <td>
                            {{ $buccal_swab_date_30mnthItem['hhid']}}
                        </td>
                        <td>
                            {{ $buccal_swab_date_30mnthItem['redcap_event_name']}}
                        </td>
                        <td>
                            {{ $buccal_swab_date_30mnthItem['buccal_swab_date_30mnth']}}
                        </td>                    
                    </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
        </div>
    <div class="card">
        <h3>2.5year Nasal Swab Date</h3>
        <table class="table table-striped">
            <thead class="bg-primary text-white">
                <tr>
                    <th scope="col">RedCap Household ID</th>
                    <th scope="col">RedCap Pregnancy Arm</th>
                    <th scope="col">RedCap Collection Date</th>
                </tr>
            </thead>
            <tbody>
                @if($nasal_swab_date_30_mnth->count() > 0)
                    @foreach($nasal_swab_date_30_mnth as $nasal_swab_date_30_mnthItem)
                    <tr>
                        <td>
                            {{ $nasal_swab_date_30_mnthItem['hhid']}}
                        </td>
                        <td>
                            {{ $nasal_swab_date_30_mnthItem['redcap_event_name']}}
                        </td>
                        <td>
                            {{ $nasal_swab_date_30_mnthItem['nasal_swab_date_30_mnth']}}
                        </td>                    
                    </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
        </div>
    <div class="card">
        <h3>3.5year Spot Blood Date</h3>
        <table class="table table-striped">
            <thead class="bg-primary text-white">
                <tr>
                    <th scope="col">RedCap Household ID</th>
                    <th scope="col">RedCap Pregnancy Arm</th>
                    <th scope="col">RedCap Collection Date</th>
                </tr>
            </thead>
            <tbody>
                @if($spotblood42modate->count() > 0)
                    @foreach($spotblood42modate as $spotblood42modateItem)
                    <tr>
                        <td>
                            {{ $spotblood42modateItem['hhid']}}
                        </td>
                        <td>
                            {{ $spotblood42modateItem['redcap_event_name']}}
                        </td>
                        <td>
                            {{ $spotblood42modateItem['spotblood42modate']}}
                        </td>                    
                    </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
        </div>
    <div class="card">
        <h3>3.5year Urine Date</h3>
        <table class="table table-striped">
            <thead class="bg-primary text-white">
                <tr>
                    <th scope="col">RedCap Household ID</th>
                    <th scope="col">RedCap Pregnancy Arm</th>
                    <th scope="col">RedCap Collection Date</th>
                </tr>
            </thead>
            <tbody>
                @if($urine42modate->count() > 0)
                    @foreach($urine42modate as $urine42modateItem)
                    <tr>
                        <td>
                            {{ $urine42modateItem['hhid']}}
                        </td>
                        <td>
                            {{ $urine42modateItem['redcap_event_name']}}
                        </td>
                        <td>
                            {{ $urine42modateItem['urine42modate']}}
                        </td>                    
                    </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
        </div>
    <div class="card">
        <h3>3.5year Hair Date</h3>
        <table class="table table-striped">
            <thead class="bg-primary text-white">
                <tr>
                    <th scope="col">RedCap Household ID</th>
                    <th scope="col">RedCap Pregnancy Arm</th>
                    <th scope="col">RedCap Collection Date</th>
                </tr>
            </thead>
            <tbody>
                @if($hair42modate->count() > 0)
                    @foreach($hair42modate as $hair42modateItem)
                    <tr>
                        <td>
                            {{ $hair42modateItem['hhid']}}
                        </td>
                        <td>
                            {{ $hair42modateItem['redcap_event_name']}}
                        </td>
                        <td>
                            {{ $hair42modateItem['hair42modate']}}
                        </td>                    
                    </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
        </div>
    <div class="card">
        <h3>3.5year Venous Blood Date</h3>
        <table class="table table-striped">
            <thead class="bg-primary text-white">
                <tr>
                    <th scope="col">RedCap Household ID</th>
                    <th scope="col">RedCap Pregnancy Arm</th>
                    <th scope="col">RedCap Collection Date</th>
                </tr>
            </thead>
            <tbody>
                @if($venousblood42modate->count() > 0)
                    @foreach($venousblood42modate as $venousblood42modateItem)
                    <tr>
                        <td>
                            {{ $venousblood42modateItem['hhid']}}
                        </td>
                        <td>
                            {{ $venousblood42modateItem['redcap_event_name']}}
                        </td>
                        <td>
                            {{ $venousblood42modateItem['venousblood42modate']}}
                        </td>                    
                    </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
        </div>
    <div class="card">
        <h3>3.5yearLab Saliva Date</h3>
        <table class="table table-striped">
            <thead class="bg-primary text-white">
                <tr>
                    <th scope="col">RedCap Household ID</th>
                    <th scope="col">RedCap Pregnancy Arm</th>
                    <th scope="col">RedCap Collection Date</th>
                </tr>
            </thead>
            <tbody>
                @if($saliva42modate->count() > 0)
                    @foreach($saliva42modate as $saliva42modateItem)
                    <tr>
                        <td>
                            {{ $saliva42modateItem['hhid']}}
                        </td>
                        <td>
                            {{ $saliva42modateItem['redcap_event_name']}}
                        </td>
                        <td>
                            {{ $saliva42modateItem['saliva42modate']}}
                        </td>                    
                    </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
        </div>
    <div class="card">
        <h3>3.5yearHome Saliva Date</h3>
        <table class="table table-striped">
            <thead class="bg-primary text-white">
                <tr>
                    <th scope="col">RedCap Household ID</th>
                    <th scope="col">RedCap Pregnancy Arm</th>
                    <th scope="col">RedCap Collection Date</th>
                </tr>
            </thead>
            <tbody>
                @if($saliva42mohomedate->count() > 0)
                    @foreach($saliva42mohomedate as $saliva42mohomedateItem)
                    <tr>
                        <td>
                            {{ $saliva42mohomedateItem['hhid']}}
                        </td>
                        <td>
                            {{ $saliva42mohomedateItem['redcap_event_name']}}
                        </td>
                        <td>
                            {{ $saliva42mohomedateItem['saliva42mohomedate']}}
                        </td>                    
                    </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
        </div>
    <div class="card">
        <h3>3.5year Buccal Swab Date</h3>
        <table class="table table-striped">
            <thead class="bg-primary text-white">
                <tr>
                    <th scope="col">RedCap Household ID</th>
                    <th scope="col">RedCap Pregnancy Arm</th>
                    <th scope="col">RedCap Collection Date</th>
                </tr>
            </thead>
            <tbody>
                @if($buccalswab_date->count() > 0)
                    @foreach($buccalswab_date as $buccalswab_dateItem)
                    <tr>
                        <td>
                            {{ $buccalswab_dateItem['hhid']}}
                        </td>
                        <td>
                            {{ $buccalswab_dateItem['redcap_event_name']}}
                        </td>
                        <td>
                            {{ $buccalswab_dateItem['buccalswab_date']}}
                        </td>                    
                    </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
        </div>
    <div class="card">
        <h3>3.5year Nasal Swab Date</h3>
        <table class="table table-striped">
            <thead class="bg-primary text-white">
                <tr>
                    <th scope="col">RedCap Household ID</th>
                    <th scope="col">RedCap Pregnancy Arm</th>
                    <th scope="col">RedCap Collection Date</th>
                </tr>
            </thead>
            <tbody>
                @if($nasalswab_date->count() > 0)
                    @foreach($nasalswab_date as $nasalswab_dateItem)
                    <tr>
                        <td>
                            {{ $nasalswab_dateItem['hhid']}}
                        </td>
                        <td>
                            {{ $nasalswab_dateItem['redcap_event_name']}}
                        </td>
                        <td>
                            {{ $nasalswab_dateItem['nasalswab_date']}}
                        </td>                    
                    </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
        </div>
    <div class="card">
        <h3>5year Spot Blood Date</h3>
        <table class="table table-striped">
            <thead class="bg-primary text-white">
                <tr>
                    <th scope="col">RedCap Household ID</th>
                    <th scope="col">RedCap Pregnancy Arm</th>
                    <th scope="col">RedCap Collection Date</th>
                </tr>
            </thead>
            <tbody>
                @if($spotblood60modate->count() > 0)
                    @foreach($spotblood60modate as $spotblood60modateItem)
                    <tr>
                        <td>
                            {{ $spotblood60modateItem['hhid']}}
                        </td>
                        <td>
                            {{ $spotblood60modateItem['redcap_event_name']}}
                        </td>
                        <td>
                            {{ $spotblood60modateItem['spotblood60modate']}}
                        </td>                    
                    </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
        </div>
    <div class="card">
        <h3>5year Urine Date</h3>
        <table class="table table-striped">
            <thead class="bg-primary text-white">
                <tr>
                    <th scope="col">RedCap Household ID</th>
                    <th scope="col">RedCap Pregnancy Arm</th>
                    <th scope="col">RedCap Collection Date</th>
                </tr>
            </thead>
            <tbody>
                @if($urine60modate->count() > 0)
                    @foreach($urine60modate as $urine60modateItem)
                    <tr>
                        <td>
                            {{ $urine60modateItem['hhid']}}
                        </td>
                        <td>
                            {{ $urine60modateItem['redcap_event_name']}}
                        </td>
                        <td>
                            {{ $urine60modateItem['urine60modate']}}
                        </td>                    
                    </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
        </div>
    <div class="card">
        <h3>5year Hair Date</h3>
        <table class="table table-striped">
            <thead class="bg-primary text-white">
                <tr>
                    <th scope="col">RedCap Household ID</th>
                    <th scope="col">RedCap Pregnancy Arm</th>
                    <th scope="col">RedCap Collection Date</th>
                </tr>
            </thead>
            <tbody>
                @if($hair60modate->count() > 0)
                    @foreach($hair60modate as $hair60modateItem)
                    <tr>
                        <td>
                            {{ $hair60modateItem['hhid']}}
                        </td>
                        <td>
                            {{ $hair60modateItem['redcap_event_name']}}
                        </td>
                        <td>
                            {{ $hair60modateItem['hair60modate']}}
                        </td>                    
                    </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
        </div>
    <div class="card">
        <h3>5year Venous Blood Date</h3>
        <table class="table table-striped">
            <thead class="bg-primary text-white">
                <tr>
                    <th scope="col">RedCap Household ID</th>
                    <th scope="col">RedCap Pregnancy Arm</th>
                    <th scope="col">RedCap Collection Date</th>
                </tr>
            </thead>
            <tbody>
                @if($venousblood60modate->count() > 0)
                    @foreach($venousblood60modate as $venousblood60modateItem)
                    <tr>
                        <td>
                            {{ $venousblood60modateItem['hhid']}}
                        </td>
                        <td>
                            {{ $venousblood60modateItem['redcap_event_name']}}
                        </td>
                        <td>
                            {{ $venousblood60modateItem['venousblood60modate']}}
                        </td>                    
                    </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
        </div>
    <div class="card">
        <h3>5yearLab Saliva Date</h3>
        <table class="table table-striped">
            <thead class="bg-primary text-white">
                <tr>
                    <th scope="col">RedCap Household ID</th>
                    <th scope="col">RedCap Pregnancy Arm</th>
                    <th scope="col">RedCap Collection Date</th>
                </tr>
            </thead>
            <tbody>
                @if($labsaliva60modate->count() > 0)
                    @foreach($labsaliva60modate as $labsaliva60modateItem)
                    <tr>
                        <td>
                            {{ $labsaliva60modateItem['hhid']}}
                        </td>
                        <td>
                            {{ $labsaliva60modateItem['redcap_event_name']}}
                        </td>
                        <td>
                            {{ $labsaliva60modateItem['labsaliva60modate']}}
                        </td>                    
                    </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
        </div>
    <div class="card">
        <h3>5yearHome Saliva Date</h3>
        <table class="table table-striped">
            <thead class="bg-primary text-white">
                <tr>
                    <th scope="col">RedCap Household ID</th>
                    <th scope="col">RedCap Pregnancy Arm</th>
                    <th scope="col">RedCap Collection Date</th>
                </tr>
            </thead>
            <tbody>
                @if($homesaliva60modate->count() > 0)
                    @foreach($homesaliva60modate as $homesaliva60modateItem)
                    <tr>
                        <td>
                            {{ $homesaliva60modateItem['hhid']}}
                        </td>
                        <td>
                            {{ $homesaliva60modateItem['redcap_event_name']}}
                        </td>
                        <td>
                            {{ $homesaliva60modateItem['homesaliva60modate']}}
                        </td>                    
                    </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
        </div>
    <div class="card">
        <h3>ECHO-4-5year Spot Blood Date</h3>
        <table class="table table-striped">
            <thead class="bg-primary text-white">
                <tr>
                    <th scope="col">RedCap Household ID</th>
                    <th scope="col">RedCap Pregnancy Arm</th>
                    <th scope="col">RedCap Collection Date</th>
                </tr>
            </thead>
            <tbody>
                @if($echo4to5yrspotblooddate->count() > 0)
                    @foreach($echo4to5yrspotblooddate as $echo4to5yrspotblooddateItem)
                    <tr>
                        <td>
                            {{ $echo4to5yrspotblooddateItem['hhid']}}
                        </td>
                        <td>
                            {{ $echo4to5yrspotblooddateItem['redcap_event_name']}}
                        </td>
                        <td>
                            {{ $echo4to5yrspotblooddateItem['echo4to5yrspotblooddate']}}
                        </td>                    
                    </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
        </div>
    <div class="card">
        <h3>ECHO-4-5year Urine Date</h3>
        <table class="table table-striped">
            <thead class="bg-primary text-white">
                <tr>
                    <th scope="col">RedCap Household ID</th>
                    <th scope="col">RedCap Pregnancy Arm</th>
                    <th scope="col">RedCap Collection Date</th>
                </tr>
            </thead>
            <tbody>
                @if($echo4to5yrurinedate->count() > 0)
                    @foreach($echo4to5yrurinedate as $echo4to5yrurinedateItem)
                    <tr>
                        <td>
                            {{ $echo4to5yrurinedateItem['hhid']}}
                        </td>
                        <td>
                            {{ $echo4to5yrurinedateItem['redcap_event_name']}}
                        </td>
                        <td>
                            {{ $echo4to5yrurinedateItem['echo4to5yrurinedate']}}
                        </td>                    
                    </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
        </div>
    <div class="card">
        <h3>ECHO-4-5year Hair Date</h3>
        <table class="table table-striped">
            <thead class="bg-primary text-white">
                <tr>
                    <th scope="col">RedCap Household ID</th>
                    <th scope="col">RedCap Pregnancy Arm</th>
                    <th scope="col">RedCap Collection Date</th>
                </tr>
            </thead>
            <tbody>
                @if($echo4to5yrhairdate->count() > 0)
                    @foreach($echo4to5yrhairdate as $echo4to5yrhairdateItem)
                    <tr>
                        <td>
                            {{ $echo4to5yrhairdateItem['hhid']}}
                        </td>
                        <td>
                            {{ $echo4to5yrhairdateItem['redcap_event_name']}}
                        </td>
                        <td>
                            {{ $echo4to5yrhairdateItem['echo4to5yrhairdate']}}
                        </td>                    
                    </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
        </div>
    <div class="card">
        <h3>ECHO-4-5year Venous Blood Date</h3>
        <table class="table table-striped">
            <thead class="bg-primary text-white">
                <tr>
                    <th scope="col">RedCap Household ID</th>
                    <th scope="col">RedCap Pregnancy Arm</th>
                    <th scope="col">RedCap Collection Date</th>
                </tr>
            </thead>
            <tbody>
                @if($echo4to5yrvenousblooddate->count() > 0)
                    @foreach($echo4to5yrvenousblooddate as $echo4to5yrvenousblooddateItem)
                    <tr>
                        <td>
                            {{ $echo4to5yrvenousblooddateItem['hhid']}}
                        </td>
                        <td>
                            {{ $echo4to5yrvenousblooddateItem['redcap_event_name']}}
                        </td>
                        <td>
                            {{ $echo4to5yrvenousblooddateItem['echo4to5yrvenousblooddate']}}
                        </td>                    
                    </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
        </div>
    <div class="card">
        <h3>ECHO-7-8year Hair Date</h3>
        <table class="table table-striped">
            <thead class="bg-primary text-white">
                <tr>
                    <th scope="col">RedCap Household ID</th>
                    <th scope="col">RedCap Pregnancy Arm</th>
                    <th scope="col">RedCap Collection Date</th>
                </tr>
            </thead>
            <tbody>
                @if($echo7to8yrhairdate->count() > 0)
                    @foreach($echo7to8yrhairdate as $echo7to8yrhairdateItem)
                    <tr>
                        <td>
                            {{ $echo7to8yrhairdateItem['hhid']}}
                        </td>
                        <td>
                            {{ $echo7to8yrhairdateItem['redcap_event_name']}}
                        </td>
                        <td>
                            {{ $echo7to8yrhairdateItem['echo7to8yrhairdate']}}
                        </td>                    
                    </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
        </div>
    <div class="card">
        <h3>ECHO-7-8year Spot Blood Date</h3>
        <table class="table table-striped">
            <thead class="bg-primary text-white">
                <tr>
                    <th scope="col">RedCap Household ID</th>
                    <th scope="col">RedCap Pregnancy Arm</th>
                    <th scope="col">RedCap Collection Date</th>
                </tr>
            </thead>
            <tbody>
                @if($echo7yrto8yrsbdate->count() > 0)
                    @foreach($echo7yrto8yrsbdate as $echo7yrto8yrsbdateItem)
                    <tr>
                        <td>
                            {{ $echo7yrto8yrsbdateItem['hhid']}}
                        </td>
                        <td>
                            {{ $echo7yrto8yrsbdateItem['redcap_event_name']}}
                        </td>
                        <td>
                            {{ $echo7yrto8yrsbdateItem['echo7yrto8yrsbdate']}}
                        </td>                    
                    </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
        </div>
    <div class="card">
        <h3>ECHO-7-8year Venous Blood Date</h3>
        <table class="table table-striped">
            <thead class="bg-primary text-white">
                <tr>
                    <th scope="col">RedCap Household ID</th>
                    <th scope="col">RedCap Pregnancy Arm</th>
                    <th scope="col">RedCap Collection Date</th>
                </tr>
            </thead>
            <tbody>
                @if($echo7yrto8yrvbdate->count() > 0)
                    @foreach($echo7yrto8yrvbdate as $echo7yrto8yrvbdateItem)
                    <tr>
                        <td>
                            {{ $echo7yrto8yrvbdateItem['hhid']}}
                        </td>
                        <td>
                            {{ $echo7yrto8yrvbdateItem['redcap_event_name']}}
                        </td>
                        <td>
                            {{ $echo7yrto8yrvbdateItem['echo7yrto8yrvbdate']}}
                        </td>                    
                    </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
        </div>
    <div class="card">
        <h3>ECHO-7-8year Urine Date</h3>
        <table class="table table-striped">
            <thead class="bg-primary text-white">
                <tr>
                    <th scope="col">RedCap Household ID</th>
                    <th scope="col">RedCap Pregnancy Arm</th>
                    <th scope="col">RedCap Collection Date</th>
                </tr>
            </thead>
            <tbody>
                @if($echo7yrto8yrurinedate->count() > 0)
                    @foreach($echo7yrto8yrurinedate as $echo7yrto8yrurinedateItem)
                    <tr>
                        <td>
                            {{ $echo7yrto8yrurinedateItem['hhid']}}
                        </td>
                        <td>
                            {{ $echo7yrto8yrurinedateItem['redcap_event_name']}}
                        </td>
                        <td>
                            {{ $echo7yrto8yrurinedateItem['echo7yrto8yrurinedate']}}
                        </td>                    
                    </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
        </div>
    <div class="card">
        <h3>ECHO-Tooth#1 Date</h3>
        <table class="table table-striped">
            <thead class="bg-primary text-white">
                <tr>
                    <th scope="col">RedCap Household ID</th>
                    <th scope="col">RedCap Pregnancy Arm</th>
                    <th scope="col">RedCap Collection Date</th>
                </tr>
            </thead>
            <tbody>
                @if($echotooth1date->count() > 0)
                    @foreach($echotooth1date as $echotooth1dateItem)
                    <tr>
                        <td>
                            {{ $echotooth1dateItem['hhid']}}
                        </td>
                        <td>
                            {{ $echotooth1dateItem['redcap_event_name']}}
                        </td>
                        <td>
                            {{ $echotooth1dateItem['echotooth1date']}}
                        </td>                    
                    </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
        </div>
    <div class="card">
        <h3>ECHO-Tooth#2 Date</h3>
        <table class="table table-striped">
            <thead class="bg-primary text-white">
                <tr>
                    <th scope="col">RedCap Household ID</th>
                    <th scope="col">RedCap Pregnancy Arm</th>
                    <th scope="col">RedCap Collection Date</th>
                </tr>
            </thead>
            <tbody>
                @if($echotooth2date->count() > 0)
                    @foreach($echotooth2date as $echotooth2dateItem)
                    <tr>
                        <td>
                            {{ $echotooth2dateItem['hhid']}}
                        </td>
                        <td>
                            {{ $echotooth2dateItem['redcap_event_name']}}
                        </td>
                        <td>
                            {{ $echotooth2dateItem['echotooth2date']}}
                        </td>                    
                    </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
        </div>
    <div class="card">
        <h3>ECHO-Tooth#3 Date</h3>
        <table class="table table-striped">
            <thead class="bg-primary text-white">
                <tr>
                    <th scope="col">RedCap Household ID</th>
                    <th scope="col">RedCap Pregnancy Arm</th>
                    <th scope="col">RedCap Collection Date</th>
                </tr>
            </thead>
            <tbody>
                @if($echotooth3date->count() > 0)
                    @foreach($echotooth3date as $echotooth3dateItem)
                    <tr>
                        <td>
                            {{ $echotooth3dateItem['hhid']}}
                        </td>
                        <td>
                            {{ $echotooth3dateItem['redcap_event_name']}}
                        </td>
                        <td>
                            {{ $echotooth3dateItem['echotooth3date']}}
                        </td>                    
                    </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
        </div>
    <div class="card">
        <h3>ECHO-Tooth#4 Date</h3>
        <table class="table table-striped">
            <thead class="bg-primary text-white">
                <tr>
                    <th scope="col">RedCap Household ID</th>
                    <th scope="col">RedCap Pregnancy Arm</th>
                    <th scope="col">RedCap Collection Date</th>
                </tr>
            </thead>
            <tbody>
                @if($echotooth4date->count() > 0)
                    @foreach($echotooth4date as $echotooth4dateItem)
                    <tr>
                        <td>
                            {{ $echotooth4dateItem['hhid']}}
                        </td>
                        <td>
                            {{ $echotooth4dateItem['redcap_event_name']}}
                        </td>
                        <td>
                            {{ $echotooth4dateItem['echotooth4date']}}
                        </td>                    
                    </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
        </div>
        <div class="card">
            <h3>ECHO-Tooth#5 Date</h3>
            <table class="table table-striped">
                <thead class="bg-primary text-white">
                    <tr>
                        <th scope="col">RedCap Household ID</th>
                        <th scope="col">RedCap Pregnancy Arm</th>
                        <th scope="col">RedCap Collection Date</th>
                    </tr>
                </thead>
                <tbody>
                    @if($echotooth5date->count() > 0)
                        @foreach($echotooth5date as $echotooth5dateItem)
                        <tr>
                            <td>
                                {{ $echotooth5dateItem['hhid']}}
                            </td>
                            <td>
                                {{ $echotooth5dateItem['redcap_event_name']}}
                            </td>
                            <td>
                                {{ $echotooth5dateItem['echotooth5date']}}
                            </td>                    
                        </tr>
                        @endforeach
                    @endif
                    </tbody>
                </table>
            </div>
@endsection