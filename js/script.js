

// const discount_1 = 0.2, discount_2 = 0.15, discount_3 = 0.14, discount_4 = 0.13, discount_5 = 0.1, discount_6 = 0.05;



// for(var i=0; i<disc_1.length; i++)
// {
//   var disc = Number(disc_1[i].innerHTML);
//   disc *= (1 - discount_1);
//   disc_1[i].style.textDecoration = 'line-through';
//   dis_1[i].innerHTML = String(disc);
// }


// let discount = [0.2, 0.15, 0.14, 0.13, 0.1, 0.05];

// for(var i=0; i<discount.length; i++)
// {
//   var disc_1 = document.querySelectorAll(".disc-1");
//   var dis_1 = document.querySelectorAll(".dis-1");
//   for(var j=i; j<disc_1.length; j++)
//   {
//     var disc = Number(disc_1[j].innerHTML);
//     disc *= (1 - discount[i]);
//     disc_1[j].style.textDecoration = 'line-through';
//     dis_1[j].innerHTML = String(disc);
//   }
// }


document.addEventListener('DOMContentLoaded', function () {
  var showLessLinks = document.querySelectorAll('.show-less');
  showLessLinks.forEach(function (showLessLink) {
    showLessLink.addEventListener('click', function () {
      var targetId = showLessLink.parentElement.getAttribute('id');
      var targetDiv = document.getElementById(targetId);
      var correspondingShowMore = document.querySelector('[data-target = "' +targetId+ '"]');

      console.log(correspondingShowMore);
      targetDiv.style.display = 'none';
      correspondingShowMore.style.display = 'block';
      correspondingShowMore.innerHTML = 'Show more';
    });
  });

  var showMoreLessParagraphs = document.querySelectorAll('.show-more-less');

  showMoreLessParagraphs.forEach(function (p1) {
    p1.addEventListener('click', function () {
      var targetId = p1.getAttribute('data-target');
      var targetDiv = document.getElementById(targetId);
      var showless = targetDiv.querySelector('show-less');

      showMoreLessParagraphs.forEach(function (p2) {
        var otherTargetId = p2.getAttribute('data-target');
        var otherTargetDiv = document.getElementById(otherTargetId);

        if (otherTargetId !== targetId) {
          otherTargetDiv.style.display = 'none';
          p2.style.display = 'block';
          p2.innerHTML = 'Show more';
        }
      });

      if (targetDiv.style.display === 'none' || targetDiv.style.display === '') {
        targetDiv.style.display = 'block';
         p1.style.display = 'none';

      } else {
        targetDiv.style.display = 'none';
        p1.style.display = 'block';
        p1.innerHTML = 'Show more';
      }
    });
  });
});



window.onscroll = function() {navFunction()};
    let nav = document.getElementById("navScroll");

    function navFunction() {
        if (window.pageYOffset > 0) {
            nav.classList.add("sticky");
        } else {
            nav.classList.remove("sticky");
        }
}




var logo = document.querySelector('.logo-img');
var webpageName = document.querySelector('.webpage_name');

logo.addEventListener('click', goToHomePage);
webpageName.addEventListener('click', goToHomePage);

function goToHomePage(){
  window.location = '/index.html';
}



document.addEventListener("scroll", function() {
  var sitesElements = document.querySelectorAll('.scroll-effect');
  var scrollPosition = window.scrollY;
  // Adjust the threshold as needed based on your layout
  var threshold = 200;

  sitesElements.forEach(function(sitesElement) {
    var rect = sitesElement.getBoundingClientRect();

    if (rect.top < window.innerHeight - threshold && rect.bottom >= 0) {
      sitesElement.classList.add('visible');
    } else if(rect.top >= window.innerHeight - threshold && rect.bottom < 0){
      sitesElement.classList.remove('visible');
    }
  });
});





document.addEventListener("DOMContentLoaded", function () {

  var pageTitle = document.title;

  var navLinks = document.querySelectorAll("nav a");

  for (var i = 0; i < navLinks.length; i++) {

      if (navLinks[i].innerText === pageTitle) {
          navLinks[i].classList.add("active");
          if(navLinks[i].innerText === "Inside Tours" || navLinks[i].innerText === "WorldWide Tours")
          {
              var dest = document.getElementById('dest');
              dest.classList.add("active");
          }
      }
  }
});