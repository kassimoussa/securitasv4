<?php

namespace App\Http\Livewire;

use App\Mail\MessageMail;
use App\Mail\SendMessageToEndUser;
use App\Models\Message;
use Livewire\Component;
use Illuminate\Support\Facades\Mail;

class SendMessage extends Component
{
    public  $nom, $email, $telephone, $detail;
    public function messages()
    {
        return [
            'telephone.required' => 'Vous devez entrer un numéro de telephone.',  
            'nom.required' => 'Vous devez entrer votre nom.',
            'email.required' => "Vous devez entrer votre email.",
            'email.email' => "Vous devez entrer un email valide.", 
            'detail.required' => "Vous devez remplir ce champ.", 
        ];
    }
    public function send()
    {
        $this->validate([
            'nom' => 'required',
            'email' => 'required|email',
            'telephone' => 'required', 
            'detail' => 'required', 
        ]);

        $mess = new Message();
        $mess->nom = $this->nom;
        $mess->email = $this->email;
        $mess->telephone = $this->telephone; 
        $mess->detail = $this->detail;
        $query = $mess->save();

        $name = $this->nom;
        $email = $this->email;
        $mess = $this->detail;

        if ($query) {
            $this->dispatchBrowserEvent( 'close-offcanvas'); 
            $this->dispatchBrowserEvent(
                'alert',
                ['type' => 'success',  'message' => 'Votre message a été enregistrer avec succès!']
            ); 
            $this->reset();
            $send_mail = "kassimdt2@gmail.com";
            Mail::to($send_mail)->queue(new MessageMail($name, $email, $mess));
            Mail::to($email)->queue(new SendMessageToEndUser($name));
        } else { 
            $this->dispatchBrowserEvent(
                'alert',
                ['type' => 'fail',  'message' => "Echec d'enregistrement de votre message "]
            );  
        }
    }
    public function render()
    {
        return view('livewire.send-message');
    }
}
