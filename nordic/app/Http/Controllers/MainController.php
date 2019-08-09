<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Transaction;
use App\Blog;
use App\Invoice;
use PDF;
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
            // $arrivaldate = strtotime($data['arrival']);
            // $departuredate = strtotime($data['depart']);
            // $diff = $departuredate - $arrivaldate;
            // $number = floor($diff/(60*60*24));
            // $amount = 25500 * $number * $data['room_no'];
            // // dd($amount);
            // $invoice = new Invoice;
            // $invoice->name = $data['name'];
            // $invoice->email = $data['email'];
            // $invoice->phone = $data['tel'];
            // $invoice->room_type = "Deluxe Room";
            // $invoice->room_no = $data['room_no'];
            // $invoice->guest = $data['guest'];
            // $invoice->arrival = $data['arrival'];
            // $invoice->depart = $data['depart'];
            // $invoice->invoice_ref = mt_rand(100000, 999999);
            // $invoice->amount = $amount;

            // $invoice->save();
            // return redirect('/invoice');
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
    public function invoice(Request $request) {
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
        return view('invoice');
    }

    // public function pdf() {
    //     $invoice = Invoice::orderBy('created_at','DESC')->first();
    //     view()->share('invoice',$invoice);
    //     $pdf = PDF::loadView('invoicePdf');
    //     return $pdf->download('invoice.pdf');
    // }

    public function news() {
        $blogs = Blog::select('id', 'title', 'author', 'date', 'comment', 'postcontent', 'content')->get();
        return view('news')->with(compact('blogs'));
    }
}

