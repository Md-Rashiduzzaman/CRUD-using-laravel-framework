<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
       
                                 <!-- view er code -->
    <div class="container">
    <center>
        <h1 style="color:red"><b><u>Details about:{{ $country->name }}</u></b></h1>
        <h2 style="color:blue">Country Name: {{ $country->name }} </h2>
        <h2 style="color:blue">Country Capital: {{ $country->capital }}</h2>
        <h2 style="color:blue">Country Currency: {{ $country->currency }}</h2>
        <h2 style="color:blue">Country Population: {{ $country->population }}</h2>
        <h2 style="color:blue">Created at: {{ $country->created_at }}</h2>
        <h2 style="color:blue">Updated at: {{ $country->updated_at }}</h2>
        <h1 style="color:green">More information please visit our website.. Thank You.</h1>
    </center>
    </div>

</body>
</html>