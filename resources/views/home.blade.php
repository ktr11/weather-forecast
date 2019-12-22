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
                <option value="2130656">Aomori-ken</option>
                <option value="2112518">Iwate-ken</option>
                <option value="2113124">Akita-ken</option>
                <option value="2111888">Miyagi-ken</option>
                <option value="2110554">Yamagata-ken</option>
                <option value="2112922">Fukushima-ken</option>
                <option value="2112669">Ibaraki-ken</option>
                <option value="1850310">Tochigi-ken</option>
                <option value="1863501">Gunma-ken</option>
                <option value="1853226">Saitama-ken</option>
                <option value="2113014">Chiba-ken</option>
                <option value="1850147">Tokyo</option>
                <option value="1860291">Kanagawa-ken</option>
                <option value="1848649">Yamanashi-ken</option>
                <option value="1856210">Nagano-ken</option>
                <option value="1855429">Niigata-ken</option>
                <option value="1849872">Toyama-ken</option>
                <option value="1861387">Ishikawa-ken</option>
                <option value="1863983">Fukui-ken</option>
                <option value="1851715">Shizuoka-ken</option>
                <option value="1865694">Aichi-ken</option>
                <option value="1863640">Gifu-ken</option>
                <option value="1857352">Mie-ken</option>
                <option value="1852553">Shiga-ken</option>
                <option value="1857910">Kyoto</option>
                <option value="1853909">Osaka-shi</option>
                <option value="1862047">Hyōgo-ken</option>
                <option value="1855608">Nara-ken</option>
                <option value="1848938">Wakayama-ken</option>
                <option value="1849890">Tottori-ken</option>
                <option value="1852442">Shimane-ken</option>
                <option value="1854381">Okayama-ken</option>
                <option value="1862413">Hiroshima-ken</option>
                <option value="1848681">Yamaguchi-ken</option>
                <option value="1860834">Kagawa-ken</option>
                <option value="1864226">Ehime-ken</option>
                <option value="1850157">Tokushima-ken</option>
                <option value="1859133">Kōchi-ken</option>
                <option value="1863958">Fukuoka-ken</option>
                <option value="1853299">Saga-ken</option>
                <option value="1856156">Nagasaki-ken</option>
                <option value="1858419">Kumamoto-ken</option>
                <option value="1854484">Ōita-ken</option>
                <option value="1856710">Miyazaki-ken</option>
                <option value="1860825">Kagoshima-ken</option>
                <option value="1854345">Okinawa-ken</option>
            </select>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-1 col-sm-10">
            <input type="submit" class="btn btn-default" value="send">
        </div>
    </div>
    <div id="app">
        <weather-component></weather-component>
    </div>
    <script src="{{ mix('js/app.js') }}"></script>
</form>
@endsection