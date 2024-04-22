@extends('lensMarks.layout')
@section('contents')
    <!-- ====== img Section --> 
    @include('layouts.img-section')
    <!-- ====== sort & search Section -->
    @include('layouts.sort-search-section')
    <!-- ====== saveModal section -->
    @include('layouts.modal', ['titleText' => 'add new entry'])
    <!-- ====== Table Section -->
    @include('layouts.table-section')
@endsection



