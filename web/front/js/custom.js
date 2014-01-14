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
    
    
});