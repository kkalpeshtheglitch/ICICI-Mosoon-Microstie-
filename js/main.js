if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
	isMobile = true;
}else{
	isMobile = false;
}

$(document).ready(function(){

	var prod_details_img = ["img/mob-info-img.jpg", "img/prodcuts/pockets.png", "img/prodcuts/online-banking.png", "", "", "", "img/prodcuts/EFT.png","img/prodcuts/easy-pay.png","img/prodcuts/tab-banking.png"];
	var prod_details_title = ["Take your bank everywhere, it’s on the go!", "Ditch your wallet!", "Bank at home!", "", "", "","Effortless cheque transactions? Check!", "Opening a bank account is hassle-free!",];
	var prod_details_cont = ["What’s more convenient than a comprehensive Mobile Banking Application during the monsoon season? You can check balances and transactions, transfer funds, pay bills, recharge, book movie tickets and do a whole lot more on the go. It’s safe, it’s quick and it’s stylish! It’s a bank at the tip of your fingers minus the hassle of queues in these rains. Transacting with iMobile is completely safe and secure and employs advanced encryption technologies along with a number of security measures. <ul><h6>Features:</h6><li><b>Accounts and Deposits:</b>  Access all your ICICI Bank accounts from your mobile phone</li> <li><b>Transfer funds:</b> Transfer funds to anyone, anywhere and anytime</li> <li><b>Bill Payment:</b> Pay your bills instantly with iMobile</li>  <li><b>Recharge:</b> Recharge your phone or your DTH</li> <li><b>Book Tickets:</b> Now book movie tickets directly from iMobile</li>  <li><b>Save as Favourite:</b> Save your transaction as favourite for faster payments later</li> <a href='http://www.icicibank.com/mobile-banking/imobile.page' target='_blank'>Read More</a> <a href='https://play.google.com/store/apps/details?id=com.csam.icici.bank.imobile' target='_blank'>Download</a> </ul>","Pockets is a VISA-powered mobile wallet that you can use to recharge, send money, shop anywhere , pay bills and do much more while you are on the go. What’s more? Get exclusive deals from brands you love.You can create your very own Pockets wallet even if you’re not a customer of our Bank. <ul><h6>Features:</h6><li><b>Pay Anyone:</b>  Transfer money to anyone easily</li> <li><b>Recharge and Pay Bills:</b> Recharge your phone and pay your bills instantly</li> <li><b>Shop Anywhere:</b> Shop online on any website or get a Pockets physical card to shop at stores </li>  <li><b>Touch and Pay:</b> Go cashless with the touch and pay mobile payment solution</li> <li><b>Split Bills:</b> : Create and split bills among your friends and settle them instantly, all within the app.</li><a href='http://www.icicibank.com/Personal-Banking/insta-banking/internet-banking/pockets/index.html' target='_blank'>Read More</a> <a href='https://play.google.com/store/apps/details?id=com.icicibank.pockets' target='_blank'>Download</a> </ul>", "The rains call for comfort and convenience especially when it comes to banking. With ICICI Bank you enjoy Internet Banking from the comfort of your home or office. Avoid the queue or delays and try our simple and secure Internet Banking for an unmatched online banking experience. Transactions done using Internet Banking are completely safe and secure. We employ industry-accepted security practices along with multi-level authentication system to authenticate your identity. <ul><h6>Features:</h6><li><b>Check account statement:</b>  View your account statement</li> <li><b>Transfer funds:</b> A secure and convenient way to send money to any bank account</li> <li><b>Pay bills:</b> Pay your bills without worrying about the due date through our auto-debit features </li>  <li><b>Recharge:</b> Recharge your prepaid phone or your DTH </li> <li><b>Shop Online:</b> Shop online conveniently from anywhere and pay using Internet Banking</li> <li><b>Open a fixed deposit:</b> Start saving by opening a fixed deposit account online</li> <a href='http://www.icicibank.com/Personal-Banking/insta-banking/internet-banking/index.page' target='_blank'>Read More</a> </ul>", "", "", "","No ruined cheques to worry about anymore! With <em>eft</em>Cheques you can write your cheques on your phone and experience the quick, convenient and secure way to transfer funds to anyone. Time to forget your paper cheque books! <ul><h6>Features:</h6><li><b>Write:</b>  Easy, quick, convenient and secure transfer of funds while maintaining the cheque writing experience.</li> <li><b>Round the clock:</b> Transfer 24 x 7 and even on holidays instantly to any mobile number of your choice</li><li><b>Convenient:</b> No need of beneficiary account details. Instant credit to beneficiary.  </li>  <a href='http://www.icicibank.com/mobile-banking/eftCheques-app.page' target='_blank'>Read More</a> </ul>","Opening a Bank account in this weather may not sound very interesting. But when you can do that from the comfort of your home or office, nothing like it! With Tab Banking, avoid the hassle of arranging paper work like physical photograph and photocopies of KYC documents. Our Tab Banking officer will come to a place of your convenience, click your photograph and scan the necessary documents required to open an ICICI Bank account with the help of a tablet. What's more? Your account will be activated within a day. <ul><h6>Features:</h6><li><b>Open an account:</b>  Open your Bank account at the comfort of your home</li> <li><b>Submit KYC documents:</b> Our sales officer will collect your KYC documents from the location of your choice.</li> <li><b>Account activation:</b> Your account will get activated within a day </li>  <li><b>Choice of Products:</b> You can run through all ICICI Bank offerings and choose a product that’s right for you </li>  <a href='http://www.icicibank.com/campaigns/tab-banking/index.html' target='_blank'>Read More</a> </ul>"];

	if(isMobile){
		$('.product-div').click(function(){
			var this_prod = $(this).index();
			var src = prod_details_img[this_prod];
			var title = prod_details_title[this_prod];
			var cont = prod_details_cont[this_prod];
			$('.product-div').find('.icon').removeClass('prod-active');
			$('.product-div').find('.overlay').css('display','block');

			// $('.product-div').find('.overlay').css('background','rgba(0,0,0,.5)');
			$(this).find('.icon').addClass('prod-active');
			$(this).find('.overlay').css('display','none');
			// $(this).find('.overlay').css('background','none');

			$(this).find('.mobView').html('<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><div class="content" id="examples"><div id="content-1" class="content mCustomScrollbar" style="height:240px"><h3 class="prod-title">'+title+'</h3><p class="prod-cont">'+cont+'</p></div></div></div>');

			$(".content").mCustomScrollbar();
			
			if(!$(this).find('.prod-info').is(':visible')){
				$('.product-div .prod-info').hide();	
			}
			$(this).find('.prod-info').slideToggle(400,function(){
				if(!$('.product-div .prod-info').is(':visible')){
					$('.product-div').find('.icon').removeClass('prod-active');
					$('.product-div').find('.overlay').css('display','none');
				}else{
					
				}	
			});
			
			// $('.product-section').css('background-size','cover');

		});
	}else{
		$('.product-div').click(function(){
			var this_prod = $(this).index();
			console.log(this_prod);
			$('.product-div').find('.icon').removeClass('prod-active');
			$('.product-div').find('.overlay').css('display','block');

			// $('.product-div').find('.overlay').css('background','rgba(0,0,0,.5)');
			$(this).find('.icon').addClass('prod-active');
			$(this).find('.overlay').css('display','none');
			// $(this).find('.overlay').css('background','none');

			if(this_prod < 3){	
				$('.prod-info').hide();
				$('.prod-img').attr('src', prod_details_img[this_prod]);
				$('.prod-title').html(prod_details_title[this_prod]);
				$('.prod-cont').html(prod_details_cont[this_prod]);
				$('.prod-info2').hide();
				$('.prod-info').not('.prod-info2').fadeIn();
			}else{
				$('.prod-img').attr('src', prod_details_img[this_prod]);
				$('.prod-title').html(prod_details_title[this_prod]);
				$('.prod-cont').html(prod_details_cont[this_prod]);
				$('.prod-info').hide();
				$('.prod-info2').fadeIn();
			}
			
			// $('.product-section').css('height','auto');
			// $('.product-section').css('background-size','inherit');
		});
	}

	$('.prod-info-close').click(function(){
		$('.prod-info,.prod-info2').fadeOut();	
		$('.product-div').find('.icon').removeClass('prod-active');
		$('.product-div').find('.overlay').css('display','none');
	});






});


