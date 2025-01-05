<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Commands\CreateRole;
use Spatie\Permission\Models\Role;


class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userOneRole = Role::create([
            'name' => 'userOne',
        ]);

        $userTwoRole = Role::create([
            'name' => 'userTwo',
        ]);

        $userThreeRole = Role::create([
            'name' => 'userThree',
        ]);

        $userFourRole = Role::create([
            'name' => 'userFour',
        ]);


        $userOne = User::create([
            'name' => 'Faqih',
            'email' => 'faqih@perisaidiri.com',
            'password' => bcrypt('Faqih@PerisaiDiri2025!')
        ]);

        $userTwo = User::create([
            'name' => 'Bayu',
            'email' => 'bayu@perisaidiri.com',
            'password' => bcrypt('PerisaiDiri2025!')
        ]);

        $userThree = User::create([
            'name' => 'Greg',
            'email' => 'greg@perisaidiri.com',
            'password' => bcrypt('GregPerisaiDiri2025!')
        ]);

        $userFour = User::create([
            'name' => 'Riqi',
            'email' => 'riqi@perisaidiri.com',
            'password' => bcrypt('PerisaiDiri2025!')
        ]);

        $userOne->assignRole($userOneRole);
        $userTwo->assignRole($userTwoRole);
        $userThree->assignRole($userThreeRole);
        $userFour->assignRole($userFourRole);
    }
}
