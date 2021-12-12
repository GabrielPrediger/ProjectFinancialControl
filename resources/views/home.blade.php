@extends('layouts.default')

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

                    {{ __('Wellcome to Formula 1 Controller Season') }}
                    <br>
                    <br>
                    <br>
                    
                    {{ __('Please choose some of the options in the left menu to get started.') }}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
