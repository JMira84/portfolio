<section class="contact-wrapper px-3 px-md-0 pt-5 font-raleway bg-white">
    <div class="container">
        <div class="contact-title mb-5 pb-3 text-center">
            <h2 class="h1 font-200 font-poppins text-uppercase">
                Os meus <span class="font-800" id="contact">contactos</span>
            </h2>

            <div class="separator position-relative d-inline-block font-800 color-text">
                { }
            </div>
        </div>
        <!--end contact-title-->

        <div class="message-wrapper w-100 h-25 mb-5 text-center d-none"></div>

        <div class="contact-row row">
            <div class="contacts col-md-5 col-lg-4 mb-4 mb-md-0">
                <div class="contact-text pb-2">
                    <h3 class="pb-2 font-poppins font-800 text-uppercase">Contacte-me</h3>
                    <p class="p-0 main-color"> Sinta-se à vontade para me contactar. Estou sempre disponível para novos projectos, ideias criativas ou para fazer parte da sua equipa.</p>
                </div>
                <!--end contact-text-->

                <div class="phone position-relative mb-4">
                    <i class="fas fa-phone-square-alt position-absolute color-text"></i>
                    <p class="font-400 main-color">
                        <span class="d-block font-600 color-text">Telefone</span>
                        933 189 813
                    </p>
                </div>
                <!--end phone-->

                <div class="email position-relative">
                    <i class="fas fa-envelope-square position-absolute color-text"></i>
                    <p class="font-400 main-color">
                        <span class="d-block font-600 color-text">Email</span>
                        joao.mira01@gmail.com
                    </p>
                </div>
                <!--end email-->
            </div>
            <!--end contacts-->

            <div class="contact-form col-md-7 col-lg-8">
                <form>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label class="font-600" for="email">Nome</label>
                            <input class="form-control" id="name" type="text" name="name" minlength="2" maxlength="120" required autocomplete="off" placeholder="O seu nome...">
                        </div>

                        <div class="form-group col-md-6">
                            <label class="font-600" for="email">Email</label>
                            <input class="form-control" id="email" type="email" name="email" maxlength="252" required autocomplete="off" placeholder="O seu email...">
                        </div>
                    </div>
                    <!--end form-row-->

                    <div class="form-group">
                        <label class="font-600" for="subject">Assunto</label>
                        <input class="form-control" id="subject" type="text" name="subject" minlength="3" maxlength="120" required autocomplete="off" placeholder="O seu assunto...">
                    </div>

                    <div class="form-group">
                        <label class="font-600" for="message">Mensagem</label>
                        <textarea class="form-control" name="message" id="message" cols="30" rows="5" required placeholder="A sua mensagem..."></textarea>
                    </div>

                    <div class="submit-button float-lg-right">
                        <button class="btn email-btn w-100 tm-bg white-text" type="button" name="send">Enviar Mensagem</button>
                    </div>
                </form>
            </div>
            <!--end contact-form-->
        </div>
        <!--end contact-row-->
    </div>
    <!--end container-->
</section>
<!--end contact-wrapper-->