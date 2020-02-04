\echo '*********************List all restaurant names*********************'
SELECT name FROM w4_restaurant;

\echo '****************List restaurant names and addresses****************'
SELECT name, address FROM w4_restaurant;

\echo '************************List all customers************************'
SELECT * FROM w4_customer;

\echo '**List  all menu item names and prices of a particular restaurant**'
--SELECT name, price FROM w4_menu_item WHERE restaurant_id = 2;
SELECT m.name
     , m.price
  FROM w4_menu_item  m 
  JOIN w4_restaurant r
  ON   (m.restaurant_id = r.id)
  WHERE r.id            = 1;


\echo '*View all orders of a particular customer - show the customer name*'
SELECT w4_customer.first_name, w4_customer.last_name, w4_menu_item.name, w4_menu_item.price 
FROM w4_customer
INNER JOIN w4_order                 ON w4_customer.id = w4_order.customer_id
INNER JOIN w4_order_menu_items      ON w4_order.id = w4_order_menu_items.order_id
INNER JOIN w4_menu_item             ON w4_order_menu_items.menu_item_id = w4_menu_item.id
WHERE w4_customer.id = 1;

\echo '************List all orders of a particular restaurant************'
SELECT r.name       AS "Restaurant"
     , om.order_id  AS "Order #"
     , mi.name      AS "Food"
     , mi.price::float8::numeric::money     AS "Price"
   FROM       w4_restaurant       r 
   INNER JOIN w4_menu_item        mi ON r.id  = mi.restaurant_id
   INNER JOIN w4_order_menu_items om ON mi.id = om.menu_item_id
   WHERE r.id = 6;


