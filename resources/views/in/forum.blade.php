@extends('tem')
@section('section')
    <script>
        console.log('yaya');


        setTimeout(() => {
            window.scrollTo(0, document.body.scrollHeight);
        }, 100);
    </script>


    <style>
        .footer {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            background-color: whitesmoke;
            color: salmon;
            text-align: center;
        }
        .box {
            border: outset 1px;
            display: table;
            width: 100%;
            text-align: left;
            padding: 1%;
            border-radius: 20px;
            position: relative;
            margin-top: 1%;
            word-break: break-all;
        }
        span {
            right: 10px;
            position: absolute;
            font-size: xx-small;
            bottom: 15%;
        }
        .main {
            padding: 8%
        }
        h6 {
            text-align: left;
            margin-bottom: 0;
        }

        @media all and (max-width: 800px) {
            .box {
                padding: 4%;
            }

            span {
                bottom: 5%;
            }

            form {
                display: flex;
                justify-content: space-evenly;
            }
        }
        hr {
            border: dashed 1px;
        }
        textarea {
            border-radius: 5px;
        }
        .main {
            margin-bottom: 50px;
        }
    </style>

    @php
        $buyun = 0;
    @endphp
    <h3>Forum « əncomən »</h3>
    {{-- <h3>Hələ açılmiyip</h3> --}}
    <div class="main">
        @foreach ($forum->reverse() as $item)
            {{-- @if ($loop->iteration < $loop->count - 5)
@continue
        @endif --}}
            {{-- {{ date('Y-m-d H:i:s') }}
<br>
{{ $item->created_at->format('Y-m-d') }} --}}

            @if (date('Y-m-d') < $item->created_at and $buyun == 0)
                @php
                    $buyun = 'today';
                @endphp
                <div style="float:left; width: 34%;"> <hr /> </div> buyun <div style="float:right; width: 34%;"> <hr /> </div>
                @php
                    $buyun = 1;
                @endphp
            @endif


            <div @if ($item->user_id == session('userID')) style ="color : cornflowerblue" @endif>
                <h6>{{ $item->nickname }}</h6>
                <p class="box">{{ $item->text }} <span>{{ $item->created_at }}</span> </p>
            </div>
        @endforeach
    </div>


    <div class="footer">
        <p>

        <div class="txt">
            <form action="{{ route('forum2') }}" method="post">
                @csrf
                <textarea name="text" cols="30" rows="2" placeholder="Çət ..." maxlength="250"></textarea>
                <input type="submit" value="Gondər">
            </form>
        </div>

        </p>
    </div>
@endsection
