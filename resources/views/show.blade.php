@extends('layouts.app')

@section('content')
    <body>
    <div class="container-fluid">
        <div class="card-body table-responsive">
            <table class="table table-light table-hover table-responsive">
                <thead>
                <tr class="text-left">
                    <th>Category name</th>
                    <th>Short description</th>
                    <th>Long description</th>
                    <th>Enabled</th>
                    <th>Published</th>
                    <th>Edit</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($categories as $category)

                    <tr class="cat" data-category="{{$category->name}}"
                        data-link="/products.show/?category={{$category->id}}" role="button">

                        <td>{{($category->name)}} </td>
                        <td>{{($category->short_description)}} </td>
                        <td class="text-left w-150px"
                            style="word-wrap: break-word; max-width: 400px">{{($category->long_description)}}</td>

                        <td>@if ($category->enabled == 1)
                                <i class="fas fa-check-circle" style="color:green"></i>
                            @else
                                <i class="fas fa-check-circle" style="color:grey"></i>
                            @endif</td>

                        <td> @if($category->published ==1)
                                <i class="fas fa-check-circle" style="color:green"></i>
                            @else
                                <i class="fas fa-check-circle" style="color:grey"></i>
                            @endif
                        </td>
                        <td><a class="btn btn-outline-light btn-link" href="{{route('category.show', $category->id)}}"
                               role="button">
                                <i class="fas fa-pencil-alt"></i>Edit
                            </a>
                        </td>
                        <td>

                    </tr>
                @endforeach
                </tbody>
            </table>

        </div>
    </div>
    <script>
        document.querySelectorAll(".cat").forEach((row) => {
            row.addEventListener("click", () => {
                let link = row.dataset.link
                window.location.assign(link);
            });
        });
    </script>
    {{--    <script>--}}

    {{--            const prod = document.getElementById("cat")--}}
    {{--            $(document).ready(function ($) {--}}
    {{--                prod.addEventListener("click",(function () {--}}
    {{--                    prod.dataset.link = "/products.show/?category={{$category->id}}";--}}
    {{--                    console.log(prod.dataset.link);--}}
    {{--                     window.location.assign = prod.dataset.link;--}}
    {{--                }));--}}
    {{--            });--}}

    {{--    </script>--}}
    </body>
@endsection





{{--<script>--}}
{{--    function goTo() {--}}
{{--        const prod = document.getElementById("cat")--}}
{{--        prod.addEventListener("click", () => {--}}
{{--            prod.dataset.link = /products/show ? category = {{$category->id}}--}}
{{--            console.log(prod.dataset.link)--}}
{{--window.location = $(this).data("href");--}}
{{--        });--}}
{{--    }--}}
{{--</script>--}}
