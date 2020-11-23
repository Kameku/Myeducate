@extends('layouts.master')

@section('title') Dashboard @endsection
@section('css')

<!-- DataTables -->
<link href="{{ URL::asset('/libs/datatables/datatables.min.css')}}" rel="stylesheet" type="text/css" />

@endsection
@section('content')

@component('common-components.breadcrumb')
@slot('title') Enquiry - Students List @endslot
@slot('title_li') Welcome to {{ Auth::user()->name }} @endslot

@endcomponent

<div class="col-12">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Buttons example</h4>
            <p class="card-title-desc">The Buttons extension for DataTables provides a common set of options, API methods and styling to display buttons on a page that will interact with a DataTable. The core library provides the based framework upon which plug-ins can built.
            </p>
            <div class="row">
                <div class="col-sm-12">
                    <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap dataTable no-footer dtr-inline" style="border-collapse: collapse; border-spacing: 0px; width: 100%;" role="grid" aria-describedby="datatable-buttons_info">
                        <thead>
                            <tr role="row">
                                <th>Firts Name</th>
                                <th>Last Name</th>
                                <th>Home Phone</th>
                                <th>Parent Name</th>
                                <th>Parent Mobile</th>
                                <th>Events</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach( $enquirys as $enquiry )
                            <tr role="row" class="odd">
                                <td>{{ $enquiry -> first_name}}</td>
                                <td>{{ $enquiry -> last_name}}</td>
                                <td>{{ $enquiry -> home_phone}}</td>
                                <td>{{ $enquiry -> parent_name}}</td>
                                <td>{{ $enquiry -> parent_mobile}}</td>
                                <td><a href="enquiry/{{$enquiry -> id}}" data-toggle="tooltip" data-original-title="Show enquiry student"><i class="bx bxs-user-rectangle font-size-25"></i></a>
                                    <a href="#" data-toggle="tooltip" data-original-title="Delete enquiry student"><i class="bx bxs-trash font-size-25"></i></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
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