<template>
    <button
        class="Btn"
        @click="clickMethod"
        :class="{BtnPrimary: type === 'primary'}">{{text}}
    </button>
</template>

<script>
    export default {
        props: {
            text: {type: String},
            type: {type: String},
            click: {type: Function},
        },
        methods: {
            clickMethod() {
                this.$emit('click');
            }
        }

    }
</script>

<style scoped lang="scss">
    
    .Btn {
        background: transparent;
        outline: none !important;
        vertical-align: middle;
        display: inline-block;
        font-weight: normal;
        text-align: center;
        cursor: pointer;
        user-select: none;
        border: 1px solid transparent;
        padding: 0.65rem 1rem;
        font-size: 1rem;
        line-height: 1.5;
        border-radius: 0.25rem;
        align-items: center;
        
        &.BtnPrimary {
            background-color: #000000;
            border-color: #000000;
            color: #ffffff;
        }
    }

</style>
