
	var editButton = $('#edit-button');
	var deleteButton = $('#delete-button');
	
	var editProfileDataEvent = (function() {
		const EDITING_CLASS = 'editing';
		const HIDING_CLASS = 'hidden';
		
		var dataInfo = $('.data-info');
		var input = dataInfo.siblings('.data-input');
		
		input.each(function(i) {
			var self = $(this);
			console.log(self);
			if (self) {
				var textValue = dataInfo.eq(i).addClass(HIDING_CLASS).text();
				self.removeClass(HIDING_CLASS).val(textValue);
			}
		});

		// Edit Button
		$(this).text('Save New Data')
			.addClass(EDITING_CLASS)
			.off('click', editProfileDataEvent)
			.on('click', saveProfileDataEvent);
	});
	
	var saveProfileDataEvent = (function() {
		const EDITING_CLASS = 'editing';
		const HIDING_CLASS = 'hidden';
		
		var dataInfo = $('.data-info').removeClass(HIDING_CLASS);
		var input = dataInfo.siblings('.data-input').addClass(HIDING_CLASS);
		
		dataInfo.each(function(i) {
			var textValue = input.eq(i).val();
			$(this).text(textValue);
		});
		
		// Save Button
		$(this).text('Edit Profile Data')
			.removeClass(EDITING_CLASS)
			.off('click', saveProfileDataEvent)
			.on('click', editProfileDataEvent);
	});
	
	editButton.on('click', editProfileDataEvent);