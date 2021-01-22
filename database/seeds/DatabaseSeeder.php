<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(VideoSeeder::class);
        $this->call(PackSeeder::class);
        $this->call(StaffSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(StaffVideoSeeder::class);
        $this->call(CategoryVideoSeeder::class);
        $this->call(AdvertisementSeeder::class);
        $this->call(TagSeeder::class);
        $this->call(TagVideoSeeder::class);
        $this->call(PackStaffSeeder::class);
        $this->call(PackVideoSeeder::class);
    }
}
