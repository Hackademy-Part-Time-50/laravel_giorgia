<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contacts()
    {
        
        return view('pages.contacts', [
            'title' => 'Contatti',
            'description' => "Per informazioni sul nostro blog,\n contattaci utilizzando il form in questa pagina.<script>a</script>",
        ]);
    }
}
