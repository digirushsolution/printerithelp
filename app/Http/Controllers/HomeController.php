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
    public function hpprinterpage()
    {
              return view('frontend.hp_printer');
    }
    
    public function epsonprinterpage()
    {
              return view('frontend.epson_printer');
    }
    public function brotherprinterpage()
    {
              return view('frontend.brother_printer');
    }
    public function canonprinterpage()
    {
              return view('frontend.canon_printer');
    }

    public function installationprinterpage()
    {
              return view('frontend.installation_printer');
    }
    public function privacypolicypage()
    {
              return view('frontend.privacy_policy');
    }
    public function refundpolicypage()
    {
              return view('frontend.refund_policy');
    }
    public function termspolicypage()
    {
              return view('frontend.terms_policy');
    }
}
