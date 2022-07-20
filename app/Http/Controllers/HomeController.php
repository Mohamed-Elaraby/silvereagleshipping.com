<?php

namespace App\Http\Controllers;

use App\Mail\ContactForm;
use http\Client\Curl\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


class HomeController extends Controller
{

    protected $rules;

    public function index()
    {
        return view('index');
    }

    public function overView()
    {
        return view('overView');
    }

    public function whatWeDo()
    {
        return view('whatWeDo');
    }

    public function contactUs()
    {
        return view('contactUs');
    }

    public function sendMail( Request $request)
    {
    Mail::to('mido.b333@gmail.com') ->send(new ContactForm());
        return redirect()->back()->with('success', "You'r Message Sent Successfully. ");
        $this->rules = $this->rules();
         // Check for empty fields
            $validator = Validator::make($request->all(), $this->rules);
            if ($validator -> fails()){
                return redirect()->back() ->withErrors($validator);
            }
        $name = strip_tags(htmlspecialchars($request->name));
        $email_address = strip_tags(htmlspecialchars($request->email));
        $phone = strip_tags(htmlspecialchars($request->phone));
        $message = strip_tags(htmlspecialchars($request->message));
        // Create the email and send the message
        $to = 'shippingsilvereagle@gmail.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
        $email_subject = "Website Contact Form:  $name";
        $email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email_address\n\nPhone: $phone\n\nMessage:\n$message";
        $headers = "From: contactForm@silvereagleshipping.com.\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
        $headers .= "Reply-To: $email_address";
        $mailSend = mail($to,$email_subject,$email_body,$headers);
        if ($mailSend){
            return redirect()->back()->with('success', "You'r Message Sent Successfully. ");
        }
    }

    protected function rules()
    {
        $rules = [
            'name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|string',
            'message' => 'required|string',
        ];
        return $rules;
    }


    public function provisionAdnBonded()
    {
        return view('subPages.provisionBonded');
    }

    public function technicalStores()
    {
        return view('subPages.technicalStores');
    }

    public function logisticServices()
    {
        return view('subPages.logisticServices');
    }
}
