!function(n){n(document).ready((function(){n(".nav__primary>ul>li>a").each((function(){var a=n(this),i=a.text();a.html("<div><span>"+i+"</span></div><div><span>"+i+"</span></div>")})),n(".banner-wrap .banner-btn").on("mouseover",(function(a){n(this).parent().find(".featured-thumbnail a").addClass("act")})).on("mouseout",(function(a){n(this).parent().find(".featured-thumbnail a").removeClass("act")}));var a,i=0;n("#categories-2 ul li").each((function(){i++,a=i<10?"0"+i+".":i+".",n(this).find("a").before('<div class="num">'+a+"</div>")}))}))}(jQuery);