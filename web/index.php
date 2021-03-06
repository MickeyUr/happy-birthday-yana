<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Yana Birthday Gift</title>
  

 <link rel="shortcut icon" href="./favicon.ico" type="image/x-icon">

  
      <link rel="stylesheet" href="css/style.css">

    <style type="text/css">
    @font-face {
      font-family: digit;
      src: url('digital.ttf') format("truetype");
    }
    @font-face {
      font-family: digit2;
      src: url('digital-7_mono.ttf') format("truetype");
    }    
    @font-face {
      font-family: fjalla;
      src: url('FjallaOne.ttf') format("truetype");
    }
  </style>

</head>

<body>

  <div class='moon'>
  <div class='crater1'></div>
  <div class='crater2'></div>
  <div class='crater3'></div>
</div>
<canvas id="canvas"></canvas>
<div id="sea"></div>
<div id="beach"></div>
<img src="https://dl.dropbox.com/s/2k0mtrxc2dqurmh/jumping.png" alt="jumping-people" id="people" />
<!--<img src="https://dl.dropbox.com/s/zoftkmdxyyqr8ce/belair.png" alt="jumping-people" id="car" />-->

<div id="merrywrap" class="merrywrap">
  <div class="giftbox">
    <div class="cover">
      <div></div>
    </div>
    <div class="box"></div>
  </div>
        <div id="code">
        <span class="comments">/**</span><br />
        <span class="space"/><span class="comments">* Сегодня, 3-е августа, твой день рождения.</span><br />
        <span class="space"/><span class="comments">* И я решил создать страничку чтобы отпраздновать этот день.</span><br />
        <span class="space"/><span class="comments">*/</span><br />
        Girl u = <span class="keyword">new</span> Girl(<span class="string">"Yana Volosyankina"</span>);<br />
        <span class="comments">//Ты – самая прелестная, веселая, красивая и искренняя.</span><br />
        Date currentTime = <span class="keyword">new</span> Date(); <br />
        SimpleDateFormat formatter = <span class="keyword">new</span> SimpleDateFormat(<span class="string">"yyyy-MM-dd HH:mm:ss"</span>);<br />
        String dateString = formatter.format(currentTime);<br />
        if( dateString.equals(<span class="string">"2018-08-03 00:00:00"</span>) ){</br>
          u.age ++;</br>
        }</br>
        <!-- <span class="comments">// Our blessing will be with you simultaneously.</span><br /> -->
        <span class="keyword">new</span> Thread (){<br />
        @Override </br>
        <span class="comments">// Отныне и навсегда я желаю:</span><br />
        while(true){</br>
        <span class="comments">// удачи,</span><br />
        u.fortune ++;</br>
        <span class="comments">// счастья,</span><br />
        u.happiness ++;</br>
        <span class="comments">// быть любимой,</span><br />
        u.beLoved = true;</br>
          <span class="comments">// Пусть тебе во всем везет, и мечты твои всегда сбываются!</span><br />
        }.start()</br>
        <span class="comments">// Ведь так хочется видеть чтобы ты была счастливой, успешной и радостной – и не только в день рождения, а каждый день и каждую секунду.</span><br />
        System.out.println(<span class="string">"Happy Birthday !"</span>);
      </div>
  <div class="icons">
    <div class="row"> 
      <span>H</span>
      <span>A</span>
      <span>P</span>
      <span>P</span>
      <span>Y</span>
    </div>
    <div class="row"> 
      <span>B</span>
      <span>i</span>
      <span>r</span>
      <span>t</span>
      <span>h</span>
      <span>d</span>
      <span>a</span>
      <span>y</span>
     
    </div>
    <div class="row"> 
      <span>Y</span> 
      <span>a</span>
      <span>n</span> 
      <span>a</span>
    </div>
  </div>
</div>

<div id="video">
<!--<iframe width="255" height="155" src="https://www.youtube.com/embed/KDxJlW6cxRk?controls=0&loop=1" frameborder="0" allowfullscreen></iframe>-->
        <div id="words">
          <div id="messages">
          </br>
          </br>
          </br>
          </br>
          <div class="headTitle">
          You've been in the world for
          </div>
            
            <div id="elapseClock"></div>
          </div>
          <div id="loveu">
            Пусть у тебя будет год, полный счастья.<br/>
            <div class="signature">- Misha</div>
          </div>
        </div>
</div>
  
  
  <script type="text/javascript" src="js/jquery.js"></script>
    <script  src="js/index.js"></script>




</body>

</html>
