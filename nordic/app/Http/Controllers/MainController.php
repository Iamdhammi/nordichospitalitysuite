<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Transaction;
use App\Blog;
use App\Room;
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
            $data = $request->all();
            // $transaction = new Transaction;
            // $transaction->name = $data['name'];
            // $transaction->email = $data['email'];
            // $transaction->phone = $data['tel'];
            // $transaction->room_type = $data['room_type'];
            // $transaction->room_no = $data['room_no'];
            // $transaction->guests = $data['guests'];
            // $transaction->arrival = $data['arrival'];
            // $transaction->depart = $data['depart'];
            // $transaction->payment_ref = $data['ref'];
            // $transaction->payment_id = $data['id'];
            // $transaction->amount = $data['total'];
            // $transaction->save();
            $arrivaldate = strtotime($data['arrival']);
            $departuredate = strtotime($data['depart']);
            $diff = $departuredate - $arrivaldate;
            $number = floor($diff/(60*60*24));
            $amount = 25500 * $number * $data['room_no'];
            // dd($amount);
            $invoice = new Invoice;
            $invoice->name = $data['name'];
            $invoice->email = $data['email'];
            $invoice->phone = $data['tel'];
            $invoice->room_type = "Deluxe Room";
            $invoice->room_no = $data['room_no'];
            $invoice->guests = $data['guest'];
            $invoice->arrival = $data['arrival'];
            $invoice->depart = $data['depart'];
            $invoice->amount = $amount;

            $invoice->save();
            return redirect('/invoice');
        }
        return view('deluxereservation');
    }
    public function dbreservation(Request $request) {
        if($request->isMethod('post')) {
            $data = $request->all();
            // $transaction = new Transaction;
            // $transaction->name = $data['name'];
            // $transaction->email = $data['email'];
            // $transaction->phone = $data['tel'];
            // $transaction->room_type = $data['room_type'];
            // $transaction->room_no = $data['room_no'];
            // $transaction->guests = $data['guests'];
            // $transaction->arrival = $data['arrival'];
            // $transaction->depart = $data['depart'];
            // $transaction->payment_ref = $data['ref'];
            // $transaction->payment_id = $data['id'];
            // $transaction->amount = $data['total'];

            // $transaction->save();
            $arrivaldate = strtotime($data['arrival']);
            $departuredate = strtotime($data['depart']);
            $diff = $departuredate - $arrivaldate;
            $number = floor($diff/(60*60*24));
            $amount = 29500 * $number * $data['room_no'];
            // dd($amount);
            $invoice = new Invoice;
            $invoice->name = $data['name'];
            $invoice->email = $data['email'];
            $invoice->phone = $data['tel'];
            $invoice->room_type = "Deluxe Balcony";
            $invoice->room_no = $data['room_no'];
            $invoice->guests = $data['guest'];
            $invoice->arrival = $data['arrival'];
            $invoice->depart = $data['depart'];
            $invoice->amount = $amount;

            $invoice->save();
            return redirect('/invoice');
        }
        return view('deluxebalconyreservation');
    }
    public function nsreservation(Request $request) {
        if($request->isMethod('post')) {
            $data = $request->all();
            // $transaction = new Transaction;
            // $transaction->name = $data['name'];
            // $transaction->email = $data['email'];
            // $transaction->phone = $data['tel'];
            // $transaction->room_type = $data['room_type'];
            // $transaction->room_no = $data['room_no'];
            // $transaction->guests = $data['guests'];
            // $transaction->arrival = $data['arrival'];
            // $transaction->depart = $data['depart'];
            // $transaction->payment_ref = $data['ref'];
            // $transaction->payment_id = $data['id'];
            // $transaction->amount = $data['total'];

            // $transaction->save();
            $arrivaldate = strtotime($data['arrival']);
            $departuredate = strtotime($data['depart']);
            $diff = $departuredate - $arrivaldate;
            $number = floor($diff/(60*60*24));
            $amount = 35500 * $number * $data['room_no'];
            // dd($amount);
            $invoice = new Invoice;
            $invoice->name = $data['name'];
            $invoice->email = $data['email'];
            $invoice->phone = $data['tel'];
            $invoice->room_type = "Nordic Suite";
            $invoice->room_no = $data['room_no'];
            $invoice->guests = $data['guest'];
            $invoice->arrival = $data['arrival'];
            $invoice->depart = $data['depart'];
            $invoice->amount = $amount;

            $invoice->save();
            return redirect('/invoice');
        }
        return view('nordicsuitereservation');
    }
    public function nsbreservation(Request $request) {
        if($request->isMethod('post')) {
            $data = $request->all();
            // $transaction = new Transaction;
            // $transaction->name = $data['name'];
            // $transaction->email = $data['email'];
            // $transaction->phone = $data['tel'];
            // $transaction->room_type = $data['room_type'];
            // $transaction->room_no = $data['room_no'];
            // $transaction->guests = $data['guests'];
            // $transaction->arrival = $data['arrival'];
            // $transaction->depart = $data['depart'];
            // $transaction->payment_ref = $data['ref'];
            // $transaction->payment_id = $data['id'];
            // $transaction->amount = $data['total'];

            // $transaction->save();
            $arrivaldate = strtotime($data['arrival']);
            $departuredate = strtotime($data['depart']);
            $diff = $departuredate - $arrivaldate;
            $number = floor($diff/(60*60*24));
            $amount = 39500 * $number * $data['room_no'];
            // dd($amount);
            $invoice = new Invoice;
            $invoice->name = $data['name'];
            $invoice->email = $data['email'];
            $invoice->phone = $data['tel'];
            $invoice->room_type = "Nordic Suite Balcony";
            $invoice->room_no = $data['room_no'];
            $invoice->guests = $data['guest'];
            $invoice->arrival = $data['arrival'];
            $invoice->depart = $data['depart'];
            $invoice->amount = $amount;

            $invoice->save();
            return redirect('/invoice');
        }
        return view('nordicsuitebalconyreservation');
    }
    public function sreservation(Request $request) {
        if($request->isMethod('post')) {
            $data = $request->all();
            // $transaction = new Transaction;
            // $transaction->name = $data['name'];
            // $transaction->email = $data['email'];
            // $transaction->phone = $data['tel'];
            // $transaction->room_type = $data['room_type'];
            // $transaction->room_no = $data['room_no'];
            // $transaction->guests = $data['guests'];
            // $transaction->arrival = $data['arrival'];
            // $transaction->depart = $data['depart'];
            // $transaction->payment_ref = $data['ref'];
            // $transaction->payment_id = $data['id'];
            // $transaction->amount = $data['total'];

            // $transaction->save();
            $arrivaldate = strtotime($data['arrival']);
            $departuredate = strtotime($data['depart']);
            $diff = $departuredate - $arrivaldate;
            $number = floor($diff/(60*60*24));
            $amount = 18500 * $number * $data['room_no'];
            // dd($amount);
            $invoice = new Invoice;
            $invoice->name = $data['name'];
            $invoice->email = $data['email'];
            $invoice->phone = $data['tel'];
            $invoice->room_type = "Standard Room";
            $invoice->room_no = $data['room_no'];
            $invoice->guests = $data['guest'];
            $invoice->arrival = $data['arrival'];
            $invoice->depart = $data['depart'];
            $invoice->amount = $amount;

            $invoice->save();
            return redirect('/invoice');
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
            // return redirect('/receipt');
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
    public function receipt() {
        // $receipt = Transaction::select('id', 'name', 'email','phone', 'room_type', 'room_no', 'guests', 'arrival', 'depart', 'payment_ref','payment_id', 'amount');
        return view('receiptpage');
    }
    public function search() {
        $deluxe = Room::where('room_type', 'Deluxe Room')->first();
        $deluxeBalcony = Room::where('room_type', 'Deluxe Balcony')->first();
        $nordic = Room::where('room_type', 'Nordic Suite')->first();
        $nordicBalcony = Room::where('room_type', 'Nordic Suite Balcony')->first();
        $standard = Room::where('room_type', 'Standard Room')->first();
        return view('searchavailability')->with(compact('deluxe', 'deluxeBalcony', 'nordic', 'nordicBalcony', 'standard' ));
    }
}

