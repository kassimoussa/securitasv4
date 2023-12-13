<?php

namespace App\Http\Livewire;

use App\Models\Devis;
use Livewire\Component;
use Livewire\WithPagination;

class GestionDevis extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $row, $devis_id;
    public $nom, $email, $telephone, $societe, $adresse, $type_service, $detail, $date_creation;

    /* public function getDevis()
    {
        $this->deviss = Devis::orderBy('id', 'desc')->paginate(10); 
    } */

    public function close_modal()
    {
        $this->reset([
            'devis_id', 'nom', 'email', 'telephone', 'societe', 'adresse', 'type_service', 'detail', 'date_creation'
        ]);
    }
    public function loadid($devis_id)
    {
        $this->devis_id = $devis_id;
        $devis = Devis::find($devis_id); 
        $this->nom =  $devis->nom;
        $this->email =  $devis->email;
        $this->telephone =  $devis->telephone;
        $this->societe =  $devis->societe;
        $this->adresse =  $devis->adresse;
        $this->type_service =  $devis->type_service;
        $this->detail =  $devis->detail;
        $this->date_creation =  $devis->created_at->format('d/m/Y');
        return view('index');

    }

    public function delete()
    {
        $devis = Devis::find($this->devis_id);  
        $devis->delete(); 

        $this->dispatchBrowserEvent(
            'alert',
            ['type' => 'success',  'message' => 'Suppression éffectuée avec succès!']
        );
        $this->dispatchBrowserEvent('close-modal');

        
    }

    public function test_alert()
    {
        $this->dispatchBrowserEvent(
            'alert',
            ['type' => 'success',  'message' => 'Suppression éffectuée avec succès!']
        );
       // return Redirect::back();
        //$this->dispatch( 'flash' );  
        /* $this->dispatch(
            'alert',
            ['type' => 'success',  'message' => 'Suppression éffectuée avec succès!']
        );  */
        //toastr()->addSuccess('Your information has been saved and a confirmation email has been sent.');
    }
    public function render()
    {
       /*  $this->getDevis(); */
        $deviss = Devis::orderBy('id', 'desc')->paginate(10);
        return view('livewire.gestion-devis', ['deviss' => $deviss]);
    }
}
