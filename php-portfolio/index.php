<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="contact.html">Contact</a>

    <h1>Virsraksts</h1>

    <p>paragrafs - fsidjfoiejfijfkwejfjkjfjk</p>

    <form action="Press">press</form>
    <input type="submit" value="submit">

    <img src="img_0002s_0001_lost-valley-2.avif" alt="bilde" width="400" height="300">

    <?php


    $colors = [
        1 => 'red',
        2 => 'green',
        3 => 'blue'
    ]; // asociativais masivs

    $name = [
        1 => ['name' => 'Janis', 'email' => 'janis@gmail.com'],
        2 => ['name' => 'Peteris', 'email' => 'peteris@gmail.com'],
        3 => ['name' => 'Liza', 'email' => 'liza@gmail.com'],
        4 => ['name' => 'Igors', 'email' => 'igors@gmail.com']
    ];

    echo "<ul>";

    foreach($name as $name){
        // echo"<li>$name{['email']}<li>";
        echo"<li>Name: " . $name['name']. ", Email: " . $name['email']. "</li>";
    }


    echo "<ul>";



    ?>


    <br>
    <br>
    <label for="cars">Choose a car:</label>

    <select name="cars" id="cars">
      <option value="volvo">Volvo</option>
      <option value="saab">Saab</option>
      <option value="mercedes">Mercedes</option>
      <option value="audi">Audi</option>
    </select> 

    <ul>
        <li></li>
        <li></li>
        <li></li>
    </ul>

    <br>

    <input type="radio" id="html" name="fav_language" value="HTML">
    <label for="html">HTML</label><br>
    <input type="radio" id="css" name="fav_language" value="CSS">
    <label for="css">CSS</label><br>
    <input type="radio" id="javascript" name="fav_language" value="JavaScript">
    <label for="javascript">JavaScript</label> 

    <br>

    <form action="/action_page.php">
        <label for="fname">First name:</label>
        <input type="text" id="fname" name="fname"><br><br>
        <label for="lname">Last name:</label>
        <input type="text" id="lname" name="lname"><br><br>
        <input type="submit" value="Submit">
      </form> 

    <br>
    <input type="submit"> 
</body>
</html>



