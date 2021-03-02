<?php


namespace Nexmo\ContactBack\repositories;


use Nexmo\ContactBack\Models\ContactBack;

class ContactBackRepo
{
    public function contactBackIndex()
    {
        return ContactBack::all();
    }

    public function contactbackStore($value)
    {
        ContactBack::create([
            'title' => $value->title,
            'body' => $value->body,
            'location' => $value->location,
            'call' => $value->call,
            'email' => $value->email
        ]);
    }

    public function contactbackEdit($id)
    {
       return ContactBack::findOrFail($id);
    }

    public function contactbackUpdate($value,$id)
    {
        $contact = ContactBack::findOrFail($id);
        $contact->update([
            'title' => $value->title,
            'call' => $value->call,
            'location' => $value->location,
            'email' => $value->email,
            'body' => $value->body
        ]);
    }

    public function contactbackDelete($id)
    {
        $contact = ContactBack::findOrFail($id);
        $contact->delete();
    }

}
