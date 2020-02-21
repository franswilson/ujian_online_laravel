@extends('template/layout')

@section('content')

<div class="row">

    <div class="col-10">
        <table class="table table-striped table-bordered">
            <thead>
                <th>#</th>
                <th>NAMA</th>
                <th>NPM</th>
                <th>MODUL</th>
                <th>NILAI</th>

            </thead>
            <tbody>
                @foreach($tbl_nilai as $nl)
                <tr>
                    <th scopes="row">{{$loop->iteration}}</th>
                    <td>{{$nl->nama}}</td>
                    <td>{{$nl->npm}}</td>
                    <td>{{$nl->modul}}</td>
                    <td>{{$nl->nilai}}</td>


                </tr>
                @endforeach
            </tbody>
        </table>

    </div>

</div>

@endsection