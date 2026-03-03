@extends('template')


@section('content')

    <form method="post" action="{{route('storeAssurance')}}">
        @csrf
        <label for="">Libelle</label>
        <input type="text" name="libelle" id="" class="form-control" value="{{$assurance->libelle}}">
        <label for="">Montant</label>
        <input type="number" name="montant" id="" class="form-control" value="{{$assurance->montant}}">
        <label for="">Bonus</label>
        <input type="number" name="bonus" id="" class="form-control" value="{{$assurance->bonus}}">
        <br>
        <button type="submit" class="btn btn-primary">Ajouter</button>
    </form>

@endsection
