//user clicks to enroll
$(document).ready(function(){
	$('.to_checkout').click(function(){
		/*
		//validate values first
		var pass = true;
		var error = new Array;
		$('.validate').each(function(){
			
			//email
			if($(this).attr('name')=='email' && (/^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/.test($(this).val())) == false){
				pass = false;
				$(this).addClass('fail');
				error.push('Please Enter a Valid Email Address');
			
			
			// all others
			}else if($(this).val()==''){
				pass = false;
				$(this).addClass('fail');
				error.push($(this).attr('title') + ' is a Required Field');
			}else{
				$(this).removeClass('fail');
			}
			
			
		});


		
		//if any validated fields dont pass...
		if(pass==false){
			$('.error').css('display','block');
			return false;
		}else{
			//take away error box
			$('.error').css('display','none');
			window.location = 'https://web1.nbfsa.com/secure_enroll/checkout/index.php?a=' + $(this).attr('rel');
		}
		*/
		return false;
	});
	
	$('.learn').click(function(){
		$('html,body').animate({"scrollTop": 515},700);
		return false;
	});
	
	//when user clicks a plan
	// add savings plan on packages table
	$('.continue-text.three').click(function(){
		//add selected state
		$(this).addClass("selected");
		$('html,body').animate({"scrollTop": 590},700);
		$('input[name="fname"]').focus();
		$('span.price').html('15.00');
		$('.continue-text.one').removeClass("selected");
		$('.continue-text.two').removeClass("selected");
		$('.continue-text.free').removeClass("selected");
		
			var plan = '7';
			
			$.ajax({
				type: "POST",
				url: "ajax/set_lead.php",
				data: "name=lead_offer&value="+plan
			});
			

		return false;
	});
	
	$('.continue-text.one').click(function(){
		//add selected state
		$(this).addClass("selected");
		$('html,body').animate({"scrollTop": 590},700);
		$('input[name="fname"]').focus();
		$('span.price').html('6.00');
		$('.continue-text.two').removeClass("selected");
		$('.continue-text.three').removeClass("selected");
		$('.continue-text.free').removeClass("selected");
		
			var plan = '4';
			
			$.ajax({
				type: "POST",
				url: "ajax/set_lead.php",
				data: "name=lead_offer&value="+plan
			});
		
		return false;
	});
	$('.continue-text.two').click(function(){
		//add selected state
		$(this).addClass("selected");
		$('html,body').animate({"scrollTop": 590},700);
		$('input[name="fname"]').focus();
		$('span.price').html('12.00');
		$('.continue-text.one').removeClass("selected");
		$('.continue-text.three').removeClass("selected");
		$('.continue-text.free').removeClass("selected");
		
			var plan = '1';
			
			$.ajax({
				type: "POST",
				url: "ajax/set_lead.php",
				data: "name=lead_offer&value="+plan
			});
		
		return false;
	});
	$('.continue-text.free').click(function(){
		//add selected state
		$(this).addClass("selected");
		$('html,body').animate({"scrollTop": 590},700);
		$('input[name="fname"]').focus();
		$('span.price').html('0');
		$('.continue-text.one').removeClass("selected");
		$('.continue-text.two').removeClass("selected");
		$('.continue-text.three').removeClass("selected");
		
			var plan = '8';
			
			$.ajax({
				type: "POST",
				url: "ajax/set_lead.php",
				data: "name=lead_offer&value="+plan
			});
		
		return false;
	});
	
	$('.details-link.free').click(function(){
	
			var plan = '8';
			
			$.ajax({
				type: "POST",
				url: "ajax/set_lead.php",
				data: "name=lead_offer&value="+plan
				
			});
		
	});
	
	$('.details-link.savings').click(function(){

			var plan = '7';
			
			$.ajax({
				type: "POST",
				url: "ajax/set_lead.php",
				data: "name=lead_offer&value="+plan
			});
		
		
	});
	$('.details-link.wellness').click(function(){

			var plan = '4';
			
			$.ajax({
				type: "POST",
				url: "ajax/set_lead.php",
				data: "name=lead_offer&value="+plan
			});
		
		
	});
	$('.details-link.travel').click(function(){
		
			var plan = '1';
			
			$.ajax({
				type: "POST",
				url: "ajax/set_lead.php",
				data: "name=lead_offer&value="+plan
			});
		
		window.location = "http://usaphealthcard.com/beagle/details";
		
	});	
	
});