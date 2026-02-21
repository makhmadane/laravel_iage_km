<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

    <div class="container mt-5">
        <button class="btn btn-success">Add</button>
        <table class="table table-striped">
            <tr>
                <td>ID</td>
                <td>Libelle</td>
                <td>Montant</td>
                <td>Bonus</td>
                <td>Options</td>

            </tr>

            @foreach($assurances as $a)
                <tr>
                    <td>{{$a->id}}</td>
                    <td>{{$a->libelle}}</td>
                    <td>{{$a->montant}}</td>
                    <td>{{$a->bonus}}</td>
                    <td>
                        <button class="btn btn-danger">Supprimer</button>
                        <button class="btn btn-primary">Modifier</button>
                    </td>

                </tr>
            @endforeach
        </table>

    </div>
</body>
</html>
