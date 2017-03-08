<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Book;
use App\Author;
use App\Publisher;

class bookController extends Controller
{

	public function view($id) {
		$reviews = DB::select('SELECT reviews.headline, reviews.body, reviews.rating, books.title, authors.first_name, authors.last_name, publishers.name AS publisher_name
FROM books, publishers, reviews, authors
WHERE reviews.book_id = books.id
AND books.author_id = authors.id
AND books.publisher_id = publishers.id
AND reviews.book_id = :id', ['id' => $id]);

        return $reviews;
    }

    public function all() {
    	$books = Book::get();
        $author = Author::get();
        $publisher = Publisher::get();

    	return view('books', [
    		'books' => $books,
            'author' => $author,
            'publisher' => $publisher
    	]);
    }
}
