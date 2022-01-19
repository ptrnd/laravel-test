<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halo</title>
</head>

<body>
    <input type="text" name="halo" id="halo" placeholder="halo">
    <input type="submit" name="halokirim" onclick="munculno()">
    <input name="jawab" id="jawab">
</body>
<script>
    function munculno() {
        var teks = document.getElementById('halo').value;
        var jawab = document.getElementById('jawab');
        jawab.value = teks;
    }
</script>

</html>