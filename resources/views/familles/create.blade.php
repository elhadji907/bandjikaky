@extends('layout.default')
@section('title', 'Bandjikaky - Liste des familles')
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
                    <p class="card-category">familles</p>
                </div>
                <div class="card-body pt-5">
                <div class="table-responsive">
                    <form method="POST" action="{{ url('familles') }}">
                        @csrf
                         <div class="form-group">
                             <label for="input-famille"><b>Nom de la famille:</b></label>
                             <input type="text" name="famille" class="form-control" id="input-famille" placeholder="ex: Tabocoto" value="{{ old('famille') }}">
                             <small id="emailHelp" class="form-text text-muted">
                                     @if ($errors->has('famille'))
                                     @foreach ($errors->get('famille') as $message)
                                     <p class="text-danger">{{ $message }}</p>
                                     @endforeach
                                     @endif
                             </small>
                         </div>
                         <div class="form-group">
                            <label for="exampleInputEmail1"><b>Choisir un quartier</b></label>
                            <select name="quartier" id="quartier" class="form-control">
                                <option value="">--sélectionnez le quartier--</option>
                                @foreach($quartiers as $quartier)
                                    <option value="{{ $quartier->id }}">{{ $quartier->name }}</option>
                                @endforeach
                                </select>
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