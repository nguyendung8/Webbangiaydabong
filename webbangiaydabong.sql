

TABLE `vp_categories` (
  `cate_id` bigint(20) UNSIGNED NOT NULL,
  `cate_name` varchar(255) NOT NULL,
  `cate_slug` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
)

-- --------------------------------------------------------

--
-- Table structure for table `vp_comments`
--

TABLE `vp_comments` (
  `com_id` bigint(20) UNSIGNED NOT NULL,
  `com_email` varchar(255) NOT NULL,
  `com_name` varchar(255) NOT NULL,
  `com_content` varchar(255) NOT NULL,
  `com_status` int(11) NOT NULL DEFAULT 0,
  `com_product` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
)

--
-- Table structure for table `vp_customer_cares`
--

TABLE `vp_customer_cares` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sender_id` bigint(20) UNSIGNED NOT NULL,
  `receiver_id` bigint(20) NOT NULL,
  `is_read` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
)

--
-- Table structure for table `vp_favourite_products`
--

TABLE `vp_favourite_products` (
  `favourite_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `favou_product` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
)

--
-- Table structure for table `vp_orders`
--

TABLE `vp_orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `total_price` varchar(255) NOT NULL,
  `total_products` varchar(255) NOT NULL,
  `placed_order_date` varchar(255) NOT NULL,
  `order_status` varchar(255) NOT NULL DEFAULT 'Chờ xác nhận',
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
)


--
-- Table structure for table `vp_products`
--

TABLE `vp_products` (
  `prod_id` bigint(20) UNSIGNED NOT NULL,
  `prod_name` varchar(255) NOT NULL,
  `prod_slug` varchar(255) NOT NULL,
  `prod_price` bigint(50) NOT NULL,
  `prod_img` varchar(255) NOT NULL,
  `prod_condition` varchar(255) NOT NULL,
  `prod_status` tinyint(4) NOT NULL,
  `prod_description` text NOT NULL,
  `prod_featured` tinyint(4) NOT NULL,
  `prod_cate` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
)

-- --------------------------------------------------------

--
-- Table structure for table `vp_users`
--

TABLE `vp_users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
)
