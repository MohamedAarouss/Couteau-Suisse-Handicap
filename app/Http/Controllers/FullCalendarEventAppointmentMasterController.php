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
        /*$user=Auth::user();
       $userId=auth()->user()->id;
        $event=DB::select('select * from events');
        //console.log($event);
        $start=array();
        $end=array();*/

        if(request()->ajax())

        {

            /*foreach ($event as $v){
                if($userId==$v->userId){
                    //$start = (!empty($_GET["start"])) ? ($_GET["start"]) : ('');
                    array_push($start,(!empty($v->start)) ? ($v->start) : (''));

                    //$start= (!empty($v->start)) ? ($v->start) : ('');
                    //$end = (!empty($_GET["end"])) ? ($_GET["end"]) : ('');

                    //$end= (!empty($v->end)) ? ($v->end) : ('');
                    array_push($end,(!empty($v->end)) ? ($v->end) : (''));
                    $data = Event::whereDate('start', '>=', $start)->whereDate('end',   '<=', $end)->get(['id','title','start', 'end','userId']);






                }

           }
            return Response::json($data);*/


            $start = (!empty($_GET["start"])) ? ($_GET["start"]) : ('');

            $end = (!empty($_GET["end"])) ? ($_GET["end"]) : ('');

            $data = EventAppointment::whereDate('start', '>=', $start)->whereDate('end',   '<=', $end)->get(['id','title','start', 'end']);

            return Response::json($data);

        }

        return view('ent.rendez_vous');

    }
    public function store(Request $request){
        $dataEvent=request()->all();
        print_r($dataEvent);
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





    public function destroy(Request $request)
    {
        $event = EventAppointment::where('id',$request->id)->delete();
        return Response::json($event);
    }

}
