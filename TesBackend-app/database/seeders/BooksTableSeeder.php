<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('books')->insert([
            [
                'id' =>Str::uuid(),
                'title' => 'The Great Gatsby',
                'author' => 'F. Scott Fitzgerald',
                'published_year' => 1925,
                'stock' => 5,
                'isbn' => '9780743273565',
            ],
            [
                'id' => (string) Str::uuid(),
                'title' => 'To Kill a Mockingbird',
                'author' => 'Harper Lee',
                'published_year' => 1960,
                'stock' => 3,
                'isbn' => '9780446310789',
            ],
            [
                'id' => (string) Str::uuid(),
                'title' => '1984',
                'author' => 'George Orwell',
                'published_year' => 1949,
                'stock' => 4,
                'isbn' => '9780451524935',
            ],
            [
                'id' => (string) Str::uuid(),
                'title' => 'Pride and Prejudice',
                'author' => 'Jane Austen',
                'published_year' => 1813,
                'stock' => 6,
                'isbn' => '9780141439518',
            ],
            [
                'id' => (string) Str::uuid(),
                'title' => 'The Catcher in the Rye',
                'author' => 'J.D. Salinger',
                'published_year' => 1951,
                'stock' => 3,
                'isbn' => '9780316769488',
            ],
            [
                'id' => (string) Str::uuid(),
                'title' => 'The Hobbit',
                'author' => 'J.R.R. Tolkien',
                'published_year' => 1937,
                'stock' => 7,
                'isbn' => '9780547928227',
            ],
            [
                'id' => (string) Str::uuid(),
                'title' => 'The Da Vinci Code',
                'author' => 'Dan Brown',
                'published_year' => 2003,
                'stock' => 4,
                'isbn' => '9780307474278',
            ],
            [
                'id' => (string) Str::uuid(),
                'title' => 'The Alchemist',
                'author' => 'Paulo Coelho',
                'published_year' => 1988,
                'stock' => 5,
                'isbn' => '9780062315007',
            ],
            [
                'id' => (string) Str::uuid(),
                'title' => 'The Little Prince',
                'author' => 'Antoine de Saint-Exupéry',
                'published_year' => 1943,
                'stock' => 8,
                'isbn' => '9780156012195',
            ],
            [
                'id' => (string) Str::uuid(),
                'title' => 'Brave New World',
                'author' => 'Aldous Huxley',
                'published_year' => 1932,
                'stock' => 4,
                'isbn' => '9780060850524',
            ],
            [
                'id' => (string) Str::uuid(),
                'title' => 'The Lord of the Rings',
                'author' => 'J.R.R. Tolkien',
                'published_year' => 1954,
                'stock' => 6,
                'isbn' => '9780618640157',
            ],
            [
                'id' => (string) Str::uuid(),
                'title' => 'Harry Potter and the Sorcerer\'s Stone',
                'author' => 'J.K. Rowling',
                'published_year' => 1997,
                'stock' => 7,
                'isbn' => '9780590353427',
            ],
            [
                'id' => (string) Str::uuid(),
                'title' => 'The Chronicles of Narnia',
                'author' => 'C.S. Lewis',
                'published_year' => 1950,
                'stock' => 5,
                'isbn' => '9780066238501',
            ],
            [
                'id' => (string) Str::uuid(),
                'title' => 'One Hundred Years of Solitude',
                'author' => 'Gabriel García Márquez',
                'published_year' => 1967,
                'stock' => 3,
                'isbn' => '9780060883287',
            ],
            [
                'id' => (string) Str::uuid(),
                'title' => 'The Hunger Games',
                'author' => 'Suzanne Collins',
                'published_year' => 2008,
                'stock' => 6,
                'isbn' => '9780439023481',
            ],
            [
                'id' => (string) Str::uuid(),
                'title' => 'The Road',
                'author' => 'Cormac McCarthy',
                'published_year' => 2006,
                'stock' => 4,
                'isbn' => '9780307387899',
            ],
            [
                'id' => (string) Str::uuid(),
                'title' => 'The Kite Runner',
                'author' => 'Khaled Hosseini',
                'published_year' => 2003,
                'stock' => 5,
                'isbn' => '9781594631931',
            ],
            [
                'id' => (string) Str::uuid(),
                'title' => 'The Girl with the Dragon Tattoo',
                'author' => 'Stieg Larsson',
                'published_year' => 2005,
                'stock' => 4,
                'isbn' => '9780307949486',
            ],
            [
                'id' => (string) Str::uuid(),
                'title' => 'The Book Thief',
                'author' => 'Markus Zusak',
                'published_year' => 2005,
                'stock' => 6,
                'isbn' => '9780375842207',
            ],
            [
                'id' => (string) Str::uuid(),
                'title' => 'Life of Pi',
                'author' => 'Yann Martel',
                'published_year' => 2001,
                'stock' => 5,
                'isbn' => '9780156027328',
            ],
        ]);
    }
}
