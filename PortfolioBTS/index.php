<?php

include 'head.php';

?>

<body>

    <!-- HEADER -->

    <?php

    include 'header.php';

    ?>



    <!-- MAIN -->
    <main class="main">

        <!-- HOME -->
        <section class="home section" id="home">

            <div class="home__container container grid">
                <div class="home__content grid">
                    <div class="home__social">
                        <a href="https://www.linkedin.com/" target="_blank" class="home__social-icon">
                            <i class="uil uil-linkedin-alt"></i>
                        </a>

                        <a href="https://dribble.com/" target="_blank" class="home__social-icon">
                            <i class="uil uil-dribbble"></i>
                        </a>

                        <a href="https://github.com/" target="_blank" class="home__social-icon">
                            <i class="uil uil-github-alt"></i>
                        </a>
                    </div>

                    <div class="home__img">
                        <svg class="home__blob" viewBox="0 0 200 187" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <mask id="mask0" mask-type="alpha">
                                <path d="M190.312 36.4879C206.582 62.1187 201.309 102.826 182.328 134.186C163.346 165.547 
                                130.807 187.559 100.226 186.353C69.6454 185.297 41.0228 161.023 21.7403 129.362C2.45775 
                                97.8511 -7.48481 59.1033 6.67581 34.5279C20.9871 10.1032 59.7028 -0.149132 97.9666 
                                0.00163737C136.23 0.303176 174.193 10.857 190.312 36.4879Z" />
                            </mask>
                            <g mask="url(#mask0)">
                                <path d="M190.312 36.4879C206.582 62.1187 201.309 102.826 182.328 134.186C163.346 
                                165.547 130.807 187.559 100.226 186.353C69.6454 185.297 41.0228 161.023 21.7403 
                                129.362C2.45775 97.8511 -7.48481 59.1033 6.67581 34.5279C20.9871 10.1032 59.7028 
                                -0.149132 97.9666 0.00163737C136.23 0.303176 174.193 10.857 190.312 36.4879Z" />
                                <image class="home__blob-img" x='15' y='-5' xlink:href="Images/PP_sansFond.png" />
                            </g>
                        </svg>
                    </div>
                    <div class="home__data">
                        <h1 class="home__title">Alexandre Visage</h1>
                        <h3 class="home__subtitle">Portfolio BTS SIO Solutions Logicielles et Application
                            Métier</h3>
                        <p class="home__description">Etudiant</p>
                        <a href="#contact" class="button button--flex">
                            Contactez moi <i class="uil uil-message button__icon"></i>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- ABOUT -->
        <section class="about section" id="about">
            <h2 class="section__title">Mon CV</h2>
            <span class="section__subtitle">Vous pouvez télecharger mon CV</span>

            <div class="about__container container grid">
                <img src="Images/CV BTS2.png" alt="" class="about__img">

                <div class="about__data">
                    <p class="about__description">Développeur web débutant.<br> Je suis actuellement en recherche d'un
                        stage d'une duréee de 5 semaines. </p>

                    <div class="about__info">
                        <div>
                            <span class="about__info-title">1+</span>
                            <span class="about__info-name">Année <br> d'experience </span>
                        </div>

                        <div>
                            <span class="about__info-title">0+</span>
                            <span class="about__info-name">Projet <br> terminé </span>
                        </div>

                        <div>
                            <span class="about__info-title">1+</span>
                            <span class="about__info-name">Entreprise <br>travaillé </span>
                        </div>
                    </div>

                    <div class="about__buttons">
                        <a download="" href="pdf/CV_2022.pdf" class="button button--flex">
                            Télécharger <i class="uil uil-download-alt button__icon"></i>
                        </a>
                    </div>
                </div>
            </div>
        </section>





        <!-- SKILLS 1 -->

        <section class="competences section" id="skills">
            <h2 class="section__title">Compétences</h2>
            <span class="section__subtitle">Mon niveau dans chaque langage</span>

            <ul class="list__container">
                <li class="card__competences">
                    <a href="#" aria-label="Catégorie Frontend">
                        <div class="circle__container">
                            <div class="circle"></div>
                            <i class="uil uil-brackets-curly skills__icon"></i>
                        </div>
                        <h2>Frontend</h2>
                    </a>
                    <ul>
                        <li>
                            <p>
                            <div class="skills__list">
                                <div class="skills__data">
                                    <div class="skills__titles">
                                        <h3 class="skills__name">HTML</h3>
                                    </div>
                                </div>
                                </p>
                        </li>
                        <li>
                            <div class="skills__data">
                                <div class="skills__titles">
                                    <h3 class="skills__name">CSS</h3>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="skills__data">
                                <div class="skills__titles">
                                    <h3 class="skills__name">JavaScript</h3>
                                </div>
                            </div>
                        </li>

                    </ul>
                </li>



                <li class="card__competences">
                    <a href="#" aria-label="Catégorie Frontend">
                        <div class="circle__container">
                            <div class="circle"></div>
                            <i class="uil uil-server-network skills__icon"></i>
                        </div>
                        <h2>Backend</h2>
                    </a>
                    <ul>
                        <li>
                            <p>
                            <div class="skills__list">
                                <div class="skills__data">
                                    <div class="skills__titles">
                                        <h3 class="skills__name">PHP</h3>
                                    </div>
                                </div>
                                </p>
                        </li>
                        <li>
                            <div class="skills__data">
                                <div class="skills__titles">
                                    <h3 class="skills__name">Java</h3>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="skills__data">
                                <div class="skills__titles">
                                    <h3 class="skills__name">Symphony</h3>
                                </div>
                            </div>
                        </li>

                    </ul>
                </li>



                <li class="card__competences">
                    <a href="#" aria-label="Catégorie Frontend">
                        <div class="circle__container">
                            <div class="circle"></div>
                            <i class="uil uil-brackets-curly skills__icon"></i>
                        </div>
                        <h2>Cybersécurité</h2>
                    </a>
                    <ul>
                        <li>
                            <p>
                            <div class="skills__list">
                                <div class="skills__data">
                                    <div class="skills__titles">
                                        <h3 class="skills__name">HTML</h3>
                                    </div>
                                </div>
                                </p>
                        </li>
                        <li>
                            <div class="skills__data">
                                <div class="skills__titles">
                                    <h3 class="skills__name">CSS</h3>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="skills__data">
                                <div class="skills__titles">
                                    <h3 class="skills__name">JavaScript</h3>
                                </div>
                            </div>
                        </li>

                    </ul>
                </li>
            </ul>
        </section>



        <!-- Parcours -->

        <section class="qualification section">
            <h2 class="section__title">Parcours</h2>
            <span class="section__subtitle">Mon parcours scolaire et professionnel</span>

            <div class="container">
                <div class="timeline">

                    <div class="timeline__container left-container">

                        <i class="uil uil-graduation-cap qualification__icon"></i>

                        <div class="timeline__text-box">
                            <h2 class="qualification__title">Baccalauréat ES</h2>
                            <span class="qualification__subtitle">Lycée Charles Baudelaire</span>
                            <div class="qualification__calendar">
                                <i class="uil uil-calendar-alt"></i>
                                2016 - 2020
                            </div>
                        </div>
                    </div>


                    <div class="timeline__container right-container">

                        <i class="uil uil-bag qualification__icon"></i>

                        <div class="timeline__text-box">
                            <h2 class="qualification__title">Baccalauréat ES</h2>
                            <span class="qualification__subtitle">Lycée polyvalent Charles Baudelaire</span>
                            <div class="qualification__calendar">
                                <i class="uil uil-calendar-alt"></i>
                                2016 - 2020
                            </div>
                        </div>
                    </div>


                    <div class="timeline__container left-container">

                        <i class="uil uil-graduation-cap qualification__icon"></i>

                        <div class="timeline__text-box">
                            <h2 class="qualification__title">BTS SIO option SLAM</h2>
                            <span class="qualification__subtitle">Lycée de Cachan</span>
                            <div class="qualification__calendar">
                                <i class="uil uil-calendar-alt"></i>
                                2020 - 2023
                            </div>
                        </div>
                    </div>


                    <div class="timeline__container right-container">

                        <i class="uil uil-bag qualification__icon"></i>

                        <div class="timeline__text-box">
                            <h2 class="qualification__title">Baccalauréat ES</h2>
                            <span class="qualification__subtitle">Lycée Charles Baudelaire</span>
                            <div class="qualification__calendar">
                                <i class="uil uil-calendar-alt"></i>
                                2016 - 2020
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>



        <!-- <section class="qualification section">
            <h2 class="section__title">Parcours</h2>
            <span class="section__subtitle">Mon parcours scolaire et professionnel</span>

            <div class="qualification__container container">
                <div class="qualification__tabs">
                    <div class="qualification__button button--flex qualification__active" data-target='#eductaion'>
                        <i class="uil uil-graduation-cap qualification__icon"></i>
                        Education
                    </div>

                    <div class="qualification__button button--flex" data-target='#work'>
                        <i class="uil uil-briefcase-alt qualification__icon"></i>
                        Travail
                    </div>
                </div>

                <div class="qualification__sections">
                     Qualification Content 1 
        <div class="qualification__content qualification__active" data-content id="education">
            Qualification 1
            <div class="qualification__data">
                <div>
                    <h3 class="qualification__title">Baccalauréat ES</h3>
                    <span class="qualification__subtitle">Lycée Charles Baudelaire</span>
                    <div class="qualification__calendar">
                        <i class="uil uil-calendar-alt"></i>
                        2016 - 2020
                    </div>
                </div>
            </div>

            <div class="time">
                <span class="qualification__line"></span>

                <span class="qualification__rounder"></span>

                <span class="qualification__rounder"></span>

                <span class="qualification__rounder"></span>

            </div>




            Qualification 2
            <div class="qualification__data">
                <div></div>

                <div>
                    <h3 class="qualification__title"> BTS SIO SLAM</h3>
                    <span class="qualification__subtitle">Lycée de Cachan</span>
                    <div class="qualification__calendar">
                        <i class="uil uil-calendar-alt"></i>
                        2020 - 2023
                    </div>
                </div>
            </div>




        </div>

        Qualification Content 2
        <div class="qualification__content" data-content id="work">
            Qualification 1
            <div class="qualification__data">
                <div>

                    <h3 class="qualification__title">Type Travail</h3>
                    <span class="qualification__subtitle">Entreprise - Lieu </span>
                    <div class="qualification__calendar">
                        <i class="uil uil-calendar-alt"></i>
                        2020 - 2020
                    </div>
                </div>
                <div>
                    <span class="qualification__rounder"></span>
                    <span class="qualification__line"></span>
                </div>
            </div>


            Qualification 2
            <div class="qualification__data">
                <div></div>

                <div>
                    <span class="qualification__rounder"></span>
                    <span class="qualification__line"></span>
                </div>
                <div>
                    <h3 class="qualification__title">Type Travail</h3>
                    <span class="qualification__subtitle">Entreprise - Lieu</span>
                    <div class="qualification__calendar">
                        <i class="uil uil-calendar-alt"></i>
                        2020 - 2020
                    </div>
                </div>
            </div>
        </div>

        </div>
        </div>
        </section> -->

        <!-- Veille technologique -->
        <section class="veille section" id="veille">
            <h2 class="section__title">Veille technologique</h2>
            <span class="section__subtitle">Restez informé !</span>

        </section>


        <!-- Projets réalisés -->

        <?php

        include 'projet.php';

        ?>




        <!-- CONTACT ME -->

        <?php

        include 'contact.php'

        ?>

    </main>

    <!-- FOOTER -->

    <?php

    include 'footer.php';

    ?>

    <script src="./js/main.js"></script>
</body>

</html>