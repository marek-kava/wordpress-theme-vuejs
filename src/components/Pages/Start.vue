<template>
	<section class="StartPage" v-html="PAGE.page_code"></section>
</template>

<script>
    import {mapGetters} from "vuex";

    export default {

        data() {
            return {};
        },
        computed: {
            ...mapGetters(["PAGE"])
        },
        mounted() {
            this.$store.dispatch("GET_PAGE", {
                id: 5
            });
        }
    }
</script>

<style lang="scss">
	.StartPage {

		.primary {
			.Title {
				font-size: 7.4rem;
				line-height: 8rem;
				margin: 0;
				padding: 0;
			}

			.Content {
				font-size: 2rem;
				line-height: 3.2rem;
			}
		}

	}

	.middle {
		display: flex;
		align-items: center;
	}

	._container {
		flex-direction: column;
		padding: 5rem 0;
		margin-left: 3rem;
		margin-right: 3rem;
		display: flex;
		position: relative;
	}

	.Card {
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

		.CardHeader {
			border-radius: .25rem .25rem 0 0;
			padding: .75rem 1.25rem;
			margin-bottom: 0;
			background-color: #fff;
			border-bottom: 0 solid transparent;
		}

		.Title {
			font-size: 2rem;
			font-weight: 400;
			color: #495057;
			margin: 0;
		}

		.CardBody {
			flex: 1 1 auto;
			min-height: 1px;
			padding: 1.25rem;
		}
	}
</style>
