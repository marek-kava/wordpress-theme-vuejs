<template>
    <nav class="Navigation">
        <ul class="list">
            <li class="item" v-for="(item, key) in PAGES" v-bind:key="key">
                <router-link :to="{name: item.slug }" :key="key" class="Link">
                    {{item.title}}
                </router-link>
            </li>
        </ul>
    </nav>
</template>

<script>
    import {mapGetters} from "vuex";

    export default {
        data() {
            return {};
        },
        computed: {
            ...mapGetters(["PAGES"])
        },
        mounted() {
            this.$store.dispatch("GET_PAGES");
        }
    }
</script>

<style scoped lang="scss">
    
    .Navigation {
        margin-left: auto;
        
        & > .list {
            margin: 0;
            list-style-type: none;
            
            display: flex;
            flex-direction: row;
            
            & > .item {
                margin-left: 1rem;
                
                &:first-child {
                    margin-left: 0;
                }
                
                .Link {
                    color: inherit;
                    text-decoration: none;
                    
                    &:hover {
                        color: #09091d;
                    }
                }
                
            }
        }
    }

</style>