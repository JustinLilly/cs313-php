CREATE TABLE p1_user
( user_id    SERIAL       NOT NULL   PRIMARY KEY
, first_name    VARCHAR(50)  NOT NULL
, last_name     VARCHAR(50)  NOT NULL
, email         VARCHAR(50)  UNIQUE     NOT NULL 
);

CREATE TABLE p1_event
(   event_id      SERIAL          NOT NULL   PRIMARY KEY
,   event_name    VARCHAR(100)    NOT NULL  
,   event_date    DATE            NOT NULL
);

CREATE TABLE p1_user_event_map
(   uem_id              SERIAL    NOT NULL    PRIMARY KEY
,   uem_user_id         INT       NOT NULL    REFERENCES      p1_user(user_id)
,   uem_event_id        INT       NOT NULL    REFERENCES      p1_event(event_id)
,   assignment_id       INT       NOT NULL    REFERENCES      p1_user(user_id)
);  