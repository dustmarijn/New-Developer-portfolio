<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class deAlienizeController extends Controller
{
    public function deAlienize(String $alienText)
    {
        /*
         * Programmeer onder dit commentaar jouw functionaliteit de
         * juiste tekst te laten zien. Je mag hierbij *geen* gebruik maken van
         * de ingebouwde functie str_rot13().
         */ //

//        Arrays met alphabet's
        $alphabet = ["a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z",];
        $alphabetalien = ["n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z", "a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m"];
        $leeg = [''];
//        begint op positie 0
        $pos = 0;
//        haalt de sting uit elkaar en maakt van alien text een array
        $arrayalienText = str_split($alienText);
//        maakt de karakters los
        foreach ($arrayalienText as $letter) {
//            var_dump($letter);//            zet de letters op pos om te vervangen
            foreach ($alphabet as $pos => $alphabetletter) {
//               spatie toevoegen door hem te printen
                if ($letter == ' '){
//                    echo $letter;
                }
//                zet alles posities om in de goede volghorde
                if ($letter == $alphabetletter){
//                    echo $alphabetalien[$pos];
//                    $disarray = $alphabetalien[$pos];
                    var_dump($disarray);
                }
                if ($pos == $pos=27);
            }

        }
//        return view('da', [$this->deAlienize($request)])
//return view('deAlienize', ['data' => $disarray]);
//        return view('deAlienize',['data'=>$request->all()]);
//        return view('deAlienize', [$alphabetalien[$pos]);

//        return view('whosebirthday',
//            ['melding' => $verjaardagsmelding]);

    }
//public function returnalien(Request $request){
//    return view('deAlienize', [$this->deAlienize($request->$disarray)]);
//}

    public
    function showDeAlienizedText()
    {
        echo $this->deAlienize('nqn ybirynpr jnf qr nyyrerrefgr cebtenzzrhe');
    }
}
