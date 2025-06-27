<?php
	if (!$staff_img || $staff_img == '') {
		$staff_img = 'https://gravatar.com/avatar/000000000000000000000000000000000000000000000000000000?d=mp';
	}
?>

<div class="staff-member staff-member--expanded staff-member--<?= $image_layout ?>">
	<img src="<?= $staff_img ?>"
		 alt="<?= $staff->post_title ?>"
		 class="staff-member__image" />
	<span class="staff-member__content">
		<p class="text-large">
			<?= $staff->post_title ?>
		</p>
		<div class="text-small text-justify">
			<?= $staff->post_content ?>
		</div>
	</span>
</div>