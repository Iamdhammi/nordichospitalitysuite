<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Transaction;
class MainController extends Controller
{
    public function home() {
        return view('welcome');
    }

    public function about() {
        return view('about');
    }

    public function gallery() {
        return view('gallery');
    }

    public function contact() {
        return view('contact');
    }

    public function rooms() {
        return view('rooms');
    }

    public function deluxe() {
        return view('deluxe');
    }
    public function deluxeBalcony() {
        return view('deluxeBalcony');
    }
    public function nordicSuite() {
        return view('nordicsuite');
    }
    public function nordicSuiteBalcony() {
        return view('nordicSuiteBalcony');
    }
    public function standard() {
        return view('standard');
    }
    public function terms() {
        return view('terms');
    }
    public function dreservation(Request $request) {
        if($request->isMethod('post')) {
            $data = $request->get('transaction');
            $transaction = new Transaction;
            $transaction->name = $data['name'];
            $transaction->email = $data['email'];
            $transaction->phone = $data['tel'];
            $transaction->room_type = $data['room_type'];
            $transaction->room_no = $data['room_no'];
            $transaction->guests = $data['guests'];
            $transaction->arrival = $data['arrival'];
            $transaction->depart = $data['depart'];
            $transaction->payment_ref = $data['ref'];
            $transaction->payment_id = $data['id'];
            $transaction->amount = $data['total'];

            $transaction->save();
        }
        return view('deluxereservation');
    }
    public function dbreservation(Request $request) {
        if($request->isMethod('post')) {
            $data = $request->get('transaction');
            $transaction = new Transaction;
            $transaction->name = $data['name'];
            $transaction->email = $data['email'];
            $transaction->phone = $data['tel'];
            $transaction->room_type = $data['room_type'];
            $transaction->room_no = $data['room_no'];
            $transaction->guests = $data['guests'];
            $transaction->arrival = $data['arrival'];
            $transaction->depart = $data['depart'];
            $transaction->payment_ref = $data['ref'];
            $transaction->payment_id = $data['id'];
            $transaction->amount = $data['total'];

            $transaction->save();
        }
        return view('deluxebalconyreservation');
    }
    public function nsreservation(Request $request) {
        if($request->isMethod('post')) {
            $data = $request->get('transaction');
            $transaction = new Transaction;
            $transaction->name = $data['name'];
            $transaction->email = $data['email'];
            $transaction->phone = $data['tel'];
            $transaction->room_type = $data['room_type'];
            $transaction->room_no = $data['room_no'];
            $transaction->guests = $data['guests'];
            $transaction->arrival = $data['arrival'];
            $transaction->depart = $data['depart'];
            $transaction->payment_ref = $data['ref'];
            $transaction->payment_id = $data['id'];
            $transaction->amount = $data['total'];

            $transaction->save();
        }
        return view('nordicsuitereservation');
    }
    public function nsbreservation(Request $request) {
        if($request->isMethod('post')) {
            $data = $request->get('transaction');
            $transaction = new Transaction;
            $transaction->name = $data['name'];
            $transaction->email = $data['email'];
            $transaction->phone = $data['tel'];
            $transaction->room_type = $data['room_type'];
            $transaction->room_no = $data['room_no'];
            $transaction->guests = $data['guests'];
            $transaction->arrival = $data['arrival'];
            $transaction->depart = $data['depart'];
            $transaction->payment_ref = $data['ref'];
            $transaction->payment_id = $data['id'];
            $transaction->amount = $data['total'];

            $transaction->save();
        }
        return view('nordicsuitebalconyreservation');
    }
    public function sreservation(Request $request) {
        if($request->isMethod('post')) {
            $data = $request->get('transaction');
            $transaction = new Transaction;
            $transaction->name = $data['name'];
            $transaction->email = $data['email'];
            $transaction->phone = $data['tel'];
            $transaction->room_type = $data['room_type'];
            $transaction->room_no = $data['room_no'];
            $transaction->guests = $data['guests'];
            $transaction->arrival = $data['arrival'];
            $transaction->depart = $data['depart'];
            $transaction->payment_ref = $data['ref'];
            $transaction->payment_id = $data['id'];
            $transaction->amount = $data['total'];

            $transaction->save();
        }
        return view('standardreservation');
    }
    public function invoice() {

        return view('invoice');
    }
}

