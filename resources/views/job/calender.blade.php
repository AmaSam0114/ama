
@extends('layouts.app')
@section('content')
<section class="fluid-container">
    <div class="row">
        <div class="col-sm-12">
            <nav aria-label="breadcrumb">
                <h2>Job Calender</h2>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Calender</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Filed Area -->
    <div class="row calender-area mt-5">
        <div class="col-sm-12">
            <div id='calendar'>
                {!! $calendar->calendar() !!}
                {!! $calendar->script() !!}
            </div>
        </div>
    </div>
</section>
@endsection
