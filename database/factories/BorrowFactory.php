<?php

namespace Database\Factories;

use App\Models\Book;
use App\Models\Reader;
use App\Models\Borrow;
use Illuminate\Database\Eloquent\Factories\Factory;

class BorrowFactory extends Factory
{
    protected $model = Borrow::class;

    public function definition()
    {
        return [
            'reader_id' => Reader::inRandomOrder()->first()->id,
            'book_id' => Book::inRandomOrder()->first()->id,
            'borrow_date' => $this->faker->date(),
            'return_date' => $this->faker->dateTimeBetween('now', '+2 weeks'),
            'status' => $this->faker->randomElement([0, 1]),
        ];
    }
}