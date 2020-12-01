<?php

namespace Database\Factories;

use App\Models\Announcement;
use Illuminate\Database\Eloquent\Factories\Factory;

class AnnouncementFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Announcement::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
        'contract_type' => $this->faker->name,
        'realty_type' => $this->faker->paragraph(1,  true),
        'region' => $this->faker->state,
        'price' => $this->faker->randomNumber(NULL, true),
        'currency' => $this->faker->currencyCode,
        'phones' => $this->faker->e164PhoneNumber,
        'url' => $this->faker->url,
        'update_time' => $this->faker->dateTime('now', null),
        //-----------------------------
        'add_time' => $this->faker->dateTime('now', null),
        'rajon' => $this->faker->state,
        'city' => $this->faker->city,
        'district' => $this->faker->state,
        'microdistrict' => $this->faker->citySuffix,
        'street' => $this->faker->streetName,
        'house' => $this->faker->buildingNumber,
        'room_count' => $this->faker->randomDigit,
        'room_type' => $this->faker->paragraph(1, true),
        'floor' => $this->faker->randomDigit,
        'floor_count' => $this->faker->numberBetween(1, 90),
        'total_area' => $this->faker->randomFloat(NULL, 5, 2000),
        'living_area' => $this->faker->randomFloat(NULL, 1, 1000),
        'kitchen_area' => $this->faker->randomFloat(NULL, 1, 500),
        'land_area' => $this->faker->randomFloat(NULL, 1, 1000),
        'price_m2' => $this->faker->numberBetween(10, 100000),
        'title' => $this->faker->sentence(3, true),
        'text' => $this->faker->sentence(8, true),
        'email' => $this->faker->email,
        'contact_name' => $this->faker->name(null),
        'agency_code' => $this->faker->randomDigit,
        'wc_type' => $this->faker->word,
        'house_type' => $this->faker->word,
        'wall_type' => $this->faker->word,
        'building' => $this->faker->word,
        'ceiling_height' => $this->faker->randomFloat(NULL, 1, 5),
        'built_year' => $this->faker->year('now'),
        'heating_system' => $this->faker->word,
        'url_uk' => $this->faker->url,
        'url_amp' => $this->faker->url,
        'images' => $this->faker->paragraph(1,  true),
        'image' => $this->faker->url,
        //---------------------------------------
        'without_fee' => $this->faker->boolean,
        'is_owner' => $this->faker->boolean,
        'pets_allowed' => $this->faker->boolean,
        'has_furniture' => $this->faker->boolean,
        'has_balcony' => $this->faker->boolean,
        'has_parking' => $this->faker->boolean,
        'is_new_house' => $this->faker->boolean,
        'is_premium' => $this->faker->boolean,
        ];
    }
}
