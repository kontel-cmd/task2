<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>
<body>
   <?php
   require 'human.php';
   $admin = new Human("Kostya", "Yanovskiy");
echo $admin->name; 
echo $admin->surname;  

echo $admin->getFullName(); 
$admin2 = new Human("Kostya","Yanovskiy");
echo $admin2->getInitials();

echo $admin2->noSpace("My name is Kostya"); 

echo $admin2->backWard("ayngif i un"); 
echo $admin2->passW();
   ?> 
</body>
</html>