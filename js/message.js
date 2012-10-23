// JavaScript Document

elgg.system_messages = function(msgs, delay) {
	var classes = ['elgg-message'],
		messages_html = [],
		appendMessage = function(msg) {
			messages_html.push('<li class="' + classes.join(' ') + '"><p>' + msg + '</p></li>');
		},
		systemMessages = $('ul.system-messages'),
		i;

	//validate delay.  Must be a positive integer.
	delay = parseInt(delay || 6000, 10);
	if (isNaN(delay) || delay <= 0) {
		delay = 6000;
	}

	//Handle non-arrays
	if (!elgg.isArray(msgs)) {
		msgs = [msgs];
	}

	classes.push('elgg-state-success');

	msgs.forEach(appendMessage);

	$(messages_html.join('')).appendTo(systemMessages)
		.animate({opacity: '1.0'}, delay).fadeOut('slow');
};