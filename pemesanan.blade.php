<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Daftar Menu</h1>
<table border="2px">
<tr style="background-color: khaki; color: black;">
    <th>Menu Makanan</th>
    <th>Menu Minuman</th>
</tr>
<tr>
    <td>1. Nasi & Nila Bakar</td>
    <td>1. Es Teh</td>
</tr>
<tr>
    <td>2. Nasi & Lele Bakar</td>
    <td>2. Es Jeruk</td>
</tr>
<tr>
    <td>3. Nasi & Ayam Goreng</td>
    <td>3. Jeruk Panas</td>
</tr>
<tr>
    <td>4. Nasi & Bebek Goreng</td>
    <td>4. Teh Panas</td>
</tr>
</table>
<h2>Pesanan Anda</h2>
<form action="/pesan/order" method="POST">
    @csrf
    <label>Makanan:</label>
    <br>
    <input type="text" name="makanan">
    <br>
    <label>Minuman:</label>
    <br>
    <input type="text" name="minuman">
    <br>
    <input type="submit" value="pesan">
</form>
</body>
</html>







