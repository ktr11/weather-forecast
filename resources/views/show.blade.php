@extends('common')
@section('contents')
    <table class="table">
        <colgroup>
            <col width="30%">
            <col width="70%">
        </colgroup>
        <tr>
            <th>date</th>
            <th class="font_bold">{{ date('Y/m/d') }}</th>
        </tr>
        <tr>
            <th>name</th>
            <th class="font_bold">{{ $record->name }}</th>
        </tr>
        <tr>
            <th colspan="2"><img src="{{ url('img/icon') . '/' .  $record->icon . '.png' }}"></th>
        </tr>
        <tr>
            <th>max&nbsp;temp</th>
            <th>{{ $record->max_temp }}</th>
        </tr>
        <tr>
            <th>min&nbsp;temp</th>
            <th>{{ $record->min_temp }}</th>
        </tr>
    </table>
    <a class="btn btn-default" href="{{ url('/') }}">back</a>
@endsection