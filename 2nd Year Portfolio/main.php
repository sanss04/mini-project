<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>

<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- ===== CSS ===== -->
        <link rel="stylesheet" href="assets/css/styles.css">

        <!-- ===== BOX ICONS ===== -->
        <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

        <title>Portfolio</title>
    </head>
    <body>

    <a href="logout.php">Logout</a>

        <!--===== HEADER =====-->
        <header class="l-header">
            <nav class="nav bd-grid">
                <div>
                    <a href="#" class="nav__logo">Portfolio</a>
                </div>

                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item"><a href="#home" class="nav__link active">Home</a></li>
                        <li class="nav__item"><a href="#about" class="nav__link">About</a></li>
                        <li class="nav__item"><a href="#skills" class="nav__link">Skills</a></li>
                        <li class="nav__item"><a href="#project" class="nav__link">Project</a></li>
                        <li class="nav__item"><a href="#contact" class="nav__link">Contact</a></li>
                        <li class="nav__item"><a href="index.php" class="nav__link">Login</a></li>

                    </ul>
                </div>

                <div class="nav__toggle" id="nav-toggle">
                    <i class='bx bx-menu'></i>
                </div>
            </nav>
        </header>

        <main class="l-main">

            <!--===== HOME =====-->
            <section class="home" id="home">
                <div class="home__container bd-grid">
                    <h1 class="home__title"><span>HE</span><br>LLO.</h1>

                    <div class="home__scroll">
                        <a href="#about" class="home__scroll-link"><i class='bx bx-up-arrow-alt' ></i>Scroll down</a>
                    </div>

                    <img src="assets/img/main.png" alt="" class="home__img">
                </div>
            </section>
            
            <!--===== ABOUT =====-->
            <section class="about section" id="about">
                <h2 class="section-title">About</h2>

                <div class="about__container bd-grid">
                    <div class="about__img">
                        <img src="assets/img/avatar.svg" alt="">
                    </div>

                    <div>
                        <h2 class="about__subtitle">This is our Mini-Project</h2>
                        <span class="about__profession">Portfolio Website
                            <br> Hi Everyone, this is our Mini-Project that we created using Html, Css, Javascript and Php. This Portfolio will give 
                            you a breif introduction of things that we have learned & with our resume too.
                        </span>
                        <p class="about__text"></p>
                        <div class="about__social">
                            <a href="https://github.com/shaggyyy2002" target="_blank" class="about__social-icon"><i class='bx bxl-github' ></i></a>
                            
                        </div>
                    </div>
                </div>
            </section>

            <!--===== SKILLS =====-->
            <section class="skills section" id="skills">
                <h2 class="section-title">Technology Used</h2>

                <div class="skills__container bd-grid">
                    <div class="skills__box">
                        <h3 class="skills__subtitle">Development</h3>
                        <span class="skills__name">Html</span>
                        <span class="skills__name">Css</span>
                        <span class="skills__name">Javascript</span>
                        <span class="skills__name">Scss</span>
                        <span class="skills__name">UI(Basics)</span>
                        <span class="skills__name">UX(Basics)</span>
                        <span class="skills__name">Git</span>
                        <span class="skills__name">GitHub</span>
                        <span class="skills__name">php</span>


                        
                        <h3 class="skills__subtitle">Design</h3>
                        <span class="skills__name">Figma</span>
                        <span class="skills__name">Adobe Lightroom</span>
                    </div>

                    <div class="skills__img">
                        <img src="assets/img/tech.png" alt="">
                    </div>
                </div>
            </section>

            <!--===== PORTFOLIO =====-->
            <section class="portfolio section" id="project">
                <h2 class="section-title">Project</h2>

                <div class="portfolio__container bd-grid">
                    <div class="portfolio__img">
                        <img src="assets/img/chatbot.jpg" alt="">

                        <div class="portfolio__link">
                            <a href="https://github.com/shaggyyy2002/ChatBot-miniPj" target="_blank" class="portfolio__link-name">Chatbot</a>
                        </div>
                    </div>
                    <div class="portfolio__img">
                        <img src="assets/img/colore.png" alt="">

                        <div class="portfolio__link">
                            <a href="https://github.com/shaggyyy2002/Web-Devlopment" target="_blank" class="portfolio__link-name">Color Website</a>
                        </div>
                    </div>
                    <div class="portfolio__img">
                        <img src="assets/img/crop.png" alt="">

                        <div class="portfolio__link">
                            <a href="https://acpceacin-my.sharepoint.com/:p:/r/personal/nitinagouda_acpce_ac_in/_layouts/15/Doc.aspx?sourcedoc=%7BFA73DC94-D886-4E34-A038-A779B69BD647%7D&file=Personal%20Profile%20Website.pptx&wdOrigin=OFFICECOM-WEB.MAIN.REC&ct=1639053897463&action=edit&mobileredirect=true&cid=13fb682a-e2d4-4e5e-ace4-dda4f5d67591" 
                           target="_blank" class="portfolio__link-name">Presentation</a>
                        </div>
                    </div>
                    <div class="portfolio__img">
                        <img src="assets/img/kaustubh.jpg" alt="">

                        <div class="portfolio__link">
                            <a href="assets/img/kaustubh resume.pdf" target="_blank" class="portfolio__link-name">Kaustubh's Resume </a>
                        </div>
                    </div>
                    <div class="portfolio__img">
                        <img src="assets/img/nitin.jpg" alt="">

                        <div class="portfolio__link">
                            <a href="assets/img/NITIN RESUME.pdf" target="_blank" class="portfolio__link-name">Nitin's Resume</a>
                        </div>
                    </div>
                    <div class="portfolio__img">
                        <img src="assets/img/leena.jpg" alt="">

                        <div class="portfolio__link">
                            <a href="assets/img/leena resume.pdf" target="_blank" class="portfolio__link-name">Leena's Resume</a>
                        </div>
                    </div>
                </div>
            </section>

            <!--===== CONTACT =====-->
            <section class="contact section" id="contact">
                <h2 class="section-title">Contact</h2>

                <div class="contact__container bd-grid">
                    <div class="contact__info">
                        
                        <h3 class="contact__subtitle">NAME</h3>
                        <span class="contact__text">Nitin Gouda</span>
                        <br>
                        <span class="contact__text">Leena Raut</span>
                        <br>
                        <span class="contact__text">Kaustubh Dhakate</span>


                        <h3 class="contact__subtitle">EMAIL</h3>
                        <span class="contact__text">nitinagouda@acpce.ac.in</span>
                        <br>
                        <span class="contact__text">leenasraut@acpce.ac.in</span>
                        <br>
                        <span class="contact__text">kaustubhcdhakate@acpce.ac.in</span>


                        <h3 class="contact__subtitle">ADDRESS</h3>
                        <span class="contact__text">A.C Patil College of Engineering</span>
                    </div>

                    <form action="mail.php" method="post" class="contact__form">
                        <div class="contact__inputs">
                            <input type="text" placeholder="Name" class="contact__input">
                            <input type="mail" placeholder="Email" class="contact__input">
                        </div>

                        <textarea name="" id="" cols="0" rows="10" class="contact__input"></textarea>

                        <input type="submit" value="Submit" class="contact__button">
                    </form>
                </div>
            </section>
        </main>

        <!--===== FOOTER =====-->
        <footer class="footer section">
            <div class="footer__container bd-grid">
                <div class="footer__data">
                    <h2 class="footer__title">Website</h2>
                    <p class="footer__text"> The goal of this project is to learn the basics about a digital portfolio is,
                         its value and what it's used for and how to create one yourself.</p>

                </div>

                <div class="footer__data">
                    <h2 class="footer__title">EXPLORE</h2>
                    <ul>
                        <li><a href="#home" class="footer__link">Home</a></li>
                        <li><a href="#about" class="footer__link">About</a></li>
                        <li><a href="#skills" class="footer__link">Skills</a></li>
                        <li><a href="#project" class="footer__link">Project</a></li>
                        <li><a href="#contact" class="footer__link">Contact</a></li>
                    </ul>
                </div>
                
                <div class="footer__data">
                    <h2 class="footer__title">FOLLOW</h2>
                    <a href="https://github.com/shaggyyy2002" target="_blank" class="about__social-icon"><i class='bx bxl-github' ></i></a>
                    <a href="https://github.com/Leenasraut2001" target="_blank" class="about__social-icon"><i class='bx bxl-github' ></i></a>

                </div>


            </div>
        </footer>

        <!-- ===== SCROLL REVEAL ===== -->
        <script src="https://unpkg.com/scrollreveal"></script>

        <!--===== MAIN JS =====-->
        <script src="assets/js/main.js"></script>
    </body>
</html>