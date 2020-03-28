<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Packages extends Model
{
    use SoftDeletes;

    protected $table = 'package_master';

    public function get() {
        return $this->all();
    }

    public function service($heading = false)
    {
        $result = $this->get();
        if (isset($result) && count($result) > 0) {
            foreach ($result as $row) {
                $service[$row->id] = $row->package_name;
            }
        }

        if($heading) {
            return ['' => '-Select Package-'] + $service;
        }
        return $service;
    }
}
