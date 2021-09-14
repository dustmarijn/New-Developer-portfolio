<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WhosebirthdayController extends Controller
{
    public function birthday(Request $request)
    {
// Array van de namen van de klas //
        $personen = ['Arian', 'Erik', 'Sacha', 'Ramon', 'Rutger', 'Jens', 'Sil', 'Mark', 'Wessel', 'Mike', 'Nick', 'Roy', 'Jaron', 'Janick', 'Marijn', 'Ilse', 'Sophie', 'Thijmen', 'Danielle'];
// Array van de datums van de jarige(op volgorde van de namen moeten gelijk zijn //
        $verjaardagen = ['30-09', '11-10', '11-06', '11-04', '03-04', '31-10', '07-06', '29-01', '15-04', '15-10', '14-10', '14-09', '01-02', '08-03', '06-07', '27-11', '10-07', '17-09', '26-06'];
//    datum selector van today
        $datum = date('d-m');
//    Geeft weer als niemand jarig is
        $verjaardagsmelding = '';
// als de datum niet word gevonden loop opnieuw doen
        $found = false;
//        Geeft persoon met verjaardag weer
        foreach ($personen as $positie => $persoon) {
//     Geeft weer of iemand jarig is
            if ($datum == $verjaardagen[$positie]) {
//            geeft weer op de site wat er is uitgevoerd
                $verjaardagsmelding .= $persoon . " is jarig ";
//                als er een persoon is gevonden door naar if found
                $found = true;
            }
        }
//        melding voor als er niemand jarig is door niet false
        if (!$found) {
            $verjaardagsmelding = 'Niemand is jarig';
        }
        return view('whosebirthday',
            ['melding' => $verjaardagsmelding]);
    }
}
