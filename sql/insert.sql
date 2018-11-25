use gourmet;

INSERT INTO `user`(`id`, `pswd`, `city`, `mobile_no`) VALUES ('janglee','123','jabalpur',1234567890), 
('oola','123','jabalpur',1234567891), 
('mota','123','jabalpur',1234567892);

INSERT INTO `restaurant`(`name`, `address`, `mobile_no`, `star`, `city`, `open_time`, `close_time`, `veg_nonveg`) VALUES 
('phc','iiitdmj',1234567890,0,'jabalpur','09:00','22:00','Veg'), 
('cc','iiitdmj',1234567890,0,'jabalpur','00:00','24:00','both'), 
('lhtc','iiitdmj',1234567890,0,'jabalpur','09:00','17:00','Nonveg'), 
('h4','iiitdmj',1234567890,0,'jabalpur','00:00','24:00','Veg'), 
('h1','iiitdmj',1234567890,0,'jabalpur','06:00','22:30','Veg'),
('h3','iiitdmj',1234567890,0,'jabalpur','05:00','23:00','Nonveg');

INSERT INTO `food`(`name`, `type`) VALUES 
('dosa','veg'), 
('poha','veg'), 
('coco','veg'), 
('tatti',null), 
('vada','veg'), 
('tea','veg'), 
('chiken curry','nonveg'), 
('chiken paneer','nonveg'), 
('chiken Biryani','nonveg'), 
('tanduri chiken','nonveg'),
('pig','nonveg');


INSERT INTO `serves`(`r_id`, `f_id`, `star`, `price`, `discount`) VALUES 
(1,1,1,10,0), 
(1,2,1,20,0), 
(1,3,1,30,0), 
(1,6,1,40,0), 
(1,5,1,50,0), 
(2,1,1,15,0), 
(2,2,1,15,0), 
(2,9,1,25,0), 
(2,7,1,35,0), 
(2,11,1,45,0), 
(3,7,1,15,0), 
(3,8,1,15,0), 
(3,9,1,25,0), 
(3,10,1,35,0), 
(3,11,1,45,0), 
(4,1,1,15,0), 
(4,2,1,15,0), 
(4,3,1,25,0), 
(4,6,1,35,0), 
(4,5,1,45,0), 
(5,1,1,15,0), 
(5,2,1,15,0), 
(5,3,1,25,0), 
(6,11,1,15,0), 
(6,9,1,15,0), 
(6,7,1,25,0);


INSERT INTO `seats`(`r_id`, `total`, `available`) VALUES 
(1,10,0), 
(2,20,0), 
(3,30,0), 
(4,40,0), 
(5,50,0), 
(6,60,0);

INSERT INTO `owner`(`u_id`, `r_id`) VALUES 
('janglee',1), 
('janglee',2), 
('janglee',3), 
('oola',1), 
('oola',4),
('oola',2),
('mota',2), 
('mota',4), 
('mota',5), 
('janglee',6);

INSERT INTO `books` (`u_id`, `r_id`, `qnty`, `time`, `duration`) VALUES 
('bhalu', '5', 5, '19:30:00', '21:30:00'),
('janglee', '5', 5, '16:30:00', '20:30:00'), 
('bhalu', '5', 5, '20:30:00', '21:30:00'),
('bhalu', '5', 5, '16:30:00', '19:00:00'), 
('bhalu', '5', 5, '19:30:00', '21:00:00'), 
('bhalu', '5', 5, '18:30:00', '21:00:00'); 