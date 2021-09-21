<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Muslim Sharing Solution and Spirit</title>
</head>
<body>
    <div class="container">
        <div class="title">Pendafataran Muslim Sharing Solution & Spirit</div>
        <form action="" method="POST">
            <div class="user-details">
                <div class="input-box">
                    <label class="details" for="nim">NIM</label>
                    <input type="text" id="nim" name="nim" placeholder="Masukkan nim kamu">
                </div>
                <div class="input-box">
                    <label class="details" for="nama">Nama</label>
                    <input type="text" id="nama" name="nama" placeholder="Masukkan nama kamu">
                </div>
                <div class="input-box">
                    <label class="details" for="email">E-mail</label>
                    <input type="email" id="email" name="email" placeholder="Masukkan email kamu">
                </div>
                <div class="input-box">
                    <label class="details" for="whatsapp">WhatsApp</label>
                    <input type="text" id="whatsapp" name="whatsapp" placeholder="Masukkan whatsapp kamu">
                </div>
                <div class="input-box">
                    <label class="details" for="tlahir">Tanggal Lahir</label>
                    <input type="date" name="tlahir" id="tlahir">
                </div>
                <div class="input-box">
                    <label class="details" for="angkatan">Angkatan</label>
                    <input type="text" name="angkatan" id="angkatan" value="2021" id="" disabled>
                </div>
                <div class="input-box">
                    <label class="details" for="jurusan">Jurusan</label>
                    <select name="jurusan">
                        <option value="">-- Pilih jurusan kamu --</option>
                        <option value="Ilmu Komputer">S1 - Ilmu Komputer</option>
                        <option value="Teknologi Informasi">S1 - Teknologi Informasi</option>
                    </select>
                </div>
                <div class="input-box">
                    <span class="details" for="alamat">Alamat</span>
                    <input type="text" id="alamat" name="alamat" placeholder="Masukkan alamat kamu">
                </div>
            </div>
            <div class="gender-details">
                <input type="radio" name="gender" id="dot-1">
                <input type="radio" name="gender" id="dot-2">
                <input type="radio" name="gender" id="dot-3">
                <span class="gender-title">Jenis Kelamin</span>
                <div class="category">
                    <label for="dot-1">
                        <span class="dot one"></span>
                        <span class="gender">Male</span>
                    </label>
                    <label for="dot-2">
                        <span class="dot two"></span>
                        <span class="gender">Female</span>
                    </label>
                    <label for="dot-3">
                        <span class="dot three"></span>
                        <span class="gender">Prefer not to say</span>
                    </label>
                </div>
            </div>
            <div class="button">
                <input type="submit" value="Daftar">
            </div>
        </form>
    </div>
</body>
</html>
