<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class MemberSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'name_member'    => 'Budi Santoso',
                'email_member'   => 'budi@example.com',
                'contact_member' => '081234567890',
                'status_member'  => 'Aktif',
                'created_at'     => date('Y-m-d H:i:s'),
                'updated_at'     => date('Y-m-d H:i:s'),
            ],
            [
                'name_member'    => 'Siti Aminah',
                'email_member'   => 'siti@example.com',
                'contact_member' => '089876543210',
                'status_member'  => 'Aktif',
                'created_at'     => date('Y-m-d H:i:s'),
                'updated_at'     => date('Y-m-d H:i:s'),
            ],
            [
                'name_member'    => 'Andi Wijaya',
                'email_member'   => 'andi@example.com',
                'contact_member' => '085612349876',
                'status_member'  => 'Nonaktif',
                'created_at'     => date('Y-m-d H:i:s'),
                'updated_at'     => date('Y-m-d H:i:s'),
            ]
        ];

        // Memasukkan semua data array di atas ke dalam tabel 'members'
        $this->db->table('members')->insertBatch($data);
    }
}