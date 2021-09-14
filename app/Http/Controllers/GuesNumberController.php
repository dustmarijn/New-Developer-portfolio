<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuesNumberController extends Controller
{
    public function startGame(Request $request)
    {
        $random = rand(1, 100);
        session([
            'number' => $random,
            'count' => 0
        ]);
        return view('guesnumber', ['melding' => '']);
    }

    public function Shownumber(Request $request)
    {
//echo $request->number;
        $random = session('number');
        $count = session('count');
//        echo $random, 'Random' . "<br>";
        $form = $request->number;
//        echo $form, '(form)';
        $melding = '';
        if ($form == $random) {
            $count++;
//           echo 'gelukt';
//            $gelukt = ['gelukt'];
            $melding = "gelukt met " . $count . " pogingen";
            $count = '0';
            $bodyclass = 'gelukt';
//            echo "<body style='background-color:greenyellow'>";
        }
        if ($form > $random) {
            $count++;
//            echo 'getal moet kleiner zijn';
//            $kleiner = ['getal moet kleiner zijn'];
            $melding = 'getal moet kleiner zijn';
            $bodyclass = 'kleiner';
//            echo "<body style='background-color:orangered'>";
        }
        if ($form < $random) {
            $count++;
//            echo 'getal moet groter zijn';
//            $groter = ['getal moet groter zijn'];
            $melding = 'getal moet groter zijn';
            $bodyclass = 'groter';
//            echo "<body style='background-color:orangered'>";
        }
// session($try);
        session(['count' => $count]);
        return view('guesnumber', [
            'bodyclass' => $bodyclass,
            'melding' => $melding]);
    }

    public function Pogingen(Request $request)
    {

    }

    public function reset(Request $request)
    {
        $request->reset;
        $request->session()->put('number', null);
        return view("guesnumber");

    }
}
