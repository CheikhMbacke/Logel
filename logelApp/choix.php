<?php
  session_start();
  require_once '../controllers/Chambre.php';
  $roomManager = new Chambre();
  $state = $roomManager->isTitulaire($_SESSION['carte']);
  $sentence = $state ? 'Nous vous rappelons que vous devez vous rendre chez le comptable' : '';
 ?>
<header id="header">
  <div class="main_nav">
    <div class="container">
    </div>
  </div>

  <div class="title">
    <div><img style="width:40px;"
     src="https://image.flaticon.com/icons/png/128/126/126471.png"/></div>
    <div class="smallsep heading"></div>
    <h2 class="heading">Félicitation <?php echo $_SESSION['prenom'].' '.$_SESSION['nom'] ;?> votre choix est bien enregistre</h2>
    <h2 class="heading"> <?php echo $sentence ?></h2>
    <a class="smoothscroll" href="#about">
    <div class="mouse">
      <div class="wheel"></div>
    </div>
    </a> </div>
  <a class="smoothscroll" href="#about">
  <div class="scroll-down"></div>
  </a> </header>

<style media="screen">
html {
font-size: 62.5%;
margin: 0;
padding: 0;
}
body {
font-size: 1.5em;
line-height: 1.6;
font-weight: 400;
color: #222;
margin: 0;
padding: 0;
}

.container {
position: relative;
width: 100%;
max-width: 960px;
margin: 0 auto;
padding: 0 20px;
box-sizing: border-box;
}
.column, .columns {
width: 100%;
float: left;
box-sizing: border-box;
}


.navbar {
  overflow: hidden;
  background-color: #333;
  font-family: Arial;
}

.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 16px;
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
}

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: red;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
}











@media (min-width: 550px) {
.container {
width: 80%;
}
.column,  .columns {
margin-left: 4%;
}
.column:first-child,  .columns:first-child {
margin-left: 0;
}
.one.column,  .one.columns {
width: 4.66666666667%;
}
.two.columns {
width: 13.3333333333%;
}
.three.columns {
width: 22%;
}
.four.columns {
width: 30.6666666667%;
}
.five.columns {
width: 39.3333333333%;
}
.six.columns {
width: 48%;
}
.seven.columns {
width: 56.6666666667%;
}
.eight.columns {
width: 65.3333333333%;
}
.nine.columns {
width: 74.0%;
}
.ten.columns {
width: 82.6666666667%;
}
.eleven.columns {
width: 91.3333333333%;
}
.twelve.columns {
width: 100%;
margin-left: 0;
}
.one-third.column {
width: 30.6666666667%;
}
.two-thirds.column {
width: 65.3333333333%;
}
.one-half.column {
width: 48%;
}
/* Offsets */
.offset-by-one.column,  .offset-by-one.columns {
margin-left: 8.66666666667%;
}
.offset-by-two.column,  .offset-by-two.columns {
margin-left: 17.3333333333%;
}
.offset-by-three.column,  .offset-by-three.columns {
margin-left: 26%;
}
.offset-by-four.column,  .offset-by-four.columns {
margin-left: 34.6666666667%;
}
.offset-by-five.column,  .offset-by-five.columns {
margin-left: 43.3333333333%;
}
.offset-by-six.column,  .offset-by-six.columns {
margin-left: 52%;
}
.offset-by-seven.column,  .offset-by-seven.columns {
margin-left: 60.6666666667%;
}
.offset-by-eight.column,  .offset-by-eight.columns {
margin-left: 69.3333333333%;
}
.offset-by-nine.column,  .offset-by-nine.columns {
margin-left: 78.0%;
}
.offset-by-ten.column,  .offset-by-ten.columns {
margin-left: 86.6666666667%;
}
.offset-by-eleven.column,  .offset-by-eleven.columns {
margin-left: 95.3333333333%;
}
.offset-by-one-third.column,  .offset-by-one-third.columns {
margin-left: 34.6666666667%;
}
.offset-by-two-thirds.column,  .offset-by-two-thirds.columns {
margin-left: 69.3333333333%;
}
.offset-by-one-half.column,  .offset-by-one-half.columns {
margin-left: 52%;
}
}
/* Typography
********************************************************************* */
h1, h2, h3, h4, h5, h6 {
margin-top: 0;
margin-bottom: 2rem;
font-weight: 300;
}
h1 {
font-size: 4.0rem;
line-height: 1.2;
letter-spacing: -.1rem;
}
h2 {
font-size: 3.6rem;
line-height: 1.25;
letter-spacing: -.1rem;
}
h3 {
font-size: 3.0rem;
line-height: 1.3;
letter-spacing: -.1rem;
}
h4 {
font-size: 2.4rem;
line-height: 1.35;
letter-spacing: -.08rem;
}
h5 {
font-size: 1.8rem;
line-height: 1.5;
letter-spacing: -.05rem;
}
h6 {
font-size: 1.5rem;
line-height: 1.6;
letter-spacing: 0;
}

h1 {
font-size: 5.0rem;
}
h2 {
font-size: 4.2rem;
}
h3 {
font-size: 3.6rem;
}
h4 {
font-size: 3.0rem;
}
h5 {
font-size: 2.4rem;
}
h6 {
font-size: 1.5rem;
}
}
p {
margin-top: 0;
}

a {
color: #1EAEDB;
}
a:hover {
color: #0FA0CE;
}


header {
display: -webkit-box;
display: -webkit-flex;
display: -ms-flexbox;
display: flex;
-webkit-box-pack: center;
-webkit-justify-content: center;
-ms-flex-pack: center;
justify-content: center;
width: 100%%;
height: 100vh;
background: #e55d87;
background: -moz-linear-gradient(-45deg, #e55d87 0%, #5fc3e4 100%);
background: -webkit-linear-gradient(-45deg, #e55d87 0%, #5fc3e4 100%);
background: linear-gradient(135deg, #e55d87 0%, #5fc3e4 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#e55d87', endColorstr='#5fc3e4', GradientType=1 );
}
.title {
-webkit-align-self: center;
-ms-flex-item-align: center;
align-self: center;
padding: 2rem;
max-width: 960px;
text-align: center;
}
.title .smallsep {
background: #fff;
height: 2px;
width: 70px;
margin: auto;
margin-top: 30px;
margin-bottom: 30px;
}
.title h1 {
font-size: 80px;
font-weight: 300;
text-transform: uppercase;
line-height: 0.85;
margin-bottom: 28px;
margin: 0;
padding: 0;
color: #FFFFFF;
}
.title h2 {
color: #FFFFFF;
font-size: 16px;
font-weight: 400;
text-transform: uppercase;
letter-spacing: 5px;
margin-top: 50px;
}

.title p {
max-width: 600px;
margin: 0 auto;
line-height: 150%;
}

@media only screen and (max-width: 500px) {
.title h1 {
font-size: 65px;
}
}
.title .icon {
color: #FFFFFF;
font-size: 50px;
}
.main_nav {
position: fixed;
top: 0px;
max-height: 50px;
z-index: 999;
width: 100%;
padding-top: 17px;
background: none;
overflow: hidden;
-webkit-transition: all 0.3s;
transition: all 0.3s;
opacity: 0;
top: -100px;
padding-bottom: 6px;
}

@media only screen and (max-width: 766px) {
.main_nav {
padding-top: 25px;
}
}
.open-nav {
max-height: 400px !important;
}
.sticky {
background-color: #ffffff;
opacity: 1;
top: 0px;
}
nav {
width: 100%;
margin-top: 5px;
}

@media only screen and (max-width: 766px) {
nav {
width: 100%;
}
}
nav ul {
list-style: none;
overflow: hidden;
text-align: center;
}

@media only screen and (max-width: 766px) {
nav ul {
padding-top: 0px;
margin-bottom: 22px;
text-align: center;
width: 100%;
}
}
nav ul li {
display: inline-block;
margin-left: 35px;
line-height: 1.5;
letter-spacing: 1px;
}

@media only screen and (max-width: 766px) {
nav ul li {
width: 100%;
padding: 7px 0;
margin: 0;
}
nav ul li:first-child {
margin-top: 70px;
}
}
nav ul a {
text-transform: uppercase;
font-size: 12px;
text-decoration: none;
}
nav ul a:hover {
color: #CFCFCF;
}


@-webkit-keyframes fade_move_down {
0% {
-webkit-transform:translate(0, -10px) rotate(45deg);
opacity: 0;
}
50% {
opacity: 1;
}
100% {
-webkit-transform:translate(0, 10px) rotate(45deg);
opacity: 0;
}
}
@-moz-keyframes fade_move_down {
0% {
-moz-transform:translate(0, -10px) rotate(45deg);
opacity: 0;
}
50% {
opacity: 1;
}
100% {
-moz-transform:translate(0, 10px) rotate(45deg);
opacity: 0;
}
}
@keyframes fade_move_down {
0% {
transform:translate(0, -10px) rotate(45deg);
opacity: 0;
}
50% {
opacity: 1;
}
100% {
transform:translate(0, 10px) rotate(45deg);
opacity: 0;
}
}

#about {
padding: 100px 0 50px 0;
}

#portfolio {
padding: 100px 0 100px 0;
}
.image {
background-color: #5a5a5a;
width: 100%;
height: auto;
margin-left: auto;
margin-right: auto;
transition: .5s;
}
.image:hover {
opacity: 0.6;
transition: .3s;
background-image: url(../images/hoverbg.png);
background-repeat: no-repeat;
background-position: center;
}

#testimonial {
background-color: #F5F5F5;
padding: 100px 0 100px 0;
}

footer {
min-height: 120px;
padding: 40px 0 40px 0;
background: #e55d87;
background: -moz-linear-gradient(-45deg, #e55d87 0%, #5fc3e4 100%);
background: -webkit-linear-gradient(-45deg, #e55d87 0%, #5fc3e4 100%);
background: linear-gradient(135deg, #e55d87 0%, #5fc3e4 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#e55d87', endColorstr='#5fc3e4', GradientType=1 );
box-sizing: border-box;
}
footer p {
color: #FFFFFF;
margin: 20px 0 0 0;
}

button, .button {
margin-bottom: 1rem;
}
input, textarea, select, fieldset {
margin-bottom: 1.5rem;
}

.container:after, .row:after, .u-cf {
content: "";
display: table;
clear: both;
}

.icon {
padding-right: 10px;
color: #e55d87;
}
.block {
width: 70px;
height: 2px;
background: #e55d87; /* Old browsers */
background: -moz-linear-gradient(-45deg, #e55d87 0%, #5fc3e4 100%);
background: -webkit-linear-gradient(-45deg, #e55d87 0%, #5fc3e4 100%);
background: linear-gradient(135deg, #e55d87 0%, #5fc3e4 100%);
margin-bottom: 50px;
}

</style>
