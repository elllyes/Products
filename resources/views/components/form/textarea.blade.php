@props(['name','label','value'])
<div class="row mb-3">
    <label for="{{$name}}" class="col-md-4 col-form-label text-md-end">{{$label}}</label>

        <div class="col-md-7">
      <textarea class="form-control @error('{{$name}}') is-invalid @enderror" id="{{$name}}" rows="2"
         name ="{{$name}}" autocomplete="{{$name}}" >{{$value}}</textarea>

          @error('{{$name}}')
              <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
              </span>
          @enderror
      </div>
</div>
