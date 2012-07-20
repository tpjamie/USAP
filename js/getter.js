$(document).ready(function(){



var method1 = 'easeOutQuad';

$('a.bait.1').click(function(){
		$('div.bait.1').hide(500);
		$('div.getit.2').hide(100);
		$('div.getit.3').hide(100);
		$('div.getit.4').hide(100);
		$('div.bait.2').show(100);
		$('div.bait.3').show(100);
		$('div.bait.4').show(100);
		$('div.getit.1').slideDown({duration: 400, easing: method1});
		$('div.getit.1 input[name="fname"]').focus();
		_gaq.push(['_trackEvent','OpenForm', 'Bait', 'Bottom']); return false;
	});





//third form	
$('div.bait.3').click(function(){
		$('div.bait.3').hide(100);
		$('div.getit.1').hide(100);
		$('div.getit.2').hide(100);
		$('div.getit.4').hide(100);
		$('div.bait.1').show(100);
		$('div.bait.2').show(100);
		$('div.bait.4').show(100);
		$('div.getit.3').slideDown({duration: 400, easing: method1});
		$('div.getit.3 input[name="fname"]').focus();
		_gaq.push(['_trackEvent','OpenForm', 'Bait', 'Bottom']); return false;
	});

$('a.bait.3').click(function(){
		$('div.bait.3').hide(500);
		$('div.getit.1').hide(100);
		$('div.getit.2').hide(100);
		$('div.getit.4').hide(100);
		$('div.bait.1').show(100);
		$('div.bait.2').show(100);
		$('div.bait.4').show(100);
		$('div.getit.3').slideDown({duration: 400, easing: method1});
		$('div.getit.3 input[name="fname"]').focus();
		_gaq.push(['_trackEvent','OpenForm', 'Bait', 'Bottom']); return false;
	});

//forth form	
$('div.bait.4').click(function(){
		$('div.bait.4').hide(100);
		$('div.getit.1').hide(100);
		$('div.getit.2').hide(100);
		$('div.getit.3').hide(100);
		$('div.bait.1').show(100);
		$('div.bait.2').show(100);
		$('div.bait.3').show(100);
		$('div.getit.4').slideDown({duration: 400, easing: method1});
		$('div.getit.4 input[name="fname"]').focus();
		_gaq.push(['_trackEvent','OpenForm', 'Bait', 'Bottom']); return false;
	});

$('a.bait.4').click(function(){
		$('div.bait.4').hide(500);
		$('div.getit.1').hide(100);
		$('div.getit.2').hide(100);
		$('div.getit.3').hide(100);
		$('div.bait.1').show(100);
		$('div.bait.2').show(100);
		$('div.bait.3').show(100);
		$('div.getit.4').slideDown({duration: 400, easing: method1});
		$('div.getit.4 input[name="fname"]').focus();
		_gaq.push(['_trackEvent','OpenForm', 'Bait', 'Bottom']); return false;
	});

	
$('a.trial').click(function (){
	$('html,body').animate({"scrollTop": 2800},500);
	$('div.bait').hide(500);
	$('div.getit').show(1000);
	//$('input[name="fname"]').focus();
	_gaq.push(['_trackEvent','OpenForm', 'Trial']); return false;
	return false;
});


$('input[type="text"]').parent('li').addClass("idleField");

	$('input[type="text"]').each(function(){
		if($(this).val() != ''){
			$(this).parent('li').addClass("entered-data");
		}
	});
			

	
    $('input[type="text"]').focus(function() {  
        $(this).parent('li').removeClass("idleField").addClass("focusField");  
        
    });

	$('.getter li b').click(function() {  
        $(this).parent('li').removeClass("idleField").addClass("focusField");  
        $(this).nextAll('input:first').focus();
    });
	
    $('input[type="text"]').blur(function() {  
        $(this).parent('li').removeClass("focusField").addClass("idleField");  
        if (this.value != ''){  
            $(this).parent('li').addClass("entered-data");  
        }  else {
        	$(this).parent('li').removeClass("entered-data");
        }
    });

	$('input[type="text"]').live('keypress', function(e) { 
	// bind keydown on all inputs					
				$(this).parent('li').addClass("entered-data");
				
				if (this.value == ''){  
					$(this).parent('li').removeClass("entered-data");  
					}
				
	});


$('a.continue-text.bait').click(function(){
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
			window.location = 'plans?a=' + $(this).attr('rel');
		}
		
	});
	
});
