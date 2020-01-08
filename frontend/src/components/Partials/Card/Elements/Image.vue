<template>
    <img class="Image" :src="image.url" :alt="image.alt">
</template>

<script>
    export default {
        props: ['image']
    }
</script>

<style lang="scss">
    .Image {
        max-width: 100%;
        height: auto;
        border-top-left-radius: .25rem;
        border-top-right-radius: .25rem;
        vertical-align: middle;
        border-style: none;
    }
</style>

<style scoped lang="scss"></style>