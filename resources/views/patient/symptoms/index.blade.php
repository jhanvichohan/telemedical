@extends('layouts.template')

@section('content')

    <div class="card-header">
        <h5 class="text-bold">Input your symptoms</h5>
    </div>

    <form action="/symptoms" method="post" class="form-horizontal">
            @csrf
            <div class="form-group row">
                <input type="hidden" name="bookings_id" value="{{$appointment->id}}">
                <label class="col-sm-2 col-form-label">Temperature</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control @error('temperature') is-invalid @enderror"
                           name="temperature" value="">

                    @error('temperature')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Blood Pressure</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control @error('bloodPressure') is-invalid @enderror"
                           name="bloodPressure" value="">

                    @error('bloodPressure')
                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Pulse Oximetry</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control @error('pulseOximetry') is-invalid @enderror"
                           name="pulseOximetry" value="">

                    @error('pulseOximetry')
                    <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Weight</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control @error('weight') is-invalid @enderror"
                           name="weight" value="">
                    @error('weight')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Height</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control @error('height') is-invalid @enderror"
                            name="height" value="">
                    @error('height')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
        <div class="form-group">
            <label>Select your current Blood group:</label>
            <div class="col-sm-10 form-control @error('bloodGroup') is-invalid @enderror">
                <select name="bloodGroup">
                    <option value="">--Please select the appropriate--</option>
                    <option value="A+">A+</option>
                    <option value="A-">A-</option>
                    <option value="B+">B+</option>
                    <option value="B-">B-</option>
                    <option value="O+">O+</option>
                    <option value="O-">O-</option>
                    <option value="AB+">AB+</option>
                    <option value="AB-">AB-</option>
                </select>
            </div>
            @error('bloodGroup')
            <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
            <div class="form-group">
                <label>Select your current medical state:</label>
                <div class="col-sm-10 form-control @error('medicalState') is-invalid @enderror">
                    <select name="medicalState">
                        <option value="">--Please select the appropriate--</option>
                        <option value="Undetermined">Undetermined</option>
                        <option value="Good">Good</option>
                        <option value="Fair">Fair</option>
                        <option value="Serious">Serious</option>
                        <option value="Critical">Critical</option>
                    </select>
                </div>
                @error('medicalState')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="form-group row">
                <div class="offset-sm-2 col-sm-10">
                    <button type="submit" class="btn btn-success">Submit</button>
                </div>
            </div>
        </form>
@endsection
