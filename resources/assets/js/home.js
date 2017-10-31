'use strict';

if(document.getElementById('homePage')){
    window.home = new Vue({
        el:'#homePage',
        data:{

        },
        mounted(){
            $('.homePage-slider').slick({
                arrows:false,
                dots:true,
                autoplay:true,
                autoplaySpeed:5000,
                responsive:[
                    {
                        breakpoint:1170,
                        settings:{

                        }
                    }
                ]
            });
            $('.homePage-newProds-slider').slick({
                arrows:false,
                dots:true,
                slidesToShow:4,
                rows: 0,
                autoplay:true,
                autoplaySpeed:3000,
                responsive:[
                    {
                        breakpoint:1170,
                        settings:{
                            slidesToShow:3
                        }
                    },
                    {
                        breakpoint:750,
                        settings:{
                            slidesToShow:2
                        }
                    },
                    {
                        breakpoint:550,
                        settings:{
                            slidesToShow:1
                        }
                    }

                ]

            });
            $('.clients-slider').slick({
                arrows:true,
                dots:false,
                rows:0,
                autoplay:true,
                autoplaySpeed:5000,
                prevArrow:'<div class="slick-arrow slickPrev"> </div>',
                nextArrow:'<div class="slick-arrow slickNext"> </div>'
            });
            $('.homePage-news-slider').slick({
                slidesToShow:3,
                dots:true,
                arrows:false,
                autoplay:true,
                autoplaySpeed:5000,
                responsive:[
                    {
                        breakpoint:1170,
                        settings:{
                            slidesToShow:3
                        }
                    },
                    {
                        breakpoint:750,
                        settings:{
                            slidesToShow:2
                        }
                    },
                    {
                        breakpoint:550,
                        settings:{
                            slidesToShow:1
                        }
                    }
                    ]
            })
            if(window.innerWidth > 1170){
                head.openCatalog = true;
                head.unFixCat=false;
            }
        }
    });
};
