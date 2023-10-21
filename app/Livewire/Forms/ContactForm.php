<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Rule;
use Illuminate\Support\Facades\Mail;
use App\Mail\Contact;
use Livewire\Form;

class ContactForm extends Form
{
    #[Rule('required|min:3')]
    public $nombre = '';

    #[Rule('required|email')]
    public $correo = '';

    #[Rule('required')]
    public $mensaje = '';

    public function send(){
        logger($this->nombre);
        logger($this->correo);
        logger($this->mensaje);

        Mail::to('gomezmendezangel100@gmail.com')->send(new Contact($this->nombre, $this->correo, $this->mensaje));
    }
}
