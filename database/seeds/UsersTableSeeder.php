<?php
use Illuminate\Database\Seeder;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = \App\User::create([
            'name' => 'administrateur',
            'login' => 'sysadmin',
            'telephone' => '693549535',
            'sexe' => 'homme',
            'prenom' => 'admin',
            'lieu_naissance' => 'douala',
            'date_naissance' => \Carbon\Carbon::createFromDate(1990,01,01)->toDateTimeString(),
            'password' => bcrypt('aaaaaa')
        ]);
        //$user->attachRole('administrateur');
    }
}
