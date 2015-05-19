<ul class="nav nav-pills">

	<li
	<?php if ($selector === 'create') { echo "class='active'";}; ?>
	>
		<a href="/mails/create">New </a>
	</li>
		
	<li
	<?php if ($selector === 'inbox') { echo "class='active'";}; ?>
	>
		<a href="/mails/">Inbox </a>
	</li>
	
	<li
	<?php if ($selector === 'sent') { echo "class='active'";};?>
	>
		<a href="/mails/sent">Sent </a>
	</li>

</ul>