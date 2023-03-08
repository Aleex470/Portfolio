<?php

include 'head.php';
include 'header.php';

?>

<body>

    <style>
        .element:nth-child(1) {
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
            gap: 50px;
        }

        .element:nth-child(2) {
            display: flex;
            flex-direction: row-reverse;
            justify-content: center;
            align-items: center;
            gap: 50px;
        }



        .image-amex {
            content: "";
            width: 500px;
            height: 300px;
            border: 1px solid var(--first-color);
        }
    </style>



    <div class="container__leProjet container grid">

        <div class="element">

            <div class="image">
                <img class="image-amex" src="Images/amex.png" alt="">
            </div>

            <div class="text">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt sint pariatur labore numquam dolore quia maiores adipisci,
                voluptates unde tenetur expedita dignissimos alias libero cumque blanditiis voluptatibus reprehenderit odio quas.
            </div>

        </div>

        <div class="element">

            <div class="image">
                <img class="image-amex" src="Images/amex.png" alt="">
            </div>

            <div class="text">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt sint pariatur labore numquam dolore quia maiores adipisci,
                voluptates unde tenetur expedita dignissimos alias libero cumque blanditiis voluptatibus reprehenderit odio quas.
            </div>

        </div>

        <div class="element">

            <div class="image">
                <img class="image-amex" src="Images/amex.png" alt="">
            </div>

            <div class="text">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt sint pariatur labore numquam dolore quia maiores adipisci,
                voluptates unde tenetur expedita dignissimos alias libero cumque blanditiis voluptatibus reprehenderit odio quas.
            </div>

        </div>

    </div>


</body>

<?php

include 'footer.php';

?>