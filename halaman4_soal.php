 <!DOCTYPE html>
 <html lang="en">

 <head>
         <meta charset="UTF-8">
         <meta http-equiv="X-UA-Compatible" content="IE=edge">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <title>Document</title>
         <style>
                 body {
                         background-color: lightsteelblue;
                 }

                 table,
                 tr,
                 td {

                         border: 3px solid black;
                         width: 100%;


                 }

                 tr,
                 td {
                         padding: 10px;
                 }


                 td {
                         line-height: 1cm;
                 }




                 th {

                         padding: 0px;
                         border-bottom: 7px solid black;
                         background-color: cornflowerblue;
                         line-height: 1.5cm;
                         border-style: ridge;
                         text-align: left;
                         padding-left: 0.3cm;
                         font-size: 20px;

                 }





                 .button2 {
                         background-color: blue;
                         color: khaki;
                         font-size: medium;
                         width: 100px;
                         padding: 6px;
                         border: 3px solid lightskyblue;
                         border-radius: 12px;

                         width: 5cm;

                 }

                 .button2:hover {
                         box-shadow: inset 300px 0 0 0 lightskyblue;
                 }

                 label {
                         font-size: larger;
                 }

                 .baru {

                         background-color: blue;
                         color: khaki;
                         font-size: large;
                         width: 100px;
                         padding: 6px;
                         border: 3px solid lightskyblue;
                         border-radius: 5px;
                         border-radius: 12px;
                         margin-left: 0cm;
                         margin-right: 0.5cm;
                         align-items: baseline;
                         position: relative;
                         bottom: 10px;
                         left: 10px;

                 }

                 .baru:hover {
                         box-shadow: inset 300px 0 0 0 lightskyblue;
                 }

                 .check {
                         position: relative;
                         bottom: 95px;
                         left: 14px;
                         font-size: xx-large
                 }
         </style>
 </head>

 <body>



         <h1><b>SOAL 4</b></h1>
         <hr>
         <p><i>pilihlah jawaban yang menurut anda benar !</i></p>
         <form action="" method="POST">
                 <table>


                         <tr>
                                 <th> <?php echo "Arti dari tuna rungu adalah ?"; ?>
                                 </th>

                         </tr>


                         <tr>

                                 <div class="pilgan1">
                                         <td> <input type="radio" name="radio" id="a.)   2" class="a1" value="Tidak bisa mendengar" required>
                                                 <label for="a.)   2">a.) &nbsp; <?php echo "Tidak bisa mendengar"; ?></label>

                                         </td>
                                 </div>


                         </tr>
                         <tr>
                                 <div class="pilgan1">
                                         <td> <input type="radio" name="radio" id="b.)   3" class="b1" value="Tidak bisa berbicara" required>
                                                 <label for="b.)   3">b.) &nbsp; <?php echo "Tidak bisa berbicara"; ?></label>

                                         </td>
                                 </div>
                         </tr>
                         <tr>
                                 <div class="pilgan1">
                                         <td> <input type="radio" name="radio" id="c.)   4" class="c1" value="Tidak bisa membaca" required>
                                                 <label for="c.)   4">c.) &nbsp; <?php echo "Tidak bisa membaca"; ?></label>

                                         </td>
                                 </div>
                         </tr>
                         <tr>
                                 <div class="pilgan1">
                                         <td><input type="radio" name="radio" id="d.)   5" class="d1" value="Tidak punya rumah" required>
                                                 <label for="d.)   5">d.) &nbsp; <?php echo "Tidak punya rumah"; ?></label>

                                         </td>
                                 </div>
                         </tr>
                         <tr>
                                 <div class="pilgan1">
                                         <td><input type="radio" name="radio" id="d.)   5" class="d1" value="Tidak bisa berjalan " required>
                                                 <label for="d.)   5">e.) &nbsp; <?php echo "Tidak bisa berjalan       "; ?></label>

                                         </td>
                                 </div>
                         </tr>




                 </table>
                 <br>
                 <center>



                         <button class="button2" type="submit" name="button2">Simpan Jawaban</button>


                 </center>
         </form>
         </br>
         <?php error_reporting(0); ?>


         <?php $x = ' <center> <form action="result4.php"> <input type="submit" value="Next" class = "baru"></form> </center>'; ?>

         <?php $y = '<label for="check" class="check">(a)</label>' ?>
         <?php $b1 = ' <center> <form action="salah4.php"> <input type="submit" value="Next" class = "baru"></form> </center>'; ?>

         <?php $b2 = '<label for="check" class="check">(b)</label>' ?>
         <?php $c1 = ' <center> <form action="salah4php"> <input type="submit" value="Next" class = "baru"></form> </center>'; ?>

         <?php $c2 = '<label for="check" class="check">(c)</label>' ?>
         <?php $d1 = ' <center> <form action="salah4.php"> <input type="submit" value="Next" class = "baru"></form> </center>'; ?>

         <?php $d2 = '<label for="check" class="check">(d)</label>' ?>
         <?php $e1 = ' <center> <form action="salah4.php"> <input type="submit" value="Next" class = "baru"></form> </center>'; ?>

         <?php $e2 = '<label for="check" class="check">(e)</label>' ?>


         <?php
                $answer = $_POST["radio"];
                if ($answer == "Tidak bisa mendengar") {
                        echo $x;
                }
                if ($answer == "Tidak bisa mendengar") {
                        echo "$y";
                }
                if ($answer == "Tidak bisa berbicara") {
                        echo $b1;
                }
                if ($answer == "Tidak bisa berbicara") {
                        echo "$b2";
                }
                if ($answer == "Tidak bisa membaca") {
                        echo $c1;
                }
                if ($answer == "Tidak bisa membaca") {
                        echo "$c2";
                }
                if ($answer == "Tidak punya rumah") {
                        echo $d1;
                }
                if ($answer == "Tidak punya rumah") {
                        echo "$d2";
                }
                if ($answer == "Tidak bisa berjalan") {
                        echo $e1;
                }
                if ($answer == "Tidak bisa berjalan") {
                        echo "$e2";
                }


                ?>


 </body>

 </html>