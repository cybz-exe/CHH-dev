@extends('layouts.layout')
@section('content')
@include('layouts.navbar')

{{-- <div class="position-relative offset-8 sub" style="transform: translateY(-60px);">
    <button class="btn btn-success"><a href="/eventproposal" style="color:white; text-decoration: none">Submit a Proposal</a></button>
</div> --}}

    <div class="container mt-4">
        <h1 class="fw-bold">Calendar of Events</h1>

        <div class="mt-4" id='calendar'></div>
    </div>

        <script>
        $(document).ready(function () {
            var calendar = $('#calendar').fullCalendar({
                editable:true,
                header:{
                    left:'prev,next today',
                    center:'title',
                    right:'month,agendaWeek,agendaDay'
                },
                events:'/event',
                selectable:false,
                selectHelper: true,
                select:function(start, end, allDay)
                {
                    var title = prompt('Event Title:');
        
                    if(title)
                    {
                        var start = $.fullCalendar.formatDate(start, 'Y-MM-DD HH:mm:ss');
        
                        var end = $.fullCalendar.formatDate(end, 'Y-MM-DD HH:mm:ss');
        
                        $.ajax({
                            url:"{{ route('event.store') }}",
                            type:"POST",
                            headers:{
                                'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')
                            },
                            data:{
                                title: title,
                                start: start,
                                end: end,
                                type: 'add'
                            },
                            success:function(data)
                            {
                                calendar.fullCalendar('refetchEvents');
                                alert("Event created");
                            }
                        })
                    }
                },
                editable:false,
                eventResize: function(event, delta)
                {
                    var start = $.fullCalendar.formatDate(event.start, 'Y-MM-DD HH:mm:ss');
                    var end = $.fullCalendar.formatDate(event.end, 'Y-MM-DD HH:mm:ss');
                    var title = event.title;
                    var id = event.id;
                    $.ajax({
                        url:"{{ route('event.store') }}",
                        type:"POST",
                        headers:{
                            'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')
                        },
                        data:{
                            title: title,
                            start: start,
                            end: end,
                            id: id,
                            type: 'update'
                        },
                        success:function(response)
                        {
                            calendar.fullCalendar('refetchEvents');
                            alert("Event updated");
                        }
                    })
                },
                eventDrop: function(event, delta)
                {
                    var start = $.fullCalendar.formatDate(event.start, 'Y-MM-DD HH:mm:ss');
                    var end = $.fullCalendar.formatDate(event.end, 'Y-MM-DD HH:mm:ss');
                    var title = event.title;
                    var id = event.id;
                    $.ajax({
                        url:"{{ route('event.store') }}",
                        type:"POST",
                        headers:{
                            'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')
                        },
                        data:{
                            title: title,
                            start: start,
                            end: end,
                            id: id,
                            type: 'update'
                        },
                        success:function(response)
                        {
                            calendar.fullCalendar('refetchEvents');
                            alert("Event updated");
                        }
                    })
                },
                eventClick:function(event)
                {
                    // if(confirm("Are you sure you want to remove it?"))
                    {
                        var id = event.id;
                        $.ajax({
                            url:"{{ route('event.store') }}",
                            type:"POST",
                            headers:{
                                'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')
                            },
                            // data:{
                            //     id:id,
                            //     type:"delete"
                            // },
                            // success:function(response){
                            //     calendar.fullCalendar('refetchEvents');
                            //     alert("Event deleted");
                            // }
                        })
                    }
                }
            });
        });
        </script>


@endsection 