    $(".floor_form").each(function() {
    	var $form = $(this);

    	$form.on("submit", function(evt) {
    		evt.preventDefault();
    		var $value = parseInt($form.find("input[type='number']").val())*99000;
    		$form.find("p").css('visibility', 'visible');
    		$form.find(".total_price").text(parsePrice($value) + " Gs");
    	});
    	$form.on("change", function(evt) {
    		evt.preventDefault();
    		var $value = parseInt($form.find("input[type='number']").val())*99000;
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