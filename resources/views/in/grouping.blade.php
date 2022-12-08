@extends('tem')
@section('section')
    <h1>Kateqoriyalar</h1> <br><br><br>
    {{-- @foreach ($gruplar as $grup)
        {{ $grup->groupTag }} ,
    @endforeach --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        a {
            display: contents
        }

        .col-md-4 {
            margin: auto;
            width: unset;
            flex-basis: initial;
        }
        kbd{
            float: inline-end;
        }
    </style>

    <div class="container">
        <div class="row">

            @foreach ($gruplar as $item)
                <div class="col-md-4">
                    <a href="{{ route('club', [$item->id]) }}">
                        <div class="card @if ($item->id != 9 and $item->id != 10) {{ 'text-white' }} @endif mb-3"
                            style="max-width: 18rem;background-color:{{ $item->color }}">
                            <div class="card-header">{{ $item->groupTag }} <kbd>{{ $item->pop }}</kbd></div>
                            <div class="card-body">
                                <h5 class="card-title">Primary card title</h5>
                                <p class="card-text">Some quick example text to build
                                    on the card title and make up the bulk of the
                                    card's content.</p>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach

            {{--
            <div class="col-md-4">
                <a href="{{ route('club', [$gruplar[0]->id]) }}">
                    <div class="card text-white mb-3" style="max-width: 18rem;background-color:#28afc4">
                        <div class="card-header">{{ $gruplar[0]->groupTag }}</div>
                        <div class="card-body">
                            <h5 class="card-title">Primary card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                                the
                                card's content.</p>
                        </div>
                    </div>
                </a>
            </div>


            <div class="col-md-4">
                <a href="{{ route('club', [$gruplar[1]->id]) }}">
                    <div class="card text-white mb-3" style="max-width: 18rem;background-color:#7e8185">
                        <div class="card-header">{{ $gruplar[1]->groupTag }}</div>
                        <div class="card-body">
                            <h5 class="card-title">Secondary card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                                the
                                card's content.</p>
                        </div>
                    </div>
                </a>
            </div>


            <div class="col-md-4">
                <a href="{{ route('club', [$gruplar[2]->id]) }}">
                    <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
                        <div class="card-header">{{ $gruplar[2]->groupTag }}</div>
                        <div class="card-body">
                            <h5 class="card-title">Success card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                                the
                                card's content.</p>
                        </div>
                    </div>
                </a>
            </div>


            <div class="col-md-4">
                <a href="{{ route('club', [$gruplar[3]->id]) }}">
                    <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
                        <div class="card-header">{{ $gruplar[3]->groupTag }}</div>
                        <div class="card-body">
                            <h5 class="card-title">Danger card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                                the
                                card's content.</p>
                        </div>
                    </div>
                </a>
            </div>


            <div class="col-md-4">
                <a href="{{ route('club', [$gruplar[4]->id]) }}">
                    <div class="card text-white bg-warning mb-3" style="max-width: 18rem;">
                        <div class="card-header">{{ $gruplar[4]->groupTag }}</div>
                        <div class="card-body">
                            <h5 class="card-title">Warning card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                                the  card's content.</p>
                        </div>
                    </div>
                </a>
            </div>


            <div class="col-md-4">
                <a href="{{ route('club', [$gruplar[5]->id]) }}">
                    <div class="card text-white mb-3" style="max-width: 18rem;background-color:#0059ff">
                        <div class="card-header">{{ $gruplar[5]->groupTag }}</div>
                        <div class="card-body">
                            <h5 class="card-title">Info card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                                the  card's content.</p>
                        </div>
                    </div>
                </a>
            </div>


            <div class="col-md-4">
                <a href="{{ route('club', [$gruplar[6]->id]) }}">
                    <div class="card mb-3 text-white" style="max-width: 18rem;background-color:darkseagreen">
                        <div class="card-header">{{ $gruplar[6]->groupTag }}</div>
                        <div class="card-body">
                            <h5 class="card-title">Light card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                                the  card's content.</p>
                        </div>
                    </div>
                </a>
            </div>


            <div class="col-md-4">
                <a href="{{ route('club', [$gruplar[7]->id]) }}">
                    <div class="card text-white mb-3" style="max-width: 18rem;background-color:#262c31">
                        <div class="card-header">{{ $gruplar[7]->groupTag }}</div>
                        <div class="card-body">
                            <h5 class="card-title">Dark card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                                the card's content.</p>
                        </div>
                    </div>
                </a>
            </div>


            <div class="col-md-4">
                <a href="{{ route('club', [$gruplar[8]->id]) }}">
                    <div class="card  mb-3" style="max-width: 18rem;">
                        <div class="card-header">{{ $gruplar[8]->groupTag }}</div>
                        <div class="card-body">
                            <h5 class="card-title">Dark card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                                the  card's content.</p>
                        </div>
                    </div>
                </a>
            </div>


            <div class="col-md-4">
                <a href="{{ route('club', [$gruplar[9]->id]) }}">
                    <div class="card  mb-3" style="max-width: 18rem; background-color:greenyellow">
                        <div class="card-header">{{ $gruplar[9]->groupTag }}</div>
                        <div class="card-body">
                            <h5 class="card-title">Dark card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                                the card's content.</p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-4">
                <a href="{{ route('club', [$gruplar[10]->id]) }}">
                    <div class="card text-white mb-3" style="max-width: 18rem;background-color: purple">
                        <div class="card-header">{{ $gruplar[10]->groupTag }}</div>
                        <div class="card-body">
                            <h5 class="card-title">Dark card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                                the  card's content.</p>
                        </div>
                    </div>
                </a>
            </div>


            <div class="col-md-4">
                <a href="{{ route('club', [$gruplar[11]->id]) }}">
                    <div class="card text-white mb-3" style="max-width: 18rem;background-color:darkolivegreen">
                        <div class="card-header">{{ $gruplar[11]->groupTag }}</div>
                        <div class="card-body">
                            <h5 class="card-title">Dark card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                                the card's content.</p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-4">
                <a href="{{ route('club', [$gruplar[12]->id]) }}">
                    <div class="card text-white mb-3" style="max-width: 18rem;background-color:#995223">
                        <div class="card-header">{{ $gruplar[12]->groupTag }}</div>
                        <div class="card-body">
                            <h5 class="card-title">Dark card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                                the card's content.</p>
                        </div>
                    </div>
                </a>
            </div> --}}

        </div>
    </div>
@endsection
