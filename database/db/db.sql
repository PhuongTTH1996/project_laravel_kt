CREATE TABLE `products` (
  `id` int(10) NOT NULL,
  `id_user` int(11) NOT NULL,
  `str_ten` varchar(255) NOT NULL,
  `image` varchar(80) NOT NULL,
  `type_group` int(11) NOT NULL,
  `type_customer` int(11) NOT NULL,
  `type_code` text NOT NULL,
  `type_amount` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `id_user`, `str_ten`, `image`, `type_group`, `type_customer`, `type_code`, `type_amount`, `status`, `created_at`, `updated_at`) VALUES
(3, 3, 'Điện thoại Samsung Galaxy A02', '1621748874-A02.PNG', 1, 2, 'SA02', 2090000, 2, '2021-05-22 22:47:54', '2021-05-22 22:47:54'),
(4, 4, 'Samsung Galaxy S21', '1621693398-samsung-galaxy-s21.PNG', 1, 2, 'S123', 18990000, 1, '2021-05-22 03:09:17', '2021-05-22 03:09:17'),
(5, 5, 'Samsung Galaxy S21', '1621693398-samsung-galaxy-s21.PNG', 1, 2, 'S123', 18990000, 2, '2021-05-22 08:02:17', '2021-05-22 08:02:17'),
(6, 1, 'Điện thoại iPhone 12 64GB', '1621748704-ihone.PNG', 1, 1, 'I123', 18990000, 1, '2021-05-22 22:45:04', '2021-05-22 22:45:04'),
(7, 1, 'Điện thoại OPPO A93', '1621748788-oppo.PNG', 1, 3, 'O1231', 5990000, 1, '2021-05-22 22:46:28', '2021-05-22 22:46:28'),
(8, 8, 'Laptop Apple Macbook Pro M1 2020', '1621749267-macbook.PNG', 2, 4, 'M123', 52490000, 1, '2021-05-22 22:58:55', '2021-05-22 22:58:55'),
(9, 9, 'Laptop Asus ZenBook Duo UX482EG i5', '1621749501-zenbook2.PNG', 2, 5, 'A123', 33990000, 1, '2021-05-22 22:59:07', '2021-05-22 22:59:07');

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`,`created_at`, `updated_at`) VALUES
(1, 'hoai phuong', 'admin@gmail.com', '$2y$10$1lV4nCq4pGqYWFCppfs8xOEnH8ZWO7DMe8QCoKOoWHDRHkvwrf8By',  '2021-01-31 05:01:15', '2021-01-31 05:01:15'),
(2, 'hoai phuong 2', 'admin2@gmail.com', '$2y$10$1lV4nCq4pGqYWFCppfs8xOEnH8ZWO7DMe8QCoKOoWHDRHkvwrf8By', '2021-01-31 05:01:15', '2021-01-31 05:01:15'),
(3, 'hoai phuong 3', 'admin3@gmail.com', '$2y$10$1lV4nCq4pGqYWFCppfs8xOEnH8ZWO7DMe8QCoKOoWHDRHkvwrf8By', '2021-01-31 05:01:15', '2021-01-31 05:01:15'),
(4, 'Hoài Phương', 'admin4@gmail.com', '$2y$10$DX8K3xFsEuq0PIEsOpxFVOK.XesdaOEW4IC4Bl6Xd5BwH07wnGQwG', '2021-05-22 06:09:56', '2021-05-22 06:09:56');
--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
