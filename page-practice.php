<?php


get_header(); 
$heroImage = get_field('hero_section_image');
?>

<?php if( $heroImage ): ?>
    <img src="<?php echo $heroImage; ?>" />
<?php endif; ?>



