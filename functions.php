<?php
// theme setup 

$server_path = get_template_directory();

require_once $server_path.'/inc/theme-setup.php';


// link style and script files

require_once $server_path.'/inc/enqueue.php';

require_once get_template_directory() . '/inc/class-bootstrap-navwalker.php';

require_once $server_path.'/inc/custom-post-types.php';


// contact form file

require_once get_template_directory() . '/inc/contact-form/contact-form.php';
// loads contact-form.php  validation security databaseemail





function custom_blog_comment($comment, $depth = 0) {

	$comment_id = $comment->comment_ID;
	?>

	<li id="comment-<?php echo esc_attr($comment_id); ?>"
		class="custom-comment"
		style="display:block !important; visibility:visible !important; opacity:1 !important;">

		<div class="custom-comment-box"
			style="display:flex; gap:15px; margin-bottom:25px;">

			<div class="custom-comment-avatar ">

				<?php
				echo get_avatar(
					$comment->comment_author_email,
					50,
					'',
					$comment->comment_author,
                    array(
			        'class' => 'media-object comment-avatar rounded-circle',
	        	)
				);
				?>

       


			</div>

			<div class="custom-comment-body">

				<h4 class="comment-author">
					<a herf="#"><?php echo esc_html($comment->comment_author); ?></a>
				</h4>

				<time><small >
					<?php echo esc_html(get_comment_date('F d, Y', $comment)); ?>
					at
					<?php echo esc_html(get_comment_time('g:i a', $comment)); ?>
				</small>

                <span style="margin-left:10px;">

					<?php
					comment_reply_link(
						array(
							'comment'  => $comment,
							'depth'    => $depth,
							'max_depth'=> 5,
							'before'   => '',
							'after'    => '',
						)
					);
					?>

				</span>
            </time>

				<div class="custom-comment-text">

					<?php
					echo wpautop(
						wp_kses_post($comment->comment_content)
					);
					?>

				</div>

				

			</div>

		</div>

		<?php

		/*
		 * Get replies belonging ONLY to this comment.
		 */

		$replies = get_comments(
			array(
				'post_id' => $comment->comment_post_ID,
				'parent'  => $comment_id,
				'status'  => 'approve',
				'type'    => 'comment',
				'orderby' => 'comment_date',
				'order'   => 'ASC',
			)
		);

		if (!empty($replies) && $depth < 5) :

			?>

			<ul
				class="custom-comment-children"
				style="
					list-style:none !important;
					margin-left:60px !important;
					padding-left:20px !important;
					display:block !important;
				"
			>

				<?php

				foreach ($replies as $reply) {

					custom_blog_comment(
						$reply,
						$depth + 1
					);

				}

				?>

			</ul>

			<?php

		endif;

		?>

	</li>

	<?php
}
