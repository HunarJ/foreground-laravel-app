<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact()
      {
          return view('pages/contact');
      }

    public function index()
    {
  
          
          $contacts = Contact::all();
          return view('admin.pages.contacts.index', ['contacts' => $contacts]);
    }

    //Save service
    public function saveContact(Request $request)
    {
        //Validate
        $request->validate([
           'name' => 'required',
           'surname' => 'required',
           'contact_message' => 'required'

        ]);

        //Store data
        $contact = new Contact();
        $contact->name = $request->name;
        $contact->surname = $request->surname;
        $contact->contact_message = $request->contact_message;
        $contact->save();

        //Return response to FE
        return back()->with('success', 'Zpráva odeslána');
    }

    public function deleteContact($id)
    {
        Contact::findOrFail($id)->delete();
        return back()->with('success', 'Služba smazána');
    }
}
