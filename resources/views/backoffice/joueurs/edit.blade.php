@extends('layout.app')

@section('content')
    <a class="ms-5 btn btn-dark btn-sm" href={{ route("joueurs.index") }}><span class="mif-backspace"></span></a>
    <a class="ms-5 btn btn-dark btn-sm" href={{ route("joueurs.index") }}><span class="mif-backspace"></span></a>
    
    <div class="container" style="min-height: 85vh">
        <h1 class="text-center my-5">Edit {{ $joueur->prenom }}</h1>
        <ul>
            @foreach ($errors->all() as $message) 
                <li>{{ $message }}</li>
            @endforeach
        </ul>
        <form action={{ route('joueurs.update', $joueur) }} method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label class="form-label">Nom</label>
                <input type="text" class="form-control" name="nom" value={{ $joueur->nom }}>
            </div>
            <div class="mb-3">
                <label class="form-label">Prenom</label>
                <input type="text" class="form-control" name="prenom" value={{ $joueur->prenom }}>
            </div>

            <div class="mb-3">
                <label class="form-label">Age</label>
                <input type="number" class="form-control" name="age" value={{ $joueur->age }}>
            </div>

            <div class="mb-3">
                <label class="form-label">Numéro</label>
                <input type="number" class="form-control" name="numero" value={{ $joueur->numero }}>
            </div>

            <div class="mb-3">
                <label class="form-label">Role</label>
                <select name="role_id" class="form-control">
                    @foreach ($roles as $role)
                        <option value={{ $role->id }}>{{ $role->role }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label class="form-label">Equipe</label>
                <select name="equipe_id" class="form-control">
                    @foreach ($equipes as $equipe)
                        <option value={{ $equipe->id }}>{{ $equipe->equipe }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label class="form-label">Genre</label>
                <select name="genre" class="form-control">
                    <option>Homme</option>
                    <option>Femme</option>
                </select>
            </div>

            <input type="file" data-role="file" data-mode="drop" name="image">
            <button type="submit" class="btn text-white btn-sm btn-primary">Submit</button>
        </form>
    </div>
@endsection