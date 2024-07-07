@extends('layouts.notif')

@section('container')

<!-- Link CSS -->
<link rel="stylesheet" href="css/notif.css">

<div class="title">
    <a>Notifications</a>
</div>

<div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
              <th scope="col">No.</th>
              <th scope="col">Messages</th>
              <th scope="col">Date Added</th>
              <th scope="col">Date Updated</th>
              <th scope="col">Created By</th>
            </tr>
        </thead>
    </table>
</div>

@endsection