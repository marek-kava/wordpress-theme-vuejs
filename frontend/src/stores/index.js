import Vue from "vue";
import Vuex from "vuex";

import Pages from "./modules/pages";
import Posts from "./modules/posts";
import Todo from "./modules/todo";

Vue.use(Vuex);

export default new Vuex.Store({
    modules: {
        pages: Pages,
        posts: Posts,
        todo: Todo
    }
});