<?php

namespace App\Http\Controllers;

use App\Models\ContactModel;
use Illuminate\Http\Request;

class ContactsController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function getAllContacts()
    {
        $allContacts = ContactModel::all();
        return view('allContacts', compact('allContacts'));

    }

    public function sendContact(Request $request) {
        $request->validate([
            "email" => "required|string",
            "subject" => "required|string|max:4",
            "message" => "required|string",
        ]);

        ContactModel::create([
            "email" => $request->get("email"),
            "subject" => $request->get("subject"),
            "message" => $request->get("message"),
        ]);

    }
}
