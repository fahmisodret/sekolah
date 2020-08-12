<div class="form-group{{ $errors->has('nama') ? 'has-error' : ''}}">
    {!! Form::label('nama', 'Nama', ['class' => 'control-label']) !!}
    {!! Form::text('nama', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('nama', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('nik') ? 'has-error' : ''}}">
    {!! Form::label('nik', 'Nik', ['class' => 'control-label']) !!}
    {!! Form::text('nik', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('nik', '<p class="help-block">:message</p>') !!}
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
<div class="form-group{{ $errors->has('tempat_lahir') ? 'has-error' : ''}}">
    {!! Form::label('tempat_lahir', 'Tempat Lahir', ['class' => 'control-label']) !!}
    {!! Form::text('tempat_lahir', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('tempat_lahir', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('tgl_lahir') ? 'has-error' : ''}}">
    {!! Form::label('tgl_lahir', 'Tgl Lahir', ['class' => 'control-label']) !!}
    {!! Form::date('tgl_lahir', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('tgl_lahir', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('grade') ? 'has-error' : ''}}">
    {!! Form::label('grade', 'Grade', ['class' => 'control-label']) !!}
    {!! Form::text('grade', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('grade', '<p class="help-block">:message</p>') !!}
</div>
@if(isset($karyawan))
    <div class="form-group">
        <img class="col-sm-3" src="{{Storage::url('upload/karyawan/'.$karyawan->image)}}">
    </div>
@endif
<div class="form-group{{ $errors->has('image') ? 'has-error' : ''}}">
    <label for="image" class="control-label">Image</label>
    <input type="file" class="form-control" name="image" placeholder="image" required>
    <span class="text-danger"><strong>max: 2mb</strong></span>
    {!! $errors->first('image', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('jk') ? 'has-error' : ''}}">
    <label for="is_show" class="control-label">Tampilkan(Kepala Sekolah)</label>
    <div class="col-md-12">
        <input type="radio" name="is_show" value="0" {{(isset($karyawan) && $karyawan->jk == '0')?'Checked':'Checked'}}>Tidak Tampil
        <input type="radio" name="is_show" value="1" {{(isset($karyawan) && $karyawan->jk == '1')?'Checked':''}}>Tampilkan
        @error('role')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>
<div class="form-group{{ $errors->has('message') ? 'has-error' : ''}}">
    {!! Form::label('message', 'Message', ['class' => 'control-label']) !!}
    {!! Form::textarea('message', null, ('' == 'required') ? ['class' => 'form-control editors', 'required' => 'required'] : ['class' => 'form-control editors']) !!}
    {!! $errors->first('message', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    {!! Form::submit($formMode === 'edit' ? 'Update' : 'Create', ['class' => 'btn btn-primary']) !!}
</div>
