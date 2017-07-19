<section class="section section--checkout-kids">

    <?php include('partials/deliverystripe.php'); ?>

    <div class="container">

        <?php include('modules/breadcrumb.php'); ?>

        <?php include('modules/cartnav.php'); ?>

    </div>

    <div class="login">

        <div class="login-content__right login-user">
            <span class="f--regular c--green text--18">
                ACCEDI AL TUO ACCOUNT
            </span>
            <form class="form">
                <div class="form-group column-2">
                    <input type="text" class="form-control f--italic" id="" placeholder="Il tuo indirizzo e-mail">
                </div>

                <div class="form-group column-2">
                    <input type="text" class="form-control f--italic" id="" placeholder="La tua password">

                    <a href="javascript:void(0);" class="link-underline c--grayLight text--13">
                        Hai dimenticato la tua password?
                    </a>
                </div>
                <div class="column-1">
                    <a class="login-button button c--white" href="javascript:void(0);">
                        ACCEDI
                    </a>
                </div>
            </form>
        </div>

        <div class="login-content__left login-fb">

            <span class="f--bold c--green text--18 noDesk">
                NON HAI ANCORA UN ACCOUNT?
            </span>
            <p class="login-text c--black text--16">
                Se non hai ancora un account puoi crearne uno cliccando <a href="javascript:void(0);" class="link-underline c--green">qui</a> ti sarà più facile tenere traccia dei tuoi ordini!
                <br>
                <strong>
                    oppure
                </strong>
            </p>

            <a class="login-button" href="javascript:void(0);">
                <img src="images/various/facebook-login.jpg">
            </a>

        </div>

    </div>

    <div class="container">

        <div class="checkout-content">

            <div class="checkout-content__left">

                <form class="form f--regular">

                    <fieldset>
                        <legend class="legend legend--with-border c--green text--16">
                            INDICA DOVE INVIARE IL TUO ORDINE
                        </legend>

                        <?php include('modules/shippingform.php'); ?>

                    </fieldset>

                    <fieldset>

                        <div class="checkbox checkbox--legend legend legend--with-border f--regular c--green text--16">
                            <label>
                                <input type="checkbox">
                                DATI DI SPEDIZIONE ALTERNATIVA
                            </label>
                        </div>

                        <?php include('modules/shippingform.php'); ?>
                    </fieldset>

                    <fieldset>

                        <div class="checkbox checkbox--legend legend--with-border f--regular c--green text--16">
                            <label>
                                <input type="checkbox">
                                FAI UN REGALO BOTTEGA VERDE
                            </label>
                        </div>

                        <?php include('modules/shippingform.php'); ?>
                    </fieldset>

                    <fieldset>

                        <div class="column-1">
                            <div class="radio">
                                <label class="c--grayDark">
                                    <input type="radio" name="gift-box" id="" value="">
                                    Nessuna confezione regalo
                                </label>
                            </div>
                        </div>

                        <div class="column-1">

                            <div class="gift-box__carousel j-carousel--gift-box">

                                <div class="gift-box__carousel__item">
                                    <div class="media">
                                        <div class="media-left">
                                            <input type="radio" name="gift-box" id="" value="">
                                        </div>
                                        <div class="media-body">
                                            <img src="images/placeholder/gift-box-1.jpg">
                                            <p class="text--12">
                                                Cofanetto Regalo<br>
                                                <strong class="c--grayDark">GRATUITO</strong><br>
                                                Voglio ricevere il mio<br>
                                                ordine già confezionato<br>
                                                da L’OCCITANE in un<br>
                                                cofanetto regalo
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="gift-box__carousel__item">
                                    <div class="media">
                                        <div class="media-left">
                                            <input type="radio" name="gift-box" id="" value="">
                                        </div>
                                        <div class="media-body">
                                            <img src="images/placeholder/gift-box-2.jpg">
                                            <p class="text--12">
                                                Cofanetto Regalo<br>
                                                <strong class="c--grayDark">GRATUITO</strong><br>
                                                Voglio ricevere il mio<br>
                                                ordine già confezionato<br>
                                                da L’OCCITANE in un<br>
                                                cofanetto regalo
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="gift-box__carousel__item">
                                    <div class="media">
                                        <div class="media-left">
                                            <input type="radio" name="gift-box" id="" value="">
                                        </div>
                                        <div class="media-body">
                                            <img src="images/placeholder/gift-box-1.jpg">
                                            <p class="text--12">
                                                Cofanetto Regalo<br>
                                                <strong class="c--grayDark">GRATUITO</strong><br>
                                                Voglio ricevere il mio<br>
                                                ordine già confezionato<br>
                                                da L’OCCITANE in un<br>
                                                cofanetto regalo
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="gift-box__carousel__item">
                                    <div class="media">
                                        <div class="media-left">
                                            <input type="radio" name="gift-box" id="" value="">
                                        </div>
                                        <div class="media-body">
                                            <img src="images/placeholder/gift-box-2.jpg">
                                            <p class="text--12">
                                                Cofanetto Regalo<br>
                                                <strong class="c--grayDark">GRATUITO</strong><br>
                                                Voglio ricevere il mio<br>
                                                ordine già confezionato<br>
                                                da L’OCCITANE in un<br>
                                                cofanetto regalo
                                            </p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </fieldset>

                    <fieldset>
                        <div class="column-1">
                            <span class="textarea__title f--regular c--green text--16">
                                SCRIVI QUI IL TUO MESSAGGIO DI AUGURI
                            </span>
                        </div>

                        <div class="column-1">
                            <textarea class="form-control" rows="10"></textarea>

                            <span class="f--regular pull-right">
                                Numero massimo di caratteri XX
                            </span>
                        </div>
                    </fieldset>

                    <fieldset>
                        <legend class="legend legend--with-border f--regular c--green text--16">
                            COMPLETA LA TUA REGISTRAZIONE
                        </legend>

                        <div class="form-group column-2">
                            <label for="">E-mail <sup>*</sup></label>
                            <input type="email" class="form-control" id="">
                        </div>

                        <div class="form-group column-4">
                            <label for="">Password <sup>*</sup></label>
                            <input type="password" class="form-control" id="">
                        </div>

                        <div class="form-group column-4">
                            <label for="">Conferma password <sup>*</sup></label>
                            <input type="password" class="form-control" id="">
                        </div>

                        <div class="form-group column-4">
                            <label for="">Sesso</label>

                            <div class="select-control">
                                <select>
                                    <option>-</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group column-4">
                            <label for="">Data di nascita</label>
                            <input type="text" class="form-control" id="">
                        </div>

                        <div class="form-group column-4">
                            <label for="">Telefono fisso <sup>*</sup></label>
                            <input type="text" class="form-control" id="">
                        </div>

                        <div class="form-group column-4">
                            <label for="">Telefono cell <sup>*</sup></label>
                            <input type="text" class="form-control" id="">
                        </div>

                        <div class="column-2">&nbsp;</div>

                        <div class="column-2">
                            <p>
                                <strong>Lascia almeno un recapito telefonico:</strong> è necessario per contattarti per ogni informazione sulla consegna.
                            </p>
                        </div>

                    </fieldset>

                    <fieldset>
                        <legend class="legend legend--with-border f--regular c--green text--16">
                            CARTA FEDELT&Agrave;
                        </legend>

                        <div class="column-2">

                            <div class="form-group">
                                <label for="">Numero carta</label>
                                <input type="text" class="form-control" id="">
                            </div>

                            <div class="fidelitycard-choice">

                                <img class="fidelitycard-choice__image pull-left" src="images/placeholder/carta-fedelta.png">

                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox">
                                        Richiedi una carta fedeltà
                                    </label>
                                </div>

                                <p class="fidelitycard-choice__text">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit.
                                </p>

                            </div>

                        </div>

                    </fieldset>

                    <fieldset>
                        <legend class="legend legend--with-border payment-method__title f--regular c--green text--16">
                            METODO DI PAGAMENTO
                        </legend>

                        <div class="column-2">

                            <div class="radio">
                                <label class="c--grayDark">
                                    <input type="radio" name="payment-method" id="" value="">
                                    CARTA DI CREDITO
                                </label>
                            </div>

                            <div class="radio">
                                <label class="c--grayDark">
                                    <input type="radio" name="payment-method" id="" value="">
                                    PAYPAL
                                </label>
                            </div>

                            <div class="radio">
                                <label class="c--grayDark">
                                    <input type="radio" name="payment-method" id="" value="">
                                    CONTRASSEGNO ALLA CONSEGNA + €1,90
                                </label>
                            </div>

                            <div class="radio">
                                <label class="c--grayDark">
                                    <input type="radio" name="payment-method" id="" value="" checked>
                                    CONSEGNA E RITIRO IN PUNTO VENDITA
                                </label>
                            </div>

                        </div>

                        <div class="column-2">
                            <div class="form-group">
                                <div class="select-control">
                                    <select>
                                        <option>ITALIA</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="select-control">
                                    <select>
                                        <option>MILANO</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="select-control">
                                    <select>
                                        <option>MILANO</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="select-control">
                                    <select>
                                        <option>NEGOZIO</option>
                                    </select>
                                </div>
                            </div>

                        </div>

                        <div class="column-2">
                            <p>
                                <strong>
                                    CARTA DI CREDITO
                                </strong>
                            </p>
                            <br>
                            <p>
                                I dati per effettuare il pagamento con carta di credito
                                ti verranno richiesti dopo aver confermato l'ordine
                            </p>
                            <br>
                            <p>
                                <strong>
                                    Sul nostro sito è attivo il sistema di sicurezza "VerifiedByVisa"
                                    e "Mastercard SecureCode"; nel caso sulla tua carta di credito sia abilitata questa funzionalità ti verrà richiesta la relativa password per completare
                                    il pagamento
                                </strong>
                            </p>
                            <br>
                            <img class="securcode-image" src="images/various/securcode-mastercard.jpg">
                        </div>

                    </fieldset>

                    <button class="button c--white text--14" href="javascript:void(0);">
                        CONTINUA
                    </button>

                    <div class="box-checkbox">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox">
                                Autorizzo il trattamento dei miei dati personali
                            </label>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox">
                                Acconsento che i miei dati vengano comunicati
                                ad altre aziende in modo da essere informato
                                sulle loro offerte commerciali.
                            </label>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox">
                                Acconsento a ricevere offerte personalizzate sulla base
                                delle mie abitudini di consumo.
                            </label>
                        </div>
                    </div>

                </form>

            </div>

            <div class="checkout-content__right deskOnly">

                <?php include('modules/cartsummary.php'); ?>

            </div>

        </div>

    </div>

    <div class="container">

        <?php include('partials/guaranteespurchase.php'); ?>

    </div>

</section>