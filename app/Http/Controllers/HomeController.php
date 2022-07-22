<?php

namespace App\Http\Controllers;


use App\Mail\ContactFormMarkdown;
use App\Mail\SiteContactForm;
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
        $this->rules = $this->rules();
        // Check for empty fields
        $validator = Validator::make($request->all(), $this->rules);
        if ($validator->fails())
            return redirect()->back()->withErrors($validator);

        $to         = 'contact.form@silvereagleshipping.com';
        $name       = $request->name;
        $email      = $request->email;
        $phone      = $request->phone;
        $body       = $request->body;

        Mail::to($to)->send(new SiteContactForm($name, $email, $phone, $body));
        return redirect()->back()->with('success', "You'r Message Sent Successfully. ");

    }

    protected function rules()
    {
        $rules = [
            'name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|string',
            'body' => 'required|string',
            'g-recaptcha-response' => 'required|captcha'
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
