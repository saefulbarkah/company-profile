@extends('layouts.master')

@section('title', 'Hubungi kami')
@section('content')

<div class="contact-container section-container section-container-gray">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 contact section-description wow fadeIn">
                <h2>Contact us</h2>
                <div class="divider-1 wow fadeInUp"><span></span></div>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 contact-form wow fadeInLeft">
                <form role="form" action="assets/contact.php" method="post">
                    <div class="form-group">
                        <label class="sr-only" for="contact-email">Email</label>
                        <input type="text" name="email" placeholder="Email..." class="contact-email" id="contact-email">
                    </div>
                    <div class="form-group">
                        <label class="sr-only" for="contact-subject">Subject</label>
                        <input type="text" name="subject" placeholder="Subject..." class="contact-subject" id="contact-subject">
                    </div>
                    <div class="form-group">
                        <label class="sr-only" for="contact-message">Message</label>
                        <textarea name="message" placeholder="Message..." class="contact-message" id="contact-message"></textarea>
                    </div>
                    <button type="submit" class="btn">Send message</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
