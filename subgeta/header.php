<!DOCTYPE html>
<html lang="en">
    <!-- Page Setttings-->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <!-- ViewPort Settings-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Title, Description, Keywords-->
    <title>Juan Arriaga - Designer | Artist</title>
    <meta content="Juan Arriaga - Designer | Artist Portfolio" name="description">
    <meta content="Juan,Arriaga,Designer,Artist,Subgeta,Logo,Game,Art,Design,ホアン,アリアガ,デザイナー,アーティスト,Subgeta,ロゴ,ゲーム,アート,デザイン" name="keywords">
    <!-- Site Bot/Spider Settings-->
    <meta content="Juan Arriaga - Designer | Artist" property="og:title">
    <meta content="Juan Arriaga - Designer | Artist" property="og:description">
    <meta content="https://subgeta.com/images/og.png" property="og:image">
    <meta content="https://subgeta.com" property="og:url">
    <meta content="website" property="og:type">
    <meta content="en_US" property="og:locale">
    <!-- Twitter-->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Juan Arriaga - Designer | Artist">
    <meta name="twitter:creator" value="@subgeta">
    <meta name="twitter:description" content="Juan Arriaga - Designer | Artist Portfolio">
    <meta name="twitter:image" content="https://subgeta.com/images/og.png">
    <!-- Favicon-->
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="apple-touch-icon-precomposed" href="https://subgeta.com/images/appletouchicon150.png" />
    <!-- CSS-->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oxygen|Noto Sans|Noto Sans JP|Roboto|Noto Serif">

<body class="w3-light-grey">
<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-bar-block w3-black w3-animate-right w3-top w3-text-light-grey w3-large" style="z-index:3;width:250px;font-weight:bold;display:none;right:0;" id="mySidebar">
  <a href="javascript:void()" onclick="w3_close()" class="close"><span class="bigx"></span></a>
  <a href="https://subgeta.com/" onclick="w3_close()" class="w3-bar-item w3-button w3-center w3-padding-16">PORTFOLIO</a> 
  <a href="https://subgeta.com/about.html" onclick="w3_close()" class="w3-bar-item w3-button w3-center w3-padding-16">ABOUT</a> 
  <a href="https://subgeta.com/contact.html" onclick="w3_close()" class="w3-bar-item w3-button w3-center w3-padding-16">CONTACT</a>
</nav>
<!-- Top menu on small screens -->
<header class="w3-container w3-top w3-xlarge w3-padding-16 w3-white">
  <span class="w3-left w3-padding" style="font-family:Noto Serif;"><a style="text-decoration:none;" href="http://www.subgeta.com">JUAN ARRIAGA</a></span>
  <a href="javascript:void(0)" class="w3-right w3-button w3-white" onclick="w3_open()">☰</a>
</header>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>



<script>
// Script to open and close sidebar
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
  document.getElementById("myOverlay").style.display = "block";
}
function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
  document.getElementById("myOverlay").style.display = "none";
}
// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}
</script>

</html>