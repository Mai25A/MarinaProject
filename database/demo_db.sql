create database marina;
use marina;

create table if not exists roles(
	id int primary key not null,
    name varchar(25)
);
insert into roles(id,name) values
(1,"admin"),
(2,"client");

CREATE TABLE users (
  id INT PRIMARY KEY AUTO_INCREMENT,
  role_id INT,
  name VARCHAR(50),
  phone VARCHAR(20),
  email VARCHAR(100),
  password VARCHAR(100),
  image VARCHAR(200),
  FOREIGN KEY (role_id) REFERENCES roles(id)
);
INSERT INTO users (role_id, name,phone,email,password,image)
VALUES
	(1, 'admin','0333982406','mai.ho25@student.passerellesnumeriques.org','123@admin','https://images.wallpapersden.com/image/download/avatar-2-movie-4k_a21qamyUmZqaraWkpJRnZWltrWdlaW0.jpg'),
  (2, 'Ho Thi Mai','0333982406','nguyenmaioc0@gmail.com','mai123','https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcRAvckpZil2v-hYNMAPBnyIaBru-PG3bYrNxLyvO4F7l9Z1Oo4l'),
  (2, 'Pham Gia Bao','0388724502','bao.pham25@student.passerellesnumeriques.org','bao123','https://images.wallpapersden.com/image/download/avatar-2-movie-4k_a21qamyUmZqaraWkpJRnZWltrWdlaW0.jpg'),
  (2, 'A Bon','0388723492','bon.a25@student.passerellesnumeriques.org','bon123','https://images.wallpapersden.com/image/download/avatar-2-movie-4k_a21qamyUmZqaraWkpJRnZWltrWdlaW0.jpg'),
  (2, 'Ksor Rina','0388724561','rina.ksor25@student.passerellesnumeriques.org','rina123','https://images.wallpapersden.com/image/download/avatar-2-movie-4k_a21qamyUmZqaraWkpJRnZWltrWdlaW0.jpg'),
  (2, 'Ho Thi Sang','0319628492','sang.ho25@student.passerellesnumeriques.org','sang123','https://images.wallpapersden.com/image/download/avatar-2-movie-4k_a21qamyUmZqaraWkpJRnZWltrWdlaW0.jpg');
  
CREATE TABLE IF NOT EXISTS table_types  (
    id INT primary key auto_increment not null,
    type VARCHAR(10),
    number_of_seat int
);
INSERT INTO table_types (type, number_of_seat)
VALUES ('normal', 2), ('normal', 5), ('normal', 10), ('normal', 15), ('room', 10), ('room', 15), ('room', 20);
-- select*from table_types;
CREATE TABLE tables (
  id INT PRIMARY KEY auto_increment not null,
  name VARCHAR(255),
  image VARCHAR(255),
  table_type_id int,
  price int,
  description TEXT,
  FOREIGN KEY (table_type_id) REFERENCES table_types(id)
);
INSERT INTO tables (name, image, table_type_id, price, description)
VALUES ('Royal Feast','https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcRAvckpZil2v-hYNMAPBnyIaBru-PG3bYrNxLyvO4F7l9Z1Oo4l',1,35000,'Tables are arranged in an airy restaurant space, with soft lighting and harmonious decoration. It creates a convenient environment for customers to enjoy delicious food and enjoy a cozy and polite space'),
		('Harmony Dining','https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcQPRAxSHjLWW-LKjOMTUZkV--bXLx2dIOhaSabN160Agglv_keq',1,35000,'Tables are arranged in an airy restaurant space, with soft lighting and harmonious decoration. It creates a convenient environment for customers to enjoy delicious food and enjoy a cozy and polite space'),
        ('Serenity Banquet','https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSnxNb7YubMO_jYnWHENi8ku99mdqdBKWeKgJS1w7-sRO4NIj8_',1,35000,'Tables are arranged in an airy restaurant space, with soft lighting and harmonious decoration. It creates a convenient environment for customers to enjoy delicious food and enjoy a cozy and polite space'),
		('Majestic Dining','https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSFZXYCzOvBdnGLODTTM-DJZznwQ5HjkLlJ8fFTUPm7TUt4RK2o',1,35000,'Tables are arranged in an airy restaurant space, with soft lighting and harmonious decoration. It creates a convenient environment for customers to enjoy delicious food and enjoy a cozy and polite space'),
        
        ('Eternal Elegance','https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRt9mhrciUjbGhhiHN0AvqhJuQoSKARe-86Q_oioyzQ4EKGRTfj',2,45000,'Tables are arranged in an airy restaurant space, with soft lighting and harmonious decoration. It creates a convenient environment for customers to enjoy delicious food and enjoy a cozy and polite space'),
        ('Enchanted Garden','https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcQj3uqFkn6vOqCdbgfYKT1RT7TZsRiSckY-kzIoLzCdO59k5kpX',2,45000,'Tables are arranged in an airy restaurant space, with soft lighting and harmonious decoration. It creates a convenient environment for customers to enjoy delicious food and enjoy a cozy and polite space'),
        ('Blissful Banquet','https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcS6TbJV0mbjN8eZvDVOHWNJu1Iz7xmX9-U80zoEjsO8iXcYku2F',2,45000,'Tables are arranged in an airy restaurant space, with soft lighting and harmonious decoration. It creates a convenient environment for customers to enjoy delicious food and enjoy a cozy and polite space'),
        ('Radiant Reunion','https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRMLMtryvMrCaJI-VehozKWuJMmd5pBXIhtmZcfFb3_KMDwoJTj',2,45000,'Tables are arranged in an airy restaurant space, with soft lighting and harmonious decoration. It creates a convenient environment for customers to enjoy delicious food and enjoy a cozy and polite space'),
        
        ('Grandeur Gathering','https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTdC31y2k4ch1b7gJuhKRO67aHxzO-0Qa5ZCyqepBNWWw2S4b99',3,60000,'Tables are arranged in an airy restaurant space, with soft lighting and harmonious decoration. It creates a convenient environment for customers to enjoy delicious food and enjoy a cozy and polite space'),
        ('Opulent Oasis','https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSKBxwtrHm_N0ubE3SM0QIbZ6OCTR-2YUPKJNH-zmjiGc7tiFGH',3,60000,'Tables are arranged in an airy restaurant space, with soft lighting and harmonious decoration. It creates a convenient environment for customers to enjoy delicious food and enjoy a cozy and polite space'),
        ('Tranquil Terrace','https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQHzhre8Z91qLzoE3DynHHvtZJrdhwfXGvC8dPWrw89mp4smP-K',3,60000,'Tables are arranged in an airy restaurant space, with soft lighting and harmonious decoration. It creates a convenient environment for customers to enjoy delicious food and enjoy a cozy and polite space'),
        ('Celestial Celebration','https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcS11dB_DObguijRXxt9g_ZruU3BEv4SP-jKNXwGII-q3H3LF-Qm',3,60000,'Tables are arranged in an airy restaurant space, with soft lighting and harmonious decoration. It creates a convenient environment for customers to enjoy delicious food and enjoy a cozy and polite space'),
        
        ('Exquisite Essence','https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS4RPklQihwe3lymk02GmqiBzmwLYB9skLKx0NIE8yoKZKmTpso',4,80000,'Tables are arranged in an airy restaurant space, with soft lighting and harmonious decoration. It creates a convenient environment for customers to enjoy delicious food and enjoy a cozy and polite space'),
        ('Exquisite Lover','https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcSsO3Dp_Ofkjn45Fqfg2mlfwOsY-J_fDJzCdnxSBhyKbOp78Kp_',4,80000,'Tables are arranged in an airy restaurant space, with soft lighting and harmonious decoration. It creates a convenient environment for customers to enjoy delicious food and enjoy a cozy and polite space'),
        ('Regal Reflections','https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcRT1XlOboEP3zQ0ge5-B-WiYJOxDfctQzCc5jmyZFRXbevN1byy',4,80000,'Tables are arranged in an airy restaurant space, with soft lighting and harmonious decoration. It creates a convenient environment for customers to enjoy delicious food and enjoy a cozy and polite space'),
        ('Serendipity Soiree','https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcS-6z_T-hK8EpqEaYnNwW8puadNgjFp0pAAQ60rhbA9L2YnPpwW',4,80000,'Tables are arranged in an airy restaurant space, with soft lighting and harmonious decoration. It creates a convenient environment for customers to enjoy delicious food and enjoy a cozy and polite space'),
        ('Reflections Soiree','https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcS7Y5jPlag0mA8eN8G39X3c1I-iNuO03JV7mDdP1F-14nzQ293c',4,80000,'Tables are arranged in an airy restaurant space, with soft lighting and harmonious decoration. It creates a convenient environment for customers to enjoy delicious food and enjoy a cozy and polite space'),
        
        ('Whimsical Wonderland','https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcT4MsfE0K-DNDgfaqbn0zBzFDS6KcYre2TfBkJeJr7aIvY4Dpyq',5,100000,'Tables are arranged in an airy restaurant space, with soft lighting and harmonious decoration. It creates a convenient environment for customers to enjoy delicious food and enjoy a cozy and polite space'),
        ('Splendid Serenade','https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcT4W-pIUzcdID93dYPT3C2FPa2EEKlzobOwIUl2tjjMYIYrOS9M',5,100000,'Tables are arranged in an airy restaurant space, with soft lighting and harmonious decoration. It creates a convenient environment for customers to enjoy delicious food and enjoy a cozy and polite space'),
        ('Luminary Luncheon','https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcSaRJXQc1nDSMMLppHYHOlRelzsODZ3Z-D05ktYvHcGUTWbQ2bJ',5,100000,'Tables are arranged in an airy restaurant space, with soft lighting and harmonious decoration. It creates a convenient environment for customers to enjoy delicious food and enjoy a cozy and polite space'),
        ('Bountiful Banquet','https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcTGXdAfXgis2-EU9I4ltbYvajVcNYkOG81x5Gwo8XsbxkNu5B1W',5,100000,'Tables are arranged in an airy restaurant space, with soft lighting and harmonious decoration. It creates a convenient environment for customers to enjoy delicious food and enjoy a cozy and polite space'),
        ('Captivating Cuisine','https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcTGXdAfXgis2-EU9I4ltbYvajVcNYkOG81x5Gwo8XsbxkNu5B1W',5,100000,'Tables are arranged in an airy restaurant space, with soft lighting and harmonious decoration. It creates a convenient environment for customers to enjoy delicious food and enjoy a cozy and polite space'),
        
        ('Essence Cuisine','https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcTb7ruAEYBuApaOvsHgiLT7naNHF3WD3QzGTf9npDaeijJuJEry',6,130000,'Tables are arranged in an airy restaurant space, with soft lighting and harmonious decoration. It creates a convenient environment for customers to enjoy delicious food and enjoy a cozy and polite space'),
        ('Enchanted Evening','https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcS0frCdf7JWV6rJDwrVRZ7sQYhdIEmh1MEqBqthj_8b_9cCfkAs',6,130000,'Tables are arranged in an airy restaurant space, with soft lighting and harmonious decoration. It creates a convenient environment for customers to enjoy delicious food and enjoy a cozy and polite space'),
        ('Whimsical Wonder','https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcSXyV8uOUSRAAS65zbH5AHrpDY4_mKJpfdAiLltwLNOzsY-1uQK',6,130000,'Tables are arranged in an airy restaurant space, with soft lighting and harmonious decoration. It creates a convenient environment for customers to enjoy delicious food and enjoy a cozy and polite space'),
        ('Grand Gala','https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcQzipMmDkIXAM6M2orld7hpknlI8kzP38BDTF2IN5aD_qw_1A_c',6,130000,'Tables are arranged in an airy restaurant space, with soft lighting and harmonious decoration. It creates a convenient environment for customers to enjoy delicious food and enjoy a cozy and polite space'),
        
        ('Tranquil Terrace','https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcTNLwQ3V6YH_0TgSfPgq6vU9O1c6X3kNjorpIq8V8VfUjsKUzTk',7,150000,'Tables are arranged in an airy restaurant space, with soft lighting and harmonious decoration. It creates a convenient environment for customers to enjoy delicious food and enjoy a cozy and polite space'),
        ('Harvest Haven','https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQtoL49Sjf0Ym-3Yb371JWc4gLNgQIokRobokvSbES_UU5ZRQ-W',7,150000,'Tables are arranged in an airy restaurant space, with soft lighting and harmonious decoration. It creates a convenient environment for customers to enjoy delicious food and enjoy a cozy and polite space'),
        ('Opulent Occasion','https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcS1v6tMwSHRMkejUqnG3pkuCe98HbDXb35kaZ4AXq6XiuvMlrbI',7,150000,'Tables are arranged in an airy restaurant space, with soft lighting and harmonious decoration. It creates a convenient environment for customers to enjoy delicious food and enjoy a cozy and polite space'),
        ('Vintage Vibe','https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcT4PA5TQD3pqvQAG1-wP7CDAdjl_mw0TTRnOuyPCMdJTgUrx0Fr',7,150000,'Tables are arranged in an airy restaurant space, with soft lighting and harmonious decoration. It creates a convenient environment for customers to enjoy delicious food and enjoy a cozy and polite space');
 CREATE TABLE IF NOT EXISTS menu_categories  (
    id INT primary key auto_increment not null,
    name VARCHAR(50) not null
);
-- ALTER TABLE table_category
-- ADD COLUMN type VARCHAR(2);
INSERT INTO menu_categories (name)
VALUES
    ('seafood'),
    ('fruit'),
    ('drink');       
CREATE TABLE products (
  id INT PRIMARY KEY auto_increment not null,
  name VARCHAR(255),
  image VARCHAR(255),
  category_id int,
  price int,
  description TEXT,
  quantity int,
  FOREIGN KEY (category_id) REFERENCES menu_categories(id)
);      
  
INSERT INTO products (name,image,category_id,price,description)
VALUES	('Lobster Thermidor','https://tse2.mm.bing.net/th?id=OIP.zDSnloHHh1LyCX8ZkJi9AwHaE7&pid=Api&P=0&h=180',1,350000,'Succulent lobster meat cooked in a rich and creamy sauce infused with mushrooms, onions, and white wine, creating a decadent and indulgent dish. Topped with a generous layer of melted cheese and broiled until golden brown, it offers a perfect balance of flavors and textures'),
		('Grilled Shrimp Skewers','https://tse2.mm.bing.net/th?id=OIP.hjee1HFmTMu6LJlNUAZSkgHaE6&pid=Api&P=0&h=180',1,110000,' Plump and juicy shrimp marinated in a tantalizing blend of herbs, garlic, and zesty lemon juice. Skewered and grilled to perfection, these succulent shrimp skewers boast a delightful smoky flavor and a satisfying charred exterior, making them a popular choice for seafood enthusiasts'),
        ('Clam Chowder','https://tse2.mm.bing.net/th?id=OIP.H2cU6rj8cSz838gXmlMibwHaE7&pid=Api&P=0&h=180',1,130000,'A comforting and hearty soup that combines tender clams, chunks of potatoes, aromatic onions, and savory bacon in a creamy and flavorful broth. This classic New England dish is often enjoyed with a side of crusty bread to soak up every last drop of its creamy goodness'),
        ('Fish and Chips','https://tse4.mm.bing.net/th?id=OIP.DaB-qPu9FJD4amxEZwEZpQHaFm&pid=Api&P=0&h=180',1,100000,'A beloved British culinary tradition, fish and chips features flaky and moist fish, typically cod or haddock, enveloped in a crispy golden batter. Served alongside a generous portion of perfectly cooked French fries, this iconic dish is often accompanied by tangy tartar sauce for dipping'),
        ('Oysters Rockefeller','https://tse1.mm.bing.net/th?id=OIP.Gb92q0EKg8nq7wmDu1CFZwHaE8&pid=Api&P=0&h=180',1,160000,'These delectable oysters are adorned with a luscious mixture of sautéed spinach, fragrant herbs, rich butter, and crispy breadcrumbs before being baked to perfection. The result is a harmonious blend of flavors, with the briny oysters beautifully complemented by the savory and herbaceous topping'),
        ('Crab Cakes','https://tse4.mm.bing.net/th?id=OIP.5m6QF-MQyDYThy-37FyoYgHaFj&pid=Api&P=0&h=180',1,140000,'These delectable patties are made from succulent crab meat combined with breadcrumbs, eggs, herbs, and spices. Pan-fried until golden brown, crab cakes offer a delightful combination of crispy exterior and moist, flavorful interior. Served with a tangy remoulade or tartar sauce, they are a true seafood delicacy'),
		('Sushi Rolls','https://tse2.mm.bing.net/th?id=OIP.yxVVgxT2lzB3jIrnRow5-AHaE8&pid=Api&P=0&h=180',1,90000,'Sushi rolls, also known as maki rolls, are a popular Japanese dish consisting of vinegared sushi rice and various fillings such as fresh fish, shrimp, crab, avocado, and vegetables. These ingredients are wrapped in sheets of nori (seaweed) and carefully rolled into a cylindrical shape before being sliced into bite-sized pieces. Served with soy sauce, wasabi, and pickled ginger, sushi rolls offer a delightful combination of flavors and textures'),
        ('Scallops with Lemon Butter Sauce','https://tse4.mm.bing.net/th?id=OIP.ldAkIAOWu8JSfqOK7vpdvQHaE6&pid=Api&P=0&h=180',1,150000,'Plump and tender scallops are seared to perfection, creating a caramelized crust while maintaining a delicate and buttery interior. Finished with a tangy lemon butter sauce, this dish showcases the natural sweetness of the scallops and provides a burst of citrusy freshness'),
        ('Seafood Paella','https://tse4.mm.bing.net/th?id=OIP.1lOVeq8P1A18F_cthnzglAHaE8&pid=Api&P=0&h=180',1,250000,'A vibrant and flavorful Spanish rice dish that features an assortment of seafood such as shrimp, mussels, clams, and sometimes squid or lobster. Infused with saffron, garlic, and a medley of spices, the paella rice absorbs the rich flavors from the seafood and aromatic ingredients, resulting in a delightful one-pot meal'),
        ('Shrimp Scampi','https://tse4.mm.bing.net/th?id=OIP.wikPY3vVRRsYW4jwu8qZngHaE7&pid=Api&P=0&h=180',1,180000,'Succulent shrimp sautéed in a luscious garlic and butter sauce, typically finished with a splash of white wine and lemon juice. This classic Italian-American dish is bursting with flavors and is often served over pasta or accompanied by crusty bread to soak up the delicious sauce'),
        ('Grilled Octopus','https://tse3.mm.bing.net/th?id=OIP.Mc7rG4wZCUwe9icnh7Z9YQHaE6&pid=Api&P=0&h=180',1,150000,'Tender octopus marinated in a blend of olive oil, garlic, and herbs, then grilled to perfection. The result is a dish that combines a subtle smokiness with a tender and slightly chewy texture. Often served with a drizzle of lemon juice and accompanied by a refreshing salad, grilled octopus is a delightful seafood delicacy'),
        ('Steamed Mussels','https://tse3.mm.bing.net/th?id=OIP.E-fB9Uop5OWxpTjGo_rNHQHaFS&pid=Api&P=0&h=180',1,120000,'Plump and succulent mussels steamed to perfection in a flavorful broth infused with white wine, garlic, shallots, and herbs. This dish allows the natural sweetness of the mussels to shine through, and the aromatic broth adds depth and complexity to each bite. Served with crusty bread for dipping, steamed mussels make for a satisfying and communal dining experience'),
        ('Tuna Tartare','https://tse1.mm.bing.net/th?id=OIP.9thnLOlOAV4YveyAPNkfzAHaE8&pid=Api&P=0&h=180',1,120000,'A sophisticated dish featuring finely diced fresh tuna mixed with a harmonious combination of ingredients such as soy sauce, sesame oil, lime juice, and herbs. Tuna tartare offers a delicate balance of flavors, with the tender fish complemented by the umami notes of the soy sauce and the vibrant acidity of the citrus'),
        ('Grilled Swordfish','https://tse2.mm.bing.net/th?id=OIP.FrFa4itCRPJPyWtQM6HawgHaEK&pid=Api&P=0&h=180',1,160000,'Firm and meaty swordfish steak marinated in a blend of herbs, garlic, and olive oil, then grilled to perfection. The result is a dish with a robust flavor and a succulent, flaky texture. Grilled swordfish pairs well with a variety of sauces and accompaniments, such as lemon butter, salsa verde, or a fresh citrus salad'),

        ('Apple','https://tse1.explicit.bing.net/th?id=OIP.rtiOzoxyLVfDr4hKZMcbPAHaGn&pid=Api&P=0&h=180',2,55000,'A crisp and juicy fruit with a range of flavors from sweet to tart. Apples come in various varieties, each with its own distinct taste and texture. They are often enjoyed raw or used in a variety of sweet and savory dishes, from pies and tarts to salads and sauces'),
        ('Banana','https://tse4.mm.bing.net/th?id=OIP.fBI4BDOXfg4iOhIrDjEUMQHaE5&pid=Api&P=0&h=180',2,50000,'A tropical fruit with a creamy texture and a naturally sweet flavor. Bananas are rich in potassium and make a convenient and nutritious snack. They are versatile and can be eaten on their own, added to smoothies, or used in baking to create moist and flavorful treats'),
        ('Orange','https://tse3.mm.bing.net/th?id=OIP.UJE-6wR2ilsfqZhcFnBNlgHaFj&pid=Api&P=0&h=180',2,55000,' A citrus fruit known for its bright color and refreshing, tangy flavor. Oranges are packed with vitamin C and are commonly consumed fresh or used to make juices and citrus-based desserts. They add a burst of citrusy goodness to both sweet and savory dishes'),
        ('Pineapple','https://tse3.mm.bing.net/th?id=OIP.tndZBnGxzBERW6i6f4M76AHaE7&pid=Api&P=0&h=180',2,35000,'A tropical fruit with a sweet and tangy taste. Pineapples are characterized by their spiky exterior and juicy, yellow flesh. They are commonly eaten fresh, added to fruit salads, or used in tropical-inspired dishes and beverages'),
        ('Strawberry','https://tse3.mm.bing.net/th?id=OIP.XcGx1tvU7lNGV0Zdmmk70AHaEo&pid=Api&P=0&h=180',2,80000,'Small, red berries with a sweet and slightly tart flavor. Strawberries are a popular summer fruit and are often enjoyed fresh, added to desserts like cakes and tarts, or used in jams and preserves. They also pair well with cream and chocolate'),
        ('Mango','https://tse4.mm.bing.net/th?id=OIP.uCzbdsszAq1q3yuuXqwRxgHaE8&pid=Api&P=0&h=180',2,50000,'A tropical fruit with a sweet and tropical flavor. Mangos have a smooth, juicy flesh and are often enjoyed fresh or used in smoothies, salads, salsas, and desserts. They add a tropical twist to both sweet and savory dishes'),
        ('Grapefruit','https://tse2.mm.bing.net/th?id=OIP.HrxwTYpOdbZ7WGiv4rlY6gAAAA&pid=Api&P=0&h=180',2,45000,'A citrus fruit with a tangy and slightly bitter taste. Grapefruits come in different varieties, ranging from white to pink or red. They are commonly consumed fresh, juiced, or used in salads and cocktails. Grapefruits are known for their high vitamin C content'),
        ('Watermelon','https://tse1.mm.bing.net/th?id=OIP.mWMAvywU_elezJQRkksdygHaE8&pid=Api&P=0&h=180',2,50000,'A refreshing and hydrating fruit with sweet, juicy flesh. Watermelons are large and typically consumed during the summer months. They are often enjoyed chilled and can be eaten as is or used in fruit salads, beverages, and frozen treats'),
        ('Peach','http://lh4.ggpht.com/_OaYG005JPDs/TFMaAg5CStI/AAAAAAAABoA/jHmu1r5hAVc/s640/peaches.jpg',2,70000,'A soft and juicy fruit with a sweet and fragrant taste. Peaches have a delicate, fuzzy skin and a tender flesh that ranges from yellow to white. They are enjoyed fresh or used in a variety of desserts, such as pies, cobblers, and preserves'),
        
         ('Chardonnay','https://tse4.mm.bing.net/th?id=OIP.rqTYD4NSE4MDrvBWC64WIwHaE9&pid=Api&P=0&h=180',3,450000,'A popular white wine variety known for its versatility and wide range of flavors. Chardonnay wines can range from crisp and unoaked with notes of green apple and citrus, to rich and buttery with flavors of tropical fruits and vanilla. It is often enjoyed on its own or paired with seafood, poultry, or creamy pasta dishes'),
         ('Cabernet Sauvignon','https://tse1.mm.bing.net/th?id=OIP.JVO4fuWmxXY2N_qx3hZLMQHaHa&pid=Api&P=0&h=180',3,500000,'A bold and full-bodied red wine that is widely recognized and enjoyed around the world. Cabernet Sauvignon wines are known for their dark fruit flavors, such as blackberry and black currant, along with hints of herbs, oak, and spice. They pair well with red meat, hearty stews, and aged cheeses'),
         ('Pinot Noir','https://tse2.mm.bing.net/th?id=OIP.6uMQG9GHe_OdT7fP2hPKDwHaHB&pid=Api&P=0&h=180',3,700000,'A delicate and elegant red wine that is revered for its complexity and nuanced flavors. Pinot Noir wines often exhibit notes of red fruits like cherry and raspberry, along with earthy undertones and silky tannins. They are a versatile choice, pairing well with a variety of dishes, including roasted poultry, grilled salmon, and mushroom-based dishes'),
         ('Sauvignon Blanc','https://tse2.mm.bing.net/th?id=OIP.OPMM5jPyjyB3nv5yPEW6mAHaHa&pid=Api&P=0&h=180',3,250000,'A refreshing and aromatic white wine that is known for its vibrant acidity and zesty flavors. Sauvignon Blanc wines can display characteristics of tropical fruits, citrus, and fresh herbs, with a crisp and lively finish. They are often enjoyed as an aperitif, paired with seafood, salads, or goat cheese'),
         ('Merlot','https://tse1.mm.bing.net/th?id=OIP.qzigjy3JoWeL8pFuV8OW6QHaHa&pid=Api&P=0&h=180',3,45000,'A medium-bodied red wine with a smooth and velvety texture. Merlot wines offer flavors of ripe dark fruits, such as plum and black cherry, as well as hints of chocolate and spices. They are versatile and pair well with a range of dishes, including roasted meats, pasta, and soft cheeses'),
         ('Lemonade','https://tse3.mm.bing.net/th?id=OIP.j5O4NCl4fNzvxPOFq53RXQHaE8&pid=Api&P=0&h=180',3,35000,'A refreshing cold beverage made from fresh lemon juice, sugar, and water. Lemonade has a sweet and tangy flavor and is often served with ice or shaved ice to provide a cooling sensation during the summer'),
		 ('Coconut Water','https://tse1.mm.bing.net/th?id=OIP.8DPrqSoH6pTC0yt3x-WaBQHaE8&pid=Api&P=0&h=180',3,60000,'Coconut water is the natural liquid found inside ripe coconuts. It has a natural sweetness and is an excellent source of hydration, electroly'),
         ('Iced Tea','https://tse2.mm.bing.net/th?id=OIP.E_gCRT8XQRVS_WM6U8oLTgHaFj&pid=Api&P=0&h=180',3,55000,'A chilled beverage made from black or green tea, typically steeped in cold water or brewed hot and then cooled. Iced tea has a delicious flavor and is a popular choice for refreshing during hot weather'),
         ('Smoothie','https://tse1.mm.bing.net/th?id=OIP.nb1_zWolsDep5twf5EBqxQHaE8&pid=Api&P=0&h=180',3,65000,'A drink made by blending fresh fruits, milk or water, and ice. Smoothies have a fresh and nutritious taste, making them suitable as a light meal or snack throughout the day');

 CREATE TABLE bookings (
  id INT PRIMARY KEY auto_increment not null,
  user_id int,
  datetime datetime,
  total int,
  table_id int,
  FOREIGN KEY (table_id) REFERENCES tables (id),
  foreign key(user_id) references users (id)
);  

insert into bookings (user_id,datetime,total,table_id) values
        (3,'2023-12-23 10:00:00', 50000, 2), 
        (4, '2023-12-25 18:00:00', 90000, 3),
		(4, '2023-12-26 12:30:00', 65000, 2),
		(5,'2023-12-23 19:30:00', 80000, 4),
		(5, '2023-12-24 14:00:00', 70000, 1),
		(6, '2023-12-25 20:00:00', 120000, 2),
		(6,'2023-12-26 17:30:00', 95000, 3),
		(6, '2023-12-23 11:30:00', 75000, 1),
		(4, '2023-12-24 16:45:00', 60000, 4),
		(6, '2023-12-25 14:30:00', 85000, 2),
		(6, '2023-12-26 19:15:00', 70000, 3),
       (3, '2023-12-24 15:30:00', 75000, 1);

CREATE TABLE booking_products(
	id int primary key auto_increment not null,
	booking_id int not null,
	product_id int,
  quantity INT,
	FOREIGN KEY (booking_id) REFERENCES bookings (id),
	foreign key (product_id) references products (id)
);
insert into booking_products (booking_id,product_id,quantity)
values 	(1,2,2),
		(2,4,3),
        (3,5,1),
        (4,6,2),
        (4,8,2),
        (2,3,2),
		(1,4,2);
select * from table_types;
select * from bookings;
select * from users;
select * from roles;
