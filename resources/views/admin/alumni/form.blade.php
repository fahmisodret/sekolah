<div class="form-group{{ $errors->has('nama') ? 'has-error' : ''}}">
    {!! Form::label('nama', 'Nama', ['class' => 'control-label']) !!}
    {!! Form::text('nama', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('nama', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('jk') ? 'has-error' : ''}}">
    {!! Form::label('jk', 'Jk', ['class' => 'control-label']) !!}
    {!! Form::number('jk', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('jk', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('tgl_lahir') ? 'has-error' : ''}}">
    {!! Form::label('tgl_lahir', 'Tgl Lahir', ['class' => 'control-label']) !!}
    {!! Form::input('datetime-local', 'tgl_lahir', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('tgl_lahir', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('thn_lulus') ? 'has-error' : ''}}">
    {!! Form::label('thn_lulus', 'Thn Lulus', ['class' => 'control-label']) !!}
    {!! Form::text('thn_lulus', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('thn_lulus', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('nis') ? 'has-error' : ''}}">
    {!! Form::label('nis', 'Nis', ['class' => 'control-label']) !!}
    {!! Form::text('nis', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('nis', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('alamat') ? 'has-error' : ''}}">
    {!! Form::label('alamat', 'Alamat', ['class' => 'control-label']) !!}
    {!! Form::textarea('alamat', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('alamat', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('email') ? 'has-error' : ''}}">
    {!! Form::label('email', 'Email', ['class' => 'control-label']) !!}
    {!! Form::text('email', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('telepon') ? 'has-error' : ''}}">
    {!! Form::label('telepon', 'Telepon', ['class' => 'control-label']) !!}
    {!! Form::text('telepon', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('telepon', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('phone') ? 'has-error' : ''}}">
    {!! Form::label('phone', 'Phone', ['class' => 'control-label']) !!}
    {!! Form::text('phone', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('phone', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('image') ? 'has-error' : ''}}">
    {!! Form::label('image', 'Image', ['class' => 'control-label']) !!}
    {!! Form::text('image', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('image', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    {!! Form::submit($formMode === 'edit' ? 'Update' : 'Create', ['class' => 'btn btn-primary']) !!}
</div>
