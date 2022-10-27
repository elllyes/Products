@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row justify-content-center ">
        <div class="row-cols-auto">
            <div class="card form-control">
                <div class="card-header form-control">Create category</div>

                <div class="card-body form-control">
                    <form method="POST" action="{{ route('category.store') }}">
                        @csrf
                        <x-form.input name="name" label="Category" type="text" value="{{ old('name') }}" required/>
                        <x-form.textarea name="short_description" label="Category short description" required value="{{ old('short_description') }}"/>
                        <x-form.tinymce-editor/>


                        <x-form.switch name="enabled" id="enabled" label="Is enabled" value="{{ old('enabled') }}" />
                        <div class="row mb-3">
                            <label class="col-md-4 col-form-label text-md-end"></label>
                                <div class="col-md-7">

                                    <div class="form-check form-switch" style="display:none" id="published">
                                        <input type = "hidden" name = "published" value = "0">
                                        <input class="form-check-input" type="checkbox" name="published" role="switch" value="1"
                                         {{old('published') == 1 ? 'checked' : '' }}>
                                            <label class="form-check-label"  for="published">Is published</label>
                                    </div>
                                   </div>
                                </div>
                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary" >
                                    {{ __('Create') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection
