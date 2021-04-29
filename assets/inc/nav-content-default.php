<nav>
    <ul class="navigation">
      <li><a <?php echo (isset($pagetype) && $pagetype=='home') ? ' class="active" ' :'' ?> href="<?php echo $path; ?>index.html">Home</a></li>
      <li><a <?php echo (isset($pagetype) && $pagetype=='content') ? ' class="active" ' :'' ?> class='active' href="<?php echo $path; ?>content.html">Content</a></li>
      <img src="<?php echo $path; ?>assets/img/gearmonke_logo.svg" alt="GearMonkeLogo" class="logo">
      <li><a <?php echo (isset($pagetype) && $pagetype=='aboutus') ? ' class="active" ' :'' ?> href="<?php echo $path; ?>#">About Us</a></li>
      <li><a <?php echo (isset($pagetype) && $pagetype=='donate') ? ' class="active" ' :'' ?> href="<?php echo $path; ?>#">Donate</a></li>
    </ul>
</nav>