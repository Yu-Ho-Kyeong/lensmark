<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LensMark;
use App\Models\LensMarkFile;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StoreLensMarkRequest;
use Illuminate\Support\Facades\Validator;

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
        return view('lensMarks.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLensMarkRequest $request)
    {

        // CSRF 토큰 검증
        $validator = Validator::make($request->all(), [
            '_token' => 'required|string'
        ]);
        if ($validator->fails()) {
            dd('토큰 검증실패');
            return response()->json(['success' => false, 'message' => 'CSRF token validation failed'], 403);
        }else{
            dd('토큰 검증완료');
        }
        $validatedData = $request->validated();                             //lensMark 유효성 검사
        $lensMark = new LensMark();                                         // 인스턴스 생성
        $lensMark->classification = $validatedData['classification'];       // 분류
        $lensMark->manufacturer = $validatedData['manufacturer'];           // 제조사
        $lensMark->product_name = $validatedData['product_name'];           // 제품명
        $lensMark->refractive_index = $validatedData['refractive_index'];   // 굴절률

        if($lensMark->save()){
            $lensMarkFile = new LensMarkFile();
            $lensMarkFile->link = $validatedData['link'];                   // 제품링크
            $lensMarkFile->mark_no = $lensMark->id;                         // lensMark id 번호
            if($lensMarkFile->save()){
                //return response()->json(['success' => true, 'message' => 'Lens Mark and File created successfully.'], 200);
                return response()->json( ['success'=>true, 'message'=>'saved successfully'], 500 ); 
            }else{
                return response()->json( ['success'=>false, 'message'=>'saved fail'] );
            }
        }else{
            return response()->json( ['success'=>false, 'message', 'saved fail'], 500 );
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
