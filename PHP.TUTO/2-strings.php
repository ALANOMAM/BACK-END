<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
// when dealing with strings we have acces to some string functions that help us find more information about the string we have at hand.
$phrase ="Giraffe Academy <br>";
echo $phrase;

echo strtolower($phrase); // converts every character to a lower case character.
echo strtoupper($phrase);
echo strlen($phrase); // tels us how many characters there are in our string
echo"<br>";
echo $phrase[5]; // this gives us the character that is at the index position we gave.
echo"<br>";
echo str_replace("Giraffe", "Panda",$phrase); //this helps us replace substrings. the first element is always the substring you wanna replace, the second element is what you wanna replace it with and the third element is which string we wanna do it on. so now we have "panda academy"
echo substr($phrase,8,3) // this will make us grab a subtring, the first element is the string we are considering, the second element is the index of where we wanna start grabbing. the third element is not a must, if we donot add the third elmt our function will grab from index 8 till the end, if we add the third element as me did, it will start grabbing from index 8 and will only grab 3 letters bc we gave 3.
    ?>
</body>
</html>