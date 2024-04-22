<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LensMark;
use App\Models\LensMarkFile;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StoreLensMarkRequest;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

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
        return view('layouts.index', compact('LensMarks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        dd('test');
        return view('layouts.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLensMarkRequest $request)
{
    try {
        $validatedData = $request->validated(); // 유효성 검사

        $lensMark = new LensMark(); // 인스턴스 생성
        $lensMark->classification = $validatedData['classification']; // 분류
        $lensMark->manufacturer = $validatedData['manufacturer']; // 제조사
        $lensMark->product_name = $validatedData['product_name']; // 제품명
        $lensMark->refractive_index = $validatedData['refractive_index']; // 굴절률
        $lensMark->keyword = $validatedData['keyword']; // 검색어
            
        if ($lensMark->save()) {
            $lensMarkFile = new LensMarkFile();
            $lensMarkFile->link = $validatedData['link']; // 제품링크
            $lensMarkFile->mark_no = $lensMark->id; // lensMark id 번호
            $lensMarkFile->created_at = now();
            
            if ($lensMarkFile->save()) {
                return response()->json(['success' => true, 'message' => 'Lens Mark and File created successfully.'], 200);
            } else {
                return response()->json(['success' => false, 'message' => 'Saved fail'], 500);
            }
        } else {
            return response()->json(['success' => false, 'message' => 'Lens Mark saved fail'], 500);
        }
    } catch (\Exception $e) {
        return response()->json(['success' => false, 'message' => 'An error occurred while saving Lens Mark and File.'], 500);
    }
}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $LensMark = DB::table('lens_marks')
                    ->join('lens_mark_files', 'lens_marks.id', '=', 'lens_mark_files.mark_no')
                    ->select('lens_marks.*', 'lens_mark_files.*')
                    ->first();

                    if (!$LensMark) {
                        return response()->json(['message' => 'LensMark not found'], 404);
                    }
                
                    return response()->json($LensMark);
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
    public function update(StoreLensMarkRequest $request, $id)
    {
        try{
            $lensMark = LensMark::find($id); // 특정 LensMark를 찾습니다.
    
            if (!$lensMark) {
                return response()->json(['success' => false, 'message' => 'LensMark not found'], 404);
            }
            
            $validatedData = $request->validated(); // 유효성 검사
            
            $lensMark->classification = $validatedData['classification'];
            $lensMark->manufacturer = $validatedData['manufacturer'];
            $lensMark->product_name = $validatedData['product_name'];
            $lensMark->refractive_index = $validatedData['refractive_index'];
            $lensMark->keyword = $validatedData['keyword'];
            
            if ($lensMark->save()) {
                return response()->json(['success' => true, 'message' => 'LensMark updated successfully'], 200);
            } else {
                return response()->json(['success' => false, 'message' => 'LensMark update failed'], 500);
            }
        }catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => 'An error occurred while saving Lens Mark and File.'], 500);
        }
        
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
