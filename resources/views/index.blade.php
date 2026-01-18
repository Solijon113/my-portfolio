<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lister Solijon - Portfolio</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="{{ url('assets/css/style.css') }}">
</head>

<body>

    <!-- Header Section Code -->

    <header class="header">

        <a href="#home" class="logo">Lister Solijon <span>Portfolio</span></a>

        <i class='bx  bx-menu' id="menu-icon"></i>

        <nav class="navbar">
            <a href="#">Home</a>
            <a href="#about">About</a>
            <a href="#services">Services</a>
            <a href="#testimonial">Testimonial</a>
            <a href="#contact">Contact</a>
        </nav>

    </header>

    <!-- Home Section Code -->

    <section class="home" id="home">
        <div class="home-img">
            <img src="{{ url('assets/imgs/picture.jpg') }}" alt="Profile Image">
        </div>

        <div class="home-content">
            <h1>Hi, I'm Lister Y. Solijon</h1>
            <h3>Aspiring <span class="multiple-text"></span></h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur libero harum possimus alias
                distinctio ratione. Eum doloribus blanditiis quisquam odio facere explicabo enim iste, vitae libero illo
                aut incidunt amet deserunt illum sint necessitatibus modi, asperiores repellendus consequatur
                exercitationem ab similique. Aperiam cupiditate odit soluta nam reprehenderit optio fugiat modi?</p>

            <div class="social-media">
                <a href="#"><i class='bx bxl-linkedin'></i></a>
                <a href="https://github.com/Solijon113" target="_blank"><i class='bx bxl-github'></i></a>
                <a href="https://www.facebook.com/listersolijon11" target="_blank"><i
                        class='bx bxl-facebook-circle'></i></a>
                <a href="https://www.instagram.com/lister.solijon/#" target="_blank"><i class='bx bxl-instagram'></i></a>
            </div>
            <a href="#" class="btn">View My Work</a>
        </div>
    </section>


    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
    <script src="{{ url('assets/js/script.js') }}"></script>



</body>

</html>