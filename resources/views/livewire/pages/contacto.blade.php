<?php

use App\Livewire\Forms\ContactForm;
use function Livewire\Volt\{state, layout, title, form};

title('Contacto');
form(ContactForm::class);
layout('layouts.guest');

$save = function(){
    $this->validate();
    $this->form->send();
};
//
?>
<div>
    <h1 align="center">Contactanos</h1>

    <section>
        <form wire:submit.prevent='save'>

            <label for="nombre">Nombre:</label>
            <input id="nombre" type="text" wire:model='form.nombre'>
            @error('form.nombre')
                {{$message}}
            @enderror

            <label for="correo">Correo:</label>
            <input id="correo" type="email" wire:model='form.correo'>
            @error('form.correo')
                {{$message}}
            @enderror

            <label for="mensaje">Mensaje:</label>
            <textarea name="mensaje" id="mensaje" cols="30" rows="10" wire:model='form.mensaje'></textarea>
            @error('form.mensaje')
                {{$message}}
            @enderror
            <button type="submit">Enviar</button>
        </form>
    </section>
</div>


