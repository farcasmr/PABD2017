<!DOCTYPE html>
<?php
use Assetic\Asset\AssetCollection;
use Assetic\Asset\FileAsset;
use Assetic\Asset\GlobAsset;

$js = new AssetCollection(array(
    new GlobAsset('/path/to/js/*'),
    new FileAsset('/path/to/another.js'),
));

// the code is merged when the asset is dumped
echo $js->  

<!-- app/config/config.yml -->
<?xml version="1.0" encoding="UTF-8" ?>
<container xmlns="http://symfony.com/schema/dic/services"
    xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
    xmlns:doctrine="http://symfony.com/schema/dic/doctrine"
    xsi:schemaLocation="http://symfony.com/schema/dic/services
        http://symfony.com/schema/dic/services/services-1.0.xsd
        http://symfony.com/schema/dic/doctrine
        http://symfony.com/schema/dic/doctrine/doctrine-1.0.xsd">

    <doctrine:config>
        <doctrine:dbal
            driver="pdo_mysql"
            host="%database_host%"
            dbname="%database_name%"
            user="%database_user%"
            password="%database_password%" />
    </doctrine:config>
</container>
<script src="<?php echo $view['assets']->getUrl('js/script.js') ?>"></script>


<head>
<title>Pagina Mea </title>
<style>
body {
    background-image: url("dan.jpg");;
	background-repeat: no-repeat;
}
div {
    
    margin-top: 100px;
    margin-bottom: 100px;
    margin-right: 100px;
    margin-left: 100px;
	color: black;
    font-size: 15px;
	position: relative;
	
   
}
div1 {
	font-size: 40px;
        font-weight: bold;
text-shadow: 3px 2px blue;
}
a:link, a:visited {
    background-color:	green;
    color: white;
    padding: 5px 10px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
}


a:hover, a:active {
    background-color: red;
}
p {
    text-indent: 50px;
}
next {
    left: 129px;
    width: 43px;
    background: url('img.png') -91px 0;
}

</style>
</head>
<div>
<body>

<center><h1><div1>Pagină personală</div1></h1>
<p>Proiect Software în echipă</p></center>

<img  src="https://scontent-fra3-1.xx.fbcdn.net/v/t1.0-1/p160x160/18485555_1368880626538563_3190855624166406618_n.jpg?oh=08220c70d370a8c4275676fb8c1afcc3&amp;oe=59A5910B">

<h2>Dan Chicidea Cotișel</h2>

<p>
 EDUCAŢIE ŞI FORMARE:
<br>
Masterand  programare avansată şi bază de date Universitatea “1 Decembrie 1918” Alba Iulia (România)<br>
Student – Informatică 	Universitatea “1 Decembrie 1918” Alba Iulia (România)<br>
Tehnician în activități economice Grup Şcolar Forestier Cîmpeni
</p>
<p>
EXPERIENŢA PROFESIONALĂ:  
<br>
SC Expert One Research SRL<br>
Tipul sau sectorul de activitate: Operator  Calculatoare și  Rețea, Sectorul  IT

</p>

Contact:
<br>
Facebook:<a href="https://www.facebook.com/danyy.chicidea92" target="_blank">Facebook</a>
<br>

Skype: <a href="skype:live:89b52eb9f55e2395?call">Call Skype</a>

</div>

<next id="next"><a href="dan_pagina1.php"> >> </a></li>
 </body>


<?