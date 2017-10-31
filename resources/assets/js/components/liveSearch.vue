<template>
    <div class="search-wrapper">

        <form action="" class="search">
            <input type="text" v-model="searchData" autocomplete="off" v-on:keyup.esc="searchData = ''" v-on:keyup="searchResult"  id="input-search" :placeholder=this.placeholder class="search-input">
            <button class="search-butt">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 451 451" width="18" height="18" xml:space="preserve">
                                        <g>
                                            <path d="M447.05,428l-109.6-109.6c29.4-33.8,47.2-77.9,47.2-126.1C384.65,86.2,298.35,0,192.35,0C86.25,0,0.05,86.3,0.05,192.3   s86.3,192.3,192.3,192.3c48.2,0,92.3-17.8,126.1-47.2L428.05,447c2.6,2.6,6.1,4,9.5,4s6.9-1.3,9.5-4   C452.25,441.8,452.25,433.2,447.05,428z M26.95,192.3c0-91.2,74.2-165.3,165.3-165.3c91.2,0,165.3,74.2,165.3,165.3   s-74.1,165.4-165.3,165.4C101.15,357.7,26.95,283.5,26.95,192.3z"/>
                                        </g>
                </svg>
            </button>
            <transition name="fadeUp">
                <div class="response" v-if="searchData > 2">
                    <div v-if="searchRes.length >0">
                        <div class="res-wrap"   v-bar >
                            <ul class="results"   v-if="searchData.length > 0">
                                <li class="result"  v-if=" searchRes !== '' && searchData.length > 0" v-for="item in searchRes">
                                    <a href="#" class="img" :style="{backgroundImage: 'url('+item.img+')'}"></a>
                                    <div class="info">
                                        <a href="#"  class="title" v-text="item.name"></a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <button  class="more-results" v-text="moreres +'('+23+')'" v-if="searchResLen > 15"></button>
                    <div class="no-results" v-text="nores" v-if="searchRes.length == 0"></div>
                </div>
            </transition>

        </form>
    </div>
</template>
<script>
    import Vuebar from 'vuebar';
    Vue.use(Vuebar);
    export default {
        data() {
            return{
                searchData:'',
                searchRes:'',
                searchResLen:0

            }
        },
        methods:{
            searchResult(e){
                if(this.searchData.length > 2){
                    this.ajaxSearch();
                }
            },
            ajaxSearch(){
                this.searchRes=[];
                var data = [];
                //test
                if (this.searchData.length < 29){
                    var max= 29 - this.searchData.length;
                }else{
                    var max = 1;
                }
                var objNum= Math.round(Math.random() * (max - 0) + 0 );
                for(var i = 0 ; i < objNum; i++){
                    var obj = {};
                    obj.name='test '+i;
                    obj.id=objNum+i;
                    obj.img='https://www.gajsupply.com/image/cache/data/Packing-Box-500x500.png';
                    data.push(obj);
                }
                if(data.length >= 15){
                    for(var i = 0; i< 15;i++){
                        this.searchRes.push(data[i]);
                    }
                }
                else{
                    this.searchRes = data;
                }
                this.searchResLen = data.length;
            }
        },
        props:['placeholder','num','hs','min','moreres','nores'],
    }
</script>
<style scoped lang="less">
    .screen(@min, @max, @ruleset) {
        @media (min-width: @min) and (max-width: (@max - 1)) {
            @ruleset();
        }
    }

    .search{
        display: flex;
        align-items:center;
        justify-content: space-between;
        .screen(2px , 1170px , {
            box-sizing: border-box;
            padding: 0  0 0 15px;
            border-bottom: 1px solid #eee;
        });
        &-input{
            height: 48px;
            border:none;
            width: ~'calc(100% - 100px)';
            font-weight: 500;
            font-size: 15px;
            &::-webkit-input-placeholder { /* Chrome/Opera/Safari */
                color: #c1c1c1;
            }
            &::-moz-placeholder { /* Firefox 19+ */
                color: #c1c1c1;
            }
            &:-ms-input-placeholder { /* IE 10+ */
                color: #c1c1c1;
            }
            &:-moz-placeholder { /* Firefox 18- */
                color: #c1c1c1;
            }
        }
        &-butt{
            width:75px;
            height: 50px;
            background-color: #fed700;
            border-radius: 0 50px 50px 0;
            margin:0 -3px 0 0;
            display: flex;
            justify-content: center;
            align-items: center;
            border:none;
            .screen(2px , 1170px , {
                border-radius: 0;
            })
        }
        &-wrapper{
            .screen(2px , 1170px , {
                padding-left: 0;
                width:100%;
                border-radius: 0;
                position: fixed;
                top:-100vh;
                z-index: 3;
                left: 0;
                background: #fff;
                align-items: flex-start;
                border:none;
                border-top:1px solid #eee;
            });
            .screen(900px , 1170px , { height: ~'calc(100vh - 165px)'; });
            .screen(2px , 900px , { height: ~'calc(100vh - 130px)'; });
            width: 820px;
            height: 50px;
            border: 2px solid #fed700;
            border-radius: 50px;
            padding-left: 30px;
            position: relative;
            z-index: 1;
            .response{
                text-align: center;
                position: absolute;
                top:61px;
                background-color: #fff;
                box-shadow: 0 0 10px rgba(0,0,0,0.2);
                width:~'calc(100% - 97px)' ;
                .screen(2px , 1170px , {
                    box-shadow: none;
                    top:51px;
                    width:~'calc(100% - 30px)';
                    left:15px;
                });
                left:25px;
                .res-wrap{
                    height: 600px;
                    .screen(900px , 1170px , {
                        height: ~'calc(100vh - 225px)';
                    });
                    .screen(2px , 900px  , {
                        height: ~'calc(100vh - 180px)';
                    });
                    .results{
                        box-sizing: border-box;
                        text-align: left;
                        display: block;
                        padding: 0 30px;
                        .screen(2px,  1170px  , {
                            padding: 0;
                        });
                        .result{
                            display: flex;
                            flex-direction: row;
                            padding:20px 0;
                            border-bottom: 1px solid #ddd;
                            .screen(2px , 1170px , {padding: 0});
                            .img{
                                width: 80px;
                                height: 80px;
                                margin-right: 20px;
                            }
                            .info{
                                display: flex;
                                flex-direction: column;
                                justify-content: center;
                                .screen(2px,  1170px , {
                                    width:~'calc(100% - 100px)';

                                });
                                .title{
                                    .screen(2px,  1170px , {
                                        width:100%;
                                    });
                                    width: 500px;
                                    font-weight: 700;
                                    color:#0062BD;
                                    text-transform: uppercase;
                                    font-size: 15px;
                                }
                            }
                        }
                    }
                }

                .more-results{
                    margin:20px auto;
                    border:2px solid #fed700;
                    border-radius: 30px;
                    padding: 20px;
                    text-align: center;
                    background-color: #fff;
                    color:#333e48;
                    font-size: 14px;
                }
                .no-results{
                    padding:10px 20px;
                    text-align: center;
                    color: #333e48;
                    background-color: #eee;
                }
            }
        }

    }
    .fadeUp-enter-active, .fadeUp-leave-active {
        transition: all .3s
    }
    .fadeUp-enter, .fadeUp-leave-to /* .fadeUp-leave-active для <2.1.8 */ {
        opacity: 0;
        transform:translateY(20px);
    }
</style>