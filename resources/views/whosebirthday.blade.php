@extends('layout.app')
@section('content')
    <h2> WhoseBirthdayController</h2>
    <div class="block_container">
    <div class="borderbirthday">
{{$melding}}
    </div>
    <div class="codebox">
<p class="code-birthday">
    public function birthday(Request $request)<br>
    {
    // Array van de namen van de klas //<br>
    $personen = ['Arian', 'Erik', 'Sacha', 'Ramon', 'Rutger', 'Jens', 'Sil', 'Mark', 'Wessel', 'Mike', 'Nick', 'Roy', 'Jaron', 'Janick', 'Marijn', 'Ilse', 'Sophie', 'Thijmen', 'Danielle'];<br>
    // Array van de datums van de jarige(op volgorde van de namen moeten gelijk zijn //<br>
    $verjaardagen = ['30-09', '11-10', '11-06', '11-04', '03-04', '31-10', '07-06', '29-01', '15-04', '15-10', '14-10', '14-09', '01-02', '08-03', '06-07', '27-11', '10-07', '17-09', '26-06'];<br>
    //    datum selector van today<br>
    $datum = date('d-m');<br>
    //    Geeft weer als niemand jarig is<br>
    $verjaardagsmelding = '';<br>
    // als de datum niet word gevonden loop opnieuw doen<br>
    $found = false;<br>
    //        Geeft persoon met verjaardag weer<br>
    foreach ($personen as $positie => $persoon) {<br>
    //     Geeft weer of iemand jarig is<br>
    if ($datum == $verjaardagen[$positie]) {<br>
    //            geeft weer op de site wat er is uitgevoerd<br>
    $verjaardagsmelding .= $persoon . " is jarig ";<br>
    //                als er een persoon is gevonden door naar if found<br>
    $found = true;<br>
    }<br>
    }<br>
    //        melding voor als er niemand jarig is door niet false<br>
    if (!$found) {<br>
    $verjaardagsmelding = 'Niemand is jarig';<br>
    }<br>
    return view('whosebirthday',<br>
    ['melding' => $verjaardagsmelding]);<br>
    }<br>
</p>
    </div>
    </div>
@endsection
