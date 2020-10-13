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

        $this->call(CustomizedBannerTableSeeder::class);
        $this->call(CustomizedBlogsTableSeeder::class);
        $this->call(CustomizedBrandsTableSeeder::class);
        $this->call(CustomizedCategoriesTableSeeder::class);
        $this->call(CustomizedCitysTableSeeder::class);
        $this->call(CustomizedContactTableSeeder::class);
        $this->call(CustomizedCountriesTableSeeder::class);
        $this->call(CustomizedCustomersTableSeeder::class);
        $this->call(CustomizedDiscountTableSeeder::class);
        $this->call(CustomizedDistrictsTableSeeder::class);
        $this->call(CustomizedOrderItemsTableSeeder::class);
        $this->call(CustomizedOrdersTableSeeder::class);
        $this->call(CustomizedPasswordResetsTableSeeder::class);
        $this->call(CustomizedProductImagesTableSeeder::class);
        $this->call(CustomizedProductRatingTableSeeder::class);
        $this->call(CustomizedProductSizeTableSeeder::class);
        $this->call(CustomizedProductSkuTableSeeder::class);
        $this->call(CustomizedProductsTableSeeder::class);
        $this->call(CustomizedSupplysTableSeeder::class);
        $this->call(CustomizedUsersTableSeeder::class);
        $this->call(CustomizedWardTableSeeder::class);
        $this->call(CustomizedWishTableSeeder::class);
    }
}
