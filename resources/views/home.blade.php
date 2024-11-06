@extends('master.layout')

@section('title')
    Home
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12" style="padding-top: 20px;">
        @if(session('success'))
            <div class="alert alert-success">
                {{  session('success') }}
            </div>
        @endif
        @if($errors->any())
            @foreach($errors->all() as $err)
            <div class="alert alert-danger">
                {{ $err }}
            </div>
            @endforeach
        @endif
        ini adalah halaman home
        </div>
    </div>
</div>
@endsection