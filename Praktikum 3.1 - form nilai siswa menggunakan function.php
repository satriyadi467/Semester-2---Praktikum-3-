<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Form Nilai Siswa</title>
</head>
<body>
<div class="m-5 border border-primary p-4 rounded">
            <form method="POST" autocomplete="off" action="Praktikum 3.1 - form nilai siswa menggunakan function.php">
                <div class="form-group row">
                    <label for="text" class="col-4 col-form-label" >Nama Lengkap</label> 
                    <div class="col-8">
                    <div class="input-group">
                        <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fa fa-address-book-o"></i>
                        </div>
                        </div> 
                        <input id="text" name="nama" placeholder="Masukan Nama Lengkap Anda" type="text" class="form-control" required="required">
                    </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="select" class="col-4 col-form-label">Mata Kuliah</label> 
                    <div class="col-8">
                    <select id="select" name="matkul" required="required" class="custom-select">
                        <option value="">Pilih Matkul</option>
                        <option value="Bahasa Inggris">Pemrograman Web</option>
                        <option value="Jaringan Komputer">Jaringan Komputer</option>
                        <option value="PPKn">PPkn</option>
                    </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="text1" class="col-4 col-form-label">Nilai UTS</label> 
                    <div class="col-8">
                    <div class="input-group">
                        <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fa fa-adjust"></i>
                        </div>
                        </div> 
                        <input id="text1" name="nilai_uts" placeholder="Masukan Nilai UTS Anda" type="number" class="form-control" required="required">
                    </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="text2" class="col-4 col-form-label">Nilai UAS</label> 
                    <div class="col-8">
                    <div class="input-group">
                        <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fa fa-adjust"></i>
                        </div>
                        </div> 
                        <input id="text2" name="nilai_uas" placeholder="Masukan Nilai UAS" type="number" class="form-control" required="required">
                    </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="text3" class="col-4 col-form-label">Nilai Tugas/Praktikum</label> 
                    <div class="col-8">
                    <div class="input-group">
                        <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fa fa-adjust"></i>
                        </div>
                        </div> 
                        <input id="text3" name="nilai_tugas" placeholder="Masukan Nilai Tugas/Praktikum" type="number" class="form-control" required="required">
                    </div>
                    </div>
                </div> 
                <div class="form-group row">
                    <div class="offset-4 col-8">
                    <button name="submit" type="submit" class="btn btn-success">Submit</button>
                    </div>
                </div>
            </form>
        </div>
            <!-- Cetak Variable -->
        <div class="m-5 border border-primary p-4 rounded">
            
            
            
            <?php
                error_reporting(0);
                
                include_once 'Praktikum 3.2 - data nilai fungsinya.php';

            //variable
                $nama_siswa = $_POST['nama'];
                $mata_kuliah = $_POST['matkul'];
                $uts = $_POST['nilai_uts'];
                $uas = $_POST['nilai_uas'];
                $tugas = $_POST['nilai_tugas'];
                $total = $uts + $uas + $tugas;
                $rata_rata = $total/3;
                $keterangan_lulus = kelulusan($rata_rata);
                $grade = grade($rata_rata);
                $predikat = predikat($grade);


                // cetak
                if(isset($_POST['submit'])){
                    echo "Nama Siswa = ".$nama_siswa;
                    echo "<br>Mata Kuliah = ".$mata_kuliah;
                    echo "<br>Nilai UTS = ".$uts;
                    echo "<br>Nilai UAS = ".$uas;
                    echo "<br>Nilai Tugas = ".$tugas;
                    echo "<br>Rata-Rata = ".$rata_rata;
                    echo "<br>Keterangan = ".$keterangan_lulus;
                    echo "<br>Kategori = ".$grade;
                    echo "<br>Predikat = ".$predikat;
                }
            ?>
        </div>
</body>
</html>