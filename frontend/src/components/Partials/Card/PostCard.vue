<template>
	<div class="PostCard">

		<CardImage v-if="post.img" v-bind:image="post.img"/>
		<CardHeader v-if="post.title" v-bind:title="post.title"/>
		<CardBody v-if="post" v-bind:post="post"/>
	</div>
</template>

<script>
    import CardHeader from "./Elements/Header";
    import CardImage from "./Elements/Image";
    import CardBody from "./Elements/Body";

    export default {
        components: {
            CardImage,
            CardHeader,
            CardBody
        },

        props: ['post'],

    }
</script>

<style scoped lang="scss">
	.PostCard {
		margin-bottom: 2rem;
		box-shadow: 0 0 0.875rem 0 rgba(53, 64, 82, .05);
		position: relative;
		display: flex;
		flex-direction: column;
		min-width: 0;
		word-wrap: break-word;
		background-color: #fff;
		background-clip: border-box;
		border: 0 solid transparent;
		border-radius: .25rem;
	}
</style>