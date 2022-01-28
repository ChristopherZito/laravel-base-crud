<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    protected $fillable = [

        'title',
        'author',
        'release_date',
        'pages', 

    ];

    public function infoComic()
    {
        echo "Comic: ". $this-> title . " - " . $this->release_date 
        . "<br>". "Made BY: " . $this->author 
        . "<br>". "Cap. " . "[" .$this->pages ."]"
        ."<br>". "ID: ". $this->id;
    }
}
