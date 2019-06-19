<?php
/**
Title: Some metabox title
Post Type: Post
*/


piklist('field',array(
'type'=>'text',
'field'=>'testfield1',
'label'=>__('My Field','twentyseventeen'),
'value'=>'default',
'attributes'=>array(
'class'=>'widefat',
),
));


piklist('field',array(
'type'=>'colorpicker',
'field'=>'colorpicker1',
'label'=>__('My Color Field','twentyseventeen'),
'value'=>'#FF0000',
));


piklist('field',array(
'type'=>'text',
'field'=>'favfoods',
'label'=>__('My favourite foods','twentyseventeen'),
'attributes'=>array(
'class'=>'widefat',
),
'add_more'=>true
));
