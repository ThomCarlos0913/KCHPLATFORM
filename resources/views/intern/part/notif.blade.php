@if (count($user->notifications) > 0)
    @foreach ($user->notifications as $notif)
        <a class="dropdown-item notif-item d-flex align-items-center" href="{{route('intern.notif', ['id' => $notif->id, 'uid'=>$notif->data['receiver_id']])}}">
            <img class="notif-icon" src="{{$notif->data['sender_pic']}}" alt="pic">
            <div class="notif-messaage d-flex justify-content-between align-items-center">
                <div>
                    <p>{{$notif->data['notif_message']}}</p>
                    <small>{{date("M d, Y", strtotime($notif->created_at))}}</small>
                </div>
                @if (!isset($notif->read_at))
                    <div class="unread-marker">
                        <div class="marker"></div>
                    </div>
                @endif
            </div>
        </a>
    @endforeach
@else
    <div class="no-notification d-flex flex-column justify-content-center align-items-center">
        <img class="empty-icon" src="/assets/no-data.svg" >
        <p class="empty-message">No notifications</p>
    </div>
@endif