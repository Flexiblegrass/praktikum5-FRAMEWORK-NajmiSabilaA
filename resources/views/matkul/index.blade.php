<!DOCTYPE html>
<html>
<head>
<title>Data Matkul</title>

<style>

body{
font-family: Arial, Helvetica, sans-serif;
background:#f5f6fa;

display:flex;
justify-content:center;
align-items:center;

min-height:100vh;
margin:0;
}

.container{
background:white;
padding:30px;
border-radius:8px;
width:700px;
box-shadow:0 2px 8px rgba(0,0,0,0.1);
}

h1{
text-align:center;
margin-bottom:30px;
}

table{
border-collapse: collapse;
width:100%;
margin-bottom:30px;
}

th{
background:#2f3640;
color:white;
padding:10px;
text-align:left;
}

td{
padding:10px;
border-bottom:1px solid #ddd;
}

form{
margin-top:20px;
}

.form-group{
margin-bottom:12px;
}

label{
display:inline-block;
width:100px;
}

input{
padding:6px;
width:200px;
border:1px solid #ccc;
border-radius:4px;
}

button{
margin-top:10px;
padding:8px 14px;
background:#44bd32;
border:none;
color:white;
border-radius:4px;
cursor:pointer;
}

button:hover{
background:#4cd137;
}

.btn-edit{
background:#3498db;
color:white;
padding:6px 10px;
border-radius:4px;
text-decoration:none;
margin-right:5px;
}

.btn-edit:hover{
background:#2980b9;
}

.btn-delete{
background:#e84118;
border:none;
color:white;
padding:6px 10px;
border-radius:4px;
cursor:pointer;
}

.btn-delete:hover{
background:#c23616;
}

</style>

</head>

<body>

<div class="container">

<h1>Daftar Matkul</h1>

<table>

<tr>
<th>Kode</th>
<th>Nama</th>
<th>Jurusan</th>
<th>Aksi</th>
</tr>

@forelse($matkuls as $m)

<tr>

<td>{{ $m->kode }}</td>

<td>{{ $m->nama }}</td>

<td>{{ $m->jurusan }}</td>

<td>

<a href="/matkul/{{ $m->id }}/edit" class="btn-edit">Edit</a>

<form action="/matkul/{{ $m->id }}" method="POST" style="display:inline">

@csrf
@method('DELETE')

<button type="submit" class="btn-delete">Delete</button>

</form>

</td>

</tr>

@empty

<tr>
<td colspan="4">Belum ada data matkul.</td>
</tr>

@endforelse

</table>


<h2>Tambah Matkul</h2>

<form action="/matkul" method="POST">

@csrf

<div class="form-group">
<label>Kode :</label>
<input type="text" name="kode" required>
</div>

<div class="form-group">
<label>Nama :</label>
<input type="text" name="nama" required>
</div>

<div class="form-group">
<label>Jurusan :</label>
<input type="text" name="jurusan" required>
</div>

<button type="submit">Tambah Matkul</button>

</form>

</div>

</body>
</html>