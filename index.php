<!DOCTYPE html>
<html lang="en">

<head>

         <meta charset="UTF-8">
         <meta http-equiv="X-UA-Compatible" content="IE=edge">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <title>SELAMAT DATANG</title>
         <style>
                  h1 {
                           margin-top: 130px;
                  }

                  body {
                           background-color: darkslategray;
                  }
         </style>
         <style>
                  .button {
                           display: inline-block;
                           padding: 10px;
                           color: white;
                           margin: 5px;
                           background-color: black;
                           border-radius: 10px;
                  }
         </style>
         <style>
                  table,
                  th,
                  td,
                  tr {
                           border: 1px solid black;
                           border-collapse: c;
                           width: 45%;
                           border-radius: 12px;
                           margin-top: 130px;

                  }




                  td {
                           padding: 10px;
                  }

                  th {
                           text-align: center;
                           font-size: xx-large;
                           font-style: inherit;
                           padding: 20px;
                           background-color: black;
                           color: blanchedalmond;
                  }

                  tr,
                  td {
                           background-color: transparent;
                  }

                  .jam {
                           color: azure;
                           font-size: 30px;
                           border: 3px solid black;
                  }
         </style>
</head>

<body>
         <div class="jam">
                  <center>
                           <?php

                           date_default_timezone_set("Asia/Jakarta");

                           $b = time();
                           $hour = date("G", $b);

                           if ($hour >= 0 && $hour <= 11) {
                                    echo "Selamat Pagi ";
                           } elseif ($hour >= 12 && $hour <= 14) {
                                    echo "Selamat Siang  ";
                           } elseif ($hour >= 15 && $hour <= 17) {
                                    echo "Selamat Sore  ";
                           } elseif ($hour >= 17 && $hour <= 18) {
                                    echo "Selamat Petang  ";
                           } else {
                                    echo "Selamat Malam  ";
                           }
                           ?>
                  </center>
         </div>
         <center>


                  <table>
                           <form action="sambutan.php" method="POST">
                                    <tr>
                                             <th colspan="4"><b>SIGN IN</b></th>
                                    </tr>
                                    <tr class="username">
                                             <td><label for="username:">USERNAME: </label></td>


                                             <td> <input type="text" name="username" id="username:" placeholder="username..." autocomplete="off" required> </td>



                                    </tr>

                                    <tr>
                                             <td><label for="password">PASSWORD: </label></td>

                                             <td> <input type="password" id="password" placeholder="password..." autocomplete="off" required></td>
                                    </tr>

                                    <tr>
                                             <td><label for="pria">Pria:</label>
                                                      <input type="radio" id="pria" name="kelamin" required>
                                             </td>
                                             <td><label for="wanita">Wanita:</label>
                                                      <input type="radio" id="wanita" name="kelamin" required>
                                             </td>
                                    </tr>

                                    <tr>




                                             <td align="center" colspan="4">

                                                      <input type="submit" class="button" value="Submit">

                                             </td>



                                    </tr>
                           </form>

                  </table>

         </center>
</body>

</html>