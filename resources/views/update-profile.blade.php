@extends('adminlte::page')

@section('title', 'TCMS 2.0')

@section('content_header')
    <h1 class="m-0 text-dark">Update Profile</h1>
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
    @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updateProfileInformation()))
        @include('profile.update-profile-information-form')
    @endif

{{--        <livewire:logout-other-browser-sessions />--}}
{{--        @livewire('livewire.logout-other-browser-sessions-form')--}}

{{--    @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))--}}
{{--        @include('profile.update-password-form')--}}
{{--    @endif--}}

{{--    @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::twoFactorAuthentication()))--}}
{{--        @include('profile.two-factor-authentication-form')--}}
{{--    @endif--}}
                </div>
            </div>
        </div>
    </div>
@endsection
