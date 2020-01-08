import axios from "axios";

export default {
    state: {
        page: [],
        pages: [],
    },
    getters: {
        PAGE: state => {
            return state.page;
        },
        PAGES: state => {
            return state.pages;
        }
    },
    mutations: {
        SET_PAGE: (state, paylaod) => {
            state.page = paylaod;
        },
        SET_PAGES: (state, payload) => {
            payload.sort((x, y) => (x.id > y.id) ? 1 : -1);
            state.pages = payload;
        }
    },
    actions: {
        GET_PAGE: async ({commit}, payload) => {
            let {data} = await axios.get('wp-json/api/page/' + payload.id);
            commit('SET_PAGE', data);
        },
        GET_PAGES: async ({commit}) => {
            let {data} = await axios.get('wp-json/api/pages');
            commit('SET_PAGES', data);
        }
    }
};