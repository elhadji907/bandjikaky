@extends('layout.default')
@section('title', 'Bandjikaky - Liste des quartiers')
@section('content')
<div class="container-fluid">
    @if (session()->has('success'))
        <div class="alert alert-success" role="alert">{{ session('success') }}</div>
    @endif 
    <div class="row justify-content-center pt-5">
    <div class="col-md-8">
        @if (session('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
            @endif
            <div class="card"> 
                <div class="card-header card-header-success text-center">
                    <h3 class="card-title">Enregistrement</h3>
                    <p class="card-category">quartiers</p>
                </div>
                <div class="card-body pt-5">
                <div class="table-responsive">
                    <form method="POST" action="{{ url('quartiers') }}">
                        @csrf
                         <div class="form-group">
                             <label for="input-quartier"><b>Nom du quartier:</b></label>
                             <input type="text" name="quartier" class="form-control" id="input-quartier" placeholder="ex: NEMA" value="{{ old('quartier') }}">
                             <small id="emailHelp" class="form-text text-muted">
                                     @if ($errors->has('quartier'))
                                     @foreach ($errors->get('quartier') as $message)
                                     <p class="text-danger">{{ $message }}</p>
                                     @endforeach
                                     @endif
                             </small>
                         </div>
                         <button type="submit" class="btn btn-primary"><i class="far fa-paper-plane"></i>&nbsp;Enregistrer</button>
                     </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection