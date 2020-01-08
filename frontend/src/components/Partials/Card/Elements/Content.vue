<template>
    <p class="Content" v-html="excerpt"></p>
</template>

<script>
    export default {
        props: ['excerpt'],
    }
</script>

<style scoped lang="scss">
    .Content {
        font-weight: 300;
    }
</style>