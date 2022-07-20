<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comic;
use Ramsey\Uuid\Generator\CombGenerator;

class HousesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Comics = Comic::all();
        return view('admin.houses.index', compact('Comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.houses.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        // dd($request->all());
        $formData = $request->all();
        $fumetto = new Comic();
        $fumetto->title = $formData['title'];
        $fumetto->description = $formData['description'];
        $fumetto->thumb = $formData['thumb'];
        $fumetto->price = $formData['price'];
        $fumetto->series = $formData['series'];
        $fumetto->sale_date = $formData['sale_date'];
        $fumetto->type = $formData['type'];
        $fumetto->save();

        // $fumetto = Comic::create($formData);    questa riga equivale a quello scritto nelle righe fra 42 e 51

        return redirect()->route('houses.show', ['house' => $fumetto]);
        // dove 'house' lo trovi in php artisan route:list
        // return redirect()->route('houses.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $Comics = Comic::findOrFail($id); // invece con findOrFail possiamo evitare di mettere l if
         // dd($Comics);
        return view('admin.houses.show', compact('Comics'));
         // http://127.0.0.1:8000/houses/58   --- guardare cosa stampo nel file show.blade.php

    }

    // public function show(Comic $Comics)
    // {
    //     return view('admin.houses.show', compact('Comics'));
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Comics = Comic::find($id);
        return view('admin.houses.edit', compact('Comics'));
        // http://127.0.0.1:8000/houses/56/edit
    }

    // public function edit(Comic $Comics)
    // {
    //     return view('admin.houses.edit', compact('Comics'));
    // }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    public function update(Request $request, Comic $house)
    {
        $formData = $request->all();
        $house->update($formData);
        // se abbiamo definito le fillable in Comic
        // dd($Comics);
        return redirect()->route('houses.show', ['house' => $house->id]);
        // dd($Comics->toArray());
        // return redirect('/houses/' . $house->id);
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
    }

    // public function destroy(Comic $Comics)
    // {
    //     $Comics->delete();
    //     return redirect()->route('house.index');
    // }
}
