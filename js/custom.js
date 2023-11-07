// SLICK
// $(".header-slider").slick();

// AOS
AOS.init();

$('.secondary-slider').slick({
    dots: false,
    infinite: false,
    speed: 300,
    slidesToShow: 1,
    arrows: true,
    slidesToScroll: 1,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 3,
          infinite: true,
          dots: true
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ]
  });


  // $('.site-video').on('click', function() {
  //   $(this).parent().find("a").trigger('click'); 
  // });


  function startCounting() {
    const counters = document.querySelectorAll('.count');
  
    counters.forEach(counter => {
      const target = parseInt(counter.getAttribute('data-count'));
      let count = 0;
      const increment = target / 100; // You can adjust the increment for faster or slower counting.
  
      const updateCounter = () => {
        count += increment;
        if (count >= target) {
          counter.textContent = target;
        } else {
          counter.textContent = Math.floor(count);
          setTimeout(updateCounter, 15); // Adjust the timeout for smoother animation.
        }
      };
  
      updateCounter();
    });
  }
  

  // Start counting when the page loads
  window.addEventListener('load', startCounting);

  
  function animateProgressBars() {
    const progressBars = document.querySelectorAll('.progress-bar');
  
    progressBars.forEach(progressBar => {
      const targetWidth = parseInt(progressBar.getAttribute('aria-valuenow'));
      let currentWidth = 0;
      const increment = targetWidth / 100; // You can adjust the increment for faster or slower animation.
  
      const updateProgressBar = () => {
        currentWidth += increment;
        progressBar.style.width = currentWidth + '%';
        progressBar.textContent = currentWidth.toFixed(0) + '%';
  
        if (currentWidth < targetWidth) {
          requestAnimationFrame(updateProgressBar);
        }
      };
  
      requestAnimationFrame(updateProgressBar);
    });
  }
  
  // Start the progress bar animation when the page loads
  window.addEventListener('load', animateProgressBars);
  