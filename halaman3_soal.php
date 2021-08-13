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
                                 <th> <?php echo "Hewan paling pintar di dunia adalah ?"; ?>
                                 </th>

                         </tr>


                         <tr>

                                 <div class="pilgan1">
                                         <td> <input type="radio" name="radio" id="a.)   2" class="a1" value="Lumba-Lumba" required>
                                                 <label for="a.)   2">a.) &nbsp; <?php echo "Lumba-Lumba"; ?></label>

                                         </td>
                                 </div>


                         </tr>
                         <tr>
                                 <div class="pilgan1">
                                         <td> <input type="radio" name="radio" id="b.)   3" class="b1" value="Tikus" required>
                                                 <label for="b.)   3">b.) &nbsp; <?php echo "Tikus"; ?></label>

                                         </td>
                                 </div>
                         </tr>
                         <tr>
                                 <div class="pilgan1">
                                         <td> <input type="radio" name="radio" id="c.)   4" class="c1" value="Paus" required>
                                                 <label for="c.)   4">c.) &nbsp; <?php echo "Paus"; ?></label>

                                         </td>
                                 </div>
                         </tr>
                         <tr>
                                 <div class="pilgan1">
                                         <td><input type="radio" name="radio" id="d.)   5" class="d1" value="Simpanse" required>
                                                 <label for="d.)   5">d.) &nbsp; <?php echo "Simpanse"; ?></label>

                                         </td>
                                 </div>
                         </tr>
                         <tr>
                                 <div class="pilgan1">
                                         <td><input type="radio" name="radio" id="d.)   5" class="d1" value="Singa" required>
                                                 <label for="d.)   5">e.) &nbsp; <?php echo "Singa"; ?></label>

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


         <?php $x = ' <center> <form action="salah3.php"> <input type="submit" value="Next" class = "baru"></form> </center>'; ?>

         <?php $y = '<label for="check" class="check">(a)</label>' ?>
         <?php $b1 = ' <center> <form action="salah3.php"> <input type="submit" value="Next" class = "baru"></form> </center>'; ?>

         <?php $b2 = '<label for="check" class="check">(b)</label>' ?>
         <?php $c1 = ' <center> <form action="salah3.php"> <input type="submit" value="Next" class = "baru"></form> </center>'; ?>

         <?php $c2 = '<label for="check" class="check">(c)</label>' ?>
         <?php $d1 = ' <center> <form action="salah3.php"> <input type="submit" value="Next" class = "baru"></form> </center>'; ?>

         <?php $d2 = '<label for="check" class="check">(d)</label>' ?>
         <?php $e1 = ' <center> <form action="result3.php"> <input type="submit" value="Next" class = "baru"></form> </center>'; ?>

         <?php $e2 = '<label for="check" class="check">(e)</label>' ?>


         <?php
                $answer = $_POST["radio"];
                if ($answer == "Lumba-Lumba") {
                        echo $x;
                }
                if ($answer == "Lumba-Lumba") {
                        echo "$y";
                }
                if ($answer == "Tikus") {
                        echo $b1;
                }
                if ($answer == "Tikus") {
                        echo "$b2";
                }
                if ($answer == "Paus") {
                        echo $c1;
                }
                if ($answer == "Paus") {
                        echo "$c2";
                }
                if ($answer == "Simpanse") {
                        echo $d1;
                }
                if ($answer == "Simpanse") {
                        echo "$d2";
                }
                if ($answer == "Singa") {
                        echo $e1;
                }
                if ($answer == "Singa") {
                        echo "$e2";
                }


                ?>


 </body>

 </html>