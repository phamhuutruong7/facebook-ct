@extends('layouts.app')

@section('content')
    <App></App>
    {{ \Illuminate\Support\Facades\Auth::user() }}
@endsection
