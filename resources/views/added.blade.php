{!! Form::open(array('url' => '/changes/create','method'=>'POST','files'=>true)) !!}
<div class="form-group">
{!! Form::label('nick','Nick') !!}
{!! Form::text('nickname','',array('required' => 'required')) !!}
</div>
<div class="form-group">
{!! Form::label('name','Real Name') !!}
{!! Form::text('real_name','',array('required' => 'required')) !!}
</div>
<div class="form-group">
{!! Form::label('description','Origin Description') !!}
{!! Form::textarea('origin_description' ,null, ['id' => 'origin_description', 'rows' => 4, 'cols' => 54,'required']) !!}
</div>
<div class="form-group">
{!! Form::label('power','Super Power') !!}
{!! Form::textarea('superpowers' ,null, ['id' => 'superpowers', 'rows' => 4, 'cols' => 54,'required']) !!}
</div>
<div class="form-group">
{!! Form::label('phrase','Catch Phrase') !!}
{!! Form::textarea('catch_phrase' ,null, ['id' => 'catch_phrase', 'rows' => 4, 'cols' => 54,'required']) !!}
</div>
<div class="form-group">
{!! Form::label('img1','Image 1','required')!!}
{!! Form::file('image1', null) !!}
</div>
<div class="form-group">
{!! Form::label('img2','Image 2') !!}
{!! Form::file('image2', null) !!}
</div>
<div class="form-group">
{!! Form::label('img3','Image 3') !!}
{!! Form::file('image3', null) !!}
</div>

{{Form::submit('Create')}}
{!! Form::close() !!}
