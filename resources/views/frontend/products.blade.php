<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Lab mid eccomerce</title>
  <link rel="stylesheet" href="{{url('frontend/product.css')}}" />


</head>

<body>
  <div class="container">
    <div class="navbar">
      <img src="{{url('frontend/logo1.png')}}" alt="" class="logo" />
      <ul>
        <li><a href="{{url('/')}}">Home</a></li>
        <li><a href="{{url('/about')}}">About</a></li>
        <li><a href="#">Specification</a></li>
        <li><a href="#">connect</a></li>
      </ul>
    </div>

    <div class="content">
      <div class="left-col">
        <h1>Select <br />By Category<br /></h1>
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

  <script src="https://code.iconify.design/iconify-icon/1.0.1/iconify-icon.min.js"></script>

  <!-- Popular Products -->
  <section class="section">
    <div class="h">
      <h1>Popular <span>Products</span></h1>
    </div>
    <div class="ac-center box">
      <div class="ac">
        <div class="img-cover">
          <img src="{{url('frontend/headphonepic/1.jpg')}}" alt="" width="200px" />
        </div>
        <p>Logitech G G635</p>
        <div class="rating">
          <iconify-icon icon="bxs:star"></iconify-icon>
          <iconify-icon icon="bxs:star"></iconify-icon>
          <iconify-icon icon="bxs:star"></iconify-icon>
          <iconify-icon icon="bxs:star"></iconify-icon>
          <iconify-icon icon="bxs:star"></iconify-icon>
        </div>
        <div class="price">PKR 29,000</div>
      </div>

      <div class="ac">
        <div class="img-cover">
          <img src="{{url('frontend/headphonepic/2.jpg')}}" alt="" width="200px" />
        </div>
        <p>HyperX Cloud Stinger</p>
        <div class="rating">
          <iconify-icon icon="bxs:star"></iconify-icon>
          <iconify-icon icon="bxs:star"></iconify-icon>
          <iconify-icon icon="bxs:star"></iconify-icon>
          <iconify-icon icon="bxs:star"></iconify-icon>
        </div>
        <div class="price">PKR 15,500</div>
      </div>

      <div class="ac">
        <div class="img-cover">
          <img src="{{url('frontend/headphonepic/3.jpg')}}" alt="" width="200px" />
        </div>
        <p>SADES Dazzle Gaming Headset</p>
        <div class="rating">
          <iconify-icon icon="bxs:star"></iconify-icon>
          <iconify-icon icon="bxs:star"></iconify-icon>
          <iconify-icon icon="bxs:star"></iconify-icon>
        </div>
        <div class="price">PKR 6,000</div>
      </div>
      <div class="ac">
        <div class="img-cover">
          <img src="{{url('frontend/headphonepic/4.jpg')}}" alt="" width="200px" />
        </div>
        <p>Havit H139D Wired</p>
        <div class="rating">
          <iconify-icon icon="bxs:star"></iconify-icon>
          <iconify-icon icon="bxs:star"></iconify-icon>
        </div>
        <div class="price">PKR 1,650</div>
      </div>
      <div class="ac">
        <div class="img-cover">
          <img src="{{url('frontend/airpodpic/1.jpg')}}" alt="" width="200px" />
        </div>
        <p>Airpods Pro Wireless</p>
        <div class="rating">
          <iconify-icon icon="bxs:star"></iconify-icon>
          <iconify-icon icon="bxs:star"></iconify-icon>
          <iconify-icon icon="bxs:star"></iconify-icon>
        </div>
        <div class="price">PKR 2,700</div>
      </div>
      <div class="ac">
        <div class="img-cover">
          <img src="{{url('frontend/airpodpic/2.jpg')}}" alt="" width="200px" />
        </div>
        <p>RAZOR Hammerhead True Pro</p>
        <div class="rating">
          <iconify-icon icon="bxs:star"></iconify-icon>
          <iconify-icon icon="bxs:star"></iconify-icon>
          <iconify-icon icon="bxs:star"></iconify-icon>
          <iconify-icon icon="bxs:star"></iconify-icon>
        </div>
        <div class="price">PKR 19,900</div>
      </div>
      <div class="ac">
        <div class="img-cover">
          <img src="{{url('frontend/airpodpic/3.jpg')}}" alt="" width="200px" />
        </div>
        <p>Asus ROG Cetra Earphones</p>
        <div class="rating">
          <iconify-icon icon="bxs:star"></iconify-icon>
          <iconify-icon icon="bxs:star"></iconify-icon>
          <iconify-icon icon="bxs:star"></iconify-icon>
          <iconify-icon icon="bxs:star"></iconify-icon>
          <iconify-icon icon="bxs:star"></iconify-icon>
        </div>
        <div class="price">PKR 13,000</div>
      </div>
      <div class="ac">
        <div class="img-cover">
          <img src="{{url('frontend/airpodpic/4.jpg')}}" alt="" width="200px" />
        </div>
        <p>Havit I98 True earbuds</p>
        <div class="rating">
          <iconify-icon icon="bxs:star"></iconify-icon>
          <iconify-icon icon="bxs:star"></iconify-icon>
          <iconify-icon icon="bxs:star"></iconify-icon>
        </div>
        <div class="price">PKR 3,990</div>
      </div>

      <!--  making the form as above -->


      @foreach($product as $row)
      <div class="ac">
        <div class="img-cover">
          <img src="{{ Storage::url($row['product_image'])}}" alt="" width="200px" />
        </div>
        <p>{{$row['product_name']}}</p>
        <div class="rating">
          <iconify-icon icon="bxs:star"></iconify-icon>
          <iconify-icon icon="bxs:star"></iconify-icon>
          <iconify-icon icon="bxs:star"></iconify-icon>
        </div>
        <div class="price">{{$row['product_price']}}</div>
      </div>
      @endforeach


      <!--   inserting database file here  -->


      <!-- <table class="">
        <tr>
          <th> produt name </th>
          <th> product price </th>
          <th>edit</th>
          <th>delete</th>
        </tr>
        @foreach($product as $row)
        <tr>
          <td>{{$row['product_name']}}</td>
          <td>{{$row['product_price']}}</td>
          <td></td>
          <td></td>
        </tr>
        @endforeach
      </table> -->

    </div>




  </section>

  <!-- footer -->

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