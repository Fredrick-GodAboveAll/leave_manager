-- company_db_final.sql
/* 
Employee Management System Schema v3.1
Features:
- Department hierarchy support
- Enhanced security fields
- Comprehensive table relationships
- Improved data integrity
*/

-- Create database
CREATE DATABASE IF NOT EXISTS leave_db 
    CHARACTER SET utf8mb4 
    COLLATE utf8mb4_unicode_ci;
USE leave_db;

-- DEPARTMENT STRUCTURE WITH HIERARCHY --
CREATE TABLE departments (
    dept_id INT PRIMARY KEY AUTO_INCREMENT,
    department_title VARCHAR(50) NOT NULL COMMENT 'Official department name',
    parent_dept_id INT NULL COMMENT 'Hierarchical parent department',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    
    CONSTRAINT fk_parent_dept 
        FOREIGN KEY (parent_dept_id) 
        REFERENCES departments(dept_id)
        ON DELETE SET NULL
) ENGINE=InnoDB COMMENT='Supports nested organizational structure';

-- LEAVE STRUCTURE --
CREATE TABLE leave_categories (
    leave_id INT PRIMARY KEY AUTO_INCREMENT,
    leave_code VARCHAR(50) NOT NULL UNIQUE,
    leave_title VARCHAR(10) NOT NULL UNIQUE,
    gender ENUM('circle','man', 'woman') NOT NULL,
    max_days INT(10) NOT NULL,
    accrued VARCHAR(10) NOT NULL,
    year_starts DATE NOT NULL COMMENT 'financial year'
) ENGINE=InnoDB COMMENT='leave module';

-- JOB CLASSIFICATION WITH SRC SCALES --
CREATE TABLE job_groups (
    job_group_id INT PRIMARY KEY AUTO_INCREMENT,
    group_code VARCHAR(2) NOT NULL UNIQUE COMMENT 'SRC letter grade',
    group_name VARCHAR(50) NOT NULL,
    cluster VARCHAR(50) NOT NULL COMMENT 'Functional category',
    min_salary DECIMAL(10,2) NOT NULL,
    max_salary DECIMAL(10,2) NOT NULL,
    CHECK (max_salary > min_salary)
) ENGINE=InnoDB COMMENT='SRC standardized job grades';

-- FINANCIAL INSTITUTIONS STRUCTURE --
CREATE TABLE banks (
    bank_id INT PRIMARY KEY AUTO_INCREMENT,
    bank_name VARCHAR(100) NOT NULL UNIQUE,
    swift_code VARCHAR(15) NOT NULL UNIQUE
) ENGINE=InnoDB COMMENT='Bank institutions registry';

CREATE TABLE bank_branches (
    branch_id INT PRIMARY KEY AUTO_INCREMENT,
    bank_id INT NOT NULL,
    branch_name VARCHAR(100) NOT NULL,
    branch_code VARCHAR(20) NOT NULL,
    location VARCHAR(100),
    
    FOREIGN KEY (bank_id) 
        REFERENCES banks(bank_id)
        ON DELETE CASCADE,
    UNIQUE (bank_id, branch_code)
) ENGINE=InnoDB COMMENT='Bank branch details';

-- EMPLOYEE CORE TABLE --
CREATE TABLE employees (
    staff_no INT PRIMARY KEY COMMENT 'Unique employee identifier',
    name VARCHAR(100) NOT NULL,
    
    -- Security & Authentication --
    password VARCHAR(255) NOT NULL COMMENT 'BCrypt hashed password',
    kra_pin VARCHAR(20) NOT NULL UNIQUE COMMENT 'KRA tax identification',
    
    -- Employment Details --
    emp_date DATE NOT NULL COMMENT 'Date joined organization',
    termination_date DATE NULL COMMENT 'Employment end date',
    status ENUM('active', 'inactive') NOT NULL DEFAULT 'active',
    
    -- Compensation --
    basic_pay DECIMAL(10,2) NOT NULL CHECK (basic_pay > 0),
    gross_pay DECIMAL(10,2) NOT NULL CHECK (gross_pay >= basic_pay),
    net_pay DECIMAL(10,2) NOT NULL CHECK (net_pay < gross_pay),
    
    -- Personal Information --
    gender ENUM('Male','Female','Other') NOT NULL,
    date_of_birth DATE NOT NULL,
    
    -- Contact Information --
    email VARCHAR(100) UNIQUE,
    personal_email VARCHAR(100) UNIQUE,
    phone VARCHAR(20) NOT NULL,
    
    -- Government Identifiers --
    national_id VARCHAR(20) NOT NULL UNIQUE,
    nssf VARCHAR(20) NOT NULL,
    nhif VARCHAR(20) NOT NULL,

    -- Banking Information --
    bank_acc VARCHAR(30) NOT NULL COMMENT 'Account number',
    bank_branch_id INT NOT NULL,
    
    -- Organizational Structure --
    dept_id INT NOT NULL,
    leave_id INT NOT NULL,
    job_group_id INT NOT NULL,
    
    -- Constraints & Indexes --
    FOREIGN KEY (dept_id) REFERENCES departments(dept_id),
    FOREIGN KEY (leave_id) REFERENCES leave_categories(leave_id),
    FOREIGN KEY (job_group_id) REFERENCES job_groups(job_group_id),
    FOREIGN KEY (bank_branch_id) REFERENCES bank_branches(branch_id),
    
    INDEX idx_employee_name (name),
    INDEX idx_employment_status (status),
    INDEX idx_employment_dates (emp_date, termination_date),
    CHECK (date_of_birth < emp_date)
) ENGINE=InnoDB COMMENT='Main employee records';

-- SAMPLE DATA INSERTION --
INSERT INTO departments (department_title, parent_dept_id) VALUES
('Corporate Headquarters', NULL),
('Operations Division', 1),
('Human Resources Department', 2),
('Finance & Accounting', 2),
('Information Technology', 1);

INSERT INTO leave_categories (leave_id, leave_code, leave_title, gender, max_days, accrued, year_starts) VALUES

(1, 001,	'Annual Leave',  	    'circle',     30,	    'Yearly',	'2000-07-01'),
(2, 002,	'Paternity Leave',  	'man',        10,	    'Yearly',	'2000-07-01'),
(3, 003,	'Maternity Leave',  	'woman',      90,	    'Yearly',	'2000-07-01'),
(4, 004,	'Sick Leave',  		    'circle',     7,	    'Yearly',	'2000-07-01'),
(5, 005,	'Study Leave',  	    'circle',     90,	    'Yearly',	'2000-07-01'),
(6, 006,	'Compassionate Leave',  'circle',      0,	    'Yearly',	'2000-07-01');

-- SRC-COMPLIANT JOB GROUPS (2023 SCALES) --
INSERT INTO job_groups (group_code, group_name, cluster, min_salary, max_salary) VALUES
('A', 'Support Staff I', 'Support', 13000, 18000),
('B', 'Support Staff II', 'Support', 18001, 24000),
('C', 'Support Staff III', 'Support', 24001, 32000),
('D', 'Technician I', 'Technical', 32001, 42000),
('E', 'Technician II', 'Technical', 42001, 57000),
('F', 'Technician III', 'Technical', 57001, 78000),
('G', 'Supervisor I', 'Supervisory', 78001, 98000),
('H', 'Supervisor II', 'Supervisory', 98001, 125000),
('J', 'Assistant Manager', 'Management', 125001, 165000),
('K', 'Deputy Manager', 'Management', 165001, 215000),
('L', 'Manager', 'Management', 215001, 290000),
('M', 'Senior Manager', 'Executive', 290001, 400000),
('N', 'Director', 'Executive', 400001, 550000),
('P', 'Executive Director', 'Executive', 550001, 780000),
('Q', 'Chief Executive', 'Executive', 780001, 1200000);

INSERT INTO banks (bank_name, swift_code) VALUES
('Equity Bank Kenya', 'EQBLKENA'),
('Kenya Commercial Bank', 'KCBLKENX');

INSERT INTO bank_branches (bank_id, branch_name, branch_code, location) VALUES
(1, 'Nairobi CBD Main', 'EQ-001', 'Moi Avenue'),
(2, 'Mombasa West', 'KCB-501', 'Nyali Centre');


-- Updated INSERT statements with status field --
INSERT INTO employees (
    staff_no, name, password, kra_pin, 
    emp_date, status, basic_pay, gross_pay, net_pay,  -- Status added here
    gender, date_of_birth, email, phone,
    national_id, nssf, nhif, bank_acc,
    dept_id, leave_id, job_group_id, bank_branch_id
) VALUES (
    1001,
    'Jane Mwende',
    '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 
    'A0023456789K',
    '2020-03-15',
    'active',  -- Explicit status
    185000.00,
    250000.00,
    200000.00,
    'Female',
    '1985-08-22',
    'jane@company.com',
    '0711122334',
    '22334455',
    'NSSF-0987',
    'NHIF-7654',
    '1234567890',
    3,  -- HR Department
    1,  -- Nairobi
    10, -- Deputy Manager (K)
    1   -- Equity CBD Branch
),
(
    1002,
    'Mary Smith',
    '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
    'A0011223344K',
    '2018-09-01',
    'active',  -- Explicit status
    350000.00,
    480000.00,
    400000.00,
    'Female',
    '1980-05-15',
    'mary@company.com',
    '0733445566',
    '44556677',
    'NSSF-5566',
    'NHIF-7788',
    '1122334455',
    4,  -- Finance
    2,  -- Coastal
    13, -- Director (N)
    2   -- KCB Branch
);