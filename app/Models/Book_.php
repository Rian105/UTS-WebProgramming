<?php

namespace App\Models;

class Book 
{
    private static $Book_List = [
        [
            "img" => "Harry-Potter-Prisoner.jpg",
            "slug" => "harry-potter-prisoner",
            "Title" => "Harry Potter and The Prisoner of Azkaban",
            "Title" => "Harry Potter and The Prisoner of Azkaban",
            "Author" => "J.K. Rowling",
            "Publisher" => "Bloomsbury",
            "Year" => "1999",
            "Synopsis" => "Harry Potter and the Prisoner of Azkaban is a fantasy novel written by British author J. K. Rowling and is the third in the Harry Potter series. The book follows Harry Potter, a young wizard, in his third year at Hogwarts School of Witchcraft and Wizardry."
        ],
        [
            "img" => "Tokyo-Ueno_Station.jpg",
            "slug" => "tokyo-ueno-station",
            "Title" => "Tokyo Ueno Station",
            "Title" => "Tokyo Ueno Station",
            "Author" => "Miri Yu",
            "Publisher" => "Kawade Shobō Shinsha",
            "Year" => "2014",
            "Synopsis" => "Born in Fukushima in 1933, the same year as the Emperor, Kazu’s life is tied by a series of coincidences to Japan’s Imperial family and to one particular spot in Tokyo; the park near Ueno Station – the same place his unquiet spirit now haunts in death."
        ]
    ];

    public static function all()
    {
        return collect(self::$Book_List);
    }

    public static function find($slug)
    {
        $posts = static::all();
        
        return $posts->firstWhere('slug', $slug);
    }

}
