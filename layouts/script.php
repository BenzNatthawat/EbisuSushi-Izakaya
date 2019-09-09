<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery-2.1.4.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
<!-- Rev slider js -->
<script src="vendors/revolution/js/jquery.themepunch.tools.min.js"></script>
<script src="vendors/revolution/js/jquery.themepunch.revolution.min.js"></script>
<script src="vendors/revolution/js/extensions/revolution.extension.video.min.js"></script>
<script src="vendors/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="vendors/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="vendors/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<!-- Extra plugin js -->
<script src="vendors/bootstrap-selector/bootstrap-select.js"></script>
<script src="vendors/bootatrap-date-time/bootstrap-datetimepicker.min.js"></script>
<script src="vendors/owl-carousel/owl.carousel.min.js"></script>
<script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
<script src="vendors/isotope/isotope.pkgd.min.js"></script>
<script src="vendors/countdown/jquery.countdown.js"></script>
<script src="vendors/js-calender/zabuto_calendar.min.js"></script>
<!--gmaps Js-->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
<script src="js/gmaps.min.js"></script>

<script src="js/video_player.js"></script>
<script src="js/theme.js"></script>
<script>
  let pathname = $(location)[0].pathname.split("/")
  let menu_name = pathname[pathname.length - 1].split(".")[0] || 'index'
  $(`#menu_${menu_name}`).addClass('active')

  $.getJSON(`json/menu.json`, function(data) {
    let random = Math.floor(Math.random() * data.Sheet1.length - 10)
    let img = data.Sheet1.splice(random, 9)
    img.forEach(({
        img_name,
        name,
        price,
        type
      }) =>
      $('ul#list_footer').append(`<li><img src="img/menu/${img_name}" alt="${name}"></li>`)
    )
  });
</script>