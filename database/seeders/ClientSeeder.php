<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Client;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $client = new Client();
        $client->name = "Daniel zamago";
        $client->phone_number = "6151031631";
        $client->email = "daniel@uabcs.mx";
        $client->save();

        $client = new Client();
        $client->name = "Alan Gonzalez";
        $client->phone_number = "6121031631";
        $client->email = "vochito@uabcs.mx";
        $client->save();

        $client = new Client();
        $client->name = "Aaron Lopez";
        $client->phone_number = "6131031631";
        $client->email = "aaroncito@uabcs.mx";
        $client->save();

    }

}
