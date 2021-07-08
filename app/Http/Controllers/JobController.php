<?php

namespace App\Http\Controllers;

use Acaronlex\LaravelCalendar\Calendar;
use Illuminate\Http\Request;
use function view;

class JobController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        return view('job.listing');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('job.create'); //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function calender() {
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
                        'end' => 'today prev,next dayGridMonth timeGridWeek timeGridDay'
                    ]
        ]);
        $calendar->setId('1');
        $calendar->setCallbacks([
            'select' => 'function(selectionInfo){}',
            'eventClick' => 'function(event){}'
        ]);

        return view('job.calender', compact('calendar')); //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        return view('job.review'); //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
         return view('job.update'); //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        //
    }

}
