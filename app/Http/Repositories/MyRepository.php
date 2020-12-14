<?php

namespace App\Repositories;
use App\Models\Combo;

class MyRepository implements MyDataInterface {

    public function lvresults(){
        return Combo::all();
    }

    //x == primary key
    public function find($x) {
        return LV::find($x);
    }

    public function sample($id) {
        return LV::where('sample', $id);
    }

}