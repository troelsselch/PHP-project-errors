<?php

//run with
// $ phpcs --report=checkstyle --report-file='./checkstyle-codesniffer.xml' --standard=Drupal --extensions=php,module,install,inc,profile,test --ignore=*/contrib/*,*/development/*,*.features.*,*.field_group.*,*.layouts.*,*.pages_default.*,*.panelizer.*,*.panels_default.*,*.strongarm.*,*.views_default.* cs.php

//Wrong formatting. See correct structure formatting: https://drupal.org/coding-standards#controlstruct)
if($condition1 || $condition2)
{
	print "yes";
} elseif(condition3 && condition4)
{
	print "no";
} else {
  print "maybe";
}

