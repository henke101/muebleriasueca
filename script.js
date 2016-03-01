    $(".floor_form").each(function() {
    	var $form = $(this);

    	$form.on("submit", function(evt) {
    		evt.preventDefault();
    		$form.find("p").css('visibility', 'visible');
    	});
    	$form.on("change", function(evt) {
    		evt.preventDefault();
    		var $value = parseInt($form.find("input[type='number']").val())*$form.find("input[class='price_floor']").val();
    		$form.find(".total_price").text(parsePrice($value) + " Gs");
    	});
    });

    function parsePrice(price) {
    	var strArr = [];
    	var str = "";
    	while(price > 999){
    		priceTmp = ""+(price);
    		strArr.unshift("."+priceTmp.substring(priceTmp.length-3, priceTmp.length));
    		price = price/1000;
    	}
    	strArr.unshift(""+Math.floor(price));
    	return strArr.join("");
    }

    $(".project_foto_area").each(function(){
    	var $fotoArea = $(this);

    	$fotoArea.find(".before_button").on("click", function(evt){
    		evt.preventDefault();
    		$fotoArea.find(".before").addClass('active');
    		$fotoArea.find(".after").attr('class', 'after');
    		$fotoArea.find(".before_button").addClass('active');
    		$fotoArea.find(".after_button").attr('class', 'after_button');
    	});
    	$fotoArea.find(".after_button").on("click", function(evt){
    		evt.preventDefault();
    		$fotoArea.find(".after").addClass('active');
    		$fotoArea.find(".before").attr('class', 'before');
    		$fotoArea.find(".after_button").addClass('active');
    		$fotoArea.find(".before_button").attr('class', 'before_button');
    		
    	});
    });
    $(".carousel").each(function(){
    	var $carousel = $(this);
    	var $indicatorArray = $(this).find(".carousel_ind li");
    	var $next = $(this).find(".arrow_next");
    	var $prev = $(this).find(".arrow_prev");

    	function clickArrow (evt, dir){
    		evt.preventDefault();
    		var oldIndex = $carousel.find(".carousel_show .active").index();
    		
    		if (dir == "next"){
    			var newIndex = oldIndex+1;
    			if ( newIndex >= $carousel.find(".carousel_show li").length) {
    				newIndex = 0;
    			}	
    		}
    		if (dir == "prev"){
    			var newIndex = oldIndex-1;	
    			if ( newIndex < 0) {
    				newIndex = $carousel.find(".carousel_show li").length-1;
    			}
    		}
    		$carousel.find(".carousel_show li").removeClass('active');
    		$carousel.find(".carousel_show li:eq("+ newIndex +")").addClass('active');
    		$carousel.find(".carousel_ind li").removeClass('active');
    		$carousel.find(".carousel_ind li:eq(" + newIndex + ")").addClass('active');
    	};

    	$indicatorArray.on("click", function(evt){
    		evt.preventDefault();
    		$indicatorArray.removeClass('active');
    		$(this).addClass('active');
    		$carousel.find(".carousel_show li").removeClass('active');
    		$carousel.find(".carousel_show li:eq("+$(this).index()+")").addClass('active');
    	});
    	$next.on("click", function(evt){
    		clickArrow (evt, "next");
    	});
    	$prev.on("click", function(evt){
    		clickArrow (evt, "prev");
    	});

    });
