@extends('layouts.app')

@section('content')

<div class="container-fluid">
<div class="card-body table-responsive">
            <table class="table table-light">
                <thead>
                    <tr class = "text-left">
                        <th>Product name</th>
                        <th>Sku</th>
                        <th>Category</th>
                        <th>Description</th>
                        <th>Price</th>
                        <th>Discount</th>
                        <th>Published</th>
                        <th>Quantity</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        <tr>
                            <td>{{$product->name}} </td>
                            <td>{{$product->sku}} </td>
                            <td>{{$product->category_id}}</td>
                            <td class="text-left w-150px" style = "word-wrap: break-word; max-width: 400px">{{$product->description}}</td>
                            <td>{{$product->price}}</td>
                            <td>{{$product->discount}}</td>
                            <td>
                            @if($product->published ==1)
                                <i class="fas fa-check-circle" style="color:green"></i>
                            @else
                                <i class="fas fa-check-circle" style="color:grey"></i>
                            @endif
                            </td>
                            <td>{{$product->quantity}}</td>
                            <td><a class="btn btn-outline-light btn-link" href="{{route('products.show', $product->id)}}" role="button">
                            <i class="fas fa-pencil-alt"></i>Edit
                            </a>
                           </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
    </body>
</div>
</div>

@endsection
