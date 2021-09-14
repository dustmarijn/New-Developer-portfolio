<!DOCTYPE html>
<html lang="nl" dir="ltr">
<head>
    <title>Marijn Boeve</title>
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @yield('head')
</head>
<body class="{{ $bodyclass ?? 'bg-color'}}">
<div class="hero-image1">
    <div class="hero-text">
        <h1>Hallo! Ik ben Marijn</h1>
        <p></p>

    </div>
</div>
<header>
    <div class="nav">
        <ul>
            <li class="home"><a class="{{ (request()->is('/')) ? 'active' : '' }}" href="/">Home</a></li>
            <li class="cv"><a class="{{ (request()->is('cv')) ? 'active' : '' }}" href="/cv">Cv</a></li>
            <li class="overmij"><a class="{{ (request()->is('overmij')) ? 'active' : '' }}" href="/overmij">Over mij</a></li>
            <li class="projecten"><a class="{{ (request()->is('projecten')) ? 'active' : '' }}" href="/projecten">Projecten</a></li>
            <li class="contact"><a class="{{ (request()->is('contact')) ? 'active' : '' }}" href="/contact">Contact</a></li>
            <li class="blog"><a class="{{ (request()->is('blog')) ? 'active' : '' }}" href="/blog">Blog</a></li>
{{--            <li class="taal"><a href="/en">English?</a></li>--}}
        </ul>
    </div>
</header>
<div class="cvcontent">
    @yield('content')
</div>
<div class="footer">
    <div class="middle">
        <a class="btn" href="https://www.linkedin.com/in/marijn-boeve-b60b58192/" target="_blank">
            <i class="fab fa-linkedin"></i>
        </a>
        <a class="btn" href=/images/snap.jpg target="_blank">
            <i class="fab fa-snapchat"></i>
        </a>
        <a class="btn" href="https://www.instagram.com/dustmarijn/" target="_blank">
            <i class="fab fa-instagram"></i>
        </a>
        <a class="btn" href="https://open.spotify.com/user/eyh1wuvc813ptmho53f0ugcb1?si=iyspA7vwSUenKaPtlNhvcg" target="_blank">
            <i class="fab fa-spotify"></i>
        </a>
        <a class="btn" href="https://www.reddit.com/user/DustMarijn/" target="_blank">
            <i class="fab fa-reddit"></i>
        </a>
        <a class="btn" href="https://www.facebook.com/marijn.boeve" target="_blank">
            <i class="fab fa-facebook"></i>
        </a>

    </div>
    <div>
        Copyright <?php echo date("Y"); ?> - Marijn Boeve
{{--        - Application Develeper - landstede MBO Zwolle--}}
    </div>
</body>
</html>

