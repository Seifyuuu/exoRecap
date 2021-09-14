@extends('layout.app')

@section('content')
 <a class="ms-5 btn btn-dark btn-sm" href={{ route("joueurs.index") }}><span class="mif-backspace"></span></a>
<a class="ms-5 btn btn-dark btn-sm" href={{ route("equipes.index") }}><span class="mif-backspace"></span></a>
 
 <div class="container d-flex flex-column align-items-center" style="min-height: 87vh">
        <div class="flip-card effect-on-hover flip-horizontal" style="height: 40vh; width: 50vw">
            <div class="front p-4">
                <div class="social-box">
                    <ul class="skills">
                        <li>
                            <div class="text-bold">{{ $equipe->nom }}</div>
                            <div>{{ $equipe->pays }}</div>
                            <div>{{ $equipe->continent->continent }}</div>
                            <div>{{ $equipe->ville }}</div>
                            <div>{{ $equipe->max }}</div>
                        </li> 
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection