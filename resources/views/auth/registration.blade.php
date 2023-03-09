@extends('layout.app')
@section('content')
    <div class="container">
        <form class="row g-3" action="{{route('registration')}}" method="post">
            @csrf
            @method('post')
            <div class="col-md-4">
                <label for="validationServer01" class="form-label">Username</label>
                <input type="text" class="form-control @error('username') is-invalid @enderror" id="validationServer01"
                       name="username" required>
                <div class="invalid-feedback">
                    @error('username')
                    {{$message}}
                    @enderror
                </div>
            </div>
            <div class="col-md-4">
                <label for="validationServer02" class="form-label">Password</label>
                <input type="password" class="form-control @error('password') is-invalid @enderror"
                       id="validationServer02" name="password" required>
                <div class="invalid-feedback">
                    @error('password')
                    {{$message}}
                    @enderror
                </div>
            </div>
            <div class="col-md-4">
                <label for="validationServer02" class="form-label">Confirm password</label>
                <input type="password" class="form-control" id="validationServer02" name="password_confirmation"
                       required>
            </div>
            <div class="col-md-4">
                <label for="validationServerUsername" class="form-label">Email</label>
                <div class="input-group has-validation">
                    <span class="input-group-text" id="inputGroupPrepend3">@</span>
                    <input type="text" class="form-control @error('email') is-invalid @enderror" id="validationServerUsername"
                           aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback" name="email" required>
                    <div id="validationServerUsernameFeedback" class="invalid-feedback">
                        @error('email')
                        {{$message}}
                        @enderror
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="1" id="invalidCheck3"
                           aria-describedby="invalidCheck3Feedback" name="agree" required>
                    <label class="form-check-label" for="invalidCheck3">
                        Agree to terms and conditions
                    </label>
                    <div id="invalidCheck3Feedback" class="invalid-feedback">
                        You must agree before submitting.
                    </div>
                </div>
            </div>
            <div class="col-12">
                <button class="btn btn-primary" type="submit">Submit</button>
            </div>
        </form>
    </div>
@endsection
