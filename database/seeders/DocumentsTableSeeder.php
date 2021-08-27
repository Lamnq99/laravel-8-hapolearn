<?php

namespace Database\Seeders;

use App\Models\Document;
use Illuminate\Database\Seeder;

class DocumentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Document::create([
            'name' => 'demo_video2.mp4',
            'description' => 'File mp4 demo 2',
            'type' => 'mp4'
        ]);
    }
}
