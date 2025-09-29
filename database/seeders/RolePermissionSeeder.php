<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;

class RolePermissionSeeder extends Seeder
{
    public function run(): void
    {
        // Buat permissions
        $permissions = [
            'create articles',
            'edit articles',
            'delete articles',
            'publish articles',
            'view articles',
        ];

        foreach ($permissions as $perm) {
            Permission::firstOrCreate(
                ['name' => $perm, 'guard_name' => 'web']
            );
        }

        // Buat roles
        $roles = [
            'admin'  => Permission::all(), // admin dapat semua
            'editor' => ['edit articles', 'publish articles'],
            'writer' => ['create articles', 'edit articles'],
            'user'   => ['view articles'],
        ];

        foreach ($roles as $roleName => $perms) {
            $role = Role::firstOrCreate(
                ['name' => $roleName, 'guard_name' => 'web']
            );

            if ($perms instanceof \Illuminate\Support\Collection) {
                $role->syncPermissions($perms);
            } else {
                $role->syncPermissions($perms);
            }
        }

        // Buat user default (admin)
        $admin = User::firstOrCreate(
            ['email' => 'admin@example.com'],
            [
                'name' => 'Super Admin',
                'password' => bcrypt('password'),
            ]
        );

        $admin->assignRole('admin');
    }
}
