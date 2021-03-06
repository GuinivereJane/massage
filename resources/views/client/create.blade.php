@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
      <div class="col-md-10">
          <div class="card">
              <div class="card-header">Basic Information</div>
              <div class="card-body">
                  <form method="POST" action="{{ route('client.store') }}">
                    @csrf
                    <div class="form-group row">
                      <label for="name" class="col-md-2 col-form-label text-md-right">Name</label>
                      <div class="col-sm-12 col-md-10">
                        <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ $user->name }}" required autofocus>
                        @if ($errors->has('name'))
                          <span class="invalid-feedback">
                            <strong>{{ $errors->first('name') }}</strong>
                          </span>
                        @endif
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="email" class="col-md-2 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
                      <div class="col-sm-12 col-md-10">
                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ $user->email }}" required>
                        @if ($errors->has('email'))
                          <span class="invalid-feedback">
                              <strong>{{ $errors->first('email') }}</strong>
                          </span>
                        @endif
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="phone_number" class="col-md-2 col-form-label text-md-right">Phone Number</label>
                      <div class="col-sm-12 col-md-10">
                        <input id="phone_number" type="text" class="form-control{{ $errors->has('phone_number') ? ' is-invalid' : '' }}" name="phone_number" required>
                        @if ($errors->has('phone_number'))
                          <span class="invalid-feedback">
                              <strong>{{ $errors->first('phone_number') }}</strong>
                          </span>
                        @endif
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="address" class="col-md-2 col-form-label text-md-right">Address</label>
                      <div class="col-sm-12 col-md-10">
                        <input id="address" type="textarea" rows="3" class="form-control input-lg{{ $errors->has('address') ? ' is-invalid' : '' }}" name="address" required>
                        @if ($errors->has('address'))
                          <span class="invalid-feedback">
                              <strong>{{ $errors->first('address') }}</strong>
                          </span>
                        @endif
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="occupation" class="col-md-2 col-form-label text-md-right">Occupation</label>
                      <div class="col-sm-12 col-md-10">
                        <input id="occupation" type="text" class="form-control{{ $errors->has('occupation') ? ' is-invalid' : '' }}" name="occupation" required>
                        @if ($errors->has('occupation'))
                          <span class="invalid-feedback">
                            <strong>{{ $errors->first('occupation') }}</strong>
                          </span>
                        @endif
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="dob" class="col-md-2 col-form-label text-md-right">Date of Birth</label>
                      <div class="col-sm-12 col-md-10">
                        <input id="dob" type="text" class="form-control{{ $errors->has('dob') ? ' is-invalid' : '' }}" name="dob" required>
                        @if ($errors->has('dob'))
                          <span class="invalid-feedback">
                            <strong>{{ $errors->first('dob') }}</strong>
                          </span>
                        @endif
                      </div>
                    </div>
                    <div class="form-group row mb-0">
                      <div class="col-2 offset-md-5">
                        <button type="submit" class="btn btn-primary">
                          Continue
                        </button>
                      </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection