<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1>Create Country</h1>

        <form action="/countries/create" method="POST">

            @csrf
<!-- Cross-Site Request Forgery (CSRF) attack theke bachate -->

            <div class="form-group">
                <label for="">Country Name</label>
                <input type="text" name="name" class="form-control">
            </div>

            <div class="form-group">
                <label for="">Capital Name</label>
                <input type="text" name="capital" class="form-control">
            </div>

            <div class="form-group">
                <label for="">Currency Name</label>
                <input type="text" name="currency" class="form-control">
            </div>

            <div class="form-group">
                <label for="">Population</label>
                <input type="text" name="population" class="form-control">
            </div>

            <button type="submit" class="btn btn-primary">Create Country</button>
        
        </form>

    </div>
</body>
</html>