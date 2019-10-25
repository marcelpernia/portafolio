<script>
  if (readCookie("StatusMenu") == "small") {
      $('.menu').addClass('min');
      $('.toggle-min #min-menu').addClass('active').siblings().removeClass('active');
  } else {
      $('.menu').removeClass('min');
      $('.toggle-min #list-menu').addClass('active').siblings().removeClass('active');
  }
</script>