<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LensMark;
use App\Models\LensMarkFile;
use Illuminate\Support\Facades\DB;
class LensMarkController extends Controller
{
    private $LensMark;
    private $LensMarkFile;
    public function __construct(LensMark $LensMark, LensMarkFile $LensMarkFile){
        // Laravel 의 IOC(Inversion of Control) 
        $this->LensMark = $LensMark;
        $this->LensMarkFile = $LensMarkFile;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$LensMarks = $this -> LensMark::all();
        $LensMarks = DB::table('lens_marks')
                    ->join('lens_mark_files', 'lens_marks.id', '=', 'lens_mark_files.mark_no')
                    ->select('lens_marks.*', 'lens_mark_files.*')
                    ->get();

        //dd("LensMarks.classification : ", $LensMarks);
        return view('lensMarks.index', compact('LensMarks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('lensMarks.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        //
    }
}
