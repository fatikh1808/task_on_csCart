{if $product.discount}
    <span class="ty-list-price ty-nowrap" id="line_old_price_{$obj_prefix}{$obj_id}">{if $details_page}{__("old_price")}: {/if}<span class="ty-strike">{include file="common/price.tpl" value=$product.original_price|default:$product.base_price span_id="old_price_`$obj_prefix``$obj_id`" class="ty-list-price ty-nowrap"}</span></span>
{elseif $product.list_discount}
    <span class="ty-list-price ty-nowrap" id="line_list_price_{$obj_prefix}{$obj_id}">{if $details_page}<span class="list-price-label"></span> {/if}<span class="ty-strike">{include file="common/price.tpl" value=$product.list_price span_id="list_price_`$obj_prefix``$obj_id`" class="ty-list-price ty-nowrap"}</span></span>
{/if}