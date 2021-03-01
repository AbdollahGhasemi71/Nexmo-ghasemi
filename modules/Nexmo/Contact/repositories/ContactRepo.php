<?php


namespace Nexmo\Contact\repositories;


use Nexmo\Contact\Models\Contact;

class ContactRepo
{

    public function contactIndex()
    {
        return Contact::all();
    }

    public function contactDelete($id)
    {
        $contact = Contact::findOrFail($id);
        $contact->delete();
    }

}
