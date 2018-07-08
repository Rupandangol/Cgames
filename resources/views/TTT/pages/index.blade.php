@include('includes.header')

<div class="row">
    <div class="col-md-8 order-md-2 text-center">
        <img src="{{url('images/game/dummy.jpg')}}" alt="image" width="100%">
    </div>
    <div class="col-md-2 order-md-1 text-center">
        <h1>1</h1>
    </div>
    <div class="col-md-2 order-md-3 text-center">
        <h1>2</h1>
    </div>
</div>

@include('includes.footer')


{{--include css and js here--}}
@section('css')

@endsection

@section('js')

@endsection
