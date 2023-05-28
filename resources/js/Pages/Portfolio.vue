<template>
    <section class="" id="portfolio">
        <div class="main-title">
            <h2>My <span>Portfolio</span><span class="bg-text">My Work</span></h2>
        </div>
        <p class="port-text">
            Here is some of my work that I've done in various programming languages.
        </p>
        <div class="portfolios">
            <div class="portfolio-item">
                <div class="image">
                    <img src="assets/img/port1.jpg" alt="">
                </div>
                <div class="hover-items">
                    <h3>Project Source</h3>
                    <div class="icons">
                        <a href="#" class="icon">
                            <i class="fab fa-github"></i>
                        </a>
                        <a href="#" class="icon">
                            <i class="fab fa-behance"></i>
                        </a>
                        <a href="#" class="icon">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="portfolio-item">
                <div class="image">
                    <img src="assets/img/port2.jpg" alt="">
                </div>
                <div class="hover-items">
                    <h3>Project Source</h3>
                    <div class="icons">
                        <a href="#" class="icon">
                            <i class="fab fa-github"></i>
                        </a>
                        <a href="#" class="icon">
                            <i class="fab fa-behance"></i>
                        </a>
                        <a href="#" class="icon">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="portfolio-item">
                <div class="image">
                    <img src="assets/img/port3.jpg" alt="">
                </div>
                <div class="hover-items">
                    <h3>Project Source</h3>
                    <div class="icons">
                        <a href="#" class="icon">
                            <i class="fab fa-github"></i>
                        </a>
                        <a href="#" class="icon">
                            <i class="fab fa-behance"></i>
                        </a>
                        <a href="#" class="icon">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="portfolio-item">
                <div class="image">
                    <img src="assets/img/port4.jpg" alt="">
                </div>
                <div class="hover-items">
                    <h3>Project Source</h3>
                    <div class="icons">
                        <a href="#" class="icon">
                            <i class="fab fa-github"></i>
                        </a>
                        <a href="#" class="icon">
                            <i class="fab fa-behance"></i>
                        </a>
                        <a href="#" class="icon">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="portfolio-item">
                <div class="image">
                    <img src="assets/img/port5.jpg" alt="">
                </div>
                <div class="hover-items">
                    <h3>Project Source</h3>
                    <div class="icons">
                        <a href="#" class="icon">
                            <i class="fab fa-github"></i>
                        </a>
                        <a href="#" class="icon">
                            <i class="fab fa-behance"></i>
                        </a>
                        <a href="#" class="icon">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="portfolio-item">
                <div class="image">
                    <img src="assets/img/port2.jpg" alt="">
                </div>
                <div class="hover-items">
                    <h3>Project Source</h3>
                    <div class="icons">
                        <a href="#" class="icon">
                            <i class="fab fa-github"></i>
                        </a>
                        <a href="#" class="icon">
                            <i class="fab fa-behance"></i>
                        </a>
                        <a href="#" class="icon">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="portfolio-item">
                <div class="image">
                    <img src="assets/img/port7.jpg" alt="">
                </div>
                <div class="hover-items">
                    <h3>Project Source</h3>
                    <div class="icons">
                        <a href="#" class="icon">
                            <i class="fab fa-github"></i>
                        </a>
                        <a href="#" class="icon">
                            <i class="fab fa-behance"></i>
                        </a>
                        <a href="#" class="icon">
                            <i class="fab fa-youtube"></i>
                        </a>
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
import SideBar from "../Component/SideBar.vue";

export default {
    name: "Portfolio",
    components: {SideBar}
}
</script>

<style scoped>

</style>
