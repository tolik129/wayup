<?php
/**
 * Get link/code for sharing
 * 
 * @param string $type
 * @return string
 */
function wayup_get_share($type = 'fb', $permalink = false, $title = false) {
    if (!$permalink) {
        $permalink = get_permalink();
    }
    if (!$title) {
        $title = get_the_title();
    }
    switch ($type) {
        case 'twi':
            return 'http://twitter.com/home?status=' . $title . '+-+' . $permalink;
            break;
        case 'fb':
            return 'http://www.facebook.com/sharer.php?u=' . $permalink . '&t=' . $title;
            break;
        case 'vk':
            return 'http://www.vk.com/sharer.php?url=' . $permalink . '&t=' . $title;
            break;
      
        default:
            return '';
    }
}