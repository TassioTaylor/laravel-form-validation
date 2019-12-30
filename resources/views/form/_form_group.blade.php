<div class="form-group{{$errors->has($field)?' has-error':''}}">
    {{ $slot }}
    <span class="alert-danger">{{$errors->first($field)}}</span>
</div>