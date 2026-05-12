<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class BookSeeder extends Seeder
{
    public function run()
    {
        //
        $data = [
        [
            'code_book' => 'B001',
            'isbn_book' => '978-0143127550',
            'title_book' => 'The Great Gatsby',
            'author_book' => 'F. Scott Fitzgerald',
            'publisher_book' => 'Scribner',
            'published_year' => '1925',
            'description_book' => 'A novel set in the Roaring Twenties, exploring themes of wealth, love, and the American Dream.'
        ],
        [
            'code_book' => 'B002',
            'isbn_book' => '978-0061120084',
            'title_book' => 'To Kill a Mockingbird',
            'author_book' => 'Harper Lee',
            'publisher_book' => 'J.B. Lippincott & Co.',
            'published_year' => '1960',
            'description_book' => 'A novel about racial injustice in the Deep South, seen through the eyes of a young girl.'
        ],  
        [
            'code_book' => 'B003',
            'isbn_book' => '978-0451524935',
            'title_book' => '1984',
            'author_book' => 'George Orwell',
            'publisher_book' => 'Secker & Warburg',
            'published_year' => '1949',
            'description_book' => 'A dystopian novel about a totalitarian regime that uses surveillance and propaganda to control its citizens.'
        ]
    ];

    $this->db->table('books')->insertBatch($data);
    }
}