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
                    "cover_image" => "/images/books/crimeandpunishment_cover.webp",
                    "images" => json_encode([
                        "cover" => "/images/books/crimeandpunishment_cover.webp",
                        "spine" => "/images/books/crimeandpunishment_spine.webp",
                    ]),
                    "deposit" => 1.99,
                    "is_available" => true,
                    "date_of_release" => "1866",
                    "literature_origin" => "Russian"
                ],
                [
                    "title" => "The Trial",
                    "author" => "Franz Kafka",
                    "brief" => "A novel by Franz Kafka",
                    "description" => "Description for The Trial",
                    "cover_image" => "/images/books/thetrial_cover.webp",
                    "images" => json_encode([
                        "cover" => "/images/books/thetrial_cover.webp",
                        "spine" => "/images/books/thetrial_spine.webp",
                    ]),
                    "deposit" => 1.99,
                    "is_available" => true,
                    "date_of_release" => "1925",
                    "literature_origin" => "German"
                ],
                [
                    "title" => "Kafka on the Shore",
                    "author" => "Haruki Murakami",
                    "brief" => "A novel by Haruki Murakami",
                    "description" => "Description for Kafka on the Shore",
                    "cover_image" => "/images/books/kafkaontheshore_cover.webp",
                    "images" => json_encode([
                        "cover" => "/images/books/kafkaontheshore_cover.webp",
                    ]),
                    "deposit" => 2.99,
                    "is_available" => false,
                    "date_of_release" => "2002",
                    "literature_origin" => "Japanese"
                ],
                [
                    "title" => "Life on the Mississippi",
                    "author" => "Mark Twain",
                    "brief" => "An autobiography by Mark Twain",
                    "description" => "Description for Life on the Mississippi",
                    "cover_image" => "/images/books/lifeonthemississippi_cover.webp",
                    "images" => json_encode([
                        "cover" => "/images/books/lifeonthemississippi_cover.webp",
                        "front2" => "/images/books/lifeonthemississippi_front2.webp",
                        "spine" => "/images/books/lifeonthemississippi_spine.webp",
                    ]),
                    "deposit" => 3.99,
                    "is_available" => true,
                    "date_of_release" => "1883",
                    "literature_origin" => "American"
                ],
                [
                    "title" => "The Prophet",
                    "author" => "Khalil Gibran",
                    "brief" => "A philosophical work by Khalil Gibran",
                    "description" => "Description for The Prophet",
                    "cover_image" => "/images/books/theprophet_cover.webp",
                    "images" => json_encode([
                        "cover" => "/images/books/theprophet_cover.webp",
                    ]),
                    "deposit" => 3.99,
                    "is_available" => true,
                    "date_of_release" => "1923",
                    "literature_origin" => "Lebanese"
                ],
                [
                    "title" => "The Pomegranate Tree Alone",
                    "author" => "Sinan Antoon",
                    "brief" => "A novel by Sinan Antoon",
                    "description" => "Description for The Pomegranate Tree Alone",
                    "cover_image" => "/images/books/thepomegranatetreealone_cover.webp",
                    "images" => json_encode([
                        "cover" => "/images/books/thepomegranatetreealone_cover.webp",
                        // Add more images if needed
                    ]),
                    "deposit" => 5.99,
                    "is_available" => true,
                    "date_of_release" => "2010",
                    "literature_origin" => "Iraqi"
                ],
                // Add entries for other books...
        ]);
    }
}
