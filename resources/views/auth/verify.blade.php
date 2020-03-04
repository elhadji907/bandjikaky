@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Validation de votre inscription') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Un nouveau mail a été envoyé à l\'administrateur pour valider votre inscription!') }}
                        </div>
                    @endif

                    {{ __('Avant de continuer, veuillez vérifier votre e-mail pour un lien de vérification.') }}
                    {{-- {{ __('Si vous n\'avez pas reçu l\'e-mail') }}, <a href="{{ route('verification.resend') }}">{{ __('cliquez ici pour en demander un autre') }}</a>. --}}
                    {{ __('Si vous n\'avez pas encore reçu l\'e-mail, contactez l\'administrateur au ') }},<a href=""> +221 77 699 41 73</a> 
                    ou par e-mail à <a href="">badjilaminefbkk@gmail.com</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
