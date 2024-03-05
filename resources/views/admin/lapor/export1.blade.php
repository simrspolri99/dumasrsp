<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pelaporan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .header {
            font-size:15px;
            text-align: left;
            margin-bottom: 5px;
        }
        .judul {
            font-size: 14.5px;
            text-align: center;
            margin-bottom: 0.15px;
            padding-bottom: 0.25px;
        }
        .pelapor {
            font-size:13px;
            text-align: left;
            margin-bottom: 2px;
        }
        .pelapor p {
            margin: 2px 0;
        }
        .hr_lapor {
            font-size:13px;
            text-align: left;
            margin-bottom: 2px;
        }
        .perihal {
            font-size:13px;
            text-align: left;
            margin-bottom: 2px;
        }
        .content {
            font-size:13px;
            text-align: left;
            margin-bottom: 2px;
        }
        .footer {
            text-align: center;
            margin-top: 50px;
        }
        table {
            width: 100%;
        }
        table tr td {
            padding: 5px 0;
            margin-bottom: 2px;
        }
        .ttd {
            font-size: 13px;
            margin-top: 20px;
        }
        .ttd table {
            width: 100%;
            border: 0;
        }
        .ttd td {
            padding: 5px 0;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="judul">
        <table width="0" border="0">
          <tbody>
            <tr>
              <th width="10%" scope="col"><img src="img/logo.png" width="89" height="93" alt=""/></th>
              <th width="78%" scope="col">PUSAT KEDOKTERAN DAN KESEHATAN POLRI <br>
                RUMAH SAKIT BHAYANGKARA TK I PUSDOKKES POLRI <br>
              Jalan Raya Bogor Kramat Jati Jakarta Timur 13510 </th>
			<th width="12%"></th>
            </tr>
          </tbody>
        </table>
        <p>LEMBAR KOMPLAIN/PENGADUAN
        <br></p>
        <p> Nomor : B/ND-       /  {{ date('m') }}     /HUM.3.4.4/2023/Bag Binfung </p>
        <!-- Tambahkan garis di bawah paragraf terakhir -->
        <hr style="border: none; border-top: 1px solid black; margin-top: 5px;">
</div>

    <div class="hr_lapor">
      <table border="0">
            <tr>
                <td width="29%">Hari</td>
                <td width="4%">:</td>
                <td width="67%">{{ date('D') }}</td>
            </tr>
            <tr>
                <td>Tanggal</td>
                <td>:</td>
                <td>{{ date('d/m/Y') }}</td>
            </tr>
            <tr>
                <td>Pukul</td>
                <td>:</td>
                <td>{{ date('H:i:s') }} </td>

            </tr>
      </table>
        <hr style="border: none; border-top: 1px solid black; margin-top: 5px;">
    </div>

    <div class="pelapor">
      <table border="0">
            <tr>
                <td width="29%">Nama</td>
                <td width="4%">:</td>
                <td width="67%">{{$name}}</td>
            </tr>
            <tr>
                <td>Telepon Pelapor</td>
                <td>:</td>
                <td>{{$no_telp}}</td>
            </tr>
            <tr>
                <td>Email Pelapor</td>
                <td>:</td>
                <td>{{$email}}</td>
            </tr>
      </table>
        <hr style="border: none; border-top: 1px solid black; margin-top: 5px;">
    </div>

    <div class="perihal">
        <table border="0">
            <tr>
                <td width="29%">Perihal</td>
                <td width="4%">:</td>
              <td width="67%"> {{ $post->judul }}</td>
            </tr>
        </table>
        <hr style="border: none; border-top: 1px solid black; margin-top: 5px;">
    </div>

    <div class="content">
        <table border="0">
            <tr>
                <h4>Kronologis</h4>
              <p>{{ $post->isi }}</p>
            </tr>
        </table>
        <hr style="border: none; border-top: 1px solid black; margin-top: 5px;">
    </div>


    <div class="ttd">
      <table>
            <tr>
                <td width="50%">
                    <p>Pelapor</p>
                    <br><br><br>
                    <p>({{$name}})</p>
                </td>
                <td width="50%">
                    <p>Penerima</p>
                    <br><br><br>
                    <p>({{$user_login}})</p>
                </td>
            </tr>
      </table>
    </div>

</body>
</html>
