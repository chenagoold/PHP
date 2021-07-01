$(document).ready(function(){


	/* ===Аккордеон=== */
	var openItem = false;
	if(jQuery.cookie("openItem") && jQuery.cookie("openItem") != 'false'){
		openItem = parseInt(jQuery.cookie("openItem"));
	}
	jQuery("#accordion").accordion({
		active: openItem,
		collapsible: true,
		autoHeight: false,
		header: 'h3'
	});
	jQuery("#accordion h3").click(function(){
		jQuery.cookie("openItem", jQuery("#accordion").accordion("option", "active"));
	});
	jQuery("#accordion > li").click(function(){
		jQuery.cookie("openItem", null);
		var link = jQuery(this).find('a').attr('href');
		window.location = link;
	});
	/* ===Аккордеон=== */


	// удаление
	$(".del").click(function(){
		var res = confirm("Подтвердите удаление");
		if(!res) return false;
	});
	// удаление


	// слайд информеров
	$(".toggle").click(function(){
		$(this).parent().next().slideToggle(500);

		if($(this).parent().attr("class") == "inf-down"){
			$(this).parent().removeClass("inf-down");
			$(this).parent().addClass("inf-up");
		}else{
			$(this).parent().removeClass("inf-up");
			$(this).parent().addClass("inf-down");
		}
	});
	// слайд информеров

	// поля картинок галереи
	var max = 5;
	var min = 1;
	$("#del").attr("disabled", true);
	$("#add").click(function(){
		var total = $("input[name='galleryimg[]']").length;
		if(total < max){
			$("#btnimg").append('<div><input type="file" name="galleryimg[]" /></div>');
			if(max == total + 1){
				$("#add").attr("disabled", true);
			}
			$("#del").removeAttr("disabled");
		}
	});
	$("#del").click(function(){
		var total = $("input[name='galleryimg[]']").length;
		if(total > min){
			$("#btnimg div:last-child").remove();
			if(min == total - 1){
				$("#del").attr("disabled", true);
			}
			$("#add").removeAttr("disabled");
		}
	});
	// поля картинок галереи

	// удаление картинок
	$(".delimg").on("click", function(){
		var res = confirm("Подтвердите удаление");
		if(!res) return false;

		var img = $(this).attr("alt"); // имя картинки
		var rel = $(this).attr("rel"); // 0 - базовая картинка, 1 - картинка галереи
		var goods_id = $("#goods_id").text(); // ID товара
		$.ajax({
			url: "./",
			type: "POST",
			data: {img: img, rel: rel, goods_id: goods_id},
			success: function(res){
				if(rel == 0){
					// базовая картинка
					$(".baseimg").fadeOut(500, function(){
						$(".baseimg").empty().fadeIn(500).html(res);
					});
				}else{
					// картинка галереи
					$(".slideimg").find("img[alt='" + img + "']").hide(500);
				}
			},
			error: function(){
				alert("Error");
			}
		});
	});
	// удаление картинок
      
});