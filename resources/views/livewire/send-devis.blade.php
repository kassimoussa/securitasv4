<div class="offcanvas offcanvas-start bg-light" tabindex="-1" id="devis" aria-labelledby="devis" wire:ignore.self>
    <div class="offcanvas-header border-bottom border-dark">
        <h5 class="offcanvas-title text-center" id="devis">Demande de devis</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <div class="text-start">
            <p class="text-muted fs-6">
                Remplissez le formulaire ci-dessous et obtenez très rapidement un
                devis.
            </p>
        </div>

        <div class="">
            <form wire:submit.prevent="send">
                <x-honeypot />
                <div class="form-group mb-2">
                    <!-- Name input-->
                    <input class="form-control" id="name" wire:model="nom" type="text" placeholder="Nom *"
                        data-sb-validations="required" />
                    <span class="text-danger">
                        @error('nom')
                            {{ $message }}
                        @enderror
                    </span>
                </div>

                <div class="form-group mb-2">
                    <!-- Email address input-->
                    <input class="form-control" id="email" wire:model="email" type="email" placeholder="Email *"
                        data-sb-validations="required,email" />
                    <span class="text-danger">
                        @error('email')
                            {{ $message }}
                        @enderror
                    </span>
                </div>

                <div class="form-group mb-2">
                    <!-- Phone number input-->
                    <input class="form-control" id="phone" wire:model="telephone" type="tel"
                        placeholder="Téléphone * ex: 21 35 00 00 " />
                    <span class="text-danger">
                        @error('telephone')
                            {{ $message }}
                        @enderror
                    </span>
                    <div class="invalid-feedback" data-sb-feedback="phone:required">
                        Ce champ est requit.
                    </div>
                </div>

                <div class="form-group mb-2">
                    <!-- Société name input-->
                    <input class="form-control" id="societe" wire:model="societe" type="name"
                        placeholder="Société *" data-sb-validations="required" />
                    <span class="text-danger">
                        @error('societe')
                            {{ $message }}
                        @enderror
                    </span>
                </div>

                <div class="form-group mb-2">
                    <!-- Adresse name input-->
                    <input class="form-control" id="adresse" wire:model="adresse" type="name"
                        placeholder="Adresse *" data-sb-validations="required" />
                    <span class="text-danger">
                        @error('adresse')
                            {{ $message }}
                        @enderror
                    </span>
                </div>

                <div class="form-group mb-2">
                    <!-- Adresse name input-->
                    <select id="type_service" wire:model="type_service" class="form-select">
                        <option>Type de service</option>
                        <option value="transfert">Transfert (Biens/Fonds)</option>
                        <option value="surete">Ingénierie sûreté </option>
                        <option value="gardiennage">Gardiennage</option>
                    </select>
                    <span class="text-danger">
                        @error('type_service')
                            {{ $message }}
                        @enderror
                    </span>
                </div>

                <div class="form-group form-group-textarea mb-2">
                    <!-- Détail du projet input-->
                    <textarea class="form-control" id="detail_projet" wire:model="detail" placeholder="Détail du projet *"
                        data-sb-validations="required" rows="5"></textarea>
                    <span class="text-danger">
                        @error('detail_projet')
                            {{ $message }}
                        @enderror
                    </span>
                </div>

                <!-- Submit Button-->
                <div class="text-center my-3">
                    <button class="btn btn-primary btn-lg text-uppercase" id="submitButton" type="submit">
                        Envoyer votre demande
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
