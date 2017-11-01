'use strict';


import liveSearch from './components/liveSearch';

window.head = new Vue({
    el:".header",

    data:{
        loader:false,
        lang:false,
        openCatalog:false,
        unFixCat:true,
        width:window.innerWidth
    },
    methods:{
        openCat(){
            if(this.unFixCat){this.openCatalog = !this.openCatalog};
        }
    },
    watch:{
        openCatalog(){
            if(this.openCatalog && window.innerWidth < 1170){
                $('html , body').animate({scrollTop:0});
                $('html , body').addClass('scr-no');
                if($('.search-mob_butt>.open').css('display') === 'none'){
                    $('.search-wrapper').velocity({top:-100+'vh'});
                    $('.search-mob_butt').find('.open').css('display' , 'block');
                    $('.search-mob_butt').find('.close').css('display' , 'none ');
                }
            }else{
                $('html , body').removeClass('scr-no');
            }
        },
        width(){
            if (this.width > 1170) {
                console.log(true)
                if (document.getElementById('homePage')) {
                    this.openCatalog = true;
                    this.unFixCat = false;
                }
            }else {
                this.unFixCat = true;
                this.openCatalog = false;
            }
        }
    },
    components:{
        liveSearch
    },
    mounted(){
        $(window).on('ready resize',function () {
            window.head.width = window.innerWidth;
        });

    }
});

document.addEventListener('click',function(e){
    var el =    e.target;
   if(!($(el).closest('.search-wrapper').length)){
        head.$refs.search.searchData = '';
        head.$refs.search.searchResLen = 0;
   }

});
$(document).on('click' , '.deep:not(.inPan)>.st-lvl-el_name , .deep>.nd-lvl-el_name , .deep>.rd-lvl-el_name' , function(e){
    if(head.width < 1170){
        e.preventDefault();
        var el=e.currentTarget;
        console.log($(el));
        $(el).next('.st-lvl-block ,  .nd-lvl-block , .rd-lvl-block').css('display','block');
        $(el).next('.st-lvl-block ,  .nd-lvl-block , .rd-lvl-block').velocity({
            left:0
        });
    }
});
$(document).on('click','.close-cat' , function(){
    $('.st-lvl-el:not(.inPan)>.nd-lvl-block , .rd-lvl-block').velocity({
        left:100+'vw'
    });
    setTimeout(function(){
        head.openCatalog=false;
    },300);
});
$(document).on('click','.back' , function(e){
    var el=e.currentTarget;
    $(el).closest('.nd-lvl-block , .rd-lvl-block').velocity({
        left:100+'vw'
    });
});
$('.search-mob_butt').click(function(e){
    var time = 0;
    if(head.openCatalog){
        head.openCatalog = false
        time = 250;
    }
    if($('.site-menu-content').css('top') === 0){
        $('.site-menu-content').velocity({
            top:-100+'vh'
        });
        $('.site-menu-content').removeClass('opened');
        time = 250;
    }
    setTimeout(function(){
        if($(e.currentTarget).find('.close').css('display') === 'none'){
            $('html , body').animate({scrollTop:0});
            $('html , body').addClass('scr-no');
            if(window.innerWidth > 900 &&  window.innerWidth < 1170){
                $('.search-wrapper').velocity({top:167+'px'});
            }
            else{
                $('.search-wrapper').velocity({top:132+'px'});
            }

            $(e.currentTarget).find('.open').css('display' , 'none');
            $(e.currentTarget).find('.close').css('display' , 'block');
        }else{
            $('.search-wrapper').velocity({top:-100+'vh'});
            $(e.currentTarget).find('.open').css('display' , 'block');
            $(e.currentTarget).find('.close').css('display' , 'none ');
            $('html , body').removeClass('scr-no');
        }
    } , time)
});
$('.site-menu-mob_butt').click(function(){
    var time = 0;
    if($('.search-mob_butt>.open').css('display') === 'none'){
        $('.search-wrapper').velocity({top:-100+'vh'});
        $('.search-mob_butt').find('.open').css('display' , 'block');
        $('.search-mob_butt').find('.close').css('display' , 'none ');
        time = 250;
    }
    if(head.openCatalog){
        head.openCatalog = false;
        time = 250;
    }
    setTimeout(function(){
        if( !($('.site-menu-content').hasClass('opened'))){
            $('.site-menu-content').addClass('opened');
            $('.site-menu-content').velocity({
                top:0
            });
            $('html , body').addClass('scr-no');
        }
    } , time)
});
$('.close-menu').click(function () {
    $('.site-menu-content').velocity({
        top:-100+'vh'
    });
    $('.site-menu-content').removeClass('opened');
    $('html , body').removeClass('scr-no');
});
$('.col-title').click(function(e){
    var el=e.currentTarget;
    if(window.innerWidth < 660){
        if($(el).closest('.col').hasClass('opened')){
            $(el).closest('.col').removeClass('opened');
            $(el).closest('.col').find('ul').slideUp();
        }else{
            $('.col.opened').find('ul').slideUp();
            $('.col.opened').removeClass('opened')
            $(el).closest('.col').addClass('opened');
            $(el).closest('.col').find('ul').slideDown();
        }
    }
});