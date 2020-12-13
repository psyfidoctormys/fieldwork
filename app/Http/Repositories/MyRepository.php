<?php

namespace App\Repositories;
use App\Models\Lv;

class MyRepository implements MyDataInterface {

    public function lvresults(){
        return Lv::all();
    }

    //x == primary key
    public function find($x) {
        return LV::find($x);
    }

    public function sample($id) {
        return LV::where('sample_id', $id);
    }

}