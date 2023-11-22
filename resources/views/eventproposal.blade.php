@extends('layout')
@section('content')
@include('navbar')


<div class="container">
    <h1 class="mt-5">this is the event proposal page sample</h1>
</div>

<div class="container">

    <p class="mt-2" style="font-weight:bold;">Got some event ideas for the organization?  </p>
    <form method="POST" action="{{ route('eventproposal') }}">
        @csrf
<div class="row g-3 mt-3">
    <div class="col-md-5">
    <label for="members-name" class="form-label">Member's First Name</label>
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Juan" name="first_name">
</div>
    <div class="col-md-5">
        <label for="members-name" class="form-label">Member's Last Name</label>
        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Karlos" name="last_name">

    </div>
</div>

    <div class="row g-2 mt-3">
        <div class="col-md-4">
            <label for="members-name" class="form-label">Event Idea Name</label>
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Punta tayo sa Araw" name="event_name">
        </div>
    </div>

    <div class="row g-2 mt-3">
        <label class="form-label">Event Description</label>
        <div class="form-floating">
        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px" name="event_description"></textarea>
        <label for="floatingTextarea2">Sa araw ma init don ah</label>
          </div>
    </div>

    <div class="row g-2 mt-3">
        <div class="col-md-5">
            <label for="members-name" class="form-label">Date of Event</label>
            <input type="date" class="form-control" id="formGroupExampleInput" placeholder="Example input placeholder" name="doe">
        </div>

        <div class="col-md-5">
            <label for="members-name" class="form-label">Location</label>
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Edi sa Gabi ako Pupunta" name="location">
        </div>

    </div>


    <div class="row mt-3">
        <div class="col-md-4 offset-md-8">
            <div class="d-flex justify-content-end">
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="submit" class="btn btn-danger ms-2" ><a href="/event" style="text-decoration: none; color: white;">Cancel</a></button>
            </div>
        </div>
    </div>
</form>
</div>
@endsection 