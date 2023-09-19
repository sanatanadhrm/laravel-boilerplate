@extends('admin.layouts.admin')

@section('title', __('views.admin.products.index.title'))

@section('content')
    <div class="row">
        <table class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0"
               width="100%">
            <thead>
            <tr>
                <th>@sortablelink('product_name', __('views.admin.products.index.table_header_0'),['page' => $products->currentPage()])</th>
                <th>@sortablelink('product_code',  __('views.admin.products.index.table_header_1'),['page' => $products->currentPage()])</th>
                <th>@sortablelink('price', __('views.admin.products.index.table_header_2'),['page' => $products->currentPage()])</th>
                <th>@sortablelink('created_at', __('views.admin.products.index.table_header_3'),['page' => $products->currentPage()])</th>
                <th>@sortablelink('updated_at', __('views.admin.products.index.table_header_4'),['page' => $products->currentPage()])</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($products as $product)
                <tr>
                    <td>{{ $product->product_name }}</td>
                    <td>{{ $product->product_code }}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->created_at }}</td>
                    <td>{{ $product->updated_at }}</td>
                    <td>
                        <a class="btn btn-xs btn-primary" href="{{ route('admin.products.show', [$product->id]) }}" data-toggle="tooltip" data-placement="top" data-title="{{ __('views.admin.products.index.show') }}">
                            <i class="fa fa-eye"></i>
                        </a>
                        <a class="btn btn-xs btn-info" href="{{ route('admin.products.edit', [$product->id]) }}" data-toggle="tooltip" data-placement="top" data-title="{{ __('views.admin.products.index.edit') }}">
                            <i class="fa fa-pencil"></i>
                        </a>
                            <a href="{{ route('admin.products.destroy', [$product->id]) }}" class="btn btn-xs btn-danger user_destroy" data-toggle="tooltip" data-placement="top" data-title="{{ __('views.admin.products.index.delete') }}">
                                <i class="fa fa-trash"></i>
                            </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="pull-right">
            {{ $products->links() }}
        </div>
    </div>
@endsection
