<?php

namespace Database\Seeders;

use App\Models\adgur;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create(['name' => 'admin']);
        Role::create(['name' => 'guru']);
        Role::create(['name' => 'siswa']);

        $admin = adgur::create([
            'nip' => '-',
            'nama' => 'Suryo Baskoro',
            // 'mapel' => '-',
            'email' => 'suryobaskoroo21@gmail.com',
            'password' => Hash::make('Baskoro21'),
            'jk' => 'L',
        ]);
        $admin->assignRole('admin');
    }
}
