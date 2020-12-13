@extends('template')
@section('contenu')
    <br>
    <div class="container">
        <div class="row card text-white bg-dark">
            <h4 class="card-header">Contactez-moi</h4>
            <div class="card-body">
                <form action="{{ action('ApiController@create') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <input type="text" class="form-control  @error('nom') is-invalid @enderror" name="fname" id="nom" placeholder="first name" value="{{ old('nom') }}">
                        @error('nom')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control  @error('nom') is-invalid @enderror" name="lname" id="nom" placeholder="last name" value="{{ old('nom') }}">
                        @error('nom')
                          <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control  @error('nom') is-invalid @enderror" name="email" id="nom" placeholder="email" value="{{ old('nom') }}">
                        @error('nom')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control  @error('nom') is-invalid @enderror" name="password" id="nom" placeholder="password" value="{{ old('nom') }}">
                        @error('nom')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    </div>
                    <button type="submit" class="btn btn-secondary" onclick="location.href='{{ url('dashbord') }}'" >Envoyer !</button>
                </form>
            </div>
        </div>
    </div>
@endsection