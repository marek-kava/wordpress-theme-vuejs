<template>
    <div class="Body pt-0">
        <CardContent v-bind:excerpt="post.excerpt"/>
        <CardLink v-bind:slug="post.slug"/>
    </div>
</template>

<script>
    import CardContent from "./Content";
    import CardLink from "./Link";

    export default {
        components: {
            CardContent,
            CardLink
        },
        props: ['post']
    }
</script>

<style scoped lang="scss">
    .Body {
        flex: 1 1 auto;
        min-height: 1px;
        padding: 1.25rem;
    }
</style>