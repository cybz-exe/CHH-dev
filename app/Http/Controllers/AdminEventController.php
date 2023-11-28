<?php

namespace App\Http\Controllers;

use App\Models\AdminEvent;
use Illuminate\Http\Request;

class AdminEventController extends Controller
{
    public function adminevent(Request $request)
    {
        if ($request->ajax()) {
            $data = AdminEvent::whereDate('start', '>=', $request->start)
                ->whereDate('end',   '<=', $request->end)
                ->get(['id', 'title', 'start', 'end']);

            return response()->json($data);
        }

        return view('pages.admin.adminevent');
    }

    public function store(Request $request)
    {
        switch ($request->type) {
            case 'add':
                $event = AdminEvent::create([
                    'title' => $request->title,
                    'start' => $request->start,
                    'end' => $request->end,
                ]);
                return response()->json($event);
                break;

            case 'update':
                $event = AdminEvent::find($request->id)->update([
                    'title' => $request->title,
                    'start' => $request->start,
                    'end' => $request->end,
                ]);
                return response()->json($event);
                break;

            case 'delete':
                $event = AdminEvent::find($request->id)->delete();
                return response()->json($event);
                break;

            default:
                break;
        }
    }
}
