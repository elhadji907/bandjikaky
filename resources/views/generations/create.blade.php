@extends('layout.default')
@section('title', 'Bandjikaky - Liste des generations')
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
                <div class="card-header">
                    <i class="fas fa-table"></i>
                    Ajouter une génération
                </div>              
            <div class="card-body">
                <div class="table-responsive">
                    <form method="POST" action="{{ url('generations') }}">
                        @csrf
                         <div class="form-group">
                             <label for="input-generation"><b>Nom de la génération:</b></label>
                             <input type="text" name="generation" class="form-control" id="input-generation" placeholder="ex: Diamano" value="{{ old('generation') }}">
                             <small id="emailHelp" class="form-text text-muted">
                                     @if ($errors->has('generation'))
                                     @foreach ($errors->get('generation') as $message)
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