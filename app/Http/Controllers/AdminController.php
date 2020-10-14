<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Employee;
use App\User;
use App\Task;
use App\Report;

class AdminController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:employee');
    }

    public function index() {

        $params = [
            'title' => "Administrator",
            'css' => '/css/admin.css'
        ];
        return view("admin.home", $params);
    }

    public function getWorks($department) {
        switch ($department) {
            case 'it':
                $tasks = Task::where('task_department', 'IT Department')->get();
                return view('admin.work', ['data'=> $tasks]);
                break;
            case 'animation':
                $tasks = Task::where('task_department', 'Animation Department')->get();
                return view('admin.work', ['data'=> $tasks]);
                break;
            case 'writing':
                $tasks = Task::where('task_department', 'Writing Department')->get();
                return view('admin.work', ['data'=> $tasks]);
                break;
            case 'transmedia':
                $tasks = Task::where('task_department', 'Transmedia Department')->get();
                return view('admin.work', ['data'=> $tasks]);
                break;
            case 'marketing':
                $tasks = Task::where('task_department', 'Marketing Department')->get();
                return view('admin.work', ['data'=> $tasks]);
                break;
            case 'hr':
                $tasks = Task::where('task_department', 'HR Department')->get();
                return view('admin.work', ['data'=> $tasks]);
                break;
            }
    }

    public function getView($name) {

        if ($name == 'reset') {

            $users = User::all();
            $params = [
                'users' => $users
            ];
            return view("admin.reset", $params);
        }

        if ($name == 'user') {

            $users = User::all();
            $employees = Employee::all();
            $params = [
                'users' => $users,
                'employees' => $employees
            ];
            return view("admin.user", $params);
        }
    
        if ($name == 'reports') {
            $reports = Report::orderBy('created_at', 'desc')->get();
            $params = [
                'reports' => $reports
            ];
            return view("admin.reports", $params);
        }

        if ($name == "dash") {
            $params = [
                'numInterns' => count(User::all()),

                'numIT' => count(User::where('department', 'IT department')->get()),
                'numAnimation' => count(User::where('department', 'Animation department')->get()),
                'numWriting' => count(User::where('department', 'Writing department')->get()),
                'numTransmedia' => count(User::where('department', 'Transmedia department')->get()),
                'numMarketing' => count(User::where('department', 'Marketing department')->get()),
                'numHR' => count(User::where('department', 'HR department')->get()),

                'finishedIT' => count(Task::where('task_department', 'IT department')->where('task_is_submitted', 1)->get()),
                'finishedAnimation' => count(Task::where('task_department', 'Animation department')->where('task_is_submitted', 1)->get()),
                'finishedWriting' => count(Task::where('task_department', 'Writing department')->where('task_is_submitted', 1)->get()),
                'finishedTransmedia' => count(Task::where('task_department', 'Transmedia department')->where('task_is_submitted', 1)->get()),
                'finishedMarketing' => count(Task::where('task_department', 'Marketing department')->where('task_is_submitted', 1)->get()),
                'finishedHR' => count(Task::where('task_department', 'HR department')->where('task_is_submitted', 1)->get()),
            ];
            return view("admin.dash", $params);
        }

        return view("admin." . $name);  
    }

    public function create(Request $request) {

        $type = $request->input('type');
        if ($type == '3' or $type == '2') {
            $employee = new Employee();
            $password = str_random(8);
            $employee->name = $request->input('name');
            $employee->email = $request->input('email');
            $employee->password = Hash::make($password);
            $employee->generated_password = $password;
            $employee->department = $request->input('department');
            $employee->position = $request->input('position');
            $employee->level = $type == '3' ? 2 : 3;
            $employee->profile_picture = '/storage/avatars/default_profile.png';
            $employee->save();

            $message = $type == '3' ? 'Employee' : 'Administrator ' . $request->input('name') . " with default password of " . $password . " is now created";
        } else {
            $user = new User();
            $password = str_random(8);
            $user->name = $request->input('name');
            $user->email = $request->input('email');
            $user->password = Hash::make($password);
            $user->generated_password = $password;
            $user->department = $request->input('department');
            $user->course = $request->input('course');
            $user->school = $request->input('school');
            $user->year = $request->input('year');
            $user->date_started = $request->input('startdate');
            $user->end_date = $request->input('enddate');
            $user->role = "intern";
            $user->introduction = "Hi there! I'm " . $request->input('name') . " from " .$request->input('school'). " and I'm an intern from " . $request->input('department'). ". You can freely send me a message by clicking the 'Send Button' from the right.";
            $user->profile_picture = '/storage/avatars/default_profile.png';
            $user->save();

            $message = "Intern " . $request->input('name') . " with default password of " . $password . " is now created";
        }

        return back();
    }

    public function reset(Request $request) {
        $user = User::where('id', $request->id)->get()[0];
        $password = str_random(8);
        $user->password = Hash::make($password);
        $user->generated_password = $password;
        $user->save();
        return 'User ' . $user->name . "'s password is successfully changed to <span class='new-pass'>" . $password . '</span>';
    }
}