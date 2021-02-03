-- // user table creation
CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
   `phone` int(15) not null,
    profession varchar(30) not null,
    address_area int not null,
    city int not null,


  `to_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
---------------------------------------------------------------------------------------------------------------
---------------------------------------------------------------------------------------------------------------
insert into users values(1,'abc','aassdrefbdg','abc@gmail.com',098765,1,2,3,now());
  insert into users values(2,'abcd','aassdrefbde','abcd@gmail.com',098765,1,2,3,now())
alter table users modify profession int(255) not null;Commit;
