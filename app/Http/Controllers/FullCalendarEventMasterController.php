<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;

use App\Models\Event;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Redirect,Response;


class FullCalendarEventMasterController extends Controller

{

    public function index()

    {
       $userId=auth()->user()->id;
        $event=DB::select('select * from events');
        //console.log($event);
        if(request()->ajax())

        {

            foreach ($event as $v){
                if($userId==$v->userId){
                    $start = (!empty($_GET["start"])) ? ($_GET["start"]) : ('');
                    //$start=(!empty($v->start)) ? ($v->start) : ('');
                    $end = (!empty($_GET["end"])) ? ($_GET["end"]) : ('');

                    //$end= (!empty($v->end)) ? ($v->end) : ('');
                    $data = Event::whereDate('start', '>=', $start)->whereDate('end',   '<=', $end)->get(['id','title','start', 'end','userId']);

                    return Response::json($data);

                }
           }
            /*$start = (!empty($_GET["start"])) ? ($_GET["start"]) : ('');

            $end = (!empty($_GET["end"])) ? ($_GET["end"]) : ('');

            $data = Event::whereDate('start', '>=', $start)->whereDate('end',   '<=', $end)->get(['id','title','start', 'end']);

            return Response::json($data);*/

        }

        return view('home');

    }

    public function create(Request $request)

    {
        $insertArr = [ 'title' => $request->title,
            'start' => $request->start,
            'end' => $request->end,
            'userId'=>$request->userId,
        ];
        $event = Event::insert($insertArr);
        return Response::json($event);
    }
    public function update(Request $request)

    {

        $where = array('id' => $request->id);
        $updateArr = ['title' => $request->title,
            'start' => $request->start,
            'end' => $request->end,
        ];
        $event  = Event::where($where)->update($updateArr);
        return Response::json($event);
    }





    public function destroy(Request $request)
    {
        $event = Event::where('id',$request->id)->delete();
        return Response::json($event);
    }

}
