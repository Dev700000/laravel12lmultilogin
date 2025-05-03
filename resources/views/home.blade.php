@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if (Auth::user()->role === 'administrator')
                        {{ __('You are logged in as Administrator!') }}
                    @elseif (Auth::user()->role === 'supervisor')
                        {{ __('You are logged in as Supervisor!') }}
                    @elseif (Auth::user()->role === 'user')
                        {{ __('You are logged in as User!') }}
                    @else
                        {{ __('You are logged in master rol!') }}
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
