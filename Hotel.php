<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Request;

class Hotel extends Model
{
    use SoftDeletes;

    protected $table = 'hotel_master';

    protected $fillable  = [
        'id',
        'hotel_name',
        'contact_number',
        'image',
        'address',
        'total_rooms',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function getHotel()
    {
        $inputs = Input::all();
        $filter = 1;
        if(isset($inputs['keywords']) && $inputs['keywords'] != '') {
            $filter .= " and hotel_name like '%".$inputs['keywords']."%'";
        }
        return $this->whereRaw($filter)->get();
    }

    public function service($heading = false)
    {
        $result = $this->get();

        if (isset($result) && count($result) > 0) {
            foreach ($result as $row) {
                $service[$row->id] = $row->hotel_name;
            }
        }

        if($heading) {
            return ['' => '-Select Hotel-'] + $service;
        }
        return $service;
    }
}
