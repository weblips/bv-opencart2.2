<section class="section section--area-riservata">

    <?php include('partials/deliverystripe.php'); ?>

    <div class="container">

        <?php include('modules/breadcrumb.php'); ?>

    </div>

    <div class="container">

        <div class="my-bv-content">

            <div class="my-bv-content__left">

                <div class="my-bv-panel">
                    <div class="my-bv-panel__block">

                        <div class="block__object__wrapper profile-image">
                            <img class="block__object" src="images/placeholder/image-profile.jpg">

                            <a href="javascript:void(0);" class="profile-image__button noDesk">
                                <img src="images/various/icon-camera-green.png">
                            </a>
                        </div>

                        <span class="nickname f--regular c--black text--24">
                            Lucia
                        </span>

                        <hr class="block__object__hr">

                        <ul class="j-my-bv__menu block__body__list deskOnly">
                            <li>
                                <a href="javascript:void(0);" class="active c--green text--16 l-spacing--2" data-target="#my-bv-dati-personali-ordini">
                                    DATI PERSONALI E ORDINI
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" class="c--green text--16 l-spacing--2" data-target="#my-bv-prodotti-preferiti">
                                    PRODOTTI PREFERITI
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" class="c--green text--16 l-spacing--2" data-target="#my-bv-recensioni">
                                    RECENSIONI
                                </a>
                            </li>
                        </ul>

                        <a class="change-profile button button--outline-green c--green text--12" href="javascript:void(0);">
                            MODIFICA PROFILO
                        </a>

                    </div>

                    <div class="notifications-panel">
                        <div class="notifications-panel__header">
                            <a href="javascript:void(0);" class="j-notification-panel__trigger">
                                <h3 class="f--regular c--white text--16">
                                    NOTIFICHE (2) <span class="icon icon--angle-circle-o-white icon--rotate-down text--16 pull-right"></span>
                                </h3>
                            </a>
                        </div>
                        <div class="notifications-panel__content j-notification-panel__content" style="display: none;">
                            <ul class="notifications__list">
                                <li class="notifications__item">
                                    <span class="f--semibold text--15">HAI DEI PRODOTTI DA RECENSIRE</span>
                                </li>
                                <li class="notifications__item">
                                    <span class="f--semibold text--15">HAI UNA NUOVA MEDAGLIA!</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="my-bv-panel__block">

                        <div class="block__object__wrapper">
                            <div class="block__object">
                                <img src="images/various/icon-leaf-green.png">

                                <strong class="point__number c--green text--42">
                                    850
                                </strong>

                                <span class="point__text f--regular c--green text--14">
                                    PUNTI NATURA
                                </span>
                            </div>
                        </div>

                        <ul class="j-my-bv__menu block__body__list">
                            <li>
                                <span class="f--regular c--green text--16 l-spacing--2">
                                    NUMERO CARTA
                                </span>
                                <br>
                                <span class="f--regular c--black text--16">
                                    LX45690
                                </span>

                                <hr class="block__object__hr">
                            </li>
                            <li class="deskOnly">
                                <a href="javascript:void(0);" class="c--green text--16 l-spacing--2" data-target="#my-bv-gamification">
                                    GAMIFICATION
                                </a>
                            </li>
                            <li class="deskOnly">
                                <a href="javascript:void(0);" class="c--green text--16 l-spacing--2">
                                    CARTA FEDELT&Agrave;
                                </a>
                            </li>
                        </ul>

                    </div>

                    <?php include('modules/mybvmobilemenu.php'); ?>

                </div>

            </div>

            <div class="my-bv-content__right">


                <div id="my-bv-dati-personali-ordini" class="section-page" style="display: block;">
                    <?php include('partials/my-bv-datipersonaliordini.php'); ?>
                </div>

                <div id="my-bv-prodotti-preferiti" class="section-page" style="display: none;">
                    <?php include('partials/my-bv-prodottipreferiti.php'); ?>
                </div>

                <div id="my-bv-recensioni" class="section-page" style="display: none;">
                    <?php include('partials/my-bv-recensioni.php'); ?>
                </div>

                <div id="my-bv-gamification" class="section-page" style="display: none;">
                    <?php include('partials/my-bv-gamification.php'); ?>
                </div>

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

    <div class="container last noDesk">

        <?php include('partials/followus.php'); ?>

    </div>

</section>