<?php
$viewdefs ['Calls'] =
array (
  'DetailView' =>
  array (
    'templateMeta' =>
    array (
      'form' =>
      array (
        'buttons' =>
        array (
          0 => 'EDIT',
          1 => 'DUPLICATE',
          2 => 'DELETE',
          3 =>
          array (
            'customCode' => '{if $fields.status.value != "Held" && $bean->aclAccess("edit")} <input type="hidden" name="isSaveAndNew" value="false">  <input type="hidden" name="status" value="">  <input type="hidden" name="isSaveFromDetailView" value="true">  <input title="{$APP.LBL_CLOSE_AND_CREATE_BUTTON_TITLE}"   class="button"  onclick="this.form.status.value=\'Held\'; this.form.action.value=\'Save\';this.form.return_module.value=\'Calls\';this.form.isDuplicate.value=true;this.form.isSaveAndNew.value=true;this.form.return_action.value=\'EditView\'; this.form.return_id.value=\'{$fields.id.value}\'" id="close_create_button" name="button"  value="{$APP.LBL_CLOSE_AND_CREATE_BUTTON_TITLE}"  type="submit">{/if}',
            'sugar_html' =>
            array (
              'type' => 'submit',
              'value' => '{$APP.LBL_CLOSE_AND_CREATE_BUTTON_TITLE}',
              'htmlOptions' =>
              array (
                'title' => '{$APP.LBL_CLOSE_AND_CREATE_BUTTON_TITLE}',
                'class' => 'button',
                'onclick' => 'this.form.isSaveFromDetailView.value=true; this.form.status.value=\'Held\'; this.form.action.value=\'Save\';this.form.return_module.value=\'Calls\';this.form.isDuplicate.value=true;this.form.isSaveAndNew.value=true;this.form.return_action.value=\'EditView\'; this.form.return_id.value=\'{$fields.id.value}\'',
                'name' => 'button',
                'id' => 'close_create_button',
              ),
              'template' => '{if $fields.status.value != "Held" && $bean->aclAccess("edit")}[CONTENT]{/if}',
            ),
          ),
          4 =>
          array (
            'customCode' => '{if $fields.status.value != "Held" && $bean->aclAccess("edit")} <input type="hidden" name="isSave" value="false">  <input title="{$APP.LBL_CLOSE_BUTTON_TITLE}"  accesskey="{$APP.LBL_CLOSE_BUTTON_KEY}"  class="button"  onclick="this.form.status.value=\'Held\'; this.form.action.value=\'Save\';this.form.return_module.value=\'Calls\';this.form.isSave.value=true;this.form.return_action.value=\'DetailView\'; this.form.return_id.value=\'{$fields.id.value}\'" id="close_button" name="button1"  value="{$APP.LBL_CLOSE_BUTTON_TITLE}"  type="submit">{/if}',
            'sugar_html' =>
            array (
              'type' => 'submit',
              'value' => '{$APP.LBL_CLOSE_BUTTON_TITLE}',
              'htmlOptions' =>
              array (
                'title' => '{$APP.LBL_CLOSE_BUTTON_TITLE}',
                'accesskey' => '{$APP.LBL_CLOSE_BUTTON_KEY}',
                'class' => 'button',
                'onclick' => 'this.form.status.value=\'Held\'; this.form.action.value=\'Save\';this.form.return_module.value=\'Calls\';this.form.isSave.value=true;this.form.return_action.value=\'DetailView\'; this.form.return_id.value=\'{$fields.id.value}\';this.form.isSaveFromDetailView.value=true',
                'name' => 'button1',
                'id' => 'close_button',
              ),
              'template' => '{if $fields.status.value != "Held" && $bean->aclAccess("edit")}[CONTENT]{/if}',
            ),
          ),
          5 =>
          array(
                    'customCode' => '<form id="form"></form>',
                    'sugar_html' =>
                        array(
                            'type' => 'submit',
                            'value' => 'Форма КЦ',
                            'htmlOptions' =>
                                array(
                                    'title' => 'Форма КЦ',
                                    'class' => 'button',
                                    //'onclick' => 'javascript:window.location=\'/index.php?action=DetailView&module=Calls&form=call_center&record={$fields.id.value}\'',
                                    'onclick' => "$('#myModal').modal('show')"
                                ),
                        ),
                ),

            'SA_RESCHEDULE' =>
          array (
            'customCode' => '{if $fields.status.value != "Held"} <input title="{$MOD.LBL_RESCHEDULE}" class="button" onclick="get_form();" name="Reschedule" id="reschedule_button" value="{$MOD.LBL_RESCHEDULE}" type="button">{/if}',
          ),
        ),
        'hidden' =>
        array (
          0 => '<input type="hidden" name="isSaveAndNew">',
          1 => '<input type="hidden" name="status">',
          2 => '<input type="hidden" name="isSaveFromDetailView">',
          3 => '<input type="hidden" name="isSave">',
        ),
        'headerTpl' => 'modules/Calls/tpls/detailHeader.tpl',
      ),
      'maxColumns' => '2',
      'widths' =>
      array (
        0 =>
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 =>
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'useTabs' => true,
      'includes' =>
      array (
        'SA_RESCHEDULE' =>
        array (
          'file' => 'modules/Calls_Reschedule/reschedule_form.js',
        ),
        0 =>
        array (
          'file' => 'modules/Reminders/Reminders.js',
        ),
      ),
      'tabDefs' =>
      array (
        'LBL_CALL_INFORMATION' =>
        array (
          'newTab' => true,
          'panelDefault' => 'expanded',
        ),
        'LBL_DETAILVIEW_PANEL1' =>
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_DETAILVIEW_PANEL2' =>
        array (
          'newTab' => true,
          'panelDefault' => 'expanded',
        ),
        'LBL_RESCHEDULE_PANEL' =>
        array (
          'newTab' => true,
          'panelDefault' => 'expanded',
        ),
        'LBL_PANEL_ASSIGNMENT' =>
        array (
          'newTab' => true,
          'panelDefault' => 'expanded',
        ),
      ),
    ),
    'panels' =>
    array (
      'lbl_call_information' =>
      array (
        0 =>
        array (
          0 =>
          array (
            'name' => 'name',
            'label' => 'LBL_SUBJECT',
          ),
          1 =>
          array (
            'name' => 'direction',
            'customCode' => '{$fields.direction.options[$fields.direction.value]} {$fields.status.options[$fields.status.value]}',
            'label' => 'LBL_STATUS',
          ),
        ),
        1 =>
        array (
          0 =>
          array (
            'name' => 'date_start',
            'customCode' => '{$fields.date_start.value} {$fields.time_start.value}&nbsp;',
            'label' => 'LBL_DATE_TIME',
          ),
          1 =>
          array (
            'name' => 'parent_name',
            'customLabel' => '{sugar_translate label=\'LBL_MODULE_NAME\' module=$fields.parent_type.value}',
          ),
        ),
        2 =>
        array (
          0 =>
          array (
            'name' => 'duration_hours',
            'customCode' => '{$fields.duration_hours.value}{$MOD.LBL_HOURS_ABBREV} {$fields.duration_minutes.value}{$MOD.LBL_MINSS_ABBREV}&nbsp;',
            'label' => 'LBL_DURATION',
          ),
          1 =>
          array (
            'name' => 'reminders',
            'label' => 'LBL_REMINDERS',
          ),
        ),
        3 =>
        array (
          0 =>
          array (
            'name' => 'assigned_user_name',
            'customCode' => '{$fields.assigned_user_name.value}',
            'label' => 'LBL_ASSIGNED_TO',
          ),
          1 => '',
        ),
      ),
      'lbl_detailview_panel1' =>
      array (
        0 =>
        array (
          0 =>
          array (
            'name' => 'theme_c',
            'studio' => 'visible',
            'label' => 'LBL_THEME',
          ),
          1 =>
          array (
            'name' => 'more_theme_c',
            'studio' => 'visible',
            'label' => 'LBL_MORE_THEME',
          ),
        ),
        1 =>
        array (
          0 =>
          array (
            'name' => 'result_c',
            'studio' => 'visible',
            'label' => 'LBL_RESULT',
          ),
          1 =>
          array (
            'name' => 'description',
            'comment' => 'Full text of the note',
            'label' => 'LBL_DESCRIPTION',
          ),
        ),
      ),
      'lbl_detailview_panel2' =>
      array (
        0 =>
        array (
          0 =>
          array (
            'name' => 'vici_phone_c',
            'label' => 'LBL_VICI_PHONE',
          ),
          1 =>
          array (
            'name' => 'vici_call_group_c',
            'label' => 'LBL_VICI_CALL_GROUP',
          ),
        ),
        1 =>
        array (
          0 =>
          array (
            'name' => 'vici_fronter_phone_c',
            'label' => 'LBL_VICI_FRONTER_PHONE',
          ),
          1 =>
          array (
            'name' => 'vici_channel_c',
            'label' => 'LBL_VICI_CHANNEL',
          ),
        ),
        2 =>
        array (
          0 =>
          array (
            'name' => 'vici_call_record_c',
            'label' => 'LBL_VICI_CALL_RECORD',
          ),
          1 =>
          array (
            'name' => 'vici_uid_c',
            'label' => 'LBL_VICI_UID',
          ),
        ),
        3 =>
        array (
          0 =>
          array (
            'name' => 'vici_duration_c',
            'label' => 'LBL_VICI_DURATION',
          ),
          1 => '',
        ),
      ),
      'lbl_reschedule_panel' =>
      array (
        0 =>
        array (
          0 =>
          array (
            'name' => 'reschedule_history',
            'comment' => 'Call duration, minutes portion',
            'label' => 'LBL_RESCHEDULE_HISTORY',
          ),
          1 => '',
        ),
      ),
      'LBL_PANEL_ASSIGNMENT' =>
      array (
        0 =>
        array (
          0 =>
          array (
            'name' => 'date_entered',
            'customCode' => '{$fields.date_entered.value} {$APP.LBL_BY} {$fields.created_by_name.value}&nbsp;',
            'label' => 'LBL_DATE_ENTERED',
          ),
          1 =>
          array (
            'name' => 'date_modified',
            'customCode' => '{$fields.date_modified.value} {$APP.LBL_BY} {$fields.modified_by_name.value}&nbsp;',
            'label' => 'LBL_DATE_MODIFIED',
          ),
        ),
      ),
    ),
  ),
);
?>
