@extends('layouts.app')

@section('content')
    <h1>RedCap Completion Checklist Data</h1>
    <table class="table table-striped">
        <thead class="bg-primary text-white">
            <tr>
                <th scope="col">Household ID</th>
                <th scope="col">Pregnancy Arm</th>
                <th scope="col">RC Repeat</th>
                <th scope="col">RC Repeat Instance</th>
                <th scope="col">Screener</th>
                <th scope="col">Screener Date</th>
                <th scope="col">Maternal Consent</th>
                <th scope="col">Maternal Consent Date</th>
                <th scope="col">Withdrawn (Y/N)</th>
                <th scope="col">Withdrawn Date</th>
                <th scope="col">2T Spot Blood (Y/N)</th>
                <th scope="col">2T Spot Blood Date</th>
                <th scope="col">2T Urine (Y/N)</th>
                <th scope="col">2T Urine Date</th>
                <th scope="col">2T Urine Time</th>
                <th scope="col">Maternal hair Prenatal (Y/N)</th>
                <th scope="col">Maternal hair Prenatal Date</th>
                <th scope="col">Prenatal Maternal Blood (Y/N)</th>
                <th scope="col">Prenatal Maternal Blood Date</th>
                <th scope="col">Perinatal Dust (Y/N)r</th>
                <th scope="col">Perinatal Dust Date</th>
                <th scope="col">Prenatal Saliva (Y/N)</th>
                <th scope="col">Prenatal Saliva Date</th>
                <th scope="col">3T Urine (Y/N)</th>
                <th scope="col">3T Urine Date</th>
                <th scope="col">3T Urine Time</th>
                <th scope="col">3T Spot Blood (Y/N)</th>
                <th scope="col">3T Spot Blood Date</th>
                <th scope="col">3T Green Top Venous Blood (Y/N)</th>
                <th scope="col">3T Green Top Venous Blood Date</th>
                <th scope="col">Child DOB</th>
                <th scope="col">Birth Tissue (Y/N)</th>
                <th scope="col">Birth Tissue Date</th>
                <th scope="col">Placenta (Y/N)</th>
                <th scope="col">Placenta Delivery Time</th>
                <th scope="col">lacenta Delivery Date</th>
                <th scope="col">Umbilical Cord (Y/N)</th>
                <th scope="col">Umbilical Cord Date</th>
                <th scope="col">Green Top Umbilical Cord Blood (Y/N)</th>
                <th scope="col">Umbilical Cord Blood (Y/N)</th>
                <th scope="col">Umbilical Cord Blood Date</th>
                <th scope="col">Green Top Birth (Y/N)</th>
                <th scope="col">Green Top Birth Date</th>
                <th scope="col">Child Consent (Y/N)</th>
                <th scope="col">Child Consent Date</th>
                <th scope="col">Postnatal Maternal Hair (Y/N)</th>
                <th scope="col">Postnatal Maternal Hair Date</th>
                <th scope="col">Breastmilk (Y/N)</th>
                <th scope="col">Breastmilk Date</th>
                <th scope="col">30day Infant Hair (Y/N)</th>
                <th scope="col">30day Infant Hair Date</th>
                <th scope="col">30day Infant Spot Blood (Y/N)</th>
                <th scope="col">30day Infant Spot Blood Date</th>
                <th scope="col">30day Buccal Swab (Y/N)</th>
                <th scope="col">30day Buccal Swab Date</th>
                <th scope="col">30day Nasal Swab (Y/N)</th>
                <th scope="col">30day Nasal Swab Date</th>
                <th scope="col">6monthHome Saliva (Y/N)</th>
                <th scope="col">6monthHome Saliva Date</th>
                <th scope="col">6monthLab Saliva (Y/N)</th>
                <th scope="col">6monthLab Saliva Date</th>
                <th scope="col">6month Hair (Y/N)</th>
                <th scope="col">6month Hair Date</th>
                <th scope="col">6month Buccal Swab (Y/N)</th>
                <th scope="col">6month Buccal Swab Date</th>
                <th scope="col">6month Nasal Swab (Y/N)</th>
                <th scope="col">6month Nasal Swab Date</th>
                <th scope="col">12month Spot Blood (Y/N)</th>
                <th scope="col">12month Spot Blood Date</th>
                <th scope="col">12month Venous Blood (Y/N)</th>
                <th scope="col">12month Venous Blood Date/th>
                <th scope="col">18month Spot Blood (Y/N)</th>
                <th scope="col">18month Spot Blood Date</th>
                <th scope="col">2year Spot Blood (Y/N)</th>
                <th scope="col">2year Spot Blood Date</th>
                <th scope="col">2year Venous Blood (Y/N)</th>
                <th scope="col">2year Venous Blood Date</th>
                <th scope="col">2year Hair (Y/N)</th>
                <th scope="col">2year Hair Date</th>
                <th scope="col">2year Urine (Y/N)</th>
                <th scope="col">2year Urine Date</th>
                <th scope="col">ECHO-2year Hair (Y/N)</th>
                <th scope="col">ECHO-2year Hair Date</th>
                <th scope="col">ECHO-2year Urine (Y/N)</th>
                <th scope="col">ECHO-2year Urine Date</th>
                <th scope="col">ECHO-2year Spot Blood (Y/N)</th>
                <th scope="col">ECHO-2year Spot Blood Date</th>
                <th scope="col">ECHO-2year Venous Blood (Y/N)</th>
                <th scope="col">ECHO-2year Venous Blood Date</th>
                <th scope="col">2-2.5year Spot Blood (Y/N)</th>
                <th scope="col">2-2.5year Spot Blood Date</th>
                <th scope="col">2-2.5year Venous Blood (Y/N)</th>
                <th scope="col">2-2.5year Venous Blood Date</th>
                <th scope="col">2.5year Spot Blood (Y/N)</th>
                <th scope="col">2.5year Spot Blood Date</th>
                <th scope="col">2.5year Venous Blood Blood (Y/N)</th>
                <th scope="col">2.5year Venous Blood Blood Date</th>
                <th scope="col">2.5yearHome Saliva (Y/N)</th>
                <th scope="col">2.5yearHome Saliva Date</th>
                <th scope="col">2.5year Dust (Y/N)</th>
                <th scope="col">2.5year Dust Date</th>
                <th scope="col">2.5year Buccal Swab (Y/N)</th>
                <th scope="col">2.5year Buccal Swab Date</th>
                <th scope="col">2.5year Nasal Swab (Y/N)</th>
                <th scope="col">2.5year Nasal Swab Date</th>
                <th scope="col">3.5year Spot Blood (Y/N)</th>
                <th scope="col">3.5year Spot Blood Date</th>
                <th scope="col">3.5year Urine (Y/N)t</th>
                <th scope="col">3.5year Urine Date</th>
                <th scope="col">3.5year Hair (Y/N)</th>
                <th scope="col">3.5year Hair Date</th>
                <th scope="col">3.5year Venous Blood (Y/N)</th>
                <th scope="col">3.5year Venous Blood Date</th>
                <th scope="col">3.5yearLab Saliva (Y/N)</th>
                <th scope="col">3.5yearLab Saliva Date</th>
                <th scope="col">3.5yearHome Saliva (Y/N)</th>
                <th scope="col">3.5yearHome Saliva Date</th>
                <th scope="col">3.5year Buccal Swab (Y/N)</th>
                <th scope="col">3.5year Buccal Swab Date</th>
                <th scope="col">3.5year Nasal Swab (Y/N)</th>
                <th scope="col">3.5year Nasal Swab Date</th>
                <th scope="col">5year Spot Blood (Y/N)</th>
                <th scope="col">5year Spot Blood Date</th>
                <th scope="col">5year Urine (Y/N)</th>
                <th scope="col">5year Urine Date</th>
                <th scope="col">5year Hair (Y/N)</th>
                <th scope="col">5year Hair Date</th>
                <th scope="col">5year Venous Blood (Y/N)</th>
                <th scope="col">5year Venous Blood Date</th>
                <th scope="col">5yearLab Saliva (Y/N)</th>
                <th scope="col">5yearLab Saliva Date</th>
                <th scope="col">5yearHome Saliva (Y/N)</th>
                <th scope="col">5yearHome Saliva Date</th>
                <th scope="col">ECHO-4-5year Spot Blood (Y/N)</th>
                <th scope="col">ECHO-4-5year Spot Blood Date</th>
                <th scope="col">ECHO-4-5year Urine (Y/N)</th>
                <th scope="col">ECHO-4-5year Urine Date</th>
                <th scope="col">ECHO-4-5year Hair (Y/N)</th>
                <th scope="col">ECHO-4-5year Hair Date</th>
                <th scope="col">ECHO-4-5year Venous Blood (Y/N)</th>
                <th scope="col">ECHO-4-5year Venous Blood Date</th>
                <th scope="col">ECHO-7-8year Hair (Y/N)</th>
                <th scope="col">ECHO-7-8year Hair Date</th>
                <th scope="col">ECHO-7-8year Spot Blood (Y/N)</th>
                <th scope="col">ECHO-7-8year Spot Blood Date</th>
                <th scope="col">ECHO-7-8year Venous Blood (Y/N)</th>
                <th scope="col">ECHO-7-8year Venous Blood Date</th>
                <th scope="col">ECHO-7-8year Urine (Y/N)</th>
                <th scope="col">ECHO-7-8year Urine Date</th>
                <th scope="col">ECHO-Tooth#1 (Y/N)</th>
                <th scope="col">ECHO-Tooth#1 Date</th>
                <th scope="col">ECHO-Tooth#2 (Y/N)</th>
                <th scope="col">ECHO-Tooth#2 Date</th>
                <th scope="col">ECHO-Tooth#3 (Y/N)</th>
                <th scope="col">ECHO-Tooth#3 Date</th>
                <th scope="col">ECHO-Tooth#4 (Y/N)</th>
                <th scope="col">ECHO-Tooth#4 Date</th>
                <th scope="col">ECHO-Tooth#5 (Y/N)</th>
                <th scope="col">ECHO-Tooth#5 Date</th>
                <th scope="col">Complete (Y/N)</th>
            </tr>
        </thead>
            <tbody>
            @if(count($outputs) > 0)
                @foreach($outputs as $o)
                    <tr>
                        <th>{{$o['hhid']}}</th>
                        <th>{{$o['redcap_event_name']}}</th>
                        <th>{{$o['redcap_repeat_instrument']}}</th>
                        <th>{{$o['redcap_repeat_instance']}}</th>
                        <th>{{$o['screener']}}</th>
                        <th>{{$o['screenerdate']}}</th>
                        <th>{{$o['maternal_consent']}}</th>
                        <th>{{$o['maternal_consent_date']}}</th>
                        <th>{{$o['withdrawn']}}</th>
                        <th>{{$o['withdrawndate']}}</th>
                        <th>{{$o['twotsb']}}</th>
                        <th>{{$o['twotsbdate']}}</th>
                        <th>{{$o['twotu']}}</th>
                        <th>{{$o['twotudate']}}</th>
                        <th>{{$o['twotutime']}}</th>
                        <th>{{$o['maternalhairprenatal']}}</th>
                        <th>{{$o['maternalhairprenataldate']}}</th>
                        <th>{{$o['blmaternalblood']}}</th>
                        <th>{{$o['blmaternalblooddate']}}</th>
                        <th>{{$o['dust']}}</th>
                        <th>{{$o['dustdate']}}</th>
                        <th>{{$o['cort']}}</th>
                        <th>{{$o['cortdate']}}</th>
                        <th>{{$o['threetu']}}</th>
                        <th>{{$o['threetudate']}}</th>
                        <th>{{$o['threetutime']}}</th>
                        <th>{{$o['threetsb']}}</th>
                        <th>{{$o['threetsbdate']}}</th>
                        <th>{{$o['threetgreentoptube']}}</th>
                        <th>{{$o['threetgreentoptube_date']}}</th>
                        <th>{{$o['childbday']}}</th>
                        <th>{{$o['birthtissue']}}</th>
                        <th>{{$o['birthtissuedate']}}</th>
                        <th>{{$o['placentat']}}</th>
                        <th>{{$o['placentattime']}}</th>
                        <th>{{$o['placentatdate']}}</th>
                        <th>{{$o['cord']}}</th>
                        <th>{{$o['corddate']}}</th>
                        <th>{{$o['greentop_tube_cord']}}</th>
                        <th>{{$o['cordb']}}</th>
                        <th>{{$o['cordbdate']}}</th>
                        <th>{{$o['birth_green_tube']}}</th>
                        <th>{{$o['birth_green_tube_date']}}</th>
                        <th>{{$o['childconsent']}}</th>
                        <th>{{$o['childconsentdate']}}</th>
                        <th>{{$o['mhair']}}</th>
                        <th>{{$o['mhairdate']}}</th>
                        <th>{{$o['brstmlk']}}</th>
                        <th>{{$o['brstmlkdate']}}</th>
                        <th>{{$o['ihair']}}</th>
                        <th>{{$o['ihairdate']}}</th>
                        <th>{{$o['isb']}}</th>
                        <th>{{$o['isbdate']}}</th>
                        <th>{{$o['buccal_swab_1mnth']}}</th>
                        <th>{{$o['buccal_swab_date_1mnth']}}</th>
                        <th>{{$o['nasal_swab_1mnth']}}</th>
                        <th>{{$o['nasal_swab_date_1mnth']}}</th>
                        <th>{{$o['isalivahome']}}</th>
                        <th>{{$o['isalivahomedate']}}</th>
                        <th>{{$o['isalivalab']}}</th>
                        <th>{{$o['isalivalabdate']}}</th>
                        <th>{{$o['ihair6']}}</th>
                        <th>{{$o['ihair6date']}}</th>
                        <th>{{$o['buccal_swab_6mnth']}}</th>
                        <th>{{$o['buccal_swab_date_6mnth']}}</th>
                        <th>{{$o['nasal_swab_6mnth']}}</th>
                        <th>{{$o['nasal_swab_date_6mnth']}}</th>
                        <th>{{$o['sb12moyesno']}}</th>
                        <th>{{$o['sbdate12mo']}}</th>
                        <th>{{$o['ivblood12mo']}}</th>
                        <th>{{$o['ivblood12modate']}}</th>
                        <th>{{$o['sb18mo']}}</th>
                        <th>{{$o['sb18modate']}}</th>
                        <th>{{$o['sb24mo']}}</th>
                        <th>{{$o['sb24modate']}}</th>
                        <th>{{$o['b24mo']}}</th>
                        <th>{{$o['b24modate']}}</th>
                        <th>{{$o['hair24mo']}}</th>
                        <th>{{$o['hair24modate']}}</th>
                        <th>{{$o['urine24mo']}}</th>
                        <th>{{$o['urine24date']}}</th>
                        <th>{{$o['echo2yrhair']}}</th>
                        <th>{{$o['echo2yrhairdate']}}</th>
                        <th>{{$o['echo2yrurine']}}</th>
                        <th>{{$o['echo2yrurinedate']}}</th>
                        <th>{{$o['echo2yrspotblood']}}</th>
                        <th>{{$o['echo2yrsbdate']}}</th>
                        <th>{{$o['echo2yrvenousblood']}}</th>
                        <th>{{$o['echo2yrvenousblooddate']}}</th>
                        <th>{{$o['sb2430']}}</th>
                        <th>{{$o['sb2430date']}}</th>
                        <th>{{$o['vb2430']}}</th>
                        <th>{{$o['vb2430date']}}</th>
                        <th>{{$o['thirtymonthsb']}}</th>
                        <th>{{$o['thirtymonthsbdate']}}</th>
                        <th>{{$o['venousblood30mo']}}</th>
                        <th>{{$o['venousblood30modate']}}</th>
                        <th>{{$o['saliva30mohome']}}</th>
                        <th>{{$o['saliva30mohomedate']}}</th>
                        <th>{{$o['thirtymonthdust']}}</th>
                        <th>{{$o['thirtymonthdustdate']}}</th>
                        <th>{{$o['buccal_swab_30mnth']}}</th>
                        <th>{{$o['buccal_swab_date_30mnth']}}</th>
                        <th>{{$o['nasal_swab_30mnth']}}</th>
                        <th>{{$o['nasal_swab_date_30_mnth']}}</th>
                        <th>{{$o['spotblood42mo']}}</th>
                        <th>{{$o['spotblood42modate']}}</th>
                        <th>{{$o['urine42mo']}}</th>
                        <th>{{$o['urine42modate']}}</th>
                        <th>{{$o['hair42mo']}}</th>
                        <th>{{$o['hair42modate']}}</th>
                        <th>{{$o['venousblood42mo']}}</th>
                        <th>{{$o['venousblood42modate']}}</th>
                        <th>{{$o['saliva42mo']}}</th>
                        <th>{{$o['saliva42modate']}}</th>
                        <th>{{$o['saliva42mohome']}}</th>
                        <th>{{$o['saliva42mohomedate']}}</th>
                        <th>{{$o['buccalswab']}}</th>
                        <th>{{$o['buccalswab_date']}}</th>
                        <th>{{$o['nasalswab']}}</th>
                        <th>{{$o['nasalswab_date']}}</th>
                        <th>{{$o['spotblood60mo']}}</th>
                        <th>{{$o['spotblood60modate']}}</th>
                        <th>{{$o['urine60mo']}}</th>
                        <th>{{$o['urine60modate']}}</th>
                        <th>{{$o['hair60mo']}}</th>
                        <th>{{$o['hair60modate']}}</th>
                        <th>{{$o['venousblood60mo']}}</th>
                        <th>{{$o['venousblood60modate']}}</th>
                        <th>{{$o['labsaliva60mo']}}</th>
                        <th>{{$o['labsaliva60modate']}}</th>
                        <th>{{$o['homesaliva60mo']}}</th>
                        <th>{{$o['homesaliva60modate']}}</th>
                        <th>{{$o['echo4to5yrspotblood']}}</th>
                        <th>{{$o['echo4to5yrspotblooddate']}}</th>
                        <th>{{$o['echo4to5yrurine']}}</th>
                        <th>{{$o['echo4to5yrurinedate']}}</th>
                        <th>{{$o['echo4to5yrhair']}}</th>
                        <th>{{$o['echo4to5yrhairdate']}}</th>
                        <th>{{$o['echo4to5yrvenousblood']}}</th>
                        <th>{{$o['echo4to5yrvenousblooddate']}}</th>
                        <th>{{$o['echo7to8yrhair']}}</th>
                        <th>{{$o['echo7to8yrhairdate']}}</th>
                        <th>{{$o['echo7yrto8yrsb']}}</th>
                        <th>{{$o['echo7yrto8yrsbdate']}}</th>
                        <th>{{$o['echo7yrto8yrvb']}}</th>
                        <th>{{$o['echo7yrto8yrvbdate']}}</th>
                        <th>{{$o['echo7yrto8yrurine']}}</th>
                        <th>{{$o['echo7yrto8yrurinedate']}}</th>
                        <th>{{$o['echotooth1']}}</th>
                        <th>{{$o['echotooth1date']}}</th>
                        <th>{{$o['echotooth2']}}</th>
                        <th>{{$o['echotooth2date']}}</th>
                        <th>{{$o['echotooth3']}}</th>
                        <th>{{$o['echotooth3date']}}</th>
                        <th>{{$o['echotooth4']}}</th>
                        <th>{{$o['echotooth4date']}}</th>
                        <th>{{$o['echotooth5']}}</th>
                        <th>{{$o['echotooth5date']}}</th>
                        <th>{{$o['sample_tracking_complete']}}</th>
                    </tr>
                @endforeach
        
            @else
                <p>No samples found</p>
            @endif
            </tbody>
        </table>
@endsection