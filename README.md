# PhP-Practice

Repository where is store everything i learned about PhP in the PhP+Laravel courses by the Freecodecamp youtube channel

Course Links:

PHP Programming Language Tutorial - Full Course: https://www.youtube.com/watch?v=OK_JCtrrv-c&t=125s

Laravel PHP Framework Tutorial - Full Course for Beginners (2019): https://www.youtube.com/watch?v=ImtZ5yENzgE&t=31s

Total course time: 9 hours

local server address: localhost:3000/

Echo commmand:

- basically a print function.
- any html tag placed under this will be treated as normal html when rendered.

variables:
$varName = "string"; or $varName = value;

    Ex:
    $characterName = "John";
    $characterAge = 35;

    echo ("There was once a man named $characterName <br>");
    echo ("He was $characterAge years old <br>");

Getting user input:

<form action="input.php"(SITE THAT HANDLES INPUT REQUEST) method="get"(SIGNIFIES WE ARE TAKING INPUT)>
Name: <input type="text" name="name"(IDENTIFIER)>

        <input type="submit">
    </form>
    <br>

    <?php
    echo $_GET["name"] ?>(USES VALUE ASSOCIATED WITH IDENTIFIER)
