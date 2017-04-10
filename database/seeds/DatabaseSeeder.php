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
      DB::table('users')->insert([
         'name' => 'Sikun',
         'username' => 'sikun',
         'email' => 'arnazadiputra@gmail.com',
         'password' => bcrypt('tanyairfan'),
         'role' => 'admin',
         'created_at' => Carbon\Carbon::now(),
         'updated_at' => Carbon\Carbon::now(),
     ]);
     DB::table('users')->insert([
         'name' => 'Arji',
         'username' => 'A11.2014.08073',
         'email' => 'sekretariat1@doscom.org',
         'password' => bcrypt('tanyairfan'),
         'role' => 'admin',
         'created_at' => Carbon\Carbon::now(),
         'updated_at' => Carbon\Carbon::now(),
     ]);
     DB::table('users')->insert([
         'name' => 'Irfan',
         'username' => 'A11.2014.08363',
         'email' => 'sekretariat2@doscom.org',
         'password' => bcrypt('tanyairfan'),
         'role' => 'admin',
         'created_at' => Carbon\Carbon::now(),
         'updated_at' => Carbon\Carbon::now(),
     ]);
     DB::table('users')->insert([
         'name' => 'DDA',
         'username' => 'A11.2015.09001',
         'email' => 'sekretariat3@doscom.org',
         'password' => bcrypt('tanyairfan'),
         'role' => 'admin',
         'created_at' => Carbon\Carbon::now(),
         'updated_at' => Carbon\Carbon::now(),
     ]);
     DB::table('users')->insert([
         'name' => 'Lita',
         'username' => 'A11.2015.08985',
         'email' => 'sekretariat4@doscom.org',
         'password' => bcrypt('tanyairfan'),
         'role' => 'admin',
         'created_at' => Carbon\Carbon::now(),
         'updated_at' => Carbon\Carbon::now(),
     ]);
     DB::table('users')->insert([
         'name' => 'Moriz',
         'username' => 'A11.2014.08565',
         'email' => 'sekretariat5@doscom.org',
         'password' => bcrypt('tanyairfan'),
         'role' => 'admin',
         'created_at' => Carbon\Carbon::now(),
         'updated_at' => Carbon\Carbon::now(),
     ]);
     DB::table('users')->insert([
         'name' => 'Dhanang',
         'username' => 'A11.2014.08205',
         'email' => 'sekretariat6@doscom.org',
         'password' => bcrypt('tanyairfan'),
         'role' => 'admin',
         'created_at' => Carbon\Carbon::now(),
         'updated_at' => Carbon\Carbon::now(),
     ]);
     DB::table('users')->insert([
         'name' => 'Farah',
         'username' => 'A11.2014.08644',
         'email' => 'sekretariat7@doscom.org',
         'password' => bcrypt('tanyairfan'),
         'role' => 'admin',
         'created_at' => Carbon\Carbon::now(),
         'updated_at' => Carbon\Carbon::now(),
     ]);
     DB::table('users')->insert([
         'name' => 'Awan',
         'username' => 'A11.2015.09270',
         'email' => 'sekretariat8@doscom.org',
         'password' => bcrypt('tanyairfan'),
         'role' => 'admin',
         'created_at' => Carbon\Carbon::now(),
         'updated_at' => Carbon\Carbon::now(),
     ]);
     DB::table('users')->insert([
         'name' => 'Bayu Aji',
         'username' => 'A14.2015.02168',
         'email' => 'sekretariat9@doscom.org',
         'password' => bcrypt('tanyairfan'),
         'role' => 'admin',
         'created_at' => Carbon\Carbon::now(),
         'updated_at' => Carbon\Carbon::now(),
     ]);
     DB::table('users')->insert([
         'name' => 'Tama',
         'username' => 'A11.2014.08540',
         'email' => 'sekretariat10@doscom.org',
         'password' => bcrypt('tanyairfan'),
         'role' => 'admin',
         'created_at' => Carbon\Carbon::now(),
         'updated_at' => Carbon\Carbon::now(),
     ]);
     DB::table('users')->insert([
         'name' => 'Pendi',
         'username' => 'A11.2014.08165',
         'email' => 'sekretariat11@doscom.org',
         'password' => bcrypt('tanyairfan'),
         'role' => 'admin',
         'created_at' => Carbon\Carbon::now(),
         'updated_at' => Carbon\Carbon::now(),
     ]);
     DB::table('users')->insert([
         'name' => 'Yuli',
         'username' => 'A11.2015.08979',
         'email' => 'sekretariat12@doscom.org',
         'password' => bcrypt('tanyairfan'),
         'role' => 'admin',
         'created_at' => Carbon\Carbon::now(),
         'updated_at' => Carbon\Carbon::now(),
     ]);
     DB::table('users')->insert([
         'name' => 'Basir',
         'username' => 'A11.2015.09101',
         'email' => 'sekretariat13@doscom.org',
         'password' => bcrypt('tanyairfan'),
         'role' => 'admin',
         'created_at' => Carbon\Carbon::now(),
         'updated_at' => Carbon\Carbon::now(),
     ]);
     DB::table('users')->insert([
         'name' => 'Hafidz',
         'username' => 'A11.2015.09000',
         'email' => 'sekretariat14@doscom.org',
         'password' => bcrypt('tanyairfan'),
         'role' => 'admin',
         'created_at' => Carbon\Carbon::now(),
         'updated_at' => Carbon\Carbon::now(),
     ]);
     DB::table('users')->insert([
         'name' => 'desi',
         'username' => 'A11.2014.08041',
         'email' => 'sekretariat15@doscom.org',
         'password' => bcrypt('tanyairfan'),
         'role' => 'admin',
         'created_at' => Carbon\Carbon::now(),
         'updated_at' => Carbon\Carbon::now(),
     ]);
     DB::table('users')->insert([
         'name' => 'sulis',
         'username' => 'A11.2014.08163',
         'email' => 'sekretariat16@doscom.org',
         'password' => bcrypt('tanyairfan'),
         'role' => 'admin',
         'created_at' => Carbon\Carbon::now(),
         'updated_at' => Carbon\Carbon::now(),
     ]);
     DB::table('users')->insert([
         'name' => 'Briyan',
         'username' => 'A11.2014.08431',
         'email' => 'sekretariat17@doscom.org',
         'password' => bcrypt('tanyairfan'),
         'role' => 'admin',
         'created_at' => Carbon\Carbon::now(),
         'updated_at' => Carbon\Carbon::now(),
     ]);
     DB::table('users')->insert([
         'name' => 'Imam',
         'username' => 'A11.2014.08237',
         'email' => 'sekretariat18@doscom.org',
         'password' => bcrypt('tanyairfan'),
         'role' => 'admin',
         'created_at' => Carbon\Carbon::now(),
         'updated_at' => Carbon\Carbon::now(),
     ]);
     DB::table('users')->insert([
         'name' => 'salam',
         'username' => 'A11.2014.08175',
         'email' => 'sekretariat19@doscom.org',
         'password' => bcrypt('tanyairfan'),
         'role' => 'admin',
         'created_at' => Carbon\Carbon::now(),
         'updated_at' => Carbon\Carbon::now(),
     ]);
     DB::table('users')->insert([
         'name' => 'Conet',
         'username' => 'A11.2014.08465',
         'email' => 'sekretariat20@doscom.org',
         'password' => bcrypt('tanyairfan'),
         'role' => 'admin',
         'created_at' => Carbon\Carbon::now(),
         'updated_at' => Carbon\Carbon::now(),
     ]);
     DB::table('users')->insert([
         'name' => 'Cipo',
         'username' => 'A11.2015.09103',
         'email' => 'sekretariat21@doscom.org',
         'password' => bcrypt('tanyairfan'),
         'role' => 'admin',
         'created_at' => Carbon\Carbon::now(),
         'updated_at' => Carbon\Carbon::now(),
     ]);
     DB::table('users')->insert([
         'name' => 'Bayu Her',
         'username' => 'A11.2015.08914',
         'email' => 'sekretariat22@doscom.org',
         'password' => bcrypt('tanyairfan'),
         'role' => 'admin',
         'created_at' => Carbon\Carbon::now(),
         'updated_at' => Carbon\Carbon::now(),
     ]);
     DB::table('users')->insert([
         'name' => 'Bimas',
         'username' => 'A11.2015.09286',
         'email' => 'sekretariat23@doscom.org',
         'password' => bcrypt('tanyairfan'),
         'role' => 'admin',
         'created_at' => Carbon\Carbon::now(),
         'updated_at' => Carbon\Carbon::now(),
     ]);
     DB::table('users')->insert([
         'name' => 'Wisnu',
         'username' => 'A11.2014.080272',
         'email' => 'sekretariat24@doscom.org',
         'password' => bcrypt('tanyairfan'),
         'role' => 'admin',
         'created_at' => Carbon\Carbon::now(),
         'updated_at' => Carbon\Carbon::now(),
     ]);
     DB::table('users')->insert([
         'name' => 'Bona',
         'username' => 'A11.2014.08381',
         'email' => 'sekretariat25@doscom.org',
         'password' => bcrypt('tanyairfan'),
         'role' => 'admin',
         'created_at' => Carbon\Carbon::now(),
         'updated_at' => Carbon\Carbon::now(),
     ]);
     DB::table('users')->insert([
         'name' => 'Shofro',
         'username' => 'A11.2015.09314',
         'email' => 'sekretariat26@doscom.org',
         'password' => bcrypt('tanyairfan'),
         'role' => 'admin',
         'created_at' => Carbon\Carbon::now(),
         'updated_at' => Carbon\Carbon::now(),
     ]);
     DB::table('users')->insert([
         'name' => 'Reno',
         'username' => 'A11.2015.09133',
         'email' => 'sekretariat27@doscom.org',
         'password' => bcrypt('tanyairfan'),
         'role' => 'admin',
         'created_at' => Carbon\Carbon::now(),
         'updated_at' => Carbon\Carbon::now(),
     ]);
     DB::table('users')->insert([
         'name' => 'Zakiy',
         'username' => 'A11.2014.08326',
         'email' => 'sekretariat28@doscom.org',
         'password' => bcrypt('tanyairfan'),
         'role' => 'admin',
         'created_at' => Carbon\Carbon::now(),
         'updated_at' => Carbon\Carbon::now(),
     ]);
     DB::table('users')->insert([
         'name' => 'Billy',
         'username' => 'A11.2014.08170',
         'email' => 'sekretariat29@doscom.org',
         'password' => bcrypt('tanyairfan'),
         'role' => 'admin',
         'created_at' => Carbon\Carbon::now(),
         'updated_at' => Carbon\Carbon::now(),
     ]);
     DB::table('users')->insert([
         'name' => 'Yoga',
         'username' => 'A11.2014.08683',
         'email' => 'sekretariat30@doscom.org',
         'password' => bcrypt('tanyairfan'),
         'role' => 'admin',
         'created_at' => Carbon\Carbon::now(),
         'updated_at' => Carbon\Carbon::now(),
     ]);
     DB::table('users')->insert([
         'name' => 'Ilham',
         'username' => 'A11.2014.08196',
         'email' => 'sekretariat31@doscom.org',
         'password' => bcrypt('tanyairfan'),
         'role' => 'admin',
         'created_at' => Carbon\Carbon::now(),
         'updated_at' => Carbon\Carbon::now(),
     ]);
     DB::table('users')->insert([
         'name' => 'Nafis',
         'username' => 'A11.2014.08458',
         'email' => 'sekretariat32@doscom.org',
         'password' => bcrypt('tanyairfan'),
         'role' => 'admin',
         'created_at' => Carbon\Carbon::now(),
         'updated_at' => Carbon\Carbon::now(),
     ]);
     DB::table('users')->insert([
         'name' => 'Riyaman',
         'username' => 'A11.2014.08227',
         'email' => 'sekretariat33@doscom.org',
         'password' => bcrypt('tanyairfan'),
         'role' => 'admin',
         'created_at' => Carbon\Carbon::now(),
         'updated_at' => Carbon\Carbon::now(),
     ]);

    }
}
