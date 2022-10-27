@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="row-cols-auto">
            <div class="card form-control">
                <div class="card-header form-control">{{$category->name}}</div>

                    <div class="card-body form-control">
                         <form method="POST" action="{{route('category.update', $category->id)}}">
                        @csrf
                        @method('PATCH')
                        <x-form.input name="name" label="Category" type="text" value="{{ old('name', $category->name) }}" required/>
                        <x-form.textarea name="short_description" label="Category short description" required value="{{ old('short_description',$category->short_description) }}"/>
                        <!-- <x-form.tinymce-editor2 /> -->
                        <div class="row mb-3">
                            <label for="long_description" class="col-md-4 col-form-label text-md-end">Category long description</label>
                                <div class="col-md-7">
                                    <textarea name = "long_description" id="long_description" rows="2">{{$category->long_description}}</textarea>
                                </div>
                        </div>

                        <x-form.switch name="enabled" id="enabled" label="Is enabled" value="{{ old('enabled',$category->enabled) }}" />

                        <div class="row mb-3">
                            <label class="col-md-4 col-form-label text-md-end"></label>
                                <div class="col-md-7">

                                    <div class="form-check form-switch"  id="published" {{ old( 'enabled', $category->enabled) == 1 ? 'style=display:block' : 'style=display:none' }} >
                                        <input type = "hidden" name = "published" value = "0">
                                        <input class="form-check-input" type="checkbox" name="published" role="switch" value="1"
                                         {{old('published', $category->published) == 1 ? 'checked' : '' }}>
                                            <label class="form-check-label"  for="published">Is published</label>

                                    </div>
                                </div>
                        </div>
                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary" >
                                        {{ __('Edit') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
