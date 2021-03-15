try {


    $(window).scroll(function () {
        let bottomOffset = 1100;
        if ($(document).scrollTop() > ($(document).height() - bottomOffset) && !$('body').hasClass('loading')) {
            if (typeof true_posts !== "undefined") {
                console.log(true_posts)
                $('body').addClass('loading')
                $.post(
                    myajax.url,
                    {
                        action: 'news_loadmore',
                        query: true_posts || "",
                        page: current_page || ""
                        //     beforeSend: function( xhr){
                        //     	$('body').addClass('loading');
                        //  },
                    },
                    function (data) {
                        if (data) {
                            // $('.menu__foods').append(data); // вставляем новые посты
                            current_page++; // увеличиваем номер страницы на единицу
                            $('.menu__loading').before(data);
                            $('body').removeClass('loading');
                            // 						current_page++;


                        } else {
                            // $('#news_loadmore').remove(); // если мы дошли до последней страницы постов, скроем кнопку
                            $('.menu__loading').remove();
                        }
                    }
                )
            }
        }
    });
    // });



} catch { }















// jQuery(function($){
// 	$(window).scroll(function(){
// 		var bottomOffset = 400; // отступ от нижней границы сайта, до которого должен доскроллить пользователь, чтобы подгрузились новые посты
// 		var data = {
// 			'action': 'loadmore',
// 			'query': true_posts,
// 			'page' : current_page
// 		};
//         // console.log($(document).scrollTop())
//         // console.log($(document).height())
// 		if( $(document).scrollTop() > ($(document).height() - bottomOffset) && !$('body').hasClass('loading')){
// 			$.ajax({
// 				url:ajaxurl,
// 				data:data,
// 				type:'POST',
// 				beforeSend: function( xhr){
// 					$('body').addClass('loading');
// 				},
// 				success:function(data){
// 					if( data ) { 
// 						$('#true_loadmore').before(data);
// 						$('body').removeClass('loading');
// 						current_page++;
// 					}
// 				}
// 			});
// 		}
// 	});
// });