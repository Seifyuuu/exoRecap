@extends('layout.app')

@section('content')
<a class="ms-5 btn btn-dark btn-sm" href={{ route("equipes.index") }}><span class="mif-backspace"></span></a>
<a class="ms-5 btn btn-dark btn-sm" href={{ route("equipes.index") }}><span class="mif-backspace"></span></a>

<div class="container" style="min-height: 85vh">
        <h1 class="text-center my-5">Create equipe</h1>
        <ul>
            @foreach ($errors->all() as $message) 
                <li>{{ $message }}</li>
            @endforeach
        </ul>
        <form action={{ route('equipes.store') }} method="post" enctype="multipart/form-data">
            @csrf

            <div class="mb-3">
                <label class="form-label">Nom</label>
                <input type="text" class="form-control"  name="nom">
            </div>
            <div class="mb-3">
                <label class="form-label">Logo</label>
                <input type="file" data-role="file" data-mode="drop" name="image">
            </div>
            <div class="mb-3">
                <label class="form-label">Ville</label>
                <input type="text" class="form-control"  name="ville">
            </div>
            <div class="mb-3">
                <label class="form-label">Pays</label>
                <input type="text" class="form-control"  name="pays">
            </div>
            <div class="mb-3">
                <label class="form-label">Max</label>
                <input type="number" class="form-control"  name="max">
            </div>
            <div class="mb-3">
                <label class="form-label">Continent</label>
                <select name="continent_id" id="">
                    <br>
                    @foreach ($continents as $continent)
                      <option value="{{ $continent->id }}">{{  $continent->continent  }}</option>  
                    @endforeach
                </select>
            </div>


            <button type="submit" class="btn text-white btn-sm btn-primary">Submit</button>
        </form>
        <a href={{ route('equipes.index') }} class="btn mt-3 btn-dark btn-sm">Back</a>
    </div>
@endsection