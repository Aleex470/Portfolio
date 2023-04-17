<?php

include 'head.php';
include 'header.php';

?>

<style>
    .container__header__pj {
        display: flex;
        align-items: center;
        justify-content: center;
        margin-top: 5rem;
    }

    .header__fond {
        width: 60vh;
    }

    .element__pj {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 5rem;
        margin: 5rem 0;
    }

    .acces__pj {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 4rem;
        margin-bottom: 3rem;
    }

    @media screen and (max-width: 767px) {

        .element__pj {
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-direction: column;
            gap: 2rem;
            margin: 5rem 0;
        }
    }
</style>

<body>

    <div class="container__leProjet container">

        <div class="container__header__pj">
            <img class="header__fond" src="Images/amex.png" alt="">
        </div>
        <div class="description__pj">
            <h2>Le site AMEX à été réaliser lors de mon stage en deuxième année de BTS SIO option SLAM. C'est un site d'expert comptable....</h2>
        </div>

        <div class="element__pj">

            <div class="image__pj">
                <img class="image-amex" src="Images/PageAccueilAmexOrdi.png" alt="">
            </div>

            <div class="text__pj">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt sint pariatur labore numquam dolore quia maiores adipisci,
                voluptates unde tenetur expedita dignissimos alias libero cumque blanditiis voluptatibus reprehenderit odio quas.
            </div>

        </div>

        <div class="element__pj">

            <div class="text">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt sint pariatur labore numquam dolore quia maiores adipisci,
                voluptates unde tenetur expedita dignissimos alias libero cumque blanditiis voluptatibus reprehenderit odio quas.
            </div>

            <div class="image__pj">
                <img class="image-amex" src="Images/BDDAmex.png" alt="">
            </div>

        </div>

        <div class="element__pj">

            <div class="image__pj">
                <img class="image-amex" src="Images/PageAdminAmex.png" alt="">
            </div>

            <div class="text__pj">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt sint pariatur labore numquam dolore quia maiores adipisci,
                voluptates unde tenetur expedita dignissimos alias libero cumque blanditiis voluptatibus reprehenderit odio quas.
            </div>

        </div>

        <div>
            <img class="mockup" src="Images/mockup.png" alt="">

            <div class="acces__pj">
                <a class="button button--flex" target="_blank" href="https://github.com/Aleex470/SiteAmex.git">
                    Voir sur git
                </a>
                <a class="button button--flex" href="./index.html#accueil">
                    Retour
                    <!-- <i class="uil uil-estate" style="margin-left: 1rem"></i> -->
                </a>
            </div>
        </div>

    </div>


</body>

<?php

include 'footer.php';

?>