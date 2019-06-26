<div class="container">
	<ul class="nav nav-pills">
	  <li class="nav-item">
	    <a class="nav-link <?php if ($CURRENT_PAGE == "Blablasure") {?>active<?php }?>" href="index.php">Blablasure</a>
	  </li>
	  <li class="nav-item">
	    <a class="nav-link <?php if ($CURRENT_PAGE == "Websites") {?>active<?php }?>" href="websites.php">Websites</a>
	  </li>
	  <li class="nav-item">
	    <a class="nav-link <?php if ($CURRENT_PAGE == "Developers") {?>active<?php }?>" href="developers.php">Developers</a>
	  </li>
	</ul>
</div>

<button type="button" class="my-button btn btn-primary" data-toggle="button" aria-pressed="false" autocomplete="off">
    Single toggle
</button>

