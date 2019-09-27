<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <!-- Styles -->

    </head>
    <body>
    {!! Form::open(array('url' => '/changes','method'=>'GET')) !!}
        <button class="btn-success" name="Added">Added</button>
        <button class="btn-primary" name="Edit">Edit</button>
        <button class="btn-danger" name="Delete">Delete</button>
    {!! Form::close() !!}
        <table class="table table-dark">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nickname</th>
                <th scope="col">Image</th>
                <th scope="col">Read More</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($superheroes as $hero)
                <tr>
                    <?php $image=explode(',' ,$hero->images);?>
                    <td>  {{ $hero->id }}</td>
                    <td>  {{ $hero->nickname }}</td>
                    <td >  <img src="{{$image[0]}}" style="height:100px;"></td>
                    <td>  <a href="/hero/{{ $hero->id }}">Read more</a></td>
                </tr>
            @endforeach



            </tbody>
        </table>

        {{ $superheroes->links() }}



    </body>
</html>
