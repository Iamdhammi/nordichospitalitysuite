<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transaction;
use App\Room;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
    public function adminHome() {
        return view('admin.dashboard');
    }
    public function editrooms(Request $request) {
        $no_deluxe = Room::where(['room_type' => 'Deluxe Room'])->select('room_no')->first();
        $no_deluxeBalcony = Room::where(['room_type' => 'Deluxe Balcony'])->select('room_no')->first();
        $no_nordic = Room::where(['room_type' => 'Nordic Suite'])->select('room_no')->first();
        $no_nordicBalcony = Room::where(['room_type' => 'Nordic Suite Balcony'])->select('room_no')->first();
        $no_standard = Room::where(['room_type' => 'Standard Room'])->select('room_no')->first();
        if($request->isMethod('post')) {
            $data = $request->all();
            // dd($data);
            Room::where(['room_type' => 'Standard Room'])->update(['room_no' => $data['standard']]);
            Room::where(['room_type' => 'Deluxe Room'])->update(['room_no' => $data['deluxe']]);
            Room::where(['room_type' => 'Deluxe Balcony'])->update(['room_no' => $data['deluxeBalcony']]);
            Room::where(['room_type' => 'Nordic Suite'])->update(['room_no' => $data['nordic']]);
            Room::where(['room_type' => 'Nordic Suite Balcony'])->update(['room_no' => $data['nordicBalcony']]);
            return redirect('/admin/edit');
        }
        return view('admin.editrooms')->with(compact('no_deluxe','no_deluxeBalcony','no_nordic','no_nordicBalcony','no_standard'));
    }
    public function editprice(Request $request) {
        $deluxe = Room::where(['room_type' => 'Deluxe Room'])->select('price')->first();
        $deluxeBalcony = Room::where(['room_type' => 'Deluxe Balcony'])->select('price')->first();
        $nordic = Room::where(['room_type' => 'Nordic Suite'])->select('price')->first();
        $nordicBalcony = Room::where(['room_type' => 'Nordic Suite Balcony'])->select('price')->first();
        $standard = Room::where(['room_type' => 'Standard Room'])->select('price')->first();
        if($request->isMethod('post')) {
            $data = $request->all();
            // dd($data);
            Room::where(['room_type' => 'Standard Room'])->update(['price' => $data['standard']]);
            Room::where(['room_type' => 'Deluxe Room'])->update(['price' => $data['deluxe']]);
            Room::where(['room_type' => 'Deluxe Balcony'])->update(['price' => $data['deluxeBalcony']]);
            Room::where(['room_type' => 'Nordic Suite'])->update(['price' => $data['nordic']]);
            Room::where(['room_type' => 'Nordic Suite Balcony'])->update(['price' => $data['nordicBalcony']]);
            return redirect('/admin/editprice');
        }
        return view('admin.editprice')->with(compact('deluxe','deluxeBalcony','nordic','nordicBalcony','standard'));
    }
    public function transactions() {
        $transactions = Transaction::select('name', 'email','phone', 'room_type', 'room_no','guests', 'arrival', 'depart', 'payment_ref','amount')->get();
        return view('admin.transactions')->with(compact('transactions'));
    }

    public function rooms() {
        $availableRooms = Room::select('room_type', 'no_rooms_available')->get();
        $books = Transaction::where('depart', '>=', date('m/d/Y'))->get();
        return view('admin.rooms')->with(compact('availableRooms', 'books'));
    }




}
