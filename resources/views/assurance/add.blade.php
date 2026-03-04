@extends('template')


@section('content')

    <form method="post" action="{{route($assurance->exists ? 'updateAssurance' : 'storeAssurance')}}">
        @csrf
        @method($assurance->exists ? 'put': 'post' )
        <input type="text" value="{{$assurance->id}}" name="id"  hidden>
        <label for="">Libelle</label>
        <input type="text" name="libelle" id="" class="form-control" value="{{$assurance->libelle}}">
        <label for="">Montant</label>
        <input type="number" name="montant" id="" class="form-control" value="{{$assurance->montant}}">
        <label for="">Bonus</label>
        <input type="number" name="bonus" id="" class="form-control" value="{{$assurance->bonus}}">
        <label for="">Type</label>
        <select name="type_id" id="" class="form-control">
            @foreach($types as $t)
                <option {{($t->id == $assurance->type_id) ? 'selected' : ''}}  value="{{$t->id}}">{{$t->libelle}}</option>
            @endforeach
        </select>
        <br>
        <button type="submit" class="btn btn-primary"> {{$assurance->exists ? "Modifier" : "Ajouter"}} </button>
    </form>

@endsection
