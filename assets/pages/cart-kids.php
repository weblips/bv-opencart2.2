<section class="section section--cart-kids">

    <?php include('partials/deliverystripe.php'); ?>

    <div class="container">

        <?php include('modules/breadcrumb.php'); ?>

        <?php include('modules/cartnav.php'); ?>

    </div>

    <div class="container">

        <div class="cart-content">

            <div class="cart-content__left">

                <div class="cart-table-header">

                    <span class="cart-table-header__title f--regular text--15">
                        <strong class="c--black">Scegli uno sconto:</strong>
                        <span class="c--grayLight">Trascina un bonus sconto su un prodotto corrispondente!</span>
                        <a href="javascript:void(0);" class="info-tooltip-link"><img src="images/various/icon-info-circle-o-green.png"></a>
                    </span>

                    <div class="j-carousel--discount carousel-discount">
                        <a href="javascript:void(0);" class="carousel-discount__slide" style="background-color: #f9ae64;">
                            <span class="carousel-discount__text c--white">1 prodotto<br>viso -60%</span>
                        </a>
                        <a href="javascript:void(0);" class="carousel-discount__slide" style="background-color: #add278;">
                            <span class="carousel-discount__text c--white">1 prodotto<br>-50%</span>
                        </a>
                        <a href="javascript:void(0);" class="carousel-discount__slide" style="background-color: #a188bd;">
                            <span class="carousel-discount__text c--white">1 prodotto<br>bagno -40%</span>
                        </a>
                        <a href="javascript:void(0);" class="carousel-discount__slide" style="background-color: #f29bc1;">
                            <span class="carousel-discount__text c--white">1 prodotto<br>profumo -60%</span>
                        </a>
                        <a href="javascript:void(0);" class="carousel-discount__slide" style="background-color: #c59c71;">
                            <span class="carousel-discount__text c--white">1 prodotto<br>casa -40%</span>
                        </a>
                        <a href="javascript:void(0);" class="carousel-discount__slide" style="background-color: #43b77a;">
                            <span class="carousel-discount__text c--white">1 prodotto<br>-70%</span>
                        </a>
                        <a href="javascript:void(0);" class="carousel-discount__slide" style="background-color: #f29bc1;">
                            <span class="carousel-discount__text c--white">1 prodotto<br>profumo -60%</span>
                        </a>
                        <a href="javascript:void(0);" class="carousel-discount__slide" style="background-color: #a188bd;">
                            <span class="carousel-discount__text c--white">1 prodotto<br>bagno -40%</span>
                        </a>
                        <a href="javascript:void(0);" class="carousel-discount__slide" style="background-color: #43b77a;">
                            <span class="carousel-discount__text c--white">1 prodotto<br>-70%</span>
                        </a>
                    </div>

                </div>

                <table class="cart-table">
                    <thead>
                        <tr>
                            <th>
                                <span class="f--regular c--black text--13 l-spacing--1">PRODOTTO</span>
                            </th>
                            <th class="deskOnly">&nbsp;</th>
                            <th>
                                <span class="f--regular c--black text--13 l-spacing--1">PREZZO</span>
                            </th>
                            <th>
                                <span class="f--regular c--black text--13 l-spacing--1">SCONTO</span>
                            </th>
                            <th>
                                <span class="f--regular c--black text--13 l-spacing--1 deskOnly">QUANTIT&Agrave;</span>
                                <span class="f--regular c--black text--13 l-spacing--1 noDesk">QTY</span>
                            </th>
                            <th>&nbsp;</th>
                            <th>
                                <span class="f--regular c--black text--13 l-spacing--1">SUBTOTALE</span>
                            </th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                            for ($i = 1; $i <= 3; $i++) {
                        ?>

                            <tr class="cart-table__row-description">
                                <td colspan="6">
                                    <p class="product__description c--grayDark text--12 l-spacing--1">
                                        ROSSETTO IDRATANTE PROTETTIVO<br>
                                        COLORE: <span class="c--green">Rosa romantico</span>
                                    </p>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <img src="images/placeholder/cart-product.jpg">
                                    <div class="product__point text--40" style="color: #f29bc1;">•</div>
                                </td>
                                <td class="deskOnly">
                                    <p class="product__description c--grayDark text--12 l-spacing--1">
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
                                    <br>
                                    <div class="product__square" style="border-color: #f29bc1;"></div>
                                    <strong class="text--16" style="color: #f29bc1;">
                                        -50%
                                    </strong>
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

                        <?php
                            }
                        ?>

                    </tbody>
                </table>

                <div class="cart-table-footer">

                    <span class="promotional-code-text f--regular text--15 pull-left">
                        <strong class="c--black">Inserisci codice promozionale</strong> - <span class="c--grayLight">Green Box</span>
                        <a href="javascript:void(0);" class="info-tooltip-link"><img src="images/various/icon-info-circle-o-green.png"></a>
                    </span>

                    <div class="input-group pull-right">
                        <input type="text" class="form-control f--regular text--13" placeholder="Inserisci il tuo codice sconto Green Box">
                        <div class="input-group-addon"><span class="icon icon--angle-white icon--rotate-right text--14"></span></div>
                    </div>

                </div>

            </div>

            <div class="cart-content__right">

                <?php include('modules/cartsummary.php'); ?>

            </div>

        </div>

    </div>

    <div class="container">
        <div class="panel-offers">

            <div class="panel-offers__row">

                <span class="panel-offers__title f--regular c--grayLight text--15">
                    <strong class="c--black">Aggiungi un prodotto GRATIS</strong><em class="noMobile">&nbsp;-&nbsp;</em>Questa settimana puoi scegliere tra:
                </span>

                <div class="panel-offers__carousel j-carousel--offers">

                    <a href="javascript:void(0);" class="panel-offers__item">

                        <div class="product product--carousel active">
                            <div class="product__image" style="background-image:url('images/placeholder/carouselproducts-4.png');">
                            </div>
                            <div class="product__info">
                                <p class="product__title text--12 c--grayDark">
                                    Rossetto idratante intenso
                                </p>
                                <p class="product__details text--12 c--grayLight">
                                    Un intenso trattamento idratante che regala alle labbra un colore pieno
                                </p>
                            </div>
                        </div>

                    </a>

                    <a href="javascript:void(0);" class="panel-offers__item">

                        <div class="product product--carousel">
                            <div class="product__image" style="background-image:url('images/placeholder/carouselproducts-4.png');">
                            </div>
                            <div class="product__info">
                                <p class="product__title text--12 c--grayDark">
                                    Rossetto idratante intenso
                                </p>
                                <p class="product__details text--12 c--grayLight">
                                    Un intenso trattamento idratante che regala alle labbra un colore pieno
                                </p>
                            </div>
                        </div>

                    </a>

                    <a href="javascript:void(0);" class="panel-offers__item">

                        <div class="product product--carousel">
                            <div class="product__image" style="background-image:url('images/placeholder/carouselproducts-4.png');">
                            </div>
                            <div class="product__info">
                                <p class="product__title text--12 c--grayDark">
                                    Rossetto idratante intenso
                                </p>
                                <p class="product__details text--12 c--grayLight">
                                    Un intenso trattamento idratante che regala alle labbra un colore pieno
                                </p>
                            </div>
                        </div>

                    </a>

                </div>

                <a href="javascript:void(0);" class="f--bold c--black text--15 deskOnly">
                    CARICA ALTRE OFFERTE <span class="icon icon--angle-green icon--rotate-down text--14"></span>
                </a>

            </div>

            <div class="panel-offers__row">

                <span class="panel-offers__title f--regular c--grayLight text--15">
                    <strong class="c--black">Aggiungi un prodotto OFFERTA SPECIALE</strong><em class="noMobile">&nbsp;-&nbsp;</em>Questa settimana puoi scegliere tra:
                </span>

                <div class="panel-offers__carousel j-carousel--offers">

                    <a href="javascript:void(0);" class="panel-offers__item">

                        <div class="product product--carousel">
                            <div class="product__image" style="background-image:url('images/placeholder/carouselproducts-4.png');">
                            </div>
                            <div class="product__info">
                                <p class="product__title text--12 c--grayDark">
                                    Rossetto idratante intenso
                                </p>
                                <p class="product__details text--12 c--grayDark">
                                    solo <strong>12,99</strong>
                                </p>
                            </div>
                        </div>

                    </a>

                    <a href="javascript:void(0);" class="panel-offers__item">

                        <div class="product product--carousel">
                            <div class="product__image" style="background-image:url('images/placeholder/carouselproducts-4.png');">
                            </div>
                            <div class="product__info">
                                <p class="product__title text--12 c--grayDark">
                                    Rossetto idratante intenso
                                </p>
                                <p class="product__details text--12 c--grayDark">
                                    solo <strong>12,99</strong>
                                </p>
                            </div>
                        </div>

                    </a>

                    <a href="javascript:void(0);" class="panel-offers__item">

                        <div class="product product--carousel active">
                            <div class="product__image" style="background-image:url('images/placeholder/carouselproducts-4.png');">
                            </div>
                            <div class="product__info">
                                <p class="product__title text--12 c--grayDark">
                                    Rossetto idratante intenso
                                </p>
                                <p class="product__details text--12 c--grayDark">
                                    solo <strong>12,99</strong>
                                </p>
                            </div>
                        </div>

                    </a>

                </div>

                <a href="javascript:void(0);" class="f--bold c--black text--15 deskOnly">
                    CARICA ALTRE OFFERTE <span class="icon icon--angle-green icon--rotate-down text--14"></span>
                </a>

            </div>

            <div class="panel-offers__row">

                <span class="panel-offers__title f--regular c--grayLight text--15">
                    <strong class="c--black">Al raggiungimento di 40€ di spesa potrai scegliere un omaggio gratis</strong>
                </span>

                <div class="panel-offers__carousel j-carousel--offers">

                    <a href="javascript:void(0);" class="panel-offers__item">

                        <div class="product product--carousel active">
                            <div class="product__image" style="background-image:url('images/placeholder/carouselproducts-4.png');">
                            </div>
                            <div class="product__info">
                                <p class="product__title text--12 c--grayDark">
                                    Rossetto idratante intenso
                                </p>
                                <p class="product__details text--12 c--grayLight">
                                    Un intenso trattamento idratante che regala alle labbra un colore pieno
                                </p>
                            </div>
                        </div>

                    </a>

                    <a href="javascript:void(0);" class="panel-offers__item">

                        <div class="product product--carousel">
                            <div class="product__image" style="background-image:url('images/placeholder/carouselproducts-4.png');">
                            </div>
                            <div class="product__info">
                                <p class="product__title text--12 c--grayDark">
                                    Rossetto idratante intenso
                                </p>
                                <p class="product__details text--12 c--grayLight">
                                    Un intenso trattamento idratante che regala alle labbra un colore pieno
                                </p>
                            </div>
                        </div>

                    </a>

                    <a href="javascript:void(0);" class="panel-offers__item">

                        <div class="product product--carousel">
                            <div class="product__image" style="background-image:url('images/placeholder/carouselproducts-4.png');">
                            </div>
                            <div class="product__info">
                                <p class="product__title text--12 c--grayDark">
                                    Rossetto idratante intenso
                                </p>
                                <p class="product__details text--12 c--grayLight">
                                    Un intenso trattamento idratante che regala alle labbra un colore pieno
                                </p>
                            </div>
                        </div>

                    </a>

                </div>

                <a href="javascript:void(0);" class="f--bold c--black text--15 deskOnly">
                    CARICA ALTRE OFFERTE <span class="icon icon--angle-green icon--rotate-down text--14"></span>
                </a>

            </div>

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

    <div class="container deskOnly">

        <?php include('partials/contacts.php'); ?>

    </div>

    <div class="container last noDesk">

        <?php include('partials/followus.php'); ?>

    </div>
</section>