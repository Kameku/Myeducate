@extends('layouts.master')

@section('title') Jquery Knob Chart @endsection

@section('content')

     @component('common-components.breadcrumb')
         @slot('title') Jquery Knob  @endslot
         @slot('li_1') Charts  @endslot
     @endcomponent


<!-- end row -->
@endsection

@section('script')
<script src="{{URL::asset('/libs/jquery-knob/jquery-knob.min.js')}}"></script>
<script src="{{URL::asset('/js/pages/jquery-knob.init.js')}}"></script>
@endsection