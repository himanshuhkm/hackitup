<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Hack-It-Up! | WHHC</title>
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-125937952-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-125937952-1');
</script>

    
    
    <link rel="stylesheet" href="css/normalize.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel='stylesheet prefetch' href='css/7534eb3fb62294822de9eace9.css'>

        <style>
        
@import url(https://fonts.googleapis.com/css?family=Roboto:400,700);

@keyframes checked-anim {
    50% {
        width: 3000px;
        height: 3000px;
    }
    100% {
        width: 100%;
        height: 100%;
        border-radius: 0;
    }
}
@keyframes not-checked-anim {
    0% {
        width: 3000px;
        height: 3000px;
    }
}

html, body {
    margin: 0;
    padding: 0;
    font-family: 'Roboto', sans-serif;
    overflow: hidden;
}

li, a {
    margin: 75px 0 -55px 0;
    color: #F9A825;
    font: 14pt "Roboto", sans-serif;
    font-weight: 700;
    line-height: 1.8;
    text-decoration: none;
    text-transform: none;
    list-style: none;
    outline: 0;
    display: none;
}
li {
    width: 230px;
    text-indent: 56px;}
a:focus {
    display: block;
    color: #333;
    background-color: #eee;
    transition: all .5s;
}
aside {
    position: absolute;
    color: white;
    top: 35%;
    right: 10%;
    text-align: right;
}
h1 {
    line-height: 0;
    font-size: 4vw;
    font-weight: 700;
}
h3 {
    float: right;
    /*line-height: .3;*/
    font-size: 2.5vw;
    font-weight: lighter;
}
h4 {
    float: left;
    margin-left: -2%;
    font-size: 1.5vw;
    font-weight: lighter;
}

#trigger, #burger, #burger:before, #burger:after {
    position: absolute;
    top: 25px;
    left: 25px;
    background: #F9A825;
    width: 30px;
    height: 5px;
    transition: .2s ease;
    cursor: pointer;
    z-index: 30;
}
#trigger {
    height: 25px;
    background: none;
}
#burger:before {
    content: " ";
    top: 10px;
    left: 0;
}
#burger:after {
    content: " ";
    top: 20px;
    left: 0;
}
#menu-toggle:checked + #trigger + #burger {
    top: 35px;
    transform: rotate(180deg);
    transition: transform .2s ease;
}

#menu-toggle:checked + #trigger + #burger:before {
    width: 20px;
    top: -2px;
    left: 18px;
    transform: rotate(45deg) translateX(-5px);
    transition: transform .2s ease;
}
#menu-toggle:checked + #trigger + #burger:after {
    width: 20px;
    top: 2px;
    left: 18px;
    transform: rotate(-45deg) translateX(-5px);
    transition: transform .2s ease;
}
#menu {
    z-index: 9;
    position: absolute;
    margin: 0; padding: 0;
    width: 110px;
    height: 110px;
    background-color: #fff;
    border-bottom-right-radius: 100%;
    box-shadow: 0 2px 5px rgba(0,0,0,0.26);
    animation: not-checked-anim .2s both;
    transition: .2s;
}
#menu-toggle:checked + #trigger + #burger + #menu {
    animation: checked-anim 1s ease both;
}
#menu-toggle:checked + #trigger ~ #menu > li, a {
    display: block;
}
[type="checkbox"]:not(:checked), [type="checkbox"]:checked {
    display: none;
}
      body {
  background-color: #F9A825;
}

/* #loginbut {
  display: none;
} */

@media screen and (min-width: 1213px){

    .error404page {
  height: 800px;
    }

    .body404, .head404, .eyes404, .leftarm404, .rightarm404, .chair404, .leftshoe404, .rightshoe404, .legs404, .laptop404 {
  background: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/15979/404-character-new.png) 0 0 no-repeat;
  width: 200px;
  height: 200px;
    }

  .newcharacter404, .torso404, .body404, .head404, .eyes404, .leftarm404, .rightarm404, .chair404, .leftshoe404, .rightshoe404, .legs404, .laptop404 {
  background-size: 750px;
  position: absolute;
  display: block;
  }

  .newcharacter404 {
  width: 400px;
  height: 800px;
  left: 50%;
  top: 10vw;
  margin-left: -200px;
  }

  .torso404 {
  position: absolute;
  display: block;
  top: 138px;
  left: 0px;
  width: 389px;
  height: 252px;
  animation: sway 20s ease infinite;
  transform-origin: 50% 100%;
  }

  .body404 {
  position: absolute;
  display: block;
  top: 0px;
  left: 0px;
  width: 389px;
  height: 253px;
  }

  .head404 {
  position: absolute;
  top: -148px;
  left: 106px;
  width: 160px;
  height: 194px;
  background-position: 0px -265px;
  transform-origin: 50% 85%;
  animation: headTilt 20s ease infinite;
  }

  .eyes404 {
  position: absolute;
  top: 92px;
  left: 34px;
  width: 73px;
  height: 18px;
  background-position: -162px -350px;
  animation: blink404 10s steps(1) infinite, pan 10s ease-in-out infinite;
  }

  .leftarm404 {
  position: absolute;
  top: 159px;
  left: 0;
  width: 165px;
  height: 73px;
  background-position: -265px -341px;
  transform-origin: 9% 35%;
  transform: rotateZ(0deg);
  animation: typeLeft 0.4s linear infinite;
  }

  .rightarm404 {
  position: absolute;
  top: 148px;
  left: 231px;
  width: 157px;
  height: 91px;
  background-position: -442px -323px;
  transform-origin: 90% 25%;
  animation: typeLeft 0.4s linear infinite;
  }
          
  h1{
  color: #396;
  font-weight: 100;
  font-size: 30px;
  margin: 40px 0px 20px;
  }
          
 #clockdiv{
   display: inline-block;
     padding-left:5vw;
   	float:left;
   	padding-top: 25px;
   	align-items: center;
    font-family: sans-serif;
    color: #fff;
    font-weight: 100;
    text-align: center;
    font-size: 30px;
   	font-weight: bold;
  }
  #clockdiv > div{
    padding: 10px;
    border:3px solid white;
  	border-radius: 5px;
    display: inline-block;
  }
  #clockdiv div > span{
    padding: 15px;
    display: inline-block;
  }
  .smalltext{
    padding-top: 5px;
    font-size: 16px;
  }
          
  .srm{
  position: relative;
  text-align: center;
  padding-top:0.5%;
  }
          
  #college{
  float: right;
  }
          
  .buttons {
  padding-top: 15%;
  width: 100%;
  clear: both;
  }
          
  .button {
  text-align: center;
  color: #F9A825;
  width: 150px;
  background: #fff;
  }
          
  .leftbuttons{
  float:left;
  }

  .rightbuttons{
  padding-right: 13%;
  float:right;
  }
          
  #hackitup {
  font-size: 2.3em;
  }

  .club{
  margin-left: 3vw;
  }
          
  .name {
  padding-left: 5%;
  width: 100%;
  color: #fff;
  font-size: 1.4em;
  text-align: center;
  }
          
  .hacktext {
  margin-top: 10%;
  float: left;
  position: relative;
  color: #fff;
  width: fit-content;
  font-size: 1.35em;
  padding-left: 17%;
  text-align: center;
  }

  .loginbutton{
    height: 10vw;  
  }

  .chair404 {
  position: absolute;
  top: 430px;
  left: 55px;
  width: 260px;
  height: 365px;
  background-position: -12px -697px;
  }

  .legs404 {
  position: absolute;
  top: 378px;
  left: 4px;
  width: 370px;
  height: 247px;
  background-position: -381px -443px;
  }

  .leftshoe404 {
  position: absolute;
  top: 591px;
  left: 54px;
  width: 130px;
  height: 92px;
  background-position: -315px -749px;
  }

  .rightshoe404 {
  position: absolute;
  top: 594px;
  left: 187px;
  width: 135px;
  height: 81px;
  background-position: -453px -749px;
  transform-origin: 35% 12%;
  animation: tapRight 1s linear infinite;
  }

  .laptop404 {
  position: absolute;
  top: 186px;
  left: 9px;
  width: 365px;
  height: 216px;
  background-position: -2px -466px;
  transform-origin: 50% 100%;
  animation: tapWobble 0.4s linear infinite;
  }

  .logo {
  position: absolute;
  top: 270px;
  left: 160px;
  width: 60px;
  height: 60px;
  background-position: -2px -466px;
  transform-origin: 50% 100%;
  animation: tapWobble 0.4s linear infinite;
  }

  	
    .modal {
      z-index: 20;
        position: fixed;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
        opacity: 0;
        visibility: hidden;
        transform: scale(1.1);
        transition: visibility 0s linear 0.25s, opacity 0.25s 0s, transform 0.25s;
    }
    .modal-content {
      z-index: 20;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background-color: white;
        padding: 1rem 1.5rem;
        width: 70rem;
        height: 25rem;
        border-radius: 0.5rem;
    }
    .close-button {
      z-index: 20;
        float: right;
        width: 1.5rem;
        line-height: 1.5rem;
        text-align: center;
        cursor: pointer;
        border-radius: 0.25rem;
        background-color: lightgray;
    }
    .close-button:hover {
      z-index: 20;
        background-color: darkgray;
    }
    .show-modal {
      z-index: 20;
        opacity: 1;
        visibility: visible;
        transform: scale(1.0);
        transition: visibility 0s linear 0s, opacity 0.25s 0s, transform 0.25s;
    }
}

@media screen and (min-width: 1025px) and (max-width: 1212px) {
  .error404page {
  height: 800px;
    }

    .body404, .head404, .eyes404, .leftarm404, .rightarm404, .chair404, .leftshoe404, .rightshoe404, .legs404, .laptop404 {
  background: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/15979/404-character-new.png) 0 0 no-repeat;
  width: 200px;
  height: 200px;
    }

  .newcharacter404, .torso404, .body404, .head404, .eyes404, .leftarm404, .rightarm404, .chair404, .leftshoe404, .rightshoe404, .legs404, .laptop404 {
  background-size: 750px;
  position: absolute;
  display: block;
  }

  .newcharacter404 {
  width: 400px;
  height: 800px;
  left: 50%;
  top: 13vw;
  margin-left: -200px;
  }

  .torso404 {
  position: absolute;
  display: block;
  top: 138px;
  left: 0px;
  width: 389px;
  height: 252px;
  animation: sway 20s ease infinite;
  transform-origin: 50% 100%;
  }

  .body404 {
  position: absolute;
  display: block;
  top: 0px;
  left: 0px;
  width: 389px;
  height: 253px;
  }

  .head404 {
  position: absolute;
  top: -148px;
  left: 106px;
  width: 160px;
  height: 194px;
  background-position: 0px -265px;
  transform-origin: 50% 85%;
  animation: headTilt 20s ease infinite;
  }

  .eyes404 {
  position: absolute;
  top: 92px;
  left: 34px;
  width: 73px;
  height: 18px;
  background-position: -162px -350px;
  animation: blink404 10s steps(1) infinite, pan 10s ease-in-out infinite;
  }

  .leftarm404 {
  position: absolute;
  top: 159px;
  left: 0;
  width: 165px;
  height: 73px;
  background-position: -265px -341px;
  transform-origin: 9% 35%;
  transform: rotateZ(0deg);
  animation: typeLeft 0.4s linear infinite;
  }

  .rightarm404 {
  position: absolute;
  top: 148px;
  left: 231px;
  width: 157px;
  height: 91px;
  background-position: -442px -323px;
  transform-origin: 90% 25%;
  animation: typeLeft 0.4s linear infinite;
  }
          
  h1{
  color: #396;
  font-weight: 100;
  font-size: 30px;
  margin: 40px 0px 20px;
  }
          
 #clockdiv{
   display: inline-block;
   padding-left:5vw;
   	float:left;
   	padding-top: 25px;
   	align-items: center;
    font-family: sans-serif;
    color: #fff;
    font-weight: 100;
    text-align: center;
    font-size: 20px;
   	font-weight: bold;
  }
  #clockdiv > div{
    padding: 10px;
    border:3px solid white;
  	border-radius: 5px;
    display: inline-block;
  }
  #clockdiv div > span{
    padding: 10px;
    display: inline-block;
  }
  .smalltext{
    padding-top: 5px;
    font-size: 12px;
  }
          
  .srm{
  position: relative;
  text-align: center;
  padding-top:2%;
  }
          
  #college{
  float: right;
  }
          
  .buttons {
  padding-top: 15%;
  width: 100%;
  clear: both;
  }
          
  .button {
  text-align: center;
  color: #F9A825;
  width: 150px;
  background: #fff;
  }
          
  .leftbuttons{
  float:left;
  }

  .rightbuttons{
  padding-right: 13%;
  float:right;
  }
          
  #hackitup {
  font-size: 2.3em;
  }

  .club{
  margin-left: 3vw;
  }
          
  .name {
  padding-left: 5%;
  width: 100%;
  color: #fff;
  font-size: 1.4em;
  text-align: center;
  }
          
  .hacktext {
  margin-top: 10%;
  float: left;
  position: relative;
  color: #fff;
  width: fit-content;
  font-size: 1.1em;
  padding-left: 17%;
  text-align: center;
  }

  .chair404 {
  position: absolute;
  top: 430px;
  left: 55px;
  width: 260px;
  height: 365px;
  background-position: -12px -697px;
  }

  .legs404 {
  position: absolute;
  top: 378px;
  left: 4px;
  width: 370px;
  height: 247px;
  background-position: -381px -443px;
  }

  .leftshoe404 {
  position: absolute;
  top: 591px;
  left: 54px;
  width: 130px;
  height: 92px;
  background-position: -315px -749px;
  }

  .rightshoe404 {
  position: absolute;
  top: 594px;
  left: 187px;
  width: 135px;
  height: 81px;
  background-position: -453px -749px;
  transform-origin: 35% 12%;
  animation: tapRight 1s linear infinite;
  }

  .laptop404 {
  position: absolute;
  top: 186px;
  left: 9px;
  width: 365px;
  height: 216px;
  background-position: -2px -466px;
  transform-origin: 50% 100%;
  animation: tapWobble 0.4s linear infinite;
  }

  .logo {
  position: absolute;
  top: 270px;
  left: 160px;
  width: 60px;
  height: 60px;
  background-position: -2px -466px;
  transform-origin: 50% 100%;
  animation: tapWobble 0.4s linear infinite;
  }
}

@media screen and (max-width: 1024px) {

  html, body {
  margin: 0;
  padding: 0;
  font-family: 'Roboto', sans-serif;
  overflow: auto;
}

.error404page {
  display: gone;
}

.body404, .head404, .eyes404, .leftarm404, .rightarm404, .chair404, .leftshoe404, .rightshoe404, .legs404, .laptop404 {
display: gone;
}

.newcharacter404, .torso404, .body404, .head404, .eyes404, .leftarm404, .rightarm404, .chair404, .leftshoe404, .rightshoe404, .legs404, .laptop404 {
display: gone;
}

.newcharacter404 {
display: gone;
  }

.torso404 {
display: gone;
}

.body404 {
display: gone;
}

.head404 {
display: gone;
}

.eyes404 {
display: gone;
}

.leftarm404 {
display: gone;
}

.rightarm404 {
display: gone;
}
        
h1{
color: #396;
font-weight: 100;
font-size: 30px;
margin: 40px 0px 20px;
}
        
#clockdiv{
  display: inline-block;
  width:100%;
  align-items: center;
  float:left;
  padding-top: 25px;
  align-items: center;
  font-family: sans-serif;
  color: #fff;
  font-weight: bolder;
  text-align: center;
  font-size: 20px;
}
#clockdiv > div{
  padding: 6px;
  border:2px solid white;
  border-radius: 5px;
  display: inline-block;
}
#clockdiv div > span{
  padding: 15px;
  display: inline-block;
}
.smalltext{
  padding-top: 5px;
  font-size: 12px;
}
        
.srm{
  z-index: 1;
position: relative;
text-align: center;
  padding-top:5%;
}
        
#college{
align-items: center;
}
        
.buttons {
align-items:center;
width: 100%;
clear: both;
}
        
.button {
text-align: center;
color: #F9A825;
width: 60%;
margin-left:20%;
background: #fff;
}
        
.leftbuttons{
  width:100%;
  clear: both;
}

.rightbuttons{
clear:both;
width:100%;
display: flex;
justify-content: center;
flex-direction: column;
}

#lastbutton{
margin-bottom: 10px;
}

.club{
margin-left: 3vw;
}
        
.name {
width: 100%;
color: #fff;
font-size: 1.2em;
text-align: center;
text-align-last: center;
}
        
.hacktext {
margin-top: 10%;
float: left;
position: relative;
color: #fff;
width: 100%;
font-size: 1.35em;
text-align: 100%;
text-align-last: center;
}

#hackitup {
  width: 100%;
  text-align: center;
  font-size: 2.3em;
}

.chair404 {
display: gone;
}

.legs404 {
display: gone;
}

.leftshoe404 {
display: gone;
}

.rightshoe404 {
display: gone;
}

.laptop404 {
display: gone;
}

.logo {
display: gone;
width:0px;
}
}
  
@keyframes sway {
  0% {
    transform: rotateZ(0deg);
  }
  20% {
    transform: rotateZ(0deg);
  }
  25% {
    transform: rotateZ(4deg);
  }
  45% {
    transform: rotateZ(4deg);
  }
  50% {
    transform: rotateZ(0deg);
  }
  70% {
    transform: rotateZ(0deg);
  }
  75% {
    transform: rotateZ(-4deg);
  }
  90% {
    transform: rotateZ(-4deg);
  }
  100% {
    transform: rotateZ(0deg);
  }
}
@keyframes headTilt {
  0% {
    transform: rotateZ(0deg);
  }
  20% {
    transform: rotateZ(0deg);
  }
  25% {
    transform: rotateZ(-4deg);
  }
  35% {
    transform: rotateZ(-4deg);
  }
  38% {
    transform: rotateZ(2deg);
  }
  42% {
    transform: rotateZ(2deg);
  }
  45% {
    transform: rotateZ(-4deg);
  }
  50% {
    transform: rotateZ(0deg);
  }
  70% {
    transform: rotateZ(0deg);
  }
  82% {
    transform: rotateZ(0deg);
  }
  85% {
    transform: rotateZ(4deg);
  }
  90% {
    transform: rotateZ(4deg);
  }
  100% {
    transform: rotateZ(0deg);
  }
}
@keyframes typeLeft {
  0% {
    transform: rotateZ(0deg);
  }
  25% {
    transform: rotateZ(7deg);
  }
  75% {
    transform: rotateZ(-6deg);
  }
  100% {
    transform: rotateZ(0deg);
  }
}
@keyframes typeRight {
  0% {
    transform: rotateZ(0deg);
  }
  25% {
    transform: rotateZ(-6deg);
  }
  75% {
    transform: rotateZ(7deg);
  }
  100% {
    transform: rotateZ(0deg);
  }
}
@keyframes tapWobble {
  0% {
    transform: rotateZ(-0.2deg);
  }
  50% {
    transform: rotateZ(0.2deg);
  }
  100% {
    transform: rotateZ(-0.2deg);
  }
}
@keyframes tapRight {
  0% {
    transform: rotateZ(0deg);
  }
  90% {
    transform: rotateZ(-6deg);
  }
  100% {
    transform: rotateZ(0deg);
  }
}
@keyframes blink404 {
  0% {
    background-position: -162px -350px;
  }
  94% {
    background-position: -162px -350px;
  }
  98% {
    background-position: -162px -368px;
  }
  100% {
    background-position: -162px -350px;
  }
}
@keyframes pan {
  0% {
    transform: translateX(-2px);
  }
  49% {
    transform: translateX(-2px);
  }
  50% {
    transform: translateX(2px);
  }
  99% {
    transform: translateX(2px);
  }
  100% {
    transform: translateX(-2px);
  }

}

    </style>

    
        <script src="js/prefixfree.min.js"></script>

    
  </head>

  <body>
      <input type="checkbox" id="menu-toggle"/>
      <label id="trigger" for="menu-toggle"></label>
      <label id="burger" for="menu-toggle"></label>
      <ul id="menu">
          <li><a href="#">Home</a></li>
          <li><a href="/leaderboard">Leaderboards</a></li>
          <li><a href="/guidelines">Guidelines</a></li>
          <li><a href="/faq">FAQ</a></li>
      </ul>
    <div class="srm"> 
<div class="modal">
    <div class="modal-content">
        <span class="close-button">×</span>
        <h1>For Updates</h1><br>
        <h3>Check out instagram for the more info. Solutions will be posted on instagram <br> !HACK.IT.UP!</h3>
        <div class="socials">
        <a href="https://www.instagram.com/club_whhc" style="height:150px;"><img  src="instagram.png"  height="75px" width="75px"/></a>
        </div>
    </div>
</div>
      <img id="college" src="http://www.freestuffs.co/srm.png" height="100px" width="100px"/>
      <div class="name"><strong>SRM Institute Of Science and Technology, Vadapalani </strong><br>Department of Computer Science and Engineering <br> White Hat Hacker's Club</div>
    </div>   
    <div class="buttons">
      <div class="leftbuttons">
        <div class="hacktext"><strong><div id="hackitup">HACK IT UP 2</div></strong>Online Registrations starts in</div>
        <div id="clockdiv">
  			<div>
    			<span class="days" id="day"></span>
              <div class="smalltext">Days</div>
  			</div>
  			<div>
    			<span class="hours" id="hour"></span>
    			<div class="smalltext">Hours</div>
  			</div>
  			<div>
    			<span class="minutes" id="minute"></span>
    			<div class="smalltext">Minutes</div>
  			</div>
  			<div>
    			<span class="seconds" id="second"></span>
    			<div class="smalltext">Seconds</div>
  			</div>
    </div>
      </div>
      <div class="rightbuttons">
        <a class="triggerb button">Follow</a> 
        <a class="button" href="/faq">FAQ's</a>
        <a class="button" href="https://www.whhc.in" id="lastbutton">About Us</a>
      </div>
    </div>
    <div class="error404page">
    <div class="newcharacter404">
    <div class="chair404"></div>
    <div class="leftshoe404"></div>
    <div class="rightshoe404"></div>
    <div class="legs404"></div>
    <div class="torso404">
      <div class="body404"></div>
      <div class="leftarm404"></div>
      <div class="rightarm404"></div>
      <div class="head404">
        <div class="eyes404"></div>
      </div>
    </div>
    <div class="laptop404"></div>
    <img class="logo" src="https://whhc.in/Assets/Images/Logo.png"></div>
  </div>
</div>
<div id="niche">
  <div id="nichekatitle">For Hints</div>
</div>
</footer>
<script type="text/javascript">

	
  var modal = document.querySelector(".modal");
    var trigger = document.querySelector(".triggerb");
    var closeButton = document.querySelector(".close-button");

    function toggleModal() {
        modal.classList.toggle("show-modal");
    }

    function windowOnClick(event) {
        if (event.target === modal) {
            toggleModal();
        }
    }

    trigger.addEventListener("click", toggleModal);
    closeButton.addEventListener("click", toggleModal);
    window.addEventListener("click", windowOnClick);

var deadline = new Date("dec 20, 2018 12:00:00").getTime();
 
var x = setInterval(function() {
var now = new Date().getTime();
var t = deadline - now;
var days = Math.floor(t / (1000 * 60 * 60 * 24));
var hours = Math.floor((t%(1000 * 60 * 60 * 24))/(1000 * 60 * 60));
var minutes = Math.floor((t % (1000 * 60 * 60)) / (1000 * 60));
var seconds = Math.floor((t % (1000 * 60)) / 1000);
document.getElementById("day").innerHTML = days ;
document.getElementById("hour").innerHTML = hours;
document.getElementById("minute").innerHTML = minutes; 
document.getElementById("second").innerHTML = seconds; 
if (t < 0) {
        clearInterval(x);
        document.getElementById("demo").innerHTML = "TIME UP";
        document.getElementById("day").innerHTML ='0';
        document.getElementById("hour").innerHTML ='0';
        document.getElementById("minute").innerHTML ='0' ; 
        document.getElementById("second").innerHTML = '0'; }
}, 1000);
</script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='js/7534eb3fb62294822de9eace9.js'></script> 
  </body>
</html>
