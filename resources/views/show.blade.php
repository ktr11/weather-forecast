@extends('common')
@section('contents')
    <table class="table">
        <colgroup>
            <col width="30%">
            <col width="70%">
        </colgroup>
        <tr>
            <th>date</th>
            <td class="font_bold">{{ date('Y/m/d') }}</td>
        </tr>
        <tr>
            <th>name</th>
            <td class="font_bold">{{ $record->name }}</td>
        </tr>
        <tr>
            <td colspan="2"><img src="{{ url('img/icon') . '/' .  $record->icon . '.png' }}"></td>
        </tr>
        <tr>
            <th>max&nbsp;temp</th>
            <td class="font_bold">{{ $record->max_temp }}</td>
        </tr>
        <tr>
            <th>min&nbsp;temp</th>
            <td class="font_bold">{{ $record->min_temp }}</td>
        </tr>
    </table>
    <a class="btn btn-default" href="{{ url('/') }}">back</a>
@endsection