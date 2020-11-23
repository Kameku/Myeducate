@extends('layouts.master-without-nav')

@section('title') Welcome @endsection

@section('css')
<!-- Plugin css -->
<link rel="stylesheet" type="text/css" href="{{URL::asset('frontEnrolment/iofrm-theme23.css')}}">
    @endsection


    @section('body')

    <body>
        @endsection

        @section('content')
        <div class="form-body on-top-mobile">
            <div class="website-logo">
                <a href="welcome">
                    <div class="logo">
                        <img class="logo-size" src="images/site-icon.png" alt="">
                    </div>
                </a>
            </div>
            <div class="row">
                <div class="img-holder">
                    <div class="bg"></div>
                    <div class="info-holder simple-info">
                        <div><img src="images/enquiry.svg" alt=""></div>
                        <div>
                            <h3>Welcome to Educate tutoring!</h3>
                        </div>
                        <div>
                            <p>leave us your information and <br>we will write you soon</p>
                        </div>
                    </div>
                </div>
                <div class="form-holder">
                    <div class="form-content">
                        <div class="form-items">
                            <form data-parsley-validate novalidate action="{{route('enquiry.store')}}" method="POST">
                                <div class="row">
                                    <div class="col-12 title-form">
                                        <h2>Student Data</h2>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-sm-6">
                                        <input type="text" name="student-firts-name" class="form-control" placeholder="Student first name" required>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <input type="text" name="student-last-name" class="form-control" placeholder="Student last name" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-sm-4">
                                        <input type="text" name="home-phone" class="form-control" placeholder="Home Phone" required>
                                    </div>
                                    <div class="col-12 col-sm-4">
                                        <input type="text" name="student-adress" class="form-control" placeholder="Adress" required>
                                    </div>
                                    <div class="col-12 col-sm-4">
                                        <input type="text" name="suburb" class="form-control" placeholder="suburb" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-sm-4">
                                        <input type="number" name="post-code" class="form-control" placeholder="P/Code" required>
                                    </div>
                                    <div class="col-12 col-sm-4">
                                        <input type="text" id="datepicker" name="date-of-birth" class="form-control " placeholder="Date of Birth" required>
                                    </div>
                                    <div class="col-12 col-sm-4">
                                        <input type="text" name="language-home" class="form-control" placeholder="Language Spoken at Home" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 title-form">
                                        <h2>Parent Data</h2>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-sm-8">
                                        <input type="text" name="parent-name" class="form-control" placeholder="Parent Name" required>
                                    </div>
                                    <div class="col-12 col-sm-4">
                                        <input type="number" name="mobile-phone" class="form-control" placeholder="Mobile Phone" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-sm-6">
                                        <input type="email" name="email" class="form-control" placeholder="Email" required>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <input type="text" name="parent-adress" class="form-control" placeholder="Adress" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-button">
                                            <button id="submit" type="submit" class="ibtn">Submit Enquiry</button>
                                        </div>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="home-btn d-none d-sm-block">
            <a href="../../welcome" class="text-dark"><i class='bx bxs-left-arrow-square h1' style="color:#db4b1a"></i></a>
        </div>

        @endsection