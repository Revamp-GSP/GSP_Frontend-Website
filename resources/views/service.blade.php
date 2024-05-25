@extends('layouts.main')

@section('container')

<link rel="stylesheet" href="css/service.css">

<div class="title">
    <a>Service</a>
</div>
<div class="searchBar">
    <form action="/search" method="GET">
      <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Search..." name="search">
        <div class="input-group-append">
          <button class="btn btn-primary" type="submit">Search</button>
        </div>
      </div>
    </form>
    <!-- Display search results or other content here -->
</div>
<div class="title">
    
</div>
<div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
              <th scope="col">No.</th>
              <th scope="col">Produk</th>
              <th scope="col">ID Service</th>
              <th scope="col">Nama Layanan</th>
              <th scope="col">Deskripsi</th>
              <th scope="col">Date Added</th>
              <th scope="col">Date Updated</th>
              <th scope="col">Created By</th>
            </tr>
        </thead>
        <tbody>
            @php
                $baseNumber = ($products->currentPage() - 1) * $products->perPage() + 1;
            @endphp
            @foreach ($products as $product)
                <tr>
                    <td>{{ $baseNumber + $loop->index }}</td>
                    <td>{{ $product->produk }}</td>
                    <td>{{ $product->id_service }}</td>
                    <td>{{ $product->nama_service }}</td>
                    <td>{{ $product->deskripsi }}</td>
                    <td>{{ $product->date_added }}</td>
                    <td>{{ $product->date_updated }}</td>
                    <td>{{ $product->created_by }}</td>

                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection