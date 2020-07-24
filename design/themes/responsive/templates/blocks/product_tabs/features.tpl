{** block-description:features **}

{include file="views/products/components/product_features.tpl" product_features=$product.product_features details_page=true}
{include file="addons/my_design/hooks/products/product_multicolumns_list.override.tpl" product_features=$product.product_features details_page=true}