<?php

use Illuminate\Database\Seeder;

use App\LastDriverLocation;
use App\GCMUser;
use App\FactDriverLocation;

use Carbon\Carbon;

class NTMCSeeder extends Seeder
{
    /**
     * Run the database seeds->
     *
     * @return void
     */
    public function run()
    {
        //

        $GCMUser1 = new GCMUser();
        $GCMUser1->card_id ="801889949890000000019102";
        $GCMUser1->driver_id ="19";
        $GCMUser1->gcm_id ="APA91bE7XL8XDnHV1VP-i-Zli-gm-3HdMCdjUyJUeWgbRkaYq4LDx67ECeV1-LLw1tMz9CatAchXN-06R3qvy8up6nIEYpIvb6WS_oBMEGM7osjJj3U2OS8";
        $GCMUser1->active ="1";
        $GCMUser1->created =Carbon::now();
        $GCMUser1->updated = Carbon::now();
        $GCMUser1->save();

        $GCMUser2 = new GCMUser();
        $GCMUser2->card_id ="801889949890000000023805";
        $GCMUser2->driver_id ="23";
        $GCMUser2->gcm_id ="APA91bE7XL8XDnHV1VP-i-Zli-gm-3HdMCdjUyJUeWgbRkaYq4LDx67ECeV1-LLw1tMz9CatAchXN-06R3qvy8up6nIEYpIvb6WS_oBMEGM7osjJj3U2OS8";
        $GCMUser2->active ="1";
     $GCMUser2->created =Carbon::now();
        $GCMUser2->updated = Carbon::now();
        $GCMUser2->save();



        $LastDriverLocation1 = new LastDriverLocation();
        $LastDriverLocation1->card_id ="801889949890000000023805";
        $LastDriverLocation1->driver_id ="19";
        $LastDriverLocation1->lat ="-6->117793";
        $LastDriverLocation1->lng ="106->892381";
        $LastDriverLocation1->active ="1";
          $LastDriverLocation1->created =Carbon::now();
        $LastDriverLocation1->updated = Carbon::now();
        $LastDriverLocation1->save();



        $LastDriverLocation2 = new LastDriverLocation();
        $LastDriverLocation2->card_id ="801889949890000000023805";
        $LastDriverLocation2->driver_id ="23";
        $LastDriverLocation2->lat ="-6->117793";
        $LastDriverLocation2->lng ="106->892381";
        $LastDriverLocation2->active ="1";
        $LastDriverLocation2->created =Carbon::now();
        $LastDriverLocation2->updated = Carbon::now();
        $LastDriverLocation2->save();

        $FactDriverLocation3 = new FactDriverLocation();
        $FactDriverLocation3->card_id ="801889949890000000023805";
        $FactDriverLocation3->driver_id ="23";
        $FactDriverLocation3->company_name ="PT Laut Sentosa Makmur";
        $FactDriverLocation3->driver_name ="Daniel Tandjung";
        $FactDriverLocation3->plat_license ="B1234AB";
        $FactDriverLocation3->container_number ="-";
        $FactDriverLocation3->insurance ="23112312";
        $FactDriverLocation3->lat ="-6->117793";
        $FactDriverLocation3->lng ="106->892381";
        $FactDriverLocation3->active ="1";
         $FactDriverLocation3->created =Carbon::now();
        $FactDriverLocation3->updated = Carbon::now();
        $FactDriverLocation3->save();

    }
}
