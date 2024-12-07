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
        
        $form_type = $request->form_type;

        //submission of home forms
        if ($form_type == "home_form") {

            $validatedData = $request->validate([
            'firstname' => 'required',
            'email' => 'required', 
            'contact' => 'required',
            'address' => 'required',
            'city' => 'required',
            'country' => 'required',
            'service' => 'required',
            'subservice' => 'required',
        ], [
            'email.unique' => 'Email already exists', 
        ]);
        // Save the contact form data
        Contact::create([
            'first_name' => $request->firstname,
            // 'last_name' => $request->lastName,
            'email' => $request->email,
            'address' => $request->address,
            'contact' => $request->contact,
            'city' => $request->city,
            'service' => $request->service,
            'sub_service' => $request->subservice,
            'model_number' => $request->model,
            'form_type' => $request->form_type,
        ]);
    
        
        try {
            $mail = new PHPMailer(true);
    
            
            $mail->isSMTP();
            $mail->Host = 'printerithelp.com';  
            $mail->SMTPAuth = true;
            $mail->Username = 'contact@printerithelp.com';  
            $mail->Password = 'Printer@2024#@';  
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587;  
    
            $mail->setFrom('contact@printerithelp.com');
            // $mail->addAddress('contact@printerithelp.com'); 
            $mail->addAddress('anudeol054@gmail.com'); 
           
            $mail->Subject = 'New Contact Form Submission';
            $mail->Body = 'You have a new contact form submission from: ' . "\n\n" .
                          'Name: ' . $request->firstname . "\n" .
                          'Email: ' . $request->email . "\n" .
                          'Address: ' . $request->address . "\n" .
                          'Contact: ' . $request->contact . "\n" .
                          'City: ' . $request->city . "\n" .
                          'Service: ' . $request->service . "\n" .
                          'Sub-Service: ' . $request->subservice . "\n" .
                          'Model Number: ' . $request->model . "\n" .
                          'Form Type: ' . $request->form_type;
    
           
            $mail->send();
        } catch (Exception $e) {
            return back()->with('error', 'There was an error sending your email. Please try again.');
        }

        }
        //submission of contact form
        elseif ($form_type == "contact_form") {
            
            $validatedData = $request->validate([
            'firstname' => 'required',
            'lastname' => 'required', 
            'email' => 'required',
            'address' => 'required',
            'contact' => 'required',
            'city' => 'required'
        ], [
            'email.unique' => 'Email already exists', 
        ]);
        // Save the contact form data
        Contact::create([
            'first_name' => $request->firstname,
            'last_name' => $request->lastname,
            'email' => $request->email,
            'address' => $request->address,
            'contact' => $request->contact,
            'city' => $request->city,
            'form_type' => $request->form_type,
        ]);
    
        
        try {
            $mail = new PHPMailer(true);
    
            
            $mail->isSMTP();
            $mail->Host = 'printerithelp.com';  
            $mail->SMTPAuth = true;
            $mail->Username = 'contact@printerithelp.com';  
            $mail->Password = 'Printer@2024#@';  
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587;  
    
            $mail->setFrom('contact@printerithelp.com');
            // $mail->addAddress('contact@printerithelp.com'); 
            $mail->addAddress('anudeol054@gmail.com'); 
           
            $mail->Subject = 'New Contact Form Submission';
            $mail->Body = 'You have a new contact form submission from: ' . "\n\n" .
                          'Name: ' . $request->firstname ." ". $request->lastname. "\n" .
                          'Email: ' . $request->email . "\n" .
                          'Address: ' . $request->address . "\n" .
                          'Contact: ' . $request->contact . "\n" .
                          'City: ' . $request->city . "\n" .
                          'Form Type: ' . $request->form_type;
    
           
            $mail->send();
        } catch (Exception $e) {
            return back()->with('error', 'There was an error sending your email. Please try again.');
        }

        }else{
            return back()->with('error', 'There was an error in processing the form and sending your email. Please try again.');
        }
        
    
        
        return back()->with('success', 'Thank you for your enquiry!');
    }
    
}
