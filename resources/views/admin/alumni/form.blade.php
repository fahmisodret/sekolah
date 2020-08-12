<div class="form-group{{ $errors->has('nama') ? 'has-error' : ''}}">
    {!! Form::label('nama', 'Nama', ['class' => 'control-label']) !!}
    {!! Form::text('nama', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('nama', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('jk') ? 'has-error' : ''}}">
    <label for="jk" class="control-label">Jenis Kelamin</label>
    <div class="col-md-12">
        <input type="radio" name="jk" value="L" {{(isset($karyawan) && $karyawan->jk == 'L')?'checked':''}}>Laki-Laki
        <input type="radio" name="jk" value="P" {{(isset($karyawan) && $karyawan->jk == 'P')?'checked':''}}>Perempuan
        @error('role')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
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
@if(isset($karyawan))
    <div class="form-group">
        <img class="col-sm-3" src="{{Storage::url('upload/karyawan/'.$karyawan->image)}}">
    </div>
@endif
<div class="form-group{{ $errors->has('image') ? 'has-error' : ''}}">
    <label for="image" class="control-label">Image</label>
    <input type="file" class="form-control" name="image" placeholder="image">
    <span class="text-danger"><strong>max: 2mb</strong></span>
    {!! $errors->first('image', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    {!! Form::submit($formMode === 'edit' ? 'Update' : 'Create', ['class' => 'btn btn-primary']) !!}
</div>
