<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Ads;
use App\Models\AdsPhoto;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();
        Ads::factory(10)->sequence(fn ($sequence) => ['user_id' => $sequence->index + 1])->create();
        AdsPhoto::factory(10)->sequence(fn ($sequence) => ['ads_id' => $sequence->index + 1])->create();
    }
}
