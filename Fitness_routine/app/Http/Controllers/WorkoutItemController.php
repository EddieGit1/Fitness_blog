<?php

namespace App\Http\Controllers;

use App\Category;
use App\WorkoutItem;
use http\Params;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WorkoutItemController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function profile(){
        $workoutItems = WorkoutItem::all()->whereIn('user_id', Auth::id());
        return view('profile', compact('workoutItems'));
    }

    public function index()
    {

        //
        $workoutItems = WorkoutItem::all();
        return view('home', compact('workoutItems'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('create',['categories'=>Category::all()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'full_name'=>'required|string|max:50',
            'workout_title'=>'required|string|max:50',
            'category'=>'required',
            'monday'=>'required|string|max:255',
            'tuesday'=>'required|string|max:255',
            'wednesday'=>'required|string|max:255',
            'thursday'=>'required|string|max:255',
            'friday'=>'required|string|max:255',
            'saterday'=>'required|string|max:255',
            'sunday'=>'required|string|max:255',
        ]);

        $workoutItem = new Workoutitem([
            'full_name' => $request->get('full_name'),
            'workout_title' => $request->get('workout_title'),
            'category_id'=> $request->get('category'),
            'monday' => $request->get('monday'),
            'tuesday' => $request->get('tuesday'),
            'wednesday' => $request->get('wednesday'),
            'thursday' => $request->get('thursday'),
            'friday' => $request->get('friday'),
            'saterday' => $request->get('saterday'),
            'sunday' => $request->get('sunday'),
        ]);

        $workoutItem->user_id = Auth::user()->id;

        $workoutItem->save();

        return redirect('/home')->with('succes', 'Post saved!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Show a single resource.
        $workoutItem = WorkoutItem::findOrFail($id);
        if ($workoutItem === null) {
            abort(404, "Dit game item is helaas niet gevonden");
        }

        return view('detail', compact('workoutItem'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $workoutItem = workoutItem::find($id);
        if($workoutItem == null){
            abort(404, "Geen workout routine gevonden");
        }
        $categories = Category::all();

        //Show a view to edit an existing resource.
        return view('edit',
            //compact('genre'),
            compact('workoutItem', 'categories'));
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        //
        request()->validate([
            'full_name'=>'required|string|max:50',
            'workout_title'=>'required|string|max:50',
            'category'=>'required|int',
            'monday'=>'required|string|max:255',
            'tuesday'=>'required|string|max:255',
            'wednesday'=>'required|string|max:255',
            'thursday'=>'required|string|max:255',
            'friday'=>'required|string|max:255',
            'saterday'=>'required|string|max:255',
            'sunday'=>'required|string|max:255',

        ]);

        $workoutItem = WorkoutItem::find($id);
        $workoutItem->full_name = request('full_name');
        $workoutItem->workout_title = request('workout_title');
        $workoutItem->monday = request('monday');
        $workoutItem->tuesday = request('tuesday');
        $workoutItem->wednesday = request('wednesday');
        $workoutItem->thursday = request('thursday');
        $workoutItem->friday = request('friday');
        $workoutItem->saterday = request('saterday');
        $workoutItem->sunday = request('sunday');
        $workoutItem->category_id= request('category');
        $workoutItem->save();


        return redirect('/home')->with('succes', 'Post saved!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $workoutItem = workoutItem::find($id);
        $workoutItem->delete();

        return redirect('/home')->with('succes', 'Workout Item deleted');
    }
}
