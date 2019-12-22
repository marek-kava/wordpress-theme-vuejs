<template>
	<article class="SinglePost" v-if="POST">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-12 col-md-8">
					<h1 class="title">{{POST.post_title}}</h1>

					<figure v-if="POST.post_image">
						<img :src="POST.post_image.url" :alt="POST.post_image.alt" class="Image">
					</figure>

					<p class="Content" v-html="POST.post_content"></p>
					<hr>
					<router-link :to="`/blog`">Back to posts</router-link>
				</div>
			</div>
		</div>

	</article>
</template>

<script>
    import {mapGetters} from "vuex";

    export default {
        props: ['title'],
        computed: {
            ...mapGetters(["POST"])
        },
        mounted() {
            this.$store.dispatch("GET_POST", {
                slug: this.$router.currentRoute.path.replace('/blog/', '')
            });
        },
				destroyed() {
            this.$store.commit('SET_POST', null);
        }
    }
</script>

<style scoped lang="scss">

	.SinglePost {
		padding-top: 1rem;
		padding-bottom: 3rem;

		& .Content {
			white-space: pre-line;
		}
	}
	.Title {
		font-size: 1.5rem;
		font-weight: 300;
		color: #495057;
		margin: 0;
		padding-top: 1rem;
	}

	figure {
		width: 100%;
		margin: 0;
		padding: 0;
	}

	.Image {
		max-width: 100%;
		height: auto;
		border-top-left-radius: .25rem;
		border-top-right-radius: .25rem;
		vertical-align: middle;
		border-style: none;
	}
</style>