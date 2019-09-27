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

<button class="btn" name="return" onclick="back()">Return</button>


{!! Form::model($superheroe,['url'=>'/changes/edit','method'=>'POST','files'=>true])!!}
<div class="form-group">
    {!! Form::label('nick','Nick') !!}
    {!! Form::text('nickname',null,array('required' => 'required')) !!}
</div>
{!! Form::hidden('id',$superheroe->id) !!}
<div class="form-group">
    {!! Form::label('name','Real Name') !!}
    {!! Form::text('real_name',null,array('required' => 'required')) !!}
</div>


<div class="form-group">
    {!! Form::label('description','Origin Description') !!}
    {!! Form::textarea('origin_description​' ,null, ['id' => 'origin_description', 'rows' => 4, 'cols' => 54,'required']) !!}
</div>
<div class="form-group">
    {!! Form::label('power','Super Power') !!}
    {!! Form::textarea('superpowers' ,null, ['id' => 'superpowers', 'rows' => 4, 'cols' => 54,'required']) !!}
</div>
<div class="form-group">
    {!! Form::label('phrase','Catch Phrase') !!}
    {!! Form::textarea('catch_phrase' ,null, ['id' => 'catch_phrase', 'rows' => 4, 'cols' => 54,'required']) !!}
</div>
<?php $image=explode(',',$superheroe->images);?>
<div class="form-group">
    <img src="{{$image[0]}}" style="height:200px;"/>
    {!! Form::label('img1','Image 1','required')!!}
    {!! Form::file('image1', null) !!}
</div>
<div class="form-group">
    <img src="{{$image[1]}}" style="height:200px;"/>
    {!! Form::label('img2','Image 2') !!}
    {!! Form::file('image2', null) !!}
</div>
<div class="form-group">
    <img src="{{$image[2]}}" style="height:200px;"/>
    {!! Form::label('img3','Image 3') !!}
    {!! Form::file('image3', null) !!}
</div>

{{Form::submit('Update')}}
{!! Form::close() !!}
<script>
    function back()
    {
        window.location.assign('http://'+window.location.host);
    }
</script>
</body>
</html>