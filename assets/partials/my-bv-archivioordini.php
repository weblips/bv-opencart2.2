<h4 class="title-mobile f--regular text-14 c--green noDesk">
    ARCHIVIO ORDINI
</h4>

<p class="text--14">
    Qui di seguito trovi una tabella riassuntiva di tutti i tuoi ordini fatti su www.bottegaverde.it. Se il tuo ultimo ordine è in tabella, sicuramente è stato registrato correttamente
</p>

<h3 class="f--regular c--green text-14 l-spacing--1">
    CODIFICHE UTILIZZATE PER INDICARE LO STATO DEI TUOI ORDINI:
</h3>

<table class="table-legend-orders">
    <tbody>
        <tr>
            <td>
                <strong class="text--14">
                    IN ELABORAZIONE:
                </strong>
            </td>
            <td>
                <p>
                    Se desideri <strong>annullare un ordine</strong> con dicitura <strong>"In elaborazione"</strong> ti invitiamo a cliccare sul tasto <strong>Annulla</strong>,
                    mentre se vuoi <strong>modificarlo</strong> devi <strong>annullare l'ordine</strong> ed <strong>effettuarne uno nuovo</strong>.
                </p>
            </td>
        </tr>
        <tr>
            <td>
                <strong class="text--14">
                    ELABORATO:
                </strong>
            </td>
            <td>
                <p>
                    Il tuo ordine è stato registrato correttamente, è entrato nelle procedure di lavorazione e riceverai il pacco con
                    i tuoi acquisti.
                </p>
            </td>
        </tr>
        <tr>
            <td>
                <strong class="text--14">
                    ANNULLATO:
                </strong>
            </td>
            <td>
                <p>
                    Indica che <strong>l’annullamento dell’ordine è andato a buon fine.</strong> Una volta annullato non può essere riabilitato
                    in automatico, ma devi <strong>procedere all' inserimento di un nuovo ordine.</strong> (Nel caso si voglia usufruire di offerte particolari presenti nelle newsletter si dovrà rientrare sul sito attraverso i link presenti nella e-mail promozionale).
                </p>
            </td>
        </tr>
    </tbody>
</table>

<table class="table-orders">
    <thead>
        <tr>
            <th class="f--regular c--white text--14">
                DATA ORDINE
            </th>
            <th class="f--regular c--white text--14 noMobile">
                TIPO ORDINE
            </th>
            <th class="f--regular c--white text--14">
                IMPORTO
            </th>
            <th class="f--regular c--white text--14">
                PAGAMENTO
            </th>
            <th class="f--regular c--white text--14">
                STATO DELL'ORDINE
            </th>
            <th class="f--regular c--white text--14 noMobile">
                OPZIONI
            </th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td class="f--regular c--grayDark text--14">
                20/01/2016 ore 21:28
            </td>
            <td class="f--regular c--grayDark text--14 noMobile">
                INTERNET
            </td>
            <td class="f--regular c--grayDark text--14">
                € 22,90
            </td>
            <td class="f--regular c--grayDark text--14">
                CONTRASSEGNO
            </td>
            <td class="order-status-row f--regular c--grayDark text--14">
                <img class="icon noMobile" src="images/various/icon-edit-black.png"> IN ELABORAZIONE

                <a href="javascript:void(0);" class="f--regular c--grayDark text--14 mobileOnly">
                    <img class="icon" src="images/various/icon-delete-black.png"> ANNULLA
                </a>
            </td>
            <td class="noMobile">
                <a href="javascript:void(0);" class="f--regular c--grayDark text--14">
                    <img class="icon" src="images/various/icon-delete-black.png"> ANNULLA
                </a>
            </td>
        </tr>
        <tr>
            <td class="f--regular c--grayDark text--14">
                19/12/2015 ore 09:15
            </td>
            <td class="f--regular c--grayDark text--14 noMobile">
                INTERNET
            </td>
            <td class="f--regular c--grayDark text--14">
                € 45,30
            </td>
            <td class="f--regular c--grayDark text--14">
                CONTRASSEGNO
            </td>
            <td class="order-status-row f--regular c--grayDark text--14">
                <img class="icon noMobile" src="images/various/icon-confirm-black.png"> ELABORATO
            </td>
            <td class="noMobile">
                &nbsp;
            </td>
        </tr>

        <?php
            for ($i = 1; $i <= 3; $i++) {
        ?>
            <tr>
                <td class="f--regular c--grayDark text--14">
                    06/06/2015 ore 16:58
                </td>
                <td class="f--regular c--grayDark text--14 noMobile">
                    INTERNET
                </td>
                <td class="f--regular c--grayDark text--14">
                    € 60,55
                </td>
                <td class="f--regular c--grayDark text--14">
                    CARTA DI CREDITO
                </td>
                <td class="order-status-row f--regular c--grayDark text--14">
                    <img class="icon noMobile" src="images/various/icon-delete-black.png"> ANNULLATO
                </td>
                <td class="noMobile">
                    &nbsp;
                </td>
            </tr>
        <?php
            }
        ?>
    </tbody>
</table>