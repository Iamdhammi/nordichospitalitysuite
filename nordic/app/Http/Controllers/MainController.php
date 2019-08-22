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
        $deluxe = Room::where(['room_type' => 'Deluxe Room'])->select('price')->first();
        $nordic = Room::where(['room_type' => 'Nordic Suite'])->select('price')->first();
        $standard = Room::where(['room_type' => 'Standard Room'])->select('price')->first();
        return view('welcome')->with(compact('deluxe', 'nordic', 'standard'));
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
        $deluxe = Room::where('room_type', 'Deluxe Room')->first();
        $deluxeBalcony = Room::where('room_type', 'Deluxe Balcony')->first();
        $nordic = Room::where('room_type', 'Nordic Suite')->first();
        $nordicBalcony = Room::where('room_type', 'Nordic Suite Balcony')->first();
        $standard = Room::where('room_type', 'Standard Room')->first();
        return view('rooms')->with(compact('deluxe', 'deluxeBalcony', 'nordic', 'nordicBalcony', 'standard'));
    }

    public function deluxe() {
        $deluxe = Room::where('room_type', 'Deluxe Room')->first();
        return view('deluxe')->with(compact('deluxe'));
    }
    public function deluxeBalcony() {
        $deluxeBalcony = Room::where('room_type', 'Deluxe Balcony')->first();
        return view('deluxeBalcony')->with(compact('deluxeBalcony'));
    }
    public function nordicSuite() {
        $nordic = Room::where('room_type', 'Nordic Suite')->first();
        return view('nordicsuite')->with(compact('nordic'));
    }
    public function nordicSuiteBalcony() {
        $nordicBalcony = Room::where('room_type', 'Nordic Suite Balcony')->first();
        return view('nordicSuiteBalcony')->with(compact('nordicBalcony'));
    }
    public function standard() {
        $standard = Room::where('room_type', 'Standard Room')->first();
        return view('standard')->with(compact('standard'));
    }
    public function terms() {
        return view('terms');
    }
    public function dreservation(Request $request) {
        $deluxe = Room::where('room_type', 'Deluxe Room')->first();
        if($request->isMethod('post')) {
            $data = $request->all();
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
        return view('deluxereservation')->with(compact('deluxe'));
    }
    public function dbreservation(Request $request) {
        $deluxeBalcony = Room::where('room_type', 'Deluxe Balcony')->first();
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
        return view('deluxebalconyreservation')->with(compact('deluxeBalcony'));
    }
    public function nsreservation(Request $request) {
        $nordic = Room::where('room_type', 'Nordic Suite')->first();
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
        return view('nordicsuitereservation')->with(compact('nordic'));
    }
    public function nsbreservation(Request $request) {
        $nordicBalcony = Room::where('room_type', 'Nordic Suite Balcony')->first();
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
        return view('nordicsuitebalconyreservation')->with(compact('nordicBalcony'));
    }
    public function sreservation(Request $request) {
        $standard = Room::where('room_type', 'Standard Room')->first();
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
        return view('standardreservation')->with(compact('standard'));
    }
    public function invoice(Request $request) {
        if($request->isMethod('post')) {
            $data = $request->get('transaction');
            $input =  strtotime($data['arrival']);
            // $arrivaldate = date('Y-m-d', $input);
            // $today = date('Y-m-d'); 

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
           
            // dd($today);
            // if($arrivaldate == $today) {
            //     $room = Room::where(['room_type' => $data['room_type']])->first();
            //     $room_no = $room->no_rooms_available;
            //     $no = $room_no - 1;
            //     dd($room_no);
            //     Room::where(['room_type'=> $data['room_type']])->update([
            //         // 'no_rooms_available' => $rooms_no->no_rooms_available - 1,
            //     ]);
            // }
            
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
    public function searchresult(Request $request) {
        $no_deluxe = Room::where(['room_type' => 'Deluxe Room'])->select('room_no')->first();
        $no_deluxeBalcony = Room::where(['room_type' => 'Deluxe Balcony'])->select('room_no')->first();
        $no_nordic = Room::where(['room_type' => 'Nordic Suite'])->select('room_no')->first();
        $no_nordicBalcony = Room::where(['room_type' => 'Nordic Suite Balcony'])->select('room_no')->first();
        $no_standard = Room::where(['room_type' => 'Standard Room'])->select('room_no')->first();
        if($request->isMethod('post')) {
            $data = $request->all();
            $arrival = $data['arrival'];
            $depart = $data['depart'];
            // dd($data);
            $deluxes = Transaction::where('room_type','Deluxe Room')->where('depart', '>=', $arrival)->where('arrival', '<=', $arrival)->get();
            $deluxes1 = Transaction::where('room_type','Deluxe Room')->where('arrival', '<=', $depart)->where('arrival', '>=', $arrival)->get();
            // dd($deluxes1);
            $deluxe_total = 0;
            if(count($deluxes) >= count($deluxes1)) {
                foreach ($deluxes as $deluxe) {
                    $deluxe_total += $deluxe->room_no;
                };
            }elseif(count($deluxes) <= count($deluxes1)){
                foreach ($deluxes1 as $deluxe1) {
                    $deluxe_total += $deluxe1->room_no;
                };
            }

            $deluxeBalconys = Transaction::where('room_type','Deluxe Balcony')->where('depart', '>=', $arrival)->where('arrival', '<=', $arrival)->get();
            $deluxeBalconys1 = Transaction::where('room_type','Deluxe Balcony')->where('arrival', '<=', $depart)->where('arrival', '>=', $arrival)->get();
            $deluxeBalcony_total = 0;
            if(count($deluxeBalconys) >= count($deluxeBalconys1)) {
                foreach ($deluxeBalconys as $deluxeBalcony) {
                    $deluxeBalcony_total += $deluxeBalcony->room_no;
                };
            }elseif(count($deluxeBalconys) <= count($deluxeBalconys1)){
                foreach ($deluxeBalconys1 as $deluxeBalcony1) {
                    $deluxeBalcony_total += $deluxeBalcony1->room_no;
                };
            }
            

            $nordics = Transaction::where('room_type','Nordic Suite')->where('depart', '>=', $arrival)->where('arrival', '<=', $arrival)->get();
            $nordics1 = Transaction::where('room_type','Nordic Suite')->where('arrival', '<=', $depart)->where('arrival', '>=', $arrival)->get();
            $nordic_total = 0;
            if(count($nordics) >= count($nordics1)) {
                foreach ($nordics as $nordic) {
                    $nordic_total += $nordic->room_no;
                };
            }elseif(count($nordics) <= count($nordics1)){
                foreach ($nordics1 as $nordic1) {
                    $nordic_total += $nordic1->room_no;
                };
            }
            

            $nordicBalconys = Transaction::where('room_type','Nordic Suite Balcony')->where('depart', '>=', $arrival)->where('arrival', '<=', $arrival)->get();
            $nordicBalconys1 = Transaction::where('room_type','Nordic Suite Balcony')->where('arrival', '<=', $depart)->where('arrival', '>=', $arrival)->get();
            $nordicBalcony_total = 0;
            if(count($nordicBalconys) >= count($nordicBalconys1)) {
                foreach ($nordicBalconys as $nordicBalcony) {
                    $nordicBalcony_total += $nordicBalcony->room_no;
                };
            }elseif(count($nordicBalconys) <= count($nordicBalconys1)){
                foreach ($nordicBalconys1 as $nordicBalcony1) {
                    $nordicBalcony_total += $nordicBalcony1->room_no;
                };
            }
            

            $standards = Transaction::where('room_type','Standard Room')->where('depart', '>=', $arrival)->where('arrival', '<=', $arrival)->get();
            $standards1 = Transaction::where('room_type','Standard Room')->where('arrival', '<=', $depart)->where('arrival', '>=', $arrival)->get();
            $standards_total = 0;
            if(count($standards) >= count($standards1)) {
                foreach ($standards as $standard) {
                    $standards_total += $standard->room_no;
                };
            }elseif(count($standards) <= count($standards1)){
                foreach ($standards1 as $standard1) {
                    $standards_total += $standard1->room_no;
                };
            }
            // dd($standards_total);
            $no_deluxe = $no_deluxe->room_no - $deluxe_total;
            $no_deluxeBalcony = $no_deluxeBalcony->room_no - $deluxeBalcony_total;
            $no_nordic = $no_nordic->room_no - $nordic_total;
            $no_nordicBalcony = $no_nordicBalcony->room_no - $nordicBalcony_total;
            $no_standard = $no_standard->roo_no - $standards_total;
        }
        return view('search')->with(compact('no_deluxe', 'no_deluxeBalcony', 'no_nordic','no_nordicBalcony', 'no_standard'));
    }




    
  public function export_pdf()
  {
    $receipt = Transaction::where('id','21')->first();
    $room = Room::where('room_type', $receipt->room_type)->first();
    // view()->share('receipt',$receipt);
    $pdf = PDF::loadView('testreceipt', compact('receipt', 'room'));
    return $pdf->download('receipt.pdf');
    // dd($_dompf_warnings);
    // return view('testreceipt')->with(compact('receipt','room'));
  }





}



