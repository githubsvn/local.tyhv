jQuery(document).ready(function($) {
    $("#btnSendComment").bind('click', function() {
        var title = $("#title").val();
        
        if (title != '') {
            $("#notice-ajax").css('display', 'inline');
            $.ajax({
                type: "POST",
                url: $("#commentForm").attr('action'),
                data: $("#commentForm").serialize(), // serializes the form's elements.
                success: function(data){
                    if (data == '1') {
                        $("#notice-ajax").hide();
                        alert('Cảm ơn bạn đã cung cấp thông tin.');
                        $("#title").val('');
                        $("#name").val('');
                        $("#content").val('');
                    }
                }
            });
        } else {
            alert('Bạn phải nhập tiêu đề cho nhận xét.');
        }
    });
    
    $("#send-btn").bind('click', function(){
        var email = $("#email").val();
        if (email != '') {
            $("#notice-ajax").css('display', 'inline');
            $.ajax({
                type: "POST",
                url: $("#registration-product-frm").attr('action'),
                data: $("#registration-product-frm").serialize(), // serializes the form's elements.
                success: function(data){
                    if (data == '1') {
                        $("#notice-ajax").hide();
                        alert('Cảm ơn bạn đã cung cấp thông tin.');
                        $("#email").val('');
                    }
                }
            });
        } else {
            alert('Bạn phải nhập email cho nhận xét.');
        }
    });
    
    $("#feedback").bind('click', function(){
        $('html,body').scrollTop(0);
    });
    $("ul.demo1").ytplaylist({addThumbs:true, autoPlay: false, holderId: 'ytvideo', playerWidth : '208', playerHeight: '153'});
    
//    $(".playlist").click(function(){
//        var selectVideo = $(this).children("span").children().clone();
//        var html = selectVideo.html();
//        alert(html);
//        var newObj = $(html).html();
//        alert(newObj);
//        //alert(newObj.html());
//    });
    
});