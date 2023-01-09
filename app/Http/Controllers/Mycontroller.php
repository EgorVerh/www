<?php

namespace App\Http\Controllers;

use App\BooksAuthors;
use App\Polki;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\shkaf;
use App\booksonpolka;
use App\Books;
use App\Authors;

class Mycontroller extends Controller
{
    public function shkaf()
    {
        $visited = shkaf::all();
        return view('mytestbd', ['visited' => $visited ] );
    }
    public function polki($id)
    {
        // $booksonpolka = booksonpolka::find($id);
        // var_dump($booksonpolka->shkaf);
        // die();
        // $author = Authors::find(1);
        // var_dump($author->books);
        // die();where('shkaf_id', '=', $id)->get()
        $visited = Polki::where('shkaf_id', $id)->get();
        $nomer = $id;
        return view('polki', [ 'visited' =>$visited, 'nomer'=>$nomer ] );

    }
    public function booksonpolke($id)
    {
        $visited = Books::where('polki_id',$id)->get();
        $nomer = $id;
        return view('booksonpolka', [ 'visited' =>$visited,'nomer'=>$nomer ] );
    }
    public function booksauthors($id)
    {
        $visited = BooksAuthors::where('books_id', $id)->join('authors', 'authors_id', '=', 'id')->get();
        $mesto = Books::where('id',$id)->first();
        return view('booksauthor', [ 'visited' =>$visited,'mesto'=> $mesto ] );
    }
    public function authorbooks($id)
    {
        $visited = BooksAuthors::where('authors_id', $id)->join('books', 'books_id', '=', 'id')->get();
        $mesto = Authors::where('id',$id)->first();
        return view('authorbooks', [ 'visited' =>$visited,'mesto'=> $mesto] );
    }
}
