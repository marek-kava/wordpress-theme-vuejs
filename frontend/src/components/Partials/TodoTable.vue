<template>
    <div class="TodoTable">
        <table class="Table">
            <tbody class="TableBody">
            <template v-for="todo in TODOS">
                <tr class="Row"
                    v-if="todo != null"
                    :class="{ completed: todo.completed }"
                    :key="todo.id"
                >
                    <td class="Cell Todo--Checkbox">
                        <input
                            type="checkbox"
                            v-model="todo.completed"
                            @click="updateStatus(todo.id)"
                        >
                    </td>
                    <td class="Cell Todo--Title">
                        {{ todo.text }}
                    </td>
                    <td class="Cell">
                        <Button
                            :text="`Remove`"
                            @click="removeTodo(todo.id)"
                        />
                    </td>
                </tr>
            </template>
            
            </tbody>
        </table>
        <div class="TodoActions">
            <Button
                :text="`Remove all todos`"
                :type="`primary`"
                @click="removeTodos"
            />
        </div>
    </div>
</template>

<script>
    import Button from '@/components/Partials/Button.vue';

    export default {
        props: {
            TODOS: {type: Array}
        },
        components: {
            Button
        },
        methods: {
            updateStatus(id) {
                this.$store.dispatch("CHANGE_STATUS", {id: id});
            },
            removeTodo(id) {
                this.$store.dispatch("REMOVE_TODO", {id: id});
                this.$store.dispatch("GET_TODOS");
            },
            removeTodos() {
                this.$store.dispatch("REMOVE_TODOS");
            },
        }
    }
</script>

<style scoped lang="scss">
    .TodoTable {
        margin-top: 2rem;
        
        & > .Table {
            display: block;
            max-height: 500px;
            
            border-collapse: collapse;
            overflow: hidden;
            width: 100%;
            
            background-color: #fff;
            padding: 1rem 2rem
        }
        
        & .TableBody {
            max-height: 446px;
        }
        
        & .Todo--Title {
            min-width: 170px;
        }
        
        & .Todo--Checkbox {
            min-width: 25px;
        }
        
        & .Row.completed {
            & .Todo--Title {
                color: #d9d9d9;
                text-decoration: line-through;
            }
        }
        
        & .Row {
            border-bottom: 1px solid #f0f3ff;
        }
    }
    
    .TodoActions {
        margin-top: 2rem;
    }
</style>
