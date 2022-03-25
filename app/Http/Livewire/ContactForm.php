<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Mail\ContactFormMailable;
use Illuminate\Support\Facades\Mail;

class ContactForm extends Component
{

    public $name;
    public $email;
    public $contactMessage;
    public $success_message;

    protected $rules = [
        'name' => 'required|min:6',
        'email' => 'required|email',
        'contactMessage' => 'required',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function submitForm()
    {
        $this->validate();

        $contact['name'] = $this->name;
        $contact['email'] = $this->email;
        $contact['contactMessage'] = $this->contactMessage;

        Mail::to('tmc@mail.com')->send(new ContactFormMailable($contact));

        $this->resetForm();

        sleep(1);

        $this->success_message = 'We received your message successfully and will get back to you shortly!';
    }

    private function resetForm()
    {
        $this->name = '';
        $this->email = '';
        $this->contactMessage = '';
    }

    public function render()
    {
        return view('livewire.contact-form');
    }
}
