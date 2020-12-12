<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tran;
use DB;

class TransController extends Controller{

  public function index(){
    return view('trans.index');
  }

  public function uploadFile(Request $request){

    if ($request->input('submit') != null ){

      $file = $request->file('file');

      // File Details 
      $filename = $file->getClientOriginalName();
      $extension = $file->getClientOriginalExtension();
      $tempPath = $file->getRealPath();
      $fileSize = $file->getSize();
      $mimeType = $file->getMimeType();

      // Valid File Extensions
      $valid_extension = array("csv");

      // 2MB in Bytes
      $maxFileSize = 2097152; 

      // Check file extension
      if(in_array(strtolower($extension),$valid_extension)){

        // Check file size
        if($fileSize <= $maxFileSize){

          // File upload location
          $location = 'uploads';

          // Upload file
          $file->move($location,$filename);

          // Import CSV to Database
          $filepath = public_path($location."/".$filename);

          // Reading file
          $file = fopen($filepath,"r");

          $importData_arr = array();
          $i = 0;

          while (($filedata = fgetcsv($file, 1000, ",")) !== FALSE) {
             $num = count($filedata );
             
             // Skip first row (Remove below comment if you want to skip the first row)
             /*if($i == 0){
                $i++;
                continue; 
             }*/
             for ($c=0; $c < $num; $c++) {
                $importData_arr[$i][] = $filedata [$c];
             }
             $i++;
          }
          fclose($file);

          // Insert to MySQL database
          foreach($importData_arr as $importData){

            $insertData = array(
               "cpCohort"=>$importData[1],
               "clinicalEvent"=>$importData[2],
               "sampleType"=>$importData[3],
               "externalSubject"=>$importData[4],
               "sample"=>$importData[5],
               "currentLocation"=>$importData[6],
               "container"=>$importData[7],
               "preptype"=>$importData[8],
               "treatmentMethod"=>$importData[9],
               "initialMass"=>$importData[10],
               "initialmassUnits"=>$importData[11],
               "initialVolume"=>$importData[12],
               "initialvolumeUnits"=>$importData[13],
               "collection"=>$importData[14],
               "clinicalProtocol"=>$importData[15],
               "storageStatus"=>$importData[16],
               "studysite"=>$importData[17],
               "hhid"=>$importData[18],
               "pregno"=>$importData[19],
               "redcap_event_name"=>$importData[20],
               "colDt"=>$importData[21],
               "visit_sampleType"=>$importData[22]);
            Tran::insertData($insertData);

          }

          Session::flash('message','Import Successful.');
        }else{
          Session::flash('message','File too large. File must be less than 2MB.');
        }

      }else{
         Session::flash('message','Invalid File Extension.');
      }

    }

    // Redirect to index
    return redirect()->action([TransController::class, 'index']);
  }
}