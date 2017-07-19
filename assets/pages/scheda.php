<section class="section section--scheda">

    <?php include('partials/deliverystripe.php'); ?>

    <div class="container">

        <?php include('modules/breadcrumb.php'); ?>

    </div>

    <div class="shipping shipping--small deskOnly">

        <div class="container">

            <?php include('partials/shippinginfo.php'); ?>

        </div>

    </div>

    <div class="container">

        <div class="scheda">

            <div class="scheda__header">

                <div class="scheda__header__block scheda__header__block--left scheda-block">
                    <a href="javascript:void(0);" class="link__return pull-left f--light">
                        <span class="icon icon--angle-circle-o-black icon--rotate-left text--18 deskOnly"></span>
                        <span class="deskOnly"> TORNA AI RISULTATI</span>
                        <span class="icon icon--catalogue-th-black text--18 noDesk"></span>
                    </a>
                </div>
                <div class="scheda__header__block scheda__header__block--right scheda-block">
                    <a href="javascript:void(0);" class="pull-left f--light">
                        <span class="icon icon--angle-black icon--rotate-left text--10"></span>
                        <span class="deskOnly"> PRECEDENTE</span>
                    </a>
                    <a href="javascript:void(0);" class="pull-right f--light">
                        <span class="deskOnly">SUCCESSIVO </span>
                        <span class="icon icon--angle-black icon--rotate-right text--10"></span>
                    </a>
                </div>

            </div>

            <div class="scheda__content">

                <div class="scheda__preview scheda-block">

                    <div class="previewcarousel">

                        <div class="j-carousel--preview-thumbs deskOnly">

                            <a href="javascript:void(0);" class="previewcarouselthumb__slide">
                                <img src="images/placeholder/preview-product.jpg">
                            </a>
                            <a href="javascript:void(0);" class="previewcarouselthumb__slide">
                                <img src="images/placeholder/preview-product.jpg">
                            </a>
                            <a href="javascript:void(0);" class="previewcarouselthumb__slide">
                                <img src="images/placeholder/preview-product.jpg">
                            </a>

                        </div>

                        <div class="j-carousel--preview">

                            <div class="previewcarousel__slide">
                                <span class="badge badge--must-have"></span>
                                <img src="images/placeholder/preview-product.jpg">
                            </div>
                            <div class="previewcarousel__slide">
                                <img src="images/placeholder/preview-product.jpg">
                            </div>
                            <div class="previewcarousel__slide">
                                <img src="images/placeholder/preview-product.jpg">
                            </div>

                        </div>

                    </div>

                </div>

                <div class="scheda__detail scheda-block">

                    <h1 class="detail__title f--regular text--23">My color - Ombretto con Vitamina A ed E e coenzima Q10</h1>

                    <div class="deskOnly">
                        <?php include('modules/stars.php'); ?> <span class="f--light c--green text--13">14 Recensioni</span>
                    </div>

                    <div class="detail-tabs deskOnly">

                        <div class="tabs__header">

                            <div class="j-detail__nav__tabs nav__tabs list-inline list-unstyled">
                                <a href="javascript:void(0);" class="nav__tabs__item active text--13">
                                    DESCRIZIONE
                                </a>
                                <a href="javascript:void(0);" class="nav__tabs__item text--13">
                                    SPEDIZIONI
                                </a>
                                <a href="javascript:void(0);" class="nav__tabs__item text--13">
                                    RESI
                                </a>
                            </div>

                        </div>

                        <div class="tabs__content">
                            <div class="tabs__panel active">
                                <p>Una polvere ad alta pigmentazione per illuminare lo sguardo con eccezionale intensità. La texture innovativa, soffice, confortevole e facile da sfumare anche con le dita, permette un make-up veloce e una resa colore sublime, che resta uniforme a lungo.</p>
                                <a href="javascript:void(0);" class="tabs__panel__link text--12">LEGGI TUTTO <span class="icon icon--angle-circle-o-green icon--rotate-down text--16"></span></a>
                            </div>
                            <div class="tabs__panel">
                                <!-- contenuto tab 2 -->
                            </div>
                            <div class="tabs__panel">
                                <!-- contenuto tab 3 -->
                            </div>
                        </div>
                    </div>

                    <p class="c--green deskOnly">Sceglilo se ami il lorem ipsum!</p>

                    <div class="tonality deskOnly">
                        <span class="tonality__title f--light">TONALIT&Agrave;</span>
                        <ul class="tonality__list list-inline list-unstyled">

                            <?php
                            for ($i = 1; $i <= 18; $i++) {
                                ?>

                                <li class="tonality__item">
                                    <a href="javascript:void(0);" style="background-color: #44929d;">
                                        <div class="tonality__viewer">
                                            <img src="images/placeholder/tonality-viewer.png">
                                        </div>
                                    </a>
                                </li>

                            <?php
                            }
                            ?>

                        </ul>
                        <div class="tonality__selected">
                            <span class="icon icon--check-green text--16"></span> <span class="f--regular c--green text--16">Selezionato: </span><span class="f--italic text--16">Turchese</span>
                        </div>
                    </div>

                    <div class="product__buy">
                        <ul class="product__buy__list list-inline">
                            <li class="product__buy__item">
                                <p class="product__prices">
                                    <span class="product__price product__price--old c--grayLight text--24">€ 39,00 </span>
                                    <span class="product__price product__price--discount c--green text--24">-75% </span>
                                    <span class="product__price product__price--current c--grayDark text--24">€ 9,99 </span>
                                </p>
                            </li>
                            <li class="product__buy__item">
                                <div class="select noDesk">
                                    <a class="select__button button button--outline" href="javascript:void(0);">
                                        COLORE <span class="icon icon--angle-black icon--rotate-down text--12"></span>
                                    </a>
                                    <div class="select__menu">
                                        <ul class="list-unstyled">
                                            <li class="select__item">
                                                <a href="javascript:void(0);" class="f--light c--gray text--14">COLORE</a>
                                            </li>
                                            <li class="select__item">
                                                <a href="javascript:void(0);" class="f--light c--gray text--14">COLORE</a>
                                            </li>
                                            <li class="select__item">
                                                <a href="javascript:void(0);" class="f--light c--gray text--14">COLORE</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <span class="f--light noDesk">Q.T&Agrave;</span>
                                <div class="select">
                                    <a class="select__button button button--outline" href="javascript:void(0);">
                                        1 <span class="icon icon--angle-black icon--rotate-down text--12"></span>
                                    </a>
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
                            </li>
                            <li class="product__buy__item">
                                <a class="button button--buy c--white text--12" href="javascript:void(0);">
                                    <span class="icon icon--shop-white icon--left text--24 noDesk"></span>
                                    AGGIUNGI<span class="noDesk"> ALLA TUA SHOPPING BAG</span>
                                    <span class="icon icon--shop-white icon--right text--24 deskOnly"></span>
                                </a>
                            </li>
                        </ul>

                        <p class="availability-text deskOnly"><img class="icon" src="images/various/icon-clock.png"> Disponibilità online immediata</p>

                        <a href="javascript:void(0);" class="wishlist-text"><span class="icon icon--heart text--16"></span> Aggiungi alla wishlist</a>

                    </div>

                </div>

            </div>

            <div class="scheda__footer">
                <div class="scheda__reviews noDesk">
                    <?php include('modules/stars.php'); ?> <span class="f--light c--green text--13">14 Recensioni</span>
                    <a href="javascript:void(0);" class="scheda__reviews__read f--light c--green text--18">LEGGI</a>
                </div>
                <div class="scheda__footer__block scheda-block">
                    <span class="f--light text--15 l-spacing--5">CONDIVIDI</span>
                    <ul class="social__share list-unstyled list-inline">
                        <li class="social__share__item">
                            <a href="javascript:void(0);" class="icon f--icon f--icon--facebook text--40">f</a>
                            <span class="f--regular text--14">15</span>
                        </li>
                        <li class="social__share__item">
                            <a href="javascript:void(0);" class="icon f--icon f--icon--pinterest text--40">&</a>
                            <span class="f--regular text--14">5</span>
                        </li>
                        <li class="social__share__item">
                            <a href="javascript:void(0);" class="icon f--icon f--icon--twitter text--40">l</a>
                            <span class="f--regular text--14">12</span>
                        </li>
                    </ul>
                </div>
            </div>

        </div>

    </div>

    <div class="container">

        <div class="article article--nature-box deskOnly">

            <div class="article__content">

                <div class="article__image" style="background-image:url('images/placeholder/article-block-1.jpg');"></div>
                <div class="article__block">

                    <h3 class="article__title f--light c--white text--20">IL SUO SEGRETO</h3>
                    <p class="article__description c--white text--14">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>

                </div>
                <div class="article__block"></div>

            </div>

        </div>

        <div class="article article--style-tips deskOnly">
            <div class="article__content">
                <div class="article__block">

                    <h3 class="article__title f--light c--green text--20">PERSONAL STYLE TIPS</h3>
                    <h4 class="article__subtitle f--lightsubitalic text--20">segui i nostri consigli per ottenere il massimo dai nostri prodotti</h4>
                    <p class="article__description text--14">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>

                </div>
                <div class="article__block">

                    <div class="article__video">

                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive__item" src="https://www.youtube.com/embed/CZvXZTq3aiE" frameborder="0" allowfullscreen></iframe>
                        </div>

                        <p class="f--light c--green text--16">Beauty routine</p>
                        <p class="f--lightsubitalic text--16">Guarda il video e scopri tutti i trucchi per una cura quotidiana professionale</p>

                    </div>

                </div>
            </div>
        </div>

        <div class="accordion accordion--parent">

            <h3 class="j-accordion__trigger accordion__title accordion__title--parent first-line f--light c--green text--20 noDesk">
                DESCRIZIONE COMPLETA
                <span class="icon icon--triangle-black text--12"></span>
            </h3>
            <div class="accordion__content">
                <p class="accordion__description f--light noDesk">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam.</p>

                <div class="accordion accordion--large">
                    <h3 class="j-accordion__trigger accordion__title f--light c--green text--20 deskOnly">
                        DESCRIZIONE COMPLETA
                        <span class="icon icon--angle-circle-o-green text--18"></span>
                    </h3>
                    <div class="accordion__content deskOnly">
                        <p class="accordion__description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam.</p>
                    </div>

                    <h3 class="j-accordion__trigger accordion__title f--light c--green text--20">
                        ESITI TEST
                        <span class="icon icon--angle-circle-o-green text--18"></span>
                    </h3>
                    <div class="accordion__content">
                        <p class="accordion__description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam.</p>
                    </div>

                    <h3 class="j-accordion__trigger accordion__title f--light c--green text--20">
                        CARATTERISTICHE
                        <span class="icon icon--angle-circle-o-green text--18"></span>
                    </h3>
                    <div class="accordion__content">
                        <p class="accordion__description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam.</p>
                    </div>

                    <h3 class="j-accordion__trigger accordion__title f--light c--green text--20">
                        MODO D'USO
                        <span class="icon icon--angle-circle-o-green text--18"></span>
                    </h3>
                    <div class="accordion__content">
                        <p class="accordion__description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam.</p>
                    </div>

                    <h3 class="j-accordion__trigger accordion__title f--light c--green text--20">
                        AVVERTENZE
                        <span class="icon icon--angle-circle-o-green text--18"></span>
                    </h3>
                    <div class="accordion__content">
                        <p class="accordion__description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam.</p>
                    </div>

                    <h3 class="j-accordion__trigger accordion__title f--light c--green text--20">
                        PROFUMO
                        <span class="icon icon--angle-circle-o-green text--18"></span>
                    </h3>
                    <div class="accordion__content">
                        <p class="accordion__description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam.</p>
                    </div>

                    <h3 class="j-accordion__trigger accordion__title f--light c--green text--20">
                        SEGRETO NATURALE
                        <span class="icon icon--angle-circle-o-green text--18"></span>
                    </h3>
                    <div class="accordion__content">
                        <p class="accordion__description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam.</p>
                    </div>
                </div>

                <div class="accordion__block deskOnly">
                    <p class="cite f--light text--24">Immergersi in una pausa di bellezza dal sapore di vaniglia nera rende felice anche i sensi.</p>
                </div>
                <div class="accordion__block deskOnly">
                    <div class="panel">
                        <div class="panel__header">
                            <h5 class="f--regular c--white text--18">
                                IDRATAZIONE IMMEDIATA
                            </h5>
                        </div>
                        <div class="panel__content">
                            <p class="c--black">Sed ut perspiciatis unde omnis iste natus error sit</p>
                        </div>
                    </div>
                </div>

            </div>

            <div class="noDesk">

                <h3 class="j-accordion__trigger accordion__title accordion__title--parent f--light c--green text--20 closed">
                    SPEDIZIONI
                    <span class="icon icon--triangle-black text--12"></span>
                </h3>
                <div class="accordion__content collapsed">
                    <p class="accordion__description f--light">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam.</p>
                </div>

                <h3 class="j-accordion__trigger accordion__title accordion__title--parent f--light c--green text--20 closed">
                    RESI
                    <span class="icon icon--triangle-black text--12"></span>
                </h3>
                <div class="accordion__content collapsed">
                    <p class="accordion__description f--light">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam.</p>
                </div>

                <h3 class="j-accordion__trigger accordion__title accordion__title--parent f--light c--green text--20 closed">
                    STYLE TIPS
                    <span class="icon icon--triangle-black text--12"></span>
                </h3>
                <div class="accordion__content collapsed">
                    <p class="accordion__description f--light">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam.</p>
                </div>

                <h3 class="j-accordion__trigger accordion__title accordion__title--parent f--light c--green text--20 closed">
                    BEATY ROUTINE
                    <span class="icon icon--triangle-black text--12"></span>
                </h3>
                <div class="accordion__content collapsed">
                    <p class="accordion__description f--light">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam.</p>
                </div>

            </div>

        </div>

    </div>

    <div class="container">

        <div class="customer-tabs">

            <div class="tabs__header">

                <h3 class="f--light c--green text--22 noDesk">
                    LA VOCE DEI NOSTRI CLIENTI
                </h3>

                <div class="j-customers__nav__tabs nav__tabs list-inline list-unstyled deskOnly">
                    <a href="javascript:void(0);" class="nav__tabs__item active c--green text--22">
                        MIGLIORI RECENSIONI
                    </a>
                    <a href="javascript:void(0);" class="nav__tabs__item c--green text--22">
                        RECENSIONI PI&Ugrave; RECENTI
                    </a>
                </div>

            </div>

            <div class="tabs__content">

                <div class="tabs__panel active">

                    <div class="customers customers--three-item">

                        <?php
                            for ($i = 1; $i <= 3; $i++) {
                        ?>
                            <?php include('modules/customer.php'); ?>
                        <?php
                            }
                        ?>

                    </div>

                </div>

                <div class="tabs__panel">
                    <!-- contenuto tab 2 -->
                </div>

            </div>

            <div class="tabs__footer">

                <div class="j-customers__nav__tabs nav__tabs noDesk">
                    <a href="javascript:void(0);" class="nav__tabs__item active c--green text--22">
                        MIGLIORI RECENSIONI
                    </a>
                    <a href="javascript:void(0);" class="nav__tabs__item c--green text--22">
                        RECENSIONI PI&Ugrave; RECENTI
                    </a>
                </div>

                <ul class="list-inline list-unstyled">
                    <li class="tabs__footer__item">
                        <a href="javascript:void(0);" class="button button--outline c--green">SCOPRILE TUTTE</a>
                    </li>
                    <li class="tabs__footer__item">
                        <a href="javascript:void(0);" class="button button--outline c--green">SCRIVI LA TUA RECENSIONE</a>
                    </li>
                </ul>

            </div>

        </div>

    </div>

    <div class="container deskOnly">

        <div class="daily-routine-bundle">

            <h3 class="daily-routine-bundle__title f--light c--green text--22">DAILY ROUTINE BUNDLE</h3>
            <p class="daily-routine-bundle__subtitle f--lightsubitalic text--20">La nostra proposta per un trattamento quotidiano completo</p>

            <div class="daily-routine-bundle__content">

                <ul class="list-inline list-unstyled">
                    <li class="daily-routine-bundle__item">
                        <a href="javascript:void(0);" class="daily-routine-bundle__product">

                            <div class="product">
                                <div class="product__image" style="background-image:url('images/placeholder/carouselproducts-1.png');">
                                    <span class="badge badge--must-have"></span>
                                </div>
                                <div class="product__info">
                                    <p class="product__title text--12 c--grayDark">
                                        Rossetto idratante intenso
                                    </p>
                                    <p class="product__prices">
                                        <span class="product__price product__price--old c--grayLight">€ 39,00 </span>
                                        <span class="product__price product__price--discount c--green">-75% </span>
                                        <span class="product__price product__price--current c--grayDark">€ 9,99 </span>
                                    </p>

                                    <?php include('modules/stars.php'); ?>
                                </div>
                            </div>

                        </a>
                    </li>
                    <li class="daily-routine-bundle__item">
                        <span class="icon icon--plus-circle text--36"></span>
                    </li>
                    <li class="daily-routine-bundle__item">
                        <a href="javascript:void(0);" class="daily-routine-bundle__product">

                            <div class="product">
                                <div class="product__image" style="background-image:url('images/placeholder/carouselproducts-2.png');">
                                </div>
                                <div class="product__info">
                                    <p class="product__title text--12 c--grayDark">
                                        Rossetto idratante intenso
                                    </p>
                                    <p class="product__prices">
                                        <span class="product__price product__price--old c--grayLight">€ 39,00 </span>
                                        <span class="product__price product__price--discount c--green">-75% </span>
                                        <span class="product__price product__price--current c--grayDark">€ 9,99 </span>
                                    </p>

                                    <?php include('modules/stars.php'); ?>
                                </div>
                            </div>

                        </a>
                    </li>
                    <li class="daily-routine-bundle__item">
                        <span class="icon icon--plus-circle text--36"></span>
                    </li>
                    <li class="daily-routine-bundle__item">
                        <a href="javascript:void(0);" class="daily-routine-bundle__product">

                            <div class="product">
                                <div class="product__image" style="background-image:url('images/placeholder/carouselproducts-3.png');">
                                </div>
                                <div class="product__info">
                                    <p class="product__title text--12 c--grayDark">
                                        Rossetto idratante intenso
                                    </p>
                                    <p class="product__prices">
                                        <span class="product__price product__price--old c--grayLight"></span>
                                        <span class="product__price product__price--discount c--green"></span>
                                        <span class="product__price product__price--current c--grayDark">€ 9,99 </span>
                                    </p>

                                    <?php include('modules/stars.php'); ?>
                                </div>
                            </div>

                        </a>
                    </li>
                </ul>

            </div>

        </div>

    </div>

    <div class="container">

        <div class="featured-products-tabs">

            <div class="tabs__header">

                <div class="j-featured-products__nav__tabs nav__tabs list-inline list-unstyled">
                    <a href="javascript:void(0);" class="nav__tabs__item active f--light text--22">PRODOTTI CORRELATI</a>
                    <a href="javascript:void(0);" class="nav__tabs__item f--light text--22 deskOnly">TI POTREBBERO INTERESSARE</a>
                    <a href="javascript:void(0);" class="nav__tabs__item f--light text--22 noDesk">ABBINALO CON</a>
                </div>

            </div>

            <div class="tabs__content">

                <div class="tabs__panel">

                    <div class="productscarousel">

                        <div class="j-carousel--products">

                            <a href="javascript:void(0);" class="productscarousel__slide">

                                <div class="product product--carousel">
                                    <div class="product__image" style="background-image:url('images/placeholder/carouselproducts-1.png');">
                                        <span class="badge badge--must-have"></span>
                                    </div>
                                    <div class="product__info">
                                        <p class="product__title text--12 c--grayDark">
                                            Rossetto idratante intenso
                                        </p>
                                        <p class="product__details text--12 c--grayLight">
                                            Un intenso trattamento idratante che regala alle labbra un colore pieno
                                        </p>
                                        <p class="product__prices">
                                            <span class="product__price product__price--old c--grayLight">€ 39,00 </span>
                                            <span class="product__price product__price--discount c--green">-75% </span>
                                            <span class="product__price product__price--current c--grayDark">€ 9,99 </span>
                                        </p>
                                    </div>
                                </div>

                            </a>

                            <a href="javascript:void(0);" class="productscarousel__slide">

                                <div class="product product--carousel">
                                    <div class="product__image" style="background-image:url('images/placeholder/carouselproducts-2.png');">
                                    </div>
                                    <div class="product__info">
                                        <p class="product__title text--12 c--grayDark">
                                            Rossetto idratante intenso
                                        </p>
                                        <p class="product__details text--12 c--grayLight">
                                            Un intenso trattamento idratante che regala alle labbra un colore pieno
                                        </p>
                                        <p class="product__prices">
                                            <span class="product__price product__price--old c--grayLight">€ 39,00 </span>
                                            <span class="product__price product__price--discount c--green">-75% </span>
                                            <span class="product__price product__price--current c--grayDark">€ 9,99 </span>
                                        </p>
                                    </div>
                                </div>

                            </a>

                            <a href="javascript:void(0);" class="productscarousel__slide">

                                <div class="product product--carousel">
                                    <div class="product__image" style="background-image:url('images/placeholder/carouselproducts-3.png');">
                                    </div>
                                    <div class="product__info">
                                        <p class="product__title text--12 c--grayDark">
                                            Rossetto idratante intenso
                                        </p>
                                        <p class="product__details text--12 c--grayLight">
                                            Un intenso trattamento idratante che regala alle labbra un colore pieno
                                        </p>
                                        <p class="product__prices">
                                            <span class="product__price product__price--old c--grayLight"></span>
                                            <span class="product__price product__price--discount c--green"></span>
                                            <span class="product__price product__price--current c--grayDark">€ 9,99 </span>
                                        </p>
                                    </div>
                                </div>

                            </a>

                            <a href="javascript:void(0);" class="productscarousel__slide">

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
                                        <p class="product__prices">
                                            <span class="product__price product__price--old c--grayLight">€ 39,00 </span>
                                            <span class="product__price product__price--discount c--green">-75% </span>
                                            <span class="product__price product__price--current c--grayDark">€ 9,99 </span>
                                        </p>
                                    </div>
                                </div>

                            </a>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <div class="container">
        <div class="page__footer">
            <a class="backToTop" href="javascript:void(0);">
                <span class="icon icon--angle-circle-o-green text--30"></span>
            </a>
            <a class="button c--white text--14" href="javascript:void(0);">
                <span class="deskOnly">TORNA ALLA CATEGORIA</span>
                <span class="noDesk">TORNA AI RISULTATI</span>
            </a>
        </div>
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

</section>