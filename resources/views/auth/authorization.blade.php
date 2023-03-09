@extends('layout.app')
@section('content')
    <div class="container">
        <form class="d-flex g-3 flex-column align-items-center" action="{{route('authz')}}" method="post">
            @csrf
            @method('post')
            <div class="col-md-6">
                <label for="validationServerUsername" class="form-label">Email</label>
                <div class="input-group has-validation">
                    <span class="input-group-text" id="inputGroupPrepend3">@</span>
                    <input type="text" class="form-control" id="validationServerUsername" aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback" name="email" required>
                    <div id="validationServerUsernameFeedback" class="invalid-feedback">
                        Please choose a username.
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <label for="validationServer02" class="form-label">Password</label>
                <input type="password" class="form-control" id="validationServer02" value="" name="password" required>
                <div class="valid-feedback">
                    Looks good!
                </div>
            </div>
{{--            <div class="col-12">--}}
{{--                <div class="form-check">--}}
{{--                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck3" aria-describedby="invalidCheck3Feedback" required>--}}
{{--                    <label class="form-check-label" for="invalidCheck3">--}}
{{--                        Agree to terms and conditions--}}
{{--                    </label>--}}
{{--                    <div id="invalidCheck3Feedback" class="invalid-feedback">--}}
{{--                        You must agree before submitting.--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

            <div class="col-1 mt-3">
                <button class="btn btn-primary" type="submit">Submit</button>
            </div>
        </form>
    </div>
@endsection
