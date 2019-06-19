<?php
/**
Title: Some other metabox title
Post Type: Post
*/


piklist('field',array(
'type'=>'select',
'field'=>'colors',
'label'=>__('Select a color','twentyseventeen'),
'choices'=> array(
'red'=>__('Red','twentyseventeen'),
'green'=>__('Green','twentyseventeen'),
'yellow'=>__('Yellow','twentyseventeen'),
'other'=>__('Other','twentyseventeen'),
),
'attributes'=>array(
'class'=>'widefat',
),
));


piklist('field',array(
'type'=>'colorpicker',
'field'=>'othercolor',
'label'=>__('Select color','twentyseventeen'),
'value'=>'#FF0000',
'conditions'=>array(
array(
'field'=>'colors',
'value'=>'other'
)
)
));

