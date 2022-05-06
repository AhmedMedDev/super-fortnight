CREATE VIEW product_handler AS 
SELECT products.* , 
categories.name AS cat_name, categories.sub_categories,
suppliers.name AS sup_name 
FROM products 
JOIN categories ON (products.category_id = categories.id)
JOIN suppliers ON (products.supplier_id = suppliers.id)