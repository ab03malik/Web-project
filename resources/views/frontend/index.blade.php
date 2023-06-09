<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Web Project Shopee</title>
  <link rel="stylesheet" href="{{url('frontend/css/style.css')}}" />
</head>

<body>
  <div class="container">
    <div class="navbar">
      <img src="{{url('frontend/logo1.png')}}" alt="" class="logo" />
      <ul>
        <li><a href="{{url('/')}}">Home</a></li>
        <li><a href="{{url('/about')}}">About</a></li>
        <li><a href="{{url('products2/create')}}">Form</a></li>
        <li><a href="{{url('/products')}}">Products</a></li>
        <li><a href="{{url('/admin')}}">Admin</a></li>
      </ul>
    </div>

    <div class="content">
      <div class="left-col">
        <h1>WELCOME,TO <br />SHOPEE.PK<br /></h1>
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
  <!--  links to import the tagss -->
  <script src="https://code.iconify.design/iconify-icon/1.0.1/iconify-icon.min.js"></script>

  <script src="https://code.iconify.design/iconify-icon/1.0.1/iconify-icon.min.js"></script>

  <script src="https://code.iconify.design/iconify-icon/1.0.1/iconify-icon.min.js"></script>

  <script src="https://code.iconify.design/iconify-icon/1.0.1/iconify-icon.min.js"></script>

  <script src="https://code.iconify.design/iconify-icon/1.0.1/iconify-icon.min.js"></script>

  <script src="https://code.iconify.design/iconify-icon/1.0.1/iconify-icon.min.js"></script>

  <script src="https://code.iconify.design/iconify-icon/1.0.1/iconify-icon.min.js"></script>

  <section class="section benefits">
    <div class="benefit-center box">
      <div class="benefit">
        <span class="icon">
          <iconify-icon icon="bx:purchase-tag"></iconify-icon>
        </span>
        <h4>Free Shipping</h4>
        <span class="text">Free shipping Above 5000Rs</span>
      </div>

      <div class="benefit">
        <span class="icon">
          <iconify-icon icon="bx:bx-book-reader"></iconify-icon>
        </span>
        <h4>10-Day Returns</h4>
        <span class="text">Shop without any fear</span>
      </div>

      <div class="benefit">
        <span class="icon">
          <!-- <i class="bx bx-headphone"></i> -->
          <iconify-icon icon="bx:bx-headphone"></iconify-icon>
        </span>
        <h4>24/7 Support</h4>
        <span class="text">We are always there to help you</span>
      </div>
    </div>
  </section>

  <!-- New Arrivals -->
  <section class="section">
    <div class="h">
      <h1><span>New</span> Arrivals</h1>
    </div>
    <div class="ac-center box">
      <div class="ac">
        <div class="img-cover">
          <img src="{{url('frontend/headphone.jpg')}}" alt="" width="200px" />
        </div>
        <p>Sony WH-CH400 Wireless Headset</p>
        <div class="rating">
          <i class="bx bxs-star"></i>
          <i class="bx bxs-star"></i>
          <i class="bx bxs-star"></i>
          <i class="bx bxs-star"></i>
          <i class="bx bxs-star"></i>
        </div>
        <div class="price">PKR 5000</div>
      </div>

      <div class="ac">
        <div class="img-cover">
          <img src="{{url('frontend/remax.jpg')}}" alt="" width="200px" />
        </div>
        <p>Remax Handfree Metallic red RM-500</p>
        <div class="rating">
          <i class="bx bxs-star"></i>
          <i class="bx bxs-star"></i>
          <i class="bx bxs-star"></i>
          <i class="bx bxs-star"></i>
          <i class="bx bx-star"></i>
        </div>
        <div class="price">PKR 3000</div>
      </div>

      <div class="ac">
        <div class="img-cover">
          <img src="{{url('frontend/redmi-buds-3.jpg')}}" alt="" width="200px" />
        </div>
        <p>Redmi Buds 3 PRO</p>
        <div class="rating">
          <i class="bx bxs-star"></i>
          <i class="bx bxs-star"></i>
          <i class="bx bxs-star"></i>
          <i class="bx bxs-star"></i>
          <i class="bx bx-star"></i>
        </div>
        <div class="price">PKR 29000</div>
      </div>
      <div class="ac">
        <div class="img-cover">
          <img src="{{url('frontend/pocket-speaker.jpg')}}" alt="" width="200px" />
        </div>
        <p>Redmi Mi Pocket Speaker</p>
        <div class="rating">
          <i class="bx bxs-star"></i>
          <i class="bx bxs-star"></i>
          <i class="bx bxs-star"></i>
          <i class="bx bxs-star"></i>
          <i class="bx bx-star"></i>
        </div>
        <div class="price">PKR 4000</div>
      </div>
    </div>
  </section>

  <!--   productts -->
  <section class="section">
    <div class="h">
      <h1><span>Our</span> Products</h1>
    </div>
    <div class="ac-center box">
      <div class="ac">
        <div class="img-cover">
          <img src="{{url('frontend/headphone.jpg')}}" alt="" width="200px" />
        </div>
        <p><strong>Headphones/Headset</strong></p>
        <div class="rating">
          <i class="bx bxs-star"></i>
          <i class="bx bxs-star"></i>
          <i class="bx bxs-star"></i>
          <i class="bx bxs-star"></i>
          <i class="bx bxs-star"></i>
        </div>
        <!-- <div class="price">PKR 5000</div> -->
      </div>

      <div class="ac">
        <div class="img-cover">
          <img src="{{url('frontend/remax.jpg')}}" alt="" width="200px" />
        </div>
        <p><strong>Earphones</strong></p>
        <div class="rating">
          <i class="bx bxs-star"></i>
          <i class="bx bxs-star"></i>
          <i class="bx bxs-star"></i>
          <i class="bx bxs-star"></i>
          <i class="bx bx-star"></i>
        </div>
        <!-- <div class="price">PKR 3000</div> -->
      </div>

      <div class="ac">
        <div class="img-cover">
          <img src="{{url('frontend/redmi-buds-3.jpg')}}" alt="" width="200px" />
        </div>
        <p><strong>EarBuds</strong></p>
        <div class="rating">
          <i class="bx bxs-star"></i>
          <i class="bx bxs-star"></i>
          <i class="bx bxs-star"></i>
          <i class="bx bxs-star"></i>
          <i class="bx bx-star"></i>
        </div>
        <!-- <div class="price">PKR 29000</div> -->
      </div>
      <div class="ac">
        <div class="img-cover">
          <img src="{{url('frontend/pocket-speaker.jpg')}}" alt="" width="200px" />
        </div>
        <p><strong>Portable Pocket Speaker</strong></p>
        <div class="rating">
          <i class="bx bxs-star"></i>
          <i class="bx bxs-star"></i>
          <i class="bx bxs-star"></i>
          <i class="bx bxs-star"></i>
          <i class="bx bx-star"></i>
        </div>
        <!-- <div class="price">PKR 4000</div> -->
      </div>
    </div>
  </section>

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