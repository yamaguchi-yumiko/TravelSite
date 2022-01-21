<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => $this->faker->unique()->userName(),
            'password' => Hash::make('p'),
            'last_name' => $this->faker->lastName(),
            'first_name' => $this->faker->firstName(),
            'last_name_kana' => $this->faker->lastKanaName(),
            'first_name_kana' => $this->faker->firstKanaName(),
            'gender' => $this->faker->numberBetween(1, 3),
            'birthday' => $this->faker->dateTimeBetween('-80year', '-15year')->format('Ymd'),
            'postal_code' => $this->faker->postcode(),
            'prefecture_cd' => $this->faker->numberBetween(1, 47),
            'city_name' => $this->faker->city(),
            'town_name' => $this->faker->streetName(),
            'other_address' => $this->faker->buildingNumber(),
            'tel' => $this->faker->phoneNumber(),
            'emergency_contact' => $this->faker->phoneNumber(),
            'email' => $this->faker->unique()->safeEmail(),
            'email_verify_token' => hash_hmac('sha256', $this->faker->numberBetween(1, 100000) . now(), env('APP_KEY')),
            'email_verified' => true,
            'del_flg' => false,
            'ins_date' => $this->faker->dateTime(),
            'ins_prg' => 'migration',
            'upd_date' => $this->faker->dateTime(),
            'upd_prg' => 'migration',
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
