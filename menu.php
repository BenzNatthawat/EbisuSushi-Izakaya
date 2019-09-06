<!DOCTYPE html>
<html lang="en">

<head>
  <?php include dirname(__FILE__) . '/layouts/meta.php' ?>
</head>

<body>

  <div id="preloader">
    <div class="loader absolute-center">
      <div class="loader__box"><b class="top"></b></div>
      <div class="loader__box"><b class="top"></b></div>
      <div class="loader__box"><b class="top"></b></div>
    </div>
  </div>

  <!--================ Frist hader Area =================-->
  <?php include dirname(__FILE__) . '/layouts/header.php' ?>
  <!--================End Footer Area =================-->

  <!--================End Footer Area =================-->
  <?php include dirname(__FILE__) . '/layouts/menu.php' ?>
  <!--================End Footer Area =================-->

  <!--================Banner Area =================-->
  <section class="banner_area">
    <div class="container">
      <div class="banner_content">
        <h4>ALL MENU</h4>
      </div>
    </div>
  </section>
  <!--================End Banner Area =================-->

  <!--================End Our feature Area =================-->
  <section class="most_popular_item_area menu_list_page">
    <div class="container">
      <div class="popular_filter">
        <ul>
          <li class="active" data-filter="*"><a href="">All</a></li>
          <li data-filter=".sashimi"><a href="">Sasimi</a></li>
          <li data-filter=".sushi"><a href="">Sushi</a></li>
          <li data-filter=".rice"><a href="">Rice</a></li>
          <li data-filter=".noodle"><a href="">Noodle</a></li>
          <li data-filter=".salad_steak"><a href="">Salad & Steak</a></li>
          <li data-filter=".snack"><a href="">Snack</a></li>
        </ul>
      </div>
      <div class="p_recype_item_main">
        <div id="imgs_list" class="row p_recype_item_active">
        </div>
      </div>
    </div>
  </section>
  <!--================End Our feature Area =================-->

  <!--================End Recent Blog Area =================-->
  <?php include dirname(__FILE__) . '/layouts/footer.php' ?>
  <?php include dirname(__FILE__) . '/layouts/script.php' ?>
  <!--================End Recent Blog Area =================-->
  <script>
    $.getJSON(`/EbisuSushi-Izakaya/json/menu.json`, function(data) {
      data.Sheet1.forEach(({img_name, name, price, type}) =>
        $('#imgs_list').append(`
          <div class="col-md-4 col-sm-6 ${type}">
            <div class="feature_item">
              <div class="feature_item_inner">
                <img src="img/menu/${img_name}" alt="${name}">
              </div>
              <div class="title_text">
                <div class="feature_left"><a href="#"><span>${name}</span></a></div>
                <div class="restaurant_feature_dots"></div>
                <div class="feature_right">${price}</div>
              </div>
            </div>
          </div>
      `)
      )
    });
  </script>
</body>


</html>