<?php

require_once(get_template_directory().'/backend/admin/Libs/CodeEditor.php');
require_once(get_template_directory()."/backend/admin/Libs/MetaBoxTypes.php");

class MetaBox
{
    const ADD_METABOX = 'add_meta_boxes';
    const SAVE_POST = 'save_post';

    private $id;
    private $title;
    private $screen;
    private $meta;
    private $nonce;

    public function __construct($id, $title, $type, $screen, $meta)
    {
        $this->id     = $id;
        $this->title  = $title;
        $this->screen = $screen;
        $this->type   = $type;
        $this->meta   = $meta;
        $this->nonce  = $meta.'_nonce';

        add_action(self::ADD_METABOX, [$this, 'addMetabox']);
        add_action(self::SAVE_POST, [$this, 'saveDataFromMetabox']);
    }

    public function addMetabox()
    {
        add_meta_box(
            $this->id,
            $this->title,
            [$this, 'callbackMetabox'],
            [$this->screen]
        );

        return $this;
    }

    /**
     * Callback function
     *
     * @param $post
     */
    public function callbackMetabox($post)
    {
        wp_nonce_field('callbackMetabox', 'callbackMetabox');

        $value = get_post_meta($post->ID, $this->meta, true);
        if ($this->type === MetaBoxTypes::CODE_EDITOR) {
            new CodeEditor($this->meta, $value);
        }
    }

    /**
     * Callback function.
     *
     * @param int $post_id
     */
    public function saveDataFromMetabox($post_id)
    {
        if (isset($_POST[$this->nonce])) {
            if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
                return;
            }
            if ( ! wp_verify_nonce($_POST[$this->nonce])) {
                return;
            }
        }
        if ( ! empty($_POST[$this->meta])) {
            update_post_meta($post_id, $this->meta, $_POST[$this->meta]);
        }
    }

}