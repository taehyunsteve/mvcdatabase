<h1>Daftar Mahasiswa</h1>
<table border="1">
    <thead>
        <tr>
            <th>Nama</th>
            <th>Prodi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($students as $student) <tr>
            <td>{{ $student->name }}</td>
            <td>{{ $student->prodi }}</td>
        </tr>
        @endforeach
    </tbody>
</table>