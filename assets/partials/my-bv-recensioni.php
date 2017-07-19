<div class="reviews-tabs">

    <div class="tabs__header deskOnly">

        <div class="j-reviews__nav__tabs nav__tabs">

            <?php include('partials/my-bv-recensioni-menu.php'); ?>

        </div>

    </div>

    <div class="tabs__content">

        <div id="my-bv-recensioni-scrivi" class="tabs__panel active" style="display: block;">
            <?php include('partials/my-bv-recensioni-scrivi.php'); ?>
        </div>

        <div id="my-bv-recensioni-in-approvazione" class="tabs__panel active" style="display: none;">
            <?php include('partials/my-bv-recensioni-in-approvazione.php'); ?>
        </div>

        <div id="my-bv-recensioni-approvate" class="tabs__panel active" style="display: none;">
            <?php include('partials/my-bv-recensioni-approvate.php'); ?>
        </div>

    </div>

</div>