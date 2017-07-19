<form class="form f--regular">

    <fieldset>
        <legend class="legend c--green text--14">
            DATI REGISTRAZIONE
        </legend>

        <div class="form-group column-2">
            <label for="">E-mail</label>
            <input type="email" class="form-control" id="" value="Luciabv@gmail.com">
        </div>

        <div class="form-group column-4">
            <label for="">Password</label>
            <input type="password" class="form-control" id="">
        </div>

        <div class="form-group column-4">
            <label for="">Conferma password</label>
            <input type="password" class="form-control" id="">
        </div>

    </fieldset>

    <fieldset>
        <legend class="legend c--green text--14">
            DATI ANAGRAFICI
        </legend>

        <div class="form-group column-2">
            <label for="">Nome</label>
            <input type="text" class="form-control" id="">
        </div>

        <div class="form-group column-2">
            <label for="">Cognome</label>
            <input type="text" class="form-control" id="">
        </div>

        <div class="form-group column-4">
            <label for="">Sesso</label>

            <div class="select-control">
                <select>
                    <option>-</option>
                </select>
            </div>
        </div>

        <div class="form-group column-4">
            <label for="">Data di nascita</label>
            <input type="text" class="form-control" id="">
        </div>

        <div class="clearfix"></div>

        <div class="form-group column-2">
            <label for="">Indirizzo e numero civico</label>
            <input type="text" class="form-control" id="">
        </div>

        <div class="form-group column-2">
            <label for="">Specifiche indirizzo <em>(frazione, interno, etc)</em></label>
            <input type="text" class="form-control" id="">
        </div>

        <div class="form-group column-4">
            <label for="">Città</label>

            <div class="select-control">
                <select>
                    <option>-</option>
                </select>
            </div>
        </div>

        <div class="form-group column-4">
            <label for="">Provincia</label>

            <div class="select-control">
                <select>
                    <option>-</option>
                </select>
            </div>
        </div>

        <div class="form-group column-2">
            <label for="">Nazione</label>

            <div class="select-control">
                <select>
                    <option>-</option>
                </select>
            </div>
        </div>

        <div class="form-group column-4">
            <label for="">Cap</label>
            <input type="text" class="form-control" id="">
        </div>

        <div class="column-4 deskOnly">&nbsp;</div>

        <div class="form-group column-2">
            <label for="">Cognome campanello</label>
            <input type="text" class="form-control" id="">
        </div>

    </fieldset>

    <fieldset>

        <legend class="legend c--green text--14">
            DATI AGGIUNTIVI
        </legend>

        <div class="column-2">
            <div class="profile-choose">
                <span class="profile-choose__title f--regular text--14">Foto profilo</span>

                <img class="profile-choose__image" src="images/placeholder/image-profile.jpg">

                <div class="profile-choose__file">
                    <label for="">Seleziona l'immagine da caricare</label>
                    <br>
                    <div class="input-group">
                        <input id="upload-file" class="form-control upload-file" disabled="disabled" />
                        <div class="input-group-addon">
                            <span class="f--regular text--12">
                                BROWSE
                            </span>
                            <input id="upload-button" class="input-group-addon__button" type="file" />
                        </div>
                    </div>

                    <a href="javascript:void" class="profile-choose__btn-mobile f--regular text--14 noDesk">
                        SCEGLI DAL RULLINO
                    </a>
                    <br>
                    <a href="javascript:void" class="profile-choose__btn-mobile f--regular text--14 noDesk">
                        FAI UNA FOTO
                    </a>
                </div>
            </div>
        </div>

        <div class="column-4 deskOnly">&nbsp;</div>

        <div class="form-group column-4">
            <label for="">Telefono fisso</label>
            <input type="text" class="form-control" id="">
        </div>

        <div class="column-4 deskOnly">&nbsp;</div>

        <div class="form-group column-4">
            <label for="">Telefono cell</label>
            <input type="text" class="form-control" id="">
        </div>

    </fieldset>

    <button class="button-save button c--white text--12" href="javascript:void(0);">
        SALVA MODIFICHE
    </button>

    <div class="checkbox">
        <div class="square-checkbox">
            <input type="checkbox" id="account-checkbox-privacy" class="check-changes">
            <label for="account-checkbox-privacy"></label>
        </div>
        <label class="f--regular text--14" for="account-checkbox-privacy">Autorizzo il trattamento dei miei dati personali</label>
    </div>

    <fieldset>

        <legend class="legend c--green text--14">
            RIMOZIONE DEFINITIVA
        </legend>

        <div class="column-1">
            <p class="text--14">
                Se desideri rimuovere definitivamente il tuo account dal sito Bottega Verde, clicca sul tasto qui sotto. Ti ricordiamo che se vorrai riattivarlo dovrai contattare direttamente il <a href="javascript:void(0);" class="link-underline">Servizio Clienti</a>
            </p>
            <br>
            <br>
        </div>

        <button class="button c--white text--12" href="javascript:void(0);">
            RIMOZIONE DEFINITIVA
        </button>

    </fieldset>

</form>