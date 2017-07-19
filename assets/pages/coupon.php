<section class="section section--catalogo">

    <?php include('partials/deliverystripe.php'); ?>

    <div class="container">

        <?php include('modules/breadcrumb-storelocator.php'); ?>

    </div>

    <div class="container">

        <div class="banner" data-imagedesk="images/placeholder/banner-catalogo.png" data-imagemobile="images/placeholder/banner-catalogo-mobile.png">
            <div class="banner__info">
                <div class="banner__info__top f--regular c--grayDark text--20 l-spacing--1">
                    TUTTA LA CONVENIENZA<br/>
                    DEL TUO CATALOGO<br/>
                    PI&Ugrave; LA COMODIT&Agrave;<br/>
                    DI INTERNET!
                </div>
                <a class="banner__info__button f--bold c--grayDark text--12 l-spacing--1" href="javascript:void(0)">
                    RICHIEDILO ORA GRATIS!
                </a>
            </div>
        </div>

    </div>

    <div class="container">

        <div class="editorial f--regular">
            
            <div class="editorial__title c--green text--36">
                <h1>IL TUO CATALOGO ONLINE</h1>
            </div>

            <div class="editorial__paragraph">
                <div class="editorial__paragraph__content t--center c--gray text--14">
                    <p>
                        Se hai uno dei nostri cataloghi, da qui, puoi comodamente effettuare un ordine on-line conservando tutti i tuoi vantaggi.
                    </p>
                </div>
            </div>

            <div class="editorial__paragraph editorial__paragraph--box">
                <div class="editorial__paragraph__title t--center f--bold text--18">
                    <h3>Per accedere al buono d'ordine inserisci:</h3>
                </div>
                <div class="editorial__paragraph__content coupon-form">
                    <form class="t--center" method="post" action="javascript:void(0)">
                        <div class="form__item form__item--campaign t--left text--14">
                            <label class="f--light" for="campaign">CAMPAGNA</label>
                            <input class="input f--italic" type="text" name="campaign" value="CUA224" />
                            <p class="form__item__legend">*Se il segmento non è presente lasciare in bianco</p>
                        </div>
                        <div class="form__item form__item--segment t--left text--14">
                            <label class="f--light" for="segment">SEGMENTO*</label>
                            <input class="f--italic" type="text" name="segment" value="" />
                        </div>
                        <div class="form__item form__item--submit">
                            <input class="input button c--white t--center text--12" type="submit" value="PROCEDI" />
                            <p class="form__item__legend t--left text--14">Cosa fare se il <a class="c--green t--underline" href="javascrip:void(0)">codice non funziona</a></p>
                        </div>
                    </form>
                </div>
            </div>

            <div class="editorial__paragraph">
                <div class="editorial__paragraph__content c--gray text--14">
                    <p>
                        <span class="f--bold">Dove trovo campagna e segmento?</span>
                        <br/><br/>
                        <span class="f--bold">1. Se hai ricevuto il catalogo via posta:</span> sotto il tuo indirizzo sul Buono d'Ordine, c'è una riga indicata da una freccia gialla. Lì trovi i codici campagna e segmento, separati da alcuni spazi, da inserire qui sopra.
                        <br/><br/>
                        <span class="f--bold">2. Se hai trovato il catalogo in una rivista o ti è stato recapitato senza indirizzo:</span> sopra il catalogo c'è un depliant con al fondo un Buono d'Ordine.
                        In alto a destra viene indicato "come ordinare via internet". Lì trovi i codici campagna e segmento, separati da alcuni spazi, da inserire qui sopra.
                    </p>

                    <div class="coupon-examples">
                        <div class="coupon-examples__item">
                            <img alt="" title="" src="images/placeholder/coupon-catalogo.png" />
                        </div>
                        <div class="coupon-examples__item">
                            <img alt="" title="" src="images/placeholder/coupon-catalogo-2.png" />
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="container">

        <?php include('partials/guaranteespurchase.php'); ?>

    </div>

        <div class="container deskOnly">

            <?php include('partials/contacts.php'); ?>

        </div>

</section>