INSERT INTO `fitness360`.`member` (`M_ID`, `FNAME`, `LNAME`, `PHONE_NO`, `EMAIL`, `DOB`, `GENDER`, `SSN`, `ADDRESS`) VALUES ('1', 'George', 'King', '03340135230', 'gk@gmail.com', '1987-04-03', 'M', '17895-4563271-7', 'Street 54');
INSERT INTO `fitness360`.`member` (`M_ID`, `FNAME`, `LNAME`, `PHONE_NO`, `EMAIL`, `DOB`, `GENDER`, `SSN`, `ADDRESS`) VALUES ('2', 'Allison', 'Tyres', '03450111230', 'at25@gmail.com', '1990-02-04', 'F', '12345-6789323-3', 'Street 57');
INSERT INTO `fitness360`.`member` (`M_ID`, `FNAME`, `LNAME`, `PHONE_NO`, `EMAIL`, `DOB`, `GENDER`, `SSN`, `ADDRESS`) VALUES ('3', 'Percy', 'Jackson', '03340111551', 'pj@gmail.com', '1997-04-02', 'M', '52445-6789123-4', 'Street 56');
INSERT INTO `fitness360`.`member` (`M_ID`, `FNAME`, `LNAME`, `PHONE_NO`, `EMAIL`, `DOB`, `GENDER`, `SSN`, `ADDRESS`) VALUES ('4', 'Johnny', 'Bravo', '03340428589', 'jb246@gmail.com', '1993-06-25', 'M', '12135-7892423-1', 'Street 55');
INSERT INTO `fitness360`.`member` (`M_ID`, `FNAME`, `LNAME`, `PHONE_NO`, `EMAIL`, `DOB`, `GENDER`, `SSN`, `ADDRESS`) VALUES ('5', 'Carlo', 'Devinson', '03135611230', 'cd235@gmail.com', '1994-05-14', 'M', '12145-6364123-5', 'Street 58');
INSERT INTO `fitness360`.`member` (`M_ID`, `FNAME`, `LNAME`, `PHONE_NO`, `EMAIL`, `DOB`, `GENDER`, `SSN`, `ADDRESS`) VALUES ('6', 'Maya', 'Angelo', '03223566230', 'ma16@gmail.com', '1993-07-19', 'F', '11345-6781353-1', 'Street 41');
INSERT INTO `fitness360`.`member` (`M_ID`, `FNAME`, `LNAME`, `PHONE_NO`, `EMAIL`, `DOB`, `GENDER`, `SSN`, `ADDRESS`) VALUES ('7', 'Miya', 'Carter', '03340111230', 'mc136@gmail.com', '1997-04-23', 'F', '13524-1717177-1', 'Street 45');
INSERT INTO `fitness360`.`member` (`M_ID`, `FNAME`, `LNAME`, `PHONE_NO`, `EMAIL`, `DOB`, `GENDER`, `SSN`, `ADDRESS`) VALUES ('8', 'Maliha', 'Sameen', '03349911230', 'ms@gmail.com', '1997-01-23', 'F', '12315-6715123-1', 'Street 47');
INSERT INTO `fitness360`.`member` (`M_ID`, `FNAME`, `LNAME`, `PHONE_NO`, `EMAIL`, `DOB`, `GENDER`, `SSN`, `ADDRESS`) VALUES ('9', 'Ryan', 'Goshling', '03339911230', 'rg@gmail.com', '1994-06-04', 'M', '09015-3156311-5', 'Street 49');

INSERT INTO `fitness360`.`locker` (`LOCKER_ID`, `M_ID`) VALUES ('1', '1');
INSERT INTO `fitness360`.`locker` (`LOCKER_ID`, `M_ID`) VALUES ('2', '2');
INSERT INTO `fitness360`.`locker` (`LOCKER_ID`, `M_ID`) VALUES ('3', '3');
INSERT INTO `fitness360`.`locker` (`LOCKER_ID`, `M_ID`) VALUES ('4', '4');
INSERT INTO `fitness360`.`locker` (`LOCKER_ID`, `M_ID`) VALUES ('5', '5');
INSERT INTO `fitness360`.`locker` (`LOCKER_ID`, `M_ID`) VALUES ('6', '6');
INSERT INTO `fitness360`.`locker` (`LOCKER_ID`, `M_ID`) VALUES ('7', '7');
INSERT INTO `fitness360`.`locker` (`LOCKER_ID`, `M_ID`) VALUES ('8', '8');
INSERT INTO `fitness360`.`locker` (`LOCKER_ID`, `M_ID`) VALUES ('9', '9');
INSERT INTO `fitness360`.`locker` (`LOCKER_ID`) VALUES ('10');

INSERT INTO `fitness360`.`employee` (`E_ID`, `SSN`, `FNAME`, `LNAME`, `DOB`, `SALARY`, `ADDRESS`, `PHONE_NO`, `EMAIL_ID`) VALUES ('1', '12345-9087564-3', 'Daniel', 'Brown', '1989-01-01', '60,000', 'Street 62', '03340111551', 'db@gmail.com');
INSERT INTO `fitness360`.`employee` (`E_ID`, `SSN`, `FNAME`, `LNAME`, `DOB`, `SALARY`, `ADDRESS`, `PHONE_NO`, `EMAIL_ID`) VALUES ('2', '90876-6432892-4', 'Albert', 'Einstein', '1990-04-03', '60,000', 'Street 64', '03340428589', 'ae@gmail.com');
INSERT INTO `fitness360`.`employee` (`E_ID`, `SSN`, `FNAME`, `LNAME`, `DOB`, `SALARY`, `ADDRESS`, `PHONE_NO`, `EMAIL_ID`) VALUES ('3', '56789-5674239-1', 'Alaric', 'Saltzman', '1992-05-03', '60,000', 'Street 91', '03135611230', 'as@gmail.com');
INSERT INTO `fitness360`.`employee` (`E_ID`, `SSN`, `FNAME`, `LNAME`, `DOB`, `SALARY`, `ADDRESS`, `PHONE_NO`, `EMAIL_ID`) VALUES ('4', '45632-7864562-5', 'Josette', 'Laughlin', '1994-06-05', '50,000', 'Street 75', '03223566230', 'jl@gmail.com');
INSERT INTO `fitness360`.`employee` (`E_ID`, `SSN`, `FNAME`, `LNAME`, `DOB`, `SALARY`, `ADDRESS`, `PHONE_NO`, `EMAIL_ID`) VALUES ('5', '86574-4567832-9', 'Archie', 'Andrews', '1991-07-03', '50,000', 'Street 82', '03340111230', 'aa@gmail.com');
INSERT INTO `fitness360`.`employee` (`E_ID`, `SSN`, `FNAME`, `LNAME`, `DOB`, `SALARY`, `ADDRESS`, `PHONE_NO`, `EMAIL_ID`) VALUES ('6', '45673-8653224-1', 'Isabella', 'Crutz', '1990-09-05', '50,000', 'Street 54', '03349911230', 'ic@gmail.com');
INSERT INTO `fitness360`.`employee` (`E_ID`, `SSN`, `FNAME`, `LNAME`, `DOB`, `SALARY`, `ADDRESS`, `PHONE_NO`, `EMAIL_ID`) VALUES ('7', '34567-6874322-5', 'FP', 'Jones', '1989-05-10', '50,000', 'Street 59', '03339911230', 'fp@gmail.com');

INSERT INTO `fitness360`.`coach` (`C_ID`, `TIMINGS`, `SNAME`) VALUES ('1', '3:00pm-4:00pm', 'Badminton');
INSERT INTO `fitness360`.`coach` (`C_ID`, `TIMINGS`, `SNAME`) VALUES ('2', '2:00pm-3:00pm', 'Football');
INSERT INTO `fitness360`.`coach` (`C_ID`, `TIMINGS`, `SNAME`) VALUES ('3', '1:00pm-2:00pm', 'Basketball');

INSERT INTO `fitness360`.`trainer` (`T_ID`, `TIMINGS`, `ROOM_NO`) VALUES ('4', '4:00pm-5:00pm', 'C230');
INSERT INTO `fitness360`.`trainer` (`T_ID`, `TIMINGS`, `ROOM_NO`) VALUES ('5', '5:00pm-6:00pm', 'C231');
INSERT INTO `fitness360`.`trainer` (`T_ID`, `TIMINGS`, `ROOM_NO`) VALUES ('6', '11:00am-12:00pm', 'C232');
INSERT INTO `fitness360`.`trainer` (`T_ID`, `TIMINGS`, `ROOM_NO`) VALUES ('7', '12:00pm-1:00pm', 'C233');

INSERT INTO `fitness360`.`court_entry` (`CE_ID`, `M_ID`, `SPORT_NAME`, `TIME_IN`, `TIME_OUT`) VALUES ('1', '2', 'Badminton', '2018-07-29 06:12:13', '2018-07-29 07:12:13');
INSERT INTO `fitness360`.`court_entry` (`CE_ID`, `M_ID`, `SPORT_NAME`, `TIME_IN`, `TIME_OUT`) VALUES ('2', '1', 'Badminton', '2018-07-29 07:12:13', '2018-07-29 08:12:13');
INSERT INTO `fitness360`.`court_entry` (`CE_ID`, `M_ID`, `SPORT_NAME`, `TIME_IN`, `TIME_OUT`) VALUES ('3', '4', 'Table Tennis', '2018-07-29 07:22:13', '2018-07-29 08:22:13');
INSERT INTO `fitness360`.`court_entry` (`CE_ID`, `M_ID`, `SPORT_NAME`, `TIME_IN`, `TIME_OUT`) VALUES ('4', '3', 'Table Tennis', '2018-07-29 06:20:13', '2018-07-29 07:20:13');
INSERT INTO `fitness360`.`court_entry` (`CE_ID`, `M_ID`, `SPORT_NAME`, `TIME_IN`, `TIME_OUT`) VALUES ('5', '6', 'Basketball', '2018-07-29 06:50:13', '2018-07-29 07:50:13');
INSERT INTO `fitness360`.`court_entry` (`CE_ID`, `M_ID`, `SPORT_NAME`, `TIME_IN`, `TIME_OUT`) VALUES ('6', '5', 'Football', '2018-07-29 06:25:13', '2018-07-29 07:25:13');
INSERT INTO `fitness360`.`court_entry` (`CE_ID`, `M_ID`, `SPORT_NAME`, `TIME_IN`, `TIME_OUT`) VALUES ('7', '7', 'Basketball', '2018-07-29 06:35:13', '2018-07-29 07:35:13');

INSERT INTO `fitness360`.`gym_entry` (`GE_ID`, `M_ID`, `TIME_IN`, `TIME_OUT`) VALUES ('1', '8', '2018-07-29 06:12:13', '2018-07-29 07:12:13');
INSERT INTO `fitness360`.`gym_entry` (`GE_ID`, `M_ID`, `TIME_IN`, `TIME_OUT`) VALUES ('2', '9', '2018-07-29 07:12:13', '2018-07-29 08:12:13');