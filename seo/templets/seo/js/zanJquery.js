// JavaScript Document
(function($){

            $.fn.extend({

                addOne: function(options) {

                    options = $.extend({

                        str: "+1",

                        startSize: "14px",

                        endSize: "40px",

                        interval: 500,

                        color: "#ff5c33",

                        style: "",

                        callback: function() {}

                    }, options);

 

                    $("body").append("<span class='tips_box' style='"+ options.style +"'>"+ options.str +"</span>");

                    var box = $(".tips_box");

                    var self = $(this);

                    var top = self.offset().top;

                    var left = self.offset().left + self.width() / 2 - box.width() / 2;

                    //alert(layer.width());

                    box.css({

                        "position": "absolute",

                        "top": top,

                        "left": left,

                        "font-size": options.startSize,

                        //"font-weight": "bold",

                        "color": options.color

                    });

                    box.animate({

                        "top": top - self.height() / 2,

                        "opacity": 0,

                        "font-size": options.endSize

                    }, options.interval, function() {

                        box.remove();

                        options.callback();

                    });

                }

            });

        })(jQuery);
