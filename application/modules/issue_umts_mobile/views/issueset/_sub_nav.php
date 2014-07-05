<ul class="nav nav-pills">
	<li <?php echo $this->uri->segment(4) == '' ? 'class="active"' : '' ?>>
		<a href="<?php echo site_url(SITE_AREA .'/issueset/issue_umts_mobile') ?>" id="list"><?php echo lang('issue_umts_mobile_list'); ?></a>
	</li>
	<?php if ($this->auth->has_permission('Issue_UMTS_Mobile.Issueset.Create')) : ?>
	<li <?php echo $this->uri->segment(4) == 'create' ? 'class="active"' : '' ?> >
		<a href="<?php echo site_url(SITE_AREA .'/issueset/issue_umts_mobile/create') ?>" id="create_new"><?php echo lang('issue_umts_mobile_new'); ?></a>
	</li>
	<?php endif; ?>
</ul>