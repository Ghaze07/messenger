<template>
    <!-- Page Container -->
    <div class="relative mx-auto h-screen min-w-[320px] bg-white lg:ml-80">
        <!-- Page Sidebar -->
        <side-bar />
        <!-- End Page Sidebar -->
        <!-- Page Content -->
        <main id="page-content" class="absolute inset-0">
            <slot />
        </main>
        <slot name="footer"/>
    </div>
</template>
<script setup>
// Import Components
import SideBar from "@/Components/SideBar.vue";
</script>
