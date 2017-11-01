/**
 * Created by Verstka on 26.10.2017.
 */
'use strict';
Vue.component('modal', {
    template: `<transition name="modal">
   <div class="modal-mask" @click="$emit(\'close\')">
      <div class="modal-wrapper">
         <div class="modal-container">
            <div class="modal-close" @click="$emit(\'close\')">
               <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 47.971 47.971" xml:space="preserve" width="20px" height="20px">
                    <g>
                        <path d="M28.228,23.986L47.092,5.122c1.172-1.171,1.172-3.071,0-4.242c-1.172-1.172-3.07-1.172-4.242,0L23.986,19.744L5.121,0.88   c-1.172-1.172-3.07-1.172-4.242,0c-1.172,1.171-1.172,3.071,0,4.242l18.865,18.864L0.879,42.85c-1.172,1.171-1.172,3.071,0,4.242   C1.465,47.677,2.233,47.97,3,47.97s1.535-0.293,2.121-0.879l18.865-18.864L42.85,47.091c0.586,0.586,1.354,0.879,2.121,0.879   s1.535-0.293,2.121-0.879c1.172-1.171,1.172-3.071,0-4.242L28.228,23.986z"/>
                    </g>
               </svg>
            </div>
            <div class="modal-body" @click.stop>
               <slot></slot>
            </div>
         </div>
      </div>
   </div>
</transition>`
});

    if(document.getElementById('productPage')){
        window.productPage=new Vue({
            el:'#productPage',
            data:{
                tab:0,
                form: {
                    feedback: {
                        uName: '',
                        email: '',
                        comment: ''
                    }
                },
                modal:{
                    log:false,
                    sent:false
                }
            },
            methods:{
                removeError(name){
                    this.errors.remove(name);
                },
                validate(){
                    this.$validator.validateAll().then((result) => {
                        if(result){
                            var data = {
                                name: productPage.form.feedback.uName,
                                email : productPage.form.feedback.email,
                                comment: productPage.form.feedback.comment,
                            }
                            // header.loader = true;
                            console.log('sent');
                            this.modal.sent = true;
                        }
                    }).catch(() => {});
                }
            },
            mounted(){
                $('.productPage-sliders_big').slick({
                    slidesToShow:1,
                    arrows:false,
                    autoplay:true,
                    autoplaySpeed:4000,
                    rows:0,
                    dots:true,
                    asNavFor:'.productPage-sliders_nav',
                });
                $('.productPage-sliders_nav').slick({
                    slidesToShow:4,
                    focusOnSelect: true,
                    arrows:false,
                    autoplay:true,
                    autoplaySpeed:4000,
                    asNavFor:'.productPage-sliders_big',
                    rows:0,
                });

            }
        });
        $('.productPage_req').click(function(){
            if(window.innerWidth <1170){
                $('html , body').addClass('scr-no');
            }
        });
        $(document).on('click','.modal-close',function(){

                $('html , body').removeClass('scr-no');

        });
        $(window).resize(function(){
            if(window.innerWidth >1170){
                if($('html').hasClass('scr-no')){
                    $('html , body').removeClass('scr-no');
                }else{

                    if(productPage.modal.log){
                        $('html , body').addClass('scr-no');
                    }
                }
            }
        });
    }