#
# TABLE STRUCTURE FOR: acc_coa
#

DROP TABLE IF EXISTS `acc_coa`;

CREATE TABLE `acc_coa` (
  `HeadCode` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `HeadName` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `PHeadName` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `HeadLevel` int(11) NOT NULL,
  `IsActive` tinyint(1) NOT NULL,
  `IsTransaction` tinyint(1) NOT NULL,
  `IsGL` tinyint(1) NOT NULL,
  `HeadType` char(1) COLLATE utf8_unicode_ci NOT NULL,
  `IsBudget` tinyint(1) NOT NULL,
  `IsDepreciation` tinyint(1) NOT NULL,
  `DepreciationRate` decimal(18,2) NOT NULL,
  `CreateBy` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `CreateDate` datetime NOT NULL,
  `UpdateBy` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `UpdateDate` datetime NOT NULL,
  PRIMARY KEY (`HeadName`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('502020000004', '1-', 'Account Payable', '2', '1', '1', '0', 'L', '0', '0', '0.00', '', '2021-03-16 14:35:53', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('502020000001', '1-MahbubMisor', 'Account Payable', '2', '1', '1', '0', 'L', '0', '0', '0.00', '', '2021-03-16 11:20:54', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('502020000002', '2-TestUser', 'Account Payable', '2', '1', '1', '0', 'L', '0', '0', '0.00', '', '2021-03-16 12:11:49', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('502020000003', '3-supervisor', 'Account Payable', '2', '1', '1', '0', 'L', '0', '0', '0.00', '', '2021-03-16 12:13:22', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('302', 'Academic bill', 'Income', '1', '1', '1', '0', 'I', '0', '0', '0.00', '', '2021-03-16 14:10:06', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('50202', 'Account Payable', 'Current Liabilities', '2', '1', '0', '1', 'L', '0', '0', '0.00', 'admin', '2015-10-15 19:50:43', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('1', 'Assets', 'COA', '0', '1', '0', '0', 'A', '0', '0', '0.00', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('10201020001', 'Brac', 'Cash At Bank', '4', '1', '1', '0', 'A', '0', '0', '0.00', '', '2021-03-16 11:15:25', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('403', 'Breakfast', 'Expence', '1', '1', '1', '0', 'E', '0', '0', '0.00', '', '2021-03-16 14:08:02', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('10201', 'Cash & Cash Equivalent', 'Current Asset', '2', '1', '0', '1', 'A', '0', '0', '0.00', '2', '2019-11-24 07:55:22', 'admin', '2015-10-15 15:57:55');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('1020102', 'Cash At Bank', 'Cash & Cash Equivalent', '3', '1', '0', '1', 'A', '0', '0', '0.00', '', '2019-11-23 10:58:48', 'admin', '2015-10-15 15:32:42');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('1020101', 'Cash In Hand', 'Cash & Cash Equivalent', '3', '1', '1', '1', 'A', '0', '0', '0.00', '2', '2018-07-31 12:56:28', 'admin', '2016-05-23 12:05:43');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('102', 'Current Asset', 'Assets', '1', '1', '0', '0', 'A', '0', '0', '0.00', '', '0000-00-00 00:00:00', 'admin', '2018-07-07 11:23:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('502', 'Current Liabilities', 'Liabilities', '1', '1', '0', '0', 'L', '0', '0', '0.00', 'anwarul', '2014-08-30 13:18:20', 'admin', '2015-10-15 19:49:21');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('10201020002', 'Dutch Bangla Bank', 'Cash At Bank', '4', '1', '1', '0', 'A', '0', '0', '0.00', '', '2021-03-16 11:16:12', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('1020301', 'Employee Receivable', 'Account Receivable', '3', '1', '0', '1', 'A', '0', '0', '0.00', '2', '2018-10-17 11:13:45', 'admin', '2018-07-07 12:31:42');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('401', 'Employee Salary', 'Expence', '1', '1', '0', '0', 'E', '0', '0', '0.00', '2', '2019-11-24 12:15:56', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('2', 'Equity', 'COA', '0', '1', '0', '0', 'L', '0', '0', '0.00', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('4', 'Expence', 'COA', '0', '1', '0', '0', 'E', '0', '0', '0.00', '2', '2019-11-24 05:45:24', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('3', 'Income', 'COA', '0', '1', '0', '0', 'I', '0', '0', '0.00', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('5', 'Liabilities', 'COA', '0', '1', '0', '0', 'L', '0', '0', '0.00', 'admin', '2013-07-04 12:32:07', 'admin', '2015-10-15 19:46:54');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('402', 'Lunch', 'Expence', '1', '1', '1', '0', 'E', '0', '0', '0.00', '', '2021-03-16 14:07:50', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('101', 'Non Current Assets', 'Assets', '1', '1', '0', '0', 'A', '0', '0', '0.00', '', '0000-00-00 00:00:00', 'admin', '2015-10-15 15:29:11');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('501', 'Non Current Liabilities', 'Liabilities', '1', '1', '0', '0', 'L', '0', '0', '0.00', 'anwarul', '2014-08-30 13:18:20', 'admin', '2015-10-15 19:49:21');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('404', 'Snacks', 'Expence', '1', '1', '1', '0', 'E', '0', '0', '0.00', '', '2021-03-16 14:08:09', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('301', 'Soft Sale', 'Income', '1', '1', '1', '0', 'I', '0', '0', '0.00', '', '2021-03-16 14:09:55', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('303', 'Support', 'Income', '1', '1', '1', '0', 'I', '0', '0', '0.00', '', '2021-03-16 14:10:45', '', '0000-00-00 00:00:00');


#
# TABLE STRUCTURE FOR: acc_transaction
#

DROP TABLE IF EXISTS `acc_transaction`;

CREATE TABLE `acc_transaction` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `VNo` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Vtype` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `VDate` date DEFAULT NULL,
  `COAID` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Narration` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `Debit` decimal(18,2) DEFAULT NULL,
  `Credit` decimal(18,2) DEFAULT NULL,
  `StoreID` int(11) NOT NULL,
  `IsPosted` char(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `CreateBy` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `CreateDate` datetime DEFAULT NULL,
  `UpdateBy` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `UpdateDate` datetime DEFAULT NULL,
  `IsAppove` char(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  UNIQUE KEY `ID` (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('2', 'Journal-1', 'JV', '2021-03-16', 'j-11122333', 'test Journal-1', '50000.00', '60000.00', '0', '1', '1', '2021-03-16 12:23:45', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('3', 'Journal-1', 'JV', '2021-03-16', '10201020001', 'test Journal-1', '5000.00', '4000.00', '0', '1', '1', '2021-03-16 12:23:45', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('4', 'Contra-1', 'Contra', '2021-03-16', '502020000003', 'Contra-1 test', '6908.00', '5900.00', '0', '1', '1', '2021-03-16 12:25:17', NULL, NULL, '0');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('5', 'CV-1', 'CV', '2021-03-16', '502020000001', '', '0.00', '7000.00', '0', '1', '1', '2021-03-16 12:30:23', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('6', 'CV-1', 'CV', '2021-03-16', '502020000001', '', '0.00', '7000.00', '0', '1', '1', '2021-03-16 12:30:23', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('7', 'CV-1', 'CV', '2021-03-16', '1020101', 'Credit Vourcher from 1-MahbubMisor', '7000.00', '0.00', '0', '1', '1', '2021-03-16 12:30:23', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('8', 'DV-1', 'DV', '2021-03-16', '502020000001', 'yyyy', '8000.00', '0.00', '0', '1', '1', '2021-03-16 12:30:59', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('9', 'DV-1', 'DV', '2021-03-16', '1020101', 'Debit voucher from 1-MahbubMisor', '0.00', '8000.00', '0', '1', '1', '2021-03-16 12:30:59', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('10', 'v-1111', 'Expense', '2021-03-16', '404', 'test', '6000.00', '0.00', '0', '1', '', '2021-03-16 14:09:03', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('11', 'v-1111', 'Expense', '2021-03-16', '10201020001', 'test', '0.00', '6000.00', '0', '1', '', '2021-03-16 14:09:03', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('12', 'v-222', 'Expense', '2021-03-16', '403', 'test2', '4000.00', '0.00', '0', '1', '', '2021-03-16 14:09:03', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('13', 'v-222', 'Expense', '2021-03-16', '10201020002', 'test2', '0.00', '4000.00', '0', '1', '', '2021-03-16 14:09:03', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('14', 'v-333', 'Expense', '2021-03-16', '402', 'test1', '8000.00', '0.00', '0', '1', '', '2021-03-16 14:09:03', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('15', 'v-333', 'Expense', '2021-03-16', '1020101', 'test1', '0.00', '8000.00', '0', '1', '', '2021-03-16 14:09:03', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('16', '11111', 'Income', '2021-03-16', '302', 'ghgh', '0.00', '50000.00', '0', '1', '', '2021-03-16 14:10:45', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('17', '11111', 'Income', '2021-03-16', '10201020001', 'ghgh', '50000.00', '0.00', '0', '1', '', '2021-03-16 14:10:45', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('18', '22222', 'Income', '2021-03-16', '301', 'tyty', '0.00', '60000.00', '0', '1', '', '2021-03-16 14:10:45', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('19', '22222', 'Income', '2021-03-16', '10201020002', 'tyty', '60000.00', '0.00', '0', '1', '', '2021-03-16 14:10:45', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('20', '333333', 'Income', '2021-03-16', '303', 'eeee', '0.00', '30000.00', '0', '1', '', '2021-03-16 14:10:45', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('21', '333333', 'Income', '2021-03-16', '1020101', 'eeee', '30000.00', '0.00', '0', '1', '', '2021-03-16 14:10:45', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('22', '1', 'GrantLoan', '2021-03-16', '1020101', 'Cash in hand Credit For Employee Id2', '0.00', '50000.00', '0', '1', '1', '2021-03-16 14:18:34', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('23', '1', 'Loan Grant', '2021-03-16', '502020000002', 'Loan for 2', '50000.00', '0.00', '0', '1', '1', '2021-03-16 14:18:34', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('24', '1', 'LoanInstall', '2021-03-16', '1020101', 'Cash in hand Debit For Employee Loan Id', '25500.00', '0.00', '0', '1', '1', '2021-03-16 14:18:59', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('25', '1', 'LoanInstall', '2021-03-16', '502020000002', 'Loan Installment Receive', '0.00', '25500.00', '0', '1', '1', '2021-03-16 14:18:59', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('26', '1', 'LoanInstall', '2021-03-16', '1020101', 'Cash in hand Debit For Employee Loan Id', '25500.00', '0.00', '0', '1', '1', '2021-03-16 14:19:43', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('27', '1', 'LoanInstall', '2021-03-16', '502020000002', 'Loan Installment Receive', '0.00', '25500.00', '0', '1', '1', '2021-03-16 14:19:43', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('28', 'March 2021', 'Generated Salary', '2021-03-16', '502020000001', 'Salary For Employee Id1', '0.00', '1823.00', '0', '1', '1', '2021-03-16 14:22:42', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('29', 'March 2021', 'Generated Salary', '2021-03-16', '502020000002', 'Salary For Employee Id2', '0.00', '1280.00', '0', '1', '1', '2021-03-16 14:22:42', NULL, NULL, '1');


#
# TABLE STRUCTURE FOR: appsetting
#

DROP TABLE IF EXISTS `appsetting`;

CREATE TABLE `appsetting` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `latitude` varchar(30) DEFAULT NULL,
  `longitude` varchar(30) DEFAULT NULL,
  `acceptablerange` int(11) DEFAULT NULL,
  `googleapi_authkey` text DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

INSERT INTO `appsetting` (`id`, `latitude`, `longitude`, `acceptablerange`, `googleapi_authkey`) VALUES ('1', '23.829312399999996', '90.42076019999999', '20', 'Authorization: Key=AAAACc-ZrPQ:APA91bH0tBWMWQOq9l3RBXdZ9O0-g8rUhISTVgRtan_59iOuzbeuSK8bUcbHL9IBJ9B8loKTbNfXgwO1KIi6ZFfXxI0IyHvw0oIO9MOxPeovbQfNlVrye9tfocgtgCtm49Zrd-NM4_VJ');


#
# TABLE STRUCTURE FOR: attendance_history
#

DROP TABLE IF EXISTS `attendance_history`;

CREATE TABLE `attendance_history` (
  `atten_his_id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `id` int(11) NOT NULL DEFAULT 0,
  `state` text NOT NULL,
  `time` datetime NOT NULL,
  PRIMARY KEY (`atten_his_id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

INSERT INTO `attendance_history` (`atten_his_id`, `uid`, `id`, `state`, `time`) VALUES ('1', '1', '0', '1', '2021-03-16 07:50:00');
INSERT INTO `attendance_history` (`atten_his_id`, `uid`, `id`, `state`, `time`) VALUES ('2', '1', '0', '1', '2021-03-16 17:50:00');
INSERT INTO `attendance_history` (`atten_his_id`, `uid`, `id`, `state`, `time`) VALUES ('3', '1', '0', '1', '2021-03-16 18:05:00');
INSERT INTO `attendance_history` (`atten_his_id`, `uid`, `id`, `state`, `time`) VALUES ('4', '1', '0', '1', '2021-03-16 19:30:00');
INSERT INTO `attendance_history` (`atten_his_id`, `uid`, `id`, `state`, `time`) VALUES ('15', '1', '0', '1', '2021-03-15 10:30:00');
INSERT INTO `attendance_history` (`atten_his_id`, `uid`, `id`, `state`, `time`) VALUES ('16', '1', '0', '1', '2021-03-15 15:50:00');
INSERT INTO `attendance_history` (`atten_his_id`, `uid`, `id`, `state`, `time`) VALUES ('17', '1', '0', '1', '2021-03-15 16:00:00');
INSERT INTO `attendance_history` (`atten_his_id`, `uid`, `id`, `state`, `time`) VALUES ('18', '1', '0', '1', '2021-03-15 23:25:00');
INSERT INTO `attendance_history` (`atten_his_id`, `uid`, `id`, `state`, `time`) VALUES ('19', '2', '0', '1', '2021-03-16 09:20:00');
INSERT INTO `attendance_history` (`atten_his_id`, `uid`, `id`, `state`, `time`) VALUES ('20', '2', '0', '1', '2021-03-16 13:57:22');
INSERT INTO `attendance_history` (`atten_his_id`, `uid`, `id`, `state`, `time`) VALUES ('21', '2', '0', '1', '2021-03-16 14:05:00');
INSERT INTO `attendance_history` (`atten_his_id`, `uid`, `id`, `state`, `time`) VALUES ('22', '2', '0', '1', '2021-03-16 22:45:00');


#
# TABLE STRUCTURE FOR: award
#

DROP TABLE IF EXISTS `award`;

CREATE TABLE `award` (
  `award_id` int(11) NOT NULL AUTO_INCREMENT,
  `award_name` varchar(50) NOT NULL,
  `aw_description` varchar(200) NOT NULL,
  `awr_gift_item` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `employee_id` varchar(30) NOT NULL,
  `awarded_by` varchar(30) NOT NULL,
  PRIMARY KEY (`award_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO `award` (`award_id`, `award_name`, `aw_description`, `awr_gift_item`, `date`, `employee_id`, `awarded_by`) VALUES ('1', 'Test', 'fgfgfg', 'test item', '2021-03-16', '1', 'test');


#
# TABLE STRUCTURE FOR: bank_information
#

DROP TABLE IF EXISTS `bank_information`;

CREATE TABLE `bank_information` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `bank_name` varchar(250) NOT NULL,
  `account_name` varchar(200) DEFAULT NULL,
  `account_number` varchar(100) NOT NULL,
  `branch_name` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

INSERT INTO `bank_information` (`id`, `bank_name`, `account_name`, `account_number`, `branch_name`) VALUES ('1', 'Brac', 'test brac', '12121212', 'Dhaka-1212');
INSERT INTO `bank_information` (`id`, `bank_name`, `account_name`, `account_number`, `branch_name`) VALUES ('2', 'Dutch Bangla Bank', 'DBBL-121212', '22222222222', 'Gulshan-2');


#
# TABLE STRUCTURE FOR: candidate_basic_info
#

DROP TABLE IF EXISTS `candidate_basic_info`;

CREATE TABLE `candidate_basic_info` (
  `can_id` varchar(20) NOT NULL,
  `first_name` varchar(11) CHARACTER SET latin1 NOT NULL,
  `last_name` varchar(30) CHARACTER SET latin1 NOT NULL,
  `email` varchar(30) CHARACTER SET latin1 NOT NULL,
  `phone` varchar(20) CHARACTER SET latin1 NOT NULL,
  `alter_phone` varchar(20) CHARACTER SET latin1 NOT NULL,
  `present_address` varchar(100) CHARACTER SET latin1 NOT NULL,
  `parmanent_address` varchar(100) CHARACTER SET latin1 NOT NULL,
  `picture` text DEFAULT NULL,
  `ssn` varchar(50) NOT NULL,
  `state` varchar(30) NOT NULL,
  `city` varchar(30) NOT NULL,
  `zip` int(11) NOT NULL,
  PRIMARY KEY (`can_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `candidate_basic_info` (`can_id`, `first_name`, `last_name`, `email`, `phone`, `alter_phone`, `present_address`, `parmanent_address`, `picture`, `ssn`, `state`, `city`, `zip`) VALUES ('16159016537227L', 'Rasel', 'Ahmed', 'rasel@gmail.com', '6565656', '', '', '', './application/modules/recruitment/assets/images/2021-03-16/def.jpg', '', 'Alabama', '', '0');


#
# TABLE STRUCTURE FOR: candidate_education_info
#

DROP TABLE IF EXISTS `candidate_education_info`;

CREATE TABLE `candidate_education_info` (
  `can_edu_id` int(11) NOT NULL AUTO_INCREMENT,
  `can_id` varchar(30) NOT NULL,
  `degree_name` varchar(30) CHARACTER SET latin1 NOT NULL,
  `university_name` varchar(50) CHARACTER SET latin1 NOT NULL,
  `cgp` varchar(30) CHARACTER SET latin1 NOT NULL,
  `comments` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `sequencee` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  PRIMARY KEY (`can_edu_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

INSERT INTO `candidate_education_info` (`can_edu_id`, `can_id`, `degree_name`, `university_name`, `cgp`, `comments`, `sequencee`) VALUES ('2', '16159016537227L', 'Bsc', 'UITS', '3.62', '', NULL);


#
# TABLE STRUCTURE FOR: candidate_interview
#

DROP TABLE IF EXISTS `candidate_interview`;

CREATE TABLE `candidate_interview` (
  `can_int_id` int(11) NOT NULL AUTO_INCREMENT,
  `can_id` varchar(30) CHARACTER SET latin1 NOT NULL,
  `job_adv_id` varchar(50) CHARACTER SET latin1 NOT NULL,
  `interview_date` varchar(30) CHARACTER SET latin1 NOT NULL,
  `interviewer_id` varchar(50) CHARACTER SET latin1 NOT NULL,
  `interview_marks` varchar(50) CHARACTER SET latin1 NOT NULL,
  `written_total_marks` varchar(50) CHARACTER SET latin1 NOT NULL,
  `mcq_total_marks` varchar(50) CHARACTER SET latin1 NOT NULL,
  `total_marks` varchar(30) NOT NULL,
  `recommandation` varchar(50) CHARACTER SET latin1 NOT NULL,
  `selection` varchar(50) CHARACTER SET latin1 NOT NULL,
  `details` varchar(50) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`can_int_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

INSERT INTO `candidate_interview` (`can_int_id`, `can_id`, `job_adv_id`, `interview_date`, `interviewer_id`, `interview_marks`, `written_total_marks`, `mcq_total_marks`, `total_marks`, `recommandation`, `selection`, `details`) VALUES ('1', '16159016537227L', '1', '2021-03-16', 'test', '20', '40', '30', '90', 'terer', 'ok', 'fgfgfg');


#
# TABLE STRUCTURE FOR: candidate_selection
#

DROP TABLE IF EXISTS `candidate_selection`;

CREATE TABLE `candidate_selection` (
  `can_sel_id` int(11) NOT NULL AUTO_INCREMENT,
  `can_id` varchar(30) CHARACTER SET latin1 NOT NULL,
  `employee_id` varchar(50) CHARACTER SET latin1 NOT NULL,
  `pos_id` varchar(30) CHARACTER SET latin1 NOT NULL,
  `selection_terms` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  PRIMARY KEY (`can_sel_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

INSERT INTO `candidate_selection` (`can_sel_id`, `can_id`, `employee_id`, `pos_id`, `selection_terms`) VALUES ('1', '16159016537227L', '1', '1', 'test');


#
# TABLE STRUCTURE FOR: candidate_shortlist
#

DROP TABLE IF EXISTS `candidate_shortlist`;

CREATE TABLE `candidate_shortlist` (
  `can_short_id` int(11) NOT NULL AUTO_INCREMENT,
  `can_id` varchar(30) CHARACTER SET latin1 NOT NULL,
  `job_adv_id` int(11) NOT NULL,
  `date_of_shortlist` varchar(50) CHARACTER SET latin1 NOT NULL,
  `interview_date` varchar(30) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`can_short_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

INSERT INTO `candidate_shortlist` (`can_short_id`, `can_id`, `job_adv_id`, `date_of_shortlist`, `interview_date`) VALUES ('1', '16159016537227L', '1', '2021-03-16', '2021-03-16');


#
# TABLE STRUCTURE FOR: candidate_workexperience
#

DROP TABLE IF EXISTS `candidate_workexperience`;

CREATE TABLE `candidate_workexperience` (
  `can_workexp_id` int(11) NOT NULL AUTO_INCREMENT,
  `can_id` varchar(30) CHARACTER SET latin1 NOT NULL,
  `company_name` varchar(50) CHARACTER SET latin1 NOT NULL,
  `working_period` varchar(50) CHARACTER SET latin1 NOT NULL,
  `duties` varchar(30) CHARACTER SET latin1 NOT NULL,
  `supervisor` varchar(50) CHARACTER SET latin1 NOT NULL,
  `sequencee` varchar(10) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`can_workexp_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# TABLE STRUCTURE FOR: custom_table
#

DROP TABLE IF EXISTS `custom_table`;

CREATE TABLE `custom_table` (
  `custom_id` int(11) NOT NULL AUTO_INCREMENT,
  `custom_field` varchar(100) NOT NULL,
  `custom_data_type` int(11) NOT NULL,
  `custom_data` text NOT NULL,
  `employee_id` varchar(20) NOT NULL,
  PRIMARY KEY (`custom_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# TABLE STRUCTURE FOR: department
#

DROP TABLE IF EXISTS `department`;

CREATE TABLE `department` (
  `dept_id` int(11) NOT NULL AUTO_INCREMENT,
  `department_name` varchar(100) NOT NULL,
  `parent_id` int(11) NOT NULL,
  PRIMARY KEY (`dept_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

INSERT INTO `department` (`dept_id`, `department_name`, `parent_id`) VALUES ('1', 'Software Development', '0');
INSERT INTO `department` (`dept_id`, `department_name`, `parent_id`) VALUES ('2', 'Digital Marketing', '0');
INSERT INTO `department` (`dept_id`, `department_name`, `parent_id`) VALUES ('3', 'SQA', '0');
INSERT INTO `department` (`dept_id`, `department_name`, `parent_id`) VALUES ('4', 'PHP', '1');
INSERT INTO `department` (`dept_id`, `department_name`, `parent_id`) VALUES ('5', 'Python', '1');
INSERT INTO `department` (`dept_id`, `department_name`, `parent_id`) VALUES ('6', 'Testing', '3');


#
# TABLE STRUCTURE FOR: deviceinfo
#

DROP TABLE IF EXISTS `deviceinfo`;

CREATE TABLE `deviceinfo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `device_ip` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO `deviceinfo` (`id`, `device_ip`) VALUES ('1', '192.168.1.201');


#
# TABLE STRUCTURE FOR: duty_type
#

DROP TABLE IF EXISTS `duty_type`;

CREATE TABLE `duty_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type_name` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

INSERT INTO `duty_type` (`id`, `type_name`) VALUES ('1', 'Full Time');
INSERT INTO `duty_type` (`id`, `type_name`) VALUES ('2', 'Part Time');
INSERT INTO `duty_type` (`id`, `type_name`) VALUES ('3', 'Contructual');
INSERT INTO `duty_type` (`id`, `type_name`) VALUES ('4', 'Other');


#
# TABLE STRUCTURE FOR: emp_attendance
#

DROP TABLE IF EXISTS `emp_attendance`;

CREATE TABLE `emp_attendance` (
  `att_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `employee_id` varchar(50) CHARACTER SET latin1 NOT NULL,
  `date` varchar(30) CHARACTER SET latin1 NOT NULL,
  `sign_in` varchar(30) CHARACTER SET latin1 DEFAULT NULL,
  `sign_out` varchar(30) CHARACTER SET latin1 DEFAULT NULL,
  `staytime` time DEFAULT NULL,
  PRIMARY KEY (`att_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# TABLE STRUCTURE FOR: employee_benifit
#

DROP TABLE IF EXISTS `employee_benifit`;

CREATE TABLE `employee_benifit` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `bnf_cl_code` varchar(100) NOT NULL,
  `bnf_cl_code_des` varchar(250) NOT NULL,
  `bnff_acural_date` date NOT NULL,
  `bnf_status` tinyint(4) NOT NULL,
  `employee_id` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# TABLE STRUCTURE FOR: employee_equipment
#

DROP TABLE IF EXISTS `employee_equipment`;

CREATE TABLE `employee_equipment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `employee_id` varchar(20) NOT NULL,
  `equipment_id` int(11) NOT NULL,
  `issue_date` date NOT NULL,
  `damarage_desc` text NOT NULL,
  `return_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

INSERT INTO `employee_equipment` (`id`, `employee_id`, `equipment_id`, `issue_date`, `damarage_desc`, `return_date`) VALUES ('3', '2', '1', '2021-03-16', '', '0000-00-00');
INSERT INTO `employee_equipment` (`id`, `employee_id`, `equipment_id`, `issue_date`, `damarage_desc`, `return_date`) VALUES ('4', '2', '4', '2021-03-16', '', '0000-00-00');
INSERT INTO `employee_equipment` (`id`, `employee_id`, `equipment_id`, `issue_date`, `damarage_desc`, `return_date`) VALUES ('5', '1', '2', '2021-03-16', '', '0000-00-00');
INSERT INTO `employee_equipment` (`id`, `employee_id`, `equipment_id`, `issue_date`, `damarage_desc`, `return_date`) VALUES ('6', '1', '3', '2021-03-16', '', '2021-03-16');


#
# TABLE STRUCTURE FOR: employee_history
#

DROP TABLE IF EXISTS `employee_history`;

CREATE TABLE `employee_history` (
  `emp_his_id` int(11) NOT NULL AUTO_INCREMENT,
  `employee_id` int(11) NOT NULL,
  `pos_id` varchar(30) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `middle_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(30) NOT NULL,
  `email` varchar(32) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `alter_phone` varchar(30) NOT NULL,
  `present_address` varchar(100) DEFAULT NULL,
  `parmanent_address` varchar(100) DEFAULT NULL,
  `picture` text DEFAULT NULL,
  `degree_name` varchar(30) DEFAULT NULL,
  `university_name` varchar(50) DEFAULT NULL,
  `cgp` varchar(30) DEFAULT NULL,
  `passing_year` varchar(30) DEFAULT NULL,
  `company_name` varchar(30) DEFAULT NULL,
  `working_period` varchar(30) DEFAULT NULL,
  `duties` varchar(30) DEFAULT NULL,
  `supervisor` varchar(30) DEFAULT NULL,
  `signature` text DEFAULT NULL,
  `is_admin` int(2) NOT NULL DEFAULT 0,
  `dept_id` int(11) DEFAULT NULL,
  `division_id` int(11) NOT NULL,
  `maiden_name` varchar(50) NOT NULL,
  `state` varchar(30) NOT NULL,
  `city` varchar(30) NOT NULL,
  `zip` int(11) NOT NULL,
  `citizenship` int(11) NOT NULL,
  `duty_type` int(11) NOT NULL,
  `hire_date` date NOT NULL,
  `original_hire_date` date NOT NULL,
  `termination_date` date NOT NULL,
  `termination_reason` text NOT NULL,
  `voluntary_termination` int(11) NOT NULL,
  `rehire_date` date NOT NULL,
  `rate_type` int(11) NOT NULL,
  `rate` float NOT NULL,
  `pay_frequency` int(11) NOT NULL,
  `pay_frequency_txt` varchar(50) NOT NULL,
  `hourly_rate2` float NOT NULL,
  `hourly_rate3` float NOT NULL,
  `home_department` varchar(100) NOT NULL,
  `department_text` varchar(100) NOT NULL,
  `class_code` varchar(50) NOT NULL,
  `class_code_desc` varchar(100) NOT NULL,
  `class_acc_date` date NOT NULL,
  `class_status` tinyint(4) NOT NULL,
  `is_super_visor` int(11) DEFAULT NULL,
  `super_visor_id` varchar(30) DEFAULT NULL,
  `supervisor_report` text NOT NULL,
  `dob` date NOT NULL,
  `gender` int(11) NOT NULL,
  `marital_status` int(11) NOT NULL,
  `ethnic_group` varchar(100) NOT NULL,
  `eeo_class_gp` varchar(100) NOT NULL,
  `ssn` varchar(50) NOT NULL,
  `work_in_state` int(11) NOT NULL,
  `live_in_state` int(11) NOT NULL,
  `home_email` varchar(50) NOT NULL,
  `business_email` varchar(50) NOT NULL,
  `home_phone` varchar(30) NOT NULL,
  `business_phone` varchar(30) NOT NULL,
  `cell_phone` varchar(30) NOT NULL,
  `emerg_contct` varchar(30) NOT NULL,
  `emrg_h_phone` varchar(30) NOT NULL,
  `emrg_w_phone` varchar(30) NOT NULL,
  `emgr_contct_relation` varchar(50) NOT NULL,
  `alt_em_contct` varchar(30) NOT NULL,
  `alt_emg_h_phone` varchar(30) NOT NULL,
  `alt_emg_w_phone` varchar(30) NOT NULL,
  `password` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`emp_his_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

INSERT INTO `employee_history` (`emp_his_id`, `employee_id`, `pos_id`, `first_name`, `middle_name`, `last_name`, `email`, `phone`, `alter_phone`, `present_address`, `parmanent_address`, `picture`, `degree_name`, `university_name`, `cgp`, `passing_year`, `company_name`, `working_period`, `duties`, `supervisor`, `signature`, `is_admin`, `dept_id`, `division_id`, `maiden_name`, `state`, `city`, `zip`, `citizenship`, `duty_type`, `hire_date`, `original_hire_date`, `termination_date`, `termination_reason`, `voluntary_termination`, `rehire_date`, `rate_type`, `rate`, `pay_frequency`, `pay_frequency_txt`, `hourly_rate2`, `hourly_rate3`, `home_department`, `department_text`, `class_code`, `class_code_desc`, `class_acc_date`, `class_status`, `is_super_visor`, `super_visor_id`, `supervisor_report`, `dob`, `gender`, `marital_status`, `ethnic_group`, `eeo_class_gp`, `ssn`, `work_in_state`, `live_in_state`, `home_email`, `business_email`, `home_phone`, `business_phone`, `cell_phone`, `emerg_contct`, `emrg_h_phone`, `emrg_w_phone`, `emgr_contct_relation`, `alt_em_contct`, `alt_emg_h_phone`, `alt_emg_w_phone`, `password`) VALUES ('1', '1', '1', 'Mahbub', '', 'Misor', 'msmisor5@example.com', '029309434', '', NULL, NULL, './application/modules/employee/assets/images/2021-03-16/m4.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '4', '0', '', 'Afghanistan', '', '0', '1', '1', '2021-03-16', '2021-03-16', '1970-01-01', '', '0', '1970-01-01', '1', '70', '4', '', '0', '0', '', '', '', '', '1970-01-01', '1', '0', '', '', '1992-03-16', '1', '1', '', '', 'ssn212', '1', '1', '', '', '029309434', '', '029309434', '029309434', '029309434', '029309434', '', '', '029309434', '029309434', 'e10adc3949ba59abbe56e057f20f883e');
INSERT INTO `employee_history` (`emp_his_id`, `employee_id`, `pos_id`, `first_name`, `middle_name`, `last_name`, `email`, `phone`, `alter_phone`, `present_address`, `parmanent_address`, `picture`, `degree_name`, `university_name`, `cgp`, `passing_year`, `company_name`, `working_period`, `duties`, `supervisor`, `signature`, `is_admin`, `dept_id`, `division_id`, `maiden_name`, `state`, `city`, `zip`, `citizenship`, `duty_type`, `hire_date`, `original_hire_date`, `termination_date`, `termination_reason`, `voluntary_termination`, `rehire_date`, `rate_type`, `rate`, `pay_frequency`, `pay_frequency_txt`, `hourly_rate2`, `hourly_rate3`, `home_department`, `department_text`, `class_code`, `class_code_desc`, `class_acc_date`, `class_status`, `is_super_visor`, `super_visor_id`, `supervisor_report`, `dob`, `gender`, `marital_status`, `ethnic_group`, `eeo_class_gp`, `ssn`, `work_in_state`, `live_in_state`, `home_email`, `business_email`, `home_phone`, `business_phone`, `cell_phone`, `emerg_contct`, `emrg_h_phone`, `emrg_w_phone`, `emgr_contct_relation`, `alt_em_contct`, `alt_emg_h_phone`, `alt_emg_w_phone`, `password`) VALUES ('2', '2', '1', 'Test', '', 'User', 'test@gmail.com', '7545323', '', NULL, NULL, './application/modules/employee/assets/images/2021-03-16/fm2.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '5', '0', '', 'Afghanistan', '', '0', '1', '1', '2021-03-16', '2021-03-16', '1970-01-01', '', '0', '1970-01-01', '1', '90', '4', '', '0', '0', '', '', '', '', '1970-01-01', '1', '0', '', '', '1998-03-16', '2', '1', '', '', 'ssn4', '1', '1', '', '', '7545323', '', '7545323', '7545323', '7545323', '7545323', '', '', '7545323', '7545323', 'e10adc3949ba59abbe56e057f20f883e');
INSERT INTO `employee_history` (`emp_his_id`, `employee_id`, `pos_id`, `first_name`, `middle_name`, `last_name`, `email`, `phone`, `alter_phone`, `present_address`, `parmanent_address`, `picture`, `degree_name`, `university_name`, `cgp`, `passing_year`, `company_name`, `working_period`, `duties`, `supervisor`, `signature`, `is_admin`, `dept_id`, `division_id`, `maiden_name`, `state`, `city`, `zip`, `citizenship`, `duty_type`, `hire_date`, `original_hire_date`, `termination_date`, `termination_reason`, `voluntary_termination`, `rehire_date`, `rate_type`, `rate`, `pay_frequency`, `pay_frequency_txt`, `hourly_rate2`, `hourly_rate3`, `home_department`, `department_text`, `class_code`, `class_code_desc`, `class_acc_date`, `class_status`, `is_super_visor`, `super_visor_id`, `supervisor_report`, `dob`, `gender`, `marital_status`, `ethnic_group`, `eeo_class_gp`, `ssn`, `work_in_state`, `live_in_state`, `home_email`, `business_email`, `home_phone`, `business_phone`, `cell_phone`, `emerg_contct`, `emrg_h_phone`, `emrg_w_phone`, `emgr_contct_relation`, `alt_em_contct`, `alt_emg_h_phone`, `alt_emg_w_phone`, `password`) VALUES ('3', '3', '3', 'super', '', 'visor', 'supervisor@gmail.com', '865643232', '', NULL, NULL, './application/modules/employee/assets/images/2021-03-16/m10.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '6', '0', '', 'Afghanistan', '', '0', '1', '1', '2021-03-16', '2021-03-16', '1970-01-01', '', '0', '1970-01-01', '1', '200', '4', '', '0', '0', '', '', '', '', '1970-01-01', '1', '1', '', '', '1985-03-01', '1', '1', '', '', 'ssn21', '1', '1', '', '', '865643232', '', '865643232', '865643232', '865643232', '865643232', '', '', '865643232', '865643232', 'e10adc3949ba59abbe56e057f20f883e');


#
# TABLE STRUCTURE FOR: employee_performance
#

DROP TABLE IF EXISTS `employee_performance`;

CREATE TABLE `employee_performance` (
  `emp_per_id` int(11) NOT NULL AUTO_INCREMENT,
  `employee_id` varchar(50) CHARACTER SET latin1 NOT NULL,
  `note` varchar(50) CHARACTER SET latin1 NOT NULL,
  `date` varchar(50) CHARACTER SET latin1 NOT NULL,
  `note_by` varchar(50) CHARACTER SET latin1 NOT NULL,
  `number_of_star` int(11) NOT NULL,
  `status` varchar(50) CHARACTER SET latin1 NOT NULL,
  `updated_by` varchar(50) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`emp_per_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

INSERT INTO `employee_performance` (`emp_per_id`, `employee_id`, `note`, `date`, `note_by`, `number_of_star`, `status`, `updated_by`) VALUES ('1', '1', 'test', '2021-03-16', '', '4', '1', '');
INSERT INTO `employee_performance` (`emp_per_id`, `employee_id`, `note`, `date`, `note_by`, `number_of_star`, `status`, `updated_by`) VALUES ('2', '2', 'testtt', '2021-03-16', '', '3', '1', '');


#
# TABLE STRUCTURE FOR: employee_position
#

DROP TABLE IF EXISTS `employee_position`;

CREATE TABLE `employee_position` (
  `emp_pos_id` int(10) unsigned NOT NULL,
  `employee_id` varchar(50) CHARACTER SET latin1 NOT NULL,
  `first_name` varchar(50) CHARACTER SET latin1 NOT NULL,
  `position_name` varchar(50) CHARACTER SET latin1 NOT NULL,
  `position_details` varchar(100) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# TABLE STRUCTURE FOR: employee_sal_pay_type
#

DROP TABLE IF EXISTS `employee_sal_pay_type`;

CREATE TABLE `employee_sal_pay_type` (
  `emp_sal_pay_type_id` int(11) unsigned NOT NULL,
  `payment_period` varchar(50) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# TABLE STRUCTURE FOR: employee_salary_payment
#

DROP TABLE IF EXISTS `employee_salary_payment`;

CREATE TABLE `employee_salary_payment` (
  `emp_sal_pay_id` int(11) NOT NULL AUTO_INCREMENT,
  `employee_id` varchar(50) CHARACTER SET latin1 NOT NULL,
  `total_salary` varchar(50) CHARACTER SET latin1 NOT NULL,
  `total_working_minutes` varchar(50) CHARACTER SET latin1 NOT NULL,
  `working_period` varchar(50) CHARACTER SET latin1 NOT NULL,
  `payment_due` varchar(50) CHARACTER SET latin1 NOT NULL,
  `payment_date` varchar(50) CHARACTER SET latin1 NOT NULL,
  `salary_name` varchar(100) DEFAULT NULL,
  `payment_type` int(11) DEFAULT NULL,
  `bank_name` varchar(250) DEFAULT NULL,
  `paid_by` varchar(50) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`emp_sal_pay_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

INSERT INTO `employee_salary_payment` (`emp_sal_pay_id`, `employee_id`, `total_salary`, `total_working_minutes`, `working_period`, `payment_due`, `payment_date`, `salary_name`, `payment_type`, `bank_name`, `paid_by`) VALUES ('1', '1', '1,823.84', '24.58', '2', '', '', 'March 2021', NULL, NULL, '');
INSERT INTO `employee_salary_payment` (`emp_sal_pay_id`, `employee_id`, `total_salary`, `total_working_minutes`, `working_period`, `payment_due`, `payment_date`, `salary_name`, `payment_type`, `bank_name`, `paid_by`) VALUES ('2', '2', '1,280.27', '13.42', '1', '', '', 'March 2021', NULL, NULL, '');


#
# TABLE STRUCTURE FOR: employee_salary_setup
#

DROP TABLE IF EXISTS `employee_salary_setup`;

CREATE TABLE `employee_salary_setup` (
  `e_s_s_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `employee_id` varchar(30) CHARACTER SET latin1 NOT NULL,
  `sal_type` varchar(30) NOT NULL,
  `salary_type_id` varchar(30) CHARACTER SET latin1 NOT NULL,
  `amount` varchar(30) CHARACTER SET latin1 NOT NULL,
  `create_date` date DEFAULT NULL,
  `update_date` datetime(6) DEFAULT NULL,
  `update_id` varchar(30) CHARACTER SET latin1 NOT NULL,
  `gross_salary` float NOT NULL,
  PRIMARY KEY (`e_s_s_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

INSERT INTO `employee_salary_setup` (`e_s_s_id`, `employee_id`, `sal_type`, `salary_type_id`, `amount`, `create_date`, `update_date`, `update_id`, `gross_salary`) VALUES ('1', '1', '1', '1', '2', '2021-03-16', NULL, '', '74.2');
INSERT INTO `employee_salary_setup` (`e_s_s_id`, `employee_id`, `sal_type`, `salary_type_id`, `amount`, `create_date`, `update_date`, `update_id`, `gross_salary`) VALUES ('2', '1', '1', '2', '4', '2021-03-16', NULL, '', '74.2');
INSERT INTO `employee_salary_setup` (`e_s_s_id`, `employee_id`, `sal_type`, `salary_type_id`, `amount`, `create_date`, `update_date`, `update_id`, `gross_salary`) VALUES ('3', '1', '1', '4', '2', '2021-03-16', NULL, '', '74.2');
INSERT INTO `employee_salary_setup` (`e_s_s_id`, `employee_id`, `sal_type`, `salary_type_id`, `amount`, `create_date`, `update_date`, `update_id`, `gross_salary`) VALUES ('4', '1', '1', '3', '2', '2021-03-16', NULL, '', '74.2');
INSERT INTO `employee_salary_setup` (`e_s_s_id`, `employee_id`, `sal_type`, `salary_type_id`, `amount`, `create_date`, `update_date`, `update_id`, `gross_salary`) VALUES ('5', '2', '1', '1', '2', '2021-03-16', NULL, '', '95.4');
INSERT INTO `employee_salary_setup` (`e_s_s_id`, `employee_id`, `sal_type`, `salary_type_id`, `amount`, `create_date`, `update_date`, `update_id`, `gross_salary`) VALUES ('6', '2', '1', '2', '4', '2021-03-16', NULL, '', '95.4');
INSERT INTO `employee_salary_setup` (`e_s_s_id`, `employee_id`, `sal_type`, `salary_type_id`, `amount`, `create_date`, `update_date`, `update_id`, `gross_salary`) VALUES ('7', '2', '1', '4', '2', '2021-03-16', NULL, '', '95.4');
INSERT INTO `employee_salary_setup` (`e_s_s_id`, `employee_id`, `sal_type`, `salary_type_id`, `amount`, `create_date`, `update_date`, `update_id`, `gross_salary`) VALUES ('8', '2', '1', '3', '2', '2021-03-16', NULL, '', '95.4');


#
# TABLE STRUCTURE FOR: equipment
#

DROP TABLE IF EXISTS `equipment`;

CREATE TABLE `equipment` (
  `equipment_id` int(11) NOT NULL AUTO_INCREMENT,
  `equipment_name` varchar(100) NOT NULL,
  `type_id` int(11) NOT NULL,
  `model` varchar(100) NOT NULL,
  `serial_no` varchar(50) NOT NULL,
  `is_assign` tinyint(4) NOT NULL DEFAULT 0,
  PRIMARY KEY (`equipment_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

INSERT INTO `equipment` (`equipment_id`, `equipment_name`, `type_id`, `model`, `serial_no`, `is_assign`) VALUES ('1', 'Fan21', '3', 'F-2121', '1', '1');
INSERT INTO `equipment` (`equipment_id`, `equipment_name`, `type_id`, `model`, `serial_no`, `is_assign`) VALUES ('2', 'Laptop', '2', 'Hp-14', '2', '1');
INSERT INTO `equipment` (`equipment_id`, `equipment_name`, `type_id`, `model`, `serial_no`, `is_assign`) VALUES ('3', 'Chair', '1', 'C-34', '3', '0');
INSERT INTO `equipment` (`equipment_id`, `equipment_name`, `type_id`, `model`, `serial_no`, `is_assign`) VALUES ('4', 'Tables', '1', 'T-333', '4', '1');


#
# TABLE STRUCTURE FOR: equipment_type
#

DROP TABLE IF EXISTS `equipment_type`;

CREATE TABLE `equipment_type` (
  `type_id` int(11) NOT NULL AUTO_INCREMENT,
  `type_name` varchar(100) NOT NULL,
  PRIMARY KEY (`type_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

INSERT INTO `equipment_type` (`type_id`, `type_name`) VALUES ('1', 'Furnitures');
INSERT INTO `equipment_type` (`type_id`, `type_name`) VALUES ('2', 'Gadgets');
INSERT INTO `equipment_type` (`type_id`, `type_name`) VALUES ('3', 'Electric');


#
# TABLE STRUCTURE FOR: expense_information
#

DROP TABLE IF EXISTS `expense_information`;

CREATE TABLE `expense_information` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `expense_name` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

INSERT INTO `expense_information` (`id`, `expense_name`) VALUES ('1', 'Lunch');
INSERT INTO `expense_information` (`id`, `expense_name`) VALUES ('2', 'Breakfast');
INSERT INTO `expense_information` (`id`, `expense_name`) VALUES ('3', 'Snacks');


#
# TABLE STRUCTURE FOR: gender
#

DROP TABLE IF EXISTS `gender`;

CREATE TABLE `gender` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `gender_name` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

INSERT INTO `gender` (`id`, `gender_name`) VALUES ('1', 'Male');
INSERT INTO `gender` (`id`, `gender_name`) VALUES ('2', 'Female');
INSERT INTO `gender` (`id`, `gender_name`) VALUES ('3', 'Other');


#
# TABLE STRUCTURE FOR: grand_loan
#

DROP TABLE IF EXISTS `grand_loan`;

CREATE TABLE `grand_loan` (
  `loan_id` int(11) NOT NULL AUTO_INCREMENT,
  `employee_id` varchar(50) CHARACTER SET latin1 NOT NULL,
  `permission_by` varchar(30) CHARACTER SET latin1 NOT NULL,
  `loan_details` varchar(30) CHARACTER SET latin1 NOT NULL,
  `amount` varchar(30) CHARACTER SET latin1 NOT NULL,
  `interest_rate` varchar(30) CHARACTER SET latin1 NOT NULL,
  `installment` varchar(30) CHARACTER SET latin1 NOT NULL,
  `installment_period` varchar(30) CHARACTER SET latin1 NOT NULL,
  `repayment_amount` varchar(30) CHARACTER SET latin1 NOT NULL,
  `date_of_approve` varchar(30) CHARACTER SET latin1 NOT NULL,
  `repayment_start_date` varchar(30) CHARACTER SET latin1 NOT NULL,
  `created_by` varchar(30) CHARACTER SET latin1 NOT NULL,
  `updated_by` varchar(30) CHARACTER SET latin1 NOT NULL,
  `loan_status` varchar(30) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`loan_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

INSERT INTO `grand_loan` (`loan_id`, `employee_id`, `permission_by`, `loan_details`, `amount`, `interest_rate`, `installment`, `installment_period`, `repayment_amount`, `date_of_approve`, `repayment_start_date`, `created_by`, `updated_by`, `loan_status`) VALUES ('1', '2', '3', 'test', '50000', '2', '25500', '2', '51000', '2021-03-16', '2021-03-16', '', '', '1');


#
# TABLE STRUCTURE FOR: income_area
#

DROP TABLE IF EXISTS `income_area`;

CREATE TABLE `income_area` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `income_field` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

INSERT INTO `income_area` (`id`, `income_field`) VALUES ('1', 'Support');
INSERT INTO `income_area` (`id`, `income_field`) VALUES ('3', 'Soft Sale');
INSERT INTO `income_area` (`id`, `income_field`) VALUES ('4', 'Academic bill');
INSERT INTO `income_area` (`id`, `income_field`) VALUES ('5', 'Support');


#
# TABLE STRUCTURE FOR: job_advertisement
#

DROP TABLE IF EXISTS `job_advertisement`;

CREATE TABLE `job_advertisement` (
  `job_adv_id` int(10) unsigned NOT NULL,
  `pos_id` varchar(30) CHARACTER SET latin1 NOT NULL,
  `adv_circular_date` varchar(30) CHARACTER SET latin1 NOT NULL,
  `circular_dadeline` varchar(30) CHARACTER SET latin1 NOT NULL,
  `adv_file` tinytext CHARACTER SET latin1 NOT NULL,
  `adv_details` varchar(255) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# TABLE STRUCTURE FOR: language
#

DROP TABLE IF EXISTS `language`;

CREATE TABLE `language` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `phrase` varchar(100) NOT NULL,
  `english` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=939 DEFAULT CHARSET=utf8;

INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('2', 'login', 'Login');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('3', 'email', 'Email Address');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('4', 'password', 'Password');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('5', 'reset', 'Reset');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('6', 'dashboard', 'Dashboard');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('7', 'home', 'Home');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('8', 'profile', 'Profile');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('9', 'profile_setting', 'Profile Setting');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('10', 'firstname', 'First Name');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('11', 'lastname', 'Last Name');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('12', 'about', 'About');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('13', 'preview', 'Preview');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('14', 'image', 'Image');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('15', 'save', 'Save');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('16', 'upload_successfully', 'Upload Successfully!');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('17', 'user_added_successfully', 'User Added Successfully!');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('18', 'please_try_again', 'Please Try Again...');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('19', 'inbox_message', 'Inbox Messages');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('20', 'sent_message', 'Sent Message');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('21', 'message_details', 'Message Details');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('22', 'new_message', 'New Message');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('23', 'receiver_name', 'Receiver Name');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('24', 'sender_name', 'Sender Name');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('25', 'subject', 'Subject');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('26', 'message', 'Message');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('27', 'message_sent', 'Message Sent!');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('28', 'ip_address', 'IP Address');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('29', 'last_login', 'Last Login');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('30', 'last_logout', 'Last Logout');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('31', 'status', 'Status');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('32', 'delete_successfully', 'Delete Successfully!');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('33', 'send', 'Send');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('34', 'date', 'Date');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('35', 'action', 'Action');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('36', 'sl_no', 'SL No.');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('37', 'are_you_sure', 'Are You Sure ? ');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('38', 'application_setting', 'Application Setting');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('39', 'application_title', 'Application Title');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('40', 'address', 'Address');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('41', 'phone', 'Phone');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('42', 'favicon', 'Favicon');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('43', 'logo', 'Logo');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('44', 'language', 'Language');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('45', 'left_to_right', 'Left To Right');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('46', 'right_to_left', 'Right To Left');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('47', 'footer_text', 'Footer Text');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('48', 'site_align', 'Application Alignment');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('49', 'welcome_back', 'Welcome Back!');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('50', 'please_contact_with_admin', 'Please Contact With Admin');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('51', 'incorrect_email_or_password', 'Incorrect Email/Password');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('52', 'select_option', 'Select Option');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('53', 'ftp_setting', 'Data Synchronize [FTP Setting]');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('54', 'hostname', 'Host Name');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('55', 'username', 'User Name');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('56', 'ftp_port', 'FTP Port');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('57', 'ftp_debug', 'FTP Debug');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('58', 'project_root', 'Project Root');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('59', 'update_successfully', 'Update Successfully');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('60', 'save_successfully', 'Save Successfully!');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('61', 'delete_successfully', 'Delete Successfully!');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('62', 'internet_connection', 'Internet Connection');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('63', 'ok', 'Ok');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('64', 'not_available', 'Not Available');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('65', 'available', 'Available');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('66', 'outgoing_file', 'Outgoing File');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('67', 'incoming_file', 'Incoming File');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('68', 'data_synchronize', 'Data Synchronize');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('69', 'unable_to_upload_file_please_check_configuration', 'Unable to upload file! please check configuration');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('70', 'please_configure_synchronizer_settings', 'Please configure synchronizer settings');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('71', 'download_successfully', 'Download Successfully');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('72', 'unable_to_download_file_please_check_configuration', 'Unable to download file! please check configuration');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('73', 'data_import_first', 'Data Import First');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('74', 'data_import_successfully', 'Data Import Successfully!');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('75', 'unable_to_import_data_please_check_config_or_sql_file', 'Unable to import data! please check configuration / SQL file.');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('76', 'download_data_from_server', 'Download Data from Server');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('77', 'data_import_to_database', 'Data Import To Database');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('79', 'data_upload_to_server', 'Data Upload to Server');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('80', 'please_wait', 'Please Wait...');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('81', 'ooops_something_went_wrong', ' Ooops something went wrong...');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('82', 'module_permission_list', 'Module Permission List');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('83', 'user_permission', 'User Permission');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('84', 'add_module_permission', 'Add Module Permission');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('85', 'module_permission_added_successfully', 'Module Permission Added Successfully!');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('86', 'update_module_permission', 'Update Module Permission');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('87', 'download', 'Download');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('88', 'module_name', 'Module Name');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('89', 'create', 'Create');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('90', 'read', 'Read');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('91', 'update', 'Update');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('92', 'delete', 'Delete');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('93', 'module_list', 'Module List');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('94', 'add_module', 'Add Module');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('95', 'directory', 'Module Direcotory');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('96', 'description', 'Description');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('97', 'image_upload_successfully', 'Image Upload Successfully!');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('98', 'module_added_successfully', 'Module Added Successfully');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('99', 'inactive', 'Inactive');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('100', 'active', 'Active');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('101', 'user_list', 'User List');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('102', 'see_all_message', 'See All Messages');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('103', 'setting', 'Setting');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('104', 'logout', 'Logout');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('105', 'admin', 'Admin');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('106', 'add_user', 'Add User');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('107', 'user', 'User');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('108', 'module', 'Module');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('109', 'new', 'New');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('110', 'inbox', 'Inbox');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('111', 'sent', 'Sent');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('112', 'synchronize', 'Synchronize');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('113', 'data_synchronizer', 'Data Synchronizer');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('114', 'module_permission', 'Module Permission');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('115', 'backup_now', 'Backup Now!');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('116', 'restore_now', 'Restore Now!');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('117', 'backup_and_restore', 'Backup and Download');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('118', 'captcha', 'Captcha Word');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('119', 'database_backup', 'Database Backup');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('120', 'restore_successfully', 'Restore Successfully');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('121', 'backup_successfully', 'Backup Successfully');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('122', 'filename', 'File Name');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('123', 'file_information', 'File Information');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('124', 'size', 'size');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('125', 'backup_date', 'Backup Date');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('126', 'overwrite', 'Overwrite');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('127', 'invalid_file', 'Invalid File!');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('128', 'invalid_module', 'Invalid Module');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('129', 'remove_successfully', 'Remove Successfully!');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('130', 'install', 'Install');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('131', 'uninstall', 'Uninstall');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('132', 'tables_are_not_available_in_database', 'Tables are not available in database.sql');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('133', 'no_tables_are_registered_in_config', 'No tables are registerd in config.php');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('134', 'enquiry', 'Enquiry');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('135', 'read_unread', 'Read/Unread');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('136', 'enquiry_information', 'Enquiry Information');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('137', 'user_agent', 'User Agent');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('138', 'checked_by', 'Checked By');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('139', 'new_enquiry', 'New Enquiry');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('140', 'crud', 'Crud');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('141', 'view', 'View');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('142', 'name', 'Name');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('143', 'add', 'Address');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('144', 'ph', 'Phone');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('145', 'cid', 'SL No');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('146', 'view_atn', 'AttendanceView');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('147', 'mang', 'Employemanagement');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('148', 'designation', 'Position');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('149', 'test', 'Test');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('150', 'sl', 'SL');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('151', 'bdtask', 'BDTASK');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('152', 'practice', 'Practice');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('153', 'branch_name', 'Branch Name');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('154', 'chairman_name', 'Chairman');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('155', 'b_photo', 'Photo');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('156', 'b_address', 'Address');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('157', 'position', 'Position');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('158', 'advertisement', 'Advertisement');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('159', 'position_name', 'Position');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('160', 'position_details', 'Details');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('161', 'circularprocess', 'Recruitment');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('162', 'pos_id', 'Position');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('163', 'adv_circular_date', 'Publish Date');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('164', 'circular_dadeline', 'Dadeline');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('165', 'adv_file', 'Documents');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('166', 'adv_details', 'Details');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('167', 'attendance', 'Attendance');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('168', 'employee', 'Employee');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('169', 'emp_id', 'Employee Name');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('170', 'sign_in', 'Sign In');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('171', 'sign_out', 'Sign Out');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('172', 'staytime', 'Stay Time');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('173', 'abc', '1');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('174', 'first_name', 'First Name');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('175', 'last_name', 'Last Name');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('176', 'alter_phone', 'Alternative Phone');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('177', 'present_address', 'Present Address');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('178', 'parmanent_address', 'Permanent Address');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('179', 'candidateinfo', 'Candidate Info');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('180', 'add_advertisement', 'Add Advertisement');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('181', 'advertisement_list', 'Manage Advertisement ');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('182', 'candidate_basic_info', 'Candidate Information');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('183', 'can_basicinfo_list', 'Manage Candidate');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('184', 'add_canbasic_info', 'Add New Candidate');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('185', 'candidate_education_info', 'Candidate Educational Info');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('186', 'can_educationinfo_list', 'Candidate Edu Info list');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('187', 'add_edu_info', 'Add Educational Info');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('188', 'can_id', 'Candidate Id');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('189', 'degree_name', 'Obtained Degree');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('190', 'university_name', 'University');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('191', 'cgp', 'CGPA');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('192', 'comments', 'Comments');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('193', 'signature', 'Signature');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('194', 'candidate_workexperience', 'Candidate Work Experience');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('195', 'can_workexperience_list', 'Work Experience list');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('196', 'add_can_experience', 'Add Work Experience');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('197', 'company_name', 'Company Name');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('198', 'working_period', 'Working Period');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('199', 'duties', 'Duties');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('200', 'supervisor', 'Supervisor');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('201', 'candidate_workexpe', 'Candidate Work Experience');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('202', 'candidate_shortlist', 'Candidate Shortlist');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('203', 'shortlist_view', 'Manage Shortlist');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('204', 'add_shortlist', 'Add Shortlist');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('205', 'date_of_shortlist', 'Shortlist Date');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('206', 'interview_date', 'Interview Date');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('207', 'submit', 'Submit');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('208', 'candidate_id', 'Your ID');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('209', 'job_adv_id', 'Job Position');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('210', 'sequence', 'Sequence');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('211', 'candidate_interview', 'Interview');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('212', 'interview_list', 'Interview list');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('213', 'add_interview', 'Interview');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('214', 'interviewer_id', 'Interviewer');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('215', 'interview_marks', 'Viva Marks');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('216', 'written_total_marks', 'Written Total Marks');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('217', 'mcq_total_marks', 'MCQ Total Marks');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('218', 'recommandation', 'Recommandation');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('219', 'selection', 'Selection');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('220', 'details', 'Details');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('221', 'candidate_selection', 'Candidate Selection');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('222', 'selection_list', 'Selection List');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('223', 'add_selection', 'Add Selection');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('224', 'employee_id', 'Employee Id');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('225', 'position_id', '1');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('226', 'selection_terms', 'Selection Terms');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('227', 'total_marks', 'Total Marks');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('228', 'photo', 'Picture');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('229', 'your_id', 'Your ID');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('230', 'change_image', 'Change Photo');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('231', 'picture', 'Photograph');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('232', 'ad', 'Add');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('233', 'write_y_p_info', 'Write Your Persoanal Information');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('234', 'emp_position', 'Employee Position');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('235', 'add_pos', 'Add Position');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('236', 'list_pos', 'List of Position');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('237', 'emp_salary_stup', 'Employee Salary SetUp');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('238', 'add_salary_stup', 'Add Salary Setup');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('239', 'list_salarystup', 'List of Salary Setup');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('240', 'emp_sal_name', 'Salary Name');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('241', 'emp_sal_type', 'Salary Type');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('242', 'emp_performance', 'Employee Performance');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('243', 'add_performance', 'Add Performance');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('244', 'list_performance', 'List of Performance');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('245', 'note', 'Note');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('246', 'note_by', 'Note By');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('247', 'number_of_star', 'Number of Star');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('248', 'updated_by', 'Updated By');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('249', 'emp_sal_payment', 'Manage Employee Salary');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('250', 'add_payment', 'Add Payment');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('251', 'list_payment', 'List of payment');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('252', 'total_salary', 'Total Salary');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('253', 'total_working_minutes', 'Working Hour');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('254', 'payment_due', 'Payment Type');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('255', 'payment_date', 'Date');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('256', 'paid_by', 'Paid By');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('257', 'view_employee_payment', 'Employee Payment List');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('258', 'sal_payment_type', 'Salary Payment Type');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('259', 'add_payment_type', 'Add Payment Type');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('260', 'list_payment_type', 'List of Payment Type');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('261', 'payment_period', 'Payment Period');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('262', 'payment_type', 'Payment Type');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('263', 'time', 'Punch Time');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('264', 'shift', 'Shift');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('265', 'location', 'Location');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('266', 'logtype', 'Log Type');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('267', 'branch', 'Location');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('268', 'student', 'Students');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('269', 'csv', 'CSV');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('270', 'save_successfull', 'Your Data Save Successfully');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('271', 'successfully_updated', 'Your Data Successfully Updated');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('272', 'atn_form', 'Attendance Form');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('273', 'atn_report', 'Attendance Reports');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('274', 'end_date', 'To');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('275', 'start_date', 'From');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('276', 'done', 'Done');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('277', 'employee_id_se', 'Write Employee Id or name here ');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('278', 'attendance_repor', 'Attendance Report');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('279', 'e_time', 'End Time');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('280', 's_time', 'Start Time');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('281', 'atn_datewiserer', 'Date Wise Report');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('282', 'atn_report_id', 'Date And Id base Report');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('283', 'atn_report_time', 'Date And Time report');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('284', 'payroll', 'Payroll');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('285', 'loan', 'Loan');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('286', 'loan_grand', 'Grant Loan');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('287', 'add_loan', 'Add Loan');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('288', 'loan_list', 'List of Loan');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('289', 'loan_details', 'Loan Details');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('290', 'amount', 'Amount');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('291', 'interest_rate', 'Interest Percentage');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('292', 'installment_period', 'Installment Period');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('293', 'repayment_amount', 'Repayment Total');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('294', 'date_of_approve', 'Approve Date');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('295', 'repayment_start_date', 'Repayment From');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('296', 'permission_by', 'Permitted By');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('297', 'grand', 'Grant');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('298', 'installment', 'Installment');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('299', 'loan_status', 'status');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('300', 'installment_period_m', 'Installment Period in Month');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('301', 'successfully_inserted', 'Your loan Successfully Granted');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('302', 'loan_installment', 'Loan Installment');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('303', 'add_installment', 'Add Installment');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('304', 'installment_list', 'List of Installment');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('305', 'loan_id', 'Loan No');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('306', 'installment_amount', 'Installment Amount');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('307', 'payment', 'Payment');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('308', 'received_by', 'Receiver');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('309', 'installment_no', 'Install No');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('310', 'notes', 'Notes');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('311', 'paid', 'Paid');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('312', 'loan_report', 'Loan Report');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('313', 'e_r_id', 'Enter Your Employee ID');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('314', 'leave', 'Leave');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('315', 'add_leave', 'Add Leave');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('316', 'list_leave', 'List of Leave');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('317', 'dayname', 'Weekly Leave Day');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('318', 'holiday', 'Holiday');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('319', 'list_holiday', 'List of Holidays');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('320', 'no_of_days', 'Number of Days');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('321', 'holiday_name', 'Holiday Name');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('322', 'set', 'SET');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('323', 'tax', 'Tax');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('324', 'tax_setup', 'Tax Setup');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('325', 'add_tax_setup', 'Add Tax Setup');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('326', 'list_tax_setup', 'List of Tax setup');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('327', 'tax_collection', 'Tax collection');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('328', 'start_amount', 'Start Amount');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('329', 'end_amount', 'End Amount');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('330', 'rate', 'Tax Rate');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('331', 'date_start', 'Date Start');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('332', 'amount_tax', 'Tax Amount');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('333', 'collection_by', 'Collection By');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('334', 'date_end', 'Date End');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('335', 'income_net_period', 'Income  Net period');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('336', 'default_amount', 'Default Amount');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('337', 'add_sal_type', 'Add Salary Type');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('338', 'list_sal_type', 'Salary Type List');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('339', 'salary_type_setup', 'Salary Type Setup');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('340', 'salary_setup', 'Salary SetUp');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('341', 'add_sal_setup', 'Add Salary Setup');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('342', 'list_sal_setup', 'Salary Setup List');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('343', 'salary_type_id', 'Salary Type');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('344', 'salary_generate', 'Salary Generate');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('345', 'add_sal_generate', 'Generate Now');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('346', 'list_sal_generate', 'Generated Salary List');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('347', 'gdate', 'Generate Date');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('348', 'start_dates', 'Start Date');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('349', 'generate', 'Generate ');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('350', 'successfully_saved_saletup', ' Set up Successfull');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('351', 's_date', 'Start Date');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('352', 'e_date', 'End Date');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('353', 'salary_payable', 'Payable Salary');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('354', 'tax_manager', 'Tax');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('355', 'generate_by', 'Generate By');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('356', 'successfully_paid', 'Successfully Paid');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('357', 'direct_empl', ' Employee');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('358', 'add_emp_info', 'Add New Employee');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('359', 'new_empl_pos', 'Add New Employee Position');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('360', 'manage', 'Manage Position');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('361', 'ad_advertisement', 'ADD POSITION');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('362', 'moduless', 'Modules');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('363', 'next', 'Next');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('364', 'finish', 'Finish');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('365', 'request', 'Request');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('366', 'successfully_saved', 'Your Data Successfully Saved');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('367', 'sal_type', 'Salary Type');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('368', 'sal_name', 'Salary Name');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('369', 'leave_application', 'Leave Application');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('370', 'apply_strt_date', 'Application Start Date');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('371', 'apply_end_date', 'Application End date');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('372', 'leave_aprv_strt_date', 'Approve Start Date');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('373', 'leave_aprv_end_date', 'Approved End Date');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('374', 'num_aprv_day', 'Aproved Day');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('375', 'reason', 'Reason');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('376', 'approve_date', 'Approved Date');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('377', 'leave_type', 'Leave Type');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('378', 'apply_hard_copy', 'Application Hard Copy');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('379', 'approved_by', 'Approved By');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('380', 'notice', 'Notice Board');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('381', 'noticeboard', 'Notice Board');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('382', 'notice_descriptiion', 'Description');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('383', 'notice_date', 'Notice Date');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('384', 'notice_type', 'Notice Type');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('385', 'notice_by', 'Notice By');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('386', 'notice_attachment', 'Attachment');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('387', 'account_name', 'Account Name');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('388', 'account_type', 'Account Type');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('389', 'account_id', 'Account Name');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('390', 'transaction_description', 'Description');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('391', 'payment_id', 'Payment');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('392', 'create_by_id', 'Created By');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('393', 'account', 'Account');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('394', 'account_add', 'Add Account');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('395', 'account_transaction', 'Transaction');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('396', 'award', 'Award');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('397', 'new_award', 'New Award');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('398', 'award_name', 'Award Name');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('399', 'aw_description', 'Award Description');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('400', 'awr_gift_item', 'Gift Item');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('401', 'awarded_by', 'Award By');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('402', 'employee_name', 'Employee Name');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('403', 'employee_list', 'Atn List');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('404', 'department', 'Department');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('405', 'department_name', 'Department Name ');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('406', 'clockout', 'ClockOut');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('407', 'se_account_id', 'Select Account Name');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('408', 'division', 'Division');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('409', 'add_division', 'Add Division');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('410', 'update_division', 'Update Division');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('411', 'division_name', 'Division Name');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('412', 'division_list', 'Manage Division ');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('413', 'designation_list', 'Position List');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('414', 'manage_designation', 'Manage Position');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('415', 'add_designation', 'Add Positionn');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('416', 'select_division', 'Select Division');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('417', 'select_designation', 'Select Position');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('418', 'asset', 'Asset');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('419', 'asset_type', 'Asset Type');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('420', 'add_type', 'Add Type');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('421', 'type_list', 'Type List');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('422', 'type_name', 'Type Name');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('423', 'select_type', 'Select Type');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('424', 'equipment_name', 'Equipment Name');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('425', 'model', 'Model');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('426', 'serial_no', 'Serial No');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('427', 'equipment', 'Equipment');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('428', 'add_equipment', 'Add Equipment');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('429', 'equipment_list', 'Equipment List');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('430', 'type', 'Type');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('431', 'equipment_maping', 'Equipment Mapping');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('432', 'add_maping', 'Add Mapping');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('433', 'maping_list', 'Mapping List');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('434', 'update_equipment', 'Update Equipment');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('435', 'select_employee', 'Select Employee');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('436', 'select_equipment', 'Select Equipment');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('437', 'basic_info', 'Basic Info');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('438', 'middle_name', 'Middle Name');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('439', 'state', 'Country');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('440', 'city', 'City');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('441', 'zip_code', 'Zip Code');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('442', 'maiden_name', 'Maiden Name');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('443', 'add_employee', 'Add Employee');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('444', 'manage_employee', 'Manage Employee');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('445', 'employee_update_form', 'Employee Update Form');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('446', 'what_you_search', 'What You Search');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('447', 'search', 'Search');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('448', 'duty_type', 'Duty Type');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('449', 'hire_date', 'Hire Date');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('450', 'original_h_date', 'Original Hire Date');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('451', 'voluntary_termination', 'Voluntary Termination');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('452', 'termination_reason', 'Termination Reason');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('453', 'termination_date', 'Termination Date');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('454', 're_hire_date', 'Re Hire Date');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('455', 'rate_type', 'Rate Type');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('456', 'pay_frequency', 'Pay Frequency');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('457', 'pay_frequency_txt', 'Pay Frequency Text');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('458', 'hourly_rate2', 'Hourly rate2');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('459', 'hourly_rate3', 'Hourly Rate3');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('460', 'home_department', 'Home Department');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('461', 'department_text', 'Department Text');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('462', 'benifit_class_code', 'Benefit Class code');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('463', 'benifit_desc', 'Benefit Description');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('464', 'benifit_acc_date', 'Benefit Accrual Date');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('465', 'benifit_sta', 'Benefit Status');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('466', 'super_visor_name', 'Supervisor Name');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('467', 'is_super_visor', 'Is Supervisor');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('468', 'supervisor_report', 'Supervisor Report');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('469', 'dob', 'Date of Birth');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('470', 'gender', 'Gender');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('471', 'marital_stats', 'Marital Status');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('472', 'ethnic_group', 'Ethnic Group');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('473', 'eeo_class_gp', 'EEO Class');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('474', 'ssn', 'SSN');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('475', 'work_in_state', 'Work in State');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('476', 'live_in_state', 'Live in State');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('477', 'home_email', 'Home Email');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('478', 'business_email', 'Business Email');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('479', 'home_phone', 'Home Phone');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('480', 'business_phone', 'Business Phone');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('481', 'cell_phone', 'Cell Phone');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('482', 'emerg_contct', 'Emergency Contact');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('483', 'emerg_home_phone', 'Emergency Home Phone');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('484', 'emrg_w_phone', 'Emergency Work Phone');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('485', 'emer_con_rela', 'Emergency Contact Relation');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('486', 'alt_em_contct', 'Alter Emergency Contact');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('487', 'alt_emg_h_phone', 'Alt Emergency Home Phone');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('488', 'alt_emg_w_phone', 'Alt Emergency  Work Phone');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('489', 'reports', 'Reports');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('490', 'employee_reports', 'Employee Reports');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('491', 'demographic_report', 'Demographic Report');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('492', 'posting_report', 'Positional Report');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('493', 'custom_report', 'Custom Report');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('494', 'benifit_report', 'Benefit Report');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('495', 'demographic_info', 'Demographical Information');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('496', 'positional_info', 'Positional Information');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('497', 'assets_info', 'Assets Information');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('498', 'custom_field', 'Custom Field');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('499', 'custom_value', 'Custom Data');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('500', 'adhoc_report', 'Adhoc Report');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('501', 'asset_assignment', 'Asset Assignment');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('502', 'assign_asset', 'Assign Assets');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('503', 'assign_list', 'Assign List');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('504', 'update_assign', 'Update Assign');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('505', 'citizenship', 'Citizenship');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('506', 'class_sta', 'Class status');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('507', 'class_acc_date', 'Class Accrual date');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('508', 'class_descript', 'Class Description');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('509', 'class_code', 'Class Code');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('510', 'return_asset', 'Return Assets');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('511', 'dept_id', 'Department ID');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('512', 'parent_id', 'Parent ID');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('513', 'equipment_id', 'Equipment ID');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('514', 'issue_date', 'Issue Date');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('515', 'damarage_desc', 'Damarage Description');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('516', 'return_date', 'Return Date');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('517', 'is_assign', 'Is Assign');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('518', 'emp_his_id', 'Employee History ID');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('519', 'damarage_descript', 'Damage Description');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('520', 'return', 'Return');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('521', 'return_successfull', 'Return Successfull');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('522', 'return_list', 'Return List');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('523', 'custom_data', 'Custom Data');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('524', 'passing_year', 'Passing Year');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('525', 'is_admin', 'Is Admin');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('526', 'zip', 'Zip Code');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('527', 'original_hire_date', 'Original Hire Date');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('528', 'rehire_date', 'Rehire Date');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('529', 'class_code_desc', 'Class Code Description');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('530', 'class_status', 'Class Status');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('531', 'super_visor_id', 'Supervisor ID');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('532', 'marital_status', 'Marital Status');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('533', 'emrg_h_phone', 'Emergency Home Phone');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('534', 'emgr_contct_relation', 'Emergency Contact Relation');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('535', 'id', 'ID');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('536', 'type_id', 'Equipment Type');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('537', 'custom_id', 'Custom ID');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('538', 'custom_data_type', 'Custom Data Type');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('539', 'role_permission', 'Role Permission');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('540', 'permission_setup', 'Permission Setup');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('541', 'add_role', 'Add Role');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('542', 'role_list', 'Role List');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('543', 'user_access_role', 'User Access Role');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('544', 'menu_item_list', 'Menu Item List');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('545', 'ins_menu_for_application', 'Ins Menu  For Application');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('546', 'menu_title', 'Menu Title');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('547', 'page_url', 'Page Url');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('548', 'parent_menu', 'Parent Menu');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('549', 'role', 'Role');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('550', 'role_name', 'Role Name');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('551', 'single_checkin', 'Single Check In');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('552', 'bulk_checkin', 'Bulk Check In');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('553', 'manage_attendance', 'Manage Attendance');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('554', 'attendance_list', 'Attendance List');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('555', 'checkin', 'Check In');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('556', 'checkout', 'Check Out');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('557', 'stay', 'Stay');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('558', 'attendance_report', 'Attendance Report');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('559', 'work_hour', 'Work Hour');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('560', 'cancel', 'Cancel');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('561', 'confirm_clock', 'Confirm Checkout');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('562', 'add_attendance', 'Add Attendance');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('563', 'upload_csv', 'Upload CSV');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('564', 'import_attendance', 'Import Attendance');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('565', 'manage_account', 'Manage Account');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('566', 'add_account', 'Add Account');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('567', 'add_new_account', 'Add New Account');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('568', 'account_details', 'Account Details');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('569', 'manage_transaction', 'Manage Transaction');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('570', 'add_expence', 'Add Experience');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('571', 'add_income', 'Add Income');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('572', 'return_now', 'Return Now !!');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('573', 'manage_award', 'Manage Award');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('574', 'add_new_award', 'Add New Award');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('575', 'personal_information', 'Personal Information');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('576', 'educational_information', 'Educational Information');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('577', 'past_experience', 'Past Experience');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('578', 'basic_information', 'Basic Information');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('579', 'result', 'Result');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('580', 'institute_name', 'Institute Name');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('581', 'education', 'Education');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('582', 'manage_shortlist', 'Manage Short List');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('583', 'manage_interview', 'Manage Interview');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('584', 'manage_selection', 'Manage Selection');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('585', 'add_new_dept', 'Add New Department');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('586', 'manage_dept', 'Manage Department');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('587', 'successfully_checkout', 'Checkout Successful !');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('588', 'grant_loan', 'Grant Loan');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('589', 'successfully_installed', 'Successfully Installed');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('590', 'total_loan', 'Total Loan');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('591', 'total_amount', 'Total Amount');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('592', 'filter', 'Filter');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('593', 'weekly_holiday', 'Weekly Holiday');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('594', 'manage_application', 'Manage Application');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('595', 'add_application', 'Add Application');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('596', 'manage_holiday', 'Manage Holiday');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('597', 'add_more_holiday', 'Add More Holiday');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('598', 'manage_weekly_holiday', 'Manage Weekly Holiday');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('599', 'add_weekly_holiday', 'Add Weekly Holiday');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('600', 'manage_granted_loan', 'Manage Granted Loan');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('601', 'manage_installment', 'Manage Installment');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('602', 'add_new_notice', 'Add New Notice');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('603', 'manage_notice', 'Manage Notice');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('604', 'salary_type', 'Salary Benefits');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('605', 'manage_salary_generate', 'Manage Salary Generate');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('606', 'generate_now', 'Generate Now');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('607', 'add_salary_setup', 'Add Salary Setup');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('608', 'manage_salary_setup', 'Manage Salary Setup');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('609', 'add_salary_type', 'Add Salary Benefits');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('610', 'manage_salary_type', 'Manage Salary Benefits');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('611', 'manage_tax_setup', 'Manage Tax Setup');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('612', 'setup_tax', 'Setup Tax');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('613', 'add_more', 'Add More');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('614', 'tax_rate', 'Tax Rate');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('615', 'no', 'No');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('616', 'setup', 'Setup');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('617', 'biographicalinfo', 'Bio-Graphical Information');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('618', 'positional_information', 'Positional Information');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('620', 'benifits', 'Benefits');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('621', 's_rate', 'Rate');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('622', 'others_leave_application', 'Leave Application');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('623', 'add_leave_type', 'Add Leave Type');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('624', 'others_leave', 'Others Leave');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('625', 'number_of_leave_days', 'Number of Leave Days');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('626', 'app_date', 'Application Date');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('627', 'apply_day', 'Apply Day');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('628', 'time_zone', 'Time Zone ');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('629', 'accounts', 'Accounts');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('630', 'c_o_a', 'Chart of Account');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('631', 'debit_voucher', 'Debit Voucher');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('632', 'credit_voucher', 'Credit Voucher');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('633', 'contra_voucher', 'Contra Voucher');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('634', 'journal_voucher', 'Journal Voucher');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('635', 'voucher_approval', 'Voucher Approval');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('636', 'account_report', 'Account Report');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('637', 'voucher_report', 'Voucher Report');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('638', 'cash_book', 'Cash Book');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('639', 'bank_book', 'Bank Book');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('640', 'general_ledger', 'General Ledger');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('641', 'trial_balance', 'Trial Balance');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('642', 'profit_loss', 'Profit Loss');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('643', 'cash_flow', 'Cash Flow');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('644', 'coa_print', 'Coa Print');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('645', 'grant', 'Grant');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('646', 'confirm', 'Confirm');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('647', 'pay_now', 'Pay Now ??');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('648', 'find', 'Find');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('649', 'gl_head', 'GL Head');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('650', 'acc_code', 'Account Code');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('651', 'from_date', 'From Date');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('652', 'to_date', 'To Date');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('653', 'bank_book_voucher', 'Bank Book Voucher');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('654', 'bank_book_report_of', 'Bank Book Report Of');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('655', 'on', 'On');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('656', 'to', 'To');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('657', 'opening_balance', 'Opening Balance');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('658', 'balance', 'Balance');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('659', 'credit', 'Credit');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('660', 'debit', 'Debit');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('661', 'head_of_account', 'Head Of Account');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('662', 'voucher_type', 'Voucher Type');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('663', 'voucher_no', 'Voucher No');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('664', 'transaction_date', 'Transaction Date');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('665', 'cash_book_voucher', 'Cash Book Voucher');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('666', 'cash_book_report_on', 'Cash Book Report On');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('667', 'particulars', 'Particulars');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('668', 'amount_in_dollar', 'Amount In Dollar');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('669', 'opening_cash_and_equivalent', 'Opening Cash && Equivalent');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('670', 'cash_flow_statement', 'Cash Flow Statement');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('671', 'code', 'Code');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('672', 'remark', 'Remark');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('673', 'debit_account_head', 'Debit Account Head');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('674', 'cash_in_hand', 'Cash In Hand');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('675', 'credit_account_head', 'Credit Account Head');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('676', 'transaction_head', 'Transaction Head');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('677', 'with_details', 'With Details');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('678', 'no_report', 'No Of Report');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('679', 'total', 'Total');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('680', 'current_balance', 'Current Balance');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('681', 'pre_balance', 'Pre Balance');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('682', 'trial_balance_with_opening_as_on', 'Trial Balance With Opening ');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('683', 'as_on', 'As On');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('684', 'chairman', 'Chairman');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('685', 'prepared_by', 'Prepared By');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('686', 'statement_of_comprehensive_income', 'Statement Of Comprehensive Income');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('687', 'from', 'From');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('688', 'total_expenses', 'Total Expenses');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('689', 'total_income', 'Total Income');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('690', 'authorized_signature', 'Authorize Signature');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('691', 'account_official', 'Account Official');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('692', 'approved', 'Approved');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('693', 'update_credit_voucher', 'Update Credit Voucher');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('694', 'benefits', 'Benefit');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('695', 'class', 'Class');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('696', 'biographical_info', 'Biographical Info');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('697', 'additional_address', 'Additional Address');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('698', 'custom', 'Custom');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('699', 'can_name', 'Candidate Name');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('700', 'select', 'Select');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('701', 'benefit_type', 'Benefit Type');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('702', 'salary_benefits_type', 'Benefits Type');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('703', 'addition', 'Addition');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('704', 'basic', 'Basic');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('705', 'deduction', 'Deduction');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('706', 'gross_salary', 'Gross Salary');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('707', 'total_loan_amount', 'Total Loan Amount');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('708', 'loan_no', 'Loan No');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('709', 'loan_issue_id', 'Loan Issue Id');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('710', 'repayment', 'Repayment');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('711', 'candidate_name', 'Candidate name');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('712', 'employee_performance', 'Employee Performance');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('713', 'check_in', 'Check In');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('714', 'check_out', 'Check Out');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('715', 'datewise_report', 'Date Wise Report');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('716', 'employee_wise_report', 'Employee Wise Report');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('717', 'date_in_time_report', 'Date & In Time Report');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('718', 'report_view', 'Report View');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('719', 'notice_form', 'Notice Form');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('720', 'atn_log', 'Load Device Data');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('721', 'atn_log_datewise', 'Attendance Log');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('722', 'device_connection', 'Device Connection');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('723', 'user_name', 'User Name');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('724', 'in_time', 'In Time');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('725', 'out_time', 'Out Time');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('726', 'worked_hours', 'Worked Hours');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('727', 'wasteg_hour', 'Wastage Hours');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('728', 'net_hour', 'Net Hours');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('729', 'device_information', 'Device Information');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('730', 'plz_generate_an_ip', 'Please Generate an Ip');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('731', 'device_name', 'Device Name');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('732', 'device_ip', 'Device Ip');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('733', 'device_user', 'Device User');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('734', 'n_b_spendtime', 'N.B : You Spent');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('735', 'hours_out_of_workinghour', 'Hours out of Working hours');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('736', 'total_employee', 'Total Employee');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('737', 'present_employee', 'Present Employee');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('738', 'today_worked_hour', 'Today\'s Worked Hours');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('739', 'todays_transaction', 'Today\'s Transaction');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('740', 'device_model', 'Device Model');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('741', 'download_sample_file', 'Download Sample File');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('742', 'salar_month', 'Salary Month');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('743', 'bank', 'Bank');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('744', 'add_bank', 'Add Bank');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('745', 'bank_list', 'Bank List');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('746', 'update_bank', 'Update Bank');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('747', 'bank_name', 'Bank Name');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('748', 'account_number', 'Account Number');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('749', 'cash_adjustment', 'Cash Adjustment');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('750', 'adjustment_type', 'Adjustment Type');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('751', 'bank_adjustment', 'Bank Adjustment');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('752', 'expense', 'Expense');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('753', 'expense_item', 'Expense Item');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('754', 'expense_statement', 'Expense Statement');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('755', 'expense_name', 'Expense Name');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('756', 'add_expense', 'Add Expense');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('757', 'print', 'Print');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('758', 'income', 'Income');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('759', 'income_field', 'Income Field');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('760', 'update_income', 'Update Income');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('761', 'income_statement', 'Income Statement');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('762', 'attendence', 'Attendance');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('763', 'working_day', 'Working Day');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('764', 'salary_month', 'Salary Month');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('765', 'salary_slip', 'Salary Slip');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('766', 'head_code', 'Head Code');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('767', 'particular', 'Particulars');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('768', 'parent_type', 'Parent Type');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('769', 'expense_sheet', 'Expense Sheet');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('770', 'head_name', 'Head Name');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('771', 'income_sheet', 'Income Sheet');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('772', 'recruitment', ' Recruitment');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('773', 'ref_number', 'Reference Number');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('774', 'employee_signature', 'Employee Signature');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('775', 'name_of_bank', 'Name Of Bank');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('776', 'net_salary', 'Net Salary');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('777', 'in_word', 'In Word');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('778', 'total_deduction', 'Total Deduction');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('779', 'total_addition', 'Total Addition');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('780', 'basic_salary', 'Basic Salary');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('781', 'earnings', 'Earnings');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('782', 'salary_date', 'Salary Date');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('783', 'money_receipt', 'Money Receipt');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('784', 'balance_adjustment', 'Balance Adjustment');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('785', 'parent_head', 'Parent Head');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('786', 'child_head', 'Child Head');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('787', 'due_amount', 'Due Amount');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('788', 'loan_payment', 'Loan Payment');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('789', 'todays_notice', 'Today\'s Notice');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('790', 'attend_employee', 'Attend Employee');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('791', 'department_wise', 'Department Wise');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('792', 'income_expense', 'Income Expense');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('793', 'todays_leave', 'Today\'s Leave');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('794', 'leave_day', 'Leave Day');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('795', 'leave_finish', 'Leave Finish');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('796', 'loan_amount', 'Loan Amount');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('797', 'leave_employee', 'Leave Employee');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('798', 'absent_employee', 'Absent Employee');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('799', 'worked_hour', 'Worked Hours');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('800', 'new_password', 'New Password');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('801', 'latitude', 'Latitude');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('802', 'longitude', 'Longitude');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('803', 'acceptablerange', 'Acceptable Range');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('804', 'googleapi_authkey', 'Google Api Auth Key');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('805', 'approve', 'Approve');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('806', 'decline', 'Decline');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('807', 'attendance_history', 'Attendance History');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('808', 'give_attendance', 'Give Attendance');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('809', 'ledger_history', 'Ledger History');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('810', 'request_leave', 'Request Leave');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('811', 'my_profile', 'My Profile');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('812', 'salary_statement', 'Salary Statement');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('813', 'notices', 'Notice');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('814', 'working_hour', 'Working Hour');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('815', 'qr_attendance', 'QR Attendance');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('816', 'leave_remaining', 'Leave Remaining');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('817', 'total_attendance', 'Total Attendance');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('818', 'day_absent', 'Day Absent');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('819', 'day_present', 'Day Present');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('820', 'previous', 'Previous');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('821', 'network_alert', 'Check Network Connection');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('822', 'select_date', 'Select Date');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('823', 'attendance_log', 'Attendance Log');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('824', 'in', 'In');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('825', 'out', 'Out');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('826', 'load_more', 'Load More');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('827', 'data_not_found', 'Data Not Found');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('828', 'worked', 'Worked');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('829', 'wastage', 'Wastage');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('830', 'punch_time', 'Punch Time');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('831', 'loading', 'Loading ...');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('832', 'wrong_info_alert', 'Some Information Was Wrong There');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('833', 'from_to_date_alrt', 'From And To Date Field Are Require');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('834', 'qr_scan', 'QR Scan');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('835', 'stop_scan', 'Stop Scan');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('836', 'scan_again', 'Scan Again');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('837', 'confirm_attendance', 'Confirm Attendance');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('838', 'scan_alert', 'Your Scan Qr Was Wrong!! Please Scan Again');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('839', 'attn_success_mgs', 'Attendance Successfully Saved');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('840', 'you_r_not_in_office', 'You Are Not In The Office Location');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('841', 'out_of_range', 'Out Of Range');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('842', 'request_for_leave', 'Request For Leave');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('843', 'leave_reason', 'Leave Reason');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('844', 'write_reason', 'Write Reason');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('845', 'send_request', 'Send Request');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('846', 'leave_his_status', 'Leave History Status');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('847', 'total_tax', 'Total Tax');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('848', 'employment_date', 'Employment Date');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('849', 'notice_details', 'Notice Details');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('850', 'no_notice_to_show', 'No Notice to Show');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('851', 'welcome_msg', 'Welcome To HRM');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('852', 'enter_your_email', 'Enter Your Email');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('853', 'enter_your_password', 'Enter Your Password');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('854', 'cannot_remember_pass', 'Can not Remember Password');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('855', 'forgot_password', 'Forgot Password');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('856', 'email_pass_cannot_empt', 'Email or password can not be empty');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('857', 'email_format_was_not_right', 'Email format was not Right!');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('858', 'email_or_pass_not_matched', 'Email or password not matched!');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('859', 'reset_your_password', 'Reset Your Password');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('860', 'your_remember_password', 'You Remember Password');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('861', 'back_to_login', 'Back to Login');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('862', 'email_fild_can_not_empty', 'Email Field can not be empty');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('863', 'email_not_found', 'Email Not Found');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('864', 'successfully_send_email', 'Successfully Send Email!');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('865', 'email_is_not_valid', 'Email Is Not Valid');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('866', 'sorry_email_not_sent', 'Sorry Email Not Sent');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('867', 'day_leave', 'Day Leave');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('868', 'search_work_details', 'Search Work Details');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('869', 'times', 'Time');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('870', 'request_not_send', 'Request Not Send');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('871', 'leave_request_success', 'Your Leave Request SuccessFul');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('872', 'all_field_are_required', 'All Field Are Required');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('873', 'plz_select_data_properly', 'Please select date properly');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('874', 'pending', 'Pending');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('875', 'unpaid', 'Unpaid');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('876', 'salary_details', 'Salary Details');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('877', 'worked_days', 'Worked Days');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('878', 'monthly_attendance', 'Monthly Attendance');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('879', 'year', 'Year');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('880', 'month', 'Month');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('881', 'missing_attendance', 'Missing Attendance');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('882', 'daily_presents', 'Daily Presents');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('883', 'all', 'All');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('884', 'daily_absent', 'Daily Absent');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('885', 'monthly_presents', 'Monthly Presents');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('886', 'monthly_absent', 'Monthly Absent');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('887', 'leave_report', 'Leave Report');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('888', 'employee_on_leave', 'Employee On Leave');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('889', 'leave_balance', 'Leave Balance');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('890', 'without_weekend', 'Without Weekend');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('891', 'new_recruited_employee', 'New Recruited');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('892', 'todays_present', 'Today\'s Presents');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('893', 'todays_absent', 'Today\'s Absents');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('894', 'male', 'Male');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('895', 'female', 'Female');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('896', 'latest_notice', 'Latest Notice');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('897', 'attendance_last_30days', 'Attendance (Last 30 Days)');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('898', 'recruited_current_year', 'Recruited (Current Year)');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('899', 'absent_15days', 'Absent (Last 15 Days)');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('900', 'loanreceive', 'Loan Received');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('901', 'current_year', 'Current Year');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('902', 'awarded', 'Awarded');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('903', 'loanpayment', 'Loan Payment');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('904', 'login_info', 'Login Info');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('905', 'user_email', 'User Email');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('906', 'update_now', 'Update Now');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('907', 'notesupdate', 'Note: If you want to update software,you Must have immediate previous version');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('908', 'purchase_key', 'Purchase Key');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('909', 'mobile_app_setting', 'Mobile App Setting(Addons)');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('910', 'noupdates', 'No update available');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('911', 'update_attendence', 'Update Attendence');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('912', 'successfully_exported', 'Successfully Exported');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('913', 'export_attendance', 'Export Attendance');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('914', 'bulk_export', 'Bulk Export');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('915', 'point_shared_by', 'Point Shared By');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('916', 'update_collaborative_point', 'Update Collaborative Point');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('917', 'add_collaborative_point', 'Add Collaborative Points');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('918', 'update_management_point', 'Update Management Point');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('919', 'point', 'Points');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('920', 'add_management_point', 'Add Management Points');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('921', 'management_point', 'Management Points');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('922', 'update_point_category', 'Update Point Category');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('923', 'point_category', 'Point Category');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('924', 'add_point_category', 'Add Point Category');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('925', 'attendence_end', 'Attendence End');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('926', 'attendence_start', 'Attendence Start');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('927', 'attendence_point', 'Attendance Points');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('928', 'general_point', 'General Points');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('929', 'employee_point', 'Employee Points');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('930', 'collaborative_point', 'Collaborative Points');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('931', 'management_point', 'Management Points');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('932', 'point_categories', 'Point Categories');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('933', 'point_settings', 'Point Settings');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('934', 'rewardpoint', 'Reward Points');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('935', 'successfully_uploaded', 'Successfully Uploaded');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('936', 'buy_now', 'Buy Now');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('937', 'invalid_purchase_key', 'Invalid Purchase Key');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('938', 'addon', 'Add-ons');


#
# TABLE STRUCTURE FOR: leave_apply
#

DROP TABLE IF EXISTS `leave_apply`;

CREATE TABLE `leave_apply` (
  `leave_appl_id` int(11) NOT NULL AUTO_INCREMENT,
  `employee_id` varchar(20) NOT NULL,
  `leave_type_id` int(2) NOT NULL,
  `apply_strt_date` date DEFAULT NULL,
  `apply_end_date` date DEFAULT NULL,
  `apply_day` int(11) NOT NULL,
  `leave_aprv_strt_date` date DEFAULT NULL,
  `leave_aprv_end_date` date DEFAULT NULL,
  `num_aprv_day` varchar(15) NOT NULL,
  `reason` varchar(100) NOT NULL,
  `apply_hard_copy` text DEFAULT NULL,
  `apply_date` date DEFAULT NULL,
  `approve_date` date DEFAULT NULL,
  `approved_by` varchar(30) NOT NULL,
  `leave_type` varchar(50) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  PRIMARY KEY (`leave_appl_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO `leave_apply` (`leave_appl_id`, `employee_id`, `leave_type_id`, `apply_strt_date`, `apply_end_date`, `apply_day`, `leave_aprv_strt_date`, `leave_aprv_end_date`, `num_aprv_day`, `reason`, `apply_hard_copy`, `apply_date`, `approve_date`, `approved_by`, `leave_type`, `status`) VALUES ('1', '1', '1', '2021-03-17', '2021-03-19', '3', '2021-03-17', '2021-03-19', '3', 'test', '', '2021-03-16', '2021-03-16', '3', '', '1');


#
# TABLE STRUCTURE FOR: leave_type
#

DROP TABLE IF EXISTS `leave_type`;

CREATE TABLE `leave_type` (
  `leave_type_id` int(2) NOT NULL AUTO_INCREMENT,
  `leave_type` varchar(50) NOT NULL,
  `leave_days` int(2) NOT NULL,
  PRIMARY KEY (`leave_type_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

INSERT INTO `leave_type` (`leave_type_id`, `leave_type`, `leave_days`) VALUES ('1', 'Sick', '3');
INSERT INTO `leave_type` (`leave_type_id`, `leave_type`, `leave_days`) VALUES ('2', 'Maternity', '5');


#
# TABLE STRUCTURE FOR: loan_installment
#

DROP TABLE IF EXISTS `loan_installment`;

CREATE TABLE `loan_installment` (
  `loan_inst_id` int(11) NOT NULL AUTO_INCREMENT,
  `employee_id` varchar(21) CHARACTER SET latin1 NOT NULL,
  `loan_id` varchar(21) CHARACTER SET latin1 NOT NULL,
  `installment_amount` varchar(20) CHARACTER SET latin1 NOT NULL,
  `payment` varchar(20) CHARACTER SET latin1 NOT NULL,
  `date` varchar(20) CHARACTER SET latin1 NOT NULL,
  `received_by` varchar(20) CHARACTER SET latin1 NOT NULL,
  `installment_no` varchar(20) CHARACTER SET latin1 NOT NULL DEFAULT '1',
  `notes` varchar(80) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`loan_inst_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

INSERT INTO `loan_installment` (`loan_inst_id`, `employee_id`, `loan_id`, `installment_amount`, `payment`, `date`, `received_by`, `installment_no`, `notes`) VALUES ('1', '2', '1', '25500', '25500', '2021-03-16', '3', '1', 'dfdfdf');
INSERT INTO `loan_installment` (`loan_inst_id`, `employee_id`, `loan_id`, `installment_amount`, `payment`, `date`, `received_by`, `installment_no`, `notes`) VALUES ('2', '2', '1', '25500', '25500', '2021-03-16', '3', '2', 'ghghgh');


#
# TABLE STRUCTURE FOR: marital_info
#

DROP TABLE IF EXISTS `marital_info`;

CREATE TABLE `marital_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `marital_sta` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

INSERT INTO `marital_info` (`id`, `marital_sta`) VALUES ('1', 'Single');
INSERT INTO `marital_info` (`id`, `marital_sta`) VALUES ('2', 'Married');
INSERT INTO `marital_info` (`id`, `marital_sta`) VALUES ('3', 'Divorced');
INSERT INTO `marital_info` (`id`, `marital_sta`) VALUES ('4', 'Widowed');
INSERT INTO `marital_info` (`id`, `marital_sta`) VALUES ('5', 'Other');


#
# TABLE STRUCTURE FOR: message
#

DROP TABLE IF EXISTS `message`;

CREATE TABLE `message` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sender_id` int(11) NOT NULL,
  `receiver_id` int(11) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `datetime` datetime NOT NULL,
  `sender_status` tinyint(1) NOT NULL DEFAULT 0 COMMENT '0=unseen, 1=seen, 2=delete',
  `receiver_status` tinyint(1) NOT NULL DEFAULT 0 COMMENT '0=unseen, 1=seen, 2=delete',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# TABLE STRUCTURE FOR: module
#

DROP TABLE IF EXISTS `module`;

CREATE TABLE `module` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(255) NOT NULL,
  `directory` varchar(100) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=utf8;

INSERT INTO `module` (`id`, `name`, `description`, `image`, `directory`, `status`) VALUES ('39', 'attendance Details ', 'Simple attendance processing System', 'application/modules/attendance/assets/images/thumbnail.jpg', 'attendance', '1');
INSERT INTO `module` (`id`, `name`, `description`, `image`, `directory`, `status`) VALUES ('40', 'Employee circulation processing System', 'Simple circulation processing System', 'application/modules/circularprocess/assets/images/thumbnail.jpg', 'circularprocess', '1');
INSERT INTO `module` (`id`, `name`, `description`, `image`, `directory`, `status`) VALUES ('41', 'Employee Details ', 'Simple hrm processing System', 'application/modules/employee/assets/images/thumbnail.jpg', 'employee', '1');
INSERT INTO `module` (`id`, `name`, `description`, `image`, `directory`, `status`) VALUES ('42', 'Leave Details ', 'Simple leave processing System', 'application/modules/leave/assets/images/thumbnail.jpg', 'leave', '1');
INSERT INTO `module` (`id`, `name`, `description`, `image`, `directory`, `status`) VALUES ('43', 'Loan Details ', 'Simple loan processing System', 'application/modules/loan/assets/images/thumbnail.jpg', 'loan', '1');
INSERT INTO `module` (`id`, `name`, `description`, `image`, `directory`, `status`) VALUES ('44', 'TAX Details ', 'Simple tax processing System', 'application/modules/tax/assets/images/thumbnail.jpg', 'tax', '1');
INSERT INTO `module` (`id`, `name`, `description`, `image`, `directory`, `status`) VALUES ('46', 'Payroll Details ', 'Simple payroll processing System', 'application/modules/payroll/assets/images/thumbnail.jpg', 'payroll', '1');
INSERT INTO `module` (`id`, `name`, `description`, `image`, `directory`, `status`) VALUES ('48', 'Account', 'Account information', 'application/modules/account/assets/images/thumbnail.jpg', 'account', '1');
INSERT INTO `module` (`id`, `name`, `description`, `image`, `directory`, `status`) VALUES ('49', 'Notice Details ', 'Simple Notice', 'application/modules/noticeboard/assets/images/thumbnail.jpg', 'noticeboard', '1');
INSERT INTO `module` (`id`, `name`, `description`, `image`, `directory`, `status`) VALUES ('50', 'Award Details ', 'Simple Award', 'application/modules/award/assets/images/thumbnail.jpg', 'award', '1');
INSERT INTO `module` (`id`, `name`, `description`, `image`, `directory`, `status`) VALUES ('52', 'asset Details ', 'Simple asset', 'application/modules/asset/assets/images/thumbnail.jpg', 'asset', '1');


#
# TABLE STRUCTURE FOR: module_permission
#

DROP TABLE IF EXISTS `module_permission`;

CREATE TABLE `module_permission` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fk_module_id` int(11) NOT NULL,
  `fk_user_id` int(11) NOT NULL,
  `create` tinyint(1) DEFAULT NULL,
  `read` tinyint(1) DEFAULT NULL,
  `update` tinyint(1) DEFAULT NULL,
  `delete` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_module_id` (`fk_module_id`),
  KEY `fk_user_id` (`fk_user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# TABLE STRUCTURE FOR: module_purchase_key
#

DROP TABLE IF EXISTS `module_purchase_key`;

CREATE TABLE `module_purchase_key` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `identity` varchar(250) DEFAULT NULL,
  `purchase_key` varchar(255) DEFAULT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

#
# TABLE STRUCTURE FOR: notice_board
#

DROP TABLE IF EXISTS `notice_board`;

CREATE TABLE `notice_board` (
  `notice_id` int(11) NOT NULL AUTO_INCREMENT,
  `notice_descriptiion` text NOT NULL,
  `notice_date` date NOT NULL,
  `notice_type` varchar(50) NOT NULL,
  `notice_by` varchar(50) NOT NULL,
  `notice_attachment` text DEFAULT NULL,
  PRIMARY KEY (`notice_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

#
# TABLE STRUCTURE FOR: pay_frequency
#

DROP TABLE IF EXISTS `pay_frequency`;

CREATE TABLE `pay_frequency` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `frequency_name` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

INSERT INTO `pay_frequency` (`id`, `frequency_name`) VALUES ('1', 'Weekly');
INSERT INTO `pay_frequency` (`id`, `frequency_name`) VALUES ('2', 'Biweekly');
INSERT INTO `pay_frequency` (`id`, `frequency_name`) VALUES ('3', 'Annual');
INSERT INTO `pay_frequency` (`id`, `frequency_name`) VALUES ('4', 'Monthly');


#
# TABLE STRUCTURE FOR: payroll_holiday
#

DROP TABLE IF EXISTS `payroll_holiday`;

CREATE TABLE `payroll_holiday` (
  `payrl_holi_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `holiday_name` varchar(30) CHARACTER SET latin1 NOT NULL,
  `start_date` varchar(30) CHARACTER SET latin1 NOT NULL,
  `end_date` varchar(30) CHARACTER SET latin1 NOT NULL,
  `no_of_days` varchar(30) CHARACTER SET latin1 NOT NULL,
  `created_by` varchar(30) CHARACTER SET latin1 NOT NULL,
  `updated_by` varchar(30) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`payrl_holi_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

INSERT INTO `payroll_holiday` (`payrl_holi_id`, `holiday_name`, `start_date`, `end_date`, `no_of_days`, `created_by`, `updated_by`) VALUES ('1', 'Casual', '2021-03-17', '2021-03-19', '3', '', '');
INSERT INTO `payroll_holiday` (`payrl_holi_id`, `holiday_name`, `start_date`, `end_date`, `no_of_days`, `created_by`, `updated_by`) VALUES ('3', 'Sick', '2021-03-17', '2021-03-19', '3', '', '');


#
# TABLE STRUCTURE FOR: payroll_tax_collection
#

DROP TABLE IF EXISTS `payroll_tax_collection`;

CREATE TABLE `payroll_tax_collection` (
  `tax_coll_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `employee_id` varchar(30) CHARACTER SET latin1 NOT NULL,
  `date_start` varchar(30) CHARACTER SET latin1 NOT NULL,
  `amount_tax` varchar(30) CHARACTER SET latin1 NOT NULL,
  `collection_by` varchar(30) CHARACTER SET latin1 NOT NULL,
  `date_end` varchar(30) CHARACTER SET latin1 NOT NULL,
  `income_net_period` varchar(30) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`tax_coll_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# TABLE STRUCTURE FOR: payroll_tax_setup
#

DROP TABLE IF EXISTS `payroll_tax_setup`;

CREATE TABLE `payroll_tax_setup` (
  `tax_setup_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `start_amount` varchar(30) CHARACTER SET latin1 NOT NULL,
  `end_amount` varchar(30) CHARACTER SET latin1 NOT NULL,
  `rate` varchar(30) CHARACTER SET latin1 NOT NULL,
  `status` varchar(30) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`tax_setup_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# TABLE STRUCTURE FOR: point_attendence
#

DROP TABLE IF EXISTS `point_attendence`;

CREATE TABLE `point_attendence` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `employee_id` varchar(50) NOT NULL,
  `in_time` varchar(50) NOT NULL,
  `point` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `create_date` datetime NOT NULL,
  `created_by` varchar(50) NOT NULL,
  `update_date` datetime NOT NULL,
  `update_by` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

INSERT INTO `point_attendence` (`id`, `employee_id`, `in_time`, `point`, `description`, `create_date`, `created_by`, `update_date`, `update_by`) VALUES ('1', '1', '07:50', '1', '', '2021-03-16 00:00:00', '1', '2021-03-16 00:00:00', '1');
INSERT INTO `point_attendence` (`id`, `employee_id`, `in_time`, `point`, `description`, `create_date`, `created_by`, `update_date`, `update_by`) VALUES ('4', '1', '10:30', '0', '', '2021-03-15 00:00:00', '1', '0000-00-00 00:00:00', '');
INSERT INTO `point_attendence` (`id`, `employee_id`, `in_time`, `point`, `description`, `create_date`, `created_by`, `update_date`, `update_by`) VALUES ('5', '2', '09:20', '1', '', '2021-03-16 00:00:00', '3', '2021-03-16 00:00:00', '1');


#
# TABLE STRUCTURE FOR: point_categories
#

DROP TABLE IF EXISTS `point_categories`;

CREATE TABLE `point_categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `point_category` varchar(100) DEFAULT NULL,
  `created_by` varchar(50) DEFAULT NULL,
  `update_by` varchar(50) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

INSERT INTO `point_categories` (`id`, `point_category`, `created_by`, `update_by`, `created_at`, `update_at`) VALUES ('1', 'Management Point', '1', NULL, '2021-03-16 12:47:10', NULL);
INSERT INTO `point_categories` (`id`, `point_category`, `created_by`, `update_by`, `created_at`, `update_at`) VALUES ('2', 'Behaviours', '1', NULL, '2021-03-16 12:47:19', NULL);
INSERT INTO `point_categories` (`id`, `point_category`, `created_by`, `update_by`, `created_at`, `update_at`) VALUES ('3', 'Successful Project', '1', NULL, '2021-03-16 12:47:28', NULL);


#
# TABLE STRUCTURE FOR: point_collaborative
#

DROP TABLE IF EXISTS `point_collaborative`;

CREATE TABLE `point_collaborative` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `point_shared_by` varchar(50) DEFAULT NULL COMMENT 'Employee shared point',
  `point_shared_with` varchar(50) DEFAULT NULL COMMENT 'Employee received point',
  `reason` text DEFAULT NULL,
  `point` varchar(50) DEFAULT NULL,
  `point_date` date DEFAULT NULL,
  `create_date` datetime DEFAULT NULL,
  `created_by` varchar(50) DEFAULT NULL COMMENT 'users',
  `update_date` datetime DEFAULT NULL,
  `update_by` varchar(50) DEFAULT NULL COMMENT 'users',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

INSERT INTO `point_collaborative` (`id`, `point_shared_by`, `point_shared_with`, `reason`, `point`, `point_date`, `create_date`, `created_by`, `update_date`, `update_by`) VALUES ('1', '1', '2', 'hjhjh', '1', '2021-02-16', '2021-03-16 01:54:06', '2', NULL, NULL);


#
# TABLE STRUCTURE FOR: point_management
#

DROP TABLE IF EXISTS `point_management`;

CREATE TABLE `point_management` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `employee_id` varchar(50) DEFAULT NULL,
  `point_category` varchar(50) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `point` varchar(50) DEFAULT NULL,
  `create_date` datetime DEFAULT NULL,
  `created_by` varchar(50) DEFAULT NULL,
  `update_date` datetime DEFAULT NULL,
  `update_by` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

INSERT INTO `point_management` (`id`, `employee_id`, `point_category`, `description`, `point`, `create_date`, `created_by`, `update_date`, `update_by`) VALUES ('1', '1', '2', 'fgfgfg', '5', '2021-03-16 02:02:05', '1', NULL, NULL);


#
# TABLE STRUCTURE FOR: point_reward
#

DROP TABLE IF EXISTS `point_reward`;

CREATE TABLE `point_reward` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `employee_id` varchar(50) DEFAULT NULL COMMENT 'employee id',
  `attendence` varchar(50) DEFAULT NULL COMMENT 'attendence points',
  `management` varchar(50) DEFAULT NULL COMMENT 'management points',
  `collaborative` varchar(50) DEFAULT NULL COMMENT 'collaborative points',
  `total` int(50) DEFAULT NULL,
  `date` date DEFAULT NULL COMMENT 'pointing time',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

INSERT INTO `point_reward` (`id`, `employee_id`, `attendence`, `management`, `collaborative`, `total`, `date`) VALUES ('1', '1', '1', '5', NULL, '6', '2021-03-16');
INSERT INTO `point_reward` (`id`, `employee_id`, `attendence`, `management`, `collaborative`, `total`, `date`) VALUES ('2', '2', NULL, NULL, '1', '1', '2021-02-16');
INSERT INTO `point_reward` (`id`, `employee_id`, `attendence`, `management`, `collaborative`, `total`, `date`) VALUES ('3', '2', '1', NULL, NULL, '1', '2021-03-16');


#
# TABLE STRUCTURE FOR: point_settings
#

DROP TABLE IF EXISTS `point_settings`;

CREATE TABLE `point_settings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `general_point` varchar(50) DEFAULT NULL COMMENT 'Maximum limit for collaborative points',
  `attendence_point` varchar(50) DEFAULT NULL,
  `attendence_start` varchar(50) DEFAULT NULL,
  `attendence_end` varchar(50) DEFAULT NULL,
  `collaborative_start` date DEFAULT NULL,
  `collaborative_end` date DEFAULT NULL,
  `created_by` varchar(50) DEFAULT NULL,
  `updated_by` varchar(50) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

INSERT INTO `point_settings` (`id`, `general_point`, `attendence_point`, `attendence_start`, `attendence_end`, `collaborative_start`, `collaborative_end`, `created_by`, `updated_by`, `created_at`, `update_at`) VALUES ('5', '3', '1', '09:30', '10:10', '2021-03-01', '2021-03-16', '19', '1', '2020-12-29 06:43:13', '2021-03-16 12:46:56');


#
# TABLE STRUCTURE FOR: position
#

DROP TABLE IF EXISTS `position`;

CREATE TABLE `position` (
  `pos_id` int(11) NOT NULL AUTO_INCREMENT,
  `position_name` varchar(255) CHARACTER SET latin1 NOT NULL,
  `position_details` varchar(255) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`pos_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

INSERT INTO `position` (`pos_id`, `position_name`, `position_details`) VALUES ('1', 'Programmer', 'Programmer');
INSERT INTO `position` (`pos_id`, `position_name`, `position_details`) VALUES ('2', 'Team Leader', 'Team Leader');
INSERT INTO `position` (`pos_id`, `position_name`, `position_details`) VALUES ('3', 'QA', 'QA');


#
# TABLE STRUCTURE FOR: rate_type
#

DROP TABLE IF EXISTS `rate_type`;

CREATE TABLE `rate_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `r_type_name` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# TABLE STRUCTURE FOR: salary_setup_header
#

DROP TABLE IF EXISTS `salary_setup_header`;

CREATE TABLE `salary_setup_header` (
  `s_s_h_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `employee_id` varchar(30) CHARACTER SET latin1 NOT NULL,
  `salary_payable` varchar(30) CHARACTER SET latin1 DEFAULT NULL,
  `absent_deduct` varchar(30) CHARACTER SET latin1 DEFAULT NULL,
  `tax_manager` varchar(30) CHARACTER SET latin1 NOT NULL,
  `status` varchar(30) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`s_s_h_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

INSERT INTO `salary_setup_header` (`s_s_h_id`, `employee_id`, `salary_payable`, `absent_deduct`, `tax_manager`, `status`) VALUES ('1', '34', NULL, '0', '0', '');
INSERT INTO `salary_setup_header` (`s_s_h_id`, `employee_id`, `salary_payable`, `absent_deduct`, `tax_manager`, `status`) VALUES ('2', '34', NULL, '0', '0', '');
INSERT INTO `salary_setup_header` (`s_s_h_id`, `employee_id`, `salary_payable`, `absent_deduct`, `tax_manager`, `status`) VALUES ('3', '34', NULL, '0', '0', '');
INSERT INTO `salary_setup_header` (`s_s_h_id`, `employee_id`, `salary_payable`, `absent_deduct`, `tax_manager`, `status`) VALUES ('4', '1', NULL, '0', '0', '');
INSERT INTO `salary_setup_header` (`s_s_h_id`, `employee_id`, `salary_payable`, `absent_deduct`, `tax_manager`, `status`) VALUES ('5', '34', NULL, '0', '0', '');
INSERT INTO `salary_setup_header` (`s_s_h_id`, `employee_id`, `salary_payable`, `absent_deduct`, `tax_manager`, `status`) VALUES ('6', '34', NULL, '0', '0', '');
INSERT INTO `salary_setup_header` (`s_s_h_id`, `employee_id`, `salary_payable`, `absent_deduct`, `tax_manager`, `status`) VALUES ('7', '34', NULL, '0', '0', '');
INSERT INTO `salary_setup_header` (`s_s_h_id`, `employee_id`, `salary_payable`, `absent_deduct`, `tax_manager`, `status`) VALUES ('8', '34', NULL, '0', '0', '');
INSERT INTO `salary_setup_header` (`s_s_h_id`, `employee_id`, `salary_payable`, `absent_deduct`, `tax_manager`, `status`) VALUES ('9', '1', NULL, '0', '0', '');
INSERT INTO `salary_setup_header` (`s_s_h_id`, `employee_id`, `salary_payable`, `absent_deduct`, `tax_manager`, `status`) VALUES ('10', '2', NULL, '0', '0', '');


#
# TABLE STRUCTURE FOR: salary_sheet_generate
#

DROP TABLE IF EXISTS `salary_sheet_generate`;

CREATE TABLE `salary_sheet_generate` (
  `ssg_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(30) CHARACTER SET latin1 NOT NULL,
  `gdate` varchar(20) DEFAULT NULL,
  `start_date` varchar(30) CHARACTER SET latin1 NOT NULL,
  `end_date` varchar(30) CHARACTER SET latin1 NOT NULL,
  `generate_by` varchar(30) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`ssg_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

INSERT INTO `salary_sheet_generate` (`ssg_id`, `name`, `gdate`, `start_date`, `end_date`, `generate_by`) VALUES ('1', 'March 2020', '2020-03-18', '2020-3-1', '2020-3-31', '');
INSERT INTO `salary_sheet_generate` (`ssg_id`, `name`, `gdate`, `start_date`, `end_date`, `generate_by`) VALUES ('2', 'January 2020', '2020-03-23', '2020-1-1', '2020-1-31', '');
INSERT INTO `salary_sheet_generate` (`ssg_id`, `name`, `gdate`, `start_date`, `end_date`, `generate_by`) VALUES ('3', 'February 2020', '2020-03-23', '2020-2-1', '2020-2-29', '');
INSERT INTO `salary_sheet_generate` (`ssg_id`, `name`, `gdate`, `start_date`, `end_date`, `generate_by`) VALUES ('6', 'August 2020', '2020-03-23', '2020-8-1', '2020-8-31', '');
INSERT INTO `salary_sheet_generate` (`ssg_id`, `name`, `gdate`, `start_date`, `end_date`, `generate_by`) VALUES ('7', 'March 2021', '2021-03-16', '2021-3-1', '2021-3-31', '');


#
# TABLE STRUCTURE FOR: salary_type
#

DROP TABLE IF EXISTS `salary_type`;

CREATE TABLE `salary_type` (
  `salary_type_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `sal_name` varchar(50) CHARACTER SET latin1 NOT NULL,
  `emp_sal_type` varchar(50) CHARACTER SET latin1 NOT NULL,
  `default_amount` varchar(30) NOT NULL,
  `status` varchar(50) NOT NULL,
  PRIMARY KEY (`salary_type_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

INSERT INTO `salary_type` (`salary_type_id`, `sal_name`, `emp_sal_type`, `default_amount`, `status`) VALUES ('1', 'Health', '1', '', '');
INSERT INTO `salary_type` (`salary_type_id`, `sal_name`, `emp_sal_type`, `default_amount`, `status`) VALUES ('2', 'House Rent', '1', '', '');
INSERT INTO `salary_type` (`salary_type_id`, `sal_name`, `emp_sal_type`, `default_amount`, `status`) VALUES ('3', 'PF', '0', '', '');
INSERT INTO `salary_type` (`salary_type_id`, `sal_name`, `emp_sal_type`, `default_amount`, `status`) VALUES ('4', 'Mobile Bill', '1', '', '');


#
# TABLE STRUCTURE FOR: sec_menu_item
#

DROP TABLE IF EXISTS `sec_menu_item`;

CREATE TABLE `sec_menu_item` (
  `menu_id` int(11) NOT NULL AUTO_INCREMENT,
  `menu_title` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `page_url` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `module` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `parent_menu` int(11) DEFAULT NULL,
  `is_report` tinyint(1) DEFAULT NULL,
  `createby` int(11) NOT NULL,
  `createdate` datetime NOT NULL,
  PRIMARY KEY (`menu_id`)
) ENGINE=InnoDB AUTO_INCREMENT=226 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `sec_menu_item` (`menu_id`, `menu_title`, `page_url`, `module`, `parent_menu`, `is_report`, `createby`, `createdate`) VALUES ('134', 'asset_type', 'type_form', 'asset', '0', '0', '2', '2018-10-04 00:00:00');
INSERT INTO `sec_menu_item` (`menu_id`, `menu_title`, `page_url`, `module`, `parent_menu`, `is_report`, `createby`, `createdate`) VALUES ('137', 'equipment', 'equipment_form', 'asset', NULL, '0', '2', '2018-10-04 00:00:00');
INSERT INTO `sec_menu_item` (`menu_id`, `menu_title`, `page_url`, `module`, `parent_menu`, `is_report`, `createby`, `createdate`) VALUES ('142', 'asset_assignment', 'maping_form', 'asset', NULL, '0', '2', '2018-10-04 00:00:00');
INSERT INTO `sec_menu_item` (`menu_id`, `menu_title`, `page_url`, `module`, `parent_menu`, `is_report`, `createby`, `createdate`) VALUES ('143', 'return', '', 'asset', NULL, '0', '2', '2018-10-04 00:00:00');
INSERT INTO `sec_menu_item` (`menu_id`, `menu_title`, `page_url`, `module`, `parent_menu`, `is_report`, `createby`, `createdate`) VALUES ('144', 'return_asset', 'asset_return_form', 'asset', '143', '0', '2', '2018-10-04 00:00:00');
INSERT INTO `sec_menu_item` (`menu_id`, `menu_title`, `page_url`, `module`, `parent_menu`, `is_report`, `createby`, `createdate`) VALUES ('145', 'return_list', 'return_list', 'asset', '143', '0', '2', '2018-10-04 00:00:00');
INSERT INTO `sec_menu_item` (`menu_id`, `menu_title`, `page_url`, `module`, `parent_menu`, `is_report`, `createby`, `createdate`) VALUES ('147', 'attendance', '', 'attendance', '0', '0', '2', '2018-10-04 00:00:00');
INSERT INTO `sec_menu_item` (`menu_id`, `menu_title`, `page_url`, `module`, `parent_menu`, `is_report`, `createby`, `createdate`) VALUES ('148', 'atn_form', 'atnview', 'attendance', '147', '0', '2', '2018-10-04 00:00:00');
INSERT INTO `sec_menu_item` (`menu_id`, `menu_title`, `page_url`, `module`, `parent_menu`, `is_report`, `createby`, `createdate`) VALUES ('149', 'new_award', 'award_form', 'award', '0', '0', '2', '2018-10-04 00:00:00');
INSERT INTO `sec_menu_item` (`menu_id`, `menu_title`, `page_url`, `module`, `parent_menu`, `is_report`, `createby`, `createdate`) VALUES ('150', 'candidate_basic_info', '', 'recruitment', '0', '0', '2', '2018-10-04 00:00:00');
INSERT INTO `sec_menu_item` (`menu_id`, `menu_title`, `page_url`, `module`, `parent_menu`, `is_report`, `createby`, `createdate`) VALUES ('151', 'add_canbasic_info', 'canInfo_form', 'recruitment', '150', '0', '2', '2018-10-04 00:00:00');
INSERT INTO `sec_menu_item` (`menu_id`, `menu_title`, `page_url`, `module`, `parent_menu`, `is_report`, `createby`, `createdate`) VALUES ('152', 'can_basicinfo_list', 'canInfoview', 'recruitment', '150', '0', '2', '2018-10-04 00:00:00');
INSERT INTO `sec_menu_item` (`menu_id`, `menu_title`, `page_url`, `module`, `parent_menu`, `is_report`, `createby`, `createdate`) VALUES ('153', 'candidate_shortlist', 'shortlist_form', 'recruitment', '0', '0', '2', '2018-10-04 00:00:00');
INSERT INTO `sec_menu_item` (`menu_id`, `menu_title`, `page_url`, `module`, `parent_menu`, `is_report`, `createby`, `createdate`) VALUES ('154', 'candidate_interview', 'interview_form', 'recruitment', '0', '0', '2', '2018-10-04 00:00:00');
INSERT INTO `sec_menu_item` (`menu_id`, `menu_title`, `page_url`, `module`, `parent_menu`, `is_report`, `createby`, `createdate`) VALUES ('155', 'candidate_selection', 'selection_form', 'recruitment', '0', '0', '2', '2018-10-04 00:00:00');
INSERT INTO `sec_menu_item` (`menu_id`, `menu_title`, `page_url`, `module`, `parent_menu`, `is_report`, `createby`, `createdate`) VALUES ('156', 'department', 'dept_form', 'department', '0', '0', '2', '2018-10-04 00:00:00');
INSERT INTO `sec_menu_item` (`menu_id`, `menu_title`, `page_url`, `module`, `parent_menu`, `is_report`, `createby`, `createdate`) VALUES ('157', 'division', '', 'department', '0', '0', '2', '2018-10-04 00:00:00');
INSERT INTO `sec_menu_item` (`menu_id`, `menu_title`, `page_url`, `module`, `parent_menu`, `is_report`, `createby`, `createdate`) VALUES ('158', 'add_division', 'division_form', 'department', '157', '0', '2', '2018-10-04 00:00:00');
INSERT INTO `sec_menu_item` (`menu_id`, `menu_title`, `page_url`, `module`, `parent_menu`, `is_report`, `createby`, `createdate`) VALUES ('159', 'division_list', 'division_list', 'department', '157', '0', '2', '2018-10-04 00:00:00');
INSERT INTO `sec_menu_item` (`menu_id`, `menu_title`, `page_url`, `module`, `parent_menu`, `is_report`, `createby`, `createdate`) VALUES ('161', 'position', 'position_form', 'employee', '0', '0', '2', '2018-10-04 00:00:00');
INSERT INTO `sec_menu_item` (`menu_id`, `menu_title`, `page_url`, `module`, `parent_menu`, `is_report`, `createby`, `createdate`) VALUES ('162', 'direct_empl', '', 'employee', '0', '0', '2', '2018-10-04 00:00:00');
INSERT INTO `sec_menu_item` (`menu_id`, `menu_title`, `page_url`, `module`, `parent_menu`, `is_report`, `createby`, `createdate`) VALUES ('163', 'add_employee', 'employ_form', 'employee', '162', '0', '2', '2018-10-04 00:00:00');
INSERT INTO `sec_menu_item` (`menu_id`, `menu_title`, `page_url`, `module`, `parent_menu`, `is_report`, `createby`, `createdate`) VALUES ('164', 'manage_employee', 'employee_view', 'employee', '162', '0', '2', '2018-10-04 00:00:00');
INSERT INTO `sec_menu_item` (`menu_id`, `menu_title`, `page_url`, `module`, `parent_menu`, `is_report`, `createby`, `createdate`) VALUES ('165', 'emp_performance', 'emp_performance_form', 'employee', '0', '0', '2', '2018-10-04 00:00:00');
INSERT INTO `sec_menu_item` (`menu_id`, `menu_title`, `page_url`, `module`, `parent_menu`, `is_report`, `createby`, `createdate`) VALUES ('167', 'weekly_holiday', 'weeklyform', 'leave', '0', '0', '2', '2018-10-08 00:00:00');
INSERT INTO `sec_menu_item` (`menu_id`, `menu_title`, `page_url`, `module`, `parent_menu`, `is_report`, `createby`, `createdate`) VALUES ('168', 'holiday', 'holiday_form', 'leave', '0', '0', '2', '2018-10-08 00:00:00');
INSERT INTO `sec_menu_item` (`menu_id`, `menu_title`, `page_url`, `module`, `parent_menu`, `is_report`, `createby`, `createdate`) VALUES ('169', 'others_leave_application', '', 'leave', NULL, '0', '2', '2018-10-08 00:00:00');
INSERT INTO `sec_menu_item` (`menu_id`, `menu_title`, `page_url`, `module`, `parent_menu`, `is_report`, `createby`, `createdate`) VALUES ('170', 'loan_grand', 'grandloan_form', 'loan', '0', '0', '2', '2018-10-08 00:00:00');
INSERT INTO `sec_menu_item` (`menu_id`, `menu_title`, `page_url`, `module`, `parent_menu`, `is_report`, `createby`, `createdate`) VALUES ('171', 'loan_installment', 'installment_form', 'loan', '0', '0', '2', '2018-10-08 00:00:00');
INSERT INTO `sec_menu_item` (`menu_id`, `menu_title`, `page_url`, `module`, `parent_menu`, `is_report`, `createby`, `createdate`) VALUES ('172', 'loan_report', 'ln_report', 'loan', '0', '0', '2', '2018-10-08 00:00:00');
INSERT INTO `sec_menu_item` (`menu_id`, `menu_title`, `page_url`, `module`, `parent_menu`, `is_report`, `createby`, `createdate`) VALUES ('173', 'notice', 'notice_form', 'noticeboard', '0', '0', '2', '2018-10-08 00:00:00');
INSERT INTO `sec_menu_item` (`menu_id`, `menu_title`, `page_url`, `module`, `parent_menu`, `is_report`, `createby`, `createdate`) VALUES ('174', 'salary_type_setup', 'emp_salarysetup_form', 'payroll', NULL, '0', '2', '2018-10-08 00:00:00');
INSERT INTO `sec_menu_item` (`menu_id`, `menu_title`, `page_url`, `module`, `parent_menu`, `is_report`, `createby`, `createdate`) VALUES ('175', 'salary_setup', 'salarysetup_form', 'payroll', '0', '0', '2', '2018-10-08 00:00:00');
INSERT INTO `sec_menu_item` (`menu_id`, `menu_title`, `page_url`, `module`, `parent_menu`, `is_report`, `createby`, `createdate`) VALUES ('176', 'salary_generate', 'salary_generate_form', 'payroll', '0', '0', '2', '2018-10-08 00:00:00');
INSERT INTO `sec_menu_item` (`menu_id`, `menu_title`, `page_url`, `module`, `parent_menu`, `is_report`, `createby`, `createdate`) VALUES ('177', 'employee_reports', '', 'reports', '0', '0', '2', '2018-10-09 00:00:00');
INSERT INTO `sec_menu_item` (`menu_id`, `menu_title`, `page_url`, `module`, `parent_menu`, `is_report`, `createby`, `createdate`) VALUES ('178', 'demographic_report', 'demographic_list', 'reports', '177', '0', '2', '2018-10-09 00:00:00');
INSERT INTO `sec_menu_item` (`menu_id`, `menu_title`, `page_url`, `module`, `parent_menu`, `is_report`, `createby`, `createdate`) VALUES ('179', 'posting_report', 'positional_list', 'reports', '177', '0', '2', '2018-10-09 00:00:00');
INSERT INTO `sec_menu_item` (`menu_id`, `menu_title`, `page_url`, `module`, `parent_menu`, `is_report`, `createby`, `createdate`) VALUES ('180', 'asset', 'assets_list', 'reports', '177', '0', '2', '2018-10-09 00:00:00');
INSERT INTO `sec_menu_item` (`menu_id`, `menu_title`, `page_url`, `module`, `parent_menu`, `is_report`, `createby`, `createdate`) VALUES ('181', 'benifit_report', 'benifit_list', 'reports', '177', '0', '2', '2018-10-09 00:00:00');
INSERT INTO `sec_menu_item` (`menu_id`, `menu_title`, `page_url`, `module`, `parent_menu`, `is_report`, `createby`, `createdate`) VALUES ('182', 'custom_report', 'custom_list', 'reports', '177', '0', '2', '2018-10-09 00:00:00');
INSERT INTO `sec_menu_item` (`menu_id`, `menu_title`, `page_url`, `module`, `parent_menu`, `is_report`, `createby`, `createdate`) VALUES ('183', 'adhoc_report', 'adhoc_form', 'reports', '0', '0', '2', '2018-10-09 00:00:00');
INSERT INTO `sec_menu_item` (`menu_id`, `menu_title`, `page_url`, `module`, `parent_menu`, `is_report`, `createby`, `createdate`) VALUES ('186', 'add_leave_type', 'leave_type_form', 'leave', '169', '0', '2', '2018-10-16 00:00:00');
INSERT INTO `sec_menu_item` (`menu_id`, `menu_title`, `page_url`, `module`, `parent_menu`, `is_report`, `createby`, `createdate`) VALUES ('187', 'leave_application', 'other_leave_application_form', 'leave', '169', '0', '2', '2018-10-16 00:00:00');
INSERT INTO `sec_menu_item` (`menu_id`, `menu_title`, `page_url`, `module`, `parent_menu`, `is_report`, `createby`, `createdate`) VALUES ('188', 'c_o_a', 'treeview', 'accounts', NULL, '0', '2', '2018-10-18 00:00:00');
INSERT INTO `sec_menu_item` (`menu_id`, `menu_title`, `page_url`, `module`, `parent_menu`, `is_report`, `createby`, `createdate`) VALUES ('189', 'balance_adjustment', 'balance_adjustment', 'accounts', '0', '0', '2', '2019-12-14 00:00:00');
INSERT INTO `sec_menu_item` (`menu_id`, `menu_title`, `page_url`, `module`, `parent_menu`, `is_report`, `createby`, `createdate`) VALUES ('190', 'cash_adjustment', 'cash_adjustment', 'accounts', '0', '0', '2', '2019-12-14 00:00:00');
INSERT INTO `sec_menu_item` (`menu_id`, `menu_title`, `page_url`, `module`, `parent_menu`, `is_report`, `createby`, `createdate`) VALUES ('191', 'bank_adjustment', 'bank_adjustment', 'accounts', '0', '0', '2', '2019-12-14 00:00:00');
INSERT INTO `sec_menu_item` (`menu_id`, `menu_title`, `page_url`, `module`, `parent_menu`, `is_report`, `createby`, `createdate`) VALUES ('192', 'payment_type', 'payment_type', 'accounts', '0', '0', '2', '2019-12-14 00:00:00');
INSERT INTO `sec_menu_item` (`menu_id`, `menu_title`, `page_url`, `module`, `parent_menu`, `is_report`, `createby`, `createdate`) VALUES ('193', 'debit_voucher', 'debit_voucher', 'accounts', '0', '0', '2', '2018-10-18 00:00:00');
INSERT INTO `sec_menu_item` (`menu_id`, `menu_title`, `page_url`, `module`, `parent_menu`, `is_report`, `createby`, `createdate`) VALUES ('194', 'credit_voucher', 'credit_voucher', 'accounts', '0', '0', '2', '2018-10-18 00:00:00');
INSERT INTO `sec_menu_item` (`menu_id`, `menu_title`, `page_url`, `module`, `parent_menu`, `is_report`, `createby`, `createdate`) VALUES ('195', 'contra_voucher', 'contra_voucher', 'accounts', '0', '0', '2', '2018-10-18 00:00:00');
INSERT INTO `sec_menu_item` (`menu_id`, `menu_title`, `page_url`, `module`, `parent_menu`, `is_report`, `createby`, `createdate`) VALUES ('196', 'journal_voucher', 'journal_voucher', 'accounts', '0', '0', '2', '2018-10-18 00:00:00');
INSERT INTO `sec_menu_item` (`menu_id`, `menu_title`, `page_url`, `module`, `parent_menu`, `is_report`, `createby`, `createdate`) VALUES ('197', 'voucher_approval', 'voucher_approve', 'accounts', '0', '0', '2', '2018-10-18 00:00:00');
INSERT INTO `sec_menu_item` (`menu_id`, `menu_title`, `page_url`, `module`, `parent_menu`, `is_report`, `createby`, `createdate`) VALUES ('198', 'account_report', '', 'accounts', '0', '0', '2', '2018-10-18 00:00:00');
INSERT INTO `sec_menu_item` (`menu_id`, `menu_title`, `page_url`, `module`, `parent_menu`, `is_report`, `createby`, `createdate`) VALUES ('199', 'voucher_report', 'coa', 'accounts', '194', '0', '2', '2018-10-18 00:00:00');
INSERT INTO `sec_menu_item` (`menu_id`, `menu_title`, `page_url`, `module`, `parent_menu`, `is_report`, `createby`, `createdate`) VALUES ('200', 'cash_book', 'cash_book', 'accounts', '194', '0', '2', '2018-10-18 00:00:00');
INSERT INTO `sec_menu_item` (`menu_id`, `menu_title`, `page_url`, `module`, `parent_menu`, `is_report`, `createby`, `createdate`) VALUES ('201', 'bank_book', 'bank_book', 'accounts', '194', '0', '2', '2018-10-18 00:00:00');
INSERT INTO `sec_menu_item` (`menu_id`, `menu_title`, `page_url`, `module`, `parent_menu`, `is_report`, `createby`, `createdate`) VALUES ('202', 'general_ledger', 'general_ledger', 'accounts', '194', '0', '2', '2018-10-18 00:00:00');
INSERT INTO `sec_menu_item` (`menu_id`, `menu_title`, `page_url`, `module`, `parent_menu`, `is_report`, `createby`, `createdate`) VALUES ('203', 'trial_balance', 'trial_balance', 'accounts', '194', '0', '2', '2018-10-18 00:00:00');
INSERT INTO `sec_menu_item` (`menu_id`, `menu_title`, `page_url`, `module`, `parent_menu`, `is_report`, `createby`, `createdate`) VALUES ('204', 'add_bank', 'add_bank', 'bank', '0', '0', '2', '2019-12-14 00:00:00');
INSERT INTO `sec_menu_item` (`menu_id`, `menu_title`, `page_url`, `module`, `parent_menu`, `is_report`, `createby`, `createdate`) VALUES ('205', 'bank_list', 'bank_list', 'bank', '0', '0', '2', '2019-12-14 00:00:00');
INSERT INTO `sec_menu_item` (`menu_id`, `menu_title`, `page_url`, `module`, `parent_menu`, `is_report`, `createby`, `createdate`) VALUES ('206', 'profit_loss', 'profit_loss_report', 'accounts', '194', '0', '2', '2018-10-18 00:00:00');
INSERT INTO `sec_menu_item` (`menu_id`, `menu_title`, `page_url`, `module`, `parent_menu`, `is_report`, `createby`, `createdate`) VALUES ('207', 'cash_flow', 'cash_flow_report', 'accounts', '194', '0', '2', '2018-10-18 00:00:00');
INSERT INTO `sec_menu_item` (`menu_id`, `menu_title`, `page_url`, `module`, `parent_menu`, `is_report`, `createby`, `createdate`) VALUES ('208', 'coa_print', 'coa_print', 'accounts', '194', '0', '2', '2018-10-18 00:00:00');
INSERT INTO `sec_menu_item` (`menu_id`, `menu_title`, `page_url`, `module`, `parent_menu`, `is_report`, `createby`, `createdate`) VALUES ('211', 'atn_log_datewise', 'attendance_log_datewise', 'attendance', '147', '0', '2', '2019-12-14 00:00:00');
INSERT INTO `sec_menu_item` (`menu_id`, `menu_title`, `page_url`, `module`, `parent_menu`, `is_report`, `createby`, `createdate`) VALUES ('212', 'device_connection', 'device_connect_form', 'attendance', '0', '0', '2', '2019-12-14 00:00:00');
INSERT INTO `sec_menu_item` (`menu_id`, `menu_title`, `page_url`, `module`, `parent_menu`, `is_report`, `createby`, `createdate`) VALUES ('213', 'expense_item', 'add_expense', 'expense', '0', '0', '2', '2019-12-14 00:00:00');
INSERT INTO `sec_menu_item` (`menu_id`, `menu_title`, `page_url`, `module`, `parent_menu`, `is_report`, `createby`, `createdate`) VALUES ('214', 'expense_sheet', 'expense_sheet', 'expense', '0', '0', '2', '2019-12-14 00:00:00');
INSERT INTO `sec_menu_item` (`menu_id`, `menu_title`, `page_url`, `module`, `parent_menu`, `is_report`, `createby`, `createdate`) VALUES ('215', 'expense_statement', 'expense_statement_form', 'expense', '0', '0', '2', '2019-12-14 00:00:00');
INSERT INTO `sec_menu_item` (`menu_id`, `menu_title`, `page_url`, `module`, `parent_menu`, `is_report`, `createby`, `createdate`) VALUES ('216', 'income_field', 'add_income', 'income', '0', '0', '2', '2019-12-14 00:00:00');
INSERT INTO `sec_menu_item` (`menu_id`, `menu_title`, `page_url`, `module`, `parent_menu`, `is_report`, `createby`, `createdate`) VALUES ('217', 'income_sheet', 'income_sheet', 'income', '0', '0', '2', '2019-12-14 00:00:00');
INSERT INTO `sec_menu_item` (`menu_id`, `menu_title`, `page_url`, `module`, `parent_menu`, `is_report`, `createby`, `createdate`) VALUES ('218', 'income_statement', 'income_statement_form', 'income', '0', '0', '2', '2019-12-14 00:00:00');
INSERT INTO `sec_menu_item` (`menu_id`, `menu_title`, `page_url`, `module`, `parent_menu`, `is_report`, `createby`, `createdate`) VALUES ('219', 'emp_sal_payment', 'paymentview', 'payroll', '0', '0', '2', '2019-12-14 00:00:00');
INSERT INTO `sec_menu_item` (`menu_id`, `menu_title`, `page_url`, `module`, `parent_menu`, `is_report`, `createby`, `createdate`) VALUES ('220', 'attendence_point', 'attendence_point', 'rewardpoint', '0', '0', '19', '2020-12-31 00:00:00');
INSERT INTO `sec_menu_item` (`menu_id`, `menu_title`, `page_url`, `module`, `parent_menu`, `is_report`, `createby`, `createdate`) VALUES ('221', 'employee_point', 'employee_point', 'rewardpoint', '0', '0', '1', '2020-12-28 00:00:00');
INSERT INTO `sec_menu_item` (`menu_id`, `menu_title`, `page_url`, `module`, `parent_menu`, `is_report`, `createby`, `createdate`) VALUES ('222', 'collaborative_point', 'collaborative_point', 'rewardpoint', '0', '0', '1', '2020-12-28 00:00:00');
INSERT INTO `sec_menu_item` (`menu_id`, `menu_title`, `page_url`, `module`, `parent_menu`, `is_report`, `createby`, `createdate`) VALUES ('223', 'management_point', 'management_point', 'rewardpoint', '0', '0', '1', '2020-12-28 00:00:00');
INSERT INTO `sec_menu_item` (`menu_id`, `menu_title`, `page_url`, `module`, `parent_menu`, `is_report`, `createby`, `createdate`) VALUES ('224', 'point_categories', 'point_categories', 'rewardpoint', '0', '0', '1', '2020-12-28 00:00:00');
INSERT INTO `sec_menu_item` (`menu_id`, `menu_title`, `page_url`, `module`, `parent_menu`, `is_report`, `createby`, `createdate`) VALUES ('225', 'point_settings', 'point_settings', 'rewardpoint', '0', '0', '1', '2020-12-28 00:00:00');


#
# TABLE STRUCTURE FOR: sec_role_permission
#

DROP TABLE IF EXISTS `sec_role_permission`;

CREATE TABLE `sec_role_permission` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `can_access` tinyint(1) NOT NULL,
  `can_create` tinyint(1) NOT NULL,
  `can_edit` tinyint(1) NOT NULL,
  `can_delete` tinyint(1) NOT NULL,
  `createby` int(11) NOT NULL,
  `createdate` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2924 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2687', '2', '188', '0', '0', '0', '0', '1', '2021-02-17 12:37:50');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2688', '2', '189', '0', '0', '0', '0', '1', '2021-02-17 12:37:50');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2689', '2', '190', '0', '0', '0', '0', '1', '2021-02-17 12:37:50');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2690', '2', '191', '0', '0', '0', '0', '1', '2021-02-17 12:37:50');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2691', '2', '192', '0', '0', '0', '0', '1', '2021-02-17 12:37:50');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2692', '2', '193', '0', '0', '0', '0', '1', '2021-02-17 12:37:50');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2693', '2', '194', '0', '0', '0', '0', '1', '2021-02-17 12:37:50');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2694', '2', '195', '0', '0', '0', '0', '1', '2021-02-17 12:37:50');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2695', '2', '196', '0', '0', '0', '0', '1', '2021-02-17 12:37:50');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2696', '2', '197', '0', '0', '0', '0', '1', '2021-02-17 12:37:50');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2697', '2', '198', '0', '0', '0', '0', '1', '2021-02-17 12:37:50');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2698', '2', '199', '0', '0', '0', '0', '1', '2021-02-17 12:37:50');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2699', '2', '200', '0', '0', '0', '0', '1', '2021-02-17 12:37:50');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2700', '2', '201', '0', '0', '0', '0', '1', '2021-02-17 12:37:50');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2701', '2', '202', '0', '0', '0', '0', '1', '2021-02-17 12:37:50');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2702', '2', '203', '0', '0', '0', '0', '1', '2021-02-17 12:37:50');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2703', '2', '206', '0', '0', '0', '0', '1', '2021-02-17 12:37:50');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2704', '2', '207', '0', '0', '0', '0', '1', '2021-02-17 12:37:50');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2705', '2', '208', '0', '0', '0', '0', '1', '2021-02-17 12:37:50');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2706', '2', '134', '1', '1', '0', '0', '1', '2021-02-17 12:37:50');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2707', '2', '137', '1', '1', '0', '0', '1', '2021-02-17 12:37:50');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2708', '2', '142', '1', '1', '0', '0', '1', '2021-02-17 12:37:50');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2709', '2', '143', '1', '1', '0', '0', '1', '2021-02-17 12:37:50');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2710', '2', '144', '1', '1', '1', '0', '1', '2021-02-17 12:37:50');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2711', '2', '145', '1', '1', '0', '0', '1', '2021-02-17 12:37:50');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2712', '2', '147', '1', '1', '0', '0', '1', '2021-02-17 12:37:50');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2713', '2', '148', '1', '1', '0', '0', '1', '2021-02-17 12:37:50');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2714', '2', '211', '1', '1', '0', '0', '1', '2021-02-17 12:37:50');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2715', '2', '212', '0', '0', '0', '0', '1', '2021-02-17 12:37:50');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2716', '2', '149', '0', '0', '0', '0', '1', '2021-02-17 12:37:50');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2717', '2', '204', '0', '0', '0', '0', '1', '2021-02-17 12:37:50');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2718', '2', '205', '0', '0', '0', '0', '1', '2021-02-17 12:37:50');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2719', '2', '156', '0', '0', '0', '0', '1', '2021-02-17 12:37:50');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2720', '2', '157', '0', '0', '0', '0', '1', '2021-02-17 12:37:50');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2721', '2', '158', '0', '0', '0', '0', '1', '2021-02-17 12:37:50');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2722', '2', '159', '0', '0', '0', '0', '1', '2021-02-17 12:37:50');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2723', '2', '161', '0', '0', '0', '0', '1', '2021-02-17 12:37:50');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2724', '2', '162', '0', '0', '0', '0', '1', '2021-02-17 12:37:50');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2725', '2', '163', '0', '0', '0', '0', '1', '2021-02-17 12:37:50');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2726', '2', '164', '0', '0', '0', '0', '1', '2021-02-17 12:37:50');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2727', '2', '165', '0', '0', '0', '0', '1', '2021-02-17 12:37:50');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2728', '2', '213', '0', '0', '0', '0', '1', '2021-02-17 12:37:50');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2729', '2', '214', '0', '0', '0', '0', '1', '2021-02-17 12:37:50');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2730', '2', '215', '0', '0', '0', '0', '1', '2021-02-17 12:37:50');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2731', '2', '216', '0', '0', '0', '0', '1', '2021-02-17 12:37:50');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2732', '2', '217', '0', '0', '0', '0', '1', '2021-02-17 12:37:50');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2733', '2', '218', '0', '0', '0', '0', '1', '2021-02-17 12:37:50');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2734', '2', '167', '0', '0', '0', '0', '1', '2021-02-17 12:37:50');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2735', '2', '168', '0', '0', '0', '0', '1', '2021-02-17 12:37:50');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2736', '2', '169', '0', '0', '0', '0', '1', '2021-02-17 12:37:50');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2737', '2', '186', '0', '0', '0', '0', '1', '2021-02-17 12:37:50');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2738', '2', '187', '0', '0', '0', '0', '1', '2021-02-17 12:37:50');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2739', '2', '170', '0', '0', '0', '0', '1', '2021-02-17 12:37:50');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2740', '2', '171', '0', '0', '0', '0', '1', '2021-02-17 12:37:50');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2741', '2', '172', '0', '0', '0', '0', '1', '2021-02-17 12:37:50');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2742', '2', '173', '0', '0', '0', '0', '1', '2021-02-17 12:37:50');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2743', '2', '174', '0', '0', '0', '0', '1', '2021-02-17 12:37:50');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2744', '2', '175', '0', '0', '0', '0', '1', '2021-02-17 12:37:50');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2745', '2', '176', '0', '0', '0', '0', '1', '2021-02-17 12:37:50');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2746', '2', '219', '0', '0', '0', '0', '1', '2021-02-17 12:37:50');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2747', '2', '150', '0', '0', '0', '0', '1', '2021-02-17 12:37:50');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2748', '2', '151', '0', '0', '0', '0', '1', '2021-02-17 12:37:50');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2749', '2', '152', '0', '0', '0', '0', '1', '2021-02-17 12:37:50');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2750', '2', '153', '0', '0', '0', '0', '1', '2021-02-17 12:37:50');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2751', '2', '154', '0', '0', '0', '0', '1', '2021-02-17 12:37:50');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2752', '2', '155', '0', '0', '0', '0', '1', '2021-02-17 12:37:50');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2753', '2', '177', '0', '0', '0', '0', '1', '2021-02-17 12:37:50');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2754', '2', '178', '0', '0', '0', '0', '1', '2021-02-17 12:37:50');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2755', '2', '179', '0', '0', '0', '0', '1', '2021-02-17 12:37:50');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2756', '2', '180', '0', '0', '0', '0', '1', '2021-02-17 12:37:50');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2757', '2', '181', '0', '0', '0', '0', '1', '2021-02-17 12:37:50');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2758', '2', '182', '0', '0', '0', '0', '1', '2021-02-17 12:37:50');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2759', '2', '183', '0', '0', '0', '0', '1', '2021-02-17 12:37:50');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2760', '2', '220', '1', '1', '1', '1', '1', '2021-02-17 12:37:50');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2761', '2', '221', '1', '1', '1', '1', '1', '2021-02-17 12:37:50');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2762', '2', '222', '1', '1', '0', '0', '1', '2021-02-17 12:37:50');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2763', '2', '223', '1', '1', '0', '0', '1', '2021-02-17 12:37:50');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2764', '2', '224', '1', '1', '0', '0', '1', '2021-02-17 12:37:50');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2765', '2', '225', '1', '1', '1', '1', '1', '2021-02-17 12:37:50');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2766', '1', '188', '0', '0', '0', '0', '1', '2021-02-17 01:58:17');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2767', '1', '189', '0', '0', '0', '0', '1', '2021-02-17 01:58:17');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2768', '1', '190', '0', '0', '0', '0', '1', '2021-02-17 01:58:17');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2769', '1', '191', '0', '0', '0', '0', '1', '2021-02-17 01:58:17');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2770', '1', '192', '0', '0', '0', '0', '1', '2021-02-17 01:58:17');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2771', '1', '193', '0', '0', '0', '0', '1', '2021-02-17 01:58:17');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2772', '1', '194', '0', '0', '0', '0', '1', '2021-02-17 01:58:17');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2773', '1', '195', '0', '0', '0', '0', '1', '2021-02-17 01:58:17');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2774', '1', '196', '0', '0', '0', '0', '1', '2021-02-17 01:58:17');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2775', '1', '197', '0', '0', '0', '0', '1', '2021-02-17 01:58:17');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2776', '1', '198', '0', '0', '0', '0', '1', '2021-02-17 01:58:17');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2777', '1', '199', '0', '0', '0', '0', '1', '2021-02-17 01:58:17');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2778', '1', '200', '0', '0', '0', '0', '1', '2021-02-17 01:58:17');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2779', '1', '201', '0', '0', '0', '0', '1', '2021-02-17 01:58:17');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2780', '1', '202', '0', '0', '0', '0', '1', '2021-02-17 01:58:17');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2781', '1', '203', '0', '0', '0', '0', '1', '2021-02-17 01:58:17');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2782', '1', '206', '0', '0', '0', '0', '1', '2021-02-17 01:58:17');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2783', '1', '207', '0', '0', '0', '0', '1', '2021-02-17 01:58:17');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2784', '1', '208', '0', '0', '0', '0', '1', '2021-02-17 01:58:17');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2785', '1', '134', '0', '0', '0', '0', '1', '2021-02-17 01:58:17');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2786', '1', '137', '0', '0', '0', '0', '1', '2021-02-17 01:58:17');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2787', '1', '142', '0', '0', '0', '0', '1', '2021-02-17 01:58:17');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2788', '1', '143', '0', '0', '0', '0', '1', '2021-02-17 01:58:17');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2789', '1', '144', '0', '0', '0', '0', '1', '2021-02-17 01:58:17');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2790', '1', '145', '0', '0', '0', '0', '1', '2021-02-17 01:58:17');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2791', '1', '147', '0', '0', '0', '0', '1', '2021-02-17 01:58:17');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2792', '1', '148', '1', '1', '0', '0', '1', '2021-02-17 01:58:17');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2793', '1', '211', '1', '1', '0', '0', '1', '2021-02-17 01:58:17');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2794', '1', '212', '0', '0', '0', '0', '1', '2021-02-17 01:58:17');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2795', '1', '149', '0', '0', '0', '0', '1', '2021-02-17 01:58:17');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2796', '1', '204', '0', '0', '0', '0', '1', '2021-02-17 01:58:17');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2797', '1', '205', '0', '0', '0', '0', '1', '2021-02-17 01:58:17');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2798', '1', '156', '0', '0', '0', '0', '1', '2021-02-17 01:58:17');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2799', '1', '157', '0', '0', '0', '0', '1', '2021-02-17 01:58:17');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2800', '1', '158', '0', '0', '0', '0', '1', '2021-02-17 01:58:17');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2801', '1', '159', '0', '0', '0', '0', '1', '2021-02-17 01:58:17');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2802', '1', '161', '0', '0', '0', '0', '1', '2021-02-17 01:58:17');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2803', '1', '162', '0', '0', '0', '0', '1', '2021-02-17 01:58:17');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2804', '1', '163', '0', '0', '0', '0', '1', '2021-02-17 01:58:17');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2805', '1', '164', '0', '0', '0', '0', '1', '2021-02-17 01:58:17');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2806', '1', '165', '0', '0', '0', '0', '1', '2021-02-17 01:58:17');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2807', '1', '213', '0', '0', '0', '0', '1', '2021-02-17 01:58:17');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2808', '1', '214', '0', '0', '0', '0', '1', '2021-02-17 01:58:17');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2809', '1', '215', '0', '0', '0', '0', '1', '2021-02-17 01:58:17');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2810', '1', '216', '0', '0', '0', '0', '1', '2021-02-17 01:58:17');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2811', '1', '217', '0', '0', '0', '0', '1', '2021-02-17 01:58:17');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2812', '1', '218', '0', '0', '0', '0', '1', '2021-02-17 01:58:17');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2813', '1', '167', '0', '0', '0', '0', '1', '2021-02-17 01:58:17');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2814', '1', '168', '0', '0', '0', '0', '1', '2021-02-17 01:58:17');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2815', '1', '169', '0', '0', '0', '0', '1', '2021-02-17 01:58:17');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2816', '1', '186', '0', '0', '0', '0', '1', '2021-02-17 01:58:17');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2817', '1', '187', '0', '0', '0', '0', '1', '2021-02-17 01:58:17');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2818', '1', '170', '0', '0', '0', '0', '1', '2021-02-17 01:58:17');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2819', '1', '171', '0', '0', '0', '0', '1', '2021-02-17 01:58:17');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2820', '1', '172', '0', '0', '0', '0', '1', '2021-02-17 01:58:17');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2821', '1', '173', '0', '0', '0', '0', '1', '2021-02-17 01:58:17');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2822', '1', '174', '0', '0', '0', '0', '1', '2021-02-17 01:58:17');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2823', '1', '175', '0', '0', '0', '0', '1', '2021-02-17 01:58:17');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2824', '1', '176', '0', '0', '0', '0', '1', '2021-02-17 01:58:17');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2825', '1', '219', '0', '0', '0', '0', '1', '2021-02-17 01:58:17');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2826', '1', '150', '0', '0', '0', '0', '1', '2021-02-17 01:58:17');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2827', '1', '151', '0', '0', '0', '0', '1', '2021-02-17 01:58:17');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2828', '1', '152', '0', '0', '0', '0', '1', '2021-02-17 01:58:17');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2829', '1', '153', '0', '0', '0', '0', '1', '2021-02-17 01:58:17');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2830', '1', '154', '0', '0', '0', '0', '1', '2021-02-17 01:58:17');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2831', '1', '155', '0', '0', '0', '0', '1', '2021-02-17 01:58:17');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2832', '1', '177', '0', '0', '0', '0', '1', '2021-02-17 01:58:17');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2833', '1', '178', '0', '0', '0', '0', '1', '2021-02-17 01:58:17');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2834', '1', '179', '0', '0', '0', '0', '1', '2021-02-17 01:58:17');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2835', '1', '180', '0', '0', '0', '0', '1', '2021-02-17 01:58:17');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2836', '1', '181', '0', '0', '0', '0', '1', '2021-02-17 01:58:17');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2837', '1', '182', '0', '0', '0', '0', '1', '2021-02-17 01:58:17');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2838', '1', '183', '0', '0', '0', '0', '1', '2021-02-17 01:58:17');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2839', '1', '220', '0', '0', '0', '0', '1', '2021-02-17 01:58:17');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2840', '1', '221', '1', '0', '0', '0', '1', '2021-02-17 01:58:17');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2841', '1', '222', '1', '1', '0', '0', '1', '2021-02-17 01:58:17');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2842', '1', '223', '0', '0', '0', '0', '1', '2021-02-17 01:58:17');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2843', '1', '224', '0', '0', '0', '0', '1', '2021-02-17 01:58:17');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2844', '1', '225', '0', '0', '0', '0', '1', '2021-02-17 01:58:17');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2845', '3', '188', '0', '0', '0', '0', '1', '2021-03-16 02:45:35');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2846', '3', '189', '0', '0', '0', '0', '1', '2021-03-16 02:45:35');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2847', '3', '190', '0', '0', '0', '0', '1', '2021-03-16 02:45:35');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2848', '3', '191', '0', '0', '0', '0', '1', '2021-03-16 02:45:35');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2849', '3', '192', '0', '0', '0', '0', '1', '2021-03-16 02:45:35');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2850', '3', '193', '0', '0', '0', '0', '1', '2021-03-16 02:45:35');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2851', '3', '194', '0', '0', '0', '0', '1', '2021-03-16 02:45:35');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2852', '3', '195', '0', '0', '0', '0', '1', '2021-03-16 02:45:35');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2853', '3', '196', '0', '0', '0', '0', '1', '2021-03-16 02:45:35');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2854', '3', '197', '0', '0', '0', '0', '1', '2021-03-16 02:45:35');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2855', '3', '198', '0', '0', '0', '0', '1', '2021-03-16 02:45:35');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2856', '3', '199', '0', '0', '0', '0', '1', '2021-03-16 02:45:35');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2857', '3', '200', '0', '0', '0', '0', '1', '2021-03-16 02:45:35');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2858', '3', '201', '0', '0', '0', '0', '1', '2021-03-16 02:45:35');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2859', '3', '202', '0', '0', '0', '0', '1', '2021-03-16 02:45:35');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2860', '3', '203', '0', '0', '0', '0', '1', '2021-03-16 02:45:35');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2861', '3', '206', '0', '0', '0', '0', '1', '2021-03-16 02:45:35');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2862', '3', '207', '0', '0', '0', '0', '1', '2021-03-16 02:45:35');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2863', '3', '208', '0', '0', '0', '0', '1', '2021-03-16 02:45:35');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2864', '3', '134', '1', '1', '1', '0', '1', '2021-03-16 02:45:35');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2865', '3', '137', '1', '1', '1', '0', '1', '2021-03-16 02:45:35');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2866', '3', '142', '1', '1', '1', '0', '1', '2021-03-16 02:45:35');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2867', '3', '143', '1', '1', '1', '0', '1', '2021-03-16 02:45:35');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2868', '3', '144', '1', '1', '1', '0', '1', '2021-03-16 02:45:35');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2869', '3', '145', '1', '1', '1', '0', '1', '2021-03-16 02:45:35');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2870', '3', '147', '0', '0', '0', '0', '1', '2021-03-16 02:45:35');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2871', '3', '148', '0', '0', '0', '0', '1', '2021-03-16 02:45:35');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2872', '3', '211', '0', '0', '0', '0', '1', '2021-03-16 02:45:35');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2873', '3', '212', '0', '0', '0', '0', '1', '2021-03-16 02:45:35');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2874', '3', '149', '0', '0', '0', '0', '1', '2021-03-16 02:45:35');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2875', '3', '204', '0', '0', '0', '0', '1', '2021-03-16 02:45:35');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2876', '3', '205', '0', '0', '0', '0', '1', '2021-03-16 02:45:35');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2877', '3', '156', '0', '0', '0', '0', '1', '2021-03-16 02:45:35');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2878', '3', '157', '0', '0', '0', '0', '1', '2021-03-16 02:45:35');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2879', '3', '158', '0', '0', '0', '0', '1', '2021-03-16 02:45:35');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2880', '3', '159', '0', '0', '0', '0', '1', '2021-03-16 02:45:35');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2881', '3', '161', '0', '0', '0', '0', '1', '2021-03-16 02:45:35');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2882', '3', '162', '0', '0', '0', '0', '1', '2021-03-16 02:45:35');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2883', '3', '163', '0', '0', '0', '0', '1', '2021-03-16 02:45:35');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2884', '3', '164', '0', '0', '0', '0', '1', '2021-03-16 02:45:35');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2885', '3', '165', '0', '0', '0', '0', '1', '2021-03-16 02:45:35');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2886', '3', '213', '0', '0', '0', '0', '1', '2021-03-16 02:45:35');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2887', '3', '214', '0', '0', '0', '0', '1', '2021-03-16 02:45:35');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2888', '3', '215', '0', '0', '0', '0', '1', '2021-03-16 02:45:35');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2889', '3', '216', '0', '0', '0', '0', '1', '2021-03-16 02:45:35');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2890', '3', '217', '0', '0', '0', '0', '1', '2021-03-16 02:45:35');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2891', '3', '218', '0', '0', '0', '0', '1', '2021-03-16 02:45:35');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2892', '3', '167', '0', '0', '0', '0', '1', '2021-03-16 02:45:35');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2893', '3', '168', '0', '0', '0', '0', '1', '2021-03-16 02:45:35');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2894', '3', '169', '0', '0', '0', '0', '1', '2021-03-16 02:45:35');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2895', '3', '186', '0', '0', '0', '0', '1', '2021-03-16 02:45:35');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2896', '3', '187', '0', '0', '0', '0', '1', '2021-03-16 02:45:35');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2897', '3', '170', '0', '0', '0', '0', '1', '2021-03-16 02:45:35');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2898', '3', '171', '0', '0', '0', '0', '1', '2021-03-16 02:45:35');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2899', '3', '172', '0', '0', '0', '0', '1', '2021-03-16 02:45:35');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2900', '3', '173', '0', '0', '0', '0', '1', '2021-03-16 02:45:35');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2901', '3', '174', '0', '0', '0', '0', '1', '2021-03-16 02:45:35');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2902', '3', '175', '0', '0', '0', '0', '1', '2021-03-16 02:45:35');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2903', '3', '176', '0', '0', '0', '0', '1', '2021-03-16 02:45:35');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2904', '3', '219', '0', '0', '0', '0', '1', '2021-03-16 02:45:35');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2905', '3', '150', '0', '0', '0', '0', '1', '2021-03-16 02:45:35');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2906', '3', '151', '0', '0', '0', '0', '1', '2021-03-16 02:45:35');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2907', '3', '152', '0', '0', '0', '0', '1', '2021-03-16 02:45:35');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2908', '3', '153', '0', '0', '0', '0', '1', '2021-03-16 02:45:35');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2909', '3', '154', '0', '0', '0', '0', '1', '2021-03-16 02:45:35');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2910', '3', '155', '0', '0', '0', '0', '1', '2021-03-16 02:45:35');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2911', '3', '177', '0', '0', '0', '0', '1', '2021-03-16 02:45:35');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2912', '3', '178', '0', '0', '0', '0', '1', '2021-03-16 02:45:35');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2913', '3', '179', '0', '0', '0', '0', '1', '2021-03-16 02:45:35');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2914', '3', '180', '0', '0', '0', '0', '1', '2021-03-16 02:45:35');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2915', '3', '181', '0', '0', '0', '0', '1', '2021-03-16 02:45:35');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2916', '3', '182', '0', '0', '0', '0', '1', '2021-03-16 02:45:35');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2917', '3', '183', '0', '0', '0', '0', '1', '2021-03-16 02:45:35');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2918', '3', '220', '0', '0', '0', '0', '1', '2021-03-16 02:45:35');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2919', '3', '221', '0', '0', '0', '0', '1', '2021-03-16 02:45:35');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2920', '3', '222', '0', '0', '0', '0', '1', '2021-03-16 02:45:35');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2921', '3', '223', '0', '0', '0', '0', '1', '2021-03-16 02:45:35');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2922', '3', '224', '0', '0', '0', '0', '1', '2021-03-16 02:45:35');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('2923', '3', '225', '0', '0', '0', '0', '1', '2021-03-16 02:45:35');


#
# TABLE STRUCTURE FOR: sec_role_tbl
#

DROP TABLE IF EXISTS `sec_role_tbl`;

CREATE TABLE `sec_role_tbl` (
  `role_id` int(11) NOT NULL AUTO_INCREMENT,
  `role_name` text NOT NULL,
  `role_description` text NOT NULL,
  `create_by` int(11) DEFAULT NULL,
  `date_time` datetime DEFAULT NULL,
  `role_status` int(11) NOT NULL DEFAULT 1,
  PRIMARY KEY (`role_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

INSERT INTO `sec_role_tbl` (`role_id`, `role_name`, `role_description`, `create_by`, `date_time`, `role_status`) VALUES ('1', 'Employee', 'All employee get default this role', '2', '2020-04-04 11:22:31', '1');
INSERT INTO `sec_role_tbl` (`role_id`, `role_name`, `role_description`, `create_by`, `date_time`, `role_status`) VALUES ('2', 'New Role', 'testing reward point and asset module permissions', '1', '2021-02-15 07:52:09', '1');
INSERT INTO `sec_role_tbl` (`role_id`, `role_name`, `role_description`, `create_by`, `date_time`, `role_status`) VALUES ('3', 'Test', 'fggfgfg', '1', '2021-03-16 02:45:35', '1');


#
# TABLE STRUCTURE FOR: sec_user_access_tbl
#

DROP TABLE IF EXISTS `sec_user_access_tbl`;

CREATE TABLE `sec_user_access_tbl` (
  `role_acc_id` int(11) NOT NULL AUTO_INCREMENT,
  `fk_role_id` int(11) NOT NULL,
  `fk_user_id` int(11) NOT NULL,
  PRIMARY KEY (`role_acc_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

INSERT INTO `sec_user_access_tbl` (`role_acc_id`, `fk_role_id`, `fk_user_id`) VALUES ('1', '1', '2');
INSERT INTO `sec_user_access_tbl` (`role_acc_id`, `fk_role_id`, `fk_user_id`) VALUES ('2', '1', '3');
INSERT INTO `sec_user_access_tbl` (`role_acc_id`, `fk_role_id`, `fk_user_id`) VALUES ('4', '1', '4');
INSERT INTO `sec_user_access_tbl` (`role_acc_id`, `fk_role_id`, `fk_user_id`) VALUES ('5', '2', '4');


#
# TABLE STRUCTURE FOR: setting
#

DROP TABLE IF EXISTS `setting`;

CREATE TABLE `setting` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `logo` varchar(50) DEFAULT NULL,
  `favicon` varchar(100) DEFAULT NULL,
  `language` varchar(100) DEFAULT NULL,
  `timezone` varchar(150) NOT NULL,
  `site_align` varchar(50) DEFAULT NULL,
  `footer_text` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

INSERT INTO `setting` (`id`, `title`, `address`, `email`, `phone`, `logo`, `favicon`, `language`, `timezone`, `site_align`, `footer_text`) VALUES ('1', 'Bdtask Ltds', '4 th Floor  Mannan Plaza ,Khilkhet,Dhaka-1229', 'bdtask@gmail.com', '0123456789', 'assets/img/icons/2017-07-22/HRM.png', 'assets/img/icons/2017-04-03/m.png', 'english', 'Africa/Casablanca', 'LTR', '2019Ã‚Â©Copyright');


#
# TABLE STRUCTURE FOR: synchronizer_setting
#

DROP TABLE IF EXISTS `synchronizer_setting`;

CREATE TABLE `synchronizer_setting` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `hostname` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `port` varchar(10) NOT NULL,
  `debug` varchar(10) NOT NULL,
  `project_root` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# TABLE STRUCTURE FOR: user
#

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(50) DEFAULT NULL,
  `lastname` varchar(50) DEFAULT NULL,
  `about` text DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(32) NOT NULL,
  `password_reset_token` varchar(20) DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL,
  `last_login` datetime DEFAULT NULL,
  `last_logout` datetime DEFAULT NULL,
  `ip_address` varchar(14) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `is_admin` tinyint(4) NOT NULL DEFAULT 0,
  `token_id` text DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

INSERT INTO `user` (`id`, `firstname`, `lastname`, `about`, `email`, `password`, `password_reset_token`, `image`, `last_login`, `last_logout`, `ip_address`, `status`, `is_admin`, `token_id`) VALUES ('1', NULL, NULL, NULL, 'admin@example.com', 'e10adc3949ba59abbe56e057f20f883e', NULL, NULL, '2021-03-16 11:08:55', NULL, '::1', '1', '1', NULL);
INSERT INTO `user` (`id`, `firstname`, `lastname`, `about`, `email`, `password`, `password_reset_token`, `image`, `last_login`, `last_logout`, `ip_address`, `status`, `is_admin`, `token_id`) VALUES ('2', 'Mahbub', 'Misor', NULL, 'msmisor5@example.com', 'e10adc3949ba59abbe56e057f20f883e', NULL, 'application/modules/employee/assets/images/2021-03-16/m4.jpg', '2021-03-16 12:43:27', '2021-03-16 13:56:04', '::1', '1', '0', NULL);
INSERT INTO `user` (`id`, `firstname`, `lastname`, `about`, `email`, `password`, `password_reset_token`, `image`, `last_login`, `last_logout`, `ip_address`, `status`, `is_admin`, `token_id`) VALUES ('3', 'Test', 'User', NULL, 'test@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', NULL, 'application/modules/employee/assets/images/2021-03-16/fm2.jpg', '2021-03-16 13:56:17', NULL, '::1', '1', '0', NULL);
INSERT INTO `user` (`id`, `firstname`, `lastname`, `about`, `email`, `password`, `password_reset_token`, `image`, `last_login`, `last_logout`, `ip_address`, `status`, `is_admin`, `token_id`) VALUES ('4', 'super', 'visor', NULL, 'supervisor@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', NULL, './application/modules/employee/assets/images/2021-03-16/m10.jpg', NULL, NULL, NULL, '1', '0', NULL);


#
# TABLE STRUCTURE FOR: weekly_holiday
#

DROP TABLE IF EXISTS `weekly_holiday`;

CREATE TABLE `weekly_holiday` (
  `wk_id` int(11) NOT NULL AUTO_INCREMENT,
  `dayname` varchar(30) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`wk_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

INSERT INTO `weekly_holiday` (`wk_id`, `dayname`) VALUES ('1', 'Friday,Wednesday');


