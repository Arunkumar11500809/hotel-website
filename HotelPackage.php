<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class HotelPackage extends Model
{
    use SoftDeletes;

    protected $table = 'hotel_package';

    protected $fillable = [
        'id',
        'title',
        'detail',
        'price',
        'package_id',
        'hostel_id',
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    public function get($search = []) {
        $fields = [
            'hotel_package.*',
            'package_master.package_name',
            'hotel_master.hotel_name',
            'hotel_master.address',
        ];

        $filter = 1;
        if(isset($search) && count($search) > 0) {
            $f1 = (isset($search['package_id']) && $search['package_id'] != '') ?
                " and hotel_package.package_id = '" . $search['package_id'] . "'" : '';

            $filter .= $f1;
        }

        return $this
            ->whereRaw($filter)
            ->leftJoin('hotel_master', 'hotel_master.id', '=', 'hotel_package.hotel_id')
            ->leftJoin('package_master', 'package_master.id', '=', 'hotel_package.package_id')
            ->get($fields);
    }

    public function search($hotelId = null, $packageId = null)
    {
        $fields = [
            'hotel_package.*',
        ];

        return $this
            ->where(['hotel_id' => $hotelId, 'package_id' => $packageId])
            ->get($fields);
    }
}
