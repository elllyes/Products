
@props(['name','label','type','value'])
    <div class="row mb-3">
        <label for="{{ $name }}" class="col-md-4 col-form-label text-md-end"> {{ $label }}</label>
            <div class="col-md-7">
                <input type="{{$type}}" class="form-control @error('{{ $name }}') is-invalid @enderror"
                     name="{{ $name }}" value = "{{$value}}" autocomplete="{{ $name }}" id="{{ $name }}" >

                    @error($name)
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
            </div>
    </div>
