<?php
function serviceside($x){
	if ($x=='web'){
		echo '<aside class="sidenav float_r">
				<ul>
					<li><a href="services.php">Website Development</a></li>
					<li><a href="#">E-Commerce Website Development</a></li>
					<li><a href="#">Mobile Development</a></li>
					<li><a href="#">Content Writing</a></li>
				</ul>
				<p>Here is some more content for all of you crazy guys</p>
			</aside>';
	}else if($x=='market'){
		echo '<aside class="sidenav float_r">
				<ul>
					<li><a href="services.php">Social Marketing</a></li>
					<li><a href="#">CMS</a></li>
					<li><a href="#">Search Engine Optimization</a></li>
				</ul>
				<p>Here is some more content for all of you crazy guys</p>
			</aside>';
	}else if($x=='brand'){
		echo '<aside class="sidenav float_r">
				<ul>
					<li><a href="services.php">Online Catalog</a></li>
					<li><a href="#">Print</a></li>
					<li><a href="#">IPhone Applications</a></li>
					<li><a href="#">Branding & Logo Design</a></li>
				</ul>
				<p>Here is some more content for all of you crazy guys</p>
			</aside>';
	}else{
		echo '';
	}
}
?>








