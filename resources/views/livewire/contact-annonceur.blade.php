<div>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title"><i class=" icon-mail-2"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Contacter l'annonceur </font></font></h4>
        
                        <button type="button" class="close modal-close" data-bs-dismiss="modal"><span aria-hidden="true"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">×</font></font></span><span class="sr-only"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Fermer</font></font></span></button>
                    </div>
                    <div class="modal-body">
                        <form wire:submit.prevent="contactEmailSeller">
                            <div class="form-group">
                                <label for="recipient-name" class="control-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nom:</font></font></label>
                                <input class="form-control required" id="recipient-name" placeholder="Votre nom" data-placement="top" data-trigger="manual" data-content="Must be at least 3 characters long, and must only contain letters." type="text">
                            </div>
                            <div class="form-group">
                                <label for="sender-email" class="control-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">E-mail:</font></font></label>
                                <input id="sender-email" type="text" data-content="Must be a valid e-mail address (user@gmail.com)" data-trigger="manual" data-placement="top" placeholder="email@vous.com" class="form-control email">
                            </div>
                            <div class="form-group">
                                <label for="recipient-Phone-Number" class="control-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Numéro de téléphone:</font></font></label>
                                <input type="text" maxlength="60" class="form-control" id="recipient-Phone-Number">
                            </div>
                            <div class="form-group">
                                <label for="message-text" class="control-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Message </font></font><span class="text-count"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">(300)</font></font></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">&nbsp;:</font></font></label>
                                <textarea class="form-control" id="message-text" placeholder="Votre message ici.." data-placement="top" data-trigger="manual"></textarea>
                            </div>
                            <div class="form-group">
                                <p class="help-block pull-left text-danger hide" id="form-error"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">&nbsp; Le formulaire n'est pas valide.</font></font></p>
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-bs-dismiss="modal"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Annuler</font></font></button>
                                <button type="submit" class="btn btn-success pull-right"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Envoyer le message!</font></font></button>
                            </div>
                        </form>
                    </div>
                   
                </div>
            </div>
        </div>
      </div>

</div>
