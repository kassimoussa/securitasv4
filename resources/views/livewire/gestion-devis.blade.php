<div class=" mb-3">

    <h3>Gestion de devis</h3>

    <div class="">
        <table class="table table-bordered table-striped hover table-sm align-middle   ">
            <thead class="table-dark text-white text-center  align-middle">
                <th>N° devis</th>
                <th>Nom </th>
                <th>Société</th>
                <th>Service</th>
                <th>Date</th>
                <th>Action</th>
            </thead>
            <tbody class=" text-center">
                @if ($deviss->isNotEmpty())
                    @php
                        $cnt = 1;
                    @endphp

                    @foreach ($deviss as $key => $devis)
                        <tr>
                            <td>{{ $devis->id }}</td>
                            <td>{{ $devis->nom }}</td>
                            <td>{{ $devis->societe }}</td>
                            <td>{{ $devis->type_service }}</td>
                            <td>{{ $devis->created_at->format('d/m/Y') }}</td>
                            <td class="td-actions ">
                                <div class="dropdown dropstart">
                                    <button type="button" class="btn btn-icon dropdown-toggle" data-bs-toggle="dropdown"
                                        aria-expanded="false" id="dropdownMenu2">
                                        <span class="badge rounded-pill bg-primary"><i
                                                class="fas fa-ellipsis-h"></i></span>
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenu2">

                                        <button wire:click="loadid({{ $devis->id }})" type="button"
                                            class="btn btn-link dropdown-item" data-bs-toggle="modal"
                                            data-bs-target="#showDevis">
                                            <i class="fas fa-eye" data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                title="Voir le devis "></i> Voir le devis
                                        </button>
                                        <button type="button" class="btn btn-link dropdown-item" data-bs-toggle="modal"
                                            data-bs-target="#delDevis" wire:click="loadid({{ $devis->id }})">
                                            <i class="fas fa-trash-alt" data-bs-toggle="tooltip"
                                                data-bs-placement="bottom" title="Supprimer le devis "></i>
                                            Supprimer la devis
                                        </button>
                                        {{-- <button class="btn btn-link dropdown-item" wire:click="test_alert">
                                            <i class="fas fa-house" data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                title="Supprimer le devis "></i>test
                                        </button> --}}

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
                        <td colspan="10">Aucun devis trouvé.</td>
                    </tr>
                @endif
            </tbody>
        </table>
        <div class="d-flex justify-content-center">
            {{ $deviss->links() }}
        </div>

        <div class="modal fade" id="showDevis" tabindex="-1" aria-labelledby="showDevisLabel" aria-hidden="true"
            wire:ignore.self>
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header bg-dark text-white d-flex ">
                        <div class="col-6 text-start">
                            <h3 class="fw-bold">Demande de devis du {{ $nom }}</h3>
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
                        <div class="mb-1">
                            <label for="nom" class="col-form-label">Nom:</label>
                            <input type="text" class="form-control" disabled id="nom" wire:model="nom">
                        </div>
                        <div class="mb-1">
                            <label for="email" class="col-form-label">Email:</label>
                            <input type="text" class="form-control" disabled id="email"
                                value="{{ $email }}">
                        </div>
                        <div class="mb-1">
                            <label for="telephone" class="col-form-label">Telephone:</label>
                            <input type="text" class="form-control" disabled id="telephone"
                                value="{{ $telephone }}">
                        </div>
                        <div class="mb-1">
                            <label for="societe" class="col-form-label">Société:</label>
                            <input type="text" class="form-control" disabled id="societe"
                                value="{{ $societe }}">
                        </div>
                        <div class="mb-1">
                            <label for="adresse" class="col-form-label">Adresse:</label>
                            <input type="text" class="form-control" disabled id="adresse"
                                value="{{ $adresse }}">
                        </div>
                        <div class="mb-1">
                            <label for="type_service" class="col-form-label">Service:</label>
                            <input type="text" class="form-control" disabled id="type_service"
                                value="{{ $type_service }}">
                        </div>
                        <div class="mb-1">
                            <label for="message-text" class="col-form-label">Detail:</label>
                            <textarea class="form-control" disabled id="message-text"> {{ $detail }}</textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="modal fade" id="delDevis" tabindex="-1" aria-labelledby="deleteDevisModal" aria-hidden="true"
            wire:ignore.self>
            <div class="modal-dialog   modal-dialog-centered  " role="document">
                <div class="modal-content">
                    <div class="modal-header d-flex justify-content-center">
                        <h4>Confirmer Suppression </h4>
                    </div>
                    <div class="modal-body ">
                        <h5 class="text-center"><i class="fas fa-exclamation-circle fa-3x warning"></i>
                        </h5>
                        <h5 class="text-center">Etes-vous sûre de supprimer le devis</h5>
                    </div>
                    <div class="modal-footer d-flex justify-content-center">

                        <button class="btn btn-primary fw-bold" wire:click="delete"
                            data-bs-dismiss="modal">Supprimer</button>
                        <button type="reset" class="btn btn-outline-danger  fw-bold"
                            data-bs-dismiss="modal">Annuler</button>
                    </div>
                </div>
            </div>
        </div>
        {{-- 
        @if (Session::get('success'))
            <script>
                toastr.success(Session::get('success'))
            </script>
        @endif --}}




    </div>

</div>
