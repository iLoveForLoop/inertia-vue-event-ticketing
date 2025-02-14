<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = ['manage-events', 'manage-tickets', 'manage-users', 'view'];

        foreach($permissions as $permission){
            Permission::create(['name' => $permission]);
        }

        $admin = Role::create(['name' => 'admin']);
        $user = Role::create(['name' => 'user']);

        $admin->givePermissionTo($permissions);
        $user->givePermissionTo('view');

        $user1 = User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin123')
        ]);

        $user2 = User::create([
            'name' => 'user',
            'email' => 'user@gmail.com',
            'password' => bcrypt('user123')
        ]);

        $user1->assignRole('admin');
        $user2->assignRole('user');
    }
}
