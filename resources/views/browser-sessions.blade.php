@extends('adminlte::page')

@section('title', 'TCMS 2.0')

@section('content_header')
<h1 class="m-0 text-dark">Logout Other Browser Sessions</h1>
@stop

@section('plugins.Sweetalert2', true)

@section('content_nav_right')
<x-main-menu></x-main-menu>
@stop

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">


                <livewire:logout-other-browser-sessions />
                {{--        @livewire('livewire.logout-other-browser-sessions-form')--}}

            </div>
        </div>
    </div>
</div>
@endsection
