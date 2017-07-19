<section class="section section--storelocator">

    <?php include('partials/deliverystripe.php'); ?>

    <div class="container">

        <?php include('modules/breadcrumb-storelocator.php'); ?>

    </div>

    <div class="container">

        <div class="page__header">
            <div class="page__info">
                <h1 class="page__title c--green f--light text--25 l-spacing--7">STORE LOCATOR</h1>
                <h2 class="page__subtitle c--gray f--light text--18 l-spacing--1">Trova il negozio pi&ugrave; vicino a te</h3>
            </div>

            <button class="button button--storelocator c--white text--12 j-storelocatorMapTrigger" href="javascript:void(0);">
                <span class="icon icon--hamburger-white text--20 hidden active"></span><span class="icon icon--pin-white text--20"></span> <span class="text deskOnly">GUARDA SULLA MAPPA</span>
            </button>

            <p class="page__filter-title noDesk f--regular text--15 l-spacing--1">GUARDA TUTTI I NEGOZI</p>
        </div>

    </div>

    <div class="container">

        <div class="storelocator__map j-storelocatorMap">

            <div class="storelocator__map__search noDesk">
                <input class="input input--search f--italic text--14" type="text" placeholder="Milano">
                <button class="button button--storelocator">
                    <span class="icon icon--gps-white text--14"></span>
                </button>
            </div>

            <div class="storelocator__map__map">
                <!-- google maps container -->
                <div class="storelocator__map__container">

                </div>

                <!-- google maps fake infowindow -->
                <div class="storelocator__map__infowindow">
                    <span class="storelocator__store__type f--semibold text--15 c--white l-spacing--1">BOTTEGA VERDE STORE</span>
                    <a class="icon icon--close-x-white text--10" href="javascript:void(0)"></a>
                    <span class="storelocator__store__address f--semibold text--15 c--grayDark l-spacing--1">ORIO CENTER Via Portico, 12</span>
                    <span class="storelocator__store__phone f--semibold text--15 c--grayDark l-spacing--1"><span class="icon icon--phone text--12"> 02-55180300</span></span>
                    <div class="infowindow__pin"></div>
                </div>
            </div>
            
            <div class="storelocator__map__list">
                
                <div class="storelocator__map__search deskOnly">
                    <input class="input input--search f--italic text--14" type="text" placeholder="Cerca..">
                </div>

                <div class="storelocator__map__searchresults">
                    <?php for($i=0;$i<=15;$i++) : ?>
                        <div class="storelocator__store <?php if ($i==2) echo ' active'; ?>">
                            <span class="storelocator__store__type f--semibold text--15 c--green l-spacing--1">BOTTEGA VERDE STORE</span>
                            <span class="storelocator__store__address f--semibold text--15 c--grayDark l-spacing--1">ORIO CENTER Via Portico, 12</span>
                            <span class="storelocator__store__phone f--semibold text--15 c--grayDark l-spacing--1"><span class="icon icon--phone text--12"> 02-55180300</span></span>
                        </div>
                    <?php endfor; ?>
                </div>

            </div>

        </div>

        <div class="storelocator__filters">

            <div class="container--fixer">
            
                <div class="storelocator__filter">
                    
                    <div class="select">
                        <a class="select__button button button--outline" href="javascript:void(0);">
                            SCEGLI LA NAZIONE <span class="icon icon--small-arrow-down text--8"></span>
                        </a>
                        <div class="select__menu">
                            <ul class="list-unstyled">
                                <li class="select__item">
                                    <a href="javascript:void(0);" class="f--light c--gray text--14">ITALIA</a>
                                </li>
                                <li class="select__item">
                                    <a href="javascript:void(0);" class="f--light c--gray text--14">FRANCIA</a>
                                </li>
                                <li class="select__item">
                                    <a href="javascript:void(0);" class="f--light c--gray text--14">SPAGNA</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>

                <div class="storelocator__filter">
                    
                    <div class="select">
                        <a class="select__button button button--outline" href="javascript:void(0);">
                            SCEGLI LA REGIONE <span class="icon icon--small-arrow-down text--8"></span>
                        </a>
                        <div class="select__menu">
                            <ul class="list-unstyled">
                                <li class="select__item">
                                    <a href="javascript:void(0);" class="f--light c--gray text--14">LOMBARDIA</a>
                                </li>
                                <li class="select__item">
                                    <a href="javascript:void(0);" class="f--light c--gray text--14">PIEMONTE</a>
                                </li>
                                <li class="select__item">
                                    <a href="javascript:void(0);" class="f--light c--gray text--14">VENETO</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>

                <div class="storelocator__filter">
                    
                    <div class="select">
                        <a class="select__button button button--outline" href="javascript:void(0);">
                            SCEGLI LA CITT&Agrave; <span class="icon icon--small-arrow-down text--8"></span>
                        </a>
                        <div class="select__menu">
                            <ul class="list-unstyled">
                                <li class="select__item">
                                    <a href="javascript:void(0);" class="f--light c--gray text--14">MILANO</a>
                                </li>
                                <li class="select__item">
                                    <a href="javascript:void(0);" class="f--light c--gray text--14">COMO</a>
                                </li>
                                <li class="select__item">
                                    <a href="javascript:void(0);" class="f--light c--gray text--14">COMO</a>
                                </li>
                                <li class="select__item">
                                    <a href="javascript:void(0);" class="f--light c--gray text--14">COMO</a>
                                </li>
                                <li class="select__item">
                                    <a href="javascript:void(0);" class="f--light c--gray text--14">COMO</a>
                                </li>
                                <li class="select__item">
                                    <a href="javascript:void(0);" class="f--light c--gray text--14">COMO</a>
                                </li>
                                <li class="select__item">
                                    <a href="javascript:void(0);" class="f--light c--gray text--14">COMO</a>
                                </li>
                                <li class="select__item">
                                    <a href="javascript:void(0);" class="f--light c--gray text--14">COMO</a>
                                </li>
                                <li class="select__item">
                                    <a href="javascript:void(0);" class="f--light c--gray text--14">COMO</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>

            </div>

        </div>

    </div>

    <div class="container">
        
        <div class="storelocator__stores">
            
            <?php for($i=0;$i<=15;$i++) : ?>
                <div class="storelocator__store">
                    <span class="storelocator__store__city f--semibold text--15 c--green l-spacing--1">BERGAMO - ORIO AL SERIO</span>
                    <span class="storelocator__store__address f--semibold text--15 c--grayDark l-spacing--1">ORIO CENTER<br/>Via Portico, 12</span>
                    <span class="storelocator__store__phone f--semibold text--15 c--grayDark l-spacing--1"><span class="icon icon--phone text--12"> 02-55180300</span></span>
                    <span class="storelocator__store__link f--italic text--15 c--gray l-spacing--1"><span class="icon icon--pin text--12"> Guardalo sulla mappa</span>
                </div>
            <?php endfor; ?>

        </div>

    </div>

    <div class="container">

        <?php include('partials/guaranteespurchase.php'); ?>

    </div>

        <div class="container deskOnly">

            <?php include('partials/contacts.php'); ?>

        </div>

</section>