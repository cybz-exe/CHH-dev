<?php

namespace App\Http\Controllers;

use App\Models\Proposal;
use Illuminate\Http\Request;

class EventProposalController extends Controller
{
    public function eventproposal(Proposal $proposal)
    {
        // $proposal = Proposal::all();

        return view('pages.member.eventproposal', ['data' => $proposal]);
    }

    public function addProposal(Request $request)
    {
        $data = [
            //db_column_name => $request->name;
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'event_name' => $request->event_name,
            'event_description' => $request->event_description,
            'doe' => $request->doe,
            'location' => $request->location,

        ];

        // var_dump($data);
        $newProposal = Proposal::create($data);
        return redirect(route('eventproposal'));
    }

    public function admineventproposal()
    {

        return view('pages.admin.admineventproposal');
    }

    public function showProposal(Proposal $proposal){
        $data = Proposal::all();

        return view('pages.admin.admineventproposal', compact('data'));
    }

    public function deleteProposal(Proposal $proposal)
{
    $proposal->delete();
    return redirect(route('admineventproposal'));
    
}

    


}
