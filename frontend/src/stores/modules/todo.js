export default {
    state: {
        todos: [],
    },
    getters: {
        TODOS: state => {
            return state.todos;
        },
    },
    mutations: {
        SET_TODOS: (state, payload) => {
            state.todos = payload;
        },
        UPDATE_TODOS: (state, payload) => {
            payload.id = state.todos.length + 1;
            state.todos.push(payload);
            localStorage.setItem('todos', JSON.stringify(state.todos));
        },
        UPDATE_STATUS: (state, payload) => {
            let todoIndex = state.todos.findIndex(x => x !== null && x.id === payload.id);
            state.todos[todoIndex].completed = !state.todos[todoIndex].completed;
            localStorage.setItem('todos', JSON.stringify(state.todos));
        },
        DELETE_TODOS: (state) => {
            localStorage.removeItem('todos');
            state.todos = [];
        },
        DELETE_TODO: (state, payload) => {
            let todoIndex = state.todos.findIndex(x => x !== null && x.id === payload.id);
            delete state.todos[todoIndex];
            localStorage.setItem('todos', JSON.stringify(state.todos));
        }
    },

    actions: {
        GET_TODOS: async ({commit}) => {
            if (localStorage.getItem('todos')) {
                let data = JSON.parse(localStorage.getItem('todos'));
                commit('SET_TODOS', data);
            }
        },
        PUSH_TODO: ({commit}, {text, completed}) => {
            let data = {text, completed};
            commit('UPDATE_TODOS', data);
        },
        CHANGE_STATUS: ({commit}, {id, status}) => {
            let data = {id, status};
            commit('UPDATE_STATUS', data);
        },
        REMOVE_TODOS: ({commit}) => {
            commit('DELETE_TODOS');
        },
        REMOVE_TODO: ({commit}, {id}) => {
            let data = {id};
            commit('DELETE_TODO', data);
        }
    }
};