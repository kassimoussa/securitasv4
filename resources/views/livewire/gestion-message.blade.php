<div class=" mb-3">

    <h3>Gestion de messages</h3>

    <div class="">
        <table class="table table-bordered table-striped hover table-sm align-middle newmessage ">
            <thead class="table-dark text-white text-center  align-middle">
                <th>N° message</th>
                <th>Nom </th>
                <th>email</th>
                <th>Telephone</th>
                <th>Date</th>
                <th>Action</th>
            </thead>
            <tbody class=" text-center">
                @if ($messages->isNotEmpty())
                    @php
                        $cnt = 1; 
                    @endphp

                    @foreach ($messages as $key => $message)
                        <tr>
                            <td>{{ $message->id }}</td>
                            <td>{{ $message->nom }}</td>
                            <td>{{ $message->email }}</td>
                            <td>{{ $message->telephone }}</td>
                            <td>{{ $message->created_at->format('d/m/Y') }}</td>
                            <td class="td-actions ">
                                <div class="dropdown dropstart">
                                    <button type="button" class="btn btn-icon dropdown-toggle" data-bs-toggle="dropdown"
                                        aria-expanded="false" id="dropdownMenu2">
                                        <span class="badge rounded-pill bg-primary"><i
                                                class="fas fa-ellipsis-h"></i></span>
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenu2">

                                        <button type="button" class="btn btn-link dropdown-item" data-bs-toggle="modal"
                                            data-bs-target="#showMessage" wire:click="loadid('{{ $message->id }}')">
                                            <i class="fas fa-eye" data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                title="Voir le message "></i> Voir le message
                                        </button>

                                        <button type="button" class="btn btn-link dropdown-item" data-bs-toggle="modal"
                                            data-bs-target="#delMessage" wire:click="loadid({{ $message->id }})">
                                            <i class="fas fa-trash-alt" data-bs-toggle="tooltip"
                                                data-bs-placement="bottom" title="Supprimer le message "></i>
                                            Supprimer le message
                                        </button>

                                    </div>
                                </div>
                            </td>
                        </tr>



                        @php
                            $cnt = $cnt + 1; 
                        @endphp
                    @endforeach
                @else
                    <tr>
                        <td colspan="10">Aucun message trouvé.</td>
                    </tr>
                @endif
            </tbody>
        </table>
        <div class="d-flex justify-content-center">
            {{ $messages->links() }}
        </div>


        <div class="modal fade" id="showMessage" tabindex="-1" aria-labelledby="showMessageLabel" aria-hidden="true"  wire:ignore.self>
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header bg-dark text-white d-flex ">
                        <div class="col-6 text-start">
                            <h3 class="fw-bold">Message de {{ $nom }}</h3>
                        </div>

                        <div class="col-6 text-end pe-3">
                            <div class="row">
                                <div class="">
                                    <button type="reset" wire.click="close_modal"
                                        class="btn btn-danger square fw-bold" data-bs-dismiss="modal">Fermer</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="nom" class="col-form-label">Nom:</label>
                            <input type="text" class="form-control" disabled id="nom"
                                value="{{ $nom }}">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="col-form-label">Email:</label>
                            <input type="text" class="form-control" disabled id="email"
                                value="{{ $email }}">
                        </div>
                        <div class="mb-3">
                            <label for="telephone" class="col-form-label">Telephone:</label>
                            <input type="text" class="form-control" disabled id="telephone"
                                value="{{ $telephone }}">
                        </div>
                        <div class="mb-3">
                            <label for="message-text" class="col-form-label">Message:</label>
                            <textarea class="form-control" disabled id="message-text"> {{ $detail }}</textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Send message</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="delMessage" tabindex="-1"
            aria-labelledby="deleteMessageModal" aria-hidden="true" wire:ignore.self>
            <div class="modal-dialog   modal-dialog-centered  " role="document">
                <div class="modal-content">
                    <div class="modal-header d-flex justify-content-center">
                        <h4>Confirmer Suppression </h4>
                    </div>
                    <div class="modal-body ">
                        <h5 class="text-center"><i class="fas fa-exclamation-circle fa-3x warning"></i>
                        </h5>
                        <h5 class="text-center">Etes-vous sûre de supprimer le message</h5>
                    </div>
                    <div class="modal-footer d-flex justify-content-center">

                        <button class="btn btn-primary fw-bold" wire:click="delete" data-bs-dismiss="modal">Supprimer</button>
                        <button type="reset" class="btn btn-outline-danger  fw-bold"
                            data-bs-dismiss="modal">Annuler</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
