<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Emails;
class EmailsController extends Controller
{
    public function create()
    {
        $emails = Emails::all();
        return view('email', compact('emails'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'email'=>'required',
            'name'=>'required',
          ]);
          $email = new Emails([
            'email' => $request->get('email'),
            'name' => $request->get('name'),
          ]);
          $email->save();
          return redirect('/')->with('success', 'Stock has been added');
    }
}
