@extends('layouts.app')

@section('title', 'Contact Us')
@section('content')
    <div class="contactUsPage">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="contact-info">
                        <div>
                            <table class="">
                                <tr>
                                    <td style="width: 180px; height: 80px">Genral Inquiry</td>
                                    <td>: info@silvereagleshipping.com </td>
                                </tr>

                                <tr>
                                    <td class="borderd" style="width: 180px; height: 80px">Genral Manager</td>
                                    <td class="borderd">: osama.elsayed@silvereagleshipping.com</td>
                                </tr>
                                <tr>
                                    <td style="width: 180px; height: 80px">Phone</td>
                                    <td class="">: +201229193406</td>
                                </tr>
                                <tr>
                                    <td class="borderd"></td>
                                    <td class="borderd" style="padding-top: 15px">: +201117307301</td>
                                </tr>
                                <tr>
                                    <td style="width: 180px; height: 80px">Address</td>
                                    <td>: Silver Eagle Marine Services
                                        18th Safeya Zaghloul &, El-Gish St, Al Yasaie tower 4th Floor,
                                        Port said,
                                        Egypt
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
{{--                <div class="col-lg-6 col-md-12 col-sm-12">--}}
{{--                    <p class="text-center">Want to get in touch? Fill out the form below to send me a message and I will get back to you as soon as possible!</p>--}}
{{--                    <!-- Contact Form - Enter your email address on line 19 of the mail/contact_me.php file to make this form work. -->--}}
{{--                    <!-- WARNING: Some web hosts do not allow emails to be sent through forms to common mail hosts like Gmail or Yahoo. It's recommended that you use a private domain email address! -->--}}
{{--                    <!-- To use the contact form, your site must be on a live web host with PHP! The form will not work locally! -->--}}
{{--                    <div id="Show Messages">--}}
{{--                        @if(session('success'))--}}
{{--                            <div class="alert alert-success text-center" role="alert">--}}
{{--                                {{ session('success') }}--}}
{{--                            </div>--}}
{{--                        @endif--}}
{{--                    </div>--}}
{{--                    <form name="sentMessage" id="contactForm" action="{{ route('sendMail') }}" method="post">--}}
{{--                        @csrf--}}
{{--                        <div class="control-group">--}}
{{--                            <div class="form-group floating-label-form-group controls">--}}
{{--                                <label>Name</label>--}}
{{--                                <input name="name" value="{{ old('name') }}" type="text" class="form-control" placeholder="Name" id="name">--}}
{{--                                @if ($errors->has('name'))--}}
{{--                                    <div class="text-danger" role="alert">{{ $errors->first('name') }}</div>--}}
{{--                                @endif--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="control-group">--}}
{{--                            <div class="form-group floating-label-form-group controls">--}}
{{--                                <label>Email Address</label>--}}
{{--                                <input name="email" value="{{ old('email') }}" type="email" class="form-control" placeholder="Email Address" id="email">--}}
{{--                                @if ($errors->has('email'))--}}
{{--                                    <div class="text-danger" role="alert">{{ $errors->first('email') }}</div>--}}
{{--                                @endif--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="control-group">--}}
{{--                            <div class="form-group col-xs-12 floating-label-form-group controls">--}}
{{--                                <label>Phone Number</label>--}}
{{--                                <input name="phone" value="{{ old('phone') }}" type="tel" class="form-control" placeholder="Phone Number" id="phone">--}}
{{--                                @if ($errors->has('phone'))--}}
{{--                                    <div class="text-danger" role="alert">{{ $errors->first('phone') }}</div>--}}
{{--                                @endif--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="control-group">--}}
{{--                            <div class="form-group floating-label-form-group controls">--}}
{{--                                <label>Message</label>--}}
{{--                                <textarea name="body" value="{{ old('body') }}" rows="5" class="form-control" placeholder="Message" id="body"></textarea>--}}
{{--                                @if ($errors->has('body'))--}}
{{--                                    <div class="text-danger" role="alert">{{ $errors->first('body') }}</div>--}}
{{--                                @endif--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <br>--}}
{{--                        @if ($errors->has('g-recaptcha-response'))--}}
{{--                            <span class="help-block" style="color: red">--}}
{{--                                <strong>{{ $errors->first('g-recaptcha-response') }}</strong>--}}
{{--                            </span>--}}
{{--                        @endif--}}
{{--                        <div class="form-group">--}}
{{--                            {!! NoCaptcha::renderJs() !!}--}}
{{--                            {!! NoCaptcha::display() !!}--}}
{{--                        </div>--}}
{{--                        <br>--}}
{{--                        <div class="form-group">--}}
{{--                            <button type="submit" class="btn btn-primary" id="sendMessageButton">Send</button>--}}
{{--                        </div>--}}
{{--                    </form>--}}
{{--                </div>--}}
            </div>
        </div>
    </div>

@endsection
@push('js')
    <script type="text/javascript">
        var onloadCallback = function() {
            alert("grecaptcha is ready!");
        };
    </script>
@endpush
