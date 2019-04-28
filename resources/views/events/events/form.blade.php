<div class="form-group {{ $errors->has('title') ? 'has-error' : ''}}">
    <label for="title" class="control-label">{{ 'Title' }}</label>
    <input class="form-control" name="title" type="text" id="title" value="{{ isset($event->title) ? $event->title : ''}}" required>
    {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('subtitle') ? 'has-error' : ''}}">
    <label for="subtitle" class="control-label">{{ 'Subtitle' }}</label>
    <input class="form-control" name="subtitle" type="text" id="subtitle" value="{{ isset($event->subtitle) ? $event->subtitle : ''}}" >
    {!! $errors->first('subtitle', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('content') ? 'has-error' : ''}}">
    <label for="content" class="control-label">{{ 'Content' }}</label>
    <textarea class="form-control" rows="5" name="content" type="textarea" id="content" >{{ isset($event->content) ? $event->content : ''}}</textarea>
    {!! $errors->first('content', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('date') ? 'has-error' : ''}}">
    <label for="date" class="control-label">{{ 'Date' }}</label>
    <input class="form-control" name="date" type="date" id="date" value="{{ isset($event->date) ? $event->date : ''}}" >
    {!! $errors->first('date', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('time') ? 'has-error' : ''}}">
    <label for="time" class="control-label">{{ 'Time' }}</label>
    <input class="form-control" name="time" type="time" id="time" value="{{ isset($event->time) ? $event->time : ''}}" >
    {!! $errors->first('time', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Venue') ? 'has-error' : ''}}">
    <label for="Venue" class="control-label">{{ 'Venue' }}</label>
    <input class="form-control" name="Venue" type="text" id="Venue" value="{{ isset($event->Venue) ? $event->Venue : ''}}" >
    {!! $errors->first('Venue', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('cover_image') ? 'has-error' : ''}}">
    <label for="cover_image" class="control-label">{{ 'Cover Image' }}</label>
    <input class="form-control" name="cover_image" type="file" id="cover_image" value="{{ isset($event->cover_image) ? $event->cover_image : ''}}" >
    {!! $errors->first('cover_image', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('user_id') ? 'has-error' : ''}}">
    <label for="user_id" class="control-label">{{ 'User Id' }}</label>
    {{-- <input class="form-control" name="user_id" type="number" id="user_id" value="{{ isset($event->user_id) ? $event->user_id : ''}}" > --}}
    <input class="form-control" name="user_id" type="number" id="user_id" value="{{ auth()->user()->id }}" >
    {!! $errors->first('user_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('programme') ? 'has-error' : ''}}">
    <label for="programme" class="control-label">{{ 'Programme' }}</label>
    <select name="programme" class="form-control" id="programme" >
    @foreach (json_decode('{"technology":"Technology","tips":"Tips","health":"Health"}', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($event->programme) && $event->programme == $optionKey) ? 'selected' : ''}}>                                                                @include('include.productdropdown')
            </option>
    @endforeach
</select>
    {!! $errors->first('programme', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
