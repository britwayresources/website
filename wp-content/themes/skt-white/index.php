<?php
/**
 * The template for displaying home page.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package SKT White
 */

get_header(); 
?>

<?php if ( 'page' == get_option( 'show_on_front' ) && ( '' != get_option( 'page_for_posts' ) ) && $wp_query->get_queried_object_id() == get_option( 'page_for_posts' ) ) : ?>

    <div class="content-area">
        <div class="middle-align content_sidebar">
            <div class="site-main" id="sitemain">
				<?php
                if ( have_posts() ) :
                    // Start the Loop.
                    while ( have_posts() ) : the_post();
                        /*
                         * Include the post format-specific template for the content. If you want to
                         * use this in a child theme, then include a file called called content-___.php
                         * (where ___ is the post format) and that will be used instead.
                         */
                        get_template_part( 'content', get_post_format() );
                
                    endwhile;
                    // Previous/next post navigation.
                    skt_white_pagination();
                
                else :
                    // If no content, include the "No posts found" template.
                     get_template_part( 'no-results', 'index' );
                
                endif;
                ?>
            </div>
            <?php get_sidebar();?>
            <div class="clear"></div>
        </div>
    </div>


<?php else: ?>
		<section style="background-color: '#ffffff';">
			<div class="container">
				<div class="br-section about-us">
		        	<p>
		            	 2000年创立于加拿大不列颠哥伦比亚省, 明程科技有限公司是一家富于创新意识的 产品和服务提供商, 公司承诺将以其特有的增值服务和性能价格比最优的产品给客户 提供完整的解决方案。      
					</p>
					
					<p>
     		 			管理团队包括曾经担任大中型企业和跨国公司中高层管理职务的经理和大学教授, 研究员。他们特有的创新意识，独特的商业素质，丰富的经验和广泛的社会和工业界的联系， 使明程科技有限公司逐步成为一个勇于开拓创新的产品和增值服务提供商。
					</p>
					
					<p>
						 此外, 明程科技有限公司致力于寻求技术投资机会以早期的种子基金投资并扶持高科技创业公司的发展。
					</p>
				</div>
		        <div class="clear"></div>
		    </div>
		</section>
       
<?php endif; ?>


<?php get_footer(); ?>