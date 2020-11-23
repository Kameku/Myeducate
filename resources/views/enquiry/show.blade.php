@extends('layouts.master')

@section('title') Dashboard @endsection
@section('css')

<!-- DataTables -->
<link href="{{ URL::asset('/libs/datatables/datatables.min.css')}}" rel="stylesheet" type="text/css" />

@endsection
@section('content')

@component('common-components.breadcrumb')
@slot('title') Enquiry - Name Student {{$enquiry->first_name}} @endslot
@slot('title_li') Welcome to {{ Auth::user()->name }} @endslot

@endcomponent

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title h2">Data enquiry</h4>
                <p class="card-title-desc">These are the data of the enrollment process of the student that is specified with the name of the student, in this section you can see and edit the data of this student</p>
                <div class="card-header bg-trama text-white rounded">
                    <!-- Nav tabs -->
                    <ul class="nav nav-pills nav-justified" role="tablist">
                        <li class="nav-item waves-effect waves-light">
                            <a class="nav-link active" data-toggle="tab" href="#home-1" role="tab" aria-selected="false">
                                <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                                <span class="d-none d-sm-block">Query data</span>
                            </a>
                        </li>
                        <li class="nav-item waves-effect waves-light">
                            <a class="nav-link" data-toggle="tab" href="#profile-1" role="tab" aria-selected="false">
                                <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                                <span class="d-none d-sm-block">Enrolment Details</span>
                            </a>
                        </li>
                        <li class="nav-item waves-effect waves-light">
                            <a class="nav-link" data-toggle="tab" href="#messages-1" role="tab" aria-selected="true">
                                <span class="d-block d-sm-none"><i class="far fa-envelope"></i></span>
                                <span class="d-none d-sm-block">Reports</span>
                            </a>
                        </li>
                        <li class="nav-item waves-effect waves-light">
                            <a class="nav-link" data-toggle="tab" href="#settings-1" role="tab" aria-selected="false">
                                <span class="d-block d-sm-none"><i class="fas fa-cog"></i></span>
                                <span class="d-none d-sm-block">History</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- Tab panes -->
                <div class="tab-content p-3 text-muted">
                    <div class="tab-pane active" id="home-1" role="tabpanel">
                        <div class="row">
                            <div class="col-7">
                                <div class="card-body bg-tramaSecond border border-primary shadow rounded">
                                    <div class="card-header bg-primary rounded">
                                        <h5 class="card-title mb-3 mt-3 text-white font-size-18">Student Information</h5>

                                        <p class="card-title-desc text-white">
                                            This information corresponds to the one sent in the first contact through the initial registration form
                                        </p>
                                    </div>
                                    <div class="mt-3">
                                        <p class="font-size-12 text-muted mb-1">First Name</p>
                                        <h6 class="font-size-16">{{$enquiry->first_name}}</h6>
                                    </div>

                                    <div class="mt-3">
                                        <p class="font-size-12 text-muted mb-1">Last Name</p>
                                        <h6 class="font-size-16">{{$enquiry->last_name}}</h6>
                                    </div>

                                    <div class="mt-3">
                                        <p class="font-size-12 text-muted mb-1">Home Phone</p>
                                        <h6 class="font-size-16">{{$enquiry->home_phone}}</h6>
                                    </div>
                                    <div class="mt-3">
                                        <p class="font-size-12 text-muted mb-1">Adress</p>
                                        <h6 class="font-size-16">{{$enquiry->adress}}</h6>
                                    </div>
                                    <div class="mt-3">
                                        <p class="font-size-12 text-muted mb-1">Suburb</p>
                                        <h6 class="font-size-16">{{$enquiry->suburb}}</h6>
                                    </div>
                                    <div class="mt-3">
                                        <p class="font-size-12 text-muted mb-1">Post Code</p>
                                        <h6 class="font-size-16">{{$enquiry->post_code}}</h6>
                                    </div>
                                    <div class="mt-3">
                                        <p class="font-size-12 text-muted mb-1">Date of Birth</p>
                                        <h6 class="font-size-16">{{$enquiry->date_of_birth}}</h6>
                                    </div>
                                    <div class="mt-3">
                                        <p class="font-size-12 text-muted mb-1">Language Spoken at Home</p>
                                        <h6 class="font-size-16">{{$enquiry->language_home}}</h6>
                                    </div>
                                    <div class="mt-4">
                                        <a href="#" class="btn btn-primary">Edit Information Student</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-5">
                                <div class="card-body bg-tramaSecond border border-primary shadow rounded">
                                    <div class="card-header bg-primary rounded">
                                        <h5 class="card-title mb-3 mt-3 text-white font-size-18">Parent Information</h5>

                                        <p class="card-title-desc text-white">
                                            This information corresponds to the one sent in the first contact through the initial registration form
                                        </p>
                                    </div>
                                    <div class="mt-3">
                                        <p class="font-size-12 text-muted mb-1">Parent Name</p>
                                        <h6 class="font-size-16">{{$enquiry->parent_name}}</h6>
                                    </div>

                                    <div class="mt-3">
                                        <p class="font-size-12 text-muted mb-1">Mobile Phone</p>
                                        <h6 class="font-size-16">{{$enquiry->parent_mobile}}</h6>
                                    </div>

                                    <div class="mt-3">
                                        <p class="font-size-12 text-muted mb-1">Email</p>
                                        <h6 class="font-size-16">{{$enquiry->parent_email}}</h6>
                                    </div>
                                    <div class="mt-3">
                                        <p class="font-size-12 text-muted mb-1">Adress</p>
                                        <h6 class="font-size-16">{{$enquiry->parent_adress}}</h6>
                                    </div>
                                    <div class="mt-4">
                                        <a href="#" class="btn btn-primary">Edit Information Parent</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="profile-1" role="tabpanel">
                        <p class="mb-0">
                            Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna 8-bit.
                        </p>
                    </div>
                    <div class="tab-pane" id="messages-1" role="tabpanel">
                        <p class="mb-0">
                            Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh mi whatever gluten-free.
                        </p>
                    </div>
                    <div class="tab-pane" id="settings-1" role="tabpanel">
                        <p class="mb-0">
                            Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan DIY, art party locavore wolf cliche high life echo park Austin. Cred vinyl keffiyeh DIY salvia PBR, banh mi before they sold out farm-to-table.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- end col -->
</div>



@endsection


@section('script')
<!-- plugin js -->
<script src="{{ URL::asset('libs/apexcharts/apexcharts.min.js')}}"></script>

<!-- jquery.vectormap map -->
<script src="{{ URL::asset('libs/jquery-vectormap/jquery-vectormap.min.js')}}"></script>

<!-- Calendar init -->
<script src="{{ URL::asset('js/pages/dashboard.init.js')}}"></script>

<!-- Required datatable js -->
<script src="{{ URL::asset('/libs/datatables/datatables.min.js')}}"></script>
<script src="{{ URL::asset('/libs/jszip/jszip.min.js')}}"></script>
<script src="{{ URL::asset('/libs/pdfmake/pdfmake.min.js')}}"></script>

<!-- Datatable init js -->
<script src="{{ URL::asset('/js/pages/datatables.init.js')}}"></script>
@endsection