<?php
$manifest =array (
  'acceptable_sugar_versions' =>
  array (
    'regex_matches' => array('6\.*')
  ),
  'author' => 'Stas Malyshev (smalyshev@sugarcrm.com)',
  'description' => 'Add Quick Resolve button to Bugs module.',
  'icon' => '',
  'is_uninstallable' => 'true',
  'name' => 'QuickBug',
  'published_date' => '2010-11-29 01:51:54',
  'type' => 'module',
  'version' => '1.0',
);
$installdefs =array (
  'id' => 'quickbug',
  'copy' =>
  array (
    array (
      'from' => '<basepath>/install/modules/Bugs/action_view_map.php',
      'to' => 'custom/modules/Bugs/action_view_map.php',
    ),
    array (
      'from' => '<basepath>/install/modules/Bugs/controller.php',
      'to' => 'custom/modules/Bugs/controller.php',
    ),
    array (
      'from' => '<basepath>/install/modules/Bugs/metadata/metafiles.php',
      'to' => 'custom/modules/Bugs/metadata/metafiles.php',
    ),
    array (
      'from' => '<basepath>/install/modules/Bugs/metadata/detailviewdefs.php',
      'to' => 'custom/modules/Bugs/metadata/detailviewdefs.php',
    ),
    array (
      'from' => '<basepath>/install/modules/Bugs/metadata/quickresolveviewdefs.php',
      'to' => 'custom/modules/Bugs/metadata/quickresolveviewdefs.php',
    ),
    array (
      'from' => '<basepath>/install/modules/Bugs/tpls/quicklog.tpl',
      'to' => 'custom/modules/Bugs/tpls/quicklog.tpl',
    ),
    array (
      'from' => '<basepath>/install/modules/Bugs/views/view.quickresolve.php',
      'to' => 'custom/modules/Bugs/views/view.quickresolve.php',
    ),
  ),
  'language' => array(
        array(
            'from'=> '<basepath>/install/modules/Bugs/language/en_us.lang.php',
            'to_module'=> 'Bugs',
            'language'=>'en_us'
        ),
  ),
);
