<?php
// wp-content => mu-plugins
function event_post_types() {
    register_post_type('event', array(
        'public' => true,
        'labels' => array(
            'name' => 'Events',
            'add_new_item' => 'Add New Event',
            'edit_item' => "Edit Event",
            'all_items' => 'All Events',
            'singular_name' => 'Event',
            'add_new' => 'Add New Event'
        ),
        'menu_icon' => 'dashicons-calendar'
    ));
}

add_action('init', 'event_post_types');