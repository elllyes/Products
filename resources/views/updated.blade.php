@extends('layouts.app')
@section('content')

<header class="masthead bg-light text-black text-center">
            <div class="container d-flex align-items-center flex-column">
               
                
                <h1 class="masthead-heading text-uppercase mb-0">Categories creator</h1>
               
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>

                        <h4>The {{$category->name}} is updated</h4>

            </div>
        </header>

@endsection