@extends('layouts.app')

@section('content')
<script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<table style="width:100%">
    <tr>
        <th>Delete task</i></th>
        <th></th>
        <th>Subject</th>
        <th>Priority</th>
        <th>Due Date</th>
        <th>Status</th>
        <th>Percent Complete</th>
        <th>Modified date</th>
    </tr>

    @foreach ($tasks as $item)
    @php
        $sub = $item['subject']
    @endphp
    <tr>
        <td><a href="/del/{{ $sub }}" class="btn btn-danger">X</a></td>
        <td>
            @if ($item['status'] =="Complete")
            <i class="fa fa-check"></i>
            @elseif ($item['status'] == "New")
            <i class="fa fa-plus"></i>
            @elseif ($item['status'] == "In Progress")
            <i class="fa fa-spinner"></i>
            @endif
        </td>
        <td>{{ $item['subject'] }}</td>
        <td>
            @if($item['priority'] == "High")
            <div class="d-flex py-2">
                <button type="button" class="btn btn-danger">{{ $item['priority'] }}</button>
            @elseif ($item['priority'] == "Normal")
                <button type="button" class="btn btn-primary">{{ $item['priority'] }}</button>
            @elseif ($item['priority'] == "Low")
                <button type="button" class="btn btn-success">{{ $item['priority'] }}</button>
            @else
                <button type="button" class="btn btn-dark">{{ $item['priority'] }}</button>
            @endif
        </td>
        <td>{{ $item['dueDate'] }}</td>
        <td>{{ $item['status'] }}</td>
        <td>
            {{ $item['percComplete'] }}%
            <div class="progress">
                <div class="progress-bar bg-success" role="progressbar" style="width: {{ $item['percComplete'] }}%" aria-valuenow="{{ $item['percComplete'] }}" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </td>
        <td>{{ $item['modifiedOn'] }}</td>
    </tr>
@endforeach
</table>
<style>
    table, th, td {
  border: 1px solid black;
  padding: 5px;
  justify-content:center;
  align-items:center;
}
.btn-default,.btn-primary,.btn-success,.btn-info,.btn-warning,.btn-danger {
    border-radius:23px;
</style>
@endsection