<?php 
require 'function.php';

if (isset ($_POST["submit"])) {
    if (tambah($_POST) > 0) {
        echo "
        <script>
            alert('Berhasil!');
            document.location.href = 'index.php';
        </script>
        ";
    } else {
        echo "
        <script>
            alert('Gagal!');
            document.location.href = 'index.php';
        </script>
        ";
    }
}
?>

<!doctype html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cabin&family=Meow+Script&display=swap" rel="stylesheet">
    <title>Tambah Data</title>
    <style> 
        input[type=text], select {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        }
        input[type=email], select {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        }

        input[type=submit] {
        width: 100%;
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        }
    
        h1, h2, h3, h4, h5, h6, a, p{
            text-align: center;
            font-family: 'Cabin', sans-serif;
            
        }

        h1{
            font-size: xx-large;
        }

        .font{
            font-family: 'Cabin', sans-serif;
        }
        .button2 {
            background-color: #777777; 
            border: none;
            color: white;
            padding: 16px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            transition-duration: 0.4s;
            cursor: pointer;
            border-radius: 12px;
        }
        .black:hover {
            background-color: #555555;
            color: white;
        }
        .container {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        </style>
  </head>
  <body>
  <div class="">
   
      <div class="">
        <h1>Tambah Data Karyawan</h1>
      </div>
   
  </div>

  <div class="container">
    <form action="" method="post">
        <div class="">
            <label for="name" class="font">Name</label>
            <div class="">
            <input type="text" class="form-control" id="name" name="name" Required>
            </div>
        </div>
        <div class="">
            <label for="email" class="font">Email</label>
            <div class="col-sm-6">
            <input type="email" class="form-control" id="email" name="email" Required>
            </div>
        </div>
        <div class="">
            <label for="address" class="font">Address</label>
            <div class="col-sm-6">
            <input type="text" class="" id="address" name="address">
            </div>
        </div>
        <div class="">
            <label for="gender" class="font">Gender</label>
            <div class="col-sm-6">
           
            <select name="gender" id="gender">
                <option selected value="">-gender-</option>
                <option value="Male" >Male</option>
                <option value="Female">Female</option>
            </select>

            </div>
        </div>
        <div class="">
            <label for="position" class="font">Position</label>
            <div class="col-sm-6">
            <input type="text" class="" id="position" name="position" Required>
            </div>
        </div>
        <div class="">
            <label for="status" class="">Status</label>
            <div class="col-sm-6">
            <select name="status" id="status">
                <option selected value="">-status-</option>
                <option value="Fulltime" >Fulltime</option>
                <option value="Parttime">Parttime</option>
            </select>

            </div>
        </div>
        <br>
        <div style="text-align: center;" class="">
            <button type="submit" class="button2 black" name="submit">Submit</button>
           
        </div>
    </form>
  </div>

 
  </body>
</html>