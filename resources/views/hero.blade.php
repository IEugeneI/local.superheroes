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


<table class="table table-dark">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Nickname</th>
        <th scope="col">Origin Description</th>
        <th scope="col">Super Power</th>
        <th scope="col">Catch Phrase</th>
        <th scope="col">Image 1</th>
        <th scope="col">Image 2</th>
        <th scope="col">Image 3</th>
    </tr>
    </thead>
    <tbody>

        <tr>
            <?php $image=explode(',' ,$hero->images);?>
            <td>  {{ $hero->nickname }}</td>
            <td>  {{ $hero->origin_description }}</td>
            <td>  {{ $hero->superpowers }}</td>
            <td>  {{ $hero->catch_phrase }}</td>
            <td>  {{ $hero->nickname }}</td>
            <td >  <img src="{{$image[0]}}" style="height:100px;"></td>
            <td >  <img src="{{$image[1]}}" style="height:100px;"></td>
            <td >  <img src="{{$image[2]}}" style="height:100px;"></td>

        </tr>


    </tbody>
</table>

<button class="btn" name="return" onclick="back()">Return</button>


<script>
    function back()
    {
        window.location.assign('http://'+window.location.host);
    }
</script>

</body>
</html>