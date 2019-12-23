<?php

namespace Controllers;

class PostController
{
    static public function getPosts()
    {
        $posts = get_posts(array(
            'post_type'      => 'post',
            'posts_per_page' => -1,
        ));

        $items = [];

        if ($posts) {
            foreach ($posts as $post) {
                $items[] = array(
                    'id'      => $post->ID,
                    'title'   => $post->post_title,
                    'slug'    => '/blog/'.$post->post_name,
                    'excerpt' => $post->post_excerpt,
                    'img'     => [
                        'url' => get_the_post_thumbnail_url($post),
                        'alt' => get_post_meta(
                            get_post_thumbnail_id($post->ID),
                            '_wp_attachment_image_alt',
                            true
                        ) ?
                            get_post_meta(
                                get_post_thumbnail_id($post->ID),
                                '_wp_attachment_image_alt',
                                true
                            ) : 'Demo',
                    ],
                );
            }
        }

        return $items;
    }

    static public function getPost($data)
    {

        $id   = $data['id'];
        $slug = $data['slug'];

        str_replace("/blog/", "", $slug);

        $args = array(
            'name'        => $slug,
            'post_type'   => 'post',
            'post_status' => 'publish',
            'numberposts' => 1,
        );


        $post = get_posts($args)[0];

        $thumbnail_id             = get_post_thumbnail_id($post->ID);
        $alt                      = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);
        $alt                      = $alt ? $alt : 'Demo';
        $response                 = [];
        $response['post_id']      = $post->ID;
        $response['post_title']   = $post->post_title;
        $response['post_content'] = $post->post_content;
        $response['post_image']   = [
            'url' => get_the_post_thumbnail_url($post),
            'atl' => $alt,
        ];


        return $response;
    }
}