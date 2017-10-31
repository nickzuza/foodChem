@extends('layout')
@section('meta')

@stop
@section('content')

    <div class="page contactsPage" id="contactsPage">
        <div class="container">
            <div class="breadcrumbs">
                <a href="#" class="breadcrumb">Главная</a>
                <span class="breadcrumb">Контакты</span>
            </div>
            <div class="contactsPage-title">
                Контакты
            </div>
            <div class="contactsPage-wrapper">
                <div class="contactsPage-callback">
                    <div class="contactsPage-callback-title">Форма обратной связи</div>
                    <div class="contactsPage-callback-text">Aenean massa diam, viverra vitae luctus sed, gravida eget est. Etiam nec ipsum porttitor, consequat libero eu, dignissim eros. Nulla auctor lacinia enim id mollis. Curabitur luctus interdum eleifend. </div>
                    <form action="">
                        <div class="input-wrapper">
                            <label for="">Имя<sup>*</sup></label>
                            <div class="v-input"  :class="{ error: errors.has('form_feedback_uName')}">
                                <input type="text"
                                       v-validate="'required|min:2|max:50'"
                                       name="form_feedback_uName"
                                       v-model.lazy="form.feedback.uName"
                                       data-vv-validate-on="none"
                                       v-on:focus="removeError('form_feedback_uName')"
                                >
                                <span class="error" v-if="errors.has('form_feedback_uName')">@lang('l.full_name_valid')</span>
                            </div>
                        </div>
                        <div class="input-wrapper">
                                <label for="">E-mail<sup>*</sup></label>
                                <div class="v-input"  :class="{ error: errors.has('form_feedback_email')}">
                                    <input type="text"
                                           v-validate="'required|email'"
                                           name="form_feedback_email"
                                           v-model.lazy="form.feedback.email"
                                           data-vv-validate-on="none"
                                           v-on:focus="removeError('form_feedback_email');"
                                    >
                                    <span class="error" v-if="errors.has('form_feedback_email')">@lang('l.email_valid')</span>
                                </div>

                        </div>
                        <div class="input-wrapper big">
                                    <label class="big" for="">Ваше сообщение <sup>*</sup></label>
                                    <div class="v-input"  :class="{ error: errors.has('form_feedback_comment')}">
                                    <textarea type=text"
                                              v-validate="'required|min:20|max:500'"
                                              name="form_feedback_comment"
                                              v-model.lazy="form.feedback.comment"
                                              data-vv-validate-on="none"
                                              v-on:focus="removeError('form_feedback_comment');"
                                    ></textarea>
                                        <span class="error" v-if="errors.has('form_feedback_comment')">@lang('l.comment_valid')</span>
                                    </div>

                        </div>
                        <button  class="main-butt" type="button" @click="validate" >Отправить </button>
                    </form>
                </div>
                <div class="contactsPage-ourCont">
                    <div class="map" id="map"></div>
                    <div class="contactsPage-info">
                        <div class="contactsPage-info_title">Как с нами связаться?</div>
                        <div class="contactsPage-info_contacts">
                            <div class="row">Republica Moldova, MD-2009, or. Chişinău, Str. Uzinelor 0/2</div>
                            <div class="row">Отдел продажи: (022) 00-00-00, (022) 00-00-00</div>
                            <div class="row">Email: info@foodchem.md</div>
                        </div>
                        <div class="contactsPage-info_work-hours">
                            <b class="row">Время работы</b>
                            <div class="row">Понедельник - Пятница: с 08:00 до 20:00</div>
                            <div class="row">Суббота и Воскресенье: с 12:00 до 18:00</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <script>
        function initMap() {
            var uluru = {lat: -25.363, lng: 131.044};
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 10,
                center: uluru
            });
            var marker = new google.maps.Marker({
                position: uluru,
                map: map
            });
        }
    </script>
    <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAJP5iujil2sSRcDdCc6D_AunoNUgaZBaQ&callback=initMap">
    </script>
@stop