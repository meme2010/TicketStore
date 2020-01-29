@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Pokemons</div>
                    <div class="card-body">
                        @foreach( $pokemons->results as $pokemon)
                            <div class="card d-flex">
                                <div class="card-body">
                                    <h5>{{  $pokemon->name }}</h5>
                                </div>
                            </div>
                        @endforeach
                        You are logged in!
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
