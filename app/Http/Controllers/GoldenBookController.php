<?php

namespace App\Http\Controllers;

use App\Models\GoldenBook;
use Illuminate\Http\Request;

class GoldenBookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = GoldenBook::orderBy('id', 'desc')->get();
        $moyenne = 0;
        foreach ($datas as  $data) {            
            $moyenne+= ($data->note)/$data->count();
        }
        return view('goldenbooks',compact('datas','moyenne'));
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
        $request->validate([
            "auteurName" => "required|min:4|max:35",
            "auteurCommentary" => "required|min:4|max:250",
            "auteurNote" => "required|integer|min:1|max:5",
        ]);
        $newEntry = new GoldenBook;
        $newEntry->auteur = $request->auteurName;
        $newEntry->commentaire = $request->auteurCommentary;
        $newEntry->note = $request->auteurNote;
        $newEntry->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\GoldenBook  $goldenBook
     * @return \Illuminate\Http\Response
     */
    public function show(GoldenBook $goldenBook)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\GoldenBook  $goldenBook
     * @return \Illuminate\Http\Response
     */
    public function edit(GoldenBook $goldenBook)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\GoldenBook  $goldenBook
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, GoldenBook $goldenBook)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\GoldenBook  $goldenBook
     * @return \Illuminate\Http\Response
     */
    public function destroy(GoldenBook $goldenBook)
    {
        //
    }
}
