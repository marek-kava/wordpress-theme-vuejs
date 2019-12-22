import axios from "axios";

export default {
    state: {
        post: [],
        posts: [],
    },
    getters: {
        POST: state => {
            return state.post;
        },
        POSTS: state => {
            return state.posts;
        }
    },
    mutations: {
        SET_POST: (state, paylaod) => {
            state.post = paylaod;
        },
        SET_POSTS: (state, payload) => {
            state.posts = payload;
        }
    },
    actions: {
        GET_POST: async ({commit}, payload) => {
            let {data} = await axios.get('wp-json/api/post/' + payload.slug);
            commit('SET_POST', data);
        },
        GET_POSTS: async ({commit}) => {
            let {data} = await axios.get('wp-json/api/posts');
            commit('SET_POSTS', data);
        }
    }
};