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
    background-image: url("pc.jpg");
    background-repeat: no-repeat;
}
div {
    
    margin-top: 100px;
    margin-bottom: 100px;
    margin-right: 150px;
    margin-left: 80px;
	color: black;
    font-size: 15px;
	position: relative;
	
   
}
div1 {
	font-size: 40px;
        font-weight: bold;
text-shadow: 3px 2px green;
}
a:link, a:visited {
    background-color: black;
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

</style>
</head>
<div>

<body>

<center><h1><div1>Pagina personala</div1></h1>
<p>Proiect Software in echipa</p></center>

<img  src="https://scontent-fra3-1.cdninstagram.com/t51.2885-19/s150x150/18252484_289009051547750_8909907014147112960_a.jpg">

<h2>Andreea Cotor</h2>
Contact
<a href="https://www.facebook.com/andreeac93" target="_blank">Facebook</a>
<br>
<a href="skype:live:andreeac93?call" target="_blank">Skype</a>

<a href="https://www.instagram.com/andreeeeeeeea93/?hl=ro" target="_blank">Instagram</a>

</div>
<next id="next"><a href="andreeac2.php"> >> </a></li>


</body>



<?
