@extends('layouts.layout')
@section('content')
@include('layouts.navbar')


<div class="container">
    <h1 class="fw-bold mt-4">Event Proposal Registration</h1>
</div>

<div class="container">

    <p class="mt-2" style="font-weight:bold;">Got some event ideas for the organization?  </p>
    <form method="POST" action="{{ route('eventproposal') }}">
        @csrf
<div class="row g-3 mt-3">
    <div class="col-md-5">
    <label for="members-name" class="form-label">Member's First Name</label>
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="" name="first_name">
</div>
    <div class="col-md-5">
        <label for="members-name" class="form-label">Member's Last Name</label>
        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="" name="last_name">

    </div>
</div>

    <div class="row g-2 mt-3">
        <div class="col-md-4">
            <label for="members-name" class="form-label">Event Idea Name</label>
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="" name="event_name">
        </div>
    </div>

    <div class="row g-2 mt-3">
        <label class="form-label">Event Description</label>
        <div class="">
            <textarea class="form-control" placeholder="Enter your description." id="floatingTextarea2" style="height: 100px" name="event_description"></textarea>
        <label for="floatingTextarea2"></label>
          </div>
    </div>

    <div class="row g-2 mt-3">
        <div class="col-md-5">
            <label for="members-name" class="form-label">Date of Event</label>
            <input type="date" class="form-control" id="formGroupExampleInput" placeholder="Example input placeholder" name="doe">
        </div>

        <div class="col-md-5">
            <label for="members-name" class="form-label">Location</label>
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="" name="location">
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