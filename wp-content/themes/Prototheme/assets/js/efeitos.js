///Debounce
		debounce = function(func, wait, immediate) {
		var timeout;
		return function() {
			var context = this, args = arguments;
			var later = function() {
				timeout = null;
				if (!immediate) func.apply(context, args);
			};
			var callNow = immediate && !timeout;
			clearTimeout(timeout);
			timeout = setTimeout(later, wait);
			if (callNow) func.apply(context, args);
		};
	};


///Scrollanime
(function(){
		var $target = $('.anime, .anime2'),
		 animationClass = 'anime-start';



		function animeScroll() {
			var documentTop = $(document).scrollTop();

			$target.each(function(){
				var itemTop = $(this).offset().top;
				if(documentTop > itemTop -550) {
					$(this).addClass(animationClass);
				} else {
					$(this).removeClass(animationClass);
				}
			})
		}

	animeScroll();

	$(document).scroll(debounce(function(){
		animeScroll();
	}, 200));
})();



      var link = $(".navbar-nav li a");
      var subir = $(".btn");

      link.on("click", function() {
        var seletor = $(this).attr("href");
        var posicao = $(seletor).offset().top;
        $("html, body").animate({scrollTop: posicao-60,},1000);
      })


  $(document).ready(function() {
    $(window).scroll(function() {
      if($(document).scrollTop() > 0) {
      $('.navbar').addClass('shrink');

      }
      else {
      $('.navbar').removeClass('shrink');

      }
    });
  });
