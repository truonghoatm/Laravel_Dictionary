<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Array_;

class DictionaryController extends Controller
{
    public function checkWord(Request $request){
        $newWord = $request->word;
        $array = array("hello"=>"xin chao",
        "goodbye"=>"tam biet",
            "sorry"=>"xin loi"
    );
        foreach ($array as $key => $value){
            if($newWord == $key){
                $resultWord = $value;
                break;
            }else{
                $resultWord = "Khong tim thay tu can tra";
            }
        }
        return view ('display', compact('resultWord'));

    }
}
