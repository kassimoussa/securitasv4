<div>
    <x-loading-indicator />
    <div class="d-flex justify-content-between mb-3">
        <h2 class="over-title ">Administration</h2>

        <div class="btn-group" role="group" aria-label="Basic example">
            <button type="button" wire:click="focus('1')"
                class="btn @if ($sbtn == 1) btn-dark  @else btn-outline-dark @endif">Devis</button>
            <button type="button" wire:click="focus('2')"
                class="btn @if ($sbtn == 2) btn-dark  @else btn-outline-dark @endif">Messages</button>
        </div>

    </div>

    @if ($sbtn == 1)
        <livewire:gestion-devis />
    @elseif ($sbtn == 2)
        <livewire:gestion-message />
    @endif

</div>
