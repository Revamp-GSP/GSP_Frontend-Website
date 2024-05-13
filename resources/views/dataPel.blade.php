@extends('layouts.main')

@section('container')

<link rel="stylesheet" href="css/dataPel.css">


<div class="title">
    <a>Data Pelanggan</a>
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
    <a>Table Customers</a>
</div>
<div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
              <th scope="col">No.</th>
              <th scope="col">ID Pelanggan</th>
              <th scope="col">Nama Pelanggan</th>
              <th scope="col">Sebutan</th>
              <th scope="col">Date Added</th>
              <th scope="col">Date Updated</th>
              <th scope="col">Created By</th>
            </tr>
        </thead>
        <tbody>
            @php
                $baseNumber = ($customers->currentPage() - 1) * $customers->perPage() + 1;
            @endphp
            @foreach ($customers as $customer)
                <tr>
                    <td>1</td>
                    <td>{{ $customer->id_pelanggan }}</td>
                    <td>{{ $customer->nama_pelanggan }}</td>
                    <td>{{ $customer->sebutan }}</td>
                    <td>{{ $customer->date_added }}</td>
                    <td>{{ $customer->date_updated }}</td>
                    <td>{{ $customer->created_by }}</td>

                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection