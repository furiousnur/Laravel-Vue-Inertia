<template>
    <div>
        <div class="control active-btn" data-id="home" >
            <Link href="/"><i class="fas fa-home"></i></Link>
        </div>
        <div class="control" data-id="about">
            <Link href="/"><i class="fas fa-user"></i></Link>
        </div>
        <div class="control" data-id="portfolio">
            <Link href="/"><i class="fas fa-briefcase"></i></Link>
        </div>
        <div class="control" data-id="blogs">
            <Link href="/"><i class="fas fa-newspaper"></i></Link>
        </div>
        <div class="control" data-id="contact">
            <Link href="/"><i class="fas fa-envelope-open"></i></Link>
        </div>
    </div>
</template>

<script setup>
import { Link } from '@inertiajs/vue3'
</script>

