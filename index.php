<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
	<head>
		<!-- Google Website Optimizer Tracking Script -->
		<script type="text/javascript">
        
          var _gaq = _gaq || [];
          _gaq.push(['_setAccount', 'UA-33222137-1']);
          _gaq.push(['_trackPageview']);
        
          (function() {
            var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
          })();
        
        </script>		
        <!-- End of Google Website Optimizer Tracking Script -->
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
		<title>USAdvantagePlans | Enroll Today</title>
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="css/form.css" />
		<link rel="stylesheet" type="text/css" href="css/style.css" />
		<link rel="stylesheet" type="text/css" href="css/getit.css" />
		<link rel="stylesheet" type="text/css" href="css/collie.css" />
		<link rel="stylesheet" type="text/css" href="css/slider.css" />
		<link rel="stylesheet" type="text/css" href="css/thickbox.css" />
		<link rel="stylesheet" type="text/css" href="css/plan.css" />
		<link rel="stylesheet" href="css/jquery.tooltip.css" />
		
		<script type="text/javascript" src="/js/jquery.js"></script>
		<script src="js/lib/jquery.bgiframe.js" type="text/javascript"></script>
		<script src="js/lib/jquery.dimensions.js" type="text/javascript"></script>
		<script src="js/jquery.tooltip.min.js" type="text/javascript"></script>
  		<script type="text/javascript">
  			$(document).ready(function(){
  				$("#slider").easySlider({
  					auto: true,
  					continuous: true,
  					controlsShow: false,
  					speed: 	500,
  					pause:	6000
  				});

				//newsletter
				$('.email_list').click(function(){
					var name = 'email';
					var value = $('input[name=email]').val();
					$.ajax({
						  type: "POST",
						  url: "ajax/set_lead.php",
						  data: "name="+name+"&value="+value
						});
					$('.email_list_wrap').html('Thank You!');
				});
  				
			
  				
  				//grab lead info
  				$('form.enroll input, form.enroll select').blur(function(){
					var name = $(this).attr('name');
					var value = $(this).val();

					$.ajax({
						  type: "POST",
						  url: "ajax/set_lead.php",
						  data: "name="+name+"&value="+value
						});
					
  	  			});
			});	
  		</script>
		<script type="text/javascript">

		  var _gaq = _gaq || [];
		  _gaq.push(['_setAccount', 'UA-26416763-4']);
		  _gaq.push(['_trackPageview']);

		  (function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		  })();

		</script>


	</head>
	<body>
		<div id="main_wrap">
			<div id="main">
				<a href="/collie"><img name="USAdvantagePlans" title="USAdvantagePlans" class="logo" src="images/usap_logo.png" /></a>
				<!-- nav -->
				<ul class="nav">
				</ul>
				<div class="clear"></div>

<!-- Banner --></div>
				
				<div class="beagle-wrap">
					<div class="beagle-lead">
						<h1>The Free USAP Health Cardasdadasd</h1>
						<h2>Save Thousands On Everyday Medical Expenses. </br> Sponsored By Rascal Flatts</br><span class="white">&nbsp;&plus; $3,000 Accidental Death Benefit Free, Really Free</span></h2>
						<div class="action">
						
                            <div class="content-buttons">
                                <a href="plans" onclick="_gaq.push(['_trackEvent','Learn More', 'Button', 'Above The Fold']);" class="join-btn-text learn" >I changed this button</a>
                                <a href="plans" onclick="_gaq.push(['_trackEvent','Call To Action', 'Button', 'Above The Fold']);" class="join-btn-text">I AM A BUTTON</a>
                                    <!--
                                    <a id="getit-form 2"></a>
                                    <div class="bait 2">
                                    
                                    
                                    <h2>30 Day Risk Free Trial</h2>
                                    <form method="POST" action="beagle" class="getter">
                                        <li>
                                        <b>First Name</b>
                                        <input type="text" class="bait-fname"> 
                                        </li>
                                        
                                        <li>
                                        <b>Last Name</b>
                                        <input type="text" class="bait-fname"> 
                                        </li>
                                    
                                        <div class="continue">
                                        <a class="continue-text bait 2" rel="335d3d1cd7ef05ec77714a215134914c">Sign Up Now</a>
                                    
                                        </div>
                                    </form>	
                                    <div class="clear"></div>
                                    </div>
                                    -->
							
							
							</div> <!-- content-block end of Gogetter form -->
						
						<div class="clear"></div>
					</div>
					</div>
				</div>
				
				
				<div class="content-beagle">
                
                <div class="content-beagle-icon">
                    <img src="images/circles.png" width="300" height="161" />
                </div>
                <div class="content-beagle-right">
<<<<<<< HEAD
                    <h4>Dreamweaver: Activate</h4>
                    <p>How does it work you ask? We've worked out preferred rates with our network of providers and service providers so that you can enjoy up to 80% off on everything from prescription drugs to hearing care.</p>
=======
                    <h4>How It Works</h4>
                    <p>It's magic.</p>
>>>>>>> a524f9330bde67a74c997e329d2c2258a1efcd4c
                </div>

				<div class="content-beagle-left">
					<h4>What Is It?</h4>
					<p>Our new USAP Health Card is a completely, without a doubt, the best free health card on the market, designed to save you thousands of dollars on your medical expenses.</p>
                </div>
                 <div class="content-call-to-action">
                <a href="plans" onclick="_gaq.push(['_trackEvent','Call To Action', 'Button', 'What Is It?']);" class="join-btn-text">Get Your Free USAP Health Card &rarr;</a>
                

              </div>
 <div class="line"></div>
				<div class="clear"></div>
				<h3>$3000 Accidental Death and Dismemberment </h3>
				<p class="content-paragraph content-left">As if our USAP Health Card wasn't already a good deal we'll also include $3000 of Accidental Death and Dismemberment Insurance (AD&D) at no cost to you. This AD&D coverage pays your loved ones up to $3000 in the event of your death or dismemberment.
</p><p class="content-right"><img src="images/coverage-chart.png" width="332" height="200" />
</p><p class="content-paragraph content-left">Even better, you can upgrade your free plan for little more than the cost of a trip to your local coffeeshop.</p>

<div class="clear"></div>
<h3>Your Free USAP Healthcard Lets You Save On</h3>

                <ul class="threecolumn">
                	<li>
                    <div class="threecolumn-icon"><img src="images/pill.png" width="50" height="50" /></div>
                    <h5>Prescription Drugs</h5>
                    <p>Our Health Card comes with our prescription drug benefit that can save you up to 80% on your medications.</p>
                    </li>
                   	<li>
                    <div class="threecolumn-icon"><img src="images/headphones.png" width="45" height="45" /></div>
                    <h5>Hearing Care</h5>
                    <p>Our Hearing Care benefit comes with free hearing exams, 35% off hearing aids and patient financing options.</p>
                    </li>
                	<li class="last">
                    <div class="threecolumn-icon"><img src="images/plants.png" width="50" height="50" /></div>
                    <h5>Vitamins & Supplements</h5>
                    <p>Your USAP Health Card allows you to save up to 80% off vitamins and supplements.</p>
					</li>
                </ul>
<div class="clear"></div>
                <ul class="threecolumn">
                	<li>
                    <div class="threecolumn-icon"><img src="images/heart.png" width="50" height="50" /></div>
                    <h5>MRI and CT Scans</h5>
                    <p>The Free USAP Health Card can save you up to 60% off MRI and CT scans.</p>
                    </li>
                   	<li>
                    <div class="threecolumn-icon"><img src="images/lab.png" width="45" height="45" /></div>
                    <h5>Labs</h5>
                    <p>Our Labs benefit gives you up to 50% off lab related medical expenses.</p>
                    </li>
                	<li class="last">
                    <div class="threecolumn-icon"><img src="images/diabetic.png" width="50" height="50" /></div>
                    <h5>Diabetic Supplies</h5>
                    <p>The Free USAP Health Card also includes savings of up to 60% off diabetic testing supplies.</p>
					</li>
                </ul>
                 <div class="content-call-to-action">

                <a href="plans" onclick="_gaq.push(['_trackEvent','Call To Action', 'Button', 'Save On Everything']);" class="join-btn-text">Get Your Free USAP Health Card &rarr;</a>
                
              </div>



<div class="line"></div>
<div class="clear"></div>
				<h3>The Proof is in the Pudding</h3>
                <p class="copy-text">Our members love to use their USAP Health Card because they get real savings on the medical purchases they make each month.</p>
                
                <p class="copy-text">
                Members that use our Health Card save almost <b>$93</b> each month on on their medical expenses for a yearly savings of <b>$1100.00.</b> It may sound too good to be true but it isn't -- our savings are real. Also, did we mention that it's free? </p>
                
                 </p>
                <ul class="threecolumn-alt">
                	<li><img src="images/savingsfact1-new.png" width="300" height="150" /></li>
                   	<li><img src="images/savingsfact2-new.png" width="300" height="150" /></li>
                	<li class="last"><img src="images/savingsfacts3.png" width="300" height="150" /></li>

                </ul>
	
               <div class="content-call-to-action">
                <a href="plans" onclick="_gaq.push(['_trackEvent','Call To Action', 'Button', 'Proof Is In The Pudding']);" class="join-btn-text">Get Your Free USAP Health Card &rarr;</a>
                
             

                <div class="line"></div>
				<div class="clear"></div>
                <h1 class="final">Get Your Free <br />USAP Health Card Now</h1>
                <h2 style="text-align: center">Get Your Free USAP Health Card Now</h2>
                <p class="centered">
                Whether you want to save on prescription medication or diabetic testing supplies our 100% Free USAP Health Card is <b>the best way save</b> on all your medical expenses.          
                </p>
                <a href="plans" onclick="_gaq.push(['_trackEvent','Call To Action', 'Button', 'Save On Everything']);" class="crunchy-button">Sign Up For Your Free USAP Health Card Now</a>
 </div>

									<div class="clear"></div>
</div>
		
		<!-- footer -->
					<div id="footer">
						<div class="footer-content">
						<div class="right">
							<a target="_blank" href="http://usadvantageplans.com/pdf/aaa_terms_and_conditions.pdf">Terms of Service</a> | <a target="_blank" href="http://usadvantageplans.com/pdf/Privacy_Policy_12_8_10.pdf">Privacy</a>
						</div>
						<p>This is not insurance nor is it intended to replace insurance. This discount card program contains a 30 day cancellation period. This plan provides discounts at certain healthcare providers for medical services. This plan does not make payments directly to the providers of medical services. The plan member is obligated to pay for all healthcare services but will receive a discount from those healthcare providers who have contracted with the discount plan organization. For a full list of disclosures please Click Here. Discount Medical Plan Organization: New Benefits, Ltd., Attn: Compliance Department, PO Box 671309, Dallas, TX 75367-1309. Not available in FL, KS, UT, VT and WA</p>
						<div class="clear"></div>
						</div>
					</div>
	
	</body>
</html>

