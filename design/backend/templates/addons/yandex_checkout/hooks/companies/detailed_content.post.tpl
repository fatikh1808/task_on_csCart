{if $is_yandex_checkout_for_marketplaces_used && !$runtime.company_id}
    {include file="common/subheader.tpl" title=__("yandex_checkout.yandex_checkout")}
    <div class="control-group">
        <label class="control-label"
               for="elm_yandex_checkout_shop_id"
        >{__("yandex_checkout.shop_id")}:</label>
        <div class="controls">
            <input type="text"
                   name="company_data[yandex_checkout_shopid]"
                   id="elm_yandex_checkout_shop_id"
                   value="{$company_data.yandex_checkout_shopid}"
            />
        </div>
        <div class="controls">
            <p class="muted description">
                {__("yandex_checkout.yandex_checkout_for_marketplaces_vendor_info")}
            </p>
        </div>
    </div>
    <div class="control-group">
        <label class="control-label"
               for="elm_yandex_checkout_marketplace_fee"
        >{__("yandex_checkout.marketplace_fee")}:</label>
        <div class="controls">
            <input type="text"
                   name="company_data[yandex_checkout_marketplace_fee]"
                   id="elm_yandex_checkout_marketplace_fee"
                   value="{$company_data.yandex_checkout_marketplace_fee}"
                   {if !$is_vendor_plans_installed}disabled{/if}
            /> %
        </div>
        <div class="controls">
            <p class="muted description">
                {if $is_vendor_plans_installed}
                    {__("yandex_checkout.marketplace_fee_notice")}
                {else}
                    {__("yandex_checkout.marketplace_fee_disabled_notice", ["[href]" => $addons_page])}
                {/if}
            </p>
        </div>
    </div>
{/if}