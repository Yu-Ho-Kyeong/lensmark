@extends('lensMarks.layout')
@section('content')
    <div class="relative p-5 h-screen flex items-center object-cover" style="margin-top:20px">
        <div class="absolute top-0 left-0 inset-1 justify-between items-center w-full">
            <img src="{{ asset('images/1.jpeg') }}" alt="My Image" class="w-full object-cover z-[-1]">
        </div>
        <div class="absolute top-0 left-0 w-full flex-col justify-between items-center z-10 h-full" style="margin-top:60px">
            <h2 class="text-4xl text-white font-extrabold mb-4 text-center">렌즈 마크 검색기</h2>
            <p class="text-xl text-white font-semibold text-center">다양한 렌즈 마크, Vision Note의 마크 검색기로 해결하세요.</p>
        </div>
    </div>
@endsection