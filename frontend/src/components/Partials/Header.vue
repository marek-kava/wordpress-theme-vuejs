<template>
	<header class="Header">
		<p class="title">
			Wordpress Template with VueJS
		</p>
		<Navigation/>
	</header>
</template>

<script>
    import Navigation from './Navigation'

    export default {
        name: 'app',
        components: {
            Navigation,
        }
    }
</script>

<style scoped lang="scss">

	Header {
		box-shadow: 0 0 2rem 0 rgba(53, 64, 82, .1);

		display: flex;
		flex-wrap: wrap;
		align-items: center;
		justify-content: flex-start;

		position: relative;
		padding: .875rem 1.25rem;

		background-color: #fff;

		&> .title {
			margin: 0;
			padding: 0;
		}
	}

</style>