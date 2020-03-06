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
                    Enregistrement des générations
                </div>              
            <div class="card-body">
                <div class="table-responsive">
                    <form method="POST" action="{{ url('generations') }}">
                        @csrf
                         <div class="form-group">
                             <label for="input-prenom"><b>Prenom:</b></label>
                             <input type="text" name="prenom" class="form-control" id="input-prenom" placeholder="Prenom" value="{{ old('prenom') }}">
                             <small id="emailHelp" class="form-text text-muted">
                                     @if ($errors->has('prenom'))
                                     @foreach ($errors->get('prenom') as $message)
                                     <p class="text-danger">{{ $message }}</p>
                                     @endforeach
                                     @endif
                             </small>
                         </div>
                         
                         <div class="form-group">
                             <label for="input-nom"><b>Nom:</b></label>
                             <input type="text" name="nom" class="form-control" id="input-nom" placeholder="Nom" value="{{ old('nom') }}">
                             <small id="emailHelp" class="form-text text-muted">
                                     @if ($errors->has('nom'))
                                     @foreach ($errors->get('nom') as $message)
                                     <p class="text-danger">{{ $message }}</p>
                                     @endforeach
                                     @endif
                             </small>
                         </div>
                         <div class="form-group">
                             <label for="exampleInputEmail1"><b>Adresse email:</b></label>
                             <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="E-mail" value=" {{old('email')}}">
                             <small id="emailHelp" class="form-text text-muted">Nous ne partagerons jamais votre email avec qui que ce soit.</small>
                             <small id="emailHelp" class="form-text text-muted">
                                 @if ($errors->has('email'))
                                 @foreach ($errors->get('email') as $message)
                                 <p class="text-danger">{{ $message }}</p>
                                 @endforeach
                                 @endif
                             </small>
                         </div>
                         <div class="form-group">
                             <label for="exampleInputEmail1"><b>Téléphone:</b></label>
                             <input type="text" name="telephone" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Telephone" value="{{old('telephone')}}">
                             <small id="emailHelp" class="form-text text-muted">
                                 @if ($errors->has('telephone'))
                                 @foreach ($errors->get('telephone') as $message)
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