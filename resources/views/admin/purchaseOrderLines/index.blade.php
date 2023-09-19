@extends('admin.layouts.admin')

@section('title', __('views.admin.purchase.order.lines.index.title'))

@section('content')
    <div class="row">
        <div class="col-md-12">
            <a href="{{ route('admin.purchase.order.lines.create')}}">
                <button >Create</button>
            </a>     
        </div>
    </div>
    <div class="row">
        <table class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0"
               width="100%">
            <thead>
            <tr>
                <th>@sortablelink('product_id', __('views.admin.purchase.order.lines.index.table_header_0'),['page' => $purchaseOrderLines->currentPage()])</th>
                <th>@sortablelink('qty',  __('views.admin.purchase.order.lines.index.table_header_1'),['page' => $purchaseOrderLines->currentPage()])</th>
                <th>@sortablelink('price', __('views.admin.purchase.order.lines.index.table_header_2'),['page' => $purchaseOrderLines->currentPage()])</th>
                <th>@sortablelink('discount', __('views.admin.purchase.order.lines.index.table_header_3'),['page' => $purchaseOrderLines->currentPage()])</th>
                <th>@sortablelink('total', __('views.admin.purchase.order.lines.index.table_header_4'),['page' => $purchaseOrderLines->currentPage()])</th>
                <th>@sortablelink('created_at', __('views.admin.purchase.order.lines.index.table_header_5'),['page' => $purchaseOrderLines->currentPage()])</th>
                <th>@sortablelink('updated_at', __('views.admin.purchase.order.lines.index.table_header_6'),['page' => $purchaseOrderLines->currentPage()])</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($purchaseOrderLines as $purchaseOrderLine)
                <tr>
                    <td>{{ $purchaseOrderLine->product_id }}</td>
                    <td>{{ $purchaseOrderLine->qty }}</td>
                    <td>{{ $purchaseOrderLine->price }}</td>
                    <td>{{ $purchaseOrderLine->discount }}</td>
                    <td>{{ $purchaseOrderLine->total }}</td>
                    <td>{{ $purchaseOrderLine->created_at }}</td>
                    <td>{{ $purchaseOrderLine->updated_at }}</td>
                    <td>
                        <a class="btn btn-xs btn-primary" href="{{ route('admin.purchase.order.lines.show', [$purchaseOrderLine->id]) }}" data-toggle="tooltip" data-placement="top" data-title="{{ __('views.admin.purchase.order.lines.index.show') }}">
                            <i class="fa fa-eye"></i>
                        </a>
                        <a class="btn btn-xs btn-info" href="{{ route('admin.purchase.order.lines.edit', [$purchaseOrderLine->id]) }}" data-toggle="tooltip" data-placement="top" data-title="{{ __('views.admin.purchase.order.lines.index.edit') }}">
                            <i class="fa fa-pencil"></i>
                        </a>
                            <a href="{{ route('admin.purchase.order.lines.destroy', [$purchaseOrderLine->id]) }}" class="btn btn-xs btn-danger user_destroy" data-toggle="tooltip" data-placement="top" data-title="{{ __('views.admin.purchase.order.lines.index.delete') }}">
                                <i class="fa fa-trash"></i>
                            </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="pull-right">
            {{ $purchaseOrderLines->links() }}
        </div>
    </div>
@endsection
