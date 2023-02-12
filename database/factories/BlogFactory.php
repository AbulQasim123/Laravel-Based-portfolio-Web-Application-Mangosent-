<?php

namespace Database\Factories;
use App\Models\Blog;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Blog>
 */
class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Blog::class;
    public function definition()
    {   
        $gender = $this->faker->randomElement(['male', 'female']);
        return [
            'team_first_name' => $this->faker->firstName($gender),
            'team_last_name' => $this->faker->lastName,
            'team_email' => $this->faker->unique()->safeEmail,
            'team_gender' => $gender,
            'team_profile' => $this->faker->jobTitle                ,
            'team_phone' => $this->faker->phoneNumber,
            'team_Address' => $this->faker->address,
            'team_photo' => fake()->imageUrl($width=400, $height=400)
        ];
    }
}

// return [
//     'first_name'  => $this->faker->firstName,
//     'last_name'   => $this->faker->lastName,
//     'email'       => $this->faker->unique()->safeEmail,
//     'phone'       => $this->faker->phoneNumber,
//     'image'       => $this->faker->image('public/assets/images/uploaded/clients', 400, 300, null, false),
//     'address'     => $this->faker->streetAddress,
//     'city'        => $this->faker->city,
//     'state'       => $this->faker->stateAbbr,
//     'zip'         => $this->faker->postcode,
//     'country'     => $this->faker->country,
//     'description' => $this->faker->paragraph
// ];
