<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Building;
use App\Model\Room;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $buildings = Building::all();
        return view('admin.index')->with('buildings',$buildings);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // requier form fill in formation
        $validator = $this->validate($request,[
            'name' => 'required',
            'number' => 'required',
            'floor' => 'required|max:20',
        ]);
        // Create Building 
        $building = new Building;
        $building->building_name = $request->input('name');
        $building->total_room =  $request->input('number');
        $building->total_floor = $request->input('floor');
        $building->save();
        // Create Room
        $num = $building->total_room;
        $building_id = $building->id;
        $i = 0;
        while ($i < $num) {
            $room = new Room;
            $room->room_name = 'hello';
            $room->total_student = 10;
            $room->building_id = $building_id;
            $room->save();
            $i +=1;
        }
        return redirect('/admin');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $rooms = Building::find($id)->room;
        $building = Building::find($id);
        $room_per_floor = intval(count($rooms)/$building->total_floor);
        return view('admin.room.showRoom')
        ->with('rooms',$rooms)
        ->with('building',$building)
        ->with('room_per_floor',$room_per_floor);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // // delete buiding
        $building = Building::find($id);
        $building->delete();
        // delete Room on buiding
        Room::where('building_id',$id)->delete();
        
        return redirect('/admin');
       
    }
}
