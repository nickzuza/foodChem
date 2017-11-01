@extends('layout')
@section('meta')

@stop
@section('content')
    <div id="productPage" class="productPage page">
        <modal v-if="modal.log" v-on:close="modal.log = false" v-cloak class="modal-base registration mobilemenu">
            <div class="modal-title">Оставить заявку</div>
            <div class="modal-text">Aenean massa diam, viverra vitae luctus sed, gravida eget est. Etiam nec ipsum porttitor, consequat libero eu, dignissim eros. Nulla auctor lacinia enim id mollis. Curabitur luctus interdum eleifend. </div>
            <form action="" key="123">
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

                <div class="bottom-pannel">
                    <button  class="main-butt" type="button" v-on:click="validate" >Отправить </button>
                    <transition name="fadeUp">
                        <span  v-if="modal.sent" class="success"><b>Спасибо!</b> Ваше сообщение успешно отправлено.</span>
                    </transition>

                </div>
            </form>
        </modal>
        <div class="container">
            <div class="breadcrumbs">
                <a href="#" class="breadcrumb">Главная</a>
                <a href="#" class="breadcrumb">Продукты</a>
                <a href="#" class="breadcrumb">Растительные экстракты</a>
                <a href="#" class="breadcrumb">Зеленая выдержка кофейного зерна</a>
                <span class="breadcrumb">Контакты</span>
            </div>
            <div class="productPage-wrapper">
                <div class="productPage-top">
                    <div class="productPage-sliders">
                        <div class="productPage-sliders_big">
                            <div class="slide" ><div class="img" style="background-image: url(https://i.simpalsmedia.com/marketplace/products/original/ecfce126de0388ae8db56e62e9c716e0.jpg)"></div></div>
                            <div class="slide"><div class=" img" style="background-image: url(https://i.simpalsmedia.com/marketplace/products/original/ecfce126de0388ae8db56e62e9c716e0.jpg)" ></div></div>
                            <div class="slide"><div class=" img" style="background-image: url(https://i.simpalsmedia.com/marketplace/products/original/ecfce126de0388ae8db56e62e9c716e0.jpg)" ></div></div>
                            <div class="slide"><div class=" img" style="background-image: url(https://i.simpalsmedia.com/marketplace/products/original/ecfce126de0388ae8db56e62e9c716e0.jpg)" ></div></div>
                        </div>
                        <div class="productPage-sliders_nav">
                            <div class="slide" ><div class="img" style="background-image: url(https://i.simpalsmedia.com/marketplace/products/original/ecfce126de0388ae8db56e62e9c716e0.jpg)"></div></div>
                            <div class="slide"><div class=" img" style="background-image: url(https://i.simpalsmedia.com/marketplace/products/original/ecfce126de0388ae8db56e62e9c716e0.jpg)" ></div></div>
                            <div class="slide"><div class=" img" style="background-image: url(https://i.simpalsmedia.com/marketplace/products/original/ecfce126de0388ae8db56e62e9c716e0.jpg)" ></div></div>
                            <div class="slide"><div class=" img" style="background-image: url(https://i.simpalsmedia.com/marketplace/products/original/ecfce126de0388ae8db56e62e9c716e0.jpg)" ></div></div>
                        </div>
                    </div>
                    <div class="productPage-info">
                        <div class="productPage-info_categ">Растительные экстракты</div>
                        <div class="productPage-info_prodName">Зеленая выдержка кофейного зерна</div>
                        <div class="productPage-info_ids">
                            <div class="id-block">
                                <div class="id-name">E Номер:</div>
                                <div class="id-numb">E635</div>
                            </div>
                            <div class="id-block">
                                <div class="id-name">HS код:</div>
                                <div class="id-numb">2934993000</div>
                            </div>
                            <div class="id-block">
                                <div class="id-name">Мин.количество заказа:</div>
                                <div class="id-numb">500кг</div>
                            </div>
                        </div>
                        <div class="productPage-info_desc">Aliquam non tincidunt urna. Integer tincidunt nec nisl vitae ullamcorper. Proin sed ultrices erat. Praesent varius ultrices massa at faucibus.</div>
                        <div class="productPage-butts">
                            <button v-on:click="modal.log = true" class="productPage_req">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="19px" height="17px" x="0px" y="0px" viewBox="0 0 434.168 434.168"  xml:space="preserve">
                                    <g>
                                        <path d="M332.318,230.196V34.967H40.93v364.235h134.038c9.616,0,17.483,7.867,17.483,17.483s-7.867,17.483-17.483,17.483H23.446   c-9.616,0-17.483-7.867-17.483-17.483V17.483C5.963,7.867,13.831,0,23.446,0h326.354c9.616,0,17.483,7.867,17.483,17.483v212.713   c0,9.616-7.867,17.483-17.483,17.483S332.318,239.812,332.318,230.196z M422.357,272.739c-7.285-6.411-18.357-5.828-24.768,1.457   l-95.867,106.648l-48.079-46.331c-6.993-6.702-18.066-6.411-24.768,0.583s-6.411,18.066,0.583,24.768l61.191,58.86   c3.205,3.205,7.576,4.954,12.238,4.954c0.291,0,0.291,0,0.583,0c4.662-0.291,9.324-2.331,12.238-5.828l107.814-120.052   C430.224,290.222,429.641,279.15,422.357,272.739z M268.212,101.986H110.863c-9.616,0-17.483,7.867-17.483,17.483   s7.867,17.483,17.483,17.483h157.349c9.616,0,17.483-7.867,17.483-17.483S277.828,101.986,268.212,101.986z M285.696,215.627   c0-9.616-7.867-17.483-17.483-17.483H110.863c-9.616,0-17.483,7.867-17.483,17.483c0,9.616,7.867,17.483,17.483,17.483h157.349   C277.828,233.11,285.696,225.243,285.696,215.627z M110.863,291.388c-9.616,0-17.483,7.867-17.483,17.483   c0,9.616,7.867,17.483,17.483,17.483h46.622c9.616,0,17.483-7.867,17.483-17.483c0-9.616-7.867-17.483-17.483-17.483H110.863z"/>
                                    </g>
                                </svg>
                                    Остаквить заявку
                            </button>
                            <div class="socials">
                                <span>Поделиться:</span>

                                <div class="ya-share2" data-services="vkontakte,facebook,odnoklassniki,moimir" data-counter=""></div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="productPage-bottom">
                    <div class="tab-butts">
                        <button class="tab-butt" :class="{active : tab===0}" v-on:click="tab = 0">Описание </button>
                        <button class="tab-butt" :class="{active : tab===1}" v-on:click="tab = 1">Характеристики</button>
                    </div>
                    <div class="tabs-wrapper">
                        <div class="description">
                            <transition name="fade">
                                <div class="editor" v-cloak v-if="tab === 0">
                                    <div class="tab-title">
                                        Спецификации
                                    </div>
                                    <span>
                                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur? But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?
                                    </span>
                                </div>
                            </transition>
                        </div>
                        <transition name="fade">
                            <div class="caracteristics" v-cloak v-if="tab === 1">
                                <div class="tab-title">
                                    Спецификации
                                </div>
                                <ul class="categ-list">
                                    <li>
                                        <div class="key">Appearance</div>
                                        <div class="value">Yellow to Brown powder</div>
                                    </li>
                                    <li>
                                        <div class="key">Bulk density</div>
                                        <div class="value">0.35~0.55g/ml</div>
                                    </li>
                                    <li>
                                        <div class="key">Loss on drying</div>
                                        <div class="value">Yellow to Brown powder</div>
                                    </li>
                                    <li>
                                        <div class="key">Ash</div>
                                        <div class="value">=<5.0%</div>
                                    </li>
                                    <li>
                                        <div class="key">Heavy metal</div>
                                        <div class="value">=<5.0%</div>
                                    </li>
                                    <li>
                                        <div class="key">Pesticides </div>
                                        <div class="value">=<10ppm</div>
                                    </li>

                                </ul>
                            </div>
                        </transition>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="//yastatic.net/es5-shims/0.0.2/es5-shims.min.js"></script>
    <script src="//yastatic.net/share2/share.js"></script>

@stop