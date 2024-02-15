@extends('master')
@section('content')
<div  style="margin-top:10%;" class="relative flex items-top justify-center min-h-screen sm:items-center py-4 sm:pt-0" >
    <table class="table-auto">
        <thead>
          <tr>
            <th style="width:1%;">#</th>
            <th style="width:5%;">Date</th>
            <th style="width:5%;">Visitors</th>
            <th style="width:5%;">Page Title</th>
            <th style="width:5%;">Page Views</th>
          </tr>
        </thead>
        <tbody>
            @php
                $no = 0;
            @endphp
          @foreach ($analyticsData as $data)
          <tr>
            <td>{{ ++$no }}</td>
            <td>{{ $data['date'] }}</td>
            <td>{{ $data['visitors'] }}</td>
            <td>{{ $data['pageTitle'] }}</td>
            <td>{{ $data['pageViews'] }}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
</div>
@endsection
