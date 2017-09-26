CREATE TABLE IF NOT EXISTS `signup_and_login_table` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(200) NOT NULL,
  `lastname` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `date` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `signup_and_login_table`
--

INSERT INTO `signup_and_login_table` (`id`, `firstname`, `lastname`, `email`, `password`, `date`) VALUES
(1, 'Vasplus', 'Blog', 'vasplus@myserver.com', 'e10adc3949ba59abbe56e057f20f883e', '08-10-2012');