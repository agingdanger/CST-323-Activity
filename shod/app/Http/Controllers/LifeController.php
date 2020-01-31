<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\BusinessService\UserBusinessService;
use App\Model\Verse;

class LifeController extends Controller
{
    public function onGenerate(Request $request)
    {
        $Business = new UserBusinessService();
        
        $booknum = rand(0, 66);
        $books = array(
            1 => 'Genesis',          2 => 'Exodus',           3 => 'Leviticus',      4 => 'Numbers',
            5 => 'Deuteronomy',      6 => 'Joshua',           7 => 'Judges',         8 => 'Ruth',
            9 => '1Samuel',        10 => '2Samuel',        11 => '1Kings',       12 => '2Kings',
            13 => '1Chronicles',    14 => '2Chronicles',    15 => 'Ezra',          16 => 'Nehemiah',
            17 => 'Esther',          18 => 'Job',             19 => 'Psalm',         20 => 'Proverbs',
            21 => 'Ecclesiastes',    22 => 'Song of Solomon', 23 => 'Isaiah',        24 => 'Jeremiah',
            25 => 'Lamentations',    26 => 'Ezekiel',         27 => 'Daniel',        28 => 'Hosea',
            29 => 'Joel',            30 => 'Amos',            31 => 'Obadiah',       32 => 'Jonah',
            33 => 'Micah',           34 => 'Nahum',           35 => 'Habakkuk',      36 => 'Zephaniah',
            37 => 'Haggai',          38 => 'Zechariah',       39 => 'Malachi',       40 => 'Matthew',
            41 => 'Mark',            42 => 'Luke',            43 => 'John',          44 => 'Acts',
            45 => 'Romans',          46 => '1Corinthians',   47 => '2Corinthians', 48 => 'Galatians',
            49 => 'Ephesians',       50 => 'Philippians',     51 => 'Colossians',    52 => '1Thessalonians',
            53 => '2Thessalonians', 54 => '1Timothy',       55 => '2Timothy',     56 => 'Titus',
            57 => 'Philemon',        58 => 'Hebrews',         59 => 'James',         60 => '1Peter',
            61 => '2Peter',         62 => '1John',          63 => '2John',        64 => '3John',
            65 => 'Jude',            66 => 'Revelation'
        );
        
        $verse = file_get_contents("https://bible-api.com/" . $books[$booknum] . "+1:10?callback=func");
        $scripture = new Verse($verse);
        $serve = $Business->register($scripture);
        
        return view('home') ->with('response', $verse);
    }
}
