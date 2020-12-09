@extends('layouts.template')

@section('content')

    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Book Appointment</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="/appointments" method="post">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label>Date</label>
                    <input type="date" name="appointmentDate" class="form-control @error('appointmentDate') is-invalid @enderror"
                           min="{{\Carbon\Carbon::now()->format('Y-m-d')}}">
                    @error('appointmentDate')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Appointment Time</label>
                    <input type="time" class="form-control @error('appointmentTime') is-invalid @enderror"
                           name="appointmentTime">
                    @error('appointmentTime')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Select Booking</label>
                </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>

@endsection
