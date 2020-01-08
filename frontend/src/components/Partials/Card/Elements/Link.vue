<template>
    <router-link :to="slug" class="Link">More</router-link>
</template>

<script>
    export default {
        props: ['slug']
    }
</script>

<style scoped lang="scss">
    .Link {
        text-decoration: none;
        cursor: pointer;
        color: #3a89ff;
        background-color: transparent;
        
        &:hover {
            color: #005fed;
            text-decoration: underline;
        }
    }
</style>