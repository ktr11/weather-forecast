@extends('common')
@section('contents')
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form method="post" action="{{ url('/weather/show') }}">
        {{ csrf_field() }}
        <div class="form-group">
            <label class="col-sm-1 control-label">area:</label>
            <div class="col-sm-4">
                <select name="area" class="form-control">
                    <option value="">please select</option>
                    <option value="2130037">Hokkaidō</option>
                    <option value="1850147">Tokyo</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-1 col-sm-10">
                <input type="submit" class="btn btn-default" value="send">
            </div>
        </div>
    </form>
@endsection