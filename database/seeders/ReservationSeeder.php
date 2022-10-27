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
        $reservation->date_arrived = "2022-10-25";
       
        //cliente
        $reservation->client_id = 2;

        $reservation->cost_day = 1350.40;
        $reservation->total = 2700.80;
        $reservation->date_departure = new \DateTime;
        $reservation->save();

        $reservation = new Reservation();
        $reservation->type = 'Doble';
        $reservation->date_arrived = "2022-10-28";
       
        //cliente
        $reservation->client_id = 3;

        $reservation->cost_day = 2050.00;
        $reservation->total = 4100.00;
        $reservation->date_departure = "2022-10-30";
        $reservation->save();

        // 'type',
        // 'date_arrived',
        
        // 'cost_day',
        // 'total',
        // 'date_departure',
    }
}
