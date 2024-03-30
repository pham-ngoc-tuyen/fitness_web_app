(function($){
    "user strict";
    var Uc = {};
    var document = $(document)

    Uc.switchery = () =>{
        $('.js-switch').each(function(){
            var switchery = new Switchery(this, { color: '#1AB394' });
        })
    }

    document.ready(function(){
        Uc.switchery();
    })
})(jQuery);