@extends('template')

@section('content')

    @if(session('success'))
        <div class="alert alert-success">{{session('success')}}</div>
    @endif

    @if(session('delete'))
        <div class="alert alert-danger">{{session('delete')}}</div>
    @endif

        <a class="btn btn-success" href="{{route('assurance.create')}}">Add</a>
        <table class="table table-striped">
            <tr>
                <td>Image</td>
                <td>Libelle</td>
                <td>Montant</td>
                <td>Bonus</td>
                <td>Types</td>
                <td>Options</td>

            </tr>

            @foreach($assurances as $a)
                <tr>
                    <td>
                        <img src="{{ asset('storage/'.$a->image) }}" width="70">
                    </td>
                    <td>{{$a->libelle}}</td>
                    <td>{{$a->montant}}</td>
                    <td>{{$a->bonus}}</td>
                    <td>{{$a->type->libelle}}</td>
                    <td>
                        <form action="{{route('assurance.destroy',[$a->id])}}" method="post">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger" type="submit">Supprimer</button>
                        </form>

                        <a class="btn btn-primary"  href="{{route('assurance.edit',[$a->id])}}">Modifier</a>
                    </td>

                </tr>
            @endforeach
        </table>
    {{$assurances->links()}}
@endsection
