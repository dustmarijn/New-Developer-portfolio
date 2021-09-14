<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <title>Marijn Boeve</title>
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body class="{{ $bodyclass ?? 'bg-color'}}">
<div class="hero-image1">
    <div class="hero-text">
        <h1>Hello! I'm Marijn</h1>
        <p></p>

    </div>
</div>
<header>
    <div class="nav">
        <ul>
            <li class="home"><a class="{{ (request()->is('/en')) ? 'active' : '' }}" href="/en">Home</a></li>
            <li class="cv"><a class="{{ (request()->is('cv-en')) ? 'active' : '' }}" href="/cv-en">Cv</a></li>
            <li class="overmij"><a class="{{ (request()->is('overmij-en')) ? 'active' : '' }}" href="/overmij-en">About Me</a></li>
            <li class="projecten"><a class="{{ (request()->is('projecten-en')) ? 'active' : '' }}" href="/projecten-en">Projects</a></li>
            <li class="contact"><a class="{{ (request()->is('contact-en')) ? 'active' : '' }}" href="/contact-en">Contact</a></li>
            <li class="blog"><a class="{{ (request()->is('blog-en')) ? 'active' : '' }}" href="/blog-en">Blog</a></li>
{{--            <li class="taal"><a href="/">Dutch?</a></li>--}}
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

