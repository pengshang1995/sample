<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $user = factory(User::class)->times(70)->make();
        User::insert($user->makeVisible(['password','remember_token'])->toArray());

        $user = User::find(1);
        $user->name = 'PS';
        $user->email = '786188095@qq.com';
        $user->password = bcrypt('password');
        $user->is_admin = true;
        $user->save();
    }
}
