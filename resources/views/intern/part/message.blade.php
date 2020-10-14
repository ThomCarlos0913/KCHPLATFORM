<div class="message-wrapper-header d-flex align-items-center">
    <div class="d-flex align-items-center">
        <img src="{{$user->profile_picture}}" alt="">
        <div>
            <p class="name">{{$user->name}}</p>
            <p class="department">{{$user->department}}</p>
        </div>
    </div>
</div>
<div class="message-wrapper">
    <ul class="messages">
        @foreach ($messages as $message)
            <li class="message clearfix">
                <div class="{{$message->sender_id === Auth::user()->id ? 'sent' : 'received'}}">
                    <p>{{$message->message}}</p>
                    <p class="date">{{date('d M y, h:i a', strtotime($message->created_at))}}</p>
                </div>
            </li>
        @endforeach
    </ul>
</div>
<div class="input-text">
    <input type="text" name="message" class="submit" placeholder="Enter your message here...">
</div>