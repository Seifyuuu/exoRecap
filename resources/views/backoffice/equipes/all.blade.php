@extends('layout.app')

@section('content')
<div class="container" style="min-height: 87vh">
    <h1>Equipes</h1>
    <a class="btn text-white btn-sm mb-3 btn-success" href={{ route("equipes.create") }}>Create</a>
<a class="ms-5 btn btn-dark btn-sm" href={{ route("equipes.index") }}><span class="mif-backspace"></span></a>

    <table class="table"  data-filters="myFilter">
        <thead>
        <tr>
            <th>#</th>
            <th>Nom</th>
            <th>Ville</th>
            <th>Pays</th>
            <th>Nombre de joueurs</th>  

            <th>Continent</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($equipes as $equipe)
            <tr>
                <td>{{ $equipe->id }}</td>
                <td>{{ $equipe->nom }}</td>
                <td>{{ $equipe->ville }}</td>
                <td>{{ $equipe->pays }}</td>
                <td>{{ $equipe->max }}</td>
                <td>{{ $equipe->continent->continent }}</td>
                <td>
                    <div class="d-flex">
                        <a class="btn text-white mx-1 btn-warning" href={{ route("equipes.show", $equipe->id) }}>Show</a>
                        <a class="btn text-white mx-1 fg-dark btn-primary" href={{ route("equipes.edit", $equipe->id) }}>Edit</a>
                        <form action={{ route("equipes.destroy", $equipe->id) }} method="post">
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