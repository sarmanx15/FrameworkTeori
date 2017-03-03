<?php

use Illuminate\Database\Seeder;

class SeederTableAnggota extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('anggota')->delete();

        $anggota = array(
        	array('id'=>1, 'nama' => 'Muhammad','alamat'=>'Jalan AW syahrani'),
        	array('id'=>2, 'nama' => 'Sarman','alamat'=>'Jalan H. Suwandi'),
        	array('id'=>3, 'nama' => 'Noorlah','alamat'=>'Jalan Pramuka')
        	);
		DB::table('anggota')->insert($anggota);
    }
}
