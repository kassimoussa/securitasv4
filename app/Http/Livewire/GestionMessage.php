<?php

namespace App\Http\Livewire;

use App\Models\Message;
use Livewire\Component;
use Livewire\WithPagination;

class GestionMessage extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    
    public  $message_id;
    public $nom, $email, $telephone, $detail, $date_creation;

   /*  public function getMessages()
    {
        $this->messages = Message::orderBy('id', 'desc')->paginate(10); 
    } */


    public function close_modal()
    {
        $this->reset([
            'message_id',  'nom', 'email', 'telephone', 'detail', 'date_creation'
        ]);
    }
    public function loadid($message_id)
    {
        $this->message_id = $message_id;
        $message = Message::where('id', $message_id)->first();
        $this->nom =  $message->nom;
        $this->email =  $message->email;
        $this->telephone =  $message->telephone; 
        $this->detail =  $message->detail;
        $this->date_creation =  $message->created_at->format('d/m/Y');

    }
    public function delete()
    {
        $message = Message::find($this->message_id);  
        $message->delete(); 
        
        $this->dispatchBrowserEvent(
            'alert',
            ['type' => 'success',  'message' => 'Suppression éffectuée avec succès!']
        );
        
        $this->dispatchBrowserEvent('close-modal');

        
    }
    public function render()
    {
        // $this->getMessages();
        
        $messages = Message::orderBy('id', 'desc')->paginate(10); 
        return view('livewire.gestion-message', ['messages' => $messages]);
    }
}
