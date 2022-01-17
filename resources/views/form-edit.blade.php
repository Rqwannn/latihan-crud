<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Latihan</title>
</head>
<body style="padding: 20px;">
    <form action="{{route('latihan.update', $data->id)}}" method="POST" style="display: flex; flex-direction: column; width: 400px;">
        @method("PUT")
        @csrf
        <input type="text" placeholder="Nama" value="{{$data->nama}}" name="nama" style="padding: 10px; margin-bottom:10px;">
        <textarea name="alamat" style="resize: none; padding: 10px; margin-bottom:10px;" placeholder="Alamat">{{$data->alamat}}</textarea>
        <button type="submit" style="padding: 10px; cursor: pointer; margin-bottom: 10px;">Submit</button>
    </form>
    <a href="{{route('latihan.index')}}">Kembali</a>
</body>
</html>