<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    private $depts = [];

    public function __construct()
    {
        $this->depts = [
            1 => ['name' => 'Amministrazione', 'email' => 'amministrazione@exameple.com'],
            2 => ['name' => 'Marketing', 'email' => 'marketing@exameple.com'],
        ];
    }

    public function form()
    {
        return view('pages.contacts', [
            'title' => 'Contatti',
            'description' => "Per informazioni sul nostro blog, contattaci utilizzando il form in questa pagina.",
        ]);
    }

    public function receive(Request $request)
    {
        

        $mail = new \App\Mail\Contact(
            $request->name,
            $request->email,
            $request->message,
            new \Illuminate\Mail\Mailables\Address('jeffrey@example.com', 'Jeffrey Way'),
        );


        if(! array_key_exists($request->dept, $this->depts)) {
            abort(404);
        }

        $to = $this->depts[$request->dept]['email'];

        \Illuminate\Support\Facades\Mail::to($to)->send($mail);

        return redirect()->back()->with(['success' => 'Richiesta inviata correttamente']);
        
    }
}




