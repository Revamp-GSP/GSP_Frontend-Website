@extends('layouts.main')

@section('container')

<link rel="stylesheet" href="css/dataPel.css">


<div class="title">
    <a>Data Pelanggan</a>
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