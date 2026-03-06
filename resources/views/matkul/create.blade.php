<h2>Tambah Data</h2>

<form action="/matkul" method="POST">

@csrf

<input type="text" name="kode" placeholder="Kode"><br><br>
<input type="text" name="nama" placeholder="Nama"><br><br>
<input type="text" name="jurusan" placeholder="Jurusan"><br><br>

<button type="submit">Simpan</button>

</form>