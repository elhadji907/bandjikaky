@extends('layout.default')
@section('title', 'Bandjikaky - enregistrement membres')
@section('content')
<div class="content">
    <div class="container col-12 col-sm-12 col-md-12 col-lg-8 col-xl-8">
        <div class="container-fluid">
            @if (session()->has('success'))
                <div class="alert alert-success" role="alert">{{ session('success') }}</div>
            @endif                    
            {{--  <div class="row pt-5">
                
            </div>  --}}
            <div class="card">
                <div class="card-header card-header-success text-center">
                    <h3 class="card-title">Enregistrement</h3>
                    <p class="card-category">membres</p>
                </div>
                <div class="card-body pt-5">
                                               
                        <form method="POST" action="{{ url('membres') }}">
                           @csrf 
                           <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="input-civilite"><b>Civilité</b></label>
                                <input type="text" name="civilite" class="form-control" id="input-civilite" value="{{ old('civilite') }}">
                                <small id="emailHelp" class="form-text text-muted">
                                        @if ($errors->has('civilite'))
                                        @foreach ($errors->get('civilite') as $message)
                                        <p class="text-danger">{{ $message }}</p>
                                        @endforeach
                                        @endif
                                </small>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="input-matricule"><b>Matricule</b></label>
                                <input type="text" name="matricule" class="form-control" id="input-matricule" value="{{ old('matricule') }}">
                                <small id="emailHelp" class="form-text text-muted">
                                        @if ($errors->has('matricule'))
                                        @foreach ($errors->get('matricule') as $message)
                                        <p class="text-danger">{{ $message }}</p>
                                        @endforeach
                                        @endif
                                </small>
                            </div>
                        </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="input-prenom"><b>Prénom</b></label>
                                    <input type="text" name="prenom" class="form-control" id="input-prenom" value="{{ old('prenom') }}">
                                    <small id="emailHelp" class="form-text text-muted">
                                            @if ($errors->has('prenom'))
                                            @foreach ($errors->get('prenom') as $message)
                                            <p class="text-danger">{{ $message }}</p>
                                            @endforeach
                                            @endif
                                    </small>
                                </div>
                                <div class="form-group col-md-6">
                                <label for="input-nom"><b>Nom</b></label>
                                <input type="text" name="nom" class="form-control" id="input-nom" value="{{ old('nom') }}">
                                <small id="emailHelp" class="form-text text-muted">
                                        @if ($errors->has('nom'))
                                        @foreach ($errors->get('nom') as $message)
                                        <p class="text-danger">{{ $message }}</p>
                                        @endforeach
                                        @endif
                                </small>
                            </div>
                        </div>
                            <div class="form-row">                            
                            <div class="form-group col-md-6">
                                <label for="exampleInputEmail1"><b>Téléphone</b></label>
                                <input type="text" name="telephone" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{old('telephone')}}">
                                <small id="emailHelp" class="form-text text-muted">
                                    @if ($errors->has('telephone'))
                                    @foreach ($errors->get('telephone') as $message)
                                    <p class="text-danger">{{ $message }}</p>
                                    @endforeach
                                    @endif
                                </small>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="exampleInputEmail1"><b>Adresse de résidence</b></label>
                                <input type="text" name="adresse" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{old('adresse')}}">
                                <small id="emailHelp" class="form-text text-muted">
                                    @if ($errors->has('adresse'))
                                    @foreach ($errors->get('adresse') as $message)
                                    <p class="text-danger">{{ $message }}</p>
                                    @endforeach
                                    @endif
                                </small>
                            </div> 
                        </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="exampleInputEmail1"><b>Date de naissance</b></label>
                                    <input type="date" name="date_nais" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{old('date_nais')}}">
                                    <small id="emailHelp" class="form-text text-muted">
                                        @if ($errors->has('date_nais'))
                                        @foreach ($errors->get('date_nais') as $message)
                                        <p class="text-danger">{{ $message }}</p>
                                        @endforeach
                                        @endif
                                    </small>
                                </div> 
                                <div class="form-group col-md-6">
                                    <label for="exampleInputEmail1"><b>Lieu de naissance</b></label>
                                    <input type="text" name="lieu_nais" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{old('lieu_nais')}}">
                                    <small id="emailHelp" class="form-text text-muted">
                                        @if ($errors->has('lieu_nais'))
                                        @foreach ($errors->get('lieu_nais') as $message)
                                        <p class="text-danger">{{ $message }}</p>
                                        @endforeach
                                        @endif
                                    </small>
                                </div> 
                        </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="exampleInputEmail1"><b>Participation</b></label>
                                    <input type="number" min="2000" name="participation" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{old('participation')}}">
                                    <small id="emailHelp" class="form-text text-muted">
                                        @if ($errors->has('participation'))
                                        @foreach ($errors->get('participation') as $message)
                                        <p class="text-danger">{{ $message }}</p>
                                        @endforeach
                                        @endif
                                    </small>
                                </div> 
                                <div class="form-group col-md-6">
                                    <label for="exampleInputEmail1"><b>Habillement</b></label>
                                    <input type="text" name="habille" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{old('habille')}}">
                                    <small id="emailHelp" class="form-text text-muted">
                                        @if ($errors->has('habille'))
                                        @foreach ($errors->get('habille') as $message)
                                        <p class="text-danger">{{ $message }}</p>
                                        @endforeach
                                        @endif
                                    </small>
                                </div> 
                        </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="exampleInputEmail1"><b>Famille</b></label>
                                    {{-- <input type="text" name="famille" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{old('famille')}}"> --}}
                                    <select name="famille" id="famille" class="form-control">
                                        <option value=""></option>
                                        @foreach($familles as $famille)
                                            <option value="{{ $famille->id }}">{{ $famille->name }}</option>
                                        @endforeach
                                        </select>
                                    <small id="emailHelp" class="form-text text-muted">
                                        @if ($errors->has('famille'))
                                        @foreach ($errors->get('famille') as $message)
                                        <p class="text-danger">{{ $message }}</p>
                                        @endforeach
                                        @endif
                                    </small>
                                </div> 
                                <div class="form-group col-md-6">
                                    <label for="exampleInputEmail1"><b>Generation</b></label>
                                    {{-- <input type="text" name="generation" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{old('generation')}}"> --}}
                                    <select name="generation" id="generation" class="form-control">
                                        <option value=""></option>
                                        @foreach($generations as $generation)
                                            <option value="{{ $generation->id }}">{{ $generation->name }}</option>
                                        @endforeach
                                    </select>
                                    <small id="emailHelp" class="form-text text-muted">
                                        @if ($errors->has('generation'))
                                        @foreach ($errors->get('generation') as $message)
                                        <p class="text-danger">{{ $message }}</p>
                                        @endforeach
                                        @endif
                                    </small>
                                </div> 
                        </div>
                            {{-- <div class="form-group">
                                <label for="exampleInputEmail1"><b>Choisir un role:</b></label>
                                <select name="choixrole" id="choixrole" class="form-control">
                                    @foreach($roles as $role)
                                        <option value="{{ $role->id }}">{{ $role->name }}</option>
                                    @endforeach
                                    </select>
                                <small id="emailHelp" class="form-text text-muted">
                                    @if ($errors->has('choixrole'))
                                    @foreach ($errors->get('choixrole') as $message)
                                    <p class="text-danger">{{ $message }}</p>
                                    @endforeach
                                    @endif
                                </small>
                            </div> --}}
                            {{-- <div class="form-row">
                                <div class="form-group col-md-6">
                                <label for="exampleInputPassword1"><b>Mot de passe</b></label>
                                <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                                @if ($errors->has('password'))
                                @foreach ($errors->get('password') as $message)
                                <p class="text-danger">{{ $message }}</p>
                                @endforeach
                                @endif
                            </div> 
                            <div class="form-group col-md-6">
                                <label for="exampleInputPassword1"><b>Mot de passe</b>(confirmation)</label>
                                <input type="password" name="password_confirmation" class="form-control" id="exampleInputPassword1">
                                @if ($errors->has('password_confirmation'))
                                @foreach ($errors->get('password_confirmation') as $message)
                                <p class="text-danger">{{ $message }}</p>
                                @endforeach
                                @endif
                            </div> </div>                            --}}
                            <button type="submit" class="btn btn-primary"><i class="far fa-paper-plane"></i>&nbsp;Enregistrer</button>
                        </form>
                        <div class="modal fade" id="error-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Verifier les donn&eacute;es saisies svp</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                        @push('scripts')
                                        <script type="text/javascript">
                                        $(document).ready(function () {
                                            $("#error-modal").modal({
                                                'show':true,
                                            })
                                        });
                                        </script>
                                            
                                        @endpush
                                        @endif
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection