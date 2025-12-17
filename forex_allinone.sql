-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2025 at 08:37 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `forex_allinone`
--

-- --------------------------------------------------------

--
-- Table structure for table `bonuses`
--

CREATE TABLE `bonuses` (
  `bonus_id` int(11) NOT NULL,
  `bonus_name` varchar(255) NOT NULL,
  `bonus_code` varchar(255) NOT NULL,
  `bonus_desc` text NOT NULL,
  `bonus_starts_at` date DEFAULT NULL,
  `bonus_ends_at` date DEFAULT NULL,
  `bonus_accessable` text DEFAULT NULL,
  `bonus_shows_on` enum('all','groups','users') NOT NULL DEFAULT 'all',
  `bonus_show_list` longtext DEFAULT NULL,
  `bonus_type` enum('percentage','flat') NOT NULL DEFAULT 'percentage',
  `bonus_value` decimal(10,2) NOT NULL,
  `bonus_limit` int(11) NOT NULL DEFAULT 1,
  `bonus_per_limit` int(11) NOT NULL DEFAULT 0,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `bonus_updated_by` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `broker_account_types`
--

CREATE TABLE `broker_account_types` (
  `ac_index` int(11) NOT NULL,
  `ac_category` int(11) DEFAULT NULL,
  `ac_book_type` int(11) DEFAULT NULL,
  `ac_name` varchar(50) DEFAULT NULL,
  `ac_min_deposit` int(11) DEFAULT NULL,
  `ac_max_deposit` int(11) DEFAULT NULL,
  `ac_max_leverage` int(11) DEFAULT NULL,
  `ac_lot_size` double(4,2) DEFAULT NULL,
  `ac_group` varchar(150) DEFAULT NULL,
  `ac_spread` double(10,1) DEFAULT NULL,
  `ac_type` int(11) DEFAULT NULL,
  `acc_ib_cat` int(11) DEFAULT NULL,
  `ib_enabled` tinyint(1) NOT NULL DEFAULT 1,
  `ac_swap` enum('yes','no') NOT NULL DEFAULT 'yes',
  `is_client_group` tinyint(1) NOT NULL DEFAULT 1,
  `inquiry_status` tinyint(1) NOT NULL DEFAULT 0,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `user_group_id` int(11) NOT NULL DEFAULT 1,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `display_priority` int(11) DEFAULT NULL
) ENGINE=InnoDB AVG_ROW_LENGTH=64 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `broker_liveaccount`
--

CREATE TABLE `broker_liveaccount` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `trade_id` varchar(50) DEFAULT NULL,
  `account_type` int(11) DEFAULT NULL,
  `credit` decimal(10,2) DEFAULT NULL,
  `leverage` varchar(255) NOT NULL,
  `currency` varchar(20) NOT NULL DEFAULT 'USD',
  `Balance` decimal(15,2) NOT NULL DEFAULT 0.00,
  `equity` double(10,4) DEFAULT 0.0000,
  `tradePlatform` varchar(100) NOT NULL DEFAULT 'MetaTrader5',
  `lotsCompleted` int(11) NOT NULL DEFAULT 0,
  `MarginFree` double(10,4) NOT NULL DEFAULT 0.0000,
  `MarginLevel` double(10,4) NOT NULL DEFAULT 0.0000,
  `MarginLevelType` varchar(60) NOT NULL DEFAULT 'ok',
  `adj` double(10,4) NOT NULL DEFAULT 0.0000,
  `deposit` double(10,4) NOT NULL DEFAULT 0.0000,
  `withdraw` double(10,4) NOT NULL DEFAULT 0.0000,
  `internal_transfer` double(10,4) NOT NULL DEFAULT 0.0000,
  `internalDeposit` double(10,4) NOT NULL DEFAULT 0.0000,
  `trader_pwd` varchar(200) DEFAULT NULL,
  `invester_pwd` varchar(200) DEFAULT NULL,
  `phone_pwd` varchar(200) DEFAULT NULL,
  `Registered_Date` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` varchar(50) NOT NULL DEFAULT 'active',
  `bonusDeposit` double(10,4) NOT NULL DEFAULT 0.0000,
  `wBonusDeposit` double(10,4) NOT NULL DEFAULT 0.0000,
  `ib1` varchar(255) DEFAULT NULL,
  `ib2` varchar(255) DEFAULT NULL,
  `ib3` varchar(255) DEFAULT NULL,
  `ib4` varchar(255) DEFAULT NULL,
  `ib5` varchar(255) DEFAULT NULL,
  `ib6` varchar(255) DEFAULT NULL,
  `ib7` varchar(255) DEFAULT NULL,
  `ib8` varchar(255) DEFAULT NULL,
  `ib9` varchar(255) DEFAULT NULL,
  `ib10` varchar(255) DEFAULT NULL,
  `ib11` varchar(255) DEFAULT NULL,
  `ib12` varchar(255) DEFAULT NULL,
  `ib13` varchar(255) DEFAULT NULL,
  `ib14` varchar(255) DEFAULT NULL,
  `ib15` varchar(255) DEFAULT NULL,
  `master_hash` varchar(255) DEFAULT NULL,
  `investor_hash` varchar(255) DEFAULT NULL,
  `is_excluded` tinyint(1) NOT NULL DEFAULT 0,
  `excluded_by` varchar(255) DEFAULT NULL,
  `excluded_at` datetime DEFAULT NULL
) ENGINE=InnoDB AVG_ROW_LENGTH=164 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `broker_mt5_groups`
--

CREATE TABLE `broker_mt5_groups` (
  `mt5_group_id` int(11) NOT NULL,
  `mt5_group_name` varchar(255) NOT NULL,
  `mt5_group_type` enum('demo','live') NOT NULL DEFAULT 'demo',
  `mt5_group_desc` text NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `updated_by` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `user_group_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `broker_mt5_group_categories`
--

CREATE TABLE `broker_mt5_group_categories` (
  `mt5_grp_cat_id` int(11) NOT NULL,
  `mt5_grp_cat_name` varchar(255) NOT NULL,
  `mt5_grp_cat_type` varchar(100) NOT NULL,
  `mt5_grp_cat_desc` text DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `user_group_id` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2025_11_07_115710_create_permission_tables', 2);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `page_id` int(11) NOT NULL,
  `dup_id` int(11) DEFAULT NULL,
  `page_category_id` int(11) DEFAULT NULL,
  `pagename` varchar(255) NOT NULL,
  `filename` varchar(255) NOT NULL,
  `is_submenu` int(11) NOT NULL DEFAULT 0,
  `active` tinyint(1) NOT NULL DEFAULT 1,
  `page_order` int(11) NOT NULL,
  `icon` varchar(50) NOT NULL,
  `show_in_menu` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`page_id`, `dup_id`, `page_category_id`, `pagename`, `filename`, `is_submenu`, `active`, `page_order`, `icon`, `show_in_menu`) VALUES
(1, 1, 1, 'Dashboard', '/pilot/dashboard', 0, 1, 1, 'fe fe-airplay', 1),
(2, 2, 2, 'Client List', '/pilot/client_list', 0, 1, 2, 'fe fe-users', 1),
(3, 3, 5, 'Transactions', '#', 0, 1, 3, 'fe fe-credit-card', 1),
(4, 4, 5, 'Wallet Deposit', '/pilot/transactions/wallet_deposit', 3, 1, 20, '', 1),
(5, 5, 5, 'Wallet Withdrawal', '/pilot/transactions/wallet_withdrawal', 3, 1, 30, '', 1),
(6, 6, 5, 'Trading Deposit', '/pilot/transactions/trading_deposit', 3, 1, 40, '', 1),
(7, 7, 5, 'Trading Withdrawal', '/pilot/transactions/trading_withdrawal', 3, 1, 50, '', 1),
(8, 8, 5, 'Internal Transfer', '/pilot/transactions/internal_transfer', 3, 1, 60, '', 1),
(9, 9, 2, 'Client Resource', '#', 0, 1, 4, 'fe fe-file-text', 1),
(10, 10, 2, 'KYC History', '/pilot/kyc_history', 9, 1, 1, '', 1),
(11, 11, 2, 'Bank Details', '/pilot/bank_details', 9, 1, 2, '', 1),
(12, 12, 3, 'IB', '#', 0, 1, 5, 'fe fe-user', 1),
(13, 13, 3, 'IB Requests', '/pilot/iblist', 12, 1, 2, '', 1),
(14, 14, 6, 'META Config', '#', 0, 1, 6, 'fe fe-help-circle', 1),
(15, 15, 6, 'MT5 Groups', '/pilot/mt5_groups', 14, 1, 1, '', 1),
(16, 16, 4, 'Staff Management', '#', 0, 1, 7, 'fe fe-user', 1),
(17, 17, 4, 'Roles', '/pilot/roles', 16, 1, 1, '', 1),
(18, 18, 4, 'Role Permissions', '/pilot/role_permissions', 16, 1, 2, '', 1),
(19, 19, 4, 'Staffs Management', '/pilot/admin_users', 16, 1, 3, '', 1),
(20, 20, 4, 'Help Desk', '#', 0, 1, 8, 'fe fe-help-circle', 1),
(21, 21, 4, 'All Tickets', '/pilot/all_tickets', 20, 1, 1, '', 1),
(22, 22, 4, 'Open Tickets', '/pilot/open_tickets', 20, 1, 2, '', 1),
(23, 23, 4, 'Closed Tickets', '/pilot/closed_tickets', 20, 1, 3, '', 1),
(24, 24, 4, 'Settings', '#', 0, 1, 9, 'fe fe-settings', 1),
(25, 25, 4, 'Update Password', '/pilot/update_password', 24, 0, 20, '', 0),
(26, 26, 4, 'Payment Gateways', '/pilot/payment_gateways', 24, 0, 2, '', 1),
(27, 27, 4, 'Settings', '/pilot/ui_settings', 24, 1, 30, '', 1),
(56, 56, 3, 'IB Com. Settings', '/pilot/ib_settings', 12, 1, 4, '', 1),
(57, 57, 5, 'Pend.,Transactions', '#', 0, 1, 4, 'fe fe-list', 1),
(58, 58, 5, 'Wallet Deposit', '/pilot/transactions/pending/wallet_deposit', 57, 1, 20, '', 1),
(59, 59, 5, 'Wallet Withdrawal', '/pilot/transactions/pending/wallet_withdrawal', 57, 1, 30, '', 1),
(60, 60, 5, 'Trading Deposit', '/pilot/transactions/pending/trading_deposit', 57, 1, 40, '', 1),
(61, 61, 5, 'Trading Withdrawal', '/pilot/transactions/pending/trading_withdrawal', 57, 1, 50, '', 1),
(62, 62, 5, 'Internal Transfer', '/pilot/transactions/pending/internal_transfer', 57, 0, 60, '', 1),
(67, 67, 3, 'IB Dashboard', '/pilot/ibdashboard', 12, 1, 1, '', 1),
(68, 68, 3, 'IB Users', '/pilot/iblist_active', 12, 1, 3, '', 1),
(70, 70, 1, 'Wallet Deposit Details', '/pilot/wallet_deposit_details', 3, 1, 1, 'fe fe-airplay', 0),
(71, 71, 1, 'Wallet Withdrawal Details', '/pilot/wallet_withdrawal_details', 3, 1, 1, 'fe fe-airplay', 0),
(72, 72, 1, 'Trading Deposit Details', '/pilot/trading_deposit_details', 3, 1, 1, 'fe fe-airplay', 0),
(73, 73, 1, 'Trading Withdrawal Details', '/pilot/trading_withdrawal_details', 3, 1, 1, 'fe fe-airplay', 0),
(74, 74, 1, 'Client View', '#', 0, 1, 1, 'fe fe-airplay', 0),
(75, 75, 1, 'View MT5 Accounts', '/pilot/view_account_details', 63, 1, 1, 'fe fe-airplay', 0),
(76, 76, 1, 'IB Commission Edit', '/pilot/ibCommissionEdit', 12, 1, 1, 'fe fe-airplay', 0),
(77, 77, 1, 'IB Commission Add', '/pilot/ibCommission', 12, 1, 1, 'fe fe-airplay', 0),
(78, 78, 1, 'KYC Details', '/pilot/kyc_details', 9, 1, 1, 'fe fe-airplay', 0),
(79, 79, 1, 'Search Functionality', '/pilot/search', 0, 1, 1, 'fe fe-airplay', 0),
(80, 80, 1, 'Bank Details', '/pilot/view_bank_details', 9, 1, 1, 'fe fe-airplay', 0),
(81, 81, 1, 'Ticket Details', '/pilot/ticket_details', 20, 1, 1, 'fe fe-airplay', 0),
(82, 82, 1, 'RM Dashboard', '/pilot/rm_dashboard', 16, 1, 1, 'fe fe-airplay', 0),
(83, 83, 2, 'Wallet Details', '/pilot/wallet_details', 9, 1, 3, '', 1),
(84, 84, 5, 'Bonus', '/pilot/bonus', 0, 1, 3, 'fe fe-dollar-sign', 1),
(85, 85, 6, 'Tournaments', '/pilot/tournaments', 0, 1, 10, 'fe fe-award', 1),
(86, 86, 1, 'Add User', '/pilot/addUser', 2, 1, 1, 'fe fe-airplay', 0),
(87, 87, 1, 'Update User', '/pilot/updateUser', 2, 1, 1, 'fe fe-airplay', 0),
(88, 88, 1, 'MT5 Account Deposit', '/pilot/depositToAccount', 63, 1, 1, 'fe fe-airplay', 0),
(89, 89, 1, 'MT5 Account Withdraw', '/pilot/withdrawFromAccount', 63, 1, 1, 'fe fe-airplay', 0),
(90, 90, 1, 'MT5 Account Bonus', '/pilot/bonusToAccount', 63, 1, 1, 'fe fe-airplay', 0),
(91, 91, 1, 'Update IBs', '/pilot/updateIB', 74, 1, 1, 'fe fe-airplay', 0),
(92, 92, 4, 'User Groups', '/pilot/user_groups', 24, 1, 10, '', 1),
(93, 93, 4, 'Update Account Limit', 'updateAccLimit', 74, 1, 1, '', 0),
(94, 94, 5, 'All Transactions', '/pilot/transactions/pending/all_transactions', 57, 1, 10, '', 1),
(95, 95, 5, 'All Transactions', '/pilot/transactions/all_transactions', 3, 1, 10, '', 1),
(97, 97, 4, 'Utilities', '#', 0, 1, 8, 'fe fe-grid', 1),
(98, 98, 4, 'Single Form Transactions', '/pilot/single_form_transactions', 97, 1, 10, 'fe fe-settings', 1),
(99, 99, 1, 'Update Client Details', 'update_client_details', 74, 1, 1, 'fe fe-airplay', 0),
(100, 100, 1, 'Update IB PLAN', 'update_ib_plan', 74, 1, 1, 'fe fe-airplay', 0),
(101, 101, 4, 'Com. Excluded Acc.', '/pilot/live_acc_excluded', 97, 1, 20, 'fe fe-settings', 1),
(102, 102, 1, 'Send Password Reset Link', '/pilot/sendPasswordResetLink', 74, 1, 1, 'fe fe-airplay', 0),
(103, 103, 2, 'View Wallet Details', '/pilot/view_wallet_details', 9, 1, 3, '', 0),
(104, 104, 1, 'Update RM', '/pilot/updateRM', 74, 1, 1, 'fe fe-airplay', 0),
(105, 105, 1, 'Add Ticket', '/pilot/addTicket', 74, 1, 1, 'fe fe-airplay', 0),
(106, 106, 1, 'Assign Ticket', '/pilot/assignTicket', 74, 1, 1, 'fe fe-airplay', 0),
(107, 107, 1, 'Update Ticket Status', '/pilot/updateStatus', 74, 1, 1, 'fe fe-airplay', 0),
(108, 108, 1, 'Ticket Followups', '/pilot/ticket_followups', 20, 1, 1, 'fe fe-airplay', 0),
(109, 109, 1, 'Update KYC', '/pilot/updateKyc', 74, 1, 1, 'fe fe-airplay', 0),
(110, 110, 1, 'MT5 Account Password', '/pilot/updatePassword', 63, 1, 1, 'fe fe-airplay', 0),
(111, 111, 1, 'Update MT5 Account Details', '/pilot/updateAccountDetails', 63, 1, 1, 'fe fe-airplay', 0),
(112, 112, 1, 'Update Transaction', '/pilot/updateTransaction', 3, 1, 1, 'fe fe-airplay', 0),
(113, 113, 1, 'Update Withdrawal', '/pilot/updateWithdrawal', 3, 1, 1, 'fe fe-airplay', 0),
(114, 114, 1, 'Add Bonus', '/pilot/bonusAdd', 84, 1, 1, 'fe fe-airplay', 0),
(115, 115, 1, 'Update Bonus', '/pilot/bonusUpdate', 84, 1, 1, 'fe fe-airplay', 0),
(116, 116, 1, 'Store Bonus', '/pilot/bonusStore', 84, 1, 1, 'fe fe-airplay', 0),
(117, 117, 1, 'View Client Details', '/pilot/client_details', 74, 1, 1, 'fe fe-airplay', 0),
(118, 3, 2, 'Pending Tasks', '/pilot/pending_tasks', 0, 1, 5, 'fe fe-calendar', 1),
(119, 117, 1, 'View Client Profile', 'clientProfile', 74, 1, 1, 'fe fe-airplay', 0),
(120, 99, 4, 'Single Form Transactions - Trade IDs', '/pilot/getUtilityAccounts', 97, 1, 10, 'fe fe-settings', 0),
(121, 121, 7, 'Social Trading Mgmt.', '#', 0, 1, 10, 'fe fe-share-2', 1),
(122, 122, 7, 'Users', '/pilot/social-trading/listing/users', 121, 1, 10, 'fe fe-settings', 1),
(123, 123, 7, 'Accounts', '/pilot/social-trading/listing/accounts', 121, 1, 10, 'fe fe-settings', 1),
(124, 123, 7, 'User - Table List', '/pilot/social-trading/getList/users', 121, 1, 10, 'fe fe-settings', 0),
(125, 123, 7, 'User - DropDown', '/pilot/dd/users', 121, 1, 10, 'fe fe-settings', 0),
(126, 123, 7, 'User - New User', '/pilot/social-trading/store/user', 121, 1, 10, 'fe fe-settings', 0),
(127, 123, 7, 'Accounts - Table List', '/pilot/social-trading/getList/accounts', 121, 1, 10, 'fe fe-settings', 0),
(128, 123, 7, 'Social Trading User - Dropdown List', '/pilot/dd/stusers', 121, 1, 10, 'fe fe-settings', 0),
(129, 123, 7, 'Account - Creation', '/pilot/social-trading/store/account', 121, 1, 10, 'fe fe-settings', 0),
(130, 130, 8, 'PAMM Management', '#', 0, 1, 10, 'fe fe-bar-chart-2', 1),
(131, 131, 8, 'Money Managers', '/pilot/pamm/money_manager_list', 130, 1, 10, 'fe fe-bar-chart-2', 1),
(132, 131, 8, 'MM Configuration', '/pilot/pamm/mm_configuration', 130, 1, 10, 'fe fe-bar-chart-2', 1),
(133, 131, 8, 'Investments', '/pilot/pamm/investments', 130, 1, 10, 'fe fe-bar-chart-2', 1),
(136, 131, 8, 'Fetch Client Investments', '/pilot/pamm/fetch_client_investments', 130, 1, 10, 'fe fe-bar-chart-2', 0),
(137, 131, 8, 'Get Money Managers', '/pilot/pamm/get_money_managers', 130, 1, 10, 'fe fe-bar-chart-2', 0),
(138, 131, 8, 'Create Money Managers', '/pilot/pamm/create_money_manager', 130, 1, 10, 'fe fe-bar-chart-2', 0),
(139, 131, 8, 'Money Manager Details', '/pilot/pamm/money_manager_details', 130, 1, 10, 'fe fe-bar-chart-2', 0),
(140, 131, 8, 'Money Manager Investments', '/pilot/pamm/investments_money_manager', 130, 1, 10, 'fe fe-bar-chart-2', 0),
(141, 131, 8, 'Money Manager Offers', '/pilot/pamm/offers_money_manager', 130, 1, 10, 'fe fe-bar-chart-2', 0),
(142, 131, 8, 'Money Manager Transactions', '/pilot/pamm/transactions_money_manager', 130, 1, 10, 'fe fe-bar-chart-2', 0),
(143, 131, 8, 'Money Manager Requests', '/pilot/pamm/requests_money_manager', 130, 1, 10, 'fe fe-bar-chart-2', 0),
(144, 131, 8, 'Update Manager Config', '/pilot/pamm/update_money_manager', 130, 1, 10, 'fe fe-bar-chart-2', 0),
(145, 131, 8, 'Update Manager Offer', '/pilot/pamm/update_manager_offer', 130, 1, 10, 'fe fe-bar-chart-2', 0),
(146, 131, 8, 'Manager Offers Listing', '/pilot/pamm/get_manager_offer', 130, 1, 10, 'fe fe-bar-chart-2', 0),
(147, 131, 8, 'Get Investments', '/pilot/pamm/get_investments', 130, 1, 10, 'fe fe-bar-chart-2', 0),
(148, 131, 8, 'Create Investments', '/pilot/pamm/create_investments', 130, 1, 10, 'fe fe-bar-chart-2', 0),
(149, 131, 8, 'Get Manager Configurations', '/pilot/pamm/get_manager_configuration', 130, 1, 10, 'fe fe-bar-chart-2', 0),
(150, 2, 2, 'Activity Log', '/pilot/ip_activity', 0, 1, 6, 'fe fe-align-left', 1),
(151, 151, 5, 'IB Withdrawal', '/pilot/transactions/ib_Withdrawal', 3, 1, 70, '', 1),
(152, 152, 10, 'Live Account', '/piolt/clientAccounts/liveAccounts', 0, 1, 1, '1', 1),
(153, 153, 10, 'Demo Account', '/piolt/clientAccounts/demoAccounts', 0, 1, 1, '1', 1),
(154, 1, 11, 'Active Account', '/pilot/clientAccounts/liveAccounts?status=active', 0, 1, 1, '1', 1),
(155, 2, 11, 'Breched Account', '/pilot/clientAccounts/liveAccounts?status=breached', 0, 1, 2, 'fe fe-users', 1),
(156, 3, 11, 'Passed Account', '/pilot/clientAccounts/liveAccounts?status=passed', 0, 1, 3, 'fe fe-credit-card', 1),
(157, 4, 11, 'Funded Account', '/pilot/clientAccounts/fundedAccounts', 0, 1, 20, '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `page_categories`
--

CREATE TABLE `page_categories` (
  `page_category_id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `category_desc` text NOT NULL,
  `is_active` tinyint(4) NOT NULL,
  `order_by` int(11) NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `page_categories`
--

INSERT INTO `page_categories` (`page_category_id`, `category_name`, `category_desc`, `is_active`, `order_by`, `created_by`, `created_at`, `updated_at`) VALUES
(1, 'MAIN', '', 1, 1, 1, '2025-11-19 16:47:28', '2025-11-19 16:47:28'),
(2, 'CLIENT', '', 1, 2, 1, '2025-11-19 16:47:30', '2025-11-19 16:47:30'),
(3, 'INTRODUCING BROKER', '', 1, 6, 1, '2025-11-19 16:47:43', '2025-11-19 16:47:43'),
(4, 'ADMIN USERS', '', 1, 10, 1, '2025-11-19 16:50:09', '2025-11-19 16:50:09'),
(5, 'FINANCE', '', 1, 5, 1, '2025-11-19 16:49:23', '2025-11-19 16:49:23'),
(6, 'MT5 CONFIGURATION', '', 1, 7, 1, '2025-11-19 16:49:57', '2025-11-19 16:49:57'),
(8, 'PAMM', '', 1, 8, 1, '2025-11-19 16:50:00', '2025-11-19 16:50:00'),
(9, 'AFFILIATES', '', 1, 9, 1, '2025-11-19 16:50:05', '2025-11-19 16:50:05'),
(10, 'BROKER', '', 1, 3, 1, '2025-11-19 16:47:51', '2025-11-19 16:47:51'),
(11, 'PROFOIRM', '', 1, 4, 1, '2025-11-19 16:49:05', '2025-11-19 16:49:05');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payment_logs`
--

CREATE TABLE `payment_logs` (
  `payment_id` bigint(20) NOT NULL,
  `payment_amount` decimal(10,2) NOT NULL,
  `payment_type` varchar(255) NOT NULL,
  `payment_req` text DEFAULT NULL,
  `payment_reference_id` text DEFAULT NULL,
  `payment_url` text DEFAULT NULL,
  `payment_status` varchar(255) DEFAULT NULL,
  `payment_res` text DEFAULT NULL,
  `initiated_by` varchar(100) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `remarks` text DEFAULT NULL,
  `bonus_id` int(11) DEFAULT NULL,
  `trade_id` varchar(255) DEFAULT NULL,
  `log_status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `page_id` varchar(100) NOT NULL,
  `created_by` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `role_id`, `page_id`, `created_by`, `created_at`, `updated_at`) VALUES
(200, 10, '1', '78', '2024-08-27 14:11:18', '2024-08-27 14:11:18'),
(201, 10, '3', '78', '2024-08-27 14:11:18', '2024-08-27 14:11:18'),
(202, 10, '4', '78', '2024-08-27 14:11:18', '2024-08-27 14:11:18'),
(203, 10, '5', '78', '2024-08-27 14:11:18', '2024-08-27 14:11:18'),
(204, 10, '6', '78', '2024-08-27 14:11:18', '2024-08-27 14:11:18'),
(205, 10, '7', '78', '2024-08-27 14:11:18', '2024-08-27 14:11:18'),
(206, 10, '8', '78', '2024-08-27 14:11:18', '2024-08-27 14:11:18'),
(207, 10, '9', '78', '2024-08-27 14:11:18', '2024-08-27 14:11:18'),
(208, 10, '10', '78', '2024-08-27 14:11:18', '2024-08-27 14:11:18'),
(209, 10, '11', '78', '2024-08-27 14:11:18', '2024-08-27 14:11:18'),
(210, 10, '14', '78', '2024-08-27 14:11:18', '2024-08-27 14:11:18'),
(211, 10, '15', '78', '2024-08-27 14:11:18', '2024-08-27 14:11:18'),
(212, 19, '12', '78', '2024-08-27 14:11:34', '2024-08-27 14:11:34'),
(213, 19, '13', '78', '2024-08-27 14:11:34', '2024-08-27 14:11:34'),
(214, 19, '24', '78', '2024-08-27 14:11:34', '2024-08-27 14:11:34'),
(215, 19, '25', '78', '2024-08-27 14:11:34', '2024-08-27 14:11:34'),
(216, 19, '26', '78', '2024-08-27 14:11:34', '2024-08-27 14:11:34'),
(217, 19, '27', '78', '2024-08-27 14:11:34', '2024-08-27 14:11:34'),
(218, 19, '29', '78', '2024-08-27 14:11:34', '2024-08-27 14:11:34'),
(494, 8, '1', '19', '2024-10-01 18:24:34', '2024-10-01 18:24:34'),
(495, 8, '2', '19', '2024-10-01 18:24:34', '2024-10-01 18:24:34'),
(496, 8, '3', '19', '2024-10-01 18:24:34', '2024-10-01 18:24:34'),
(497, 8, '4', '19', '2024-10-01 18:24:34', '2024-10-01 18:24:34'),
(498, 8, '5', '19', '2024-10-01 18:24:34', '2024-10-01 18:24:34'),
(499, 8, '6', '19', '2024-10-01 18:24:34', '2024-10-01 18:24:34'),
(500, 8, '7', '19', '2024-10-01 18:24:34', '2024-10-01 18:24:34'),
(501, 8, '8', '19', '2024-10-01 18:24:34', '2024-10-01 18:24:34'),
(502, 8, '9', '19', '2024-10-01 18:24:34', '2024-10-01 18:24:34'),
(503, 8, '10', '19', '2024-10-01 18:24:34', '2024-10-01 18:24:34'),
(504, 8, '11', '19', '2024-10-01 18:24:34', '2024-10-01 18:24:34'),
(505, 8, '12', '19', '2024-10-01 18:24:34', '2024-10-01 18:24:34'),
(506, 8, '13', '19', '2024-10-01 18:24:34', '2024-10-01 18:24:34'),
(507, 8, '56', '19', '2024-10-01 18:24:34', '2024-10-01 18:24:34'),
(508, 8, '67', '19', '2024-10-01 18:24:34', '2024-10-01 18:24:34'),
(509, 8, '68', '19', '2024-10-01 18:24:34', '2024-10-01 18:24:34'),
(510, 8, '14', '19', '2024-10-01 18:24:34', '2024-10-01 18:24:34'),
(511, 8, '15', '19', '2024-10-01 18:24:34', '2024-10-01 18:24:34'),
(512, 8, '16', '19', '2024-10-01 18:24:34', '2024-10-01 18:24:34'),
(513, 8, '17', '19', '2024-10-01 18:24:34', '2024-10-01 18:24:34'),
(514, 8, '18', '19', '2024-10-01 18:24:34', '2024-10-01 18:24:34'),
(515, 8, '19', '19', '2024-10-01 18:24:34', '2024-10-01 18:24:34'),
(516, 8, '21', '19', '2024-10-01 18:24:34', '2024-10-01 18:24:34'),
(517, 8, '22', '19', '2024-10-01 18:24:34', '2024-10-01 18:24:34'),
(518, 8, '23', '19', '2024-10-01 18:24:34', '2024-10-01 18:24:34'),
(519, 8, '24', '19', '2024-10-01 18:24:34', '2024-10-01 18:24:34'),
(520, 8, '25', '19', '2024-10-01 18:24:34', '2024-10-01 18:24:34'),
(521, 8, '26', '19', '2024-10-01 18:24:34', '2024-10-01 18:24:34'),
(522, 8, '27', '19', '2024-10-01 18:24:34', '2024-10-01 18:24:34'),
(523, 8, '29', '19', '2024-10-01 18:24:34', '2024-10-01 18:24:34'),
(524, 8, '57', '19', '2024-10-01 18:24:34', '2024-10-01 18:24:34'),
(525, 8, '58', '19', '2024-10-01 18:24:34', '2024-10-01 18:24:34'),
(526, 8, '59', '19', '2024-10-01 18:24:34', '2024-10-01 18:24:34'),
(527, 8, '60', '19', '2024-10-01 18:24:34', '2024-10-01 18:24:34'),
(528, 8, '61', '19', '2024-10-01 18:24:34', '2024-10-01 18:24:34'),
(529, 8, '62', '19', '2024-10-01 18:24:34', '2024-10-01 18:24:34'),
(530, 8, '63', '19', '2024-10-01 18:24:34', '2024-10-01 18:24:34'),
(531, 8, '64', '19', '2024-10-01 18:24:34', '2024-10-01 18:24:34'),
(532, 8, '65', '19', '2024-10-01 18:24:34', '2024-10-01 18:24:34'),
(533, 8, '70', '19', '2024-10-01 18:24:34', '2024-10-01 18:24:34'),
(534, 8, '71', '19', '2024-10-01 18:24:34', '2024-10-01 18:24:34'),
(535, 8, '72', '19', '2024-10-01 18:24:34', '2024-10-01 18:24:34'),
(536, 8, '73', '19', '2024-10-01 18:24:34', '2024-10-01 18:24:34'),
(537, 8, '74', '19', '2024-10-01 18:24:34', '2024-10-01 18:24:34'),
(538, 8, '75', '19', '2024-10-01 18:24:34', '2024-10-01 18:24:34'),
(539, 8, '76', '19', '2024-10-01 18:24:34', '2024-10-01 18:24:34'),
(540, 9, '1', '19', '2024-10-01 18:24:53', '2024-10-01 18:24:53'),
(541, 9, '2', '19', '2024-10-01 18:24:53', '2024-10-01 18:24:53'),
(542, 9, '3', '19', '2024-10-01 18:24:53', '2024-10-01 18:24:53'),
(543, 9, '4', '19', '2024-10-01 18:24:53', '2024-10-01 18:24:53'),
(544, 9, '5', '19', '2024-10-01 18:24:53', '2024-10-01 18:24:53'),
(545, 9, '6', '19', '2024-10-01 18:24:53', '2024-10-01 18:24:53'),
(546, 9, '7', '19', '2024-10-01 18:24:53', '2024-10-01 18:24:53'),
(547, 9, '8', '19', '2024-10-01 18:24:53', '2024-10-01 18:24:53'),
(548, 9, '9', '19', '2024-10-01 18:24:53', '2024-10-01 18:24:53'),
(549, 9, '10', '19', '2024-10-01 18:24:53', '2024-10-01 18:24:53'),
(550, 9, '11', '19', '2024-10-01 18:24:53', '2024-10-01 18:24:53'),
(551, 9, '12', '19', '2024-10-01 18:24:53', '2024-10-01 18:24:53'),
(552, 9, '13', '19', '2024-10-01 18:24:53', '2024-10-01 18:24:53'),
(553, 9, '56', '19', '2024-10-01 18:24:53', '2024-10-01 18:24:53'),
(554, 9, '67', '19', '2024-10-01 18:24:53', '2024-10-01 18:24:53'),
(555, 9, '68', '19', '2024-10-01 18:24:53', '2024-10-01 18:24:53'),
(556, 9, '14', '19', '2024-10-01 18:24:53', '2024-10-01 18:24:53'),
(557, 9, '15', '19', '2024-10-01 18:24:53', '2024-10-01 18:24:53'),
(558, 9, '16', '19', '2024-10-01 18:24:53', '2024-10-01 18:24:53'),
(559, 9, '17', '19', '2024-10-01 18:24:53', '2024-10-01 18:24:53'),
(560, 9, '18', '19', '2024-10-01 18:24:53', '2024-10-01 18:24:53'),
(561, 9, '19', '19', '2024-10-01 18:24:53', '2024-10-01 18:24:53'),
(562, 9, '20', '19', '2024-10-01 18:24:53', '2024-10-01 18:24:53'),
(563, 9, '21', '19', '2024-10-01 18:24:53', '2024-10-01 18:24:53'),
(564, 9, '22', '19', '2024-10-01 18:24:53', '2024-10-01 18:24:53'),
(565, 9, '23', '19', '2024-10-01 18:24:53', '2024-10-01 18:24:53'),
(566, 9, '24', '19', '2024-10-01 18:24:53', '2024-10-01 18:24:53'),
(567, 9, '25', '19', '2024-10-01 18:24:53', '2024-10-01 18:24:53'),
(568, 9, '26', '19', '2024-10-01 18:24:53', '2024-10-01 18:24:53'),
(569, 9, '27', '19', '2024-10-01 18:24:53', '2024-10-01 18:24:53'),
(570, 9, '29', '19', '2024-10-01 18:24:53', '2024-10-01 18:24:53'),
(571, 9, '57', '19', '2024-10-01 18:24:53', '2024-10-01 18:24:53'),
(572, 9, '58', '19', '2024-10-01 18:24:53', '2024-10-01 18:24:53'),
(573, 9, '59', '19', '2024-10-01 18:24:53', '2024-10-01 18:24:53'),
(574, 9, '60', '19', '2024-10-01 18:24:53', '2024-10-01 18:24:53'),
(575, 9, '61', '19', '2024-10-01 18:24:53', '2024-10-01 18:24:53'),
(576, 9, '62', '19', '2024-10-01 18:24:53', '2024-10-01 18:24:53'),
(577, 9, '63', '19', '2024-10-01 18:24:53', '2024-10-01 18:24:53'),
(578, 9, '64', '19', '2024-10-01 18:24:53', '2024-10-01 18:24:53'),
(579, 9, '65', '19', '2024-10-01 18:24:53', '2024-10-01 18:24:53'),
(580, 9, '70', '19', '2024-10-01 18:24:53', '2024-10-01 18:24:53'),
(581, 9, '71', '19', '2024-10-01 18:24:53', '2024-10-01 18:24:53'),
(582, 9, '72', '19', '2024-10-01 18:24:53', '2024-10-01 18:24:53'),
(583, 9, '73', '19', '2024-10-01 18:24:53', '2024-10-01 18:24:53'),
(584, 9, '74', '19', '2024-10-01 18:24:53', '2024-10-01 18:24:53'),
(585, 9, '75', '19', '2024-10-01 18:24:53', '2024-10-01 18:24:53'),
(586, 9, '76', '19', '2024-10-01 18:24:53', '2024-10-01 18:24:53'),
(587, 9, '77', '19', '2024-10-01 18:24:53', '2024-10-01 18:24:53'),
(588, 4, '1', '19', '2024-10-01 18:33:09', '2024-10-01 18:33:09'),
(589, 4, '2', '19', '2024-10-01 18:33:09', '2024-10-01 18:33:09'),
(590, 4, '3', '19', '2024-10-01 18:33:09', '2024-10-01 18:33:09'),
(591, 4, '4', '19', '2024-10-01 18:33:09', '2024-10-01 18:33:09'),
(592, 4, '5', '19', '2024-10-01 18:33:09', '2024-10-01 18:33:09'),
(593, 4, '6', '19', '2024-10-01 18:33:09', '2024-10-01 18:33:09'),
(594, 4, '7', '19', '2024-10-01 18:33:09', '2024-10-01 18:33:09'),
(595, 4, '8', '19', '2024-10-01 18:33:09', '2024-10-01 18:33:09'),
(596, 4, '9', '19', '2024-10-01 18:33:09', '2024-10-01 18:33:09'),
(597, 4, '10', '19', '2024-10-01 18:33:09', '2024-10-01 18:33:09'),
(598, 4, '11', '19', '2024-10-01 18:33:09', '2024-10-01 18:33:09'),
(599, 4, '12', '19', '2024-10-01 18:33:09', '2024-10-01 18:33:09'),
(600, 4, '13', '19', '2024-10-01 18:33:09', '2024-10-01 18:33:09'),
(601, 4, '56', '19', '2024-10-01 18:33:09', '2024-10-01 18:33:09'),
(602, 4, '67', '19', '2024-10-01 18:33:09', '2024-10-01 18:33:09'),
(603, 4, '68', '19', '2024-10-01 18:33:09', '2024-10-01 18:33:09'),
(604, 4, '14', '19', '2024-10-01 18:33:09', '2024-10-01 18:33:09'),
(605, 4, '15', '19', '2024-10-01 18:33:09', '2024-10-01 18:33:09'),
(606, 4, '16', '19', '2024-10-01 18:33:09', '2024-10-01 18:33:09'),
(607, 4, '17', '19', '2024-10-01 18:33:09', '2024-10-01 18:33:09'),
(608, 4, '18', '19', '2024-10-01 18:33:09', '2024-10-01 18:33:09'),
(609, 4, '19', '19', '2024-10-01 18:33:09', '2024-10-01 18:33:09'),
(610, 4, '20', '19', '2024-10-01 18:33:09', '2024-10-01 18:33:09'),
(611, 4, '21', '19', '2024-10-01 18:33:09', '2024-10-01 18:33:09'),
(612, 4, '22', '19', '2024-10-01 18:33:09', '2024-10-01 18:33:09'),
(613, 4, '23', '19', '2024-10-01 18:33:09', '2024-10-01 18:33:09'),
(614, 4, '24', '19', '2024-10-01 18:33:09', '2024-10-01 18:33:09'),
(615, 4, '25', '19', '2024-10-01 18:33:09', '2024-10-01 18:33:09'),
(616, 4, '26', '19', '2024-10-01 18:33:09', '2024-10-01 18:33:09'),
(617, 4, '27', '19', '2024-10-01 18:33:09', '2024-10-01 18:33:09'),
(618, 4, '29', '19', '2024-10-01 18:33:09', '2024-10-01 18:33:09'),
(619, 4, '57', '19', '2024-10-01 18:33:09', '2024-10-01 18:33:09'),
(620, 4, '58', '19', '2024-10-01 18:33:09', '2024-10-01 18:33:09'),
(621, 4, '59', '19', '2024-10-01 18:33:09', '2024-10-01 18:33:09'),
(622, 4, '60', '19', '2024-10-01 18:33:09', '2024-10-01 18:33:09'),
(623, 4, '61', '19', '2024-10-01 18:33:09', '2024-10-01 18:33:09'),
(624, 4, '62', '19', '2024-10-01 18:33:09', '2024-10-01 18:33:09'),
(625, 4, '63', '19', '2024-10-01 18:33:09', '2024-10-01 18:33:09'),
(626, 4, '64', '19', '2024-10-01 18:33:09', '2024-10-01 18:33:09'),
(627, 4, '65', '19', '2024-10-01 18:33:09', '2024-10-01 18:33:09'),
(628, 4, '70', '19', '2024-10-01 18:33:09', '2024-10-01 18:33:09'),
(629, 4, '71', '19', '2024-10-01 18:33:09', '2024-10-01 18:33:09'),
(630, 4, '72', '19', '2024-10-01 18:33:09', '2024-10-01 18:33:09'),
(631, 4, '73', '19', '2024-10-01 18:33:09', '2024-10-01 18:33:09'),
(632, 4, '74', '19', '2024-10-01 18:33:09', '2024-10-01 18:33:09'),
(633, 4, '75', '19', '2024-10-01 18:33:09', '2024-10-01 18:33:09'),
(634, 4, '76', '19', '2024-10-01 18:33:09', '2024-10-01 18:33:09'),
(635, 4, '77', '19', '2024-10-01 18:33:09', '2024-10-01 18:33:09'),
(1886, 3, '1', '1', '2025-02-14 17:48:37', '2025-02-14 17:48:37'),
(1887, 3, '2', '1', '2025-02-14 17:48:37', '2025-02-14 17:48:37'),
(1888, 3, '86', '1', '2025-02-14 17:48:37', '2025-02-14 17:48:37'),
(1889, 3, '87', '1', '2025-02-14 17:48:37', '2025-02-14 17:48:37'),
(1890, 3, '3', '1', '2025-02-14 17:48:37', '2025-02-14 17:48:37'),
(1891, 3, '4', '1', '2025-02-14 17:48:37', '2025-02-14 17:48:37'),
(1892, 3, '5', '1', '2025-02-14 17:48:37', '2025-02-14 17:48:37'),
(1893, 3, '6', '1', '2025-02-14 17:48:37', '2025-02-14 17:48:37'),
(1894, 3, '7', '1', '2025-02-14 17:48:37', '2025-02-14 17:48:37'),
(1895, 3, '8', '1', '2025-02-14 17:48:37', '2025-02-14 17:48:37'),
(1896, 3, '70', '1', '2025-02-14 17:48:37', '2025-02-14 17:48:37'),
(1897, 3, '71', '1', '2025-02-14 17:48:37', '2025-02-14 17:48:37'),
(1898, 3, '72', '1', '2025-02-14 17:48:37', '2025-02-14 17:48:37'),
(1899, 3, '73', '1', '2025-02-14 17:48:37', '2025-02-14 17:48:37'),
(1900, 3, '95', '1', '2025-02-14 17:48:37', '2025-02-14 17:48:37'),
(1901, 3, '112', '1', '2025-02-14 17:48:37', '2025-02-14 17:48:37'),
(1902, 3, '113', '1', '2025-02-14 17:48:37', '2025-02-14 17:48:37'),
(1903, 3, '118', '1', '2025-02-14 17:48:37', '2025-02-14 17:48:37'),
(1904, 3, '9', '1', '2025-02-14 17:48:37', '2025-02-14 17:48:37'),
(1905, 3, '10', '1', '2025-02-14 17:48:37', '2025-02-14 17:48:37'),
(1906, 3, '11', '1', '2025-02-14 17:48:37', '2025-02-14 17:48:37'),
(1907, 3, '78', '1', '2025-02-14 17:48:37', '2025-02-14 17:48:37'),
(1908, 3, '80', '1', '2025-02-14 17:48:37', '2025-02-14 17:48:37'),
(1909, 3, '83', '1', '2025-02-14 17:48:37', '2025-02-14 17:48:37'),
(1910, 3, '103', '1', '2025-02-14 17:48:37', '2025-02-14 17:48:37'),
(1911, 3, '12', '1', '2025-02-14 17:48:37', '2025-02-14 17:48:37'),
(1912, 3, '13', '1', '2025-02-14 17:48:37', '2025-02-14 17:48:37'),
(1913, 3, '56', '1', '2025-02-14 17:48:37', '2025-02-14 17:48:37'),
(1914, 3, '67', '1', '2025-02-14 17:48:37', '2025-02-14 17:48:37'),
(1915, 3, '68', '1', '2025-02-14 17:48:37', '2025-02-14 17:48:37'),
(1916, 3, '76', '1', '2025-02-14 17:48:37', '2025-02-14 17:48:37'),
(1917, 3, '77', '1', '2025-02-14 17:48:37', '2025-02-14 17:48:37'),
(1918, 3, '14', '1', '2025-02-14 17:48:37', '2025-02-14 17:48:37'),
(1919, 3, '15', '1', '2025-02-14 17:48:37', '2025-02-14 17:48:37'),
(1920, 3, '16', '1', '2025-02-14 17:48:37', '2025-02-14 17:48:37'),
(1921, 3, '19', '1', '2025-02-14 17:48:37', '2025-02-14 17:48:37'),
(1922, 3, '20', '1', '2025-02-14 17:48:37', '2025-02-14 17:48:37'),
(1923, 3, '21', '1', '2025-02-14 17:48:37', '2025-02-14 17:48:37'),
(1924, 3, '22', '1', '2025-02-14 17:48:37', '2025-02-14 17:48:37'),
(1925, 3, '23', '1', '2025-02-14 17:48:37', '2025-02-14 17:48:37'),
(1926, 3, '81', '1', '2025-02-14 17:48:37', '2025-02-14 17:48:37'),
(1927, 3, '108', '1', '2025-02-14 17:48:37', '2025-02-14 17:48:37'),
(1928, 3, '24', '1', '2025-02-14 17:48:37', '2025-02-14 17:48:37'),
(1929, 3, '25', '1', '2025-02-14 17:48:37', '2025-02-14 17:48:37'),
(1930, 3, '26', '1', '2025-02-14 17:48:37', '2025-02-14 17:48:37'),
(1931, 3, '57', '1', '2025-02-14 17:48:37', '2025-02-14 17:48:37'),
(1932, 3, '58', '1', '2025-02-14 17:48:37', '2025-02-14 17:48:37'),
(1933, 3, '59', '1', '2025-02-14 17:48:37', '2025-02-14 17:48:37'),
(1934, 3, '60', '1', '2025-02-14 17:48:37', '2025-02-14 17:48:37'),
(1935, 3, '61', '1', '2025-02-14 17:48:37', '2025-02-14 17:48:37'),
(1936, 3, '62', '1', '2025-02-14 17:48:37', '2025-02-14 17:48:37'),
(1937, 3, '94', '1', '2025-02-14 17:48:37', '2025-02-14 17:48:37'),
(1938, 3, '63', '1', '2025-02-14 17:48:37', '2025-02-14 17:48:37'),
(1939, 3, '64', '1', '2025-02-14 17:48:37', '2025-02-14 17:48:37'),
(1940, 3, '65', '1', '2025-02-14 17:48:37', '2025-02-14 17:48:37'),
(1941, 3, '75', '1', '2025-02-14 17:48:37', '2025-02-14 17:48:37'),
(1942, 3, '88', '1', '2025-02-14 17:48:37', '2025-02-14 17:48:37'),
(1943, 3, '89', '1', '2025-02-14 17:48:37', '2025-02-14 17:48:37'),
(1944, 3, '90', '1', '2025-02-14 17:48:37', '2025-02-14 17:48:37'),
(1945, 3, '110', '1', '2025-02-14 17:48:37', '2025-02-14 17:48:37'),
(1946, 3, '111', '1', '2025-02-14 17:48:37', '2025-02-14 17:48:37'),
(1947, 3, '74', '1', '2025-02-14 17:48:37', '2025-02-14 17:48:37'),
(1948, 3, '91', '1', '2025-02-14 17:48:37', '2025-02-14 17:48:37'),
(1949, 3, '93', '1', '2025-02-14 17:48:37', '2025-02-14 17:48:37'),
(1950, 3, '99', '1', '2025-02-14 17:48:37', '2025-02-14 17:48:37'),
(1951, 3, '100', '1', '2025-02-14 17:48:37', '2025-02-14 17:48:37'),
(1952, 3, '102', '1', '2025-02-14 17:48:37', '2025-02-14 17:48:37'),
(1953, 3, '104', '1', '2025-02-14 17:48:37', '2025-02-14 17:48:37'),
(1954, 3, '105', '1', '2025-02-14 17:48:37', '2025-02-14 17:48:37'),
(1955, 3, '106', '1', '2025-02-14 17:48:37', '2025-02-14 17:48:37'),
(1956, 3, '107', '1', '2025-02-14 17:48:37', '2025-02-14 17:48:37'),
(1957, 3, '109', '1', '2025-02-14 17:48:37', '2025-02-14 17:48:37'),
(1958, 3, '117', '1', '2025-02-14 17:48:37', '2025-02-14 17:48:37'),
(1959, 3, '119', '1', '2025-02-14 17:48:37', '2025-02-14 17:48:37'),
(1960, 3, '79', '1', '2025-02-14 17:48:37', '2025-02-14 17:48:37'),
(1961, 3, '84', '1', '2025-02-14 17:48:37', '2025-02-14 17:48:37'),
(1962, 3, '114', '1', '2025-02-14 17:48:37', '2025-02-14 17:48:37'),
(1963, 3, '115', '1', '2025-02-14 17:48:37', '2025-02-14 17:48:37'),
(1964, 3, '116', '1', '2025-02-14 17:48:37', '2025-02-14 17:48:37'),
(1965, 3, '97', '1', '2025-02-14 17:48:37', '2025-02-14 17:48:37'),
(1966, 3, '98', '1', '2025-02-14 17:48:37', '2025-02-14 17:48:37'),
(1967, 3, '120', '1', '2025-02-14 17:48:37', '2025-02-14 17:48:37'),
(1968, 3, '101', '1', '2025-02-14 17:48:37', '2025-02-14 17:48:37'),
(1969, 3, '121', '1', '2025-02-14 17:48:37', '2025-02-14 17:48:37'),
(1970, 3, '122', '1', '2025-02-14 17:48:37', '2025-02-14 17:48:37'),
(1971, 3, '123', '1', '2025-02-14 17:48:37', '2025-02-14 17:48:37'),
(1972, 3, '124', '1', '2025-02-14 17:48:37', '2025-02-14 17:48:37'),
(1973, 3, '125', '1', '2025-02-14 17:48:37', '2025-02-14 17:48:37'),
(1974, 3, '126', '1', '2025-02-14 17:48:37', '2025-02-14 17:48:37'),
(1975, 3, '127', '1', '2025-02-14 17:48:37', '2025-02-14 17:48:37'),
(1976, 3, '128', '1', '2025-02-14 17:48:37', '2025-02-14 17:48:37'),
(1977, 3, '129', '1', '2025-02-14 17:48:37', '2025-02-14 17:48:37'),
(2273, 12, '2', '1', '2025-11-07 15:47:09', '2025-11-07 15:47:09'),
(2274, 12, '3', '1', '2025-11-07 15:47:09', '2025-11-07 15:47:09'),
(2275, 12, '4', '1', '2025-11-07 15:47:09', '2025-11-07 15:47:09'),
(2276, 12, '5', '1', '2025-11-07 15:47:09', '2025-11-07 15:47:09'),
(2277, 12, '6', '1', '2025-11-07 15:47:09', '2025-11-07 15:47:09'),
(2278, 12, '7', '1', '2025-11-07 15:47:09', '2025-11-07 15:47:09'),
(2279, 12, '8', '1', '2025-11-07 15:47:09', '2025-11-07 15:47:09'),
(2280, 12, '70', '1', '2025-11-07 15:47:09', '2025-11-07 15:47:09'),
(2281, 12, '71', '1', '2025-11-07 15:47:09', '2025-11-07 15:47:09'),
(2282, 12, '72', '1', '2025-11-07 15:47:09', '2025-11-07 15:47:09'),
(2283, 12, '73', '1', '2025-11-07 15:47:09', '2025-11-07 15:47:09'),
(2284, 12, '112', '1', '2025-11-07 15:47:09', '2025-11-07 15:47:09'),
(2285, 12, '113', '1', '2025-11-07 15:47:09', '2025-11-07 15:47:09'),
(2286, 12, '151', '1', '2025-11-07 15:47:09', '2025-11-07 15:47:09'),
(2287, 12, '9', '1', '2025-11-07 15:47:09', '2025-11-07 15:47:09'),
(2288, 12, '10', '1', '2025-11-07 15:47:09', '2025-11-07 15:47:09'),
(2289, 12, '11', '1', '2025-11-07 15:47:09', '2025-11-07 15:47:09'),
(2290, 12, '78', '1', '2025-11-07 15:47:09', '2025-11-07 15:47:09'),
(2291, 12, '80', '1', '2025-11-07 15:47:09', '2025-11-07 15:47:09'),
(2292, 12, '12', '1', '2025-11-07 15:47:09', '2025-11-07 15:47:09'),
(2293, 12, '13', '1', '2025-11-07 15:47:09', '2025-11-07 15:47:09'),
(2294, 12, '56', '1', '2025-11-07 15:47:09', '2025-11-07 15:47:09'),
(2295, 12, '67', '1', '2025-11-07 15:47:09', '2025-11-07 15:47:09'),
(2296, 12, '68', '1', '2025-11-07 15:47:09', '2025-11-07 15:47:09'),
(2297, 12, '76', '1', '2025-11-07 15:47:09', '2025-11-07 15:47:09'),
(2298, 12, '77', '1', '2025-11-07 15:47:09', '2025-11-07 15:47:09'),
(2299, 12, '14', '1', '2025-11-07 15:47:09', '2025-11-07 15:47:09'),
(2300, 12, '15', '1', '2025-11-07 15:47:09', '2025-11-07 15:47:09'),
(2301, 12, '16', '1', '2025-11-07 15:47:09', '2025-11-07 15:47:09'),
(2302, 12, '20', '1', '2025-11-07 15:47:09', '2025-11-07 15:47:09'),
(2303, 12, '21', '1', '2025-11-07 15:47:09', '2025-11-07 15:47:09'),
(2304, 12, '24', '1', '2025-11-07 15:47:09', '2025-11-07 15:47:09'),
(2305, 12, '57', '1', '2025-11-07 15:47:09', '2025-11-07 15:47:09'),
(2306, 12, '58', '1', '2025-11-07 15:47:09', '2025-11-07 15:47:09'),
(2307, 12, '59', '1', '2025-11-07 15:47:09', '2025-11-07 15:47:09'),
(2308, 12, '60', '1', '2025-11-07 15:47:09', '2025-11-07 15:47:09'),
(2309, 12, '61', '1', '2025-11-07 15:47:09', '2025-11-07 15:47:09'),
(2310, 12, '62', '1', '2025-11-07 15:47:09', '2025-11-07 15:47:09'),
(2311, 12, '94', '1', '2025-11-07 15:47:09', '2025-11-07 15:47:09'),
(2312, 12, '63', '1', '2025-11-07 15:47:09', '2025-11-07 15:47:09'),
(2313, 12, '64', '1', '2025-11-07 15:47:09', '2025-11-07 15:47:09'),
(2314, 12, '88', '1', '2025-11-07 15:47:09', '2025-11-07 15:47:09'),
(2315, 12, '110', '1', '2025-11-07 15:47:09', '2025-11-07 15:47:09'),
(2316, 12, '74', '1', '2025-11-07 15:47:09', '2025-11-07 15:47:09'),
(2317, 12, '91', '1', '2025-11-07 15:47:09', '2025-11-07 15:47:09'),
(2318, 12, '93', '1', '2025-11-07 15:47:09', '2025-11-07 15:47:09'),
(2319, 12, '99', '1', '2025-11-07 15:47:09', '2025-11-07 15:47:09'),
(2320, 12, '100', '1', '2025-11-07 15:47:09', '2025-11-07 15:47:09'),
(2321, 12, '102', '1', '2025-11-07 15:47:09', '2025-11-07 15:47:09'),
(2322, 12, '104', '1', '2025-11-07 15:47:09', '2025-11-07 15:47:09'),
(2323, 12, '105', '1', '2025-11-07 15:47:09', '2025-11-07 15:47:09'),
(2324, 12, '106', '1', '2025-11-07 15:47:09', '2025-11-07 15:47:09'),
(2325, 12, '107', '1', '2025-11-07 15:47:09', '2025-11-07 15:47:09'),
(2326, 12, '109', '1', '2025-11-07 15:47:09', '2025-11-07 15:47:09'),
(2327, 12, '117', '1', '2025-11-07 15:47:09', '2025-11-07 15:47:09'),
(2328, 12, '119', '1', '2025-11-07 15:47:09', '2025-11-07 15:47:09'),
(2329, 12, '84', '1', '2025-11-07 15:47:09', '2025-11-07 15:47:09'),
(2330, 12, '97', '1', '2025-11-07 15:47:09', '2025-11-07 15:47:09'),
(2331, 12, '121', '1', '2025-11-07 15:47:09', '2025-11-07 15:47:09'),
(2332, 12, '130', '1', '2025-11-07 15:47:09', '2025-11-07 15:47:09'),
(2333, 12, '131', '1', '2025-11-07 15:47:09', '2025-11-07 15:47:09'),
(2334, 12, '132', '1', '2025-11-07 15:47:09', '2025-11-07 15:47:09'),
(2335, 12, '133', '1', '2025-11-07 15:47:09', '2025-11-07 15:47:09'),
(2336, 12, '136', '1', '2025-11-07 15:47:09', '2025-11-07 15:47:09'),
(2337, 12, '137', '1', '2025-11-07 15:47:09', '2025-11-07 15:47:09'),
(2338, 12, '138', '1', '2025-11-07 15:47:09', '2025-11-07 15:47:09'),
(2339, 12, '139', '1', '2025-11-07 15:47:09', '2025-11-07 15:47:09'),
(2340, 12, '140', '1', '2025-11-07 15:47:09', '2025-11-07 15:47:09'),
(2341, 12, '141', '1', '2025-11-07 15:47:09', '2025-11-07 15:47:09'),
(2342, 12, '142', '1', '2025-11-07 15:47:09', '2025-11-07 15:47:09'),
(2343, 12, '143', '1', '2025-11-07 15:47:09', '2025-11-07 15:47:09'),
(2344, 12, '144', '1', '2025-11-07 15:47:09', '2025-11-07 15:47:09'),
(2345, 12, '145', '1', '2025-11-07 15:47:09', '2025-11-07 15:47:09'),
(2346, 12, '146', '1', '2025-11-07 15:47:09', '2025-11-07 15:47:09'),
(2347, 12, '147', '1', '2025-11-07 15:47:09', '2025-11-07 15:47:09'),
(2348, 12, '148', '1', '2025-11-07 15:47:09', '2025-11-07 15:47:09'),
(2349, 12, '149', '1', '2025-11-07 15:47:09', '2025-11-07 15:47:09'),
(2350, 1, '1', '1', '2025-11-11 11:30:47', '2025-11-11 11:30:47'),
(2351, 1, '2', '1', '2025-11-11 11:30:47', '2025-11-11 11:30:47'),
(2352, 1, '86', '1', '2025-11-11 11:30:47', '2025-11-11 11:30:47'),
(2353, 1, '87', '1', '2025-11-11 11:30:47', '2025-11-11 11:30:47'),
(2354, 1, '150', '1', '2025-11-11 11:30:47', '2025-11-11 11:30:47'),
(2355, 1, '3', '1', '2025-11-11 11:30:47', '2025-11-11 11:30:47'),
(2356, 1, '4', '1', '2025-11-11 11:30:47', '2025-11-11 11:30:47'),
(2357, 1, '5', '1', '2025-11-11 11:30:47', '2025-11-11 11:30:47'),
(2358, 1, '6', '1', '2025-11-11 11:30:47', '2025-11-11 11:30:47'),
(2359, 1, '7', '1', '2025-11-11 11:30:47', '2025-11-11 11:30:47'),
(2360, 1, '8', '1', '2025-11-11 11:30:47', '2025-11-11 11:30:47'),
(2361, 1, '70', '1', '2025-11-11 11:30:47', '2025-11-11 11:30:47'),
(2362, 1, '71', '1', '2025-11-11 11:30:47', '2025-11-11 11:30:47'),
(2363, 1, '72', '1', '2025-11-11 11:30:47', '2025-11-11 11:30:47'),
(2364, 1, '73', '1', '2025-11-11 11:30:47', '2025-11-11 11:30:47'),
(2365, 1, '95', '1', '2025-11-11 11:30:47', '2025-11-11 11:30:47'),
(2366, 1, '112', '1', '2025-11-11 11:30:47', '2025-11-11 11:30:47'),
(2367, 1, '113', '1', '2025-11-11 11:30:47', '2025-11-11 11:30:47'),
(2368, 1, '118', '1', '2025-11-11 11:30:47', '2025-11-11 11:30:47'),
(2369, 1, '9', '1', '2025-11-11 11:30:47', '2025-11-11 11:30:47'),
(2370, 1, '10', '1', '2025-11-11 11:30:47', '2025-11-11 11:30:47'),
(2371, 1, '11', '1', '2025-11-11 11:30:47', '2025-11-11 11:30:47'),
(2372, 1, '78', '1', '2025-11-11 11:30:47', '2025-11-11 11:30:47'),
(2373, 1, '80', '1', '2025-11-11 11:30:47', '2025-11-11 11:30:47'),
(2374, 1, '83', '1', '2025-11-11 11:30:47', '2025-11-11 11:30:47'),
(2375, 1, '103', '1', '2025-11-11 11:30:47', '2025-11-11 11:30:47'),
(2376, 1, '12', '1', '2025-11-11 11:30:47', '2025-11-11 11:30:47'),
(2377, 1, '13', '1', '2025-11-11 11:30:47', '2025-11-11 11:30:47'),
(2378, 1, '56', '1', '2025-11-11 11:30:47', '2025-11-11 11:30:47'),
(2379, 1, '67', '1', '2025-11-11 11:30:47', '2025-11-11 11:30:47'),
(2380, 1, '68', '1', '2025-11-11 11:30:47', '2025-11-11 11:30:47'),
(2381, 1, '76', '1', '2025-11-11 11:30:47', '2025-11-11 11:30:47'),
(2382, 1, '77', '1', '2025-11-11 11:30:47', '2025-11-11 11:30:47'),
(2383, 1, '14', '1', '2025-11-11 11:30:47', '2025-11-11 11:30:47'),
(2384, 1, '15', '1', '2025-11-11 11:30:47', '2025-11-11 11:30:47'),
(2385, 1, '16', '1', '2025-11-11 11:30:47', '2025-11-11 11:30:47'),
(2386, 1, '17', '1', '2025-11-11 11:30:47', '2025-11-11 11:30:47'),
(2387, 1, '18', '1', '2025-11-11 11:30:47', '2025-11-11 11:30:47'),
(2388, 1, '19', '1', '2025-11-11 11:30:47', '2025-11-11 11:30:47'),
(2389, 1, '82', '1', '2025-11-11 11:30:47', '2025-11-11 11:30:47'),
(2390, 1, '20', '1', '2025-11-11 11:30:47', '2025-11-11 11:30:47'),
(2391, 1, '21', '1', '2025-11-11 11:30:47', '2025-11-11 11:30:47'),
(2392, 1, '22', '1', '2025-11-11 11:30:47', '2025-11-11 11:30:47'),
(2393, 1, '23', '1', '2025-11-11 11:30:47', '2025-11-11 11:30:47'),
(2394, 1, '81', '1', '2025-11-11 11:30:47', '2025-11-11 11:30:47'),
(2395, 1, '108', '1', '2025-11-11 11:30:47', '2025-11-11 11:30:47'),
(2396, 1, '24', '1', '2025-11-11 11:30:47', '2025-11-11 11:30:47'),
(2397, 1, '25', '1', '2025-11-11 11:30:47', '2025-11-11 11:30:47'),
(2398, 1, '26', '1', '2025-11-11 11:30:47', '2025-11-11 11:30:47'),
(2399, 1, '27', '1', '2025-11-11 11:30:47', '2025-11-11 11:30:47'),
(2400, 1, '92', '1', '2025-11-11 11:30:47', '2025-11-11 11:30:47'),
(2401, 1, '57', '1', '2025-11-11 11:30:47', '2025-11-11 11:30:47'),
(2402, 1, '58', '1', '2025-11-11 11:30:47', '2025-11-11 11:30:47'),
(2403, 1, '59', '1', '2025-11-11 11:30:47', '2025-11-11 11:30:47'),
(2404, 1, '60', '1', '2025-11-11 11:30:47', '2025-11-11 11:30:47'),
(2405, 1, '61', '1', '2025-11-11 11:30:47', '2025-11-11 11:30:47'),
(2406, 1, '62', '1', '2025-11-11 11:30:47', '2025-11-11 11:30:47'),
(2407, 1, '94', '1', '2025-11-11 11:30:47', '2025-11-11 11:30:47'),
(2408, 1, '63', '1', '2025-11-11 11:30:47', '2025-11-11 11:30:47'),
(2409, 1, '64', '1', '2025-11-11 11:30:47', '2025-11-11 11:30:47'),
(2410, 1, '65', '1', '2025-11-11 11:30:47', '2025-11-11 11:30:47'),
(2411, 1, '75', '1', '2025-11-11 11:30:47', '2025-11-11 11:30:47'),
(2412, 1, '88', '1', '2025-11-11 11:30:47', '2025-11-11 11:30:47'),
(2413, 1, '89', '1', '2025-11-11 11:30:47', '2025-11-11 11:30:47'),
(2414, 1, '90', '1', '2025-11-11 11:30:47', '2025-11-11 11:30:47'),
(2415, 1, '110', '1', '2025-11-11 11:30:47', '2025-11-11 11:30:47'),
(2416, 1, '111', '1', '2025-11-11 11:30:47', '2025-11-11 11:30:47'),
(2417, 1, '74', '1', '2025-11-11 11:30:47', '2025-11-11 11:30:47'),
(2418, 1, '91', '1', '2025-11-11 11:30:47', '2025-11-11 11:30:47'),
(2419, 1, '93', '1', '2025-11-11 11:30:47', '2025-11-11 11:30:47'),
(2420, 1, '99', '1', '2025-11-11 11:30:47', '2025-11-11 11:30:47'),
(2421, 1, '100', '1', '2025-11-11 11:30:47', '2025-11-11 11:30:47'),
(2422, 1, '102', '1', '2025-11-11 11:30:47', '2025-11-11 11:30:47'),
(2423, 1, '104', '1', '2025-11-11 11:30:47', '2025-11-11 11:30:47'),
(2424, 1, '105', '1', '2025-11-11 11:30:47', '2025-11-11 11:30:47'),
(2425, 1, '106', '1', '2025-11-11 11:30:47', '2025-11-11 11:30:47'),
(2426, 1, '107', '1', '2025-11-11 11:30:47', '2025-11-11 11:30:47'),
(2427, 1, '109', '1', '2025-11-11 11:30:47', '2025-11-11 11:30:47'),
(2428, 1, '117', '1', '2025-11-11 11:30:47', '2025-11-11 11:30:47'),
(2429, 1, '119', '1', '2025-11-11 11:30:47', '2025-11-11 11:30:47'),
(2430, 1, '79', '1', '2025-11-11 11:30:47', '2025-11-11 11:30:47'),
(2431, 1, '84', '1', '2025-11-11 11:30:47', '2025-11-11 11:30:47'),
(2432, 1, '114', '1', '2025-11-11 11:30:47', '2025-11-11 11:30:47'),
(2433, 1, '115', '1', '2025-11-11 11:30:47', '2025-11-11 11:30:47'),
(2434, 1, '116', '1', '2025-11-11 11:30:47', '2025-11-11 11:30:47'),
(2435, 1, '85', '1', '2025-11-11 11:30:47', '2025-11-11 11:30:47'),
(2436, 1, '97', '1', '2025-11-11 11:30:47', '2025-11-11 11:30:47'),
(2437, 1, '98', '1', '2025-11-11 11:30:47', '2025-11-11 11:30:47'),
(2438, 1, '120', '1', '2025-11-11 11:30:47', '2025-11-11 11:30:47'),
(2439, 1, '101', '1', '2025-11-11 11:30:47', '2025-11-11 11:30:47'),
(2440, 1, '121', '1', '2025-11-11 11:30:47', '2025-11-11 11:30:47'),
(2441, 1, '122', '1', '2025-11-11 11:30:47', '2025-11-11 11:30:47'),
(2442, 1, '123', '1', '2025-11-11 11:30:47', '2025-11-11 11:30:47'),
(2443, 1, '124', '1', '2025-11-11 11:30:47', '2025-11-11 11:30:47'),
(2444, 1, '125', '1', '2025-11-11 11:30:47', '2025-11-11 11:30:47'),
(2445, 1, '126', '1', '2025-11-11 11:30:47', '2025-11-11 11:30:47'),
(2446, 1, '127', '1', '2025-11-11 11:30:47', '2025-11-11 11:30:47'),
(2447, 1, '128', '1', '2025-11-11 11:30:47', '2025-11-11 11:30:47'),
(2448, 1, '129', '1', '2025-11-11 11:30:47', '2025-11-11 11:30:47'),
(2449, 1, '130', '1', '2025-11-11 11:30:47', '2025-11-11 11:30:47'),
(2450, 1, '131', '1', '2025-11-11 11:30:47', '2025-11-11 11:30:47'),
(2451, 1, '132', '1', '2025-11-11 11:30:47', '2025-11-11 11:30:47'),
(2452, 1, '133', '1', '2025-11-11 11:30:47', '2025-11-11 11:30:47'),
(2453, 2, '1', '1', '2025-11-11 11:30:59', '2025-11-11 11:30:59'),
(2454, 2, '2', '1', '2025-11-11 11:30:59', '2025-11-11 11:30:59'),
(2455, 2, '86', '1', '2025-11-11 11:30:59', '2025-11-11 11:30:59'),
(2456, 2, '87', '1', '2025-11-11 11:30:59', '2025-11-11 11:30:59'),
(2457, 2, '150', '1', '2025-11-11 11:30:59', '2025-11-11 11:30:59'),
(2458, 2, '3', '1', '2025-11-11 11:30:59', '2025-11-11 11:30:59'),
(2459, 2, '4', '1', '2025-11-11 11:30:59', '2025-11-11 11:30:59'),
(2460, 2, '5', '1', '2025-11-11 11:30:59', '2025-11-11 11:30:59'),
(2461, 2, '6', '1', '2025-11-11 11:30:59', '2025-11-11 11:30:59'),
(2462, 2, '7', '1', '2025-11-11 11:30:59', '2025-11-11 11:30:59'),
(2463, 2, '8', '1', '2025-11-11 11:30:59', '2025-11-11 11:30:59'),
(2464, 2, '70', '1', '2025-11-11 11:30:59', '2025-11-11 11:30:59'),
(2465, 2, '71', '1', '2025-11-11 11:30:59', '2025-11-11 11:30:59'),
(2466, 2, '72', '1', '2025-11-11 11:30:59', '2025-11-11 11:30:59'),
(2467, 2, '73', '1', '2025-11-11 11:30:59', '2025-11-11 11:30:59'),
(2468, 2, '95', '1', '2025-11-11 11:30:59', '2025-11-11 11:30:59'),
(2469, 2, '112', '1', '2025-11-11 11:30:59', '2025-11-11 11:30:59'),
(2470, 2, '113', '1', '2025-11-11 11:30:59', '2025-11-11 11:30:59'),
(2471, 2, '118', '1', '2025-11-11 11:30:59', '2025-11-11 11:30:59'),
(2472, 2, '9', '1', '2025-11-11 11:30:59', '2025-11-11 11:30:59'),
(2473, 2, '10', '1', '2025-11-11 11:30:59', '2025-11-11 11:30:59'),
(2474, 2, '11', '1', '2025-11-11 11:30:59', '2025-11-11 11:30:59'),
(2475, 2, '80', '1', '2025-11-11 11:30:59', '2025-11-11 11:30:59'),
(2476, 2, '83', '1', '2025-11-11 11:30:59', '2025-11-11 11:30:59'),
(2477, 2, '12', '1', '2025-11-11 11:30:59', '2025-11-11 11:30:59'),
(2478, 2, '13', '1', '2025-11-11 11:30:59', '2025-11-11 11:30:59'),
(2479, 2, '67', '1', '2025-11-11 11:30:59', '2025-11-11 11:30:59'),
(2480, 2, '68', '1', '2025-11-11 11:30:59', '2025-11-11 11:30:59'),
(2481, 2, '14', '1', '2025-11-11 11:30:59', '2025-11-11 11:30:59'),
(2482, 2, '16', '1', '2025-11-11 11:30:59', '2025-11-11 11:30:59'),
(2483, 2, '17', '1', '2025-11-11 11:30:59', '2025-11-11 11:30:59'),
(2484, 2, '18', '1', '2025-11-11 11:30:59', '2025-11-11 11:30:59'),
(2485, 2, '19', '1', '2025-11-11 11:30:59', '2025-11-11 11:30:59'),
(2486, 2, '82', '1', '2025-11-11 11:30:59', '2025-11-11 11:30:59'),
(2487, 2, '20', '1', '2025-11-11 11:30:59', '2025-11-11 11:30:59'),
(2488, 2, '21', '1', '2025-11-11 11:30:59', '2025-11-11 11:30:59'),
(2489, 2, '22', '1', '2025-11-11 11:30:59', '2025-11-11 11:30:59'),
(2490, 2, '23', '1', '2025-11-11 11:30:59', '2025-11-11 11:30:59'),
(2491, 2, '24', '1', '2025-11-11 11:30:59', '2025-11-11 11:30:59'),
(2492, 2, '25', '1', '2025-11-11 11:30:59', '2025-11-11 11:30:59'),
(2493, 2, '57', '1', '2025-11-11 11:30:59', '2025-11-11 11:30:59'),
(2494, 2, '63', '1', '2025-11-11 11:30:59', '2025-11-11 11:30:59'),
(2495, 2, '64', '1', '2025-11-11 11:30:59', '2025-11-11 11:30:59'),
(2496, 2, '65', '1', '2025-11-11 11:30:59', '2025-11-11 11:30:59'),
(2497, 2, '75', '1', '2025-11-11 11:30:59', '2025-11-11 11:30:59'),
(2498, 2, '74', '1', '2025-11-11 11:30:59', '2025-11-11 11:30:59'),
(2499, 2, '84', '1', '2025-11-11 11:30:59', '2025-11-11 11:30:59'),
(2500, 2, '97', '1', '2025-11-11 11:30:59', '2025-11-11 11:30:59'),
(2501, 2, '121', '1', '2025-11-11 11:30:59', '2025-11-11 11:30:59'),
(2502, 2, '130', '1', '2025-11-11 11:30:59', '2025-11-11 11:30:59');

-- --------------------------------------------------------

--
-- Table structure for table `propfirm_account_types`
--

CREATE TABLE `propfirm_account_types` (
  `ac_index` int(11) NOT NULL,
  `ac_category` int(11) NOT NULL,
  `ac_book_type` int(11) NOT NULL,
  `ac_name` varchar(50) DEFAULT NULL,
  `initial_amount` int(11) DEFAULT NULL,
  `ac_desc` longtext DEFAULT NULL,
  `challenge_days` int(11) NOT NULL DEFAULT 5,
  `button` longtext NOT NULL,
  `level_id` int(11) NOT NULL DEFAULT 1,
  `ac_min_deposit` int(11) DEFAULT NULL,
  `ac_max_deposit` int(11) DEFAULT NULL,
  `ac_max_leverage` int(11) DEFAULT NULL,
  `ac_lot_size` double(4,2) DEFAULT NULL,
  `ac_group` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `trading_period` varchar(250) NOT NULL DEFAULT 'Unlimited',
  `mini_trading_days` varchar(250) NOT NULL,
  `max_daily_loss` int(11) NOT NULL,
  `max_loss` int(11) NOT NULL,
  `profit_target` int(11) NOT NULL,
  `next_account_id` int(11) DEFAULT NULL,
  `fees` int(11) NOT NULL,
  `expert_advisor` varchar(250) NOT NULL,
  `ac_spread` double(10,4) DEFAULT NULL,
  `ac_type` int(11) NOT NULL,
  `is_client_group` tinyint(4) NOT NULL DEFAULT 1,
  `ib_commission` int(11) DEFAULT NULL,
  `display_priority` int(11) NOT NULL,
  `ac_swap` enum('yes','no') NOT NULL DEFAULT 'yes',
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `inquiry_status` tinyint(4) NOT NULL DEFAULT 1,
  `ib_enabled` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB AVG_ROW_LENGTH=64 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `propfirm_add_ons`
--

CREATE TABLE `propfirm_add_ons` (
  `add_on_id` int(11) NOT NULL,
  `add_on_name` varchar(255) NOT NULL,
  `add_on_level` int(11) NOT NULL,
  `add_on_percentage` decimal(10,2) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `propfirm_cart`
--

CREATE TABLE `propfirm_cart` (
  `id` int(11) NOT NULL,
  `payment_type` varchar(255) NOT NULL DEFAULT 'Card Payment',
  `email` varchar(50) NOT NULL,
  `amount` varchar(100) DEFAULT NULL,
  `currency` varchar(100) DEFAULT NULL,
  `tradePlatform` varchar(100) DEFAULT NULL,
  `level_id` int(11) DEFAULT NULL,
  `category` varchar(100) DEFAULT NULL,
  `challenge_end_date` datetime DEFAULT NULL,
  `mini_trade_end_date` datetime DEFAULT NULL,
  `referral_code` varchar(20) DEFAULT NULL,
  `referral_user` varchar(255) DEFAULT NULL,
  `discount_code` varchar(100) DEFAULT NULL,
  `discount_type` varchar(100) DEFAULT NULL,
  `discount_value` varchar(100) DEFAULT NULL,
  `discount_amount` decimal(10,2) DEFAULT 0.00,
  `trading_period` int(11) DEFAULT NULL,
  `mini_trading_days` int(11) DEFAULT NULL,
  `challenge_days` int(11) DEFAULT NULL,
  `max_daily_loss` decimal(10,2) DEFAULT 0.00,
  `ac_name` varchar(100) DEFAULT NULL,
  `profit_target` decimal(10,2) DEFAULT 0.00,
  `max_loss` decimal(10,2) DEFAULT 0.00,
  `coupon_code` varchar(100) DEFAULT NULL,
  `deposit` decimal(10,2) DEFAULT 0.00,
  `payment` decimal(10,2) DEFAULT 0.00,
  `add_on_1` tinyint(4) NOT NULL DEFAULT 0,
  `add_on_1_price` decimal(10,2) NOT NULL DEFAULT 0.00,
  `add_on_2` tinyint(4) NOT NULL DEFAULT 0,
  `add_on_2_price` decimal(10,2) NOT NULL DEFAULT 0.00,
  `add_on_3` tinyint(4) NOT NULL DEFAULT 0,
  `add_on_3_price` decimal(10,2) NOT NULL DEFAULT 0.00,
  `user` text DEFAULT NULL,
  `payment_log_id` bigint(20) DEFAULT NULL,
  `trade_id` varchar(100) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `propfirm_challenges_level`
--

CREATE TABLE `propfirm_challenges_level` (
  `level_id` int(11) NOT NULL,
  `level_name` varchar(255) NOT NULL,
  `level_desc` text DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_by` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `propfirm_liveaccount`
--

CREATE TABLE `propfirm_liveaccount` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `is_autogenerate` tinyint(1) NOT NULL DEFAULT 0,
  `email` varchar(50) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `trade_id` varchar(100) DEFAULT NULL,
  `level_id` varchar(250) DEFAULT NULL,
  `account_type` int(11) DEFAULT NULL,
  `account_group` varchar(250) DEFAULT NULL,
  `leverage` varchar(255) DEFAULT NULL,
  `currency` varchar(20) DEFAULT NULL,
  `Balance` double(10,4) NOT NULL DEFAULT 0.0000,
  `equity` double(10,4) DEFAULT 0.0000,
  `profit_target` varchar(250) DEFAULT NULL,
  `max_daily_loss` int(11) NOT NULL,
  `max_loss` int(11) NOT NULL,
  `tradePlatform` varchar(100) DEFAULT NULL,
  `lotsCompleted` int(11) NOT NULL DEFAULT 0,
  `MarginFree` double(10,4) NOT NULL DEFAULT 0.0000,
  `MarginLevel` double(10,4) NOT NULL DEFAULT 0.0000,
  `MarginLevelType` varchar(60) DEFAULT NULL,
  `adj` double(10,4) NOT NULL DEFAULT 0.0000,
  `deposit` double(10,4) NOT NULL DEFAULT 0.0000,
  `withdraw` double(10,4) NOT NULL DEFAULT 0.0000,
  `internal_transfer` double(10,4) NOT NULL DEFAULT 0.0000,
  `internalDeposit` double(10,4) NOT NULL DEFAULT 0.0000,
  `trader_pwd` varchar(200) DEFAULT NULL,
  `invester_pwd` varchar(200) DEFAULT NULL,
  `phone_pwd` varchar(200) DEFAULT NULL,
  `Registered_Date` timestamp NULL DEFAULT current_timestamp(),
  `mini_trading_days` int(11) NOT NULL DEFAULT 0,
  `challenge_days` int(11) NOT NULL DEFAULT 0,
  `challenge_end_date` datetime DEFAULT NULL,
  `mini_trade_end_date` datetime DEFAULT NULL,
  `status` varchar(50) DEFAULT 'active',
  `reason` longtext CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `bonusDeposit` double(10,4) NOT NULL DEFAULT 0.0000,
  `wBonusDeposit` double(10,4) NOT NULL DEFAULT 0.0000,
  `ib1` varchar(100) DEFAULT NULL,
  `credit` varchar(250) DEFAULT NULL,
  `margin` varchar(250) DEFAULT NULL,
  `profit` varchar(250) DEFAULT NULL,
  `stored_orders` longtext CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `profile_image` varchar(250) DEFAULT NULL,
  `price_no_disc` decimal(10,2) DEFAULT 0.00,
  `algorithm_remark` text DEFAULT NULL,
  `prev_trade_id` varchar(100) DEFAULT NULL,
  `recentdata` int(11) NOT NULL DEFAULT 0,
  `resetReason` varchar(250) DEFAULT NULL,
  `emailSent` tinyint(4) DEFAULT NULL,
  `emailfailedReason` text DEFAULT NULL
) ENGINE=InnoDB AVG_ROW_LENGTH=164 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `propfirm_mt5_groups`
--

CREATE TABLE `propfirm_mt5_groups` (
  `mt5_group_id` int(11) NOT NULL,
  `mt5_group_name` varchar(255) NOT NULL,
  `mt5_group_type` enum('demo','live') NOT NULL DEFAULT 'demo',
  `mt5_group_desc` text NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `updated_by` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `propfirm_mt5_group_categories`
--

CREATE TABLE `propfirm_mt5_group_categories` (
  `mt5_grp_cat_id` int(11) NOT NULL,
  `mt5_grp_cat_name` varchar(255) NOT NULL,
  `mt5_grp_cat_type` varchar(100) NOT NULL,
  `mt5_grp_cat_desc` text DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_by` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `relationship_manager`
--

CREATE TABLE `relationship_manager` (
  `id` int(11) NOT NULL,
  `user_id` varchar(50) NOT NULL,
  `rm_id` varchar(50) NOT NULL,
  `created_by` int(11) DEFAULT 0,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `role_id` int(11) NOT NULL,
  `role_name` varchar(255) NOT NULL,
  `role_desc` text NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_by` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`role_id`, `role_name`, `role_desc`, `is_active`, `created_by`, `created_at`, `updated_at`) VALUES
(1, 'super admin', 'super admin', 1, 1, '2025-07-21 13:43:49', '2025-07-21 13:50:20'),
(13, 'test', 'test', 1, 1, '2025-11-20 11:36:21', '2025-11-20 11:36:21'),
(14, 'rr', 'rrr', 1, 1, '2025-11-20 11:53:59', '2025-11-20 11:53:59'),
(15, 'testss', 'sds', 1, 1, '2025-11-20 12:51:35', '2025-11-20 13:31:24'),
(16, 'dxb', 'dfdf', 0, 1, '2025-11-20 12:51:55', '2025-11-20 13:42:10'),
(17, 'dsf', 'sdf', 1, 1, '2025-11-20 13:42:24', '2025-11-20 13:42:38');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(4, 2);

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('lU9k6uxq7owBPPcVVI7sxM7Tm8HemZFNRYgmx8Rt', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:146.0) Gecko/20100101 Firefox/146.0', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoic28yQjlCTGZMbnhkQTRsTVd5dGU4VnNXTVJ0akJUWVRFRU9xbUtlSyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6NTE6Imh0dHA6Ly9sb2NhbGhvc3QvYWxsaW5vbmVyYWovcGlsb3Qvcm9sZV9wZXJtaXNzaW9ucyI7czo1OiJyb3V0ZSI7czoyMjoicGlsb3Qucm9sZV9wZXJtaXNzaW9ucyI7fXM6NTI6ImxvZ2luX3BpbG90XzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTt9', 1765441841),
('SEI4n0IbBMYJ0mrpM01ELHgq8HM8aBP5KEmttPzo', 3, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:146.0) Gecko/20100101 Firefox/146.0', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiamdlV2tPYnBzMTAwVUlSVGJycDBueUp2TzlFWUpJVHRWZFNsWlRydiI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6NDI6Imh0dHA6Ly9sb2NhbGhvc3QvYWxsaW5vbmVyYWovY3JlYXRlYWNjb3VudCI7czo1OiJyb3V0ZSI7czoyMDoiYnJva2VyLmNyZWF0ZWFjY291bnQiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aTozO30=', 1765441466);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `role_id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `usertype` int(11) NOT NULL DEFAULT 2,
  `status` int(11) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `role_id`, `email`, `usertype`, `status`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 1, 'admin@gmail.com', 1, 1, NULL, '$2y$12$Fk9GH6p.ma.Tqd.yYd9Uyu1FWMHAIvpxJ25HxeJ7pWZaf6wxX9GJu', 'zFYofY5ZDiKnNDv70TxsMdhbaTu7R5puDaVU6u2DQo3Zvj55ZYRpzkCkAFaH', '2025-11-07 06:34:08', '2025-11-07 06:34:08'),
(3, 'Forfx CRM', 0, 'stanisworks@gmail.com', 0, 0, NULL, '$2y$12$Fk9GH6p.ma.Tqd.yYd9Uyu1FWMHAIvpxJ25HxeJ7pWZaf6wxX9GJu', 'bnoNdEsoMffh3ngRMeLqA5lshdgtpkcTxaQqcVO4GjmQRizYBSLv7iA5V3oS', '2025-11-07 06:34:08', '2025-11-07 06:34:08');

-- --------------------------------------------------------

--
-- Table structure for table `users_logs`
--

CREATE TABLE `users_logs` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `admin_email` varchar(100) NOT NULL,
  `type` varchar(50) NOT NULL,
  `value` tinytext NOT NULL,
  `added_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_groups`
--

CREATE TABLE `user_groups` (
  `user_group_id` int(11) NOT NULL,
  `group_name` varchar(50) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_by` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL ON UPDATE current_timestamp(),
  `is_visible` int(11) DEFAULT 1,
  `group_code` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `bankwire` varchar(255) DEFAULT NULL,
  `bankwire_status` int(11) DEFAULT NULL,
  `agent_account` varchar(255) DEFAULT NULL,
  `agent_status` int(11) DEFAULT NULL,
  `now_payment_status` int(11) DEFAULT NULL,
  `now_payment_api` text DEFAULT NULL,
  `now_payment_security` text DEFAULT NULL,
  `crypto_payment_status` int(11) DEFAULT NULL,
  `crypto_payment_withdraw` int(11) DEFAULT NULL,
  `crypto_payment_api` text DEFAULT NULL,
  `crypto_payment_security` text DEFAULT NULL,
  `usdt_wallet_qr` text DEFAULT NULL,
  `usdt_wallet_id` varchar(255) DEFAULT NULL,
  `usdt_status` int(11) DEFAULT NULL,
  `payissa_wallet` varchar(255) DEFAULT NULL,
  `payissa_status` int(11) DEFAULT NULL,
  `bank_account_details` text DEFAULT NULL,
  `bank_deposit_status` int(11) DEFAULT NULL,
  `international_bank_account_details` text NOT NULL,
  `international_bank_status` int(11) NOT NULL,
  `paytiko_key` varchar(250) NOT NULL,
  `paytiko_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_groups`
--

INSERT INTO `user_groups` (`user_group_id`, `group_name`, `status`, `created_by`, `created_at`, `updated_at`, `is_visible`, `group_code`, `description`, `bankwire`, `bankwire_status`, `agent_account`, `agent_status`, `now_payment_status`, `now_payment_api`, `now_payment_security`, `crypto_payment_status`, `crypto_payment_withdraw`, `crypto_payment_api`, `crypto_payment_security`, `usdt_wallet_qr`, `usdt_wallet_id`, `usdt_status`, `payissa_wallet`, `payissa_status`, `bank_account_details`, `bank_deposit_status`, `international_bank_account_details`, `international_bank_status`, `paytiko_key`, `paytiko_status`) VALUES
(1, 'General', 1, NULL, '2025-07-08 10:57:08', '2025-08-28 09:49:33', 1, 'FORT1001', 'General', NULL, 0, NULL, 0, 1, '', '', 0, 0, NULL, NULL, NULL, NULL, 0, NULL, 0, '', 1, '', 1, '', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bonuses`
--
ALTER TABLE `bonuses`
  ADD PRIMARY KEY (`bonus_id`),
  ADD UNIQUE KEY `bonus_code` (`bonus_code`,`status`),
  ADD KEY `bonus_updated_by` (`bonus_updated_by`);

--
-- Indexes for table `broker_account_types`
--
ALTER TABLE `broker_account_types`
  ADD PRIMARY KEY (`ac_index`),
  ADD KEY `ac_type` (`ac_type`);

--
-- Indexes for table `broker_liveaccount`
--
ALTER TABLE `broker_liveaccount`
  ADD PRIMARY KEY (`id`),
  ADD KEY `broker_account_type` (`account_type`),
  ADD KEY `broker_liveaccount_ibfk_2` (`email`);

--
-- Indexes for table `broker_mt5_groups`
--
ALTER TABLE `broker_mt5_groups`
  ADD PRIMARY KEY (`mt5_group_id`);

--
-- Indexes for table `broker_mt5_group_categories`
--
ALTER TABLE `broker_mt5_group_categories`
  ADD PRIMARY KEY (`mt5_grp_cat_id`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`page_id`),
  ADD KEY `page_category_id` (`page_category_id`);

--
-- Indexes for table `page_categories`
--
ALTER TABLE `page_categories`
  ADD PRIMARY KEY (`page_category_id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `payment_logs`
--
ALTER TABLE `payment_logs`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rolde_id` (`role_id`);

--
-- Indexes for table `propfirm_account_types`
--
ALTER TABLE `propfirm_account_types`
  ADD PRIMARY KEY (`ac_index`),
  ADD KEY `ac_category` (`ac_category`),
  ADD KEY `account_types_ibfk_2` (`ac_book_type`),
  ADD KEY `level_id` (`level_id`),
  ADD KEY `ac_group` (`ac_group`),
  ADD KEY `ac_type` (`ac_type`);

--
-- Indexes for table `propfirm_add_ons`
--
ALTER TABLE `propfirm_add_ons`
  ADD PRIMARY KEY (`add_on_id`),
  ADD KEY `add_on_level` (`add_on_level`);

--
-- Indexes for table `propfirm_cart`
--
ALTER TABLE `propfirm_cart`
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `level_id` (`level_id`),
  ADD KEY `email` (`email`),
  ADD KEY `payment_log_id` (`payment_log_id`),
  ADD KEY `trade_id` (`trade_id`);

--
-- Indexes for table `propfirm_challenges_level`
--
ALTER TABLE `propfirm_challenges_level`
  ADD PRIMARY KEY (`level_id`);

--
-- Indexes for table `propfirm_liveaccount`
--
ALTER TABLE `propfirm_liveaccount`
  ADD PRIMARY KEY (`id`),
  ADD KEY `propfirm_trade_id` (`trade_id`),
  ADD KEY `propfirm_liveaccount_ibfk_1` (`email`),
  ADD KEY `propfirm_liveaccount_ibfk_2` (`account_type`),
  ADD KEY `propfirm_liveaccount_ibfk_3` (`account_group`);

--
-- Indexes for table `propfirm_mt5_groups`
--
ALTER TABLE `propfirm_mt5_groups`
  ADD PRIMARY KEY (`mt5_group_id`);

--
-- Indexes for table `propfirm_mt5_group_categories`
--
ALTER TABLE `propfirm_mt5_group_categories`
  ADD PRIMARY KEY (`mt5_grp_cat_id`);

--
-- Indexes for table `relationship_manager`
--
ALTER TABLE `relationship_manager`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `rm_id` (`rm_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `users_logs`
--
ALTER TABLE `users_logs`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `user_groups`
--
ALTER TABLE `user_groups`
  ADD UNIQUE KEY `user_group_id` (`user_group_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bonuses`
--
ALTER TABLE `bonuses`
  MODIFY `bonus_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `broker_account_types`
--
ALTER TABLE `broker_account_types`
  MODIFY `ac_index` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `broker_liveaccount`
--
ALTER TABLE `broker_liveaccount`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `broker_mt5_groups`
--
ALTER TABLE `broker_mt5_groups`
  MODIFY `mt5_group_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `broker_mt5_group_categories`
--
ALTER TABLE `broker_mt5_group_categories`
  MODIFY `mt5_grp_cat_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `page_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=158;

--
-- AUTO_INCREMENT for table `page_categories`
--
ALTER TABLE `page_categories`
  MODIFY `page_category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `payment_logs`
--
ALTER TABLE `payment_logs`
  MODIFY `payment_id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
MODIFY `id` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
AUTO_INCREMENT=2503;

--
-- AUTO_INCREMENT for table `propfirm_account_types`
--
ALTER TABLE `propfirm_account_types`
  MODIFY `ac_index` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `propfirm_add_ons`
--
ALTER TABLE `propfirm_add_ons`
  MODIFY `add_on_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `propfirm_cart`
--
ALTER TABLE `propfirm_cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `propfirm_challenges_level`
--
ALTER TABLE `propfirm_challenges_level`
  MODIFY `level_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `propfirm_liveaccount`
--
ALTER TABLE `propfirm_liveaccount`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `propfirm_mt5_groups`
--
ALTER TABLE `propfirm_mt5_groups`
  MODIFY `mt5_group_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `propfirm_mt5_group_categories`
--
ALTER TABLE `propfirm_mt5_group_categories`
  MODIFY `mt5_grp_cat_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `relationship_manager`
--
ALTER TABLE `relationship_manager`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `role_id`BIGINT(20) UNSIGNED  NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users_logs`
--
ALTER TABLE `users_logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_groups`
--
ALTER TABLE `user_groups`
  MODIFY `user_group_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bonuses`
--
ALTER TABLE `bonuses`
  ADD CONSTRAINT `bonuses_ibfk_1` FOREIGN KEY (`bonus_updated_by`) REFERENCES `users` (`email`);

--
-- Constraints for table `broker_liveaccount`
--
ALTER TABLE `broker_liveaccount`
  ADD CONSTRAINT `broker_liveaccount_ibfk_1` FOREIGN KEY (`account_type`) REFERENCES `broker_account_types` (`ac_index`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`role_id`) ON DELETE CASCADE;

--
-- Constraints for table `propfirm_account_types`
--
ALTER TABLE `propfirm_account_types`
  ADD CONSTRAINT `account_types_ibfk_1` FOREIGN KEY (`ac_category`) REFERENCES `propfirm_mt5_group_categories` (`mt5_grp_cat_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `account_types_ibfk_2` FOREIGN KEY (`ac_book_type`) REFERENCES `propfirm_mt5_group_categories` (`mt5_grp_cat_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `account_types_ibfk_3` FOREIGN KEY (`level_id`) REFERENCES `propfirm_challenges_level` (`level_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `account_types_ibfk_4` FOREIGN KEY (`ac_type`) REFERENCES `propfirm_mt5_groups` (`mt5_group_id`);

--
-- Constraints for table `propfirm_add_ons`
--
ALTER TABLE `propfirm_add_ons`
  ADD CONSTRAINT `add_ons_ibfk_1` FOREIGN KEY (`add_on_level`) REFERENCES `propfirm_challenges_level` (`level_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
