<?php

namespace Controllers;

class PageController
{
    /**
     * @return array
     */
    static public function getPages()
    {
        $args = [
            'post_type' => 'page',
        ];

        $items = [];

        if ($pages = get_pages($args)) {
            foreach ($pages as $page) {
                $items[] = array(
                    'id'    => $page->ID,
                    'title' => $page->post_title,
                    'slug'  => $page->post_name === 'start' ? '/' : $page->post_name,
                );
            }
        }

        return $items;
    }

    /**
     * @param array $data
     *
     * @return array|null
     *
     */
    static public function getPage($data)
    {
        $page        = get_post($data['id']);
        $pageContent = get_post_meta($data['id'], 'custom_editor', true);

        $response = [];
        if (empty($page)) {
            return null;
        }

        $response['page_content'] = $page->post_content;
        $response['page_code']    = $pageContent;

        return $response;
    }
}