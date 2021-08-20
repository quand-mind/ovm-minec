@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Registro de Solicitantes') }}</div>

                {{$errors}}
                
                <div class="card-body">
                    <register :errors={{$errors}}></register>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
