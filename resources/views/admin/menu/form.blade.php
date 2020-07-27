<div class="form-group{{ $errors->has('title') ? 'has-error' : ''}}">
    {!! Form::label('title', 'Title', ['class' => 'control-label']) !!}
    {!! Form::text('title', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('url') ? 'has-error' : ''}}">
    {!! Form::label('url', 'Url', ['class' => 'control-label']) !!}
    {!! Form::text('url', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('url', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('hasSub') ? 'has-error' : ''}}">
    <label class="control-label">HasSub</label>
    <div class="radio">
        <label><input type="radio" name="hasSub" value="1" {{ ((isset($menu->hasSub)) && $menu->hasSub == true)?'checked':''}}> <b>Ada</b></label> &nbsp;&nbsp;&nbsp;
        <label><input type="radio" name="hasSub" value="0" {{ ((isset($menu->hasSub)) && $menu->hasSub == false)?'checked':''}}> <b>Tidak Ada</b></label>
    </div>
</div>
<div class="form-group{{ $errors->has('subs') ? 'has-error' : ''}}">
    {!! Form::label('subs', 'Subs', ['class' => 'control-label']) !!}
    <span class="text-danger">Contoh = [{"title":"Formulir PPDB","url":"\/front\/home"}]</span>
    <textarea name="subs" class="form-control" rows="4">{{(isset($menu->subs))?json_encode($menu->subs):''}}</textarea>
    {!! $errors->first('subs', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group">
    {!! Form::submit($formMode === 'edit' ? 'Update' : 'Create', ['class' => 'btn btn-primary']) !!}
</div>
