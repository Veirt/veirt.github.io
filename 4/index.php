<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Website Toko Perangkat Audio</title>
  <link rel="stylesheet" href="style.css" />
  <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
  <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
</head>

<body>
  <?php $active = "index" ?>
  <?php include("includes/navbar.php") ?>

  <header>
    <section class="hero">
      <div class="hero-brightness"></div>
      <div class="hero-text">
        <h1>MOONDROP BLESSING 3</h1>
        2DD+4BA Hybrid Crossover
      </div>
    </section>
  </header>

  <section class="quote">
    <div class="quote-content">
      <p class="quote-text"></p>
      <div class="quote-person">
        <img class="quote-image" src="assets/revi.jpeg" alt="" />
        <p class="quote-person-name">
          Reviansa <br />
          <span>Certified Audiophile™</span>
        </p>
      </div>
    </div>
  </section>

  <section class="product">
    <div class="product-wrapper">
      <div class="section-title">
        <h1>Product</h1>
      </div>

      <div class="product-items">
        <div class="item">
          <div class="item-name">
            MOONDROP Beautiful World
            <div class="item-type">IEM</div>
          </div>
          <div class="item-image">
            <img src="assets/iem/beautiful_world.png" alt="" />
          </div>
          <div class="item-price">Rp. 11.791.000</div>
          <div onclick="hideItem(this)" class="item-buy">Hide</div>
        </div>

        <div class="item">
          <div class="item-name">
            Tanchjim Hana
            <div class="item-type">IEM</div>
          </div>
          <div class="item-image">
            <img src="assets/iem/tanchjim_hana.png" alt="" />
          </div>
          <div class="item-price">Rp. 2.499.000</div>
          <div onclick="hideItem(this)" class="item-buy">Hide</div>
        </div>

        <div class="item">
          <div class="item-name">
            Truthear Hola
            <div class="item-type">IEM</div>
          </div>
          <div class="item-image">
            <img src="assets/iem/hola.png" alt="" />
          </div>
          <div class="item-price">Rp. 325.000</div>
          <div onclick="hideItem(this)" class="item-buy">Hide</div>
        </div>

        <div class="item">
          <div class="item-name">
            MOONDROP Dawn PRO
            <div class="item-type">USB Dongles</div>
          </div>
          <div class="item-image">
            <img src="assets/accessories/dawn.png" alt="" />
          </div>
          <div class="item-price">Rp. 768.000</div>
          <div onclick="hideItem(this)" class="item-buy">Hide</div>
        </div>
      </div>
    </div>
  </section>

  <?php include("includes/footer.php") ?>
  <script defer async="true" src="script.js"></script>
</body>

</html>
