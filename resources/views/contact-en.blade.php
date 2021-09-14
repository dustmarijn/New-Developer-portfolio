@extends('layout.app-en')
@section('content')
<h2>
contact profile
    </h2>
<div class="card">
    <img src="/images/2.JPG" alt="marijn op tq">
    <h1>Marijn Boeve</h1>
    <p class="title">Application Developer</p>
    <p>Landstede MBO, Zwolle</p>
    <div style="margin: 24px 0;">
        <a class="icon" href="https://www.instagram.com/dustmarijn/" target="_blank"><i class="fab fa-instagram"></i></a>
        <a class="icon" href="https://www.linkedin.com/in/marijn-boeve-b60b58192/" target="_blank"><i class="fab fa-linkedin"></i></a>
        <a class="icon" href="https://www.facebook.com/marijn.boeve" target="_blank"><i class="fab fa-facebook"></i></a>
        <a class="icon" href="/images/snap.jpg" target="_blank"><i class="fab fa-snapchat"></i></a>

    </div>
    <p><a href = "mailto: marijnboeve@hotmail.com"><button>Send me an Email!</button></a></p>
</div>
<br>
<br>
<script>
    window.Widget = { key: '5ef361051428b' };
    (function (e, t) {
        var n = e.createElement(t);
        n.async = true;
        n.src = 'https://static.futy-widget.com/js/widget.js';
        var r = e.getElementsByTagName(t)[0];
        r.parentNode.insertBefore(n, r);
    })(document, 'script');
</script>
    @endsection
