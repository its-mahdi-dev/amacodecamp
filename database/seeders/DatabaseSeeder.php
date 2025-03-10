<?php

namespace Database\Seeders;

use App\Models\Bootcamp;
use App\Models\BootcampEpisode;
use App\Models\BootcampSeason;
use App\Models\Payment;
use App\Models\Review;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            BasketSeeder::class,
            BootcampSeeder::class,
            BootcampEpisodeSeeder::class,
            BootcampSeasonSeeder::class,
            BootcampUserSeeder::class,
            BootcampTagSeeder::class,
            CampaignSeeder::class,
            CategorySeeder::class,
            CuponSeeder::class,
            FaqSeeder::class,
            OffSeeder::class,
            PaymentSeeder::class,
            ReviewSeeder::class,
            StudentLicenseSeeder::class,
            TagSeeder::class,
            UserSeeder::class,
            WishlistSeeder::class,
        ]);

    }
}
