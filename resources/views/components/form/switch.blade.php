
@props(['name','label','value','id'])
<div class="row mb-3">
    <label for="{{ $name }}" class="col-md-4 col-form-label text-md-end"></label>
        <div class="col-md-7">
        
            <div class="form-check form-switch">
                <input type = "hidden" name = "{{$name}}" value = "0">
                 <input class="form-check-input" type="checkbox" role="switch" name = "{{$name}}" id = "{{$name}}"
                 onclick = "myFunction()" value = "1" {{$value == 1 ? 'checked' : '' }}>
                    <label class="form-check-label"  for="{{ $name }}">{{$label}}</label>
            </div>
         
        </div>
</div>

