<?php

namespace App\Http\Controllers;
use Analytics;
use Spatie\Analytics\Period;
use App\Libraries\GoogleAnalytics;

use Illuminate\Http\Request;

class AnalyticsController extends Controller
{
    public function gAreport(){

    $analyticsData = Analytics::fetchVisitorsAndPageViews(Period::days(7));
    return view('Backend.ga-report', ['analyticsData' => $analyticsData]);
    }
}
