

// navbar color
  $(document).ready(function() {
    // Function to get the brightness value of a color
    function getBrightness(color) {
      // Convert the color to RGB
      var rgb = color.match(/\d+/g);
      var brightness = (parseInt(rgb[0]) * 299 + parseInt(rgb[1]) * 587 + parseInt(rgb[2]) * 114) / 1000;
      return brightness;
    }

    // Function to apply the text color based on the background color
    function applyTextColor() {
      var navbar = $(".navbar");
      var navbarItems = navbar.find(".nav-item");

      // Get the background color of the navbar
      var navbarBgColor = navbar.css("background-color");
      var navbarBgBrightness = getBrightness(navbarBgColor);

      // Set the text color based on the background brightness
      if (navbarBgBrightness > 128) {
        navbarItems.addClass("dark-text");
      } else {
        navbarItems.removeClass("dark-text");
      }
    }

    // Call the applyTextColor function on page load and whenever the navbar background color changes
    applyTextColor();
    $(window).on("resize scroll", applyTextColor);
  });
