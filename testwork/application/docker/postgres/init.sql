CREATE USER user_crypto password 'password';
CREATE DATABASE crypto WITH OWNER user_crypto  ENCODING 'UTF8'  LC_COLLATE = 'ru_RU.UTF-8'  LC_CTYPE = 'ru_RU.UTF-8' TEMPLATE = template0;
CREATE DATABASE crypto_test WITH OWNER user_crypto  ENCODING 'UTF8'  LC_COLLATE = 'ru_RU.UTF-8'  LC_CTYPE = 'ru_RU.UTF-8' TEMPLATE = template0;