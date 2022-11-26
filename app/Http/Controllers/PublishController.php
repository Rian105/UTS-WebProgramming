<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\publishers;
use App\Models\books;
use App\Models\book_category;
use App\Models\categories;

class PublishController extends Controller
{
    public function PublisherHarry($id)
    {
        if(($id) === "1"){     
            return view('PublisherHarry',[
                "Home3" => publishers::find($id),
                "title" => "Publisher",
                "page_container" => "Publisher",
                "Title" => "Harry Potter and The Prisoner of Azkaban",
                "Author" => "J.K. Rowling"
            ]);
        }
    }

    public function PublisherTokyo($id)
    {
        if(($id) === "2"){     
            return view('PublisherTokyo',[
            
                "Home3" => publishers::find($id),
                "title" => "Publisher",
                "page_container" => "Publisher",
                "Title" => "Tokyo Ueno Station",
                "Author" => "Miri Yu"
            ]);
        }
    }
}
