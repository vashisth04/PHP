<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String Converter</title>
    <link rel="stylesheet" href="">
<?php
    $mydata=$_POST['text'];
    $Rtrim=$_POST['text1'];
    $tr_replace=$_POST['text2'];
    $steplace=$_POST['text7'];
    $strasecmp=$_POST['text3'];
    $stros=$_POST['text4'];
    $substr=$_POST['text5'];
    $chop=$_POST['text6'];
    $sum = $_POST['sum'];
    $result='';
    switch ($sum) {
        case "Encrypt using Md5":
            $result = md5($mydata);
            break;
        case "Number_format":
            $result= number_format($mydata);
            break;
        case "Ord":
            $result= ord($mydata);
            break;
        case "Rtrim":
            $result= rtrim($mydata,$Rtrim);
            break;
        case "Str_replace":
            $result= str_replace($tr_replace,$steplace,$mydata);
            break;
        case "Str_len":
            $result= strlen($mydata);
            break;
        case "Strcasecmp":
            $result= strcasecmp($mydata,$strasecmp);
            break;
        case "Strrpos":
            $result= strpos($mydata,$stros);
            break;
        case "subStr":
            $result= substr($mydata,$substr);
            break;
        case "Str-to-Lower":
            $result= strtolower($mydata);
            break;
        case "Bin_to_Hex":
            $result = bin2hex($mydata);
            break;
        case "Chop":
            $result= chop($str,$chop);
            break;
    }
?>
    
    <style>
        body {
            background: -webkit-gradient(linear, left top, left bottom, from(#FF9F33), to(#900C3F))fixed;
         

        .PRANSHU input:hover {
            background-color: purple;
            color: grey;
        }

        .PRANSHU2 input:hover {
            background-color: purple;
            color: grey;
        }

        .PRANSHU {
            margin-right: 200px;
        }

        .PRANSHU3 {
            margin-left: 150px;
        }
        p{
            margin-left: 400px;
        }
        .PRANSHU4{
            margin: 150px;
        }
    </style>
</head>

<body>
    <h1>STRING CONVERTER</h2>
    <form action="form.php" method="POST">
        <div class="PRANSHU3">
            <label for="">Enter any String:</label>
            <input type="text" name="text" value="">
        </div> <br>
        <div class="PRANSHU4">
            <table>
            <tr>
                <td><label for="">input text to Rtrim:</label></td>
                <td><input type="text" name="text1" value=""></td>
            </tr>
            <tr>
                <td><label for="">input text to  str_Replace:</label></td>
                <td><input type="text" name="text2" value=""> </td>
            </tr>
            <tr>
                <td><label for="">input text to  str_Replace with:</label></td>
                <td><input type="text" name="text7" value=""> </td>
            </tr>
            <tr>
                <td><label for="">input text to  Strcasecmp:</label></td>
                <td><input type="text" name="text3" value=""> </td>
            </tr>
            <tr>
                <td><label for="">input text to  Strpos:</label></td>
                <td><input type="text" name="text4" value=""> </td>
            </tr>
            <tr>
                <td><label for="">input text to  subStr:</label></td>
                <td><input type="text" name="text5" value=""> </td>
            </tr>
            <tr>
                <td><label for="">input text to  chop:</label></td>
                <td><input type="text" name="text6" value=""> </td>
            </tr>
            
            
    </table>
        </div>
     <div class="PRANSHU">
            <input name="sum" type="submit" value="Encrypt using Md5">
            <input name="sum" type="submit" value="Number_format">
            <input name="sum" type="submit" value="Ord">
            <input name="sum" type="submit" value="Rtrim">
            <input name="sum" type="submit" value="Str_replace">
            <input name="sum" type="submit" value="Str_len">
        </div>
        <div class="PRANSHU">
            <input name="sum" type="submit" value="Strcasecmp">
            <input name="sum" type="submit" value="Strrpos">
            <input name="sum" type="submit" value="subStr">
            <input name="sum" type="submit" value="Str-to-Lower">
            <input name="sum" type="submit" value="Bin_to_Hex">
            <input name="sum" type="submit" value="Chop">
        </div>
        <br>
        <p>
        <b>Result</b>  <input type ="text" name="result" value="<?php echo($result) ?>"> 
            </p>

        <div style="margin-left: 600px;" class="PRANSHU2">
            <input type="reset" value="Reset Now">
        </div>
    </form>
    
</body>

</html>