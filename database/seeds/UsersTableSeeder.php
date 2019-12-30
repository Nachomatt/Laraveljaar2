<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        'name' => 'Admin',
        'email' => 'Admin@admin.com',
        'email_verified_at' => now(),
        'password' => bcrypt('secret'),
        'remember_token' => Str::random(10),
    ]);
        factory(App\User::class, 50)->create();
    }
}
