<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Report;

class PagesController extends Controller
{
    public function index() {
        $params = [
            'title' => 'Home',
            'css' => 'css/index.css'
        ];
        return view('index', $params);
    }

    public function report($param) {
        $payload = explode('-', $param);
        $report = new Report();
        $report->report_name = $payload[0] . " - " . $payload[3];
        $report->reported_account = $payload[1];
        $report->reporter_account = $payload[2];
        $report->save();

        return "Done"; 
    }
}
