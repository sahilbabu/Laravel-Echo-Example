@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard <button id="sayHi" class="float-right btn btn-sm btn-warning">Say Hi!</button></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="user-list">
                        You are logged in!
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
