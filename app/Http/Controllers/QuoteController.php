<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuoteController extends Controller
{
    function randomQuote(){
    $quotes = [
        "My greatest award is what I'm about to do.",
        "For me giving up is way harder than trying.",
        "Everything you do in life stems from either fear or love",
        "Tweeting is legal and also therapeutic",
        "People always say that you can't please everybody. I think that's a cop-out. Why not attempt it? Cause think of all the people that you will please if you try.",
        "I still think I am the greatest.",
        "Keep squares out yo circle",
        "We all self-conscious. I'm just the first to admit it.",
        "Man... whatever happened to my antique fish tank?",
        "I'll say things that are serious and put them in a joke form so people can enjoy them. We laugh to keep from crying.",
        "Sometimes you have to get rid of everything",
        "Burn that excel spread sheet",
        "I love sleep; it's my favorite.",
        "I wish I had a friend like me"
    ];

    $randomNumber = rand(0, sizeof($quotes)-1); //sizeof returns the human countable number of the array (so it starts with 1), while the index starts at 0.
    $randomQuote = $quotes[$randomNumber];
    $assoArray = ['quote' => $randomQuote];
    return response()->json($assoArray);
    }
}
