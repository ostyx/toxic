
<?php if( have_rows('hero') ): ?>
    <?php while( have_rows('hero') ): the_row();?>
    
    <?php if( the_sub_field('background') ): ?>
    
<div class="roadblock">
	<div class="roadblock-bakground"><img class="" src="<?php the_sub_field('background'); ?>"/></div>
	
	<div class="roadblock-inner">
		<div class="roadblock-container">
			
			<div class="roadblock-icon">
				<img src="<?php the_sub_field('icon'); ?>"/>
			</div>
			
			<div class="roadblock-content">
				<h2><?php the_sub_field('heading'); ?></h2>
				<p class="xtrlarge"><?php the_sub_field('text'); ?></p>
				<a class="take-action-head green-button coolBeans" href="<?php the_sub_field('button_link'); ?>"><?php the_sub_field('button_text'); ?></a>				
			</div>
			
		</div>
		
	</div>		
</div>	

<?php endif; ?>	
		
    <?php endwhile; ?>
<?php endif; ?>	
