<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class HomeController extends Controller
{
    public function aboutpage()
    {
        return view('frontend.about');
    }

    public function homepage()
    {
        return view('frontend.home');
    }
    
    public function servicepage()
    {
        return view('frontend.service');
    }

    public function admindashboard()
    {
        $totalContacts = Contact::count();
        return view('admin.dashboard', compact('totalContacts'));
    }

    public function contactindex()
    {
        $contacts = Contact::where('form_type', 'contact_form')->get();
        return view('admin.contact.index',compact('contacts'));
    }

    public function homeindex()
    {
        $contacts = Contact::where('form_type', 'home_form')->get();
        return view('admin.home.index',compact('contacts'));
    }

    public function settingpage()
    {
        $contacts = Contact::where('form_type', 'home_form')->get();
        return view('admin.settings.index');
    }

    public function destroy($id)
    {
        $contact = Contact::findOrFail($id);
        $contact->delete();

        return redirect()->back()->with('success', 'Contact deleted successfully.');
    }

    public function file_upload(Request $request)
    {
        if($request->hasFile('upload')){

            $originalName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originalName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();

            $fileName = $fileName.'_'.time().'.'.$extension;
            
            $request->file('upload')->move(public_path('blog_image'), $fileName);
            $url = asset('blog_image/'.$fileName);

            return response()->json(['fileName' => $fileName, 'uploaded' => 1, 'url' => $url]);


        }

    }
    
    

}
