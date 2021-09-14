@extends('layout.app')
@section('content')
    <h1 style='text-transform: uppercase; font-weight:bold;'>
        {{$melding ?? 'geef een cijfer'}}
    </h1>
    {{$count ?? ''}}
    <hr>

    <form action="/guesnumber" method="post">
        @csrf
        <input type="number" maxlength="3" placeholder="Nummer" name="number" autocomplete="off" autofocus>
        <input type="submit" VALUE="Verzenden">
    </form>
    <div class="reset">
    <form action="/startGame" method="post">
        @csrf
        <input type="submit" value="speel opnieuw" name="reset">
    </form>
    </div>
@endsection
