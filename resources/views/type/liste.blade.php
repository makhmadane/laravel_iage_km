@extends('template')

@section('content')
    <a class="btn btn-success" href="{{route('addAssurance')}}">Add</a>
    <table class="table table-striped">
        <tr>
            <td>ID</td>
            <td>Libelle</td>
            <td>Options</td>

        </tr>

        @foreach($types as $a)
            <tr>
                <td>{{$a->id}}</td>
                <td>{{$a->libelle}}</td>

                <td>
                    <form action="{{route('deleteAssurance',[$a->id])}}" method="post">
                        @csrf
                        @method('delete')
                        <button class="btn btn-danger" type="submit">Supprimer</button>
                    </form>

                    <button class="btn btn-primary">Modifier</button>
                </td>

            </tr>
        @endforeach
    </table>
@endsection
