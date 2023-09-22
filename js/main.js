(function () {
  "use strict";

  var gift = document.getElementById("gift");
  document.addEventListener("DOMContentLoaded", function () {
    // Field data users
    var name = document.getElementById("nombre");
    var surname = document.getElementById("surname");
    var email = document.getElementById("email");

    // field pass
    var day_pass = document.getElementById("day_pass");
    var full_pass = document.getElementById("full_pass");
    var twodays_pass = document.getElementById("twodays_pass");

    //buttons & divs
    var calculate = document.getElementById("calculate");
    var errorDiv = document.getElementById("error");
    var buttonRegister = document.getElementById("button_register");
    var listProducts = document.getElementById("list_products");
    var sum = document.getElementById("total-amount");

    //extras
    var eventShirt = document.getElementById("event_shirt");
    var Amlabels = document.getElementById("labels");

    buttonRegister.disabled = true;

    if (document.getElementById("calculate")) {
      calculate.addEventListener("click", calculateAmounts);

      day_pass.addEventListener("blur", showDays);
      full_pass.addEventListener("blur", showDays);
      twodays_pass.addEventListener("blur", showDays);

      name.addEventListener("blur", validateFields);
      surname.addEventListener("blur", validateFields);
      email.addEventListener("blur", validateFields);
      email.addEventListener("blur", validateEmail);

      function validateFields() {
        if (this.value == "") {
          errorDiv.style.display = "block";
          errorDiv.innerHTML = "This field is required*";
          this.style.border = "1px solid red";
          errorDiv.style.border = "1px solid red";
        } else {
          errorDiv.style.display = "none";
          this.style.border = "1px solid green";
        }
      }

      function validateEmail() {
        if (this.value.indexOf("@") > -1) {
          errorDiv.style.display = "none";
          this.style.border = "1px solid green";
        } else {
          errorDiv.style.display = "block";
          errorDiv.innerHTML = "Please insert a valid email";
          this.style.border = "1px solid red";
          errorDiv.style.border = "1px solid red";
        }
      }

      function calculateAmounts(event) {
        event.preventDefault();
        if (gift.value === "") {
          alert("You must choose a gift");
          gift.focus();
        } else {
          var onedayTickets = parseInt(day_pass.value, 10) || 0,
            fullTickets = parseInt(full_pass.value, 10) || 0,
            twodaysTickets = parseInt(twodays_pass.value, 10) || 0,
            Amlabels = parseInt(labels.value, 10) || 0,
            eventShirt = parseInt(event_shirt.value, 10) || 0;

          var totalTopay =
            onedayTickets * 30 +
            fullTickets * 50 +
            twodaysTickets * 45 +
            eventShirt * 10 * 0.93 +
            Amlabels * 2;
          var productsList = [];

          if (onedayTickets >= 1) {
            productsList.push(onedayTickets + " Tickets for one day");
          }
          if (fullTickets >= 1) {
            productsList.push(fullTickets + " Tickets for 4 days");
          }
          if (twodaysTickets >= 1) {
            productsList.push(twodaysTickets + " Tickets for 2 days");
          }
          if (Amlabels >= 1) {
            productsList.push(Amlabels + " Labels ");
          }
          if (eventShirt >= 1) {
            productsList.push(eventShirt + " Shirts ");
          }
          listProducts.style.display = "block";

          listProducts.innerHTML = "";

          for (var i = 0; i < productsList.length; i++) {
            listProducts.innerHTML += productsList[i] + "<br/>";
          }
          sum.innerHTML = "$" + totalTopay.toFixed(2);

          buttonRegister.disabled = false;
          document.getElementById("total_order").value = totalTopay;
        }
      }

      function showDays() {
        var onedayTickets = parseInt(day_pass.value, 10) || 0,
          fullTickets = parseInt(full_pass.value, 10) || 0,
          twodaysTickets = parseInt(twodays_pass.value, 10) || 0;

        var chosenDays = [];

        if (onedayTickets > 0) {
          chosenDays.push("friday");
          console.log(chosenDays);
        }
        if (twodaysTickets > 0) {
          chosenDays.push("friday", "saturday");
          console.log(chosenDays);
        }
        if (fullTickets > 0) {
          chosenDays.push("friday", "saturday", "sunday");
          console.log(chosenDays);
        }
        for (var i = 0; i < chosenDays.length; i++) {
          document.getElementById(chosenDays[i]).style.display = "block";
        }
      }
    }
  }); //DOM CONTENT LOADED
})();

$(function () {
  //lettering
  $(".site-name").lettering();

  // ADD class to menu

  $('body.conferences .main-nav a:contains("Conferences")').addClass("active");
  $('body.guests .main-nav a:contains("Guests")').addClass("active");
  $('body.calendar .main-nav a:contains("Calendar")').addClass("active");

  // Fixed menu
  var windowHeight = $(window).height();
  var barHeight = $(".bar").innerHeight();

  $(window).scroll(function () {
    var scroll = $(window).scrollTop();
    if (scroll > windowHeight) {
      $(".bar").addClass("fixed");
      $("body").css({
        "margin-top": barHeight + "px",
      });
    } else {
      $(".bar").removeClass("fixed");
      $("body").css({
        "margin-top": "0px",
      });
    }
  });

  //Responsive menu

  $(".mobile-menu").on("click", function () {
    $(".main-nav").slideToggle();
  });

  // Schedule program
  $(".event-schedule .course-info:first").show();
  $(".schedule-menu a:first").addClass("active");
  $(".schedule-menu a").on("click", function () {
    $(".schedule-menu a").removeClass("active");
    $(this).addClass("active");
    $(".hide").hide();
    var link = $(this).attr("href");
    $(link).fadeIn(1000);

    return false;
  });

  //Timer animation
  $(".event-summary li:nth-child(1) p").animateNumber(
    {
      number: 6,
    },
    3000
  );
  $(".event-summary li:nth-child(2) p").animateNumber(
    {
      number: 15,
    },
    3000
  );
  $(".event-summary li:nth-child(3) p").animateNumber(
    {
      number: 3,
    },
    3000
  );
  $(".event-summary li:nth-child(4) p").animateNumber(
    {
      number: 9,
    },
    3000
  );

  // The final Countdown
  $(".countdown").countdown("2021/12/11 12:00:00", function (event) {
    $("#days").html(event.strftime("%D"));
    $("#hours").html(event.strftime("%H"));
    $("#minutes").html(event.strftime("%M"));
    $("#seconds").html(event.strftime("%S"));
  });

  // Colorbox
  $(".guest_info").colorbox({ inline: true, width: "50%" });
  $(".newsletter_button").colorbox({ inline: true, width: "50%" });
});
