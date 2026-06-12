@extends('layouts.app')

@section('content')

@include('layouts.head')

<div class="wrapper">

    @include('layouts.sidebar')

    <main class="main-content">

        @include('layouts.header')

        <div class="table-section">

            <!-- HEADER -->
            <div class="d-flex justify-content-between align-items-center mb-4 flex-wrap gap-3">

                <div>
                    <h4>Products List</h4>
                </div>

                <div class="d-flex gap-2">

                    <input type="text" class="form-control" placeholder="Search product...">

                    <button class="btn btn-primary">
                        <i class="bi bi-plus-lg"></i>
                        Add Product
                    </button>

                </div>

            </div>

            <!-- TABLE -->
            <div class="table-responsive">

                <table id="productsTable" class="table table-bordered align-middle">

                    <thead>
                        <tr>
                            <th>Image</th>
                            <th>Product</th>
                            <th>Category</th>
                            <th>Price</th>
                            <th>Stock</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>

                    <tbody></tbody>

                </table>

            </div>

        </div>

    </main>

</div>

@include('layouts.script')

<!-- DataTables Script -->
{{-- <script>
$(document).ready(function () {

    $('#productsTable').DataTable({

        processing: true,
        ajax: {
            url: "/products/data",
            dataSrc: ""
        },

        columns: [

            // IMAGE
            {
                data: "image",
                render: function (data) {

                    if (!data) {
                        return `<img src="https://via.placeholder.com/50" width="50" height="50" style="border-radius:8px;">`;
                    }

                    return `<img src="/uploads/${data}" width="50" height="50" style="border-radius:8px;">`;
                }
            },

            // PRODUCT NAME
            {
                data: "name",
                defaultContent: "-"
            },

            // CATEGORY
            {
                data: "category",
                defaultContent: "-"
            },

            // PRICE
            {
                data: "price",
                render: function (data) {
                    return data ? `$${data}` : "$0";
                }
            },

            // STOCK
            {
                data: "stock",
                defaultContent: 0
            },

            // STATUS
            {
                data: "stock",
                render: function (stock) {

                    stock = parseInt(stock) || 0;

                    if (stock > 10) {
                        return `<span class="badge bg-success">In Stock</span>`;
                    } 
                    else if (stock > 0) {
                        return `<span class="badge bg-warning">Low Stock</span>`;
                    } 
                    else {
                        return `<span class="badge bg-danger">Out of Stock</span>`;
                    }
                }
            },

            // ACTIONS (MongoDB FIX → id)
            {
                data: "id",
                render: function (id) {

                    return `
                        <a href="/products/${id}/edit" class="btn btn-sm btn-primary">
                            <i class="bi bi-pencil"></i>
                        </a>

                        <button class="btn btn-sm btn-danger deleteBtn" data-id="${id}">
                            <i class="bi bi-trash"></i>
                        </button>
                    `;
                }
            }

        ]
    });

});
</script> --}}

<script type="text/javascript">
$(document).ready(function () {

    $('#product_table').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('products.index') }}",
        columns: [
            { data: 'id', name: 'id' },
            { data: 'image', name: 'image' },
            { data: 'name', name: 'name' },
            { data: 'price', name: 'price' }
            { data: 'category', name: 'category' }
            { data: 'stock', name: 'stock' }
            { data: 'category', name: 'category' }

    // ACTIONS (MongoDB FIX → id)
            {
                data: "id",
                render: function (id) {

                    return `
                        <a href="/products/${id}/edit" class="btn btn-sm btn-primary">
                            <i class="bi bi-pencil"></i>
                        </a>

                        <button class="btn btn-sm btn-danger deleteBtn" data-id="${id}">
                            <i class="bi bi-trash"></i>
                        </button>
                    `;
                }
            }

        ]
    });

});
</script>

@endsection