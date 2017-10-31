import VeeValidate from 'vee-validate';
Vue.use(VeeValidate);
if(document.getElementById('contactsPage')){
    window.contactsPage = new Vue({
        el: "#contactsPage",
        data: {
            form: {
                feedback: {
                    uName: '',
                    email: '',
                    comment: ''
                }
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
                            name: contactsPage.form.feedback.uName,
                            email : contactsPage.form.feedback.email,
                            comment: contactsPage.form.feedback.comment,
                        }
                       // header.loader = true;
                        console.log('sent');
                    }
                }).catch(() => {

                });
            }
        }
    });
}