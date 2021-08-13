<!DOCTYPE html>
<html lang="en">

<head>
         <meta charset="UTF-8">
         <meta http-equiv="X-UA-Compatible" content="IE=edge">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <title>Document</title>
         <style>
                  body {
                           background-color: grey;

                  }

                  .table1 {

                           width: 100%;
                           font-size: x-large;
                           background-color: darkslategrey;
                           font-size: 32px;

                  }

                  table {
                           border: 10px solid black;
                           width: 100%;
                           background-color: darkslategrey;

                  }

                  .table2 {
                           width: 100%;
                           font-size: 30px;
                           background-color: darkslategrey;
                           margin-top: 20px;

                           height: 20px;
                           padding-top: 30px;
                           text-align: center;
                           border-top: 7px solid black;



                  }

                  th {
                           border-bottom: 12px solid black;

                  }

                  .button {
                           display: inline-block;
                           padding: 10px;
                           color: white;
                           margin: 5px;
                           background-color: black;
                           border-radius: 10px;
                           width: 100px;

                  }
         </style>

</head>

<body>
         <form action="halaman1_soal.php">
                  <table class="table1">
                           <tr class="table1">
                                    <th>
                                             <h1>Selamat Datang, <i><?php echo $_POST["username"] ?> </i>!</h1>

                                    </th>
                           </tr>


                           <tr class="table2">

                                    <td><br><b> Petunjuk untuk mengisi soal !!! </b><br><br><br></td>

                           </tr>
                           <tr>
                                    <td>1.) Pilih jawaban yang menurut anda benar <br></td>
                           </tr>
                           <tr>
                                    <td>2.) Klik tombol 'Simpan Jawaban' jika anda sudah yakin dengan jawaban anda <br></td>
                           </tr>
                           <tr>
                                    <td>3.) Jika anda ingin mengganti jawaban, lakukan step 1 & 2 pada jawaban ymag menurut anda benar <br></td>
                           </tr>
                           <tr>
                                    <td>4.) Klik tombol 'Next' untuk melihat hasil jawaban anda <br></td>
                           </tr>
                           <tr>
                                    <td>5.) Klik tombol 'Soal Berikutnya' untuk mengisi soal berikutnya <br></td>
                           </tr>
                           <tr>
                                    <td>
                                             <center><input type="submit" class="button" value="Next"> </center>
                                    </td>
                           </tr>
                  </table>
         </form>

</body>

</html>