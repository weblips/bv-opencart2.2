<section class="section section--conferma-kids">

    <?php include('partials/deliverystripe.php'); ?>

    <div class="container">

        <?php include('modules/breadcrumb.php'); ?>

        <?php include('modules/cartnav.php'); ?>

    </div>

    <div class="container">
        <div class="message-confirm">
            <p class="message-confirm__main c--grayDark text--28">
                Grazie <strong>Lucia</strong>,<br>
                il tuo ordine è stato registrato correttamente.
            </p>
            <p class="message-confirm__description text--16">
                Riceverai conferma del tuo acquisto direttamente all’indirizzo di posta elettronica che ci hai indicato.<br>
                Riceverai la <strong class="c--grayDark">Carta Fedeltà</strong> che hai richiesto tramite posta.<br>
                I punti <strong class="c--grayDark">Carta Fedeltà</strong> relativi al tuo ordine ti verranno <strong class="c--grayDark">accreditati al ritiro del tuo pacco.</strong><br>
            </p>
            <p class="message-confirm__info">
                Ti ricordiamo che in My BV nella sezione <a href="javascript:void(0);" class="c--green link-underline">archivio ordini</a> puoi verificare l’<strong class="c--grayDark">avvenuta registrazione</strong> dell’ordine, controllarne lo <strong class="c--grayDark">stato di elaborazione</strong> ed <strong class="c--grayDark">eventualmente annullarlo.</strong><br>
                Il nostro <a href="javascript:void(0);" class="c--green link-underline">servizio clienti</a> è comunque a tua disposizione per qualsiasi informazione
            </p>
        </div>

        <div class="order-summary">

            <h1 class="order-summary__title f--regular c--green text--23 l-spacing--1">
                RIEPILOGO DEL TUO ORDINE
            </h1>

            <h3 class="order-summary__subtitle f--regular c--green text--14 l-spacing--1">
                INDIRIZZO DI SPEDIZIONE
            </h3>

            <table class="shipping-table">
                <tbody>
                    <tr>
                        <td>
                            <span class="f--regular text--14">Nome:</span> <span class="f--regular c--grayLight text--14">Lucia</span>
                        </td>
                        <td>
                            <span class="f--regular text--14">Cognome:</span> <span class="f--regular c--grayLight text--14">Bottegaverde</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span class="f--regular text--14">Indirizzo e n° civico:</span> <span class="f--regular c--grayLight text--14">Via Hayez 6</span>
                        </td>
                        <td>
                            <span class="f--regular text--14">CAP:</span> <span class="f--regular c--grayLight text--14">20139</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span class="f--regular text--14">Località:</span> <span class="f--regular c--grayLight text--14">Milano</span>
                        </td>
                        <td>
                            <span class="f--regular text--14">Provincia:</span> <span class="f--regular c--grayLight text--14">Bottegaverde</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span class="f--regular text--14">Nazione:</span> <span class="f--regular c--grayLight text--14">Italia</span>
                        </td>
                        <td>
                            <span class="f--regular text--14">Cognome campanello:</span> <span class="f--regular c--grayLight text--14">Bottegaverde</span>
                        </td>
                    </tr>
                </tbody>
            </table>

            <h3 class="order-summary__subtitle f--regular c--green text--14 l-spacing--1">
                DETTAGLIO ORDINE
            </h3>

            <table class="cart-table">
                <thead>
                    <tr>
                        <th>
                            <span class="f--regular c--black text--12 l-spacing--1">
                                PRODOTTO
                            </span>
                        </th>
                        <th class="deskOnly">&nbsp;</th>
                        <th>
                            <span class="f--regular c--black text--12 l-spacing--1">
                                PREZZO
                            </span>
                        </th>
                        <th>
                            <span class="f--regular c--black text--12 l-spacing--1">
                                SCONTO
                            </span>
                        </th>
                        <th>
                            <span class="f--regular c--black text--12 l-spacing--1 deskOnly">
                                QUANTIT&Agrave;
                            </span>
                            <span class="f--regular c--black text--12 l-spacing--1 noDesk">
                                QTY
                            </span>
                        </th>
                        <th class="deskOnly">&nbsp;</th>
                        <th>
                            <span class="f--regular c--black text--12 l-spacing--1">
                                SUBTOTALE
                            </span>
                        </th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                        for ($i = 1; $i <= 3; $i++) {
                    ?>
                        <tr class="cart-table__row-description">
                            <td colspan="5">
                                <p class="product__description c--black text--12 l-spacing--1">
                                    ROSSETTO IDRATANTE PROTETTIVO<br>
                                    COLORE: <span class="c--green">Rosa romantico</span>
                                </p>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <img src="images/placeholder/cart-product.jpg">
                            </td>
                            <td class="deskOnly">
                                <p class="product__description c--black text--12 l-spacing--1">
                                    ROSSETTO IDRATANTE PROTETTIVO<br>
                                    COLORE: <span class="c--green">Rosa romantico</span>
                                </p>
                            </td>
                            <td>
                                <strong class="product__price product__price--old c--grayLight text--16">
                                    € 39,00
                                </strong>
                                <strong class="product__price c--black text--16">
                                    € 9,99
                                </strong>
                            </td>
                            <td>
                                <strong class="c--green text--16">
                                    -75%
                                </strong>
                            </td>
                            <td>
                                <span class="f--regular c--black text--12">
                                    1
                                </span>
                            </td>
                            <td class="deskOnly">&nbsp;</td>
                            <td>
                                <strong class="c--black text--16">
                                    € 9,99
                                </strong>
                            </td>
                        </tr>

                    <?php
                    }
                    ?>

                    <tr class="info-row">
                        <td colspan="1">&nbsp;</td>
                        <td colspan="2" class="deskOnly">&nbsp;</td>
                        <td colspan="3">
                            <span class="f--regular c--black text--12">
                                TOTALE CARRELLO
                            </span>
                        </td>
                        <td>
                            <strong class="c--black text--16">
                                € 26,97
                            </strong>
                        </td>
                    </tr>
                    <tr class="info-row payment-row payment-row--mobile">
                        <td colspan="5">
                            <span class="f--regular c--black text--12">
                                TIPOLOGIA PAGAMENTO: CONTRASSEGNO
                            </span>
                        </td>
                    </tr>
                    <tr class="info-row payment-row">
                        <td colspan="1">
                            <span class="f--regular c--black text--12 deskOnly">
                                TIPOLOGIA PAGAMENTO: CONTRASSEGNO
                            </span>
                        </td>
                        <td colspan="2" class="deskOnly">&nbsp;</td>
                        <td colspan="3">
                            <span class="f--regular c--black text--12">
                                SPESE CONTRASSEGNO
                            </span>
                        </td>
                        <td>
                            <strong class="c--black text--16">
                                € 1,90
                            </strong>
                        </td>
                    </tr>
                    <tr class="info-row">
                        <td colspan="1">&nbsp;</td>
                        <td colspan="2" class="deskOnly">&nbsp;</td>
                        <td colspan="3">
                            <span class="f--regular c--black text--12">
                                SPESE SPEDIZIONE
                            </span>
                        </td>
                        <td>
                            <strong class="c--black text--16">
                                € 5,90
                            </strong>
                        </td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="1">&nbsp;</td>
                        <td colspan="2" class="deskOnly">&nbsp;</td>
                        <td colspan="3">
                            <strong class="c--black text--14">
                                IMPORTO COMPLESSIVO
                            </strong>
                        </td>
                        <td>
                            <strong class="c--black text--18">
                                € 34,77
                            </strong>
                        </td>
                    </tr>
                </tfoot>
            </table>

        </div>
    </div>

    <div class="container">

        <?php include('partials/guaranteespurchase.php'); ?>

    </div>

    <div class="shipping noDesk">

        <span class="shipping__title f--regular c--green text--20 deskOnly">I VANTAGGI CHE TI OFFRIAMO</span>
        <span class="shipping__title f--regular c--green text--20 noDesk">PERCH&Egrave; ACQUISTARE DA NOI</span>

        <div class="container">

            <?php include('partials/shippinginfo.php'); ?>

        </div>

    </div>

    <div class="container last noDesk">

        <?php include('partials/followus.php'); ?>

    </div>

</section>