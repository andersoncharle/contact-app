<?php

namespace Database\Seeders;

use App\Models\Contact;
use Illuminate\Database\Seeder;

class ContactTableSeeder extends Seeder
{
    public function run()
    {
      Contact::factory()->count(50)->create();
    }
}
