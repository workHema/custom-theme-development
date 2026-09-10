<?php get_header(); ?>

<?php if (have_posts()) : ?>

	<?php while (have_posts()) : the_post(); ?>


<!-- <section class="page-title bg-2"> -->
<?php
$blog_page_id = get_option('page_for_posts');

$blog_thumbnail = get_the_post_thumbnail_url(
	$blog_page_id,
	'full'
);

if (!$blog_thumbnail) {
	$blog_thumbnail = get_template_directory_uri() . '/images/blog/blog-bg.jpg';
}
?>

<section
	class="page-title bg-2"
	style="background-image: url('<?php echo esc_url($blog_thumbnail); ?>');"
>

            
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="block">

							<h2 style="color:white;">Blog Destils</h2>

							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi, quibusdam.</p>

						</div>
					</div>
				</div>
			</div>
		</section>


		<!-- Blog Single Post -->
		<section class="page-wrapper">
			<div class="container">

				<div class="row">
					<div class="col-md-12">

						<div class="post post-single">


							<!-- ==============================
							     POST TITLE
							================================ -->

							<h1 class="post-title">
								<?php the_title(); ?>
							</h1>


							<!-- ==============================
							     POST META
							================================ -->

							<div class="post-meta">
								<ul>

									<!-- Date -->
									<li>
										<i class="ion-calendar"></i>

										<?php echo esc_html(get_the_date('d, M Y')); ?>

									</li>


									<!-- Author -->
									<li>
										<i class="ion-android-people"></i>

										POSTED BY
										<?php the_author(); ?>

									</li>


									<!-- Categories -->
									<li>
										<i class="ion-pricetags"></i>

										<?php
										$categories = get_the_category();

										if (!empty($categories)) :

											foreach ($categories as $category) :

												?>

												<a href="<?php echo esc_url(get_category_link($category->term_id)); ?>">
													<?php echo esc_html($category->name); ?>
												</a>

												<?php
												if ($category !== end($categories)) {
													echo ', ';
												}

											endforeach;

										endif;
										?>

									</li>

								</ul>
							</div>


							<!-- ==============================
							     FEATURED IMAGE
							================================ -->

							<?php if (has_post_thumbnail()) : ?>

								<div class="post-thumb">

									<?php
									the_post_thumbnail(
										'full',
										array(
											'class' => 'img-fluid',
											'alt'   => esc_attr(get_the_title()),
										)
									);
									?>

								</div>

							<?php endif; ?>


							<!-- ==============================
							     POST CONTENT
							================================ -->

							<div class="post-content post-excerpt">

								<?php
								the_content();
								?>

								<?php
								wp_link_pages(
									array(
										'before' => '<div class="page-links">',
										'after'  => '</div>',
									)
								);
								?>

							</div>


					
  <?php if (comments_open() || get_comments_number()) : ?>

	<div class="post-comments">

		<h3 class="post-sub-heading">

			<?php
			$count = get_comments_number();

			echo esc_html($count);

			if ($count == 1) {
				echo ' Comment';
			} else {
				echo ' Comments';
			}
			?>

		</h3>


		<?php

		/*
		 * Get ONLY top-level comments.
		 * Replies are loaded recursively below
		 * their parent comment.
		 */

		$top_comments = get_comments(
			array(
				'post_id' => get_the_ID(),
				'parent'  => 0,
				'status'  => 'approve',
				'type'    => 'comment',
				'orderby' => 'comment_date',
				'order'   => 'ASC',
			)
		);

		?>


		<?php if (!empty($top_comments)) : ?>

			<ul
				class="custom-comments-list"
				style="
					list-style:none !important;
					padding:0 !important;
					margin:0 !important;
				"
			>

				<?php

				foreach ($top_comments as $comment) {

					custom_blog_comment(
						$comment,
						0
					);

				}

				?>

			</ul>


		<?php else : ?>

			<p>No approved comments found.</p>

		<?php endif; ?>

	</div>

<?php endif; ?>




						</div>

					</div>
				</div>



                
<!-- =========================================
							     COMMENT FORM
							========================================= -->

							<div class="post-comments-form">


								<?php

								$commenter = wp_get_current_commenter();

								$req = get_option(
									'require_name_email'
								);

								$aria_req = ($req ? " aria-required='true'" : '');

								?>


								<h3 class="post-sub-heading">
									Leave Your Comments
								</h3>


								<form
									method="post"
									action="<?php echo esc_url(site_url('/wp-comments-post.php')); ?>"
									id="commentform"
									class="comment-form"
								>


									<div class="row">


										<!-- NAME -->

										<div class="col-md-6 form-group">

											<input
												type="text"
												name="author"
												id="author"
												class="form-control"
												placeholder="Name <?php echo $req ? '*' : ''; ?>"
												maxlength="100"
												value="<?php echo esc_attr($commenter['comment_author']); ?>"
												<?php echo $aria_req; ?>
											>

										</div>


										<!-- EMAIL -->

										<div class="col-md-6 form-group">

											<input
												type="email"
												name="email"
												id="email"
												class="form-control"
												placeholder="Email <?php echo $req ? '*' : ''; ?>"
												maxlength="100"
												value="<?php echo esc_attr($commenter['comment_author_email']); ?>"
												<?php echo $aria_req; ?>
											>

										</div>


										<!-- WEBSITE -->

										<div class="form-group col-md-12">

											<input
												type="url"
												name="url"
												id="url"
												class="form-control"
												placeholder="Website"
												maxlength="200"
												value="<?php echo esc_attr($commenter['comment_author_url']); ?>"
											>

										</div>


										<!-- COMMENT -->

										<div class="form-group col-md-12">

											<textarea
												name="comment"
												id="comment"
												class="form-control"
												rows="6"
												placeholder="Comment *"
												maxlength="400"
												required
											></textarea>

										</div>


										<!-- WORDPRESS SECURITY -->

										<?php
										comment_id_fields();
										?>


										<!-- SUBMIT -->

										<div class="form-group col-md-12">

											<button
												type="submit"
												name="submit"
												id="submit"
												class="btn btn-main"
											>
												Send comment
											</button>

										</div>


									</div>


								</form>


							</div>


						</div>



			</div>
		</section>


	<?php endwhile; ?>

<?php endif; ?>


<?php get_footer(); ?>


