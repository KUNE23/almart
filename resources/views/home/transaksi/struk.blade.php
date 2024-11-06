<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan 1</title>
    <style>
         .kotak {
            border: 1px solid black;
            padding: 10px;
            width: 350px;
        }
    </style>
</head>
<body onload="print()" target="_blank">

<div class="kotak">
    <table border="0" width="350">
        <tr>
            <td colspan="4">
                <Center>
                    <b>Almart</b>
                    <br> Jl. Arjuna No. 120
                    <br> Bandung
                    <br>
                    <br>               
                </Center>
            </td>
        </tr>
        <tr>
            <td colspan="2">ID Transaksi : {{ $transaksi->id }} <br>
            <hr></td>
            <td colspan="2">Kasir :{{ $transaksi->user->nama }} <br>
            <hr></td>
        </tr>
        <tr>
            <td colspan="2">Nama Produk :</td>
            <td colspan="2" align="right"> {{ $produk->namaproduk }} </td>
        </tr>
        <tr>
            <td colspan="2">Jumlah :</td>
            <td colspan="2" align="right"> {{ $detailtransaksi->jumlah }} </td>
        </tr>
        <tr>
            <td colspan="2">Diskon :</td>
            <td colspan="2" align="right"> {{ number_format($transaksi->diskon) }} </td>
        </tr>

        <tr>
            <td colspan="2"><hr>Total :</td>
           
            <td colspan="2" align="right"><hr> {{ number_format($transaksi->total) }} </td>
        </tr>

        <tr>
            <td colspan="2">Bayar :</td>
            <td colspan="2" align="right">{{ number_format($transaksi->bayar) }} </td>
        </tr>

        <tr>
            <td colspan="2">Kembalian :</td>
            <td colspan="2" align="right"> {{ number_format($transaksi->kembalian) }} </td>
        </tr>

        <tr>
            <td colspan="2"><hr>Tanggal : {{ $transaksi->created_at }} </td>
        </tr>

    </table>
</div>
</body>
</html>