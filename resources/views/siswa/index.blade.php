<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="{{ url('css/style.css')}}">

  <title> TugasJany</title>
</head>
<body>

</body>
</html>
 
<h1> TABEL MAHASISWA KELAS PRAKTIKUM PAW D</h1>
<table border="2">
<thead>
    <tr>
        <th>No.</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Alamat</th>
        <th>Options</th> {{-- Tambahkan Ini --}}
    </tr>
</thead>
<tbody>
    @php
        $no = 1;
    @endphp
    @foreach($data as $items)
    <tr>
        <td>{{ $no++ }}</td>
        <td>{{ $items->nama }}</td>
        <td>{{ $items->email }}</td>
        <td>{{ $items->alamat }}</td>
        <td>
        {{-- Tambahkan Ini --}}
        <form action="{{ route('siswa.destroy', $items->id) }}" method="post">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
            <a href="{{ route('siswa.show',$items->id) }}">Lihat</a>
            <a type="submit" href="{{ route('siswa.edit',$items->id) }}">Edit</a>
            <button type="submit" onclick="return confirm('Yakin ingin menghapus data?')">Delete</button>
        </form>
        </td>
    </tr>
    @endforeach
</tbody>
</table>