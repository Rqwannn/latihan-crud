<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Latihan</title>
</head>
<body style="padding: 20px;">
    <form action="{{route('latihan.store')}}" method="POST" style="display: flex; flex-direction: column; width: 400px;">
        @if (session('Pesan')) :
            <div style="width: 100%; background: green; color: white; margin-bottom: 10px;">
                <p style="margin-left: 10px;">{{session('Pesan')}}</p>
            </div>
        @endif
        @csrf
        <input type="text" placeholder="Nama" name="nama" style="padding: 10px; margin-bottom:10px;">
        <textarea name="alamat" style="resize: none; padding: 10px; margin-bottom:10px;" placeholder="Alamat"></textarea>
        <button type="submit" style="padding: 10px; cursor: pointer; margin-bottom: 10px;">Submit</button>
    </form>

    <table>
        <thead>
            <tr>
                <th style="padding: 15px;">Nama</th>
                <th style="padding: 15px;">Alamat</th>
                <th style="padding: 15px;">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $result)
                <tr>
                    <td style="padding: 15px;">{{$result->nama}}</td>
                    <td style="padding: 15px;">{{$result->alamat}}</td>
                    <td style="padding: 15px;">
                        <div style="display: flex;">
                            <a href="{{route('latihan.edit', $result->id)}}" style="margin-left: 5px; padding: 10px; text-decoration: none; color: white; cursor: pointer; background: blue;">
                                Update
                            </a>
                            <form action="{{route('latihan.destroy', $result->id)}}" method="POST" onsubmit="confirm('Apakah Anda Yakin?')">
                                @method("delete")
                                @csrf
                                <button type="submit" name="id" style="border: none;margin-left: 5px; padding: 10px; text-decoration: none; color: white; cursor: pointer; background: red;">Hapus</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>