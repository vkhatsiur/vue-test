<template>
    <nav class="flex space-x-4 justify-center bg-blue-300 py-4">
        <Link href="/">Home</Link>
        <Link href="/jobs">Jobs</Link>
        <Link href="/about">About Us</Link>
    </nav>
    <div class="w-9/12 mx-auto py-4">
        <slot />
    </div>
</template>

<script setup>

</script>
