<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
      /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    
    function __construct()
    {
         $this->middleware('permission:contact-list|contact-delete', ['only' => ['index','show']]);
         $this->middleware('permission:contact-delete', ['only' => ['destroy']]);
    }

    
    public function index()
    {
        $data = Contact::latest()->get();
        return view('admin.crud.contacts.index', compact('data'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
  

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {
        return view('admin.crud.contacts.show', compact('contact'));
    }
 

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $contact)
    {
        $contact->delete();
 
        return redirect()->route('contacts.index')
            ->with('success', 'تم الحذف');
    }

}
