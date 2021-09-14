@extends('layout.app')

@section('content')
<a class="ms-5 btn btn-dark btn-smc" href={{ route("equipes.index") }}><span class="mif-backspace"></span></a>
    
<a class="ms-5 btn btn-dark btn-sm" href={{ route("equipes.index") }}><span class="mif-backspace"></span></a>
<div class="container" style="min-height: 85vh">
        <h1 class="text-center my-5">Edit equipe</h1>
        <form action={{ route('equipes.update', $equipe->id) }} method="post" enctype="multipart/form-data">
            @csrf
            @method("put")
            
            
            <div class="mb-3">
                <label class="form-label">Equipe</label>
                <input type="text" class="form-control"  name="equipe" value={{ $equipe->equipe }}>
            </div>

            <div class="mb-3">
                <label class="form-label">Ecusson</label>
                <input type="file" data-role="file" data-mode="drop" name="image">
            </div>
    
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection