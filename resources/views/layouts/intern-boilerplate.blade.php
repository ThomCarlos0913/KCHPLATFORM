<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="/assets/kch-icon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="/assets/fontawesome/all.min.css">
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="{{$css}}">
    <title>{{$title}} | {{config('app.name')}}</title>
</head>
<body>
    @include('inc.navbar')
    <div class="container">
        @yield('content')
        @include('inc.footer')
    </div>

    <div class="messages-container">
        <h1 class="messages-container-header">Messages</h1>
        <div class="row message-row">
            <div class="col-md-4 user-container">
                <div class="user-wrapper">
                    <ul class="users">
                        @foreach ($all as $user)
                            <li class="user {{$user->id}}" id="{{$user->id}}">
                                @if($user->unread)
                                    <span class="pending"></span>
                                @endif    
                                <div class="media d-flex align-items-center">
                                    <div class="media-left">
                                        <img src="{{$user->profile_picture}}" alt="" class="media-object">
                                    </div>
                                    <div class="media-body">
                                        <p class="name">{{$user->name}}</p>
                                        <p class="email">{{$user->department}}</p>
                                    </div>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-md-8 message-container d-flex flex-column justify-content-between" id="messages"> 
            </div>
        </div>
    </div>

    <script src="https://js.pusher.com/7.0/pusher.min.js"></script>
    <script>
        var receiver_id = '';
        var my_id = '{{ Auth::user()->id }}';

        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });


            // REPORT SECTION >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
            $('.button-report').click(function() {
                $.ajax({
                    type: 'POST',
                    url: '/report/' + $(this).attr('id') + '-' + $(this).html(),
                    success: function(data) {
                        $('#reportModal').modal('toggle');
                    },
                });
            })


            // PUSHER SECTION >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
            Pusher.logToConsole = true;
            var pusher = new Pusher('17d8c3dec49148aed26a', {
                cluster: 'ap1'
            });

            var channel = pusher.subscribe('my-channel');
            channel.bind('my-event', function(data) {
                if (data.type == "comment" || data.type == "task") {
                    if (data.to == my_id) {
                        $('.bell-icon').attr('src', '/assets/bell-notif.svg');
                    }
                }
                if (data.type == "message") {
                    if (my_id == data.from) {
                        $('.' + data.to).click();
                    }
                    else if (my_id == data.to) {
                        if (receiver_id == data.from) {
                            $("." + data.from).click();
                        }
                        else {
                            var pending = parseInt($('.' + data.from).find('.pending').html());

                            if (pending) {
                                $('.' + data.from).find('.pending').html(pending + 1);
                            }
                            else {
                                $('.' + data.from).append('<span class="pending"></span>')
                            }
                        }
                    }
                }
            });

            // NOTIFICATION SECTION >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
            $('.bell-icon').click(function() {
                $.ajax({
                    type: 'get',
                    url: '/intern/notif/',
                    success: function(data) {
                        $("#notifications").html(data);
                        $('.bell-icon').attr('src', '/assets/bell.svg');
                    }
                });
            });

            $("#dismiss").click(function() {
                $.ajax({
                    type: 'GET',
                    url: '/intern/dismiss',
                    success: function(data) {
                        $("#notifications").html(data);
                    }
                });
            });

            // MESSAGE SECTION >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
            // Open Chat Box >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
            function openChat() {
                $('.messages-container').toggleClass("open");
            } 
            
            $('.messages-container-header').click(openChat);


            // Get clicked used messages >>>>>>>>>>>>>>>>>>
            function fetchMessages() {
                $.ajax({
                    type: 'get',
                    url: '/intern/message/' + receiver_id,
                    success: function(data) {
                        $("#messages").html(data);
                        
                        scrollToBottom();
                    }
                });
            }

            function getMessage() {
                $('.user').removeClass('active');
                $(this).addClass('active');
                $(this).find('.pending').remove();
                receiver_id = $(this).attr('id');
                fetchMessages();
            }

            $('.user').click(getMessage);

            // Redirect user to chat when "Send Message" button is clicked
            $('.send-message-button').click(function() {
                openChat();
                receiver_id = $(this).attr('id');
                $('.user').removeClass('active');
                $('.' + receiver_id).addClass('active');
                fetchMessages();
            })


            // Send message to database >>>>>>>>>>>>>>>>>>>
            $(document).on('keyup', '.input-text input', function(e) {
                var message = $(this).val();

                if (e.keyCode == 13 && message != '' && receiver_id != '')   {
                    $(this).val('');
                    
                    var data = {
                        'receiver_id': receiver_id,
                        'message': message
                    };

                    $.ajax({
                        type: "post",
                        url: "/intern/message",
                        data: data,
                        complete: function() {
                            scrollToBottom()
                        }
                    })
                }
            }); 

            function scrollToBottom() {
            $('.message-wrapper').animate({
                scrollTop: $('.message-wrapper').get(0).scrollHeight
            }, 50);
        }
        });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>