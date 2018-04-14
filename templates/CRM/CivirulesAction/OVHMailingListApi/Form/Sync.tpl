<h3>{$ruleActionHeader}</h3>
<div class="crm-block crm-form-block crm-civirule-rule_action-block-ovhmailinglist-sync">
    <div class="crm-section groups-single">
        <div class="label">{$form.group_id.label}</div>
        <div class="content">{$form.group_id.html}</div>
        <div class="clear"></div>
    </div>
    <div class="crm-section">
        <div class="label">{$form.list_name.label}</div>
        <div class="content">{$form.list_name.html}</div>
        <div class="clear"></div>
    </div>
    <div class="crm-section">
        <div class="label">{$form.list_domain.label}</div>
        <div class="content">{$form.list_domain.html}</div>
        <div class="clear"></div>
    </div>
    {if ($has_case)}
        <div class="crm-section">
            <div class="label">{$form.file_on_case.label}</div>
            <div class="content">{$form.file_on_case.html}</div>
            <div class="clear"></div>
        </div>
    {/if}

</div>
<div class="crm-submit-buttons">
    {include file="CRM/common/formButtons.tpl" location="bottom"}
</div>
