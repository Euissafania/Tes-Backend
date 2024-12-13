<?php

namespace Database\Seeders;

use App\Models\Member;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MembersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('members')->insert([
            [
                'id' => (string) Str::uuid(),
                'name' => 'John Doe',
                'email' => 'john.doe@email.com',
                'phone' => '081234567890',
                'address' => '123 Main St, City',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => (string) Str::uuid(),
                'name' => 'Jane Smith',
                'email' => 'jane.smith@email.com',
                'phone' => '081234567891',
                'address' => '456 Oak Ave, Town',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => (string) Str::uuid(),
                'name' => 'Robert Johnson',
                'email' => 'robert.j@email.com',
                'phone' => '081234567892',
                'address' => '789 Pine Rd, Village',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => (string) Str::uuid(),
                'name' => 'Mary Williams',
                'email' => 'mary.w@email.com',
                'phone' => '081234567893',
                'address' => '321 Elm St, Borough',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => (string) Str::uuid(),
                'name' => 'Michael Brown',
                'email' => 'michael.b@email.com',
                'phone' => '081234567894',
                'address' => '654 Maple Dr, District',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => (string) Str::uuid(),
                'name' => 'Sarah Davis',
                'email' => 'sarah.d@email.com',
                'phone' => '081234567895',
                'address' => '987 Cedar Ln, County',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => (string) Str::uuid(),
                'name' => 'James Wilson',
                'email' => 'james.w@email.com',
                'phone' => '081234567896',
                'address' => '147 Birch Ave, State',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => (string) Str::uuid(),
                'name' => 'Emily Taylor',
                'email' => 'emily.t@email.com',
                'phone' => '081234567897',
                'address' => '258 Spruce St, Province',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => (string) Str::uuid(),
                'name' => 'David Anderson',
                'email' => 'david.a@email.com',
                'phone' => '081234567898',
                'address' => '369 Ash Rd, Territory',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => (string) Str::uuid(),
                'name' => 'Lisa Thomas',
                'email' => 'lisa.t@email.com',
                'phone' => '081234567899',
                'address' => '741 Walnut Ct, Region',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => (string) Str::uuid(),
                'name' => 'Kevin Martin',
                'email' => 'kevin.m@email.com',
                'phone' => '081234567800',
                'address' => '852 Cherry Ln, Area',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => (string) Str::uuid(),
                'name' => 'Jennifer White',
                'email' => 'jennifer.w@email.com',
                'phone' => '081234567801',
                'address' => '963 Palm Ave, Zone',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => (string) Str::uuid(),
                'name' => 'Christopher Lee',
                'email' => 'chris.l@email.com',
                'phone' => '081234567802',
                'address' => '159 Beach Rd, Sector',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => (string) Str::uuid(),
                'name' => 'Amanda Clark',
                'email' => 'amanda.c@email.com',
                'phone' => '081234567803',
                'address' => '357 Coast St, District',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => (string) Str::uuid(),
                'name' => 'Daniel Martinez',
                'email' => 'daniel.m@email.com',
                'phone' => '081234567804',
                'address' => '468 River Dr, County',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => (string) Str::uuid(),
                'name' => 'Michelle Garcia',
                'email' => 'michelle.g@email.com',
                'phone' => '081234567805',
                'address' => '789 Lake Ave, State',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => (string) Str::uuid(),
                'name' => 'Andrew Robinson',
                'email' => 'andrew.r@email.com',
                'phone' => '081234567806',
                'address' => '951 Ocean Blvd, Province',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => (string) Str::uuid(),
                'name' => 'Patricia Rodriguez',
                'email' => 'patricia.r@email.com',
                'phone' => '081234567807',
                'address' => '753 Bay St, Territory',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => (string) Str::uuid(),
                'name' => 'Joseph Hall',
                'email' => 'joseph.h@email.com',
                'phone' => '081234567808',
                'address' => '246 Harbor Rd, Region',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => (string) Str::uuid(),
                'name' => 'Nicole King',
                'email' => 'nicole.k@email.com',
                'phone' => '081234567809',
                'address' => '135 Port Ave, Area',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
