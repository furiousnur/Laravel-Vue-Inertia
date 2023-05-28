<template>
    <div>
        <div class="control" :class="{'active-btn': $page.url === '/' }" data-id="home" >
            <Link href="/"><i class="fas fa-home"></i></Link>
        </div>
        <div class="control" :class="{'active-btn': $page.url === '/about' }" data-id="about">
            <Link href="/about"><i class="fas fa-user"></i></Link>
        </div>
        <div class="control" :class="{'active-btn': $page.url === '/portfolio' }" data-id="portfolio">
            <Link href="/portfolio"><i class="fas fa-briefcase"></i></Link>
        </div>
        <div class="control" :class="{'active-btn': $page.url === '/blogs' }" data-id="blogs">
            <Link href="/blogs"><i class="fas fa-newspaper"></i></Link>
        </div>
        <div class="control" :class="{'active-btn': $page.url === '/contact' }" data-id="contact">
            <Link href="/contact"><i class="fas fa-envelope-open"></i></Link>
        </div>
    </div>
</template>

<script setup>
import { Link } from '@inertiajs/vue3'
</script>

