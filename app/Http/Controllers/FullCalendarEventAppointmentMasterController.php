<?php


namespace App\Http\Controllers;


use App\Models\EventAppointment;
use Illuminate\Http\Request;



use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Redirect,Response;


class FullCalendarEventAppointmentMasterController extends Controller

{

    public function index()

    {
        return view('ent/rendez_vous');

    }
    public function store(){
        $dataEvent=request()->except(['_token','_method']);
        print_r($dataEvent);
    }

    public function show(){

        $data['events']=EventAppointment::all();
        //print_r($data);
        return response()->json($data['events']);
    }

    public function create(Request $request)

    {
        $insertArr = [ 'title' => $request->title,
            'start' => $request->start,
            'end' => $request->end,
            'userId'=>$request->userId,
        ];
        $event = EventAppointment::insert($insertArr);
        return Response::json($event);
    }
    public function update(Request $request)

    {

        $where = array('id' => $request->id);
        $updateArr = ['title' => $request->title,
            'start' => $request->start,
            'end' => $request->end,
        ];
        $event  = EventAppointment::where($where)->update($updateArr);
        return Response::json($event);
    }





    public function destroy($id)
    {
        $event = EventAppointment::findOrFail($id);
        EventAppointment::destroy($id);
        return response()->json($id);
    }

}
