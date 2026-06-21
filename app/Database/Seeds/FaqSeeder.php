<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class FaqSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'question' => 'Is this a dynamic FAQ fetched directly from the database?',
                'answer'   => 'Yes! This question and answer are securely stored in the MySQL `trainers_squad` database and loaded dynamically using CodeIgniter 4.',
                'status'   => 'active',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'question' => 'Will it interfere with my previous project?',
                'answer'   => 'Not at all. CodeIgniter uses the .env file to strictly isolate connections. Your old project is safe!',
                'status'   => 'active',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ];

        $this->db->table('faqs')->insertBatch($data);
    }
}
