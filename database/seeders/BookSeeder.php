<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Book::insert([
            [
                "title" => "Crime and Punishment",
                "author" => "Fyodor Dostoevsky",
                "brief" => "A psychological thriller by Fyodor Dostoevsky",
                "description" => "Description for Crime and Punishment",
                "cover_image" => "/images/books/crimeandpunishment_cover.jpg",
                "images" => json_encode([
                    "cover" => "/images/books/crimeandpunishment_cover.jpg",
                    "spine" => "/images/books/crimeandpunishment_spine.jpg",
                ]),
                "deposit" => 1.99,
                "is_available" => true,
                "date_of_release" => "1866"
            ],
            [
                "title" => "The Trial",
                "author" => "Franz Kafka",
                "brief" => "A novel by Franz Kafka",
                "description" => "Description for The Trial",
                "cover_image" => "/images/books/thetrial_cover.jpg",
                "images" => json_encode([
                    "cover" => "/images/books/thetrial_cover.jpg",
                    "spine" => "/images/books/thetrial_spine.jpg",
                ]),
                "deposit" => 1.99,
                "is_available" => true,
                "date_of_release" => "1925"
            ],
            [
                "title" => "Kafka on the Shore",
                "author" => "Haruki Murakami",
                "brief" => "A novel by Haruki Murakami",
                "description" => "Description for Kafka on the Shore",
                "cover_image" => "/images/books/kafkaontheshore_cover.jpg",
                "images" => json_encode([
                    "cover" => "/images/books/kafkaontheshore_cover.jpg",
                ]),
                "deposit" => 2.99,
                "is_available" => true,
                "date_of_release" => "2002"
            ],
            [
                "title" => "Life on the Mississippi",
                "author" => "Mark Twain",
                "brief" => "An autobiography by Mark Twain",
                "description" => "Description for Life on the Mississippi",
                "cover_image" => "/images/books/lifeonthemississippi_cover.jpg",
                "images" => json_encode([
                    "cover" => "/images/books/lifeonthemississippi_cover.jpg",
                    "front2" => "/images/books/lifeonthemississippi_front2.jpg",
                    "spine" => "/images/books/lifeonthemississippi_spine.jpg",
                ]),
                "deposit" => 9.99,
                "is_available" => true,
                "date_of_release" => "1883"
            ],
            // Add similar entries for other books
        ]);
    }
}
