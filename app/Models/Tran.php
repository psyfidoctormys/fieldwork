<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tran extends Model {
	use HasFactory;
   
   public static function insertData($data){

      $value=DB::table('lv_T')->where('Sample', $data['Sample'])->get();
      if($value->count() == 0){
         DB::table('lv_T')->insert($data);
      }
   }

}
