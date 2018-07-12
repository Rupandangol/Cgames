{{--include css and js here--}}
@section('css')
    <style>
        .bg-hangman {
            min-height: 520px;
            background: rgba(250, 50, 150, 0.2);
        }
    </style>
@endsection

@section('js')
    <script>
        var server = {
            word: 'abcdefgabcdefg',
            hint: 'No hint! hehehe',
            chance: 5,
        }
    </script>
    <script src="{{url('js/Hangman.js')}}"></script>
@endsection


@include('includes.header')

<div class="row" id="Hangman" style="min-height: 350px;">
    <div class="col-md-8 order-md-2 text-center">
        <router-view class="bg-hangman">

        </router-view>
    </div>
    <div class="col-md-2 order-md-1 text-center">
        <h1>1</h1>
    </div>
    <div class="col-md-2 order-md-3 text-center">
        <h1>2</h1>
    </div>
</div>

@include('includes.footer')
