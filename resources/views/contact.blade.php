@extends('templates.front.main')

@section('body')
<div class="container-fluid bg-dark" style="margin-top: -26px">
    <div class="container">
    <div class="row">
        <div class="col-12">
            <p style="margin:0px" class="py-3"><a href="/">Home</a> » <a href="#">Contact Us</a></p>
        </div>
    </div>
    </div>
</div>
<div class="container my-5">
    <div class="row">
        <div class="col-12 text-center">
            <h1>Our Dedicated Teams Are Ready To Help.</h1>
            <p class="fs-5">Ready To Assist:Team Assistance</p>
        </div>
        <div class="col-12 col-md-4 mb-3">
            <div class="card text-center text-dark py-3">
                <a href="mailto:hello@earlylifestyle.com">
                    <div class="card-body px-3">
                        <i class="fa-regular fa-envelope display-1 mb-3" style="color:#000!important"></i>
                        <h2 class="card-title mb-3 fs-3" style="color:#000!important">hello@earlylifestyle.com</h2>
                        <p class="card-text fs-5" style="color:#000!important">Having Trouble With Any Blog? We Welcome
                            Your Inputs.</p>
                </a>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-4 mb-3">
        <div class="card text-center text-dark py-3">
            <a href="mailto:hello@earlylifestyle.com">
                <div class="card-body px-3">
                    <i class="fa-regular fa-envelope display-1 mb-3" style="color:#000!important"></i>
                    <h2 class="card-title mb-3 fs-3" style="color:#000!important">hello@earlylifestyle.com</h2>
                    <p class="card-text fs-5" style="color:#000!important">Have A Question For Our Team ? We Welcome
                        Your Inputs.</p>
            </a>
        </div>
    </div>
</div>
<div class="col-12 col-md-4 mb-3">
    <div class="card text-center text-dark py-3">
        <a href="mailto:hello@earlylifestyle.com">
            <div class="card-body px-3">
                <i class="fa-regular fa-envelope display-1 mb-3" style="color:#000!important"></i>
                <h2 class="card-title mb-3 fs-3" style="color:#000!important">hello@earlylifestyle.com</h2>
                <p class="card-text fs-5" style="color:#000!important">Have A Question For Our Organization ? We Welcome
                    Your Inputs.</p>
        </a>
    </div>
</div>
</div>
</div>
<div class="row mt-5">
    <div class="col-12 col-md-6">
        <h2>Give Us A Message For Any Query</h2>
        <hr style="width:50%">
        <form action="" method="post">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Full Name</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="text" class="form-control" id="email" name="email">
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Phone Number</label>
                <input type="text" class="form-control" id="phone" name="phone">
            </div>
            <div class="mb-3">
                <label class="form-label" for="textarea">Message</label>
                <textarea name="message" id="textarea" rows="5" class="form-control"></textarea>
            </div>
            <button type="submit" class="btn btn-light text-dark fw-bold">Send Message</button>
        </form>
    </div>
    <div class="col-6 ps-md-5">
        <h2>Contact Info</h2>
        <hr style="width:20%">
        <ul class="contact-info mt-5" style="list-style: none;margin:0px;padding:0px">
            <li class="mb-3">
                <a target="_blank" class="fs-4" href="https://www.facebook.com/earlylifestyle.fb" rel="noopener"><i
                        class="fa-brands fa-square-facebook fs-3" style="width:40px"></i> Facebook</a>
            </li>
            <li class="mb-3">
                <a target="_blank" class="fs-4" href="https://www.instagram.com/earlylifestyle/" rel="noopener"><i
                        class="fa-brands fa-square-instagram fs-3" style="width:40px"></i> Instagram</a>
            </li>
            <li class="mb-3">
                <a target="_blank" class="fs-4" href="https://linkedin.com/company/earlylifestyle" rel="noopener"><i
                        class="fa-brands fa-linkedin fs-3" style="width:40px"></i> Linkedin</a>
            </li>
            <li class="mb-3">
                <a target="_blank" class="fs-4" href="https://x.com/early_lifestyle?t=m5-_ZZOpKrRXj9LdYqiUww&amp;s=09"
                    rel="noopener"><i class="fa-brands fa-square-x-twitter fs-3" style="width:40px"></i> Twitter</a>
            </li>
            <li class="mb-3">
                <a href="mailto:hello@earlylifestyle.com" class="fs-4"><i class="fa-solid fa-envelope fs-4" style="width:40px"></i>
                    hello@earlylifestyle.com</a>
            </li>
            <li class="mb-3">
                <a target="_blank" class="fs-4" href="https://www.youtube.com/@early.lifestyle" rel="noopener"><i
                        class="fa-brands fa-youtube fs-4" style="width:40px"></i> Youtube</a>
            </li>
        </ul>
    </div>
</div>
</div>
@endsection