<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Acaronlex\LaravelCalendar\Calendar;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $events = [];

        $events[] = Calendar::event(
                        'Event One', //event title
                        false, //full day event?
                        '2021-07-11T0800', //start time (you can also use Carbon instead of DateTime)
                        '2021-07-12T0800', //end time (you can also use Carbon instead of DateTime)
                        0 //optionally, you can specify an event ID
        );

        $events[] = Calendar::event(
                        "RWP Lectures", //event title
                        true, //full day event?
                        new \DateTime('2021-07-13'), //start time (you can also use Carbon instead of DateTime)
                        new \DateTime('2021-07-13'), //end time (you can also use Carbon instead of DateTime)
                        'stringEventId' //optionally, you can specify an event ID
        );

        $calendar = new Calendar();
        $calendar->addEvents($events)
                ->setOptions([
                    'locale' => 'en',
                    'firstDay' => 0,
                    'displayEventTime' => true,
                    'selectable' => true,
                    'initialView' => 'dayGridMonth',
                    'headerToolbar' => [
                        'end' => 'today prev,next dayGridMonth'
                    ]
        ]);
        $calendar->setId('1');
        $calendar->setCallbacks([
            'select' => 'function(selectionInfo){}',
            'eventClick' => 'function(event){}'
        ]);
        return view('home', compact('calendar'));
    }
}
