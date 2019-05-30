<?php

use App\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'email' => 'admin@admin.com',
            'name' => 'Admin',
            'password' => bcrypt('12345')
        ]);

        $role = Role::create(['name' => 'Super Admin']);
        $user->assignRole($role);

    }
}
