<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Reservation;

class ReservationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $reservation = new Reservation();
        $reservation->type = 'Sencilla';
        $reservation->date_arrived = new \DateTime;
        $reservation->name = "Daniel zamago";
        $reservation->phone_number = "6151031631";
        $reservation->email = "daniel@uabcs.mx";
        $reservation->cost_day = 1350.40;
        $reservation->total = 6752;
        $reservation->date_departure = new \DateTime;
        $reservation->save();

        // 'type',
        // 'date_arrived',
        // 'name',
        // 'phone_number',
        // 'email',
        // 'cost_day',
        // 'total',
        // 'date_departure',
    }
}
