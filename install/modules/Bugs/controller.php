<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 *The contents of this file are subject to the SugarCRM Professional End User License Agreement
 *("License") which can be viewed at http://www.sugarcrm.com/EULA.
 *By installing or using this file, You have unconditionally agreed to the terms and conditions of the License, and You may
 *not use this file except in compliance with the License. Under the terms of the license, You
 *shall not, among other things: 1) sublicense, resell, rent, lease, redistribute, assign or
 *otherwise transfer Your rights to the Software, and 2) use the Software for timesharing or
 *service bureau purposes such as hosting the Software for commercial gain and/or for the benefit
 *of a third party.  Use of the Software may be subject to applicable fees and any use of the
 *Software without first paying applicable fees is strictly prohibited.  You do not have the
 *right to remove SugarCRM copyrights from the source code or user interface.
 * All copies of the Covered Code must include on each user interface screen:
 * (i) the "Powered by SugarCRM" logo and
 * (ii) the SugarCRM copyright notice
 * in the same form as they appear in the distribution.  See full license for requirements.
 *Your Warranty, Limitations of liability and Indemnity are expressly stated in the License.  Please refer
 *to the License for the specific language governing these rights and limitations under the License.
 *Portions created by SugarCRM are Copyright (C) 2004 SugarCRM, Inc.; All Rights Reserved.
 ********************************************************************************/

class BugsController extends SugarController
{
    protected function getTemplate()
    {
        if(file_exists('custom/modules/Bugs/tpls/quicklog.tpl')) {
            return 'custom/modules/Bugs/tpls/quicklog.tpl';
        }
        return 'modules/Bugs/tpls/quicklog.tpl';
    }

    public function pre_save()
    {
        if(!empty($_REQUEST['quickresolve'])) {
            $oldworklog = $this->bean->work_log;
        }
        parent::pre_save();
        if(!empty($_REQUEST['quickresolve'])) {
            if(!empty($this->bean->work_log)) {
                global $timedate;
                $ss = new Sugar_Smarty();
                $ss->assign("user", $GLOBALS['current_user']);
                $ss->assign("user_datetime", $timedate->get_cal_date_time_format());
                $ss->assign("user_date", $timedate->get_cal_date_format());
                $ss->assign("user_time", $timedate->get_cal_time_format());
                $ss->assign("bean", $this->bean);
                $ss->assign("entry", $this->bean->work_log);
                $this->bean->work_log = $oldworklog . $ss->fetch($this->getTemplate());
            } else {
                $this->bean->work_log = $oldworklog;
            }
        }
    }
}
