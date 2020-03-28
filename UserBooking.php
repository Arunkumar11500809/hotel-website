<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserBooking extends Model
{
    use SoftDeletes;

    protected $table = 'user_booking';

    protected $fillable = [
        'id',
        'package_id',
        'hotel_id',
        'user_id',
        'hotel_package_id',
        'price',
        'no_of_adult',
        'no_of_children',
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    public function store($inputs, $id = null)
    {
        if($id) {
            $this->find($id)->update($inputs);
            return $id;
        }
        else {
            return $this->create($inputs)->id;
        }
    }

    public function get($userId) {
        $fields = [
            'user_booking.*',
            'hotel_master.hotel_name',
            'hotel_master.address',
            'package_master.package_name',
            'hotel_package.title'
        ];

        return $this
            ->leftJoin('hotel_master', 'hotel_master.id', '=', 'user_booking.hotel_id')
            ->leftJoin('package_master', 'package_master.id', '=', 'user_booking.package_id')
            ->leftJoin('hotel_package', 'hotel_package.id', '=', 'user_booking.hotel_package_id')
            ->where('user_id', $userId)
            ->get($fields);
    }
}
