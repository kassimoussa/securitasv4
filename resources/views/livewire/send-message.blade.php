<div class="offcanvas offcanvas-end bg-light" tabindex="-1" id="contecteznous" aria-labelledby="contecteznous" wire:ignore.self>
    <div class="offcanvas-header border-bottom border-dark">
        <h5 class="offcanvas-title text-center" id="contecteznous">
            Contactez-nous
        </h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <div class="text-start">
            <p class="text-muted fs-6">
                Remplissez le formulaire ci-dessous et nous prendrons contact avec
                vous.
            </p>
        </div>

        {{-- <div class="d-flex justify-content-between my-3">
            <div class="bg-primary opacity-50 fs-6 p-2 rounded">
                <a href="tel:+25321342087" class="text-dark"><i class="fas fa-phone"> </i> 21342087</a>
            </div>
            <div class="bg-primary opacity-50 fs-6 p-2 rounded">
                <a href="mailto:djiboutisecuritas@gmail.com" class="text-dark"><i class="fas fa-at"> </i>
                    djiboutisecuritas@gmail.com</a>
            </div>
        </div> --}}
        <div class="d-flex flex-column flex-sm-row justify-content-between my-3">
            <div class="bg-primary opacity-50 fs-6 p-2 rounded mb-2 mb-sm-0">
                <a href="tel:+25321342087" class="text-dark"><i class="fas fa-phone"></i> 21342087</a>
            </div>
            <div class="bg-primary opacity-50 fs-6 p-2 rounded">
                <a href="mailto:contact@securit-as.com" class="text-dark"><i class="fas fa-at"></i>
                    contact@securit-as.com</a>
            </div>
        </div>


        <div class="">
            <form wire:submit.prevent="send"> 
                <x-honeypot />
                <div class="form-group mb-2">
                    <!-- Name input-->
                    <input class="form-control" id="name1" wire:model="nom" type="text"
                        placeholder="Nom *" data-sb-validations="required" />
                        <span class="text-danger">
                            @error('nom')
                                {{ $message }}
                            @enderror
                        </span>
                </div>

                <div class="form-group mb-2">
                    <!-- Email address input-->
                    <input class="form-control" id="email" wire:model="email" type="email"
                        placeholder="Email *" data-sb-validations="required,email" />
                        <span class="text-danger">
                            @error('email')
                                {{ $message }}
                            @enderror
                        </span>
                </div>

                <div class="form-group mb-2">
                    <!-- Phone number input-->
                    <input class="form-control" id="phone" wire:model="telephone" type="tel"
                        placeholder="Téléphone * ex: 21 35 00 00 " data-sb-validations="required" />
                        <span class="text-danger">
                            @error('telephone')
                                {{ $message }}
                            @enderror
                        </span>
                </div>

                <div class="form-group form-group-textarea mb-2">
                    <!-- Message input-->
                    <textarea class="form-control" id="message" wire:model="detail" placeholder="Message *" data-sb-validations="required"
                        rows="5"></textarea>
                        <span class="text-danger">
                            @error('detail')
                                {{ $message }}
                            @enderror
                        </span>
                </div>

                <!-- Submit Button-->
                <div class="text-center my-3">
                    <button class="btn btn-primary btn-lg text-uppercase" id="submitButton" type="submit">
                        Envoyer votre message
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>