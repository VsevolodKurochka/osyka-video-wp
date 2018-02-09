<?php

/*
Template Name: Front Page
*/

get_header();

gallery_section('music_videos');

gallery_section('films');

gallery_section('commercial');

get_template_part('sections/contact');

get_footer();
?>