<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function greeting($time)
    {
        if ($time == 'morning') {
            $comment = '朝のあいさつ';
            $greet = 'おはようございます';
        } elseif ($time == 'afternoon') {
            $comment = '昼のあいさつ';
            $greet = 'こんにちは';
        } elseif ($time == 'evening') {
            $comment = '夕方のあいさつ';
            $greet = 'こんばんは';
        } elseif ($time == 'night') {
            $comment = '夜のあいさつ';
            $greet = 'おやすみ';
        } else {
            $comment = 'え？いつの時間帯ですか';
            $greet = 'スペルミスなのではないでしょうか';
        }

        return view('word', [
            'comment' => $comment,
            'greet' => $greet
        ]);
    }

    public function freedom($msg)
    {
        return view('freedom', ['msg' => $msg]);
    }

    public function random()
    {
        $array = ["おはよう", 'こんにちは', 'こんばんは', 'おやすみ'];
        $random = $array[array_rand($array)];
        return view('random', ['random' => $random]);
    }
}
