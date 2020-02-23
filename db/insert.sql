-- ----------------------------------------------- --
-- --------- POPULATE THE ACCOUNTS TABLE --------- --
-- ----------------------------------------------- --
INSERT INTO p1_user (     first_name
                        , last_name
                        , email
                        , password) 
                 VALUES ( 'David'
                        , 'Johnson'
                        , 'dogdog@yahoo.com'
                        , 'hellothere');
INSERT INTO p1_user (     first_name
                        , last_name
                        , email
                        , password) 
                 VALUES ( 'Don'
                        , 'Cheadle'
                        , 'warmachine@yahoo.com'
                        , 'ironman');
-- ----------------------------------------------- --
-- -------- POPULATE THE EVENT TABLE ------------- --
-- ----------------------------------------------- -- 
INSERT INTO p1_event (      event_name
                          , event_date) 
                   VALUES ( 'Christmas'
                          , current_timestamp);
-- -------------------------------------------------------- --
-- ---------- POPULATE THE user_event_map TABLE ----------- --
-- -------------------------------------------------------- -- 
INSERT INTO p1_user_event_map( uem_user_id,
                            uem_event_id,
                            assignment_id)
                    VALUES (1, 1, 2);