<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>{{ 'Welcome' }} </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>

<body>
<div class="container col-xl-10 col-xx1-8 px-4 py-5">
    <h1 class="display-4 fw-bold 1h-1 mb-3">Tambahkan Data Baru</h1>
<div class="input-group mb-3">
  <a href="http://127.0.0.1:8000/"><button class="btn btn-outline-secondary " style="background-color: #EBD4CC; right: -1150px; top: -60px"type="button" id="button-addon1">Back</button></a>
</div>
<div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Foto Id:</label>
    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Foto Id">
    <br>
    <label for="exampleFormControlInput1" class="form-label">Deskripsi Foto:</label>
    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Deskripsi Foto">
    <br>
    <label for="exampleFormControlInput1" class="form-label">Tanggal Uanggah:</label>
    <input type="date" class="form-control" id="exampleFormControlInput1" placeholder="Tanggal Unggah">
    <br>
    <label for="exampleFormControlTextarea1" class="form-label">File Location :</label>
    <div class="input-group mb-3">
        <input type="file" class="form-control" id="inputGroupFile02"></div>
    <br>
    <label for="exampleFormControlInput1" class="form-label">Album Id:</label>
    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Album Id">
    <br>
    <label for="exampleFormControlInput1" class="form-label">User Id:</label>
    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="User Id">
    <br>
    <label for="exampleFormControlTextarea1" class="form-label">Detail:</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Detail"></textarea>
    <br>
    <!-- <div class="input-group mb-3">
    <input type="text" class="form-control" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
    </div>  -->
    <label for="exampleFormControlTextarea1" class="form-label">Image :</label>
    <div class="input-group mb-3">
        <input type="file" class="form-control" id="inputGroupFile02">
        </div>
    <div class="input-group mb-3">
        <button class="btn btn-outline-secondary" style="margin-left : 550px; background-color: #EBD4CC " type="button" id="button-addon1">Upload</button>
        </div>

</div>
</body>
</html>
