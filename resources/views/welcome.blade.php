@extends('layouts.app')
@section('content')




<br class = "relative flex items-top justify-center min-h-screen sm:items-center py-4 sm:pt-0">
    <a href="{{ route('category.create') }}" class="link-warning">Go to create</a>
    <br>
    <a href="{{ route('category.index') }}" class="link-warning"> Go to categories </a>
</div>


@endsection
