<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use App\Task;
Use App\User;
Use App\Employee;
use App\Comment;
use App\Message;
use App\Stream;
use App\Notifications\CommentPosted;
use App\Notifications\TaskUploaded;
use Pusher\Pusher;


class InternController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        
    }

    public function index() {
        $id = Auth::id();
        $user = Auth::user();
        $tasks = Task::where('intern_id', $id)->orderBy('task_id', 'asc')->take(5)->get();

        $interns = User::where('id', '!=', Auth::id())->get();
        $employees = Employee::where('id', '!=', Auth::id())->get();
        $all_users = $interns->merge($employees);
        $stream = Stream::orderBy('stream _id', 'asc')->take(5)->get();
        
        $params = [
            'title' => 'Intern Dashboard',
            'css' => '/css/dashboard.css',
            'tasks' => $tasks,
            'user' => $user,
            'all' => $all_users,
            'stream' => $stream
        ];

        return view('intern.home', $params);
    }

    public function work($filter) {
        $id = Auth::id();
        $user = Auth::user();
        $interns = User::where('department', $user->department)->get();

        switch ($filter) {
            case 'all':
                $tasks = Task::where('intern_id', $id)->paginate(5);
                break;
            case 'submitted':
                $tasks = Task::where('intern_id', $id)->where('task_is_submitted', 1)->paginate(5);
                break;
            case 'unfinished':
                    $tasks = Task::where('intern_id', $id)->where('task_is_submitted', 0)->paginate(5);
                    break;
            case 'due':
                    $tasks = Task::where('intern_id', $id)->where('task_due_date', '<', date("Y/m/d"))->paginate(5);
                    break;
        }

        $interns = User::where('id', '!=', Auth::id())->get();
        $employees = Employee::where('id', '!=', Auth::id())->get();
        $all_users = $interns->merge($employees);

        $params = [
            'title' => 'Your Work',
            'css' => '/css/work.css',
            'tasks' => $tasks,
            'interns' => $interns,
            'user' => $user,
            'all' => $all_users
        ];

        return view('intern.work', $params)->with('filter', $filter);
    }

    public function people() {
        $user = Auth::user();
        $it_interns = User::where("department", "IT department")->get();
        $animation_interns = User::where("department", "Animation department")->get();
        $writing_interns = User::where("department", "Writing department")->get();
        $interns = User::where('id', '!=', Auth::id())->get();
        $employees = Employee::where('id', '!=', Auth::id())->get();
        $all_users = $interns->merge($employees);

        $params = [
            'title' => 'People',
            'css' => '/css/people.css',
            'it_interns' => $it_interns,
            'animation_interns' => $animation_interns,
            'writing_interns' => $writing_interns,
            'user' => $user,
            'all' => $all_users
        ];

        return view('intern.people', $params);
    }

    public function profile($id) {
        $user = Auth::user();
        $searched_user = User::where('id', $id)->get();

        $comments = Comment::where('receiver_id', $searched_user[0]->id)->get();
        $interns = User::where('id', '!=', Auth::id())->get();
        $employees = Employee::where('id', '!=', Auth::id())->get();
        $all_users = $interns->merge($employees);

        $comment_package = [];
        foreach ($comments as $comment) {
            $sender = User::where('id', $comment->sender_id)->get()[0];

            $temp_comment = [
                'comment' => $comment->comment_text,
                'sender_profile' => $sender->profile_picture,
                'sender' => $sender->name,
                'created_at' => $comment->created_at,
                'sender_id' => $comment->sender_id
            ];
            array_push($comment_package, $temp_comment);
        }
 
        $params = [
            'title' => 'User Profile',
            'css' => '/css/profile.css',
            'user' => $user,
            'searched_user' => $searched_user[0],
            'comments' => $comment_package,
            'all' => $all_users
        ];

        return view('intern.profile', $params);
    }

    public function uploadComment($id, Request $request) {

        $sender = Auth::user();
        $receiver = User::where('id', $id)->get()[0];

        $comment = new Comment;
        $comment->sender_id = $sender->id;
        $comment->receiver_id = $receiver->id; 
        $comment->comment_text = $request->comment;
        $comment->comment_date_created = date("Y/m/d");
        $comment->save();

        $comment_package = [
            'sender_id' => $sender->id,
            'receiver_id' =>$receiver->id,
            'sender_pic' => $sender->profile_picture,
            'sender_name' => $sender->name,
            'comment_text'=>$request->comment
        ];

        $receiver->notify(new CommentPosted($comment_package));

        $options = array(
            'cluster' => 'ap1',
            'useTLS' => true
        );

        $pusher = new Pusher(
            env('PUSHER_APP_KEY'),
            env('PUSHER_APP_SECRET'),
            env('PUSHER_APP_ID'),
            $options
        );

        $data = ['type' => 'comment', 'to' => $receiver->id];
        $pusher->trigger('my-channel', 'my-event', $data);

        return back();
    }

    public function getTask($id) {
        $user = Auth::user();
        $tasks = Task::where('task_id', $id)->get();
        $interns = User::where('id', '!=', Auth::id())->get();
        $employees = Employee::where('id', '!=', Auth::id())->get();
        $all_users = $interns->merge($employees);

        $params = [
            'title' => 'Intern Dashboard',
            'css' => '/css/dashboard.css',
            'tasks' => $tasks,
            'user' => $user,
            'all' => $all_users
        ];

        return view('intern.task', $params);
    }

    public function settings() {
        $user = Auth::user();
        $interns = User::where('id', '!=', Auth::id())->get();
        $employees = Employee::where('id', '!=', Auth::id())->get();
        $all_users = $interns->merge($employees);

        $params = [
            'title' => 'Settings',
            'css' => '/css/settings.css',
            'user' => $user,
            'all' => $all_users
        ];

        return view('intern.settings', $params);
    }

    public function taskupload(Request $request, $tid) {
        $request->validate([
            'file' => 'required|mimes:csv,txt,xlx,xls,pdf,jpeg,jpg,png,svg|max:2048',
        ]);

        $task = Task::where('task_id', $tid)->get()[0];

        if ($request->file()) {
            $fileName = $request->file->getClientOriginalName();
            $filepath = $request->file('file')->storeAs('tasks', $fileName, 'public');

            $task->task_link = '/storage/' . $filepath;
            $task->task_is_submitted = 1;

            // Push to application stream
            $stream = new Stream();
            $stream->stream_message = explode(" ", Auth::user()->name)[0] . " completed his task: " . $task->task_name;

            // Notify Users
            $options = array(
                'cluster' => 'ap1',
                'useTLS' => true
            );
    
            $pusher = new Pusher(
                env('PUSHER_APP_KEY'),
                env('PUSHER_APP_SECRET'),
                env('PUSHER_APP_ID'),
                $options
            );

            $user = Auth::user();
            $users_to_be_notified = User::where('department', $user->department)->where('id', '!=', Auth::user()->id)->get();

            foreach ($users_to_be_notified as $user) {
                
                $task_package = [
                    'task_id' => $task->task_id,
                    'receiver_id' => $user->id,
                    'sender' => Auth::user()->name,
                    'sender_id' => Auth::user()->id,
                    'task_name' =>$task->task_name,
                    'sender_pic' => Auth::user()->profile_picture,
                ];

                $user->notify(new TaskUploaded($task_package));
                $data = ['type' => 'task', 'to' => $user->id];
                $pusher->trigger('my-channel', 'my-event', $data);
            }

            $employees_to_be_notified = Employee::where('department', $user->department)->where('id', '!=', Auth::user()->id)->get();

            foreach ($employees_to_be_notified as $employee) {
                $employee->notify(new TaskUploaded($task_package));
            }
            
            $task->save();
            $stream->save();
            return back();
        }
    }

    public function download($name) {
        $path = 'public/tasks/' . $name;
        return Storage::download($path);
    }

    public function upload(Request $request) {

        $current_user = Auth::user();
        $request->validate([
            'file' => 'mimes:csv,txt,xlx,xls,pdf,jpeg,jpg,png,svg|max:2048',
            'email' => 'email',
            'password' => 'confirmed',
        ]);

        $user = User::where('id', $current_user->id)->get()[0];

        if ($request->file()) {
            $filename = $current_user->id . '_' . $current_user->name;
            $filepath = $request->file('file')->storeAs('avatars', $filename, 'public');

            $user->profile_picture = '/storage/' . $filepath;
        }
        
        $user->email = $request->input('email');
        if (isset($request->password)) {
            $user->password = Hash::make($request->input('password'));
        }
        $user->introduction = $request->input('introduction');
        $user->banner = $request->input('banner');
        $user->save();
        
        return back()
            ->with('message','Settings successfully changed!');
    }


    // Notifications
    public function getNotifications() {
        $user = Auth::user();
        return view('intern.part.notif', ['user' => $user]);
    }

    public function dismissNotif() {
        $user = Auth::user();
        $user->unreadNotifications->markAsRead();
        $user->notifications()->delete();
        return view('intern.part.notif', ['user' => $user]);
    }

    public function notif($id, $uid) {
        $user = User::where('id', $id)->get()[0];
        $notif = $user->notifications->where('id', $uid);

        $user->notifications->where('id', $uid)->markAsRead();
        foreach ($notif as $n) {
            switch ($n->type) {
                case 'App\\Notifications\\TaskUploaded':
                    return redirect()->route('intern.task', $n['data']['task_id']);
                    break;
                case 'App\\Notifications\\CommentPosted':
                    return redirect()->route('intern.profile', $id);
                    break;
            }
        }
    }


    // Messages
    public function getMessage($user_id)
    {
        $my_id = Auth::user()->id;

        Message::where(['sender_id' => $user_id, 'receiver_id' => $my_id])->update(['is_read' => 1]);

        $messages = Message::where(function ($query) use ($user_id, $my_id) {
            $query->where('sender_id', $user_id)->where('receiver_id', $my_id);
        })->orWhere(function ($query) use ($user_id, $my_id) {
            $query->where('sender_id', $my_id)->where('receiver_id', $user_id);
        })->get();

        try {
            $user = User::where('id', $user_id)->get()[0];
        } catch (\Throwable $th) {
            $user = Employee::where('id', $user_id)->get()[0];
        }

        return view('intern.part.message', ['messages' => $messages, 'user' => $user]);
    }

    public function sendMessage(Request $request) {
        $from = Auth::user()->id;
        $to = $request->receiver_id;
        $user_message = $request->message;
        
        $message = new Message();
        $message->sender_id = $from;
        $message->receiver_id = $to;

        try {
            $message->sender_avatar = User::where('id', $from)->get()[0]->profile_picture;
        } catch (\Throwable $th) {
            $message->sender_avatar = Employee::where('id', $from)->get()[0]->profile_picture;
        }

        try {
            $message->receiver_avatar = User::where('id', $to)->get()[0]->profile_picture;
        } catch (\Throwable $th) {
            $message->receiver_avatar = Employee::where('id', $to)->get()[0]->profile_picture;
        }

        
        $message->message = $user_message;
        $message->is_read = 0;
        $message->save();

        $options = array(
            'cluster' => 'ap1',
            'useTLS' => true
        );

        $pusher = new Pusher(
            env('PUSHER_APP_KEY'),
            env('PUSHER_APP_SECRET'),
            env('PUSHER_APP_ID'),
            $options
        );

        $data = ['type' => 'message'  ,'from' => $from, 'to' => $to];
        $pusher->trigger('my-channel', 'my-event', $data);
    }
}
