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
        <h1>Country List</h1>

        <p> <a href="/countries/create">Create New Country</a> </p>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Capital</th>
                    <th>Currency</th>
                    <th>Population</th>
                    <th>Created on</th>
                    <th>Updated on</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($countries as $country)
<!--$countries hosse CountriesController.php er moddhe ata $countries = Country::all(); -->
<!-- $countries(associative array) ekhon $country(key) dia bar bar forecach loop cholbe r $countries variable
 theke 1bar kore value $country variable(key) a jabe r print hobe,ai vabe db table a joto value ase ai vabe 1bar
kore loop chole value print hobe  -->
                    <tr>
                        <td>{{ $country->id }}</td>

<!-- <td><a href="/countries/{{$country->id}}"> {{ $country->name }} </a></td> -->
                        
                        <td>{{ $country->name }}</td>
                        <td>{{ $country->capital }}</td>
                        <td>{{ $country->currency }}</td>
                        <td>{{ $country->population }}</td>
                        <td>{{ $country->created_at->diffforhumans() }}</td>
<!-- min,sec,hour,day,year etc kotokhon purbe post diyese ta dekhabe -->
                        <td>{{ $country->updated_at-> format('d - M - Y') }}</td>

                        <td> <a href="/countries/{{$country->id}}" class="btn btn-success btn-sm">View</a> 
<!-- $country->id bolte $country ta hosse foreach er key($country) -->
                        <a href="/countries/{{$country->id}}/edit" class="btn btn-success btn-sm">Edit</a>
<!--delete er jonne ai nicher code korte hobe r route a url a set korar somoy get method na dia delete method dite hobe
tai niche delete er ato code like: csrf method('delete') etc.. jate url dia jeno kono resource delete na kora jai-->
                        <form action="/countries/{{$country->id}}/delete" method="post">
                                @csrf 
                                @method('delete')
                           <center><button type="submit" style="margin-right:19px; padding:0px 8px 1px 8px" class="btn btn-danger btn-sm">Delete</button></center>
                        </form>
                        </td>
<!-- $country hosse key -->       
                    </tr>
                @endforeach
            </tbody>    
        </table>

    </div>
</body>
</html>