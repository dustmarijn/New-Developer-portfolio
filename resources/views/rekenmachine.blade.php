@extends('layout.app')
@section('content')
    {{--post om te versturen--}}
    <div class="optellen">
        <form method="post">
            {{--    key gen--}}
            @csrf
            {{--    text als wat er in moet, dan de naam van het form, dan wat er in staat als hij leeg is--}}
            <input type="number" name="nummer1" placeholder="eerste nummer">
            <h1>+</h1>
            <input type="number" name="nummer2" placeholder="tweede nummer">
            {{--    eerst wat die doet (versturen), dan de naam--}}
            <input type="submit" value="versturen">
            <br>
            <h1>De uitkomst van de som is {{$uitkomst}}</h1>
    </div>
    </form>


@endsection
