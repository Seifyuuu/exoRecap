@extends("layout.app")

@section("content")
<div class="container" style="min-height: 87vh">
    <h1>Joueurs</h1>
    <a class="btn text-white btn-sm mb-3 btn-success" href={{ route("joueurs.create") }}>Create</a>
    <a class="ms-5 btn btn-dark btn-sm" href={{ route("joueurs.index") }}><span class="mif-backspace"></span></a>

    <table class="table" data-role="table" data-filters="myFilter">
        <thead>
        <tr>
            <th>#</th>
            <th>Nom</th>
            <th>Prenom</th>
            <th>Age</th>
            <th>Numéro</th>
            <th>Genre</th>
            <th>Role</th>
            <th>Equipe</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($joueurs as $joueur)
            <tr>
                <td>{{ $joueur->id }}</td>
                <td>{{ $joueur->nom }}</td>
                <td>{{ $joueur->prenom }}</td>
                <td>{{ $joueur->age }}</td>
                <td>{{ $joueur->numero }}</td>
                <td>{{ $joueur->genre }}</td>
                <td>{{ $joueur->role->role}}</td>
                <td>{{ $joueur->equipe->nom}}</td>
                <td>
                    <div class="d-flex">
                        <a class="btn text-white mx-1 btn-warning" href={{ route("joueurs.show", $joueur->id) }}>Show</a>
                        <a class="btn text-white mx-1 fg-dark btn-primary" href={{ route("joueurs.edit", $joueur->id) }}>Edit</a>
                        <form action={{ route("joueurs.destroy", $joueur->id) }} method="post">
                            @csrf
                            @method("delete")
                            <button class="btn text-white mx-1 btn-danger" type="submit">Delete</button>
                        </form>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection