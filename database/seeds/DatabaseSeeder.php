<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        // $this->call(UserTableSeeder::class);
        $this->call(UsersSeeder::class);

        Model::reguard();
    }
}

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $user = [
            'Tea Admin'               => 'tea@doscom.org',
            'Ahmad Basir'             => 'A15.2016.00515',
            'Dinia Kurnia'            => 'A11.2016.09772',
            'Yuliana Utari'           => 'A11.2015.08979',
            'Carissa Adila'           => 'A11.2016.09407',
            'Dian Ayu'                => 'A11.2015.09001',
            'Muhammad Dimas'          => 'A12.2016.05596',
            'Nurul Diyah'             => 'A11.2015.09234',
            'Muhammad Hafidz'         => 'A11.2015.09000',
            'Dicky Setiono'           => 'A11.2016.09564',
            'Haris Novrial'           => 'A11.2015.09268',
            'Zagasi Bagas'            => 'A11.2016.09854',
            'Okta Arif'               => 'A11.2016.09421',
            'Radhitya Kusuma'         => 'A11.2016.09434',
            'Reno Kurnia'             => 'A11.2015.09133',
            'Bagus Rindawan'          => 'A11.2015.09270',
            'Bayu Aji'                => 'A14.2015.02168',
            'Muhammad Afifudin'       => 'A11.2015.09103',
            'Aftiani Wahyuastuti'     => 'A11.2015.08852',
            'Ilham Mufti'             => 'A11.2016.09398',
            'Ahmad Risqi'             => 'A12.2016.05473', 
            'Muchammad khafi'         => 'A11.2016.09689',
            'Lina Puji'               => 'A11.2016.09390',
            'Adhitya widhiariandoko'  => 'A11.2016.09399',
            'Muhammad Anang'          => 'A11.2016.09416',
            'Seviana Pungky'          => 'A11.2015.09163',
            'Rivo Ghalif'             => 'A11.2015.09267',
            'Sri wulan'               => 'A11.2016.09532',
            'Safrudin Windu'          => 'A11.2016.09690',
            'Dian Arima'              => 'A12.2016.05474',
            'Rizki Mufti'             => 'A11.2016.09493',
            'Rizki Ramadhan'          => 'A11.2015.08913',
            'Jazuli Muhtar'           => 'A11.2016.09653',
            'Singgih Nugroho'         => 'A11.2016.09507',
            'Vareza Vimaretantyo'     => 'A11.2016.09503',
            'Hermawan Luthfi'         => 'A11.2015.09026',
            'Mas Luky'                => 'A11.2016.09385',
            'Fransiskus Xaverius'     => 'A12.2016.05545',
            'Nanang Prasetiyo'        => 'A11.2016.09923',
            'Maulana Muhammadin'      => 'A11.2016.09392',
            'Fahmi Anwar'             => 'A11.2016.09916',
            'Laksita Kusuma'          => 'A11.2016.09438',
            'Harasta Rahman'          => 'A11.2015.09002',
            'Bayu Hermawan'           => 'A11.2015.08914',
            'Ramadhan Renaldy'        => 'A11.2016.09408',
            'Puteri Awaliatush'       => 'A11.2015.09314',
            'Alfin Maghfiroh'         => 'A11.2016.09542',
            'Nurmalita Cindy'         => 'A11.2015.08985',
            'Salman Abdurrohman'      => 'A11.2016.09423',
            'Piyoma Andika'           => 'A11.2015.08870',
            'Aulia Nailal'            => 'A11.2016.09415',
            'Abdurahman'              => 'A11.2015.09266',
        ];

        foreach($user as $username => $email){

            DB::table('users')->insert([
                'name' => $username,
                'username' => $email,
                'email' => $email,
                'password' => bcrypt(env('PASSADMIN')),
                'role' => 'admin',
                'created_at' => Carbon\Carbon::now(),
                'updated_at' => Carbon\Carbon::now(),
                ]);
        }

    }
}