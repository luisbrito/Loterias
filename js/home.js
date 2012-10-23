
	/* jQuery Objects */

	var createButton  = $('#create-account');
	var loginButton   = $('.button.login');
	var signUpButton  = $('.button.sign-up');
	
	var aboutButton   = $('#link-about');
	var contactButton = $('#link-contact');
	
	var navMenuItems = $('.nav-menu').find('.h-item');
	
	
	/* Event Handlers */
	
        var loginButtonEvent = (function(){
            $('#msgError').removeClass('hidden');
        })
        
	var signUpButtonEvent = (function() {
		var SPEED = 1000;
		var registerSection = $('#register');

		registerSection.fadeIn(SPEED).removeClass('hidden');

		var sectionPosition = Math.floor(registerSection.offset().top);
		$('html, body').animate({scrollTop: sectionPosition}, SPEED);
	});
	
	
	var createButtonEvent = (function() {
		var form = $('#register');
		
		var email   = form.find('#email').val();
		var reEmail = form.find('#re-email').val();

		if (email == "" || reEmail == "" || email !== reEmail) {
			createButton.removeClass('green').addClass('red').text("Invalid Email!");
		} else {
			createButton.removeClass('red').addClass('green').text("Sending...");
		}
	});
	
	
	var linkButtonEvent = (function(e) {
		e.preventDefault();

		var elem = $(this);
		var section;
		
		switch( elem.text() ) {
			case "Profile"     :section = $('#profile');break;
			case "Prizes"      :section = $('#prizes');break;
			case "Purchases"   :section = $('#purchases');break;
			case "Exchanges"   :section = $('#exchanges');break;
			case "Stats"       :section = $('#stats');break;
			
			case "About"       :section = $('#about');break;
			case "Contact Us"  :section = $('#contact');break;
		}
		
		$('.container').children().addClass('hidden');
		section.removeClass('hidden');	
	});

	
	var navMenuItemsEvent = (function() {
		var elem = $(this).prevAll().length;
		
		var classCSS = 'current-item';
		navMenuItems.removeClass(classCSS);
		navMenuItems.eq(elem).addClass(classCSS);
	});
	
	
	/* Event Assignments*/
	
        loginButton.on('click', loginButtonEvent);
	signUpButton.on('click', signUpButtonEvent);
	createButton.on('click', createButtonEvent);
	
	aboutButton.on('click', linkButtonEvent);
	contactButton.on('click', linkButtonEvent);
	navMenuItems.on('click', linkButtonEvent);
	navMenuItems.on('click', navMenuItemsEvent);
	
	
	$('#btn-login').addClass('button green sign-up right');
	