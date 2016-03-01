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