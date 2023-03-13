<?php

namespace App\Http\Controllers;

use App\Models\Crossword;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CrosswordController extends Controller
{
    private function form_matrix($array, $x)
    {
        return array_chunk($array, $x);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('index', ['crosswords' => Crossword::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {


        $crossword = new Crossword();

        $matrix = $this->form_matrix($request->crossword_item, $request->x);

        $crossword->name = $request->name;
        $crossword->user_id = Auth::id();
        $crossword->image = json_encode($matrix);

        $crossword->save();
        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     */
    public function show(Crossword $crossword)
    {
        return view('crossword.crossword_level', ['crossword' => $crossword]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Crossword $crossword)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Crossword $crossword)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Crossword $crossword)
    {
        //
    }
}
