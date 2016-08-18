
CREATE TABLE `admin_login` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(200) NOT NULL COMMENT 'MD5',
  `pin` varchar(10) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `dob` date DEFAULT NULL,
  `profile_picture` varchar(100) NOT NULL,
  `admin_type` int(1) NOT NULL COMMENT '1=Super Admin | 2 = Admin',
  `status` int(1) NOT NULL DEFAULT '0' COMMENT '0=Disable | 1=Enable',
  `last_login` datetime DEFAULT NULL,
  `created_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `admin_login` (`id`, `username`, `email`, `password`, `pin`, `first_name`, `last_name`, `dob`, `profile_picture`, `admin_type`, `status`, `last_login`, `created_date`) VALUES
(1, 'superadmin', 'superadmin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', '0000', 'Super', 'Admin', '2016-08-16', '', 1, 1, '2016-08-17 06:45:30', '2016-08-16 00:00:00');

ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `admin_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;