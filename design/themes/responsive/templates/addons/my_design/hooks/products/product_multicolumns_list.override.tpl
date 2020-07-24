<div class="ty-grid-list__image">
    {include file="views/products/components/product_icon.tpl" product=$product show_gallery=true}

    {assign var="product_labels" value="product_labels_`$obj_prefix``$obj_id`"}
    {$smarty.capture.$product_labels nofilter}
</div>
{if $show_add_to_cart}
    <div class="button-container_add_to_cart">
        {$add_to_cart = "add_to_cart_`$obj_id`"}
       <button id="$but_id" class="buy_button" type="submit" name=$but_name onclick=$but_onclick title=$but_title><img class="buy_button_icon" src="design\themes\responsive\templates\addons\my_design\hooks\products\inactive.png"/></button>
    </div>
{/if}

{assign var="rating" value="rating_$obj_id"}
{if $smarty.capture.$rating}
    <div class="grid-list__rating">
        {$smarty.capture.$rating nofilter}
    </div>
{/if}
<div class="ty-grid-list__item-name_name">
    {if $item_number == "Y"}
        <span class="item-number">{$cur_number}.&nbsp;</span>
        {math equation="num + 1" num=$cur_number assign="cur_number"}
    {/if}

    {assign var="name" value="name_$obj_id"}
    <bdi>{$smarty.capture.$name nofilter}</bdi>
</div>

<p class="ty-grid-list__item-name_words">{$product.search_words}</p>

<div class="ty-grid-list__price_price {if $product.price == 0}ty-grid-list__no-price{/if}">
    {assign var="old_price" value="old_price_`$obj_id`"}
    {if $smarty.capture.$old_price|trim}{$smarty.capture.$old_price nofilter}{/if}

    {assign var="price" value="price_`$obj_id`"}
    {$smarty.capture.$price nofilter}

    {assign var="clean_price" value="clean_price_`$obj_id`"}
    {$smarty.capture.$clean_price nofilter}

    {assign var="list_discount" value="list_discount_`$obj_id`"}
    {$smarty.capture.$list_discount nofilter}
</div>

<div class="ty-product-list__feature_size">
    {assign var="product_features" value="product_features_`$obj_id`"}
    {$smarty.capture.$product_features nofilter}
</div>
