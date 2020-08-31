$(function() {
	var documentWidth = $(document).width();
	$('body').on("click", '.modal', function() {
		var popupid = $(this).attr('rel');
		$('#' + popupid).fadeIn();
		$('#fade').css({'filter' : 'alpha(opacity=80)'}).fadeIn(50);

			var popuptopmargin = ($('#' + popupid).height() + 10) / 2;
			var popupleftmargin = ($('#' + popupid).width() + 10) / 2;

			if(documentWidth < 979){
				$('#' + popupid).css({
					'top' : $(document).scrollTop() + 100,
					'margin-left' : -popupleftmargin
				});
			}else{
				$('#' + popupid).css({
					'margin-top' : -popuptopmargin,
					'margin-left' : -popupleftmargin
				});
			}
	});
	$('#fade, .close-modal').on("click", function() {
		$('#fade, .modal-box').fadeOut(50);
		return false;
	});
});

$(function() {
	$('body').on('click', '.step-btn.btn-next', function() {

		var index = $('.step-item.view').data('index');
		var line = $('.progress-line').width();
		var precent = (line / 9) * index + 1;
		var step_six = index + 1;

		if(index == 1){	
			if ($('input[name="credit_amount"]:checked').val() === 'false'){
				$('.step-btn.btn-prev').hide();
				index = index - 1;
				precent = (line / 9) * index + 1;
				alert('К сожалению мы работаем с суммами от 200 тыс руб! Если вы готовы рассмотреть сумму от 200 тыс. выберите другое значение и продолжите оформление');
			}else{
				$('.step-btn.btn-prev').show();
			}
		}
		if(step_six == 10){

			$('[data-index='+index+']').removeClass('view');
			$('[data-index='+(index + 1)+']').addClass('view');

			if((index + 1) > 9){
				$(this).addClass('last-step');
				$('.step-btn.btn-prev').addClass('last-step');
			}

			if((index + 1) > 0){
				$('.step-btn.btn-prev').removeClass('start-step');
				$('.progress-line').removeClass('hide');
			}else{
				$('.progress-line').addClass('hide');
				$('.step-btn.btn-prev').addClass('start-step');
			}

			$('.progress-line-steps').css('width', precent+'px');
			$('.progress-line .progress-step span').text(index + 1);

		}else{
            if(index == 3){
            	if ($('input[name="from"]:checked').val() === '1'){
					index = index - 1;
					precent = (line / 9) * index + 1;
					alert('Извините мы работаем только по Ленинградской области!');
            	}
			}
			$('[data-index='+index+']').removeClass('view');
			$('[data-index='+(index + 1)+']').addClass('view');

			if((index + 1) > 9){
				$(this).addClass('last-step');
				$('.step-btn.btn-prev').addClass('last-step');
			}

			if((index + 1) > 0){
				$('.step-btn.btn-prev').removeClass('start-step');
			}else{
				$('.step-btn.btn-prev').addClass('start-step');
			}

			$('.progress-line-steps').css('width', precent+'px');
			$('.progress-line .progress-step span').text(index + 1);
		}

		if(step_six == 9){
		    $(this).addClass('last-step');
			$('.steps-btns').addClass('btns-left');
			/*var button = $('.btn.btn-send-call').clone();
			$('.btn.btn-send-call').fadeOut(0);
			$('.steps-btns').append(button);*/
		}

	});



	$('body').on('click', '.step-btn.btn-prev', function() {

		var index = $('.step-item.view').data('index');
		var line = $('.progress-line').width();
		var progress = $('.progress-line-steps').width();
		var precent = 0;


		$('[data-index='+index+']').removeClass('view');
		$('[data-index='+(index - 1)+']').addClass('view');

		if((index - 1) < 2){
			$(this).addClass('start-step');
		}else{
			$(this).removeClass('start-step');
			precent = progress - (line / 9) - 5;
		}

		if((index - 1) < 10){
			$('.step-btn.btn-next').removeClass('last-step');
		}else{
			$('.step-btn.btn-next').addClass('last-step');
		}

		$('.progress-line-steps').css('width', precent+'px');
		$('.progress-line .progress-step span').text(index - 1);

		if((index -1) < 9){
		    $('.step-btn.btn-next').removeClass('send-do');
		}

	});


	$('body').on('click', '.step-selection-select', function() {

		var drop = $(this).next();

		if(drop.is(':visible')){
			drop.slideUp();
		}else{
			$('.step-selection-dropdown').slideUp();
			drop.slideDown();
		}

	});

	$('body').on('click', '.step-selection label', function() {

		var selection_text = $(this).text();
		var selection_image = $(this).find('img').attr('src');

		$(this).parent().parent().parent().slideUp();
		$(this).parent().parent().parent().prev().html(
			//'<img height="20" src="'+selection_image+'"> '+
			selection_text);

	});

	$(document).mouseup(function (e){
		var dropdown = $(".step-selection-dropdown");
		if (!dropdown.is(e.target) && dropdown.has(e.target).length === 0) {
			dropdown.slideUp();
		}
	});

	$('#phone').keyup(function() {
		var phone = $(this).val();
        var valid = /^((8|\+7)[\- ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{7,10}$/.test(phone)
		if(valid){
			$('.btn.btn-send-call').attr("disabled", false);
		}else{
			$('.btn.btn-send-call').attr("disabled", true);
		}

	});

	

	$('.step-item.nine-step .btn.btn-send-call').on("click", function() {
		$('.step-item').removeClass("view");
		$('.step-item.ten-step').addClass("view");
		$('.step-btn.btn-prev').addClass("last-step");
		$('.progress-line').hide();
	});

});

