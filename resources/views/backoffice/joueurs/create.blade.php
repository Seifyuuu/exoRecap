@extends('layout.app')

@section('content')
    <a class="ms-5 btn btn-dark btn-sm" href={{ route("joueurs.index") }}><span class="mif-backspace"></span></a>
    <div class="container" style="min-height: 85vh">
        <h1 class="text-center my-5">Create Joueur</h1>
        <ul>
            @foreach ($errors->all() as $message) 
                <li>{{ $message }}</li>
            @endforeach
        </ul>
        <form action={{ route('joueurs.store') }} method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label class="form-label">Nom</label>
                <input type="text" class="form-control" name="nom">
            </div>

            <div class="mb-3">
                <label class="form-label">Prenom</label>
                <input type="text" class="form-control" name="prenom">
            </div>

            <div class="mb-3">
                <label class="form-label">Age</label>
                <input type="number" class="form-control" name="age">
            </div>

            <div class="mb-3">
                <label class="form-label">Numéro</label>
                <input type="number" class="form-control" name="numero">
            </div>

            <div class="mb-3">
                <label class="form-label">Genre</label>
                <input type="string" class="form-control" name="genre">
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
                        <option value={{ $equipe->id }}>{{ $equipe->nom }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label class="form-label">Photo du joueur</label>
                <input type="file" name="image">
            </div>
            <button type="submit" class="btn text-white btn-sm btn-primary">Submit</button>
        </form>
    </div>
@endsection