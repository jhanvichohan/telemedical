@extends('layouts.template')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            @if($check_details)

            @else
                @include('patient.patient_form')
            @endif
        </div>
    </div>
</div>
@endsection
