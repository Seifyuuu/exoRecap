@extends('layout.app')

@section('content')
    <a class="ms-5 btn btn-dark btn-sm" href={{ route("joueurs.index") }}><span class="mif-backspace"></span></a>
    <a class="ms-5 btn btn-dark btn-sm" href={{ route("joueurs.index") }}><span class="mif-backspace"></span></a>
    
    <div class="container d-flex flex-column align-items-center" style="min-height: 87vh">
        <div class="flip-card effect-on-hover flip-horizontal" style="height: 40vh; width: 50vw">
            <div class="front p-4">
                <div class="social-box">
                    <div class="header fg-white">
                        <div class="title">{{ $joueur->nom }}</div>
                        <div class="subtitle">{{ $joueur->prenom }}</div>
                        <div class="subtitle">{{ $joueur->age }}</div>
                        <div class="subtitle">{{ $joueur->numero }}</div>
                        <div class="subtitle">{{ $joueur->genre }}</div>
                    </div>
                    <ul class="skills">
                        {{-- <li>
                            <div class="text-bold">Rôle</div>
                            <div>{{ $joueur->role->role }}</div>
                        </li> --}}
                        {{-- <li>
                            <div class="text-bold">Team</div>
                            <div>{{ $joueur->equipe->equipe }}</div>
                        </li>
                        <li>
                            <div class="text-bold">Continent</div>
                            <div>{{ $joueur->continent->continent }}</div>
                        </li>
                    </ul> --}}
                </div>
                
            </div>
            {{-- <div class="back" style="background-image: url({{ asset("img/" . $joueur->role->image) }}); background-size: cover; background-position-x: center; background-position-y: center;"> --}}
                
            </div>
        </div>
    </div>
@endsection