<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

use App\Task;
use App\User;
use App\Employee;
use App\Message;
use Pusher\Pusher;

class EmployeeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:employee');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    // Views Section >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
    public function index()
    {
        $interns = User::where('id', '!=', Auth::id())->get();
        $employees = Employee::where('id', '!=', Auth::id())->get();
        $all_users = $interns->merge($employees);

        $params = [
            'all' => $all_users,
            'user' => Auth::user()
        ];
        return view('employee.employee', $params);
    }

    public function assign()
    {
        $interns = User::where('id', '!=', Auth::id())->get();
        $employees = Employee::where('id', '!=', Auth::id())->get();
        $all_users = $interns->merge($employees);

        $params = [
            'users' => User::all(),
            'all' => $all_users,
            'user' => Auth::user()
        ];
        return view('employee.assign', $params);
    }
    
    public function files()
    {
        $interns = User::where('id', '!=', Auth::id())->get();
        $employees = Employee::where('id', '!=', Auth::id())->get();
        $all_users = $interns->merge($employees);

        $params = [
            'all' => $all_users,
            'user' => Auth::user()
        ];
        return view('employee.files', $params);
    }

    public function share()
    {
        $interns = User::where('id', '!=', Auth::id())->get();
        $employees = Employee::where('id', '!=', Auth::id())->get();
        $all_users = $interns->merge($employees);

        $params = [
            'all' => $all_users,
            'user' => Auth::user()
        ];
        return view('employee.share', $params);
    }

    public function intern()
    {
        $interns = User::where('id', '!=', Auth::id())->get();
        $employees = Employee::where('id', '!=', Auth::id())->get();
        $all_users = $interns->merge($employees);

        $it = ['IT Department',User::where('department', 'IT department')->get(), '1'];
        $writing = ['Animation Department',User::where('department', 'Animation department')->get(), '2'];
        $animation = ['Writing Department',User::where('department', 'Writing department')->get(), '3'];
        $transmedia = ['Transmedia Department',User::where('department', 'Transmedia department')->get(), '4'];
        $marketing = ['Marketing Department',User::where('department', 'Marketing department')->get(), '5'];
        $hr = ['HR, Admin, Finance',User::where('department', 'HR, Admin, Finance')->get(), '6'];

        $params = [
            'users' => User::where('department', Auth::user()->department)->get(),
            'departments' => [
                'it' => $it,
                'writing' => $writing,
                'animation' => $animation,
                'transmedia' => $transmedia,
                'marketing' => $marketing,
                'hr' => $hr,
            ],
            'tasks' => Task::all(),
            'all' =>$all_users,
            'user' => Auth::user()
        ];
        return view('employee.intern', $params);
    }

    public function download($name) {
        $path = 'public/tasks/' . $name;
        return Storage::download($path);
    }

    public function getNotifications() {
        $user = Auth::user();
        return view('intern.part.notif', ['user' => $user]);
    }

    // Post Section >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
    public function createTask(Request $request) 
    {
        if (isset($request->title) && isset($request->description) && isset($request->date) && isset($request->assign) && isset($request->department)) {
            $task = new Task();
            $task->task_name = $request->title;
            $task->intern_id = explode('-', $request->assign)[1];
            $task->task_assigned_by = Auth::user()->name;
            $task->task_assigned_to = explode('-', $request->assign)[0];
            $task->task_description = $request->description;
            $task->task_date_created = date("Y/m/d");
            $task->task_due_date = $request->date;
            $task->task_is_submitted = 0;
            $task->task_grade = 0;
            $task->task_department = $request->department;
            $task->save();

            return back()
                ->with('message', 'Task is created');
        }

        return back()
                ->with('message', 'Please fill out all forms');
    }

    public function createIntern(Request $request) {

        if (isset($request->name) && isset($request->email) && isset($request->department) && isset($request->course) && isset($request->school) && isset($request->level) && isset($request->start) && isset($request->end)) {
            $user = new User();
            $password = str_random(8);
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = Hash::make($password);
            $user->generated_password = $password;
            $user->department = $request->department;
            $user->course = $request->course;
            $user->school = $request->school;
            $user->year = $request->level;
            $user->date_started = $request->start;
            $user->end_date = $request->end;
            $user->role = "intern";
            $user->introduction = "Hi there! I'm " . $request->input('name') . " from " .$request->input('school'). " and I'm an intern from " . $request->input('department'). ". You can freely send me a message by clicking the 'Send Button' from the right.";
            $user->profile_picture = '/storage/avatars/default_profile.png';
            $user->save();

            $message = "Intern " . $request->input('name') . " with default password of " . $password . " is now created";
            return back()
                ->with('message', $message);
        } 

        return back()
                ->with('message', 'Please fill out all form');
    }

    public function gradeWork($tid, Request $request) {
        $task = Task::where('task_id', $tid)->get()[0];
        $task->task_grade = $request->grade;
        $task->save();

        return back();
    }

    // Message Section >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
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
