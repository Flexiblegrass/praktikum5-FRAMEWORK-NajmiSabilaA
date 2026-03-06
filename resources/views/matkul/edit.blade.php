<!DOCTYPE html>
<html>
<head>
<title>Edit Data Matkul</title>

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

.form-group{
margin-bottom:15px;
}

label{
display:inline-block;
width:100px;
}

input{
padding:6px;
width:220px;
border:1px solid #ccc;
border-radius:4px;
}

button{
margin-top:10px;
padding:8px 14px;
background:#3498db;
border:none;
color:white;
border-radius:4px;
cursor:pointer;
}

button:hover{
background:#2980b9;
}

.btn-back{
display:inline-block;
margin-top:15px;
text-decoration:none;
background:#7f8c8d;
color:white;
padding:6px 12px;
border-radius:4px;
}

.btn-back:hover{
background:#636e72;
}

</style>

</head>

<body>

<div class="container">

<h1>Edit Data Matkul</h1>

<form action="/matkul/{{ $matkul->id }}" method="POST">

@csrf
@method('PUT')

<div class="form-group">
<label>Kode :</label>
<input type="text" name="kode" value="{{ $matkul->kode }}">
</div>

<div class="form-group">
<label>Nama :</label>
<input type="text" name="nama" value="{{ $matkul->nama }}">
</div>

<div class="form-group">
<label>Jurusan :</label>
<input type="text" name="jurusan" value="{{ $matkul->jurusan }}">
</div>

<button type="submit">Update</button>

</form>

<a href="/matkul" class="btn-back">Kembali</a>

</div>

</body>
</html>