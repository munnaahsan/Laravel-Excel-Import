<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class ContactController extends Controller
{
    public function getcontacts() {
        $contact = Contact::all();
        dd($contact);
    }
}
