@extends('layouts.intern-boilerplate')

@section('content')

@error('email')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
@error('password')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror

@if (session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif

<form action="{{route('intern.upload')}}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="panel">
        <h1 class="main-header panel-header">Profile Settings</h1>
        <div class="row">
            <div class="col-sm-2">
                <h1 class="panel-header">Name</h1>
            </div>
            <div class="col-sm-10">
                <input class="input-text" type="text" name="name" id="name-text" readonly="true" value="{{$user->name}}" autocomplete="off"/>
                <label class="input-label" for="name">This field can only be changed by an admin. Please contact your supervisor.</label>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-2">
                <h1 class="panel-header">Email Address</h1>
            </div>
            <div class="col-sm-10">
                <input class="input-text" type="text" name="email" id="email-text" value="{{$user->email}}" autocomplete="off"/>
                <label class="input-label" for="email">Please make sure you use a legitimate email address</label>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-2">
                <h1 class="panel-header">Password</h1>
            </div>
            <div class="col-sm-10">
                <input class="input-text" type="password" name="password" id="password" placeholder="Enter Password"/>
                <input class="input-text" type="password" name="password_confirmation" id="password_confirmation" placeholder="Confirm Password"/>
                <label class="input-label" for="password">Please secure your password by using numbers, uppercase characters and lowercase characters</label>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-2">
                <h1 class="panel-header">Introduction</h1>
            </div>
            <div class="col-sm-10">
                <textarea name="introduction" id="intro-text" class="input-text" cols="30" rows="5">{{$user->introduction}}</textarea>
                <label class="input-label" for="confpass">Tell them who you are in fewer than 300 characters</label>
            </div>
        </div>
        <h1 class="next-header main-header panel-header">Profile Picture</h1>
        <div class="row">
            <div class="col-sm-4 d-flex justify-content-center">
                <img class="profile-pic" src="{{asset($user->profile_picture)}}" alt="profile picture">
            </div>
            <div class="col-sm-8 d-flex justify-content-center align-items-center">
                <div class="form-group">
                    <input id="profile-upload" type="file" name="file" class="form-control-file">
                    <label class="profile-up d-flex flex-column justify-content-center align-items-center" for="profile-upload">
                        <i class="upload-icon fas fa-cloud-upload-alt"></i>
                        <span>Upload a profile picture</span>
                    </label>
                    <p class="current-selected">Current Selected file: <span id="selected-file">None</span></p>
                </div>
            </div>
        </div>
        <h1 class="next-header main-header panel-header">Profile Banner</h1>
        <div class="row last-row">
            <div class="col-sm-3 d-flex justify-content-center">
                <div id="option1" class="{{$user->banner == "1" ? 'banner-selected' : ''}} banner-option"></div>
            </div>
            <div class="col-sm-3 d-flex justify-content-center">
                <div id="option2" class="{{$user->banner == "2" ? 'banner-selected' : ''}} banner-option"></div>
            </div>
            <div class="col-sm-3 d-flex justify-content-center">
                <div id="option3" class="{{$user->banner == "3" ? 'banner-selected' : ''}} banner-option"></div>
            </div>
            <div class="col-sm-3 d-flex justify-content-center">
                <div id="option4" class="{{$user->banner == "4" ? 'banner-selected' : ''}} banner-option"></div>
            </div>
            <input id="banner-selected" type="text" name="banner" value="{{$user->banner}}" />
        </div>
    </div>

    <button type="submit" name="submit" class="button form-button button-main">
        Save Settings
    </button>
</form>
<script src="/js/settings.js"></script>
@endsection