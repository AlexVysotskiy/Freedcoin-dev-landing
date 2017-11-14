var navbarFixed = function(){
	window.onscroll = function(){
		var nav = document.querySelector('.navbar');
		var posTop = window.pageYOffset;
		if (posTop > 400) {
			nav.setAttribute('data-pos','fixed');
		}
		else{
			nav.setAttribute('data-pos','static');
		}
	}
}();
function subscribe(timeShow , timeHidden, textMess , emailAdmin,messForUser,daysEnd){
	if (Date.now() - localStorage.close < (1000*60*60*24*daysEnd) || localStorage.send == '1') {
        document.querySelector('.subscribe-sector.top').className += " send";
		document.querySelector('.subscribe-sector').parentNode.removeChild(document.querySelector('.subscribe-sector'));
        $.each(document.querySelectorAll('.subscribe-sector'), function (index, item) {
            item.setAttribute('data-sd','ok');
        });
        document.querySelector('.subscribe-sector.footer-subscribe .footer-text').className += " hidden";
		function subscribe(){
			
		}
	} else {
		window.onload = function(){
            var lang = document.getElementById('lang').getAttribute('data-lang');
			function autoHidden(sub){
				var IntervalHiddden;
				 IntervalHiddden = setTimeout(function(){
					sub.setAttribute('data-status','hidden')
				},timeHidden*1000)
				document.querySelector('.subscribe-sector').onmousemove = function(){
					clearTimeout(IntervalHiddden);
				}
				document.querySelector('.subscribe-sector').onmouseleave = function(){
					IntervalHiddden = setTimeout(function(){
						sub.setAttribute('data-status','hidden');
					},timeHidden*1000)				
				}
			}
			var sub = document.querySelector('.subscribe-sector');
			setTimeout(function(){
				sub.setAttribute('data-status','show');
				sub.querySelector('.close').onclick = function(){
					sub.setAttribute('data-status','hidden');
					localStorage.setItem('close', Date.now())
				}
				autoHidden(sub);
			},timeShow*1000);
			$.each(document.querySelectorAll('.subscribe-sector button'), function (index, item) {
                item.onclick = function(){
                    var email = $('.subscribe-sector[data-idx="'+$(item).data("idx")+'"] input[name="email"]').val();
                    textMess = textMess.replace(/#email|emailis/i, email);
                    var  xhr = new XMLHttpRequest();
                    xhr.open('POST','subscribe/subscribe.php',true);
                    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
                    xhr.send('email='+email+'&goSend=1&emailAdmins='+emailAdmin+'&textMess='+textMess+'&messForUser='+messForUser+'&emailUser='+email);
                    xhr.onreadystatechange = function() {
                        if (this.readyState != 4) {
                            return;
                        }
                        if (this.status != 200) {
                            return;
                        }
                        if (this.readyState == 4) {
                            if (this.response == '1') {
                                var type = index ? 'page' : 'popup';
                                ga('send', 'event', lang, 'mailing-send', type);
                                localStorage.setItem('send','1');
                                $.each(document.querySelectorAll('.subscribe-sector'), function (index, item) {
                                    item.setAttribute('data-sd','ok');
                                });
                                document.querySelector('.subscribe-sector.footer-subscribe .footer-text').className += " hidden";
                                setTimeout(function(){
                                    $.each(document.querySelectorAll('.subscribe-sector'), function (index, item) {
                                        item.setAttribute('data-status','hidden');
                                    });
                                },1000)
                            }
                        }
                    }
                }
            });
		}
	}
};
