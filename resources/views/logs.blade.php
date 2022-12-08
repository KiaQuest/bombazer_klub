@php
    $name = [10 => 'login', 11 => 'forum', 12 => 'chat', 13 => 'joined', 14 => 'buy'];
@endphp

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<style>
    .txt {
        word-wrap: anywhere;
    }
</style>

<div class="col-md-12 col-sm-12">
    <table class="table table-striped table-dark" style="text-align: center">

        <thead>
            <tr>
                <th scope="col">UserID</th>
                <th scope="col">Name</th>
                <th scope="col">Action</th>
                <th scope="col">Effect</th>
                <th scope="col">Fee</th>
                <th scope="col">IP</th>
                <th scope="col">Date</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($data as $box)
                <tr>
                    <th>{{ $box->user_id }}</th>
                    <th>{{ $box->name }}</th>
                    <td>{{ $name[$box->action] }}</td>
                    <td class="txt">{{ $box->effect }}</td>

                    <td>{{ $box->fee }}</td>
                    <td>{{ $box->ip1 }}</td>
                    <td>{{ $box->created_at }}</td>
                </tr>
            @endforeach
        </tbody>

    </table>
</div>
