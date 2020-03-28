<?php

namespace App\Http\Controllers;

use App\Hotel;
use App\HotelPackage;
use App\Packages;
use App\User;
use App\UserBooking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class FrontController extends Controller
{
    public function main() {
        return view('main');
    }
    public function aboutUs() {
        return view('about-us');
    }

    public function packages($packageId = null)
    {
        $hps = (new HotelPackage)->get(['package_id' => $packageId]);
        $packages = [];
        if(isset($hps) && count($hps) > 0) {
            foreach($hps as $key => $p) {
                $packages[$p->package_name][] = $p->toArray();
            }
        }

        return view('packages', compact('packages'));
    }

    public function hotels() {
        return view('hotels');
    }

    public function contactUs() {
        return view('contact-us');
    }

    public function sendMail() {

    }

    public function booking($hpId = null) {
        $hotelId = $packageId = null;
        $hotel = (new Hotel)->service();
        $package = (new Packages)->service();
        if($hpId) {
            $hotelPackage = (new HotelPackage)->find($hpId);
            if($hotelPackage) {
                $hotelId = $hotelPackage->hotel_id;
                $packageId = $hotelPackage->package_id;
            }
        }
        return view('booking', compact('hotelId', 'packageId', 'hotel', 'package'));
    }

    public function saveBooking(Request $request) {
        $inputs = $request->all();
        $hotelPackage = (new HotelPackage)->find($inputs['hotel_package_id']);
        $inputs['price'] = $hotelPackage->price;
        if(Auth::check()) {
            $inputs['user_id'] = Auth::id();
            (new UserBooking)->store($inputs);
        }
        else {
            $user = [
                'name' => $inputs['name'],
                'email' => $inputs['email'],
                'password' => Hash::make($inputs['password'])
            ];
            $inputs['user_id']  = (new User)->create($user)->id;
            (new UserBooking)->store($inputs);

            $credentials = array('email' => $inputs['email'], 'password' => $inputs['password']);
            if(Auth::attempt($credentials, true)){
                return Redirect::to('user-booking');
            }
        }
        return redirect('user-booking')->with('success', 'Hotel package booked successfully');
    }

    public function select($name = '', $array = [], $default = null, $attr = []) {
        $option = '';
        if(isset($attr) && is_array($attr) && count($attr) > 0) {
            foreach($attr as $key => $value) {
                $option .= $key.'="'.$value.'" ';
            }
        }

        $select = '<select name="'.$name.'" '.$option.'>';
        if(isset($array) && is_array($array) && count($array) > 0) {
            foreach($array as $key => $value) {
                $selected = ($key == $default) ? 'selected="selected"': '';
                $select .= '<option value="'.$key.'" '.$selected.'>'.$value.'</option>';
            }
        }
        $select .= '</select>';
        return $select;
    }

    public function ajax($hotelId = null, $packageId = null) {
        $array = (new HotelPackage)->search($hotelId, $packageId);
        $options = '';
        if(isset($array) && count($array) > 0) {
            foreach($array as $key => $value) {
                $options .= '<option value="'.$value->id.'">'.$value->title.' [Price - '.$value->price.' Rs]</option>';
            }
        }

        return response()->json(['success' => true, 'result' => $options]);
    }

    public function userBooking() {
        $userId = Auth::id();
        $result = (new UserBooking)->get($userId);

        return view('user-booking', compact('result'));
    }
}
