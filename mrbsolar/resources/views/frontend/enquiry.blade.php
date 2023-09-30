@extends('frontend.layout.main')
@section('title', 'Home')
@section('customcss')
    <style>
        .nav-white {
            background-color: white !important;
        }

        .ENQbtn {
            background-color: rgb(111, 143, 225);
            color: yellow;
            padding: 16px;
            font-size: 16px;
            border: none;
        }

        .section-1-background {
            background-image: url(../assets/Contact-Us.jpg);
            background-size: cover;
            height: 300px;
        }


        .form-attributes {
            height: 45px;
            box-shadow: 0 .5rem 1rem rgba(0, 0, 0, .15) !important;
        }

        .submit-button {
            color: white;
            width: 100px;
            background-color: rgb(0, 0, 0);
            border-radius: 5px;
            border: none;
            padding: 5px;
        }

        select,
        input:focus-visible {
            outline: none !important;
        }
    </style>
@endsection

@section('content')
    <div class="container-fluid px-0 my-auto backimg">
        <img src="{{ asset('assets/images/enquiry.jpeg') }}" alt="img not found" style="height: 100%; width: 100%;">
    </div>
    <div class="container-fluid my-auto">
        <div class="container py-5 mx-auto text-start">
            <h3>Please fill up this form and we will get back to you</h3>
            <!-- form begins here -->
            <form action="{{ route('enquiry_form') }}" method="post" enctype="multipart/form-data">
                @csrf
                <h6 class="py-3">Your Contact Details</h6>
                <!-- form attributes -->
                <div class="row text-center py-3 justify-content-between">
                    <div class="col-12 py-3">
                        <select name="interest" id="interest"
                            class="border-0 border-bottom border-dark form-attributes rounded-2 w-100" required>
                            <option value="select">You Are Interested</option>
                            @foreach ($interests as $interest)
                                <option value="{{ $interest->interest }}">{{ $interest->interest }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-12 col-md-12 py-3 col-lg-5 text-start">
                        <input type="text" id="firstname" name="firstname"
                            class=" p-2 border-0 border-bottom border-dark form-attributes rounded-2 w-100"
                            placeholder="First Name" required>
                    </div>
                    <div class="col-12 col-md-12 py-3 col-lg-5 ">
                        <input type="text" id="lastname" name="lastname"
                            class="border-0 p-2 border-bottom border-dark form-attributes rounded-2 w-100"
                            placeholder="Last Name" required>
                    </div>
                    <div class="col-12 col-md-12 py-3 col-lg-5 text-start">
                        <input type="text" id="company" name="company"
                            class="border-0 p-2 border-bottom border-dark form-attributes rounded-2 w-100"
                            placeholder="Company Name" required>
                    </div>
                    <div class="col-12 col-md-12 py-3 col-lg-5 ">
                        <input type="number" id="number" name="number"
                            class="border-0 p-2 border-bottom border-dark form-attributes rounded-2 w-100"
                            placeholder="Mobile number" required>
                    </div>
                    <div class="col-12 col-md-12 py-3 col-lg-5 text-start">
                        <input type="email" id="email" name="email"
                            class="border-0 p-2 border-bottom border-dark form-attributes rounded-2 w-100"
                            placeholder="E-mail" required>
                    </div>
                    <div class="col-12 col-md-12 py-3 col-lg-5">
                        <input type="text" id="country" name="country"
                            class="border-0 p-2 border-bottom border-dark form-attributes rounded-2 w-100"
                            placeholder="Country" required>
                    </div>
                    <div class="col-12 col-md-12 py-3 col-lg-5 text-start ">
                        <input type="text" id="state" name="state"
                            class="border-0 p-2 border-bottom border-dark form-attributes rounded-2 w-100"
                            placeholder="State" required>
                    </div>
                    <div class="col-12 col-md-12 py-3 col-lg-5 offset-lg-2">
                        <input type="text" id="city" name="city"
                            class="border-0 p-2 border-bottom border-dark form-attributes rounded-2 w-100"
                            placeholder="city/town">
                    </div>
                    <div class="col-12 text-center py-5">
                        <p>
                            <textarea name="message" class="p-2 border-0 border-bottom border-dark form-attributes rounded-2 w-100"
                                style="min-height: 150px;" placeholder="Please enter your comments. if any ?"></textarea>
                        </p>
                    </div>
                    <div class="col-12 text-start py-3">
                        <input type="checkbox" id="termsagreement" name="termsagreement" value="terms" required>
                        <label for="choice11">Yes, I accept Tata Power Solar <a href="#">Terms of Use of
                                Agreement*</a> </label><br>
                    </div>
                    <div class="col-12 text-start py-3">
                        <input class="submit-button" type="submit" value="Submit" name="submit">
                        <input class="submit-button" type="reset" value="Reset">
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
