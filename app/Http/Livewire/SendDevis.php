<?php

namespace App\Http\Livewire;

use App\Mail\DevisMail;
use App\Mail\ReplyDevis;
use App\Models\Devis;
use Livewire\Component;
use Illuminate\Support\Facades\Mail;

class SendDevis extends Component
{
    public  $nom, $email, $telephone, $societe, $adresse, $type_service, $detail;

    public function messages()
    {
        return [
            'telephone.required' => 'Vous devez entrer un numéro de telephone.',
            'telephone.max' => 'Vous devez entrer un numéro de 8 chiffres ',
            'telephone.min' => 'Vous devez entrer un numéro de 8 chiffres ',
            'nom.required' => 'Vous devez entrer votre nom.',
            'email.required' => "Vous devez entrer votre email.",
            'email.email' => "Vous devez entrer un email valide.",
            'societe.required' => "Vous devez remplir ce champ.",
            'adresse.required' => "Vous devez entrer votre adresse.",
            'type_service.required' => "Vous devez selectionner un service.",
            'detail.required' => "Vous devez remplir ce champ.",
        ];
    }
    public function send()
    {
        $this->validate([
            'nom' => 'required',
            'email' => 'required|email',
            'telephone' => 'required',
            'societe' => 'required',
            'adresse' => 'required',
            'type_service' => 'required',
            'detail' => 'required',
        ]);

        $devis = new Devis();
        $devis->nom = $this->nom;
        $devis->email = $this->email;
        $devis->telephone = $this->telephone;
        $devis->societe = $this->societe;
        $devis->adresse = $this->adresse;
        $devis->type_service = $this->type_service;
        $devis->detail = $this->detail;
        $query = $devis->save();

        $name = $this->nom;
        $email = $this->email;
        $mess = $this->detail;


        if ($query) {

            $this->dispatchBrowserEvent('close-offcanvas');
            $this->dispatchBrowserEvent(
                'alert',
                ['type' => 'success',  'message' => 'Votre demande de devis a été enregistrer avec succès!']
            );
            $send_mail = "kassimdt2@gmail.com";
            Mail::to($send_mail)->queue(new DevisMail($name, $email, $mess));
            Mail::to($email)->queue(new ReplyDevis($name));
            $this->reset();
        } else {
            $this->dispatchBrowserEvent(
                'alert',
                ['type' => 'fail',  'message' => "Echec d'enregistrement de la demande"]
            );
        }
    }

    public function render()
    {
        return view('livewire.send-devis');
    }
}
