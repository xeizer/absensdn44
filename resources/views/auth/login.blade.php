<!DOCTYPE html>
<html>
<head>
    <title>Membuat Desain Form Login HTML Dengan CSS - www.kelasprogrammer.com</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
        body{
     font-family: sans-serif;
     background:  #ccfff2;
}

#logo{
    width: 100%;
    margin:auto;
    padding:auto;
    padding-bottom: 20px;
}

#container{
    width: 360px;
    background: white;
    margin:180px auto;
    padding: 30px 20px;
    border-radius: 6px;
}
input[type=text],
input[type=password]{
    font-size: 15px;
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border: 2px solid #ccc;
    -webkit-transition: 0.5s;
    transition: 0.5s;
    outline: none;
    background-size: 30px;
    background-position: 5px 5px;
    background-repeat: no-repeat;
    padding-left: 40px;
    border-radius: 5px;
}
input[type=text]{
    background-image: url('gambar/user.png');
}
input[type=password]{
    background-image: url('gambar/password.png');
}
        
input[type=text]:focus,
input[type=password]:focus {
    border: 2px solid #555;
}

input[type=submit],
input[type=reset]{
    font-size: 15px;
    background: #009973;
    color: white;
    border: white 3px solid;
    border-radius: 5px;
    padding: 12px 20px;
    cursor:pointer;
    margin-top: 10px;
}

input[type=submit]:hover,
input[type=reset]:hover{
    opacity:0.9;
}

input[type=reset]{
    background:  #999999;
}
     </style>
</head>
<body>
     <div id="container">
        <form>
            <img id="logo" src="gambar/logo.png">
            <label for="fname">Username:</label>
            <input type="text" name="Username" placeholder="Masukan Username">
            <label for="lname">Password:</label>
            <input type="password" name="Password" placeholder="Masukan Password">
            <input type="submit" value="Login">
            <input type="reset" value="Reset">
          </form>
     </div>
</body>
</html>
