<?php
for ($i = 1; $i <= 3; $i++) {
    ?>
    <form class="form">

        <div class="media">
            <div class="media-left">
                <img class="media-object" src="images/placeholder/carouselproducts-4.png">
            </div>
            <div class="media-body">
                <header class="media-body__header">
                    <h3 class="f--regular c--green text--14">
                        PRODOTTO 1
                    </h3>
                    <p class="text--14">
                        Scrivi qui la tua recensione
                    </p>
                </header>

                <textarea class="form-control" rows="5"></textarea>

                <footer class="media-body__footer">
                    <ul class="list-unstyled list-inline">
                        <li>
                                        <span class="f--regular text--14">
                                            Lascia un voto da 1 a 5
                                        </span>
                        </li>
                        <li>
                            <?php include('modules/stars.php'); ?>
                        </li>
                        <li>
                            <button class="button-save button c--white text--12" href="javascript:void(0);">
                                INVIA
                            </button>
                        </li>
                    </ul>
                </footer>
            </div>
        </div>

    </form>

<?php
}
?>