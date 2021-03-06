{{--include css and js here--}}
@section('css')
    <style>
        .bg-ttt {
            min-height: 520px;
            background: rgba(250, 50, 150, 0.2);
        }
    </style>
@endsection

@section('js')
    <script>
        var serverPlayer = {
            name1: 'Player O',
            score1: 0,
            name2: 'Player X',
            score2: 0
        };
    </script>
    <script src="{{url('js/TTT.js')}}"></script>
@endsection


@include('includes.header')

<div class="row" id="TTT" style="min-height: 350px;">
    <div class="col-md-8 order-md-2 text-center">
        <router-view class="bg-ttt">

        </router-view>
        {{--<img src="{{url('images/game/dummy.jpg')}}" alt="image" width="100%">--}}
    </div>
    <div class="col-md-2 order-md-1 text-center">
        <h1>1</h1>
    </div>
    <div class="col-md-2 order-md-3 text-center">
        <h1>2</h1>
    </div>
</div>

@include('includes.footer')
