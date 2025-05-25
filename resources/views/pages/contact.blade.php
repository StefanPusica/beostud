<x-layout>
    <!-- Contact section start -->
    <section id="contactSection">
        <div class="container">
        <x-heading pageName="Kontakt"></x-heading>
        <div class="row justify-content-center flex-column align-items-center">
            <div class="col-md-7 mb-3">
            <input type="text" class="form-control" placeholder="Ime i prezime" required />
            <div class="invalid-feedback"></div>
            </div>

            <div class="col-md-7 mb-3">
            <input type="email" class="form-control" placeholder="E-mail adresa" required />
            <div class="invalid-feedback"></div>
            </div>

            <div class="col-md-7 mb-3">
            <textarea class="form-control" placeholder="Tekst poruke" rows="4"></textarea>
            </div>

            <div class="col-md-7 mb-3 d-flex justify-content-center align-items-center">
            <button class="beostud-btn mb-5 mt-3">Pošalji poruku</button>
            </div>
        </div>

        <div class="row my-3">
            <div class="col-md-12">
            <hr class="question-hr" />
            <div class="question-box-list d-flex justify-content-center flex-wrap">
                <span class="mb-2 d-block">
                <a href="https://maps.app.goo.gl/jdvKby98ZyxjTSwW6" target="_blank">
                    <img src="/images/icons/email.svg" alt="" />&nbsp; Milutina Milankovića 11g, Beograd
                </a>
                </span>
                <span class="mb-2 d-block">
                <a href="tel:+381117455778"> <img src="/images/icons/phone.svg" alt="" />&nbsp; +381 11 7455778 </a>
                </span>
                <span class="mb-2 d-block">
                <a href="mailto:office@przionica.rs"> <img src="/images/icons/email.svg" alt="" />&nbsp; office@beostud.rs </a>
                </span>
            </div>
            </div>
        </div>
        </div>
    </section>
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6738.841610344775!2d20.501469570236942!3d44.75360515100497!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x475a71216f22d8a7%3A0x657f3e4203caef81!2sBulevar%20Peka%20Dap%C4%8Devi%C4%87a%20255%2C%20Beograd%2C%20Serbia!5e0!3m2!1sen!2sus!4v1743853399372!5m2!1sen!2sus"
        style="border: 0"
        allowfullscreen=""
        loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"
        id="g-map"
    ></iframe>
    <!-- Contact section end -->    
</x-layout>