<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Newsletter;
use Mail;

class HomeController extends Controller
{
    public function index ()
    {
        return view('home');
    }
    public function contact_submit (Request $request)
    {
        // dd($request->all());
        $this->validate($request, [
            'first_name' => 'required',
            'email' => 'required|email',
            // 'contact' => 'required',
            // 'message' => 'required',
            'g-recaptcha-response' => 'required|recaptchav3:register,0.5'
        ]);

        $contact = new Contact();
        $contact->first_name = $request->first_name;
        $contact->last_name = $request->last_name;
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->message = $request->message;
        $saved = $contact->save();

        
        if ($saved) {
            \Mail::send('emails.contact', array(
                'data' => $contact,
            ), function($message) use ($request) {
                $message->from($request->email)
                ->to('nomanakram2590@gmail.com')
                ->subject('Bedouin Contact Enquiry')
                ->setContentType('text/html');
            });
            return redirect()->to('/#contact')->with('success', 'Successfully submitted!');
        }
        else {
            return redirect()->to('/#contact')->with('error', 'Failed to submit!');
        }
    }

    public function newsletter (Request $request)
    {
        $this->validate($request, [
            'g-recaptcha-response' => 'required|recaptchav3:register,0.5'
        ]);
        $email = $request->email_address; 
        if (Newsletter::where('email', $email)->count() > 0) {
            return redirect()->to('/#newsletter')->with('nl_error', 'Already subscribed!');
            exit();
        }

        $newsletter = new Newsletter();
        $newsletter->email = $email;
        $saved = $newsletter->save();

        
        if ($saved) {
            \Mail::send('emails.userNewletter', array(
                'data' => $newsletter,
            ), function($message) use ($request) {
                $message->from('nomi.rencho.xp@gmail.com')
                ->to($email)
                ->subject('Bedouin Newsletter')
                ->setContentType('text/html');
            });

            \Mail::send('emails.adminNewletter', array(
                'data' => $newsletter,
            ), function($message) use ($request) {
                $message->from('nomi.rencho.xp@gmail.com')
                ->to('nomanakram2590@gmail.com')
                ->subject('Bedouin Newsletter')
                ->setContentType('text/html');
            });

            return redirect()->to('/#newsletter')->with('nl_success', 'Successfully submitted!');
        }
        else {
            return redirect()->to('/#newsletter')->with('nl_error', 'Failed to submit!');
        }
    }
}
