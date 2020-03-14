<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1>Edit Country</h1>

        <form action="/countries/{{ $country->id }}/edit" method="POST">
<!-- countries/{{$country->id}}/edit ekhon route a new url set kora lagbe ja patch method hobe update er jonne -->
<!-- html a sudhu get r post method use kortam r ekhane notun ai @method('patch') method ta shikhbo -->
            
            @csrf
<!-- Cross-site request forgeries attack theke bachate laravel csrf token use kore -->
            @method('patch')
<!--html a get/post method korle controller a bola lage na but patch er khetre controller a method bola ba create kora lage -->
            <div class="form-group">
                <label for="">Country Name</label>
                <input type="text" name="name" class="form-control" value="{{ $country->name }}">
            </div>

            <div class="form-group">
                <label for="">Capital Name</label>
                <input type="text" name="capital" class="form-control" value="{{ $country->capital }}">
            </div>

            <div class="form-group">
                <label for="">Currency Name</label>
                <input type="text" name="currency" class="form-control" value="{{ $country->currency }}">
            </div>

            <div class="form-group">
                <label for="">Population</label>
                <input type="text" name="population" class="form-control" value="{{ $country->population }}">
            </div>

            <button type="submit" class="btn btn-primary">Update Country</button>
        
        </form>

    </div>
</body>
</html>