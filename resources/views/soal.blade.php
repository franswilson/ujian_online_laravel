@extends('template/layout')

@section('content')
<b>Ujian Online Pilihan Ganda</b>
<div style='width:100%; border: 1px solid #EBEBEB; overflow:scroll;height:700px;'>
    <table width="100%" border="0">

        @php
        $angka = 1;
        @endphp
        @foreach($soal as $s)
        <form name="form1" method="post" action="jawab.php">
            <input type="hidden" name="id[]" value="{{$s->id}}">
            <input type="hidden" name="jumlah" value="{{$s->jumlah}}">
            <tr>
                <td width="17">
                    <font color="#000000">{{$angka}}</font>
                </td>
                <td width="430">
                    <font color="#000000">{{$s->soal}}</font>
                </td>
            </tr>
            @if($s->gambar)
            <tr>
                <td></td>
                <td><img src='foto/{{$s->gambar}}' width='200' hight='200'></td>
            </tr>
            @endif
            <tr>
                <td height="21">
                    <font color="#000000">&nbsp;</font>
                </td>
                <td>
                    <font color="#000000">
                        A. <input name="pilihan{{$s->id}}" type="radio" value="A">
                        {{$s->a}}</font>
                </td>
            </tr>
            <tr>
                <td>
                    <font color="#000000">&nbsp;</font>
                </td>
                <td>
                    <font color="#000000">
                        B. <input name="pilihan{{$s->id}}" type="radio" value="B">
                        {{$s->b}}</font>
                </td>
            </tr>
            <tr>
                <td>
                    <font color="#000000">&nbsp;</font>
                </td>
                <td>
                    <font color="#000000">
                        C. <input name="pilihan{{$s->id}}" type="radio" value="C">
                        {{$s->c}}</font>
                </td>
            </tr>
            <tr>
                <td>
                    <font color="#000000">&nbsp;</font>
                </td>
                <td>
                    <font color="#000000">
                        D. <input name="pilihan[{{$s->id}}]" type="radio" value="D">
                        {{$s->d}}</font>
                </td>
            </tr>
            @php
            $angka++;
            @endphp
            @endforeach
            <tr>
                <td>&nbsp;</td>
                <td><input type="submit" name="submit" value="Jawab" onclick="return confirm('Apakah Anda yakin dengan jawaban Anda?')"></td>
            </tr>
    </table>
    </form>
    </p>
</div>

@endsection