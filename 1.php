
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">

        <link rel="stylesheet" href="icon-font.css">
        <link rel="stylesheet" href="style.css">
        <link rel="shortcut icon" type="image/png" href="img/favicon.png">
        
        <title>Web based Barangay 24 Management System</title>
    </head>
    
    <body>


       <div class="navigation">
            <input type="checkbox" class="navigation__checkbox" id="navi_toggle">

            <label for="navi_toggle" class="navigation__button">
                <span class="navigation__icon">&nbsp;</span>
            </label>

            <div class="navigation__background">&nbsp;</div>

            <nav class="navigation__nav">
                <ul class="navigation__list">
                    <li class="navigation__item"><a href="#" class="navigation__link"><span>01</span>Home</a></li>
                    <li class="navigation__item"><a href="#section-about" class="navigation__link"><span>02</span>News</a></li>
                    <li class="navigation__item"><a href="#section-features" class="navigation__link"><span>03</span>Announcement</a></li>
                    <li class="navigation__item"><a href="#section-tours" class="navigation__link"><span>04</span>Program</a></li>
                    <li class="navigation__item"><a href="#section-stories" class="navigation__link"><span>05</span>Official</a></li>
                    <li class="navigation__item"><a href="#section-book" class="navigation__link"><span>06</span>Resident Request</a></li>
                    <li class="navigation__item"><a href="#section-end" class="navigation__link"><span>07</span>About Us</a></li>
                </ul>
            </nav>
        </div>


        <header class="header">
            <div class="header__logobox">
                <img src="img/logo-white.png"  alt="Logo" class="header__Logo">

            </div>

            <div class="header__text-box">
                <h1 class="heading-primary">
                    <span class="heading-primary--main">BRGY 24</span>
                    <span class="heading-primary--sub">Web-Based Management System</span>
                </h1>

                <a  href="admin" class="btn btn--white btn--animated">Admin</a>

            </div>

        </header>
<!--
        <section class="grid-test">
            <div class="row">
                <div class="col-1-of-2">
                    Col 1 of 2
                </div>
                <div class="col-1-of-2">
                    Col 1 of 2
                </div>
            </div>

            <div class="row">
                <div class="col-1-of-3">
                    Col 1 of 3
                </div>
                <div class="col-1-of-3">
                    Col 1 of 3
                </div>
                <div class="col-1-of-3">
                    Col 1 of 3
                </div>
            </div>

            <div class="row">
                <div class="col-1-of-3">
                    Col 1 of 3
                </div>
                <div class="col-2-of-3">
                    Col 2 of 3
                </div>
            </div>

            

            <div class="row">
                <div class="col-1-of-4">
                    Col 1 of 4
                </div>
                <div class="col-3-of-4">
                    Col 3 of 4
                </div>
            </div>

            <div class="row">
                <div class="col-1-of-4">
                    Col 1 of 4
                </div>
                <div class="col-1-of-4">
                    Col 1 of 4
                </div>
                <div class="col-2-of-4">
                    Col 2 of 4
                </div>
            </div>

            <div class="row">
                <div class="col-1-of-4">
                    Col 1 of 4
                </div>
                <div class="col-1-of-4">
                    Col 1 of 4
                </div>
                <div class="col-1-of-4">
                    Col 1 of 4
                </div>
                <div class="col-1-of-4">
                    Col 1 of 4
                </div>
            </div>
        </section>
        -->
        <main>
            <section class="section-about" id="section-about">
                <div class="u-centre-text u-margin-bottom-big"><!--this is a utility class only one goal that is to centre the text-->
                    <h2 class="heading-secondary">
                        Barangay 24 News Update
                    </h2>
                </div>

                <div class="row">
                    <div class="col-1-of-2">
                        <h3 class="heading-tertiary u-margin-bottom-small">BATANGAS CITY are slowly recovering</h3>
                        <p class="paragraph">
                            Barangay Poblacion said that in the next four days, five other barangays will also be declared "Covid-free" because the remaining Covid-19 patients from these places are expected to recover. 
                        </p>

                        <h3 class="heading-tertiary u-margin-bottom-small">Officials donate supplies to all the household in their barangay</h3>
                        <p class="paragraph">
                            Foods and daily needs are given to each household in the barangay of Poblacion. Officials continue to help their residents who are badly in need. 
                        </p>

                        <a href="#" class="btn-text">Read More &rarr;</a>
                    </div>
                    <div class="col-1-of-2">
                        <div class="composition">

                            <img srcset="img/news3.jpg 300w, img/news3.jpg 100w" sizes="(max-width:56.25em) 20vw, (max-width: 37.5em) 30vw, 300px" alt="Photo1" class="composition__photo composition__photo--p1" src="img/news3.jpg">
                            <img srcset="img/news1.jpg 300w, img/news1.jpg 100w" sizes="(max-width:56.25em) 20vw, (max-width: 37.5em) 30vw, 300px" alt="Photo2" class="composition__photo composition__photo--p2" src="img/news1">
                            <img srcset="img/news2.jpg 300w, img/news2.jpg 100w" sizes="(max-width:56.25em) 20vw, (max-width: 37.5em) 30vw, 300px" alt="Photo3" class="composition__photo composition__photo--p3" src="img/news2.jpg">
<!--
                            <img src="img/nat-1-large.jpg" alt="Photo1" class="composition__photo composition__photo--p1">
                            <img src="img/nat-2-large.jpg" alt="Photo2" class="composition__photo composition__photo--p2">
                            <img src="img/nat-3-large.jpg" alt="Photo3" class="composition__photo composition__photo--p3">
                            -->
                        </div>
                    </div>
                </div>
 
            </section>
            <section class="section-features" id="section-features">
                
                <div class="row">
                        <div class="col-1-of-4">
                            <div class="feature-box">
                                <i class="feature-box__icon icon-basic-world"></i>
                                <h3 class="heading-tertiary">Announcement #1</h3>
                                <p class="feature-box__text">
                                    More or less 300 individuals, mostly young children benefitted from the free circumcision under the “Operation Tuli” of the city government.Registration is required and his will last until the end of December, 2020.
                                </p>
                            </div>
                        </div>

                        <div class="col-1-of-4">
                            <div class="feature-box">
                                <i class="feature-box__icon icon-basic-compass"></i>
                                <h3 class="heading-tertiary">Announcement #2</h3>
                                <p class="feature-box__text">
                                    DECEMBER 30, 2020- Senior Citizens are required to join the meeting at the Barangay Hall for some projects that will benefit them. The meeting will start at 1:00pm-4:00pm. Facemasks and faceshields is a must. 
                                </p>
                            </div>
                        </div>

                        <div class="col-1-of-4">
                            <div class="feature-box">
                                <i class="feature-box__icon icon-basic-map"></i>
                                <h3 class="heading-tertiary">Announcement #3</h3>
                                <p class="feature-box__text">
                                    By the month of January 2021, the barangay advised the residents to stay at home because they are implementing lockdown to their respective barangay. The officials wants their residents and even themselves to be safe.
                                </p>
                            </div>
                        </div>

                        <div class="col-1-of-4">
                            <div class="feature-box">
                                <i class="feature-box__icon icon-basic-heart"></i>
                                <h3 class="heading-tertiary">Announcement #4</h3>
                                <p class="feature-box__text">
                                    Requesting of Documents needed for Scholarship and more are soon be available through online. Just visit the website and residents can request documents. The officials are responsible for processing the certificates needed.
                                </p>
                            </div>
                        </div>
                </div>
                
            </section>


            <section class="section-tours" id="section-tours">
                <div class="u-centre-text u-margin-bottom-big"><!--this is a utility class only one goal that is to centre the text-->
                    <h2 class="heading-secondary">
                        POPULAR PROGRAMS
                    </h2>
                    

                    <div class="row">
                        <div class="col-1-of-3">
                            <div class="card">
                                <div class="card__side card__side--front">
                                    <div class="card__picture card__picture--1">
                                        
                                    </div>
                                    <h4 class="card__heading">
                                        <span class="card__heading-span card__heading-span--1">
                                             BASKETBALL LEAGUE
                                        </span>
                                        
                                    </h4>
                                    <div class="card__details">
                                        <ul>
                                           <li>1 week</li>
                                            <li>50 players</li>
                                            <li>Officials present</li>
                                            <li>Cash Prize</li>
                                            <li>For fun and enjoyment</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card__side card__side--back card__side--back-1">
                                    <div class="card__cta">
                                        <div class="card__price-box">
                                            <p class="card__price-only">Only</p>
                                            <p class="card__price-value">P 50.00</p>
                                        </div>
                                        <a href="#popup" class="btn btn--white">Register</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-1-of-3">
                            <div class="card">
                                <div class="card__side card__side--front">
                                    <div class="card__picture card__picture--2">
                                        &nbsp;
                                    </div>
                                    <h4 class="card__heading">
                                        <span class="card__heading-span card__heading-span--2">
                                            FIESTA
                                        </span>
                                        
                                    </h4>
                                    <div class="card__details">
                                        <ul>
                                            <li>June 10-11</li>
                                            <li>100 people</li>
                                            <li>Boodle Fight</li>
                                            <li>Musician with sagala</li>
                                            <li>Battle of the Band</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card__side card__side--back card__side--back-2">
                                    <div class="card__cta">
                                        <div class="card__price-box">
                                            <p class="card__price-only">Only</p>
                                            <p class="card__price-value">P 20.00</p>
                                        </div>
                                        <a href="#popup" class="btn btn--white">JOIN</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-1-of-3">
                            <div class="card">
                                <div class="card__side card__side--front">
                                    <div class="card__picture card__picture--3">
                                        &nbsp;
                                    </div>
                                    <h4 class="card__heading">
                                        <span class="card__heading-span card__heading-span--3">
                                            MEDICAL MISSION
                                        </span>
                                        
                                    </h4>
                                    <div class="card__details">
                                        <ul>
                                            <li>5 days</li>
                                            <li>Up to 100 people</li>
                                            <li>Free medical consultation</li>
                                            <li>Free medicines</li>
                                            <li>All ages are allowed</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card__side card__side--back card__side--back-3">
                                    <div class="card__cta">
                                        <div class="card__price-box">
                                            <p class="card__price-only">Only</p>
                                            <p class="card__price-value">P 50.00</p>
                                        </div>
                                        <a href="#popup" class="btn btn--white">Register</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="u-centre-text u-margin-bottom-top">
                    <a href="#" class="btn btn--green">Discover More Programs</a>
                </div>

            </section >
                

            <section class="section-stories" id="section-stories"> 
                <div class="bg-video">
                    <video class="bg-video__content" autoplay loop muted>
                        <source src="img/video.mp4" type="video/mp4">
                        <source src="img/video.webm" type="video/webm">
                    </video>
                </div>
                <div class="u-centre-text u-margin-bottom-big"><!--this is a utility class only one goal that is to centre the text-->
                    <h2 class="heading-secondary" >
                        We Serve For The People
                    </h2>
                </div>

                <div class="row">
                    <div class="story">
                        <figure class="story__shape">
                            <img src="img/bc.jpg" alt="person pn a tour" class="story__img">
                            <figcaption class="story__caption">Emma Tumambing</figcaption>
                        </figure>
                        <div class="story__text">
                            <h3 class="heading-tertiary">Barangay Captain, Barangay 24</h3>
                            <p>
                               "Gusto ko palaging nasa ayos ang aking mga kabarangay. Sapagkat kung wala sila, ay wala rin ako sa aking posisyon. Nais kong ipakita sa kanila na hindi lamang ako isang kapitana kundi isa rin akong kaibigan."
                            </p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="story">
                            <figure class="story__shape">
                                <img src="img/kn.jpg" alt="person pn a tour" class="story__img">
                                <figcaption class="story__caption">Allen Abacan</figcaption>
                            </figure>
                            <div class="story__text">
                                <h3 class="heading-tertiary">Councilor, Barangay 24</h3>
                                <p>
                                     "Ang isang kabataan na gaya ko ay maaaring makapagbigay ng tulong sa aking kapwa residente sa pamamagitan ng aking pwesto. Sobrang saya na maglingkod at ibigay ang aking serbisyo sa kanila.""
                                </p>
                            </div>
                        </div>


                </div>

                <div class="u-centre-text u-margin-bottom-top-huge">
                    <a href="#" class="btn btn-text">Read all officials message &rarr;</a>
                </div>
            </section>

            <section class="section-book" id="section-book">
                <div class="row">
                    <div class="book">
                        <div class="book__form">
                            <form action="#" class="form">

                                <div class="u-margin-bottom-medium"><!--this is a utility class only one goal that is to centre the text-->
                                    <h2 class="heading-secondary" >
                                        Resident Request Form
                                    </h2>
                                </div>

                                <div class="form__group">
                                    <input type="text" class="form__input" placeholder="Full Name" required>
                                    <label for="name" class="form__label">Full Name</label>   
                                </div>

                                <div class="form__group">
                                    <input type="email" class="form__input" placeholder="Email Address" required>
                                    <label for="name" class="form__label">Email Address</label>   
                                </div>
                                <div class="form__group">
                                    <input type="text" class="form__input"  list="docu" name="docu" placeholder="Documents" required>
                                    <label for="name" class="form__label">Documents</label>
                                    <datalist id="docu">
                                        <option value="Barangay Clearance">
                                        <option value="Certificate of Indigency">
                                        <option value="Barangay Residency">
                                        <option value="Endorsement Letter">
                                        <option value="Business Permit">
                                        </datalist>
                                </div>
                                <div class="form__group">
                                    <input type="text" class="form__input" placeholder="Purpose" required>
                                    <label for="name" class="form__label">Purpose</label> 
                                </div>

                                <div class="form__group">
                                    <div class="form__radio-group">
                                        <input type="radio" class="form__radio-input" id="small" name="size">
                                        <label for="small" class="form__radio-label">
                                            <span class="form__radio-button"></span>
                                            COD
                                        </label>
                                    </div>

                                    <div class="form__radio-group">
                                        <input type="radio" class="form__radio-input" id="large" name="size">
                                        <label for="large" class="form__radio-label">
                                            <span class="form__radio-button"></span>
                                            GCASH
                                        </label>
                                    </div>
                                </div>
                                <div class="form__group">
            
                                    <button class="btn btn--green">SUBMIT &rarr;</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <footer class="footer" id="section-end">
            <div class="footer__logo-box">

                <picture class="footer__logo">
                    <source srcset="img/logo-green-small-1x.png 1x, img/logo-green-small-2x.png 2x" media="(max-width: 37.5em)">
                        <img srcset="img/logo-green-1x.png 1x, img/logo-green-2x.png 2x" alt="Full Logo"src="img/logo-green-2x.png ">
                </picture>

                
            </div>
            <div class="row">
                <div class="col-1-of-2">
                    <div class="footer__navigation">
                        <ul class="footer__list">
                            <li class="footer__item"><a href="#" class="footer__link">Company</a></li><br>
                            <li class="footer__item"><a href="#" class="footer__link">Contact us</a></li><br>
                            <li class="footer__item"><a href="#" class="footer__link">Carrers</a></li><br>
                            <li class="footer__item"><a href="#" class="footer__link">Privacy policy</a></li><br>
                            <li class="footer__item"><a href="#" class="footer__link">Terms</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-1-of-2">
                    <p class="footer__copyright">
                        <a href="#" class="footer__link">Barangay 24 WEB-BASED MANAGEMENT SYSTEM</a> is created to lessen the  problems of the barangay. Barangay 24 is located at<a href="#" class="footer__link">Poblacion, R.R Station, Batangas City</a>. You may contact us at <a href="#" class="footer__link">0912-345-6789</a>. If you have any inquiries or comments, just send us through our email
                         <a href="#" class="footer__link">barangay24@gmail.com</a>. We are happy to know what are your suggestions and we will contact you as soon as possible. Thank you.
                    </p>
                </div>
            </div>
        </footer>
        
    </body>
</html>
