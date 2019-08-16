<?php

namespace App\Console;
use Illuminate\Support\Facades\DB;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        //
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        // $schedule->command('inspire')
        //          ->hourly();
        // $today = date('m/d/Y');
        // Deluxe
        // $deluxe_arrival_no = DB::table('transaction')->where(['room_type' => 'Deluxe Room'])->where('arrival', '<=', $today)->count();
        
        // if( $deluxe_arrival_no > 0 ) {
        // $deluxearrival = DB::table('room')->where(['room_type' => 'Deluxe Room'])->first();
        // $deluxe_no = $deluxearrival->no_rooms_available;
        //$no = 8 - $deluxe_arrival_no;
        $schedule->call(function() {
            $today = date('m/d/Y');
            //Deluxe
            $no_deluxe = DB::table('rooms')->where(['room_type' => 'Deluxe Room'])->select('room_no')->first();
            $no_deluxeBalcony = DB::table('rooms')->where(['room_type' => 'Deluxe Balcony'])->select('room_no')->first();
            $no_nordic = DB::table('rooms')->where(['room_type' => 'Nordic Suite'])->select('room_no')->first();
            $no_nordicBalcony = DB::table('rooms')->where(['room_type' => 'Nordic Suite Balcony'])->select('room_no')->first();
            $no_standard = DB::table('rooms')->where(['room_type' => 'Standard Room'])->select('room_no')->first();

            // $deluxe_arrival_no = DB::table('transaction')->where(['room_type' => 'Deluxe Room'])->where('arrival', '<=', $today)->where('depart', '>=', $today)->count();
            $deluxe_arrivals = DB::table('transaction')->where(['room_type' => 'Deluxe Room'])->where('arrival', '<=', $today)->where('depart', '>=', $today)->get();
            $deluxe_balcony_arrivals = DB::table('transaction')->where(['room_type' => 'Deluxe Balcony'])->where('arrival', '<=', $today)->where('depart', '>=', $today)->get();
            $nordic_suite_arrivals = DB::table('transaction')->where(['room_type' => 'Nordic Suite'])->where('arrival', '<=', $today)->where('depart', '>=', $today)->get();
            $nordic_suite_balcony_arrivals = DB::table('transaction')->where(['room_type' => 'Nordic Suite Balcony'])->where('arrival', '<=', $today)->where('depart', '>=', $today)->get();
            $standard_arrivals = DB::table('transaction')->where(['room_type' => 'Standard Room'])->where('arrival', '<=', $today)->where('depart', '>=', $today)->get();
            if(!empty($deluxe_arrivals)) {
                $deluxe_total = 0;
                foreach ($deluxe_arrivals as $deluxe_arrival) {
                    $deluxe_total += $deluxe_arrival->room_no;
                };
            }
            if(!empty($deluxe_balcony_arrivals)) {
                $deluxeBalcony_total = 0;
                foreach ($deluxe_balcony_arrivals as $deluxe_balcony_arrival ) {
                    $deluxeBalcony_total += $deluxe_balcony_arrival->room_no;
                };
            }
            if(!empty($nordic_suite_arrivals)) {
                $nordicSuite_total = 0;
                foreach ($nordic_suite_arrivals as $nordic_suite_arrival ) {
                    $nordicSuite_total += $nordic_suite_arrival->room_no;
                };
            }
            if(!empty($nordic_suite_balcony_arrivals)) {
                $nordicSuiteBalcony_total = 0;
                foreach ($nordic_suite_balcony_arrivals as $nordic_suite_balcony_arrival ) {
                    $nordicSuiteBalcony_total += $nordic_suite_balcony_arrival->room_no;
                };
            }
            if(!empty($standard_arrivals)) {
                $standard_total = 0;
                foreach ($standard_arrivals as $standard_arrival ) {
                    $standard_total += $standard_arrival->room_no;
                };
            }




            // $deluxe_balcony_arrival_no = DB::table('transaction')->where(['room_type' => 'Deluxe Balcony'])->where('arrival', '<=', $today)->where('depart', '>=', $today)->count();
            // $nordic_suite_arrival_no = DB::table('transaction')->where(['room_type' => 'Nordic Suite'])->where('arrival', '<=', $today)->where('depart', '>=', $today)->count();
            // $nordic_suite_balcony_arrival_no = DB::table('transaction')->where(['room_type' => 'Nordic Suite Balcony'])->where('arrival', '<=', $today)->where('depart', '>=', $today)->count();
            // $standard_arrival_no = DB::table('transaction')->where(['room_type' => 'Standard Room'])->where('arrival', '<=', $today)->where('depart', '>=', $today)->count();
            $deluxe_no = $no_deluxe->room_no - $deluxe_total;
            $deluxe_balcony_no = $no_deluxeBalcony->room_no  - $deluxeBalcony_total;
            $nordic_suite_no = $no_nordic->room_no  - $nordicSuite_total;
            $nordic_suite_balcony_no = $no_nordicBalcony->room_no  - $nordicSuiteBalcony_total;
            $standard_no = $no_standard->room_no  - $standard_total;
            DB::table('rooms')->where(['room_type' => 'Deluxe Room'])->update(['no_rooms_available' => $deluxe_no]);
            DB::table('rooms')->where(['room_type' => 'Deluxe Balcony'])->update(['no_rooms_available' => $deluxe_balcony_no]);
            DB::table('rooms')->where(['room_type' => 'Nordic Suite'])->update(['no_rooms_available' => $nordic_suite_no]);
            DB::table('rooms')->where(['room_type' => 'Nordic Suite Balcony'])->update(['no_rooms_available' => $nordic_suite_balcony_no]);
            DB::table('rooms')->where(['room_type' => 'Standard Room'])->update(['no_rooms_available' => $standard_no]);
        })->everyMinute();
        // }
        
        
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
