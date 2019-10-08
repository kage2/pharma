<?php

use App\Models\Pharmacy;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);




       /* $pathCity = 'public/docs/villes.csv';

        if (($fp = fopen($pathCity, "r")) !== FALSE) {

            while (!feof($fp)) {
                $getRow = fgetcsv($fp, 0, ';');
                DB::table('cities')->insert([
                    'name' => $getRow[0],
                ]);
            }
        }
        fclose($fp);


        $pathZone = 'public/docs/zone.csv';

        if (($fp = fopen($pathZone, "r")) !== FALSE) {

            while (!feof($fp)) {
                $getRow = fgetcsv($fp, 0, ';');
                DB::table('zones')->insert([
                    'name' => $getRow[0],
                    'city_id' => $getRow[1]
                ]);
            }
        }
        fclose($fp);


        $pathPharm = 'public/docs/phies.csv';

        if (($fp = fopen($pathPharm, "r")) !== FALSE) {

            while (!feof($fp)) {
                $getRow = fgetcsv($fp, 0, ';');
                DB::table('pharmacies')->insert([
                    'num_pharma' => $getRow[0],
                    'name' => $getRow[1],
                    'zone_id' => $getRow[2],
                    'street' => $getRow[3]
                ]);
            }
        }
        fclose($fp);*/

        $pathProduct = 'public/docs/Produit.csv';

        if (($fp = fopen($pathProduct, "r")) !== FALSE) {
            $i = 1;

            while (!feof($fp)) {
                $i++;
                $getRow = fgetcsv($fp, 0, ';');
                DB::table('products')->insert([
                    'codeCIP' => $getRow[0],

                    'designation' => $getRow[2],

                    'pharmacy_id' => rand(2, 26)
                ]);
            }
        fclose($fp);
         }
    }
}
