<template>
    <section class="" id="blogs">
        <div class="blogs-content">
            <div class="main-title">
                <h2>My <span>Blogs</span><span class="bg-text">My Blogs</span></h2>
            </div>
            <div class="blogs">
                <div class="blog">
                    <img src="assets/img/port6.jpg" alt="">
                    <div class="blog-text">
                        <h4>
                            How to Create Your Own Website
                        </h4>
                        <p>
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                            Doloribus natus voluptas, eos obcaecati recusandae amet?
                        </p>
                    </div>
                </div>
                <div class="blog">
                    <img src="assets/img/blog1.jpg" alt="">
                    <div class="blog-text">
                        <h4>
                            How to Become an Expert in Web Design
                        </h4>
                        <p>
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                            Doloribus natus voluptas, eos obcaecati recusandae amet?
                        </p>
                    </div>
                </div>
                <div class="blog">
                    <img src="assets/img/blog2.jpg" alt="">
                    <div class="blog-text">
                        <h4>
                            Become a Web Designer in 10 Days
                        </h4>
                        <p>
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                            Doloribus natus voluptas, eos obcaecati recusandae amet?
                        </p>
                    </div>
                </div>
                <div class="blog">
                    <img src="assets/img/blog3.jpg" alt="">
                    <div class="blog-text">
                        <h4>
                            Debbuging made easy with Web Inspector
                        </h4>
                        <p>
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                            Doloribus natus voluptas, eos obcaecati recusandae amet?
                        </p>
                    </div>
                </div>
                <div class="blog">
                    <img src="assets/img/port1.jpg" alt="">
                    <div class="blog-text">
                        <h4>
                            Get started with Web Design and UI Design
                        </h4>
                        <p>
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                            Doloribus natus voluptas, eos obcaecati recusandae amet?
                        </p>
                    </div>
                </div>
                <div class="blog">
                    <img src="assets/img/port3.jpg" alt="">
                    <div class="blog-text">
                        <h4>
                            This is what you need to know about Web Design
                        </h4>
                        <p>
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                            Doloribus natus voluptas, eos obcaecati recusandae amet?
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="controls">
        <SideBar/>
    </div>
    <div class="theme-btn">
        <i class="fas fa-adjust"></i>
    </div>
</template>

<script>
import SideBar from "../../Component/SideBar.vue";

export default {
    name: "Blogs",
    components: {SideBar}
}
</script>

<style scoped>

</style>
