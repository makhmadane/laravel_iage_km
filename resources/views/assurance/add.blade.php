@extends('template')


@section('content')

    <form method="post" action="{{route($assurance->exists ? 'updateAssurance' : 'storeAssurance')}}" enctype="multipart/form-data">
        @csrf
        @method($assurance->exists ? 'put': 'post' )

        <input type="text" value="{{$assurance->id}}" name="id"  hidden>
        <label>Image</label>
        <input type="file" name="image" class="form-control">
        <label for="">Libelle</label>
        <input type="text" name="libelle" id="" class="form-control @error('libelle') is-invalid @enderror" value="{{$assurance->libelle}}">
        @error('libelle')
         <div class="text text-danger">{{ $message }}</div>
        @enderror
        <label for="">Montant</label>
        <input type="number" name="montant" id="" class="form-control  @error('montant') is-invalid @enderror" value="{{$assurance->montant}}">
        @error('montant')
        <div class="text text-danger">{{ $message }}</div>
        @enderror
        <label for="">Bonus</label>
        <input type="number" name="bonus" id="" class="form-control  @error('bonus') is-invalid @enderror" value="{{$assurance->bonus}}">
        @error('bonus')
        <div class="text text-danger">{{ $message }}</div>
        @enderror
        <label for="">Type</label>
        <select name="type_id" id="" class="form-control  @error('type_id') is-invalid @enderror">
            @foreach($types as $t)
                <option {{($t->id == $assurance->type_id) ? 'selected' : ''}}  value="{{$t->id}}">{{$t->libelle}}</option>
            @endforeach
        </select>
        @error('type_id')
        <div class="text text-danger">{{ $message }}</div>
        @enderror
        <br>
        <button type="submit" class="btn btn-primary"> {{$assurance->exists ? "Modifier" : "Ajouter"}} </button>
    </form>


@endsection
