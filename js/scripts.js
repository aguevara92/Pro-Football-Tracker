jQuery(document).ready(function($) {
    
    function createCookie(name,value,days) {
        if (days) {
            var date = new Date();
            date.setTime(date.getTime()+(days*24*60*60*1000));
            var expires = "; expires="+date.toGMTString();
        }
        else var expires = "";
        document.cookie = name+"="+value+expires+"; path=/";
    }

    function readCookie(name) {
        var nameEQ = name + "=";
        var ca = document.cookie.split(';');
        for(var i=0;i < ca.length;i++) {
            var c = ca[i];
            while (c.charAt(0)==' ') c = c.substring(1,c.length);
            if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
        }
        return null;
    }

    function eraseCookie(name) {
        createCookie(name,"",-1);
    }


    $('.categories_selection a').on( "click", function() {
        var className = $(this).attr('class');
        $('.all_jobs table tr:not(:first-child)').addClass('hidden');
        $('.all_jobs table tr:not(:first-child).'+className).addClass('show');
        $('.all_jobs table tr.hidden.'+className).removeClass('hidden');
        //alert(className)
        $('.view_all').addClass('visible')
    });
    $('.view_all').on( "click", function() {
        $('.all_jobs table tr').removeClass('hidden');
    });

    

    /* LOGIN */
    $("#login").click(function(){
        var url = "functions/login.php";
        var email=$("#email").val();
        var password=$("#password").val();
        var dataString="email="+email+"&password="+password+"&login=";
        if($.trim(email).length>0 & $.trim(password).length>0) {
            $.ajax({
                type: "POST",
                url: url,
                data: dataString,
                crossDomain: true,
                cache: false,
                beforeSend: function(){ $("#login").html('Wait...');},
                success: function(data){
                    data = $.trim(data);
                    switch(data) {
                        case "success":
                            localStorage.login=true;
                            localStorage.email=email;
                            window.location.href = "index.php";
                            break;
                        case "password-incorrect":
                            $("#incorrect-password").removeClass("hide");
                            break;
                        case "no-exists":
                            $("#no-account").removeClass("hide");
                            break
                        default:
                            alert(data);
                    }
                },
                afterSend: function(){ $("#login").html('Login');},
            })
        } return false;
    });


    /* ADD TO COMPARE */
    $("#addToCompare").click(function(){
        var url = "functions/addToCompare.php";
        var email = getQueryVariable("email");
        var dataString="email="+email;
        
        $.ajax({
            type: "POST",
            url: url,
            data: dataString,
            crossDomain: true,
            cache: false,
            //beforeSend: function(){ $("#login").html('Wait...');},
            success: function(data){
                data = $.trim(data);
                CompareDialog(data);
            },
            afterSend: function(){ $("#login").html('Login');},
        })
        return false;
    });


    function CompareDialog(thisText){
        $(".alert-box").html(thisText);
        $(".alert-box").removeClass("unactive").delay(3000).queue(function(){
            $(this).addClass("unactive").dequeue();
        });
    }

    /* 
    removeCompareList
    */

    function getQueryVariable(variable)
    {
       var query = window.location.search.substring(1);
       var vars = query.split("&");
       for (var i=0;i<vars.length;i++) {
               var pair = vars[i].split("=");
               if(pair[0] == variable){return pair[1];}
       }
       return(false);
    }


     /** Best Players Carrousel using Slick JS */
    if($.fn.slick !== undefined) {
        $('.carrousel > div').slick({
            dots: false,
            infinite: false,
            speed: 300,
            slidesToShow: 4,
            slidesToScroll: 4,
            prevArrow: $('#prev'),
            nextArrow: $('#next'),
            responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                slidesToShow: 1,
                slidesToScroll: 1
                }
            }]
        });
    }

    if($.fn.matchHeight !== undefined) {
        $('.players-card, .slick-slide').matchHeight();

        $('.tab-pane').matchHeight();
    }

    var cw = $('.square').width();
    $('.square').css({'height':cw+'px'});

    





    // Initialization
    //$('.datepicker-here').datepicker([options])
    // Access instance of plugin
    //$('.datepicker-here').data('datepicker')




});