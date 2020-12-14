<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RedCap;
use DB;

use App\Repositories\MyDataInterface;

class RedCapController extends Controller
{

    private $my_data_interface;
    public function __construct(MyDataInterface $my_data_interface_class_variable) {
        $this->my_data_interface = $my_data_interface_class_variable;
        $this->middleware('auth');
    }

    public function lvresults() {
        return $this->my_data_interface->lvresults();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('redcap.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function callMyAPI(){
        $data = array(
            'token' => '8D9E5A5083FE5B8101EA045CD6CC8C14',
            'content' => 'report',
            'format' => 'json',
            'report_id' => '377',
            'csvDelimiter' => '',
            'rawOrLabel' => 'raw',
            'rawOrLabelHeaders' => 'label',
            'exportCheckboxLabel' => 'true',
            'returnFormat' => 'json'
        );
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'http://localhost/redcap/api/');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_VERBOSE, 0);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_AUTOREFERER, true);
        curl_setopt($ch, CURLOPT_MAXREDIRS, 10);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
        curl_setopt($ch, CURLOPT_FRESH_CONNECT, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data, '', '&'));
        $output = curl_exec($ch);
        //print $output;
        $outputs = collect(json_decode($output, true));
        $redCapData = $outputs;
        $lvs = $this->lvresults();

        $redCapDataMissingLvData = $redCapData->filter(function($item) use ($lvs){
            // found something
            $lvsData = $lvs->filter(function($lvsItem) use ($item){
                //dd($lvsItem->redcap_event_name,$item['redcap_event_name']);
                return $lvsItem->hhid == $item['hhid'] && $lvsItem->redcap_event_name == $item['redcap_event_name'];
            });

            return  $lvsData->count() > 0 ? false : true;
        });
        $twotsb = $redCapData->filter(function($item) use ($lvs){

            $visitData = $lvs->filter(function($lvsItem) use ($item){
                //dd($lvsItem->twotsbdate,$item['twotsbdate']);
                if($lvsItem->twotsbdate == NULL && $item['twotsbdate'] != NULL){
                    return $lvsItem->hhid == $item['hhid'] && $lvsItem->redcap_event_name == $item['redcap_event_name'];               
                }
                else{

                }
            });

            return  $visitData->count() > 0 ? true : false;
        });
        $twotudate = $redCapData->filter(function($item) use ($lvs){
            $visitData = $lvs->filter(function($lvsItem) use ($item){
                if($lvsItem->twotudate == NULL && $item['twotudate'] != NULL){
                    return $lvsItem->hhid == $item['hhid'] && $lvsItem->redcap_event_name == $item['redcap_event_name'];               
                }
                else{

                }
            });

            return  $visitData->count() > 0 ? true : false;
        });
        $maternalhairprenataldate = $redCapData->filter(function($item) use ($lvs){
            $visitData = $lvs->filter(function($lvsItem) use ($item){
                if($lvsItem->maternalhairprenataldate == NULL && $item['maternalhairprenataldate'] != NULL){
                    return $lvsItem->hhid == $item['hhid'] && $lvsItem->redcap_event_name == $item['redcap_event_name'];               
                }
                else{

                }
            });

            return  $visitData->count() > 0 ? true : false;
        });
        $blmaternalblooddate = $redCapData->filter(function($item) use ($lvs){
            $visitData = $lvs->filter(function($lvsItem) use ($item){
                if($lvsItem->blmaternalblooddate == NULL && $item['blmaternalblooddate'] != NULL){
                    return $lvsItem->hhid == $item['hhid'] && $lvsItem->redcap_event_name == $item['redcap_event_name'];               
                }
                else{

                }
            });

            return  $visitData->count() > 0 ? true : false;
        });
        $dustdate = $redCapData->filter(function($item) use ($lvs){
            $visitData = $lvs->filter(function($lvsItem) use ($item){
                if($lvsItem->dustdate == NULL && $item['dustdate'] != NULL){
                    return $lvsItem->hhid == $item['hhid'] && $lvsItem->redcap_event_name == $item['redcap_event_name'];               
                }
                else{

                }
            });

            return  $visitData->count() > 0 ? true : false;
        });
        $cortdate = $redCapData->filter(function($item) use ($lvs){
            $visitData = $lvs->filter(function($lvsItem) use ($item){
                if($lvsItem->cortdate == NULL && $item['cortdate'] != NULL){
                    return $lvsItem->hhid == $item['hhid'] && $lvsItem->redcap_event_name == $item['redcap_event_name'];               
                }
                else{

                }
            });

            return  $visitData->count() > 0 ? true : false;
        });
        $threetudate = $redCapData->filter(function($item) use ($lvs){
            $visitData = $lvs->filter(function($lvsItem) use ($item){
                if($lvsItem->threetudate == NULL && $item['threetudate'] != NULL){
                    return $lvsItem->hhid == $item['hhid'] && $lvsItem->redcap_event_name == $item['redcap_event_name'];               
                }
                else{

                }
            });

            return  $visitData->count() > 0 ? true : false;
        });
        $threetsbdate = $redCapData->filter(function($item) use ($lvs){
            $visitData = $lvs->filter(function($lvsItem) use ($item){
                if($lvsItem->threetsbdate == NULL && $item['threetsbdate'] != NULL){
                    return $lvsItem->hhid == $item['hhid'] && $lvsItem->redcap_event_name == $item['redcap_event_name'];               
                }
                else{

                }
            });

            return  $visitData->count() > 0 ? true : false;
        });
        $threetgreentoptube_date = $redCapData->filter(function($item) use ($lvs){
            $visitData = $lvs->filter(function($lvsItem) use ($item){
                if($lvsItem->threetgreentoptube_date == NULL && $item['threetgreentoptube_date'] != NULL){
                    return $lvsItem->hhid == $item['hhid'] && $lvsItem->redcap_event_name == $item['redcap_event_name'];               
                }
                else{

                }
            });

            return  $visitData->count() > 0 ? true : false;
        });
        $birthtissuedate = $redCapData->filter(function($item) use ($lvs){
            $visitData = $lvs->filter(function($lvsItem) use ($item){
                if($lvsItem->birthtissuedate == NULL && $item['birthtissuedate'] != NULL){
                    return $lvsItem->hhid == $item['hhid'] && $lvsItem->redcap_event_name == $item['redcap_event_name'];               
                }
                else{

                }
            });

            return  $visitData->count() > 0 ? true : false;
        });
        $placentatdate = $redCapData->filter(function($item) use ($lvs){
            $visitData = $lvs->filter(function($lvsItem) use ($item){
                if($lvsItem->placentatdate == NULL && $item['placentatdate'] != NULL){
                    return $lvsItem->hhid == $item['hhid'] && $lvsItem->redcap_event_name == $item['redcap_event_name'];               
                }
                else{

                }
            });

            return  $visitData->count() > 0 ? true : false;
        });
        $corddate = $redCapData->filter(function($item) use ($lvs){
            $visitData = $lvs->filter(function($lvsItem) use ($item){
                if($lvsItem->corddate == NULL && $item['corddate'] != NULL){
                    return $lvsItem->hhid == $item['hhid'] && $lvsItem->redcap_event_name == $item['redcap_event_name'];               
                }
                else{

                }
            });

            return  $visitData->count() > 0 ? true : false;
        });
        $cordbdate = $redCapData->filter(function($item) use ($lvs){
            $visitData = $lvs->filter(function($lvsItem) use ($item){
                if($lvsItem->cordbdate == NULL && $item['cordbdate'] != NULL){
                    return $lvsItem->hhid == $item['hhid'] && $lvsItem->redcap_event_name == $item['redcap_event_name'];               
                }
                else{

                }
            });

            return  $visitData->count() > 0 ? true : false;
        });
        $birth_green_tube_date = $redCapData->filter(function($item) use ($lvs){
            $visitData = $lvs->filter(function($lvsItem) use ($item){
                if($lvsItem->birth_green_tube_date == NULL && $item['birth_green_tube_date'] != NULL){
                    return $lvsItem->hhid == $item['hhid'] && $lvsItem->redcap_event_name == $item['redcap_event_name'];               
                }
                else{

                }
            });

            return  $visitData->count() > 0 ? true : false;
        });
        $childconsentdate = $redCapData->filter(function($item) use ($lvs){
            $visitData = $lvs->filter(function($lvsItem) use ($item){
                if($lvsItem->childconsentdate == NULL && $item['childconsentdate'] != NULL){
                    return $lvsItem->hhid == $item['hhid'] && $lvsItem->redcap_event_name == $item['redcap_event_name'];               
                }
                else{

                }
            });

            return  $visitData->count() > 0 ? true : false;
        });
        $mhairdate = $redCapData->filter(function($item) use ($lvs){
            $visitData = $lvs->filter(function($lvsItem) use ($item){
                if($lvsItem->mhairdate == NULL && $item['mhairdate'] != NULL){
                    return $lvsItem->hhid == $item['hhid'] && $lvsItem->redcap_event_name == $item['redcap_event_name'];               
                }
                else{

                }
            });

            return  $visitData->count() > 0 ? true : false;
        });
        $brstmlkdate = $redCapData->filter(function($item) use ($lvs){
            $visitData = $lvs->filter(function($lvsItem) use ($item){
                if($lvsItem->brstmlkdate == NULL && $item['brstmlkdate'] != NULL){
                    return $lvsItem->hhid == $item['hhid'] && $lvsItem->redcap_event_name == $item['redcap_event_name'];               
                }
                else{

                }
            });

            return  $visitData->count() > 0 ? true : false;
        });
        $ihairdate = $redCapData->filter(function($item) use ($lvs){
            $visitData = $lvs->filter(function($lvsItem) use ($item){
                if($lvsItem->ihairdate == NULL && $item['ihairdate'] != NULL){
                    return $lvsItem->hhid == $item['hhid'] && $lvsItem->redcap_event_name == $item['redcap_event_name'];               
                }
                else{

                }
            });

            return  $visitData->count() > 0 ? true : false;
        });
        $isbdate = $redCapData->filter(function($item) use ($lvs){
            $visitData = $lvs->filter(function($lvsItem) use ($item){
                if($lvsItem->isbdate == NULL && $item['isbdate'] != NULL){
                    return $lvsItem->hhid == $item['hhid'] && $lvsItem->redcap_event_name == $item['redcap_event_name'];               
                }
                else{

                }
            });

            return  $visitData->count() > 0 ? true : false;
        });
        $buccal_swab_date_1mnth = $redCapData->filter(function($item) use ($lvs){
            $visitData = $lvs->filter(function($lvsItem) use ($item){
                if($lvsItem->buccal_swab_date_1mnth == NULL && $item['buccal_swab_date_1mnth'] != NULL){
                    return $lvsItem->hhid == $item['hhid'] && $lvsItem->redcap_event_name == $item['redcap_event_name'];               
                }
                else{

                }
            });

            return  $visitData->count() > 0 ? true : false;
        });
        $nasal_swab_date_1mnth = $redCapData->filter(function($item) use ($lvs){
            $visitData = $lvs->filter(function($lvsItem) use ($item){
                if($lvsItem->nasal_swab_date_1mnth == NULL && $item['nasal_swab_date_1mnth'] != NULL){
                    return $lvsItem->hhid == $item['hhid'] && $lvsItem->redcap_event_name == $item['redcap_event_name'];               
                }
                else{

                }
            });

            return  $visitData->count() > 0 ? true : false;
        });
        $isalivahomedate = $redCapData->filter(function($item) use ($lvs){
            $visitData = $lvs->filter(function($lvsItem) use ($item){
                if($lvsItem->isalivahomedate == NULL && $item['isalivahomedate'] != NULL){
                    return $lvsItem->hhid == $item['hhid'] && $lvsItem->redcap_event_name == $item['redcap_event_name'];               
                }
                else{

                }
            });

            return  $visitData->count() > 0 ? true : false;
        });
        $isalivalabdate = $redCapData->filter(function($item) use ($lvs){
            $visitData = $lvs->filter(function($lvsItem) use ($item){
                if($lvsItem->isalivalabdate == NULL && $item['isalivalabdate'] != NULL){
                    return $lvsItem->hhid == $item['hhid'] && $lvsItem->redcap_event_name == $item['redcap_event_name'];               
                }
                else{

                }
            });

            return  $visitData->count() > 0 ? true : false;
        });
        $ihair6date = $redCapData->filter(function($item) use ($lvs){
            $visitData = $lvs->filter(function($lvsItem) use ($item){
                if($lvsItem->ihair6date == NULL && $item['ihair6date'] != NULL){
                    return $lvsItem->hhid == $item['hhid'] && $lvsItem->redcap_event_name == $item['redcap_event_name'];               
                }
                else{

                }
            });

            return  $visitData->count() > 0 ? true : false;
        });
        $buccal_swab_date_6mnth = $redCapData->filter(function($item) use ($lvs){
            $visitData = $lvs->filter(function($lvsItem) use ($item){
                if($lvsItem->buccal_swab_date_6mnth == NULL && $item['buccal_swab_date_6mnth'] != NULL){
                    return $lvsItem->hhid == $item['hhid'] && $lvsItem->redcap_event_name == $item['redcap_event_name'];               
                }
                else{

                }
            });

            return  $visitData->count() > 0 ? true : false;
        });
        $nasal_swab_date_6mnth = $redCapData->filter(function($item) use ($lvs){
            $visitData = $lvs->filter(function($lvsItem) use ($item){
                if($lvsItem->nasal_swab_date_6mnth == NULL && $item['nasal_swab_date_6mnth'] != NULL){
                    return $lvsItem->hhid == $item['hhid'] && $lvsItem->redcap_event_name == $item['redcap_event_name'];               
                }
                else{

                }
            });

            return  $visitData->count() > 0 ? true : false;
        });
        $sbdate12mo = $redCapData->filter(function($item) use ($lvs){
            $visitData = $lvs->filter(function($lvsItem) use ($item){
                if($lvsItem->sbdate12mo == NULL && $item['sbdate12mo'] != NULL){
                    return $lvsItem->hhid == $item['hhid'] && $lvsItem->redcap_event_name == $item['redcap_event_name'];               
                }
                else{

                }
            });

            return  $visitData->count() > 0 ? true : false;
        });
        $ivblood12modate = $redCapData->filter(function($item) use ($lvs){
            $visitData = $lvs->filter(function($lvsItem) use ($item){
                if($lvsItem->ivblood12modate == NULL && $item['ivblood12modate'] != NULL){
                    return $lvsItem->hhid == $item['hhid'] && $lvsItem->redcap_event_name == $item['redcap_event_name'];               
                }
                else{

                }
            });

            return  $visitData->count() > 0 ? true : false;
        });
        $sb18modate = $redCapData->filter(function($item) use ($lvs){
            $visitData = $lvs->filter(function($lvsItem) use ($item){
                if($lvsItem->sb18modate == NULL && $item['sb18modate'] != NULL){
                    return $lvsItem->hhid == $item['hhid'] && $lvsItem->redcap_event_name == $item['redcap_event_name'];               
                }
                else{

                }
            });

            return  $visitData->count() > 0 ? true : false;
        });
        $sb24modate = $redCapData->filter(function($item) use ($lvs){
            $visitData = $lvs->filter(function($lvsItem) use ($item){
                if($lvsItem->sb24modate == NULL && $item['sb24modate'] != NULL){
                    return $lvsItem->hhid == $item['hhid'] && $lvsItem->redcap_event_name == $item['redcap_event_name'];               
                }
                else{

                }
            });

            return  $visitData->count() > 0 ? true : false;
        });
        $b24modate = $redCapData->filter(function($item) use ($lvs){
            $visitData = $lvs->filter(function($lvsItem) use ($item){
                if($lvsItem->b24modate == NULL && $item['b24modate'] != NULL){
                    return $lvsItem->hhid == $item['hhid'] && $lvsItem->redcap_event_name == $item['redcap_event_name'];               
                }
                else{

                }
            });

            return  $visitData->count() > 0 ? true : false;
        });
        $hair24modate = $redCapData->filter(function($item) use ($lvs){
            $visitData = $lvs->filter(function($lvsItem) use ($item){
                if($lvsItem->hair24modate == NULL && $item['hair24modate'] != NULL){
                    return $lvsItem->hhid == $item['hhid'] && $lvsItem->redcap_event_name == $item['redcap_event_name'];               
                }
                else{

                }
            });

            return  $visitData->count() > 0 ? true : false;
        });
        $urine24date = $redCapData->filter(function($item) use ($lvs){
            $visitData = $lvs->filter(function($lvsItem) use ($item){
                if($lvsItem->urine24date == NULL && $item['urine24date'] != NULL){
                    return $lvsItem->hhid == $item['hhid'] && $lvsItem->redcap_event_name == $item['redcap_event_name'];               
                }
                else{

                }
            });

            return  $visitData->count() > 0 ? true : false;
        });
        $echo2yrhairdate = $redCapData->filter(function($item) use ($lvs){
            $visitData = $lvs->filter(function($lvsItem) use ($item){
                if($lvsItem->echo2yrhairdate == NULL && $item['echo2yrhairdate'] != NULL){
                    return $lvsItem->hhid == $item['hhid'] && $lvsItem->redcap_event_name == $item['redcap_event_name'];               
                }
                else{

                }
            });

            return  $visitData->count() > 0 ? true : false;
        });
        $echo2yrurinedate = $redCapData->filter(function($item) use ($lvs){
            $visitData = $lvs->filter(function($lvsItem) use ($item){
                if($lvsItem->echo2yrurinedate == NULL && $item['echo2yrurinedate'] != NULL){
                    return $lvsItem->hhid == $item['hhid'] && $lvsItem->redcap_event_name == $item['redcap_event_name'];               
                }
                else{

                }
            });

            return  $visitData->count() > 0 ? true : false;
        });
        $echo2yrsbdate = $redCapData->filter(function($item) use ($lvs){
            $visitData = $lvs->filter(function($lvsItem) use ($item){
                if($lvsItem->echo2yrsbdate == NULL && $item['echo2yrsbdate'] != NULL){
                    return $lvsItem->hhid == $item['hhid'] && $lvsItem->redcap_event_name == $item['redcap_event_name'];               
                }
                else{

                }
            });

            return  $visitData->count() > 0 ? true : false;
        });
        $echo2yrvenousblooddate = $redCapData->filter(function($item) use ($lvs){
            $visitData = $lvs->filter(function($lvsItem) use ($item){
                if($lvsItem->echo2yrvenousblooddate == NULL && $item['echo2yrvenousblooddate'] != NULL){
                    return $lvsItem->hhid == $item['hhid'] && $lvsItem->redcap_event_name == $item['redcap_event_name'];               
                }
                else{

                }
            });

            return  $visitData->count() > 0 ? true : false;
        });
        $sb2430date = $redCapData->filter(function($item) use ($lvs){
            $visitData = $lvs->filter(function($lvsItem) use ($item){
                if($lvsItem->sb2430date == NULL && $item['sb2430date'] != NULL){
                    return $lvsItem->hhid == $item['hhid'] && $lvsItem->redcap_event_name == $item['redcap_event_name'];               
                }
                else{

                }
            });

            return  $visitData->count() > 0 ? true : false;
        });
        $vb2430date = $redCapData->filter(function($item) use ($lvs){
            $visitData = $lvs->filter(function($lvsItem) use ($item){
                if($lvsItem->vb2430date == NULL && $item['vb2430date'] != NULL){
                    return $lvsItem->hhid == $item['hhid'] && $lvsItem->redcap_event_name == $item['redcap_event_name'];               
                }
                else{

                }
            });

            return  $visitData->count() > 0 ? true : false;
        });
        $thirtymonthsbdate= $redCapData->filter(function($item) use ($lvs){
            $visitData = $lvs->filter(function($lvsItem) use ($item){
                if($lvsItem->thirtymonthsbdate == NULL && $item['thirtymonthsbdate'] != NULL){
                    return $lvsItem->hhid == $item['hhid'] && $lvsItem->redcap_event_name == $item['redcap_event_name'];               
                }
                else{

                }
            });

            return  $visitData->count() > 0 ? true : false;
        });
        $venousblood30modate= $redCapData->filter(function($item) use ($lvs){
            $visitData = $lvs->filter(function($lvsItem) use ($item){
                if($lvsItem->venousblood30modate == NULL && $item['venousblood30modate'] != NULL){
                    return $lvsItem->hhid == $item['hhid'] && $lvsItem->redcap_event_name == $item['redcap_event_name'];               
                }
                else{

                }
            });

            return  $visitData->count() > 0 ? true : false;
        });
        $saliva30mohomedate = $redCapData->filter(function($item) use ($lvs){
            $visitData = $lvs->filter(function($lvsItem) use ($item){
                if($lvsItem->saliva30mohomedate == NULL && $item['saliva30mohomedate'] != NULL){
                    return $lvsItem->hhid == $item['hhid'] && $lvsItem->redcap_event_name == $item['redcap_event_name'];               
                }
                else{

                }
            });

            return  $visitData->count() > 0 ? true : false;
        });
        $thirtymonthdustdate = $redCapData->filter(function($item) use ($lvs){
            $visitData = $lvs->filter(function($lvsItem) use ($item){
                if($lvsItem->thirtymonthdustdate == NULL && $item['thirtymonthdustdate'] != NULL){
                    return $lvsItem->hhid == $item['hhid'] && $lvsItem->redcap_event_name == $item['redcap_event_name'];               
                }
                else{

                }
            });

            return  $visitData->count() > 0 ? true : false;
        });
        $buccal_swab_date_30mnth = $redCapData->filter(function($item) use ($lvs){
            $visitData = $lvs->filter(function($lvsItem) use ($item){
                if($lvsItem->buccal_swab_date_30mnth == NULL && $item['buccal_swab_date_30mnth'] != NULL){
                    return $lvsItem->hhid == $item['hhid'] && $lvsItem->redcap_event_name == $item['redcap_event_name'];               
                }
                else{

                }
            });

            return  $visitData->count() > 0 ? true : false;
        });
        $nasal_swab_date_30_mnth = $redCapData->filter(function($item) use ($lvs){
            $visitData = $lvs->filter(function($lvsItem) use ($item){
                if($lvsItem->nasal_swab_date_30_mnth == NULL && $item['nasal_swab_date_30_mnth'] != NULL){
                    return $lvsItem->hhid == $item['hhid'] && $lvsItem->redcap_event_name == $item['redcap_event_name'];               
                }
                else{

                }
            });

            return  $visitData->count() > 0 ? true : false;
        });
        $spotblood42modate = $redCapData->filter(function($item) use ($lvs){
            $visitData = $lvs->filter(function($lvsItem) use ($item){
                if($lvsItem->spotblood42modate == NULL && $item['spotblood42modate'] != NULL){
                    return $lvsItem->hhid == $item['hhid'] && $lvsItem->redcap_event_name == $item['redcap_event_name'];               
                }
                else{

                }
            });

            return  $visitData->count() > 0 ? true : false;
        });
        $urine42modate = $redCapData->filter(function($item) use ($lvs){
            $visitData = $lvs->filter(function($lvsItem) use ($item){
                if($lvsItem->urine42modate== NULL && $item['urine42modate'] != NULL){
                    return $lvsItem->hhid == $item['hhid'] && $lvsItem->redcap_event_name == $item['redcap_event_name'];               
                }
                else{

                }
            });

            return  $visitData->count() > 0 ? true : false;
        });
        $hair42modate = $redCapData->filter(function($item) use ($lvs){
            $visitData = $lvs->filter(function($lvsItem) use ($item){
                if($lvsItem->hair42modate == NULL && $item['hair42modate'] != NULL){
                    return $lvsItem->hhid == $item['hhid'] && $lvsItem->redcap_event_name == $item['redcap_event_name'];               
                }
                else{

                }
            });

            return  $visitData->count() > 0 ? true : false;
        });
        $venousblood42modate = $redCapData->filter(function($item) use ($lvs){
            $visitData = $lvs->filter(function($lvsItem) use ($item){
                if($lvsItem->venousblood42modate == NULL && $item['venousblood42modate'] != NULL){
                    return $lvsItem->hhid == $item['hhid'] && $lvsItem->redcap_event_name == $item['redcap_event_name'];               
                }
                else{

                }
            });

            return  $visitData->count() > 0 ? true : false;
        });
        $saliva42modate = $redCapData->filter(function($item) use ($lvs){
            $visitData = $lvs->filter(function($lvsItem) use ($item){
                if($lvsItem->saliva42modate == NULL && $item['saliva42modate'] != NULL){
                    return $lvsItem->hhid == $item['hhid'] && $lvsItem->redcap_event_name == $item['redcap_event_name'];               
                }
                else{

                }
            });

            return  $visitData->count() > 0 ? true : false;
        });
        $saliva42mohomedate = $redCapData->filter(function($item) use ($lvs){
            $visitData = $lvs->filter(function($lvsItem) use ($item){
                if($lvsItem->saliva42mohomedate == NULL && $item['saliva42mohomedate'] != NULL){
                    return $lvsItem->hhid == $item['hhid'] && $lvsItem->redcap_event_name == $item['redcap_event_name'];               
                }
                else{

                }
            });

            return  $visitData->count() > 0 ? true : false;
        });
        $buccalswab_date = $redCapData->filter(function($item) use ($lvs){
            $visitData = $lvs->filter(function($lvsItem) use ($item){
                if($lvsItem->buccalswab_date == NULL && $item['buccalswab_date'] != NULL){
                    return $lvsItem->hhid == $item['hhid'] && $lvsItem->redcap_event_name == $item['redcap_event_name'];               
                }
                else{

                }
            });

            return  $visitData->count() > 0 ? true : false;
        });
        $nasalswab_date = $redCapData->filter(function($item) use ($lvs){
            $visitData = $lvs->filter(function($lvsItem) use ($item){
                if($lvsItem->nasalswab_date == NULL && $item['nasalswab_date'] != NULL){
                    return $lvsItem->hhid == $item['hhid'] && $lvsItem->redcap_event_name == $item['redcap_event_name'];               
                }
                else{

                }
            });

            return  $visitData->count() > 0 ? true : false;
        });
        $spotblood60modate = $redCapData->filter(function($item) use ($lvs){
            $visitData = $lvs->filter(function($lvsItem) use ($item){
                if($lvsItem->spotblood60modate == NULL && $item['spotblood60modate'] != NULL){
                    return $lvsItem->hhid == $item['hhid'] && $lvsItem->redcap_event_name == $item['redcap_event_name'];               
                }
                else{

                }
            });

            return  $visitData->count() > 0 ? true : false;
        });
        $urine60modate = $redCapData->filter(function($item) use ($lvs){
            $visitData = $lvs->filter(function($lvsItem) use ($item){
                if($lvsItem->urine60modate == NULL && $item['urine60modate'] != NULL){
                    return $lvsItem->hhid == $item['hhid'] && $lvsItem->redcap_event_name == $item['redcap_event_name'];               
                }
                else{

                }
            });

            return  $visitData->count() > 0 ? true : false;
        });
        $hair60modate = $redCapData->filter(function($item) use ($lvs){
            $visitData = $lvs->filter(function($lvsItem) use ($item){
                if($lvsItem->hair60modate == NULL && $item['hair60modate'] != NULL){
                    return $lvsItem->hhid == $item['hhid'] && $lvsItem->redcap_event_name == $item['redcap_event_name'];               
                }
                else{

                }
            });

            return  $visitData->count() > 0 ? true : false;
        });
        $venousblood60modate = $redCapData->filter(function($item) use ($lvs){
            $visitData = $lvs->filter(function($lvsItem) use ($item){
                if($lvsItem->venousblood60modate == NULL && $item['venousblood60modate'] != NULL){
                    return $lvsItem->hhid == $item['hhid'] && $lvsItem->redcap_event_name == $item['redcap_event_name'];               
                }
                else{

                }
            });

            return  $visitData->count() > 0 ? true : false;
        });
        $labsaliva60modate = $redCapData->filter(function($item) use ($lvs){
            $visitData = $lvs->filter(function($lvsItem) use ($item){
                if($lvsItem->labsaliva60modate == NULL && $item['labsaliva60modate'] != NULL){
                    return $lvsItem->hhid == $item['hhid'] && $lvsItem->redcap_event_name == $item['redcap_event_name'];               
                }
                else{

                }
            });

            return  $visitData->count() > 0 ? true : false;
        });
        $homesaliva60modate = $redCapData->filter(function($item) use ($lvs){
            $visitData = $lvs->filter(function($lvsItem) use ($item){
                if($lvsItem->homesaliva60modate == NULL && $item['homesaliva60modate'] != NULL){
                    return $lvsItem->hhid == $item['hhid'] && $lvsItem->redcap_event_name == $item['redcap_event_name'];               
                }
                else{

                }
            });

            return  $visitData->count() > 0 ? true : false;
        });
        $echo4to5yrspotblooddate = $redCapData->filter(function($item) use ($lvs){
            $visitData = $lvs->filter(function($lvsItem) use ($item){
                if($lvsItem->echo4to5yrspotblooddate == NULL && $item['echo4to5yrspotblooddate'] != NULL){
                    return $lvsItem->hhid == $item['hhid'] && $lvsItem->redcap_event_name == $item['redcap_event_name'];               
                }
                else{

                }
            });

            return  $visitData->count() > 0 ? true : false;
        });
        $echo4to5yrurinedate = $redCapData->filter(function($item) use ($lvs){
            $visitData = $lvs->filter(function($lvsItem) use ($item){
                if($lvsItem->echo4to5yrurinedate == NULL && $item['echo4to5yrurinedate'] != NULL){
                    return $lvsItem->hhid == $item['hhid'] && $lvsItem->redcap_event_name == $item['redcap_event_name'];               
                }
                else{

                }
            });

            return  $visitData->count() > 0 ? true : false;
        });
        $echo4to5yrhairdate = $redCapData->filter(function($item) use ($lvs){
            $visitData = $lvs->filter(function($lvsItem) use ($item){
                if($lvsItem->echo4to5yrhairdate == NULL && $item['echo4to5yrhairdate'] != NULL){
                    return $lvsItem->hhid == $item['hhid'] && $lvsItem->redcap_event_name == $item['redcap_event_name'];               
                }
                else{

                }
            });

            return  $visitData->count() > 0 ? true : false;
        });
        $echo4to5yrvenousblooddate = $redCapData->filter(function($item) use ($lvs){
            $visitData = $lvs->filter(function($lvsItem) use ($item){
                if($lvsItem->echo4to5yrvenousblooddate == NULL && $item['echo4to5yrvenousblooddate'] != NULL){
                    return $lvsItem->hhid == $item['hhid'] && $lvsItem->redcap_event_name == $item['redcap_event_name'];               
                }
                else{

                }
            });

            return  $visitData->count() > 0 ? true : false;
        });
        $echo7to8yrhairdate = $redCapData->filter(function($item) use ($lvs){
            $visitData = $lvs->filter(function($lvsItem) use ($item){
                if($lvsItem->echo7to8yrhairdate == NULL && $item['echo7to8yrhairdate'] != NULL){
                    return $lvsItem->hhid == $item['hhid'] && $lvsItem->redcap_event_name == $item['redcap_event_name'];               
                }
                else{

                }
            });

            return  $visitData->count() > 0 ? true : false;
        });
        $echo7yrto8yrsbdate = $redCapData->filter(function($item) use ($lvs){
            $visitData = $lvs->filter(function($lvsItem) use ($item){
                if($lvsItem->echo7yrto8yrsbdate == NULL && $item['echo7yrto8yrsbdate'] != NULL){
                    return $lvsItem->hhid == $item['hhid'] && $lvsItem->redcap_event_name == $item['redcap_event_name'];               
                }
                else{

                }
            });

            return  $visitData->count() > 0 ? true : false;
        });
        $echo7yrto8yrvbdate = $redCapData->filter(function($item) use ($lvs){
            $visitData = $lvs->filter(function($lvsItem) use ($item){
                if($lvsItem->echo7yrto8yrvbdate == NULL && $item['echo7yrto8yrvbdate'] != NULL){
                    return $lvsItem->hhid == $item['hhid'] && $lvsItem->redcap_event_name == $item['redcap_event_name'];               
                }
                else{

                }
            });

            return  $visitData->count() > 0 ? true : false;
        });
        $echo7yrto8yrurinedate = $redCapData->filter(function($item) use ($lvs){
            $visitData = $lvs->filter(function($lvsItem) use ($item){
                if($lvsItem->echo7yrto8yrurinedate == NULL && $item['echo7yrto8yrurinedate'] != NULL){
                    return $lvsItem->hhid == $item['hhid'] && $lvsItem->redcap_event_name == $item['redcap_event_name'];               
                }
                else{

                }
            });

            return  $visitData->count() > 0 ? true : false;
        });
        $echotooth1date = $redCapData->filter(function($item) use ($lvs){
            $visitData = $lvs->filter(function($lvsItem) use ($item){
                if($lvsItem->echotooth1date == NULL && $item['echotooth1date'] != NULL){
                    return $lvsItem->hhid == $item['hhid'] && $lvsItem->redcap_event_name == $item['redcap_event_name'];               
                }
                else{

                }
            });

            return  $visitData->count() > 0 ? true : false;
        });
        $echotooth2date = $redCapData->filter(function($item) use ($lvs){
            $visitData = $lvs->filter(function($lvsItem) use ($item){
                if($lvsItem->echotooth2date == NULL && $item['echotooth2date'] != NULL){
                    return $lvsItem->hhid == $item['hhid'] && $lvsItem->redcap_event_name == $item['redcap_event_name'];               
                }
                else{

                }
            });

            return  $visitData->count() > 0 ? true : false;
        });
        $echotooth3date = $redCapData->filter(function($item) use ($lvs){
            $visitData = $lvs->filter(function($lvsItem) use ($item){
                if($lvsItem->echotooth3date == NULL && $item['echotooth3date'] != NULL){
                    return $lvsItem->hhid == $item['hhid'] && $lvsItem->redcap_event_name == $item['redcap_event_name'];               
                }
                else{

                }
            });

            return  $visitData->count() > 0 ? true : false;
        });
        $echotooth4date = $redCapData->filter(function($item) use ($lvs){
            $visitData = $lvs->filter(function($lvsItem) use ($item){
                if($lvsItem->echotooth4date == NULL && $item['echotooth4date'] != NULL){
                    return $lvsItem->hhid == $item['hhid'] && $lvsItem->redcap_event_name == $item['redcap_event_name'];               
                }
                else{

                }
            });

            return  $visitData->count() > 0 ? true : false;
        });
        $echotooth5date = $redCapData->filter(function($item) use ($lvs){
            $visitData = $lvs->filter(function($lvsItem) use ($item){
                if($lvsItem->echotooth5date == NULL && $item['echotooth5date'] != NULL){
                    return $lvsItem->hhid == $item['hhid'] && $lvsItem->redcap_event_name == $item['redcap_event_name'];               
                }
                else{

                }
            });

            return  $visitData->count() > 0 ? true : false;
        });
        //return $outputs;
        // dd($outputs, $this->lvresults());
        return view('combo.index')->with([
            'redCapData' => $redCapData, 
            'lvs' => $lvs,
            'redCapDataMissingLvData' => $redCapDataMissingLvData,
            'twotsb' => $twotsb,
            'twotudate' => $twotudate,
            'maternalhairprenataldate' => $maternalhairprenataldate,
            'blmaternalblooddate' => $blmaternalblooddate,
            'dustdate' => $dustdate,
            'cortdate' => $cortdate,
            'threetudate' => $threetudate,
            'threetsbdate' => $threetsbdate,
            'threetgreentoptube_date' => $threetgreentoptube_date,
            'birthtissuedate' => $birthtissuedate,
            'placentatdate' => $placentatdate,
            'corddate' => $corddate,
            'cordbdate' => $cordbdate,
            'birth_green_tube_date' => $birth_green_tube_date,
            'childconsentdate' => $childconsentdate,
            'mhairdate' => $mhairdate,
            'brstmlkdate' => $brstmlkdate,
            'ihairdate' => $ihairdate,
            'isbdate' => $isbdate,
            'buccal_swab_date_1mnth' => $buccal_swab_date_1mnth,
            'nasal_swab_date_1mnth' => $nasal_swab_date_1mnth,
            'isalivahomedate' => $isalivahomedate,
            'isalivalabdate' => $isalivalabdate,
            'ihair6date' => $ihair6date,
            'buccal_swab_date_6mnth' => $buccal_swab_date_6mnth,
            'nasal_swab_date_6mnth' => $nasal_swab_date_6mnth,
            'sbdate12mo' => $sbdate12mo,
            'ivblood12modate' => $ivblood12modate,
            'sb18modate' => $sb18modate,
            'sb24modate' => $sb24modate,
            'b24modate' => $b24modate,
            'hair24modate' => $hair24modate,
            'urine24date' => $urine24date,
            'echo2yrhairdate' => $echo2yrhairdate,
            'echo2yrurinedate' => $echo2yrurinedate,
            'echo2yrsbdate' => $echo2yrsbdate,
            'echo2yrvenousblooddate' => $echo2yrvenousblooddate,
            'sb2430date' => $sb2430date,
            'vb2430date' => $vb2430date,
            'thirtymonthsbdate' => $thirtymonthsbdate,
            'venousblood30modate' => $venousblood30modate,
            'saliva30mohomedate' => $saliva30mohomedate,
            'thirtymonthdustdate' => $thirtymonthdustdate,
            'buccal_swab_date_30mnth' => $buccal_swab_date_30mnth,
            'nasal_swab_date_30_mnth' => $nasal_swab_date_30_mnth,
            'spotblood42modate' => $spotblood42modate,
            'urine42modate' => $urine42modate,
            'hair42modate' => $hair42modate,
            'venousblood42modate' => $venousblood42modate,
            'saliva42modate' => $saliva42modate,
            'saliva42mohomedate' => $saliva42mohomedate,
            'buccalswab_date' => $buccalswab_date,
            'nasalswab_date' => $nasalswab_date,
            'spotblood60modate' => $spotblood60modate,
            'urine60modate' => $urine60modate,
            'hair60modate' => $hair60modate,
            'venousblood60modate' => $venousblood60modate,
            'labsaliva60modate' => $labsaliva60modate,
            'homesaliva60modate' => $homesaliva60modate,
            'echo4to5yrspotblooddate' => $echo4to5yrspotblooddate,
            'echo4to5yrurinedate' => $echo4to5yrurinedate,
            'echo4to5yrhairdate' => $echo4to5yrhairdate,
            'echo4to5yrvenousblooddate' => $echo4to5yrvenousblooddate,
            'echo7to8yrhairdate' => $echo7to8yrhairdate,
            'echo7yrto8yrsbdate' => $echo7yrto8yrsbdate,
            'echo7yrto8yrvbdate' => $echo7yrto8yrvbdate,
            'echo7yrto8yrurinedate' => $echo7yrto8yrurinedate,
            'echotooth1date' => $echotooth1date,
            'echotooth2date' => $echotooth2date,
            'echotooth3date' => $echotooth3date,
            'echotooth4date' => $echotooth4date,
            'echotooth5date' => $echotooth5date            
            ]);
        curl_close($ch);

    }
    public function callMyAPI2(){
        $data = array(
            'token' => '8D9E5A5083FE5B8101EA045CD6CC8C14',
            'content' => 'report',
            'format' => 'json',
            'report_id' => '377',
            'csvDelimiter' => '',
            'rawOrLabel' => 'raw',
            'rawOrLabelHeaders' => 'label',
            'exportCheckboxLabel' => 'true',
            'returnFormat' => 'json'
        );
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'http://localhost/redcap/api/');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_VERBOSE, 0);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_AUTOREFERER, true);
        curl_setopt($ch, CURLOPT_MAXREDIRS, 10);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
        curl_setopt($ch, CURLOPT_FRESH_CONNECT, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data, '', '&'));
        $output = curl_exec($ch);
        //print $output;
        $outputs = json_decode($output, true);
        //return $outputs;
        return view('redcap.index')->with([
            'outputs'=>$outputs, 
            ]);
        curl_close($ch);

    }
}
