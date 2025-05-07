@extends('layout.app')

@section('title', 'product')

@section('content')

    @foreach ($brands as $brand)
        <h2 style="text-align:center; color: #CDD">{{ $brand->name }}</h2>
        @if ($brand->products->count())
            <table class="table table-striped table-dark">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">Product Name</th>
                        <th scope="col">Product Price ($)</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($brand->products as $product)
                        <tr>
                            <th scope="row">{{ $brand ->id }}</th>
                            <td>{{ $product->name }}</td>
                            <td>{{ number_format($product->price, 2) }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    @endforeach
@endsection;
