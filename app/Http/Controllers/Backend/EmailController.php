<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Email;
use App\Http\Requests\EmailRequest;

class EmailController extends Controller
{
    public function EmailIndex(){
    	$emails=Email::paginate(10);
    	$count=Email::all()->count();
    	return view('backend.email.email')->with('emails',$emails)->with('count',$count);
    }

    public function EmailAddPost(EmailRequest $request){
    	$date=date('Y-m-d');
    	$email=new Email;

    	$email->name_email=$request->nombre;
    	$email->phone_email=$request->telefono;
    	$email->address_email=$request->ciudad;
    	$email->email_email=$request->email;
    	$email->data_email=$date;
    	$email->content_email=$request->contenido;
        $email->renta_email=$request->renta;
    	$email->banmedica_email=$request->banmedica;
    	$email->colmena_email=$request->colmena;
    	$email->consalud_email=$request->consalud;
    	$email->cruzblanca_email=$request->cruzblanca;
    	$email->vidatres_email=$request->vidatres;
    	$email->masvida_email=$request->masvida;
    	$email->save();

    	session()->flash('messaje',[
           'alert'=>'success',
            'text'=>'Se ha enviado correctamente su información'
        ]);
    	return redirect()->route('index');
    }
}
