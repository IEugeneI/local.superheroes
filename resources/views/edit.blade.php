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
            <td>  <a href="/changes/edit/{{$hero->id}}">Edit</a></td>
        </tr>
    @endforeach



    </tbody>
</table>


</body>
</html>
