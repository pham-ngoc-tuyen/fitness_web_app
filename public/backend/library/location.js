(function($){
    "user strict";
    var Uc = {};

    Uc.province = () =>{
       $(document).on('change','.province',
       function(){
            let _this = ($this)
            let province_id = _this.val()
            $.ajax(
                {
                    url:'ajax/location/getLocation',
                    type: 'GET',
                    dataType: 'json',
                    success: function(data){
                        $('#result').html(data);
                    },
                    error: function(jqXHR, textStatus, errorThrown){
                        console.log('Lỗi' + textStatus + ' ' + errorThrown);
                    }
                }
            )
        }
       )
    }
    $(document).ready(function(){
        Uc.province();
    })
})(jQuery);