$(document).ready(function(){
        setInterval(function () {
            $(".message").each(function () {
                    $(this).hide();
            })
        },5000);
})