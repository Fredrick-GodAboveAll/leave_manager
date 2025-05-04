-- 1. Create Database
CREATE DATABASE IF NOT EXISTS leave_management CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE leave_management;

-- 2. Employees Table
CREATE TABLE IF NOT EXISTS employees (
employee_id INT AUTO_INCREMENT PRIMARY KEY,
personal_number VARCHAR(50) NOT NULL UNIQUE,
first_name VARCHAR(100) NOT NULL,
last_name VARCHAR(100) NOT NULL,
gender ENUM('Male', 'Female') NOT NULL,
email VARCHAR(100),
phone VARCHAR(20),
hire_date DATE NOT NULL
);

-- 3. Leave Categories Table
CREATE TABLE IF NOT EXISTS leave_categories (
category_id INT AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(100) NOT NULL UNIQUE,
leave_code VARCHAR(50) NOT NULL UNIQUE,
gender ENUM('circle','man', 'woman') NOT NULL,
default_days INT NOT NULL,
accrued VARCHAR(10) NOT NULL,
year_starts DATE NOT NULL COMMENT 'financial year'
);

-- 4. Government Holidays Table (updated as per your UI)
CREATE TABLE IF NOT EXISTS holidays (
holiday_id INT AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(100) NOT NULL,
holiday_date DATE NOT NULL,
is_recurring TINYINT(1) DEFAULT 1, -- 1 = repeats every year
UNIQUE (holiday_date, name)
);

-- 5. Leave Entitlements Table
CREATE TABLE IF NOT EXISTS leave_entitlements (
entitlement_id INT AUTO_INCREMENT PRIMARY KEY,
gender ENUM('Male', 'Female') NOT NULL,
category_id INT NOT NULL,
entitled_days INT NOT NULL,
FOREIGN KEY (category_id) REFERENCES leave_categories(category_id)
);

-- 6. Leave Applications Table
CREATE TABLE IF NOT EXISTS leave_applications (
leave_id INT AUTO_INCREMENT PRIMARY KEY,
employee_id INT NOT NULL,
category_id INT NOT NULL,
start_date DATE NOT NULL,
end_date DATE NOT NULL,
days_applied INT NOT NULL,
status ENUM('Pending', 'Approved', 'Rejected') DEFAULT 'Pending',
date_applied TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
FOREIGN KEY (employee_id) REFERENCES employees(employee_id),
FOREIGN KEY (category_id) REFERENCES leave_categories(category_id)
);

-- 7. Insert Leave Categories
INSERT INTO leave_categories (name, leave_code, gender, default_days, accrued, year_starts ) VALUES
('Annual Leave',        101,  	'circle',     30,	    'Yearly',	'2000-07-01'),
('Paternity Leave',     302,  	'man',        10,	    'Yearly',	'2000-07-01'),
('Maternity Leave',     603,  	'woman',      90,	    'Yearly',	'2000-07-01'),
('Sick Leave',          904,    'circle',     7,	    'Yearly',	'2000-07-01'),
('Study Leave',         015,  	'circle',     0,	    'Yearly',	'2000-07-01'),
('Compassionate Leave', 706,    'circle',      0,	    'Yearly',	'2000-07-01')
ON DUPLICATE KEY UPDATE name = name;


-- 8. Insert Government Holidays (as per your screenshot)
INSERT INTO holidays (name, holiday_date, is_recurring) VALUES
('Boxing Day', '2022-12-26', 1),
('Christmas Day', '2022-12-25', 1),
('Easter Monday', '2025-04-21', 1),
('Easter Sunday', '2025-04-20', 1),
('Eid al-Adha', '2025-06-07', 1),
('Good Friday', '2025-04-18', 1),
('Idd-Ul-Fitri', '2025-03-31', 1),
('Jamhuri Day', '2022-12-12', 1),
('Labour Day', '2022-05-01', 1),
('Madaraka Day', '2022-06-01', 1),
('Mashujaa Day', '2022-10-20', 1),
('Mazingira Day', '2022-10-10', 1),
('New Year', '2022-01-01', 1)
ON DUPLICATE KEY UPDATE holiday_date = VALUES(holiday_date), is_recurring = VALUES(is_recurring);

-- 9. Insert Leave Entitlements
INSERT INTO leave_entitlements (gender, category_id, entitled_days) VALUES
('Male', 1, 30),
('Male', 2, 10),
('Female', 1, 30),
('Female', 3, 90)
ON DUPLICATE KEY UPDATE entitled_days = VALUES(entitled_days);

-- 10. Insert Sample Employees
INSERT INTO employees (personal_number, first_name, last_name, gender, email, phone, hire_date) VALUES
('EMP001', 'Alice', 'Wanjiku', 'Female', 'alice@example.com', '0711000000', '2023-07-01'),
('EMP002', 'Brian', 'Otieno', 'Male', 'brian@example.com', '0722000000', '2022-11-15')
ON DUPLICATE KEY UPDATE personal_number = personal_number;