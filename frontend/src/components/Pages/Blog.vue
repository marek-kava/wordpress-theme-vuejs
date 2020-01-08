<template>
    <section class="BlogPage">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-4" v-for="(post, index) in POSTS" :key="index">
                    <PostCard v-bind:post="post"/>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
    import {mapGetters} from "vuex";
    import PostCard from "../Partials/Card/PostCard";

    export default {
        components: {
            PostCard
        },
        data() {
            return {};
        },
        computed: {
            ...mapGetters(["POSTS"])
        },
        mounted() {
            this.$store.dispatch("GET_POSTS");
        }
    }
</script>

<style lang="scss">
    .BlogPage {
        padding: 2rem 0;
    }
</style>
