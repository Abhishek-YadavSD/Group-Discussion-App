@extends('layout.main')
@section('cssstyle')
<style>
    * {
        box-sizing: border-box;
    }

    body {
        background: url('https://i.imgsafe.org/7b90603.png') no-repeat 50% 15%;
        background-size: 150%;
        color: #fff;
        font-family: Helvetica;
    }

    h2 {
        font-size: 2rem;
        font-weight: normal;
    }

    .based {
        margin: 1rem;
    }

    .based a {
        color: #fff;
        font-weight: bold;
    }

    .form {
        max-width: 860px;
        margin: 6rem auto 0 auto;
        display: flex;
        flex-direction: row;
        padding: 4rem;
        background: rgba(0, 0, 0, 0.6);
        border-radius: 0.2rem;
        position: relative;
    }

    .form_content {
        margin-bottom: 1rem;
    }

    .form-group {
        color: #333;
        opacity: 0;
    }

    .form-group_title {
        color: #E57B5C;
        text-transform: uppercase;
    }

    .form-group_input {
        width: 100%;
        border-width: 0 0 2px 0;
        border-bottom: 2px solid #ccc;
        padding: 0.5rem;
        margin-bottom: 1.5rem;
    }

    .form_background {
        border-radius: 0.2rem;
        background-color: #fff;
        padding: 3rem 2rem;
        box-shadow: 2px 2px 4px 0px rgba(0, 0, 0, 0.4);
        width: 50%;
        height: 120%;
        margin: 0;
        position: absolute;
        top: 50%;
        left: 0;
        right: 0;
        transition: all 0.3s cubic-bezier(0.04, 0.57, 0.15, 1.46);
    }

    .fieldset {
        flex: 1;
        margin: 0;
        border: 0;
        padding: 0 5rem 0 0;
    }

    .fieldset:first-child {
        padding-left: 0;
    }

    .fieldset:last-child {
        padding-left: 5rem;
        padding-right: 0;
    }

    .radio--invisible {
        opacity: 0;
        height: 0;
        width: 0;
    }

    .button {
        text-transform: uppercase;
        padding: 0.6rem 3rem;
        border: 1px solid #fff;
        border-radius: 0.3rem;
        cursor: pointer;
        transition: background 0.2s ease-in;
        display: inline-block;
        margin-top: 1rem;
    }

    .button:hover {
        background-color: rgba(0, 0, 0, 0.3);
    }

    .button--form {
        background: #E57B5C;
        color: #fff;
        float: right;
        margin-top: 0;
    }

    .button--form:hover {
        background: #ec9f88;
    }

    #noaccount:checked~.form_background {
        transform: translate(3rem, -50%);
    }

    #noaccount:checked~.form_background .form-group--account {
        display: none;
    }

    #noaccount:checked~.form_background .form-group--noaccount {
        display: block;
        opacity: 0;
        animation-delay: 0.2s;
        animation-duration: 0.3s;
        animation-name: slidein;
        animation-fill-mode: forwards;
    }

    #account:checked~.form_background {
        transform: translate(calc(100% - 3rem), -50%);
    }

    #account:checked~.form_background .form-group--noaccount {
        display: none;
    }

    #account:checked~.form_background .form-group--account {
        display: block;
        animation-delay: 0.2s;
        animation-duration: 0.3s;
        animation-name: slidein;
        animation-fill-mode: forwards;
    }

    @keyframes slidein {
        from {
            opacity: 0;
        }

        to {
            opacity: 1;
        }
    }
</style>
@endsection

@section('mainbody')
@include('layout.navbar')

{{-- <form action="{{ URL::to('/registe') }}" method="post" class="form"> --}}

<div class="form">
    @csrf
    <input id="noaccount" name="radioaccount" type="radio" class="radio radio--invisible" checked />
    <input id="account" name="radioaccount" type="radio" class="radio radio--invisible" />
    <div class="form_background">
        <form action="{{ route('login-user') }}" method="post">
            {{-- @if (Session::has('success'))
            <div class="alert alert-success">{{Session::get('success')}}</div>
        @endif
        @if (Session::has('fail'))
        <div class="alert alert-danger">{{Session::get('fail')}}</div>
    @endif --}}
            @csrf
            <div class="form-group form-group--account">
                <h3 class="form-group_title">Log in</h3>
                <div>
                    <input class="form-group_input" type="email" name="email" placeholder="Email" />
                    <span class="text-danger">
                        @error('email')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
                <div>
                    <input class="form-group_input mb-0" name="password" type="password" placeholder="Password" />
                    <span class="text-danger">
                        @error('password')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
                <button type="submit" class="button button--form">Log in</button>
            </div>
        </form>
        <form action="{{ route('register-user') }}" method="post" id="signupid"
            class="form-group form-group--noaccount">
            {{-- @if (Session::has('success'))
                <div class="alert alert-success">{{Session::get('success')}}</div>
            @endif
            @if (Session::has('fail'))
            <div class="alert alert-danger">{{Session::get('fail')}}</div>
        @endif --}}
            @csrf
            <h3 class="form-group_title">Sign up</h3>
            <div>
                <input class="form-group_input" name="name" type="text" placeholder="Full Name"
                    autocomplete="off" />
                <span class="text-danger">
                    @error('name')
                        {{ $message }}
                    @enderror
                </span>
            </div>
            <div>
                <input class="form-group_input" name="email" type="email" placeholder="Email" autocomplete="off" />
                <span class="text-danger">
                    @error('email')
                        {{ $message }}
                    @enderror
                </span>
            </div>
            <div>
                <input class="form-group_input" name="password" type="password" placeholder="Password" />
                <span class="text-danger">
                    @error('password')
                        {{ $message }}
                    @enderror
                </span>
            </div>
            <button type="submit" id="submit-btn" class="button button--form">Sign up</button>
        </form>
    </div>

    <fieldset class="fieldset">
        <h2>Don't have an account ?</h2>
        <p>Banjo tote bag bicycle rights, High Life sartorial cray craft beer whatever street art fap.</p>
        <div class="form_content form_content--noaccount">

        </div>
        <label for="noaccount" class="button">Signup</label>
    </fieldset>
    <fieldset class="fieldset">
        <h2>Have an account ?</h2>
        <p>Banjo tote bag bicycle rights, High Life sartorial cray craft beer whatever street art fap.</p>

        <div class="form_content form_content--noaccount">

        </div>
        <label for="account" class="button">login</label>
    </fieldset>
</div>
@endsection
