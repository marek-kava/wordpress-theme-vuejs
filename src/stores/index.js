
import Vue from "vue";
import Vuex from "vuex";

import Pages from "./modules/pages";
import Posts from "./modules/posts";

Vue.use(Vuex);

export default new Vuex.Store({
    modules: {
        pages: Pages,
        posts: Posts
    }
});