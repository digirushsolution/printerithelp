<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class ContactController extends Controller
{
    public function contactpage()
    {
        return view('frontend.contact');
    }

    public function submitContactForm(Request $request)
    {
        $validatedData = $request->validate([
            'firstName' => 'required|string|max:50',
            'lastName' => 'required|string|max:50',
            'email' => 'required|email|unique:contacts,email', 
            'address' => 'required|string|max:255',
            'contact' => 'required|digits_between:9,10',
            'city' => 'required|string|max:50',
        ], [
            'email.unique' => 'Email already exists', 
        ]);
    
        Contact::create([
            'first_name' => $request->firstName,
            'last_name' => $request->lastName,
            'email' => $request->email,
            'address' => $request->address,
            'contact' => $request->contact,
            'city' => $request->city,
            'form_type' => $request->form_type,
        ]);

        try {
            $mail = new PHPMailer(true);
    
            $mail->isSMTP();
            $mail->Host = 'sandbox.smtp.mailtrap.io';  
            $mail->SMTPAuth = true;
            $mail->Username = '93fe1d93fdf801';  
            $mail->Password = 'cdb748a71d2301';  
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 2525;
    
            $mail->setFrom('no-reply@example.com', 'Your Website');
            $mail->addAddress('admin@example.com');  
            $mail->Subject = 'New Contact Form Submission';
            $mail->Body    = 'You have a new contact form submission from: ' . "\n\n" .
                             'Name: ' . $request->firstName . ' ' . $request->lastName . "\n" .
                             'Email: ' . $request->email . "\n" .
                             'Address: ' . $request->address . "\n" .
                             'Contact: ' . $request->contact . "\n" .
                             'City: ' . $request->city;
    
            $mail->send();
        } catch (Exception $e) {
            return back()->with('error', 'There was an error sending your email. Please try again.');
        }
        return back()->with('success', 'Thank you for your enquiry!');
    }
}
