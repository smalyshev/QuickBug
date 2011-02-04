<?php
require_once 'modules/Bugs/metadata/metafiles.php';
require_once $metafiles[$this->module]['detailviewdefs'];
$viewdefs['Bugs']['DetailView']['templateMeta']['form']['buttons'][] = array("customCode" => "<input type=\"button\" value=\"{\$MOD.LBL_QUICK_RESOLVE}\"
                        	onclick=\"this.form.action.value='QuickResolve'; return SUGAR.subpanelUtils.sendAndRetrieve(this.form.id, 'Bugs_detailview_tabs', '{\$APP.LBL_LOADING}');\">",
);
