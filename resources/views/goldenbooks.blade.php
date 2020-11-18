@extends('template.template')

@section('content')

<div class="card mb-2">
    <h5 class="card-header bg-primary">Ajouter un commentaire</h5>
    <div class="card-body">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <form action="{{route('gb-store')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="auteur-name">Nom</label>
                <input type="text" class="form-control" id="auteur-name" name="auteurName" >   
            </div>
            <div class="form-group">
                <label for="auteur-note">Note</label>
                <input type="number" class="form-control" id="auteur-note"  name="auteurNote" min="1" max="5">
            </div>
            <div class="form-group">
               <label for="auteur-commentaire">Commentaire</label>
               <textarea class="form-control" id="auteur-commentaire" rows="3" name="auteurCommentary"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Envoyer</button>
        </form>
    </div>
</div>
<div class="alert alert-warning text-dark" role="alert">
    La note moyenne est : <span class="badge badge-warning">{{round($moyenne,1)}}/5</span>
   
</div>
<div class="card">
    <h5 class="card-header bg-warning">Livre d'or</h5>
    <div class="card-body">
        @foreach ($datas as $data)
        
        <div class="bg-light mb-2 p-2">
            <h3>{{$data->auteur}}</h3>
            <p>{{$data->commentaire}}</p>
            @if($data->note > 3)
                <span class="badge badge-success">{{$data->note}}</span>
            @elseif($data->note == 3) 
                <span class="badge badge-warning">{{$data->note}}</span>
            @else
                <span class="badge badge-danger">{{$data->note}}</span>
            @endif
        </div>
        @endforeach
    </div>
</div>
@endsection