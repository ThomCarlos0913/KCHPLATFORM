@extends('layouts.intern-boilerplate')

@section('content')
@php
    $banner = 'banner-1';

    switch ($searched_user->banner) {
        case 1:
            $banner = 'banner-1';
            break;
        case 2:
            $banner = 'banner-2';
            break;
        case 3:
            $banner = 'banner-3';
            break;
        case 4:
            $banner = 'banner-4';
            break;
    }

@endphp

<div class="profile-panel">
    <div class="profile-banner {{$banner}}">
       <img class="profile-picture"src="{{asset($searched_user->profile_picture)}}" alt="">
       <div class="desktop profile-info">
            <h1>{{$searched_user->name}}</h1>
            <p>{{$searched_user->department}} • {{$searched_user->school}}</p>
       </div>
    </div>
    <div class="profile-information">
        <div>
            <div class="desktop">
                <div class="row">
                    <div class="col-sm-7">
                        <p class="about-header">Introduction</p>
                        <p class="bio last-p">{{$searched_user->introduction}}</p> 
                    </div>
                    <div class="col-sm-5 d-flex align-items-end">
                        <div class="desktop button-desktop d-flex justify-content-end">
                            @if ($searched_user->id == $user->id)
                                <a href="{{route('intern.settings')}}" id="{{$searched_user->id}}" class="button button-main profile-button">Edit Profile</a>
                            @else
                                <a href="#" id="{{$searched_user->id}}" class="send-message-button button button-main profile-button">Send Message</a>
                                <a href="#" class="button button-main profile-button" data-toggle="modal" data-target="#reportModal">Report Account</a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>

            <div class="mobile">
                <h1>{{$searched_user->name}}</h1>
                <p class="last-p">{{$searched_user->department}} • {{$searched_user->school}}</p>
                <p class="about-header">About me</p>
                <p class="bio">Hi there! I'm Juan Dela Cruz from Adamson University and I'm an intern from IT Department. 
                    You can freely send me a message by clicking the 'Send Button' from the right. </p> 
                    
                <a href="#" class="button button-main profile-button">Send Message</a>
                <a href="#" class="button button-main profile-button" data-toggle="modal" data-target="#reportModal">Report Account</a>
            </div>
        </div>
    </div>
</div>
<div class="comment-panel">
    <h1 class="comment-header">Account Comments</h1>

    @if (count($comments))
        @foreach ($comments as $comment)
            <div class="comment d-flex align-items-center">
                <a class="link" href="/intern/profile/{{$comment['sender_id']}}"><img class="comment-picture actual"src="{{$comment['sender_profile']}}" alt=""></a>
                <div class="comment-container d-flex justify-content-between">
                    <div class="w-100">
                        <h6><a class="link" href="/intern/profile/{{$comment['sender_id']}}">{{$comment['sender']}}</a> <span class="posted desktop-inline"> • Posted on {{date("M d, Y", strtotime($comment['created_at']))}}</span></h6>
                        <span class="posted mobile"> Posted on {{date("M d, Y", strtotime($comment['created_at']))}}</span>
                        <p>{{$comment['comment']}}</p>
                    </div>
                </div>
            </div>
        @endforeach
    @endif

    <div class="add-comment d-flex justify-content-between" >
        <form class="d-flex justify-content-between" action="{{route('intern.comment', ['id'=>$searched_user->id])}}" method="POST">
            @csrf
            <img class="comment-picture"src="{{asset($user->profile_picture)}}" alt="">
            <input class="comment-text" name="comment" type="text" placeholder="Add a comment..." autocomplete="off"/>
            <button type="submit" class="post-button button button-main">
                <span class="submit-desktop">Post <i class="far fa-paper-plane"></i></span>
                <span class="submit-mobile"><i class="far fa-paper-plane"></i></span>
            </button>
        </form>
    </div>
</div>
<div class="modal fade" id="reportModal" tabindex="-1" role="dialog" aria-labelledby="reportModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Report {{explode(' ', $searched_user->name)[0]}}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <a href="#" id="Account-{{$searched_user->name}}-{{$user->name}}" class="button button-report">Spam</a>
                <a href="#" id="Account-{{$searched_user->name}}-{{$user->name}}" class="button button-report">Sexual Abuse</a>
                <a href="#" id="Account-{{$searched_user->name}}-{{$user->name}}" class="button button-report">Violent or Dangerous</a>
                <a href="#" id="Account-{{$searched_user->name}}-{{$user->name}}" class="button button-report">Hate speech, Harassment, or Bullying</a>
            </div>
        </div>
    </div>
</div>
@endsection