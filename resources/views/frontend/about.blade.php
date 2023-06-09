<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>About us</title>
  <link rel="stylesheet" href="{{url('frontend/style2.css')}}" />

</head>


<script src="https://code.iconify.design/iconify-icon/1.0.1/iconify-icon.min.js"></script>

<script src="https://code.iconify.design/iconify-icon/1.0.1/iconify-icon.min.js"></script>

<script src="https://code.iconify.design/iconify-icon/1.0.1/iconify-icon.min.js"></script>

<script src="https://code.iconify.design/iconify-icon/1.0.1/iconify-icon.min.js"></script>

<script src="https://code.iconify.design/iconify-icon/1.0.1/iconify-icon.min.js"></script>

<script src="https://code.iconify.design/iconify-icon/1.0.1/iconify-icon.min.js"></script>

<script src="https://code.iconify.design/iconify-icon/1.0.1/iconify-icon.min.js"></script>

<body>
  <div class="container">
    <div class="navbar">
      <img src="{{url('frontend/logo1.png')}}" alt="" class="logo" />
      <ul>
        <li><a href="{{url('/')}}">Home</a></li>
        <li><a href="#">Specification</a></li>
        <li><a href="{{url('/products')}}">Products</a></li>
        <li><a href="#">connect</a></li>
      </ul>
    </div>

    <div class="content">
      <div class="left-col">
        <h1>About us</h1>
        <p>
          Lorem, ipsum dolor sit amet consectetur adipisicing elit. <br />
          Iure illo alias dolore veniam repellendus est! Qui, facilis.
          Expedita iusto aspernatur libero laudantium sapiente!
        </p>
      </div>
      <div class="right-col">
        <p>Click here to listen</p>
        <img src="{{url('frontend/img/play.png')}}" alt="" id="icon" />
      </div>
    </div>
  </div>

  <audio src="{{url('frontend/cool_ringtone.mp3')}}" id="mysong"></audio>
  <script>
    var mysong = document.getElementById("mysong");
    var icon = document.getElementById("icon");
    icon.onclick = function() {
      if (mysong.paused) {
        mysong.play();
        icon.src = "{{url('frontend/img/pause.png')}}";
      } else {
        mysong.pause();
        icon.src = "{{url('frontend/img/play.png')}}";
      }
    };
  </script>

  <section id="footer">
    <div class="foot">
      <p>Links</p>
      <ul>
        <li><a href="index.html">HOME</a></li>
        <li><a href="">ABOUT US</a></li>
        <li><a href="">CONTACT US</a></li>
      </ul>

      <div class="social-links">
        <p>Follow us</p>
        <a href="">
          <iconify-icon icon="mdi:linkedin"></iconify-icon>
        </a>
        <a href="">
          <iconify-icon icon="fa6-brands:square-behance"></iconify-icon>
        </a>
        <a href="">
          <iconify-icon icon="ic:baseline-facebook"></iconify-icon>
        </a>
        <a href="">
          <iconify-icon icon="mdi:instagram"></iconify-icon>
        </a>
        <a href="">
          <iconify-icon icon="bi:twitter"></iconify-icon>
        </a>
      </div>
    </div>
  </section>
</body>

</html>