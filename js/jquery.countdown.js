/**
 * @name		jQuery Countdown Plugin
 * @author		Martin Angelov
 * @version 	1.0
 * @url			http://tutorialzine.com/2011/12/countdown-jquery/
 * @license		MIT License
 */

(function($){
	
	// Количество секунд в каждом временном отрезке
	var days	= 24*60*60,
		hours	= 60*60,
		minutes	= 60;

	$.fn.countdown = function(prop){
		
		var options = $.extend({
			callback	    : function(){},
			timestamp	    : 0,
			secondTimestamp : 0,
            currentTimer    : 'timestamp',
			lang            : 'eng'
		},prop);
		
		var left, d, h, m, s, positions;

		// инициализируем плагин
		init(this, options);
		
		positions = this.find('.position');
		
		(function tick(){
			
			// Осталось времени
			if(Math.floor((options[options.currentTimer] - (new Date())) / 1000) < 0 && options.currentTimer == 'timestamp'){
				options.currentTimer = 'secondTimestamp';
				if(options.lang == 'eng') {
                    $('.countdown-header').html('Pre-ICO ends in')
				} else {
                    $('.countdown-header').html('Pre-ICO закончится через')
				}
			}
            left = Math.floor((options[options.currentTimer] - (new Date())) / 1000);

            if(left < 0 && options.currentTimer == 'secondTimestamp') {
                left = 0;
            }
			
			// Осталось дней
			d = Math.floor(left / days);
            switchDigit(positions.eq(0), d);
			left -= d*days;
			
			// Осталось часов
			h = Math.floor(left / hours);
            switchDigit(positions.eq(1), h);
			left -= h*hours;
			
			// Осталось минут
			m = Math.floor(left / minutes);
            switchDigit(positions.eq(2), m);
			left -= m*minutes;
			
			// Осталось секунд
			s = left;
            switchDigit(positions.eq(3), s);
			
			// Вызываем возвратную функцию пользователя
			options.callback(d, h, m, s);
			
			// Планируем следующий вызов данной функции через 1 секунду
			setTimeout(tick, 1000);
		})();
		
		return this;
	};


	function init(elem, options){
		elem.addClass('countdownHolder');

		// Создаем разметку внутри контейнера
		$.each(['Days','Hours','Minutes','Seconds'],function(i){
			$('<span class="count'+this+'">').html(
				'<span class="position">\
					<span class="digit static">0</span>\
				</span>'
			).appendTo(elem);
		});

	}

	// Создаем анимированный переход между двумя цифрами
	function switchDigit(position,number){
		
		var digit = position.find('.digit')
		
		if(digit.is(':animated')){
			return false;
		}
		
		if(position.data('digit') == number){
			// Мы уже вывели данную цифру
			return false;
		}
		
		position.data('digit', number);
		
		var replacement = $('<span>',{
			'class':'digit',
			css:{
				top:'-2.1em',
				opacity:0
			},
			html:number
		});
		
		// Класс .static добавляется, когда завершается анимация.
		// Выполнение идет более плавно.
		
		digit
			.before(replacement)
			.removeClass('static')
			.animate({top:'2.5em',opacity:0},'fast',function(){
				digit.remove();
			})

		replacement
			.delay(100)
			.animate({top:3,opacity:1},'fast',function(){
				replacement.addClass('static');
			});
	}
})(jQuery);