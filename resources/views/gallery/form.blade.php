<div class="form-group {{ $errors->has('title') ? 'has-error' : ''}}">
    <label for="title" class="control-label">{{ 'Title' }}</label>
    <input class="form-control" name="title" type="text" id="title" value="{{ isset($gallery->title) ? $gallery->title : ''}}" required>
    {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('subtitle') ? 'has-error' : ''}}">
    <label for="subtitle" class="control-label">{{ 'Subtitle' }}</label>
    <textarea class="form-control" rows="5" name="subtitle" type="textarea" id="subtitle" >{{ isset($gallery->subtitle) ? $gallery->subtitle : ''}}</textarea>
    {!! $errors->first('subtitle', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('body') ? 'has-error' : ''}}">
    <label for="body" class="control-label">{{ 'Body' }}</label>
    <textarea class="form-control" rows="5" name="body" type="textarea" id="body" >{{ isset($gallery->body) ? $gallery->body : ''}}</textarea>
    {!! $errors->first('body', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('cover_image') ? 'has-error' : ''}}">
    <label for="cover_image" class="control-label">{{ 'Cover Image' }}</label>
    <input class="form-control" name="cover_image" type="file" id="cover_image" value="{{ isset($gallery->cover_image) ? $gallery->cover_image : ''}}" >
    {!! $errors->first('cover_image', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('user_id') ? 'has-error' : ''}}">
    <label for="user_id" class="control-label">{{ 'User Id' }}</label>
    <input class="form-control" name="user_id" type="number" id="user_id" value="{{ isset($gallery->user_id) ? $gallery->user_id : ''}}" >
    {!! $errors->first('user_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('product_id') ? 'has-error' : ''}}">
    <label for="product_id" class="control-label">{{ 'Product Id' }}</label>
    <input class="form-control" name="product_id" type="number" id="product_id" value="{{ isset($gallery->product_id) ? $gallery->product_id : ''}}" >
    {!! $errors->first('product_id', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
