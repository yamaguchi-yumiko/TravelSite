$(function() {
    $("#userIdExists").on("click", function(){
        let user_id = $("input[name='user_id']").val();
        let message_area = $("#userIdExistsMessage")
        if (!user_id) {
            return;
        }
        $.ajax({
            type: "GET",
            url: "/register/user_id_check",
            data: {user_id: user_id},
            dataType: "json"
        }).done(function(data, textStatus, jqXHR){ 
            console.log(data);
            message_area.text(data);
        }).fail(function(jqXHR, textStatus, errorThrown){
            console.log(jqXHR.status);
        });
    });

    $(".ajaxzip3").on("click", function(){
        AjaxZip3.zip2addr('postal_code1','postal_code2','prefecture_cd','city_name','town_name', 'other_address');

        //成功時に実行する処理
        AjaxZip3.onSuccess = function() {
            $('.addr3').focus();
        };
        
        //失敗時に実行する処理
        AjaxZip3.onFailure = function() {
            alert('郵便番号に該当する住所が見つかりません');
        };
        
        return false;
    });
})