<?php

namespace App\Http\Controllers;

use App\Mail\DevisMail;
use App\Mail\MessageMail;
use App\Mail\SendMessageToEndUser;
use App\Models\Devis;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail; 
use App\Mail\ReplyDevis;
use App\Models\User;

class AdminController extends Controller
{
    public function index()
    {
        $deviss = Devis::orderBy('id', 'desc')->get();

        return view('admin.devis', compact('deviss'));
    }

    public function accueil(Request $request)
    {
        if ($request->session()->has('id')) {
            return redirect('messages');
        } else {
            return view('admin.connexion');
        }
    }

    public function connexion(Request $request)
    {
        //validate the input
        $request->validate([
            "email" => 'required|email',
            "password" => 'required', 
        ]);

        //$field = filter_var($request->input('email'), FILTER_VALIDATE_EMAIL) ? 'email' : 'username';

        $user = User::where('email', $request->email)->first();
        if ($user) {
            if ($request->password == $user->password) {
                $request->session()->put('id', $user->id); 
                $request->session()->put('name', $user->name); 
                return redirect('messages');
            } else {
                return back()->with('fail', "Le mot de passe que vous avez entré est incorrect. Veuillez vérifier que vous avez saisi le bon mot de passe.");
            }
        } else {
            return back()->with('fail', "Désolé, nous ne reconnaissons pas cet identifiant. Veuillez vérifier que vous avez saisi le bon identifiant. ");
        }
    }
    

    public function logout()
    {
        session()->flush();
        return redirect('/login');
    }

    public function devis_store(Request $request)
    {
        $devis = new Devis(); 
        $devis->nom = $request->nom; 
        $devis->email = $request->email;
        $devis->telephone = $request->telephone;
        $devis->societe = $request->societe;
        $devis->adresse = $request->adresse;
        $devis->type_service = $request->type_service;
        $devis->detail = $request->detail;
        $query = $devis->save();

        $name = $request->nom;
        $email = $request->email;
        $mess = $request->detail; 

        if ($query) { 

                $send_mail = "kassimdt2@gmail.com";
                Mail::to($send_mail)->queue(new DevisMail($name, $email, $mess));
                Mail::to($email)->queue(new ReplyDevis($name));
            return back()->with('success', 'Votre demande de devis a été enregistrer avec succès!');
        } else {
            /* toastr()->fail("Echec d'enregistrement de la demande !", 'Echec');   */
            return back()->with('fail', "Echec d'enregistrement de la demande ");
        }
    }

    public function message_store(Request $request)
    {
        $message = new Message();
        $message->nom = $request->nom; 
        $message->email = $request->email;
        $message->telephone = $request->telephone; 
        $message->detail = $request->detail;
        $query = $message->save();

        $name = $request->nom;
        $email = $request->email;
        $mess = $request->detail; 

        if ($query) { 

                $send_mail = "kassimdt2@gmail.com";
                Mail::to($send_mail)->queue(new MessageMail($name, $email, $mess));
                Mail::to($email)->queue(new SendMessageToEndUser($name));

           /*  toastr()->success('Votre demande de devis a été enregistrer avec succès!', 'succès');   */
            return back()->with('success', 'Votre message a été enregistrer avec succès!');
        } else {
            /* toastr()->fail("Echec d'enregistrement de la demande !", 'Echec');   */
            return back()->with('fail', "Echec d'enregistrement de votre message ");
        }
    }
}
