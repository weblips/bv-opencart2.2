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
                <div class="editorial__paragraph__content c--gray text--14">
                    <p>
                        <span class="f--bold">Per acquistare:</span> scegli sul catalogo i prodotti, compila gli spazi con i codici prodotto e clicca il tasto ''Inserisci'' clicca ''Concludi la spesa'' per terminare l'ordine. L'ordine e' valido solo per un totale minimo di prodotti di 15,00 euro.(esclusi contributo fisso, contrassegno e omaggi). In più avrai la possibilità di scegliere un omaggio gratis fra 6 che trovi sul pieghevole, inserendo il codice nel tuo ordine.
                    </p>
                </div>
            </div>

            <div class="exclusives">
                <div class="exclusives__title">
                    <p class="c--white t--center text--14">IN ESCLUSIVA PER TE</p>
                </div>
                <div class="exclusives__content">
                    <?php for ($i = 0; $i < 4; $i++) : ?>
                        <div class="exclusives__item">
                            <h3 class="exclusives__item__title c--gray f--bold t--center text--14">Sorrisi il pigiama dei tuoi sogni</h3>
                            <img class="exclusives__item__image" alt="" title="" src="images/placeholder/pigiama.png" />
                            <ul class="exclusives__item__list t--left">
                                <li>
                                    <span class="f--regular c--grayLight text--14">Taglia 1 (42/44)</span>
                                    <button class="button c--white text--12" href="javascript:void(0)">SCEGLI</button>
                                </li>
                                <li>
                                    <span class="f--regular c--grayLight text--14">Taglia 2 (46/48)</span>
                                    <button class="button c--white text--12" href="javascript:void(0)">SCEGLI</button>
                                </li>
                                <li>
                                    <span class="f--regular c--grayLight text--14">Taglia 3 (50/54)</span>
                                    <button class="button c--white text--12" href="javascript:void(0)">SCEGLI</button>
                                </li>
                            </ul>
                        </div>
                    <?php endfor; ?>
                </div>
            </div>

            <table class="cart-table">
                <thead>
                    <tr>
                        <th>
                            <span class="f--regular c--black text--13 l-spacing--1">PRODOTTO</span>
                        </th>
                        <th><p class="deskOnly">&nbsp;</p></th>
                        <th>
                            <span class="f--regular c--black text--13 l-spacing--1">PREZZO</span>
                        </th>
                        <th>
                            <span class="f--regular c--black text--13 l-spacing--1">SCONTO</span>
                        </th>
                        <th>
                            <span class="f--regular c--black text--13 l-spacing--1 deskOnly">QUANTIT&Agrave;</span>
                            <span class="f--regular c--black text--13 l-spacing--1 noDesk">Q.T&Agrave;</span>
                        </th>
                        <th>&nbsp;</th>
                        <th>
                            <span class="f--regular c--black text--13 l-spacing--1">SUBTOTALE</span>
                        </th>
                    </tr>
                </thead>
                <tbody class="cart-products">

                    <?php for ($i = 1; $i <= 3; $i++) : ?>

                        <tr class="cart-table__row-description">
                            <td colspan="7">
                                <p class="product__description c--grayDark text--12 l-spacing--1">
                                    ROSSETTO IDRATANTE PROTETTIVO<br>
                                    COLORE: <span class="c--green">Rosa romantico</span><br>
                                    cod. 112233
                                </p>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <!-- <div class="product__point text--40" style="color: #f29bc1;">•</div> -->
                                <img src="images/placeholder/cart-product.jpg">
                            </td>
                            <td>
                                <p class="product__description c--grayDark text--12 l-spacing--1 deskOnly">
                                    ROSSETTO IDRATANTE PROTETTIVO<br>
                                    COLORE: <span class="c--green">Rosa romantico</span><br>
                                    cod. 112233
                                </p>
                            </td>
                            <td>
                                <!-- <strong class="product__price product__price--old c--grayLight text--16">
                                    € 39,00
                                </strong> -->
                                <strong class="product__price c--black text--16">
                                    € 9,99
                                </strong>
                            </td>
                            <td>
                                <!-- <strong class="c--green text--16">
                                    -75%
                                </strong>
                                <br>
                                <div class="product__square" style="border-color: #f29bc1;"></div>
                                <strong class="text--16" style="color: #f29bc1;">
                                    -50%
                                </strong> -->
                            </td>
                            <td>

                                <div class="select">
                                    <a class="select__button button button--outline" href="javascript:void(0);">1 <span class="icon icon--angle-black icon--rotate-down text--12"></span></a>
                                    <div class="select__menu">
                                        <ul class="list-unstyled">
                                            <li class="select__item">
                                                <a href="javascript:void(0);" class="f--light c--gray text--14">2</a>
                                            </li>
                                            <li class="select__item">
                                                <a href="javascript:void(0);" class="f--light c--gray text--14">3</a>
                                            </li>
                                            <li class="select__item">
                                                <a href="javascript:void(0);" class="f--light c--gray text--14">4</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                            </td>
                            <td>
                                <a class="product__delete" href="javascript:void(0);">
                                    <span class="icon icon--close-x text--14"></span>
                                </a>
                            </td>
                            <td>
                                <strong class="c--grayDark text--16">
                                    € 9,99
                                </strong>
                            </td>
                        </tr>

                    <?php endfor; ?>
                </tbody>
                <tbody class="cart-addmore">
                    <tr class="cart-addmore__head">
                        <td colspan="7">
                            <p class="f--bold t--left text--15">
                                Inserisci codice prodotto: 1 prodotto a scelta -50%
                            </p>
                            <div class="addmore__item">
                                <input class="input text--12" type="text" placeholder="Inserisci qui il codice prodotto" value="" />
                                <button class="button c--white" type="button" href="javascript:void(0)">></button>
                            </div>
                        </td>
                    </tr>
                    <tr class="cart-addmore__body">
                        <td colspan="7" class="t--center">
                            <?php for ($i = 0; $i < 6; $i++) : ?>
                                <div class="addmore__item">
                                    <input class="input text--12" type="text" placeholder="Inserisci qui il codice prodotto" value="" />
                                    <button class="button c--white" type="button" href="javascript:void(0)">></button>
                                </div><br />
                            <?php endfor; ?>
                            <button class="button button--addall c--white text--12" type="button" href="javascript:void(0)">INSERISCI TUTTI</button>
                        </td>
                    </tr>
                </tbody>
                <tbody class="cart-totals t--left">
                    <tr class="cart-totals__head text--12">
                        <td colspan="3"></td>
                        <td colspan="3">
                            <p>TOTALE CARRELLO</p>
                        </td>
                        <td>
                            <p class="t--right f--bold">&euro; 26,97</p>
                        </td>
                    </tr>
                    <tr class="cart-totals__body text--12">
                        <td colspan="3">
                            <p>TIPOLOGIA PAGAMENTO: CONTRASSEGNO</p>
                        </td>
                        <td colspan="3">
                            <p>SPESE CONTRASSEGNO</p>
                        </td>
                        <td>
                            <p class="t--right f--bold">&euro; 1,90</p>
                        </td>
                    </tr>
                    <tr class="cart-totals__body text--12">
                        <td colspan="3"></td>
                        <td colspan="3">
                            <p>SPESE SPEDIZIONE</p>
                        </td>
                        <td>
                            <p class="t--right f--bold">&euro; 5,90</p>
                        </td>
                    </tr>
                    <tr class="cart-totals__foot text--14">
                        <td colspan="3"></td>
                        <td colspan="3">
                            <p class="f--bold">IMPORTO COMPLESSIVO</p>
                        </td>
                        <td>
                            <p class="t--right f--bold">&euro; 29,77</p>
                        </td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="7" class="t--center">
                            <button class="button c--white text--12" type="button" href="javascript:void(0)">INVIA IL TUO ORDINE</button>
                        </td>
                    </tr>
                </tfoot>
            </table>

            <div class="editorial__paragraph catalogue-offer deskOnly">
                <div class="editorial__paragraph__title catalogue-offer__title c--green text--18">
                    <h3>E IN PI&Ugrave;... con anche soli 35 Euro di TOTALE PRODOTTI</h3>
                </div>
                <div class="editorial__paragraph__content catalogue-offer__box c--gray text--12 l-spacing--1">
                    <img src="images/placeholder/primer.png">
                    <p>
                        PRIMER FISSANTE
                        <br/>
                        TRATTAMENTO IDRATANTE VALORIZZANTE CON ACIDO IALURONICO E MELOGRANO, SPF15 (10 ML)
                    </p>
                </div>
            </div>

            <div class="editorial__paragraph catalogue-offer deskOnly">
                <div class="editorial__paragraph__title catalogue-offer__title c--green text--18">
                    <h3>E IN PI&Ugrave;... con anche soli 40 Euro di TOTALE PRODOTTI</h3>
                </div>
                <div class="editorial__paragraph__content catalogue-offer__box c--gray text--12 l-spacing--1">
                    <img src="images/icons/logistic.png">
                    <p>
                        <span class="f--bold">GRATIS PER TE</span>
                        <br/>
                        SPESE DI SPEDIZIONE
                    </p>
                </div>
            </div>

            <div class="editorial__paragraph  deskOnly">
                <div class="editorial__paragraph__content c--gray text--14">
                    <p>
                        NOTA: ti informiamo che, gli ordini effettuati utilizzando l'opzione "Ordini da catalogo" del nostro sito, sono regolati esclusivamente da quanto previsto 
                        dalla promozione cartacea ricevuta, pertanto non è possibile unire eventuali altre offerte di tuo interesse che sono presentate dal sito stesso e che trovi 
                        nella Home page. 
                        <br/><br/>
                        SUPER-GARANZIA "Soddisfatti o Rimborsati" A totale garanzia del Cliente, "Bottega Verde" si impegna a sostituire qualsiasi prodotto trovato non conforme 
                        alla descrizione oppure, in ogni caso, a rimborsare il relativo importo su semplice richiesta. E' sufficiente che ci rispedisca la merce entro 30 giorni 
                        dal ricevimento. Inoltre, qualora restituissi la merce avvalendoti della garanzia "Soddisfatti o Rimborsati", i regali ricevuti rimarranno ugualmente tuoi ai sensi 
                        del D. lgs. 22 maggio 1999 n. 185. 
                        <br/><br/>
                        Per qualsiasi segnalazione <a class="t--underline" href="javascript:void(0)">clicca qui</a>
                    </p>
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