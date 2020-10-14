<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
class EmployeeLoginController extends Controller
{
    public function __construct()
    {
      $this->middleware('guest:employee');
    }

    public function showLoginForm()
    {
      $params = [
        'title' => 'Employee Portal',
        'css' => '/css/employees-login.css'
      ];
      return view('auth.employee-login', $params);
    }

    public function login(Request $request)
    {
      $this->validate($request, [
        'email' => 'required|email',
        'password' => 'required|min:6'
      ]);
      if(Auth::guard('employee')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)){
        return redirect()->intended(route('employee.dashboard'));
      }

      return redirect()->back()->withInput($request->only('email', 'remember'));

    }
}
