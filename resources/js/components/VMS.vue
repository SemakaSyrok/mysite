<template>
    <div >

        <h1>Video Managment System</h1>

        <div class="text py-3">
            <p>
                Video Management System was created for building companies to give their clients opportunity to watch building process in real time. VMS it is a website
                and mobile app witch also have a lot another functions: Our Works, Bonuses, Your Project, Prices, New etc.
            </p>
            <p>
                It is how your clients will see <strong>your</strong> app.
            </p>
        </div>

        <div class=" bg-white shadow my-2  position-relative">

            <div class="position-absolute block d-flex justify-content-center align-items-center p-1"
             id="left-arrow">
                <img src="public/images/arrow-l.png" class="img-fluid p-1" alt="" @click="previous()">
            </div>
            <div class="position-absolute block d-flex justify-content-center align-items-center p-1"
                 id="right-arrow">
                <img src="public/images/arrow-r.png" class="img-fluid p-1" alt="" @click="next()">
            </div>

            <div class="row my-3 py-4 px-5">

                <div class="col-sm-12 col-md-5 d-flex justify-content-center align-items-center">
                    <transition name="img" appear>
                        <img :src="image" alt="wms" :class="imageClass">
                    </transition>
                </div>

                <div class="col-sm-12 col-md-7">
                    <p class="p-2 mar-top">{{ text }}</p>
                </div>


            </div>

        </div>

        <div class="contact ">
            <div id="second-block" class="my-4 p-4">
                <div class="mx-auto">
                    <div class="col-4 mx-auto d-flex justify-content-center">
                        <a :href=" link " class="my-btn btn-order highlight-btn my-shadow">TRY IT</a>
                    </div>
                </div>
            </div>
        </div>



    </div>
</template>

<script>
    //ANIMATE WITH WATCH!!!!!!!!
    export default {
        name: "v-vms",
        props: ['link'],
        data() {
            return {
                contact: '',
                curSlide: 0,
                imageClass: 'imageEnter',
                slide: [
                    {text: "Login in app", img: 2},
                    {text: "Watch the process of the building", img: 3},
                    {text: "Look on which step building is", img: 5},
                    {text: "Go to chat", img: 4},
                    {text: "Write messages for you", img: 6},
                ]
            }

        },
        created() {

        },
        methods: {
            next() {
                (this.curSlide >= this.slide.length - 1) ? null : this.curSlide++;
            },
            previous() {
                (this.curSlide <= 0) ? null : this.curSlide--;
            },
            async sleep(ms) {
                return new Promise(resolve => setTimeout(resolve, ms))
            }
        },
        computed: {
            image() {
                return `public/images/wms${this.slide[this.curSlide].img}.png`;
            },
            text() {
                return this.slide[this.curSlide].text;
            }
        },
        watch: {
            curSlide: async function(newState) {
                this.imageClass = 'imageLeave';
                await this.sleep(100);
                this.imageClass = 'imageEnter';
            }
        }
    }
</script>

<style scoped>
    .block{
        height: 100%;
        width: 48px;
        transition: .4s;
        background: rgba(135, 134, 133, 0.15);
    }
    .block:hover{
        transition: .4s;
        background: rgba(135, 134, 133, 0.30);
    }
    .block:hover > img{
        opacity: .8;
        transition: .4s;
    }
    .block > img {
        opacity: .7;
        cursor: pointer;
        transition: .4s;

    }
    #left-arrow{
        left: 0;
    }
    #right-arrow{
        right: 0;
    }
    .highlight-btn{
        text-align: center;
        min-width:270px;
    }

    @media only screen and (max-width: 720px) {
        .mar-top{
            margin-top: 24px;
        }
    }

    .imageEnter {
        transition: .5s;
        opacity: 1;
    }

    .imageLeave {
        opacity: 0;
    }


</style>
