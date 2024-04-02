<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input Nilai Mahasiswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            background-color: #f5f5f5;
        }
        .container {
            max-width: 600px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        form {
            display: grid;
            grid-gap: 15px;
        }
        .form-group {
            display: grid;
            grid-template-columns: 1fr 3fr;
            align-items: center;
        }
        label {
            font-weight: bold;
        }
        input[type="text"] {
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }
        input[type="submit"] {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Form Input Nilai Mahasiswa</h2>
        <form action="hasilMahasiswa.php" method="post">
            <div class="form-group">
                <label for="nim">NIM:</label>
                <input type="text" id="nim" name="nim" required>
            </div>
            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" id="nama" name="nama" required>
            </div>
            <div class="form-group">
                <label for="kuliah">Kuliah:</label>
                <input type="text" id="kuliah" name="kuliah" required>
            </div>
            <div class="form-group">
                <label for="mataKuliah">Mata Kuliah:</label>
                <input type="text" id="mataKuliah" name="mataKuliah" required>
            </div>
            <div class="form-group">
                <label for="nilai">Nilai:</label>
                <input type="text" id="nilai" name="nilai" required>
            </div>
            <input type="submit" value="Simpan">
        </form>
    </div>
</body>
</html>
