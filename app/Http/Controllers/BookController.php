<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\publishers;
use App\Models\books;
use App\Models\book_category;
use App\Models\categories;


class BookController extends Controller
{
    
    public function index($id){

        if(($id) === "1"){     
            return view('Detail',[
            
                "Home2" => books::find($id),
                "title" => "Harry Potter Prisoner",
                "page_container" => "Book List",
                
            ]);
        }  
        else if(($id) === "2"){
            return view('Detail',[
            
                "Home2" => books::find($id),
                "title" => "Tokyo Ueno Station",
                "page_container" => "Book List",
            ]);
        }
    }

    public function CategoryFantasy($id)
    {
        if(($id) === "1"){     
            return view('Detail',[
            
                "Home2" => books::find($id),
                "title" => "Category - Fantasy",
                "page_container" => "Category - Fantasy",
                
            ]);
        }
    }

    public function CategoryFiction($id)
    {
        if(($id) === "2"){     
            return view('Detail',[
            
                "Home2" => books::find($id),
                "title" => "Category - Fiction",
                "page_container" => "Category - Fiction",
                
            ]);
        }
    }

    public function Publisher()
    {
        return view('Publisher',[
            "title" => "Publisher",
            "page_container" => "Publisher"
        ]);
    }

    public function Contact()
    {
        return view('Contact',[
            "title" => "Contact",
            "page_container" => "Contact"
        ]);
    }
}
