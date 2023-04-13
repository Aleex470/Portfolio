<section class="contact section" id="contact">
    <h2 class="section__title">Me contacter</h2>
    <span class="section__subtitle">N'hesitez pas </span>

    <div class="contact__container container grid">
        <div>
            <div class="contact__information">
                <i class="uil uil-phone contact__icon"></i>

                <div>
                    <h3 class="contact__title">Téléphone</h3>
                    <span class="contact__subtitle">06.45.00.47.23</span>
                </div>


            </div>

            <div class="contact__information">
                <i class="uil uil-envelope contact__icon"></i>

                <div>
                    <h3 class="contact__title">Email</h3>
                    <span class="contact__subtitle">alexvisage2001@gmail.com</span>
                </div>


            </div>

            <div class="contact__information">
                <i class="uil uil-map-marker contact__icon"></i>

                <div>
                    <h3 class="contact__title">Adresse</h3>
                    <span class="contact__subtitle">Fosses, 95470</span>
                </div>
            </div>
        </div>

        <form action="mail.php" class="contact__form grid">
            <div class="contact__inputs grid">
                <div class="contact__content">
                    <label for="" class="contact__label" name="nom">Nom</label><br>
                    <input type="text" class="contact__input">
                </div>

                <div class="contact__content">
                    <label for="" class="contact__label" name="mail">Adresse mail</label><br>
                    <input type="email" class="contact__input">
                </div>
            </div>

            <div class="contact__content">
                <label for="" class="contact__label" name="message">Message</label><br>
                <textarea name="" id="" cols="0" rows="1" class="contact__input-message"></textarea>
            </div>

            <div>
                <a href="#" class="button button--felx" type="submit">
                    Envoyer message
                    <i class="uil uil-message button__icon"></i>
                </a>
                <input type="submit">Envoyer message

            </div>
        </form>
    </div>
</section>