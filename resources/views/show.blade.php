@extends('common')
@section('contents')
    <table class="table">
        <colgroup>
            <col width="30%">
            <col width="70%">
        </colgroup>
        <tr>
            <th>date</th>
            <td>{{ date('Y/m/d') }}</td>
        </tr>
        <tr>
            <th>name</th>
            <td>{{ $record->name }}</td>
        </tr>
        <tr>
            <td colspan="2"><img src="{{ url('img/icon') . '/' .  $record->icon . '.png' }}"></td>
        </tr>
        <tr>
            <th>max&nbsp;temp</th>
            <td>{{ $record->max_temp }}</td>
        </tr>
        <tr>
            <th>min&nbsp;temp</th>
            <td>{{ $record->min_temp }}</td>
        </tr>
    </table>
    <a class="btn btn-default" href="{{ url('/') }}">back</a>
@endsection