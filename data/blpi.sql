SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema blpi
-- -----------------------------------------------------
-- Beauty Lane Phil's Inc
CREATE SCHEMA IF NOT EXISTS `blpi` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `blpi` ;

-- -----------------------------------------------------
-- Table `blpi`.`Suppliers`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `blpi`.`Suppliers` ;

CREATE TABLE IF NOT EXISTS `blpi`.`Suppliers` (
  `supplier_id` INT NOT NULL AUTO_INCREMENT,
  `supplier_name` VARCHAR(100) NOT NULL,
  `record_status` VARCHAR(45) NOT NULL DEFAULT 'Active',
  PRIMARY KEY (`supplier_id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `blpi`.`Brands`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `blpi`.`Brands` ;

CREATE TABLE IF NOT EXISTS `blpi`.`Brands` (
  `brand_id` INT NOT NULL AUTO_INCREMENT,
  `brand_name` VARCHAR(45) NOT NULL,
  `record_status` VARCHAR(45) NOT NULL DEFAULT 'Active',
  PRIMARY KEY (`brand_id`))
ENGINE = InnoDB
COMMENT = 'supplier_status';


-- -----------------------------------------------------
-- Table `blpi`.`Classifications`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `blpi`.`Classifications` ;

CREATE TABLE IF NOT EXISTS `blpi`.`Classifications` (
  `classification_id` INT NOT NULL AUTO_INCREMENT,
  `classification_name` VARCHAR(45) NOT NULL,
  `classification_status` VARCHAR(45) NOT NULL DEFAULT 'Active',
  PRIMARY KEY (`classification_id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `blpi`.`Payment_Terms`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `blpi`.`Payment_Terms` ;

CREATE TABLE IF NOT EXISTS `blpi`.`Payment_Terms` (
  `payment_term_id` INT NOT NULL AUTO_INCREMENT,
  `payment_term_name` VARCHAR(45) NOT NULL,
  `record_status` VARCHAR(45) NULL DEFAULT 'Active',
  PRIMARY KEY (`payment_term_id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `blpi`.`Products`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `blpi`.`Products` ;

CREATE TABLE IF NOT EXISTS `blpi`.`Products` (
  `product_id` INT NOT NULL AUTO_INCREMENT,
  `product_code` VARCHAR(100) NOT NULL,
  `product_name` VARCHAR(100) NOT NULL,
  `product_description` VARCHAR(500) NULL,
  `classification_id` INT NOT NULL,
  `brand_id` INT NOT NULL,
  `supplier_id` INT NOT NULL,
  `size` VARCHAR(45) NULL,
  `weight` VARCHAR(45) NULL,
  `product_status` VARCHAR(45) NULL DEFAULT 'Active',
  `payment_term_id` INT NULL,
  `part_number` VARCHAR(45) NULL,
  `bl_code` VARCHAR(45) NULL,
  `printed_code` VARCHAR(45) NULL,
  PRIMARY KEY (`product_id`),
  UNIQUE INDEX `product_code_UNIQUE` (`product_code` ASC),
  INDEX `fk_Products_Suppliers_idx` (`supplier_id` ASC),
  INDEX `fk_Products_Brands1_idx` (`brand_id` ASC),
  INDEX `fk_Products_Classifications1_idx` (`classification_id` ASC),
  INDEX `fk_Products_Payment_Terms1_idx` (`payment_term_id` ASC),
  CONSTRAINT `fk_Products_Suppliers`
    FOREIGN KEY (`supplier_id`)
    REFERENCES `blpi`.`Suppliers` (`supplier_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Products_Brands1`
    FOREIGN KEY (`brand_id`)
    REFERENCES `blpi`.`Brands` (`brand_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Products_Classifications1`
    FOREIGN KEY (`classification_id`)
    REFERENCES `blpi`.`Classifications` (`classification_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Products_Payment_Terms1`
    FOREIGN KEY (`payment_term_id`)
    REFERENCES `blpi`.`Payment_Terms` (`payment_term_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `blpi`.`Categories`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `blpi`.`Categories` ;

CREATE TABLE IF NOT EXISTS `blpi`.`Categories` (
  `category_id` INT NOT NULL AUTO_INCREMENT,
  `category_type` VARCHAR(45) NOT NULL,
  `category_name` VARCHAR(45) NOT NULL,
  `record_status` VARCHAR(45) NOT NULL DEFAULT 'Active',
  PRIMARY KEY (`category_id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `blpi`.`Uoms`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `blpi`.`Uoms` ;

CREATE TABLE IF NOT EXISTS `blpi`.`Uoms` (
  `uom_id` INT NOT NULL AUTO_INCREMENT,
  `uom_name` VARCHAR(45) NOT NULL,
  `record_status` VARCHAR(45) NOT NULL DEFAULT 'Active',
  PRIMARY KEY (`uom_id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `blpi`.`Product_Categories`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `blpi`.`Product_Categories` ;

CREATE TABLE IF NOT EXISTS `blpi`.`Product_Categories` (
  `pc_id` INT NOT NULL AUTO_INCREMENT,
  `product_id` INT NOT NULL,
  `category_id` INT NOT NULL,
  `record_status` VARCHAR(45) NULL DEFAULT 'Active',
  PRIMARY KEY (`pc_id`),
  INDEX `fk_Product_Categories_Products1_idx` (`product_id` ASC),
  INDEX `fk_Product_Categories_Categories1_idx` (`category_id` ASC),
  CONSTRAINT `fk_Product_Categories_Products1`
    FOREIGN KEY (`product_id`)
    REFERENCES `blpi`.`Products` (`product_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Product_Categories_Categories1`
    FOREIGN KEY (`category_id`)
    REFERENCES `blpi`.`Categories` (`category_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `blpi`.`Product_Uoms`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `blpi`.`Product_Uoms` ;

CREATE TABLE IF NOT EXISTS `blpi`.`Product_Uoms` (
  `pu_id` INT NOT NULL AUTO_INCREMENT,
  `product_id` INT NOT NULL,
  `uom_id` INT NOT NULL,
  `record_status` VARCHAR(45) NULL DEFAULT 'Active',
  `quantity` FLOAT NULL,
  PRIMARY KEY (`pu_id`),
  INDEX `fk_Product_Uoms_Products1_idx` (`product_id` ASC),
  INDEX `fk_Product_Uoms_Uoms1_idx` (`uom_id` ASC),
  CONSTRAINT `fk_Product_Uoms_Products1`
    FOREIGN KEY (`product_id`)
    REFERENCES `blpi`.`Products` (`product_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Product_Uoms_Uoms1`
    FOREIGN KEY (`uom_id`)
    REFERENCES `blpi`.`Uoms` (`uom_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `blpi`.`Bundles`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `blpi`.`Bundles` ;

CREATE TABLE IF NOT EXISTS `blpi`.`Bundles` (
  `bundle_id` INT NOT NULL AUTO_INCREMENT,
  `parent_product_id` INT NOT NULL,
  `child_product_id` INT NOT NULL,
  `bundle_quantity` INT NOT NULL,
  `record_status` VARCHAR(45) NULL DEFAULT 'Active',
  PRIMARY KEY (`bundle_id`),
  INDEX `fk_Bundles_Products1_idx` (`parent_product_id` ASC),
  INDEX `fk_Bundles_Products2_idx` (`child_product_id` ASC),
  CONSTRAINT `fk_Bundles_Products1`
    FOREIGN KEY (`parent_product_id`)
    REFERENCES `blpi`.`Products` (`product_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Bundles_Products2`
    FOREIGN KEY (`child_product_id`)
    REFERENCES `blpi`.`Products` (`product_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `blpi`.`Price_Types`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `blpi`.`Price_Types` ;

CREATE TABLE IF NOT EXISTS `blpi`.`Price_Types` (
  `price_type_id` INT NOT NULL AUTO_INCREMENT,
  `price_type_name` VARCHAR(45) NOT NULL,
  `record_status` VARCHAR(45) NOT NULL DEFAULT 'Active',
  PRIMARY KEY (`price_type_id`),
  UNIQUE INDEX `price_type_name_UNIQUE` (`price_type_name` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `blpi`.`Currencies`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `blpi`.`Currencies` ;

CREATE TABLE IF NOT EXISTS `blpi`.`Currencies` (
  `currency_id` INT NOT NULL AUTO_INCREMENT,
  `currency_name` VARCHAR(45) NOT NULL,
  `record_status` VARCHAR(45) NULL DEFAULT 'Active',
  PRIMARY KEY (`currency_id`),
  UNIQUE INDEX `currency_name_UNIQUE` (`currency_name` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `blpi`.`Product_Price`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `blpi`.`Product_Price` ;

CREATE TABLE IF NOT EXISTS `blpi`.`Product_Price` (
  `pp_id` INT NOT NULL AUTO_INCREMENT,
  `price_type_id` INT NULL,
  `product_id` INT NULL,
  `price` FLOAT NULL,
  `currency_id` INT NULL,
  `record_status` VARCHAR(45) NULL DEFAULT 'Active',
  PRIMARY KEY (`pp_id`),
  INDEX `fk_Product_Price_Price_Types1_idx` (`price_type_id` ASC),
  INDEX `fk_Product_Price_Currencies1_idx` (`currency_id` ASC),
  INDEX `fk_Product_Price_Products1_idx` (`product_id` ASC),
  CONSTRAINT `fk_Product_Price_Price_Types1`
    FOREIGN KEY (`price_type_id`)
    REFERENCES `blpi`.`Price_Types` (`price_type_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Product_Price_Currencies1`
    FOREIGN KEY (`currency_id`)
    REFERENCES `blpi`.`Currencies` (`currency_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Product_Price_Products1`
    FOREIGN KEY (`product_id`)
    REFERENCES `blpi`.`Products` (`product_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `blpi`.`Customer_Types`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `blpi`.`Customer_Types` ;

CREATE TABLE IF NOT EXISTS `blpi`.`Customer_Types` (
  `customer_type_id` INT NOT NULL AUTO_INCREMENT,
  `customer_type_name` VARCHAR(45) NOT NULL,
  `record_status` VARCHAR(45) NULL DEFAULT 'Active',
  PRIMARY KEY (`customer_type_id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `blpi`.`Designations`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `blpi`.`Designations` ;

CREATE TABLE IF NOT EXISTS `blpi`.`Designations` (
  `designation_id` INT NOT NULL AUTO_INCREMENT,
  `designation_name` VARCHAR(250) NULL,
  `record_status` VARCHAR(45) NULL,
  PRIMARY KEY (`designation_id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `blpi`.`Users`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `blpi`.`Users` ;

CREATE TABLE IF NOT EXISTS `blpi`.`Users` (
  `user_id` INT NOT NULL AUTO_INCREMENT,
  `user_name` VARCHAR(45) NULL,
  `password` VARCHAR(45) NULL,
  `full_name` VARCHAR(45) NULL,
  `designation_id` INT NULL,
  `email` VARCHAR(45) NULL,
  `mobile` VARCHAR(45) NULL,
  `user_status` VARCHAR(45) NULL,
  PRIMARY KEY (`user_id`),
  INDEX `fk_Users_Designations1_idx` (`designation_id` ASC),
  CONSTRAINT `fk_Users_Designations1`
    FOREIGN KEY (`designation_id`)
    REFERENCES `blpi`.`Designations` (`designation_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `blpi`.`shipping_modes`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `blpi`.`shipping_modes` ;

CREATE TABLE IF NOT EXISTS `blpi`.`shipping_modes` (
  `shipping_mode_id` INT NOT NULL AUTO_INCREMENT,
  `shipping_mode_name` VARCHAR(45) NULL,
  `record_status` VARCHAR(45) NULL,
  PRIMARY KEY (`shipping_mode_id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `blpi`.`Customers`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `blpi`.`Customers` ;

CREATE TABLE IF NOT EXISTS `blpi`.`Customers` (
  `customer_id` INT NOT NULL AUTO_INCREMENT,
  `category_id` INT NULL,
  `customer_type_id` INT NULL,
  `company_name` VARCHAR(250) NULL,
  `branch` VARCHAR(250) NULL,
  `trade_name` VARCHAR(45) NULL,
  `tin` VARCHAR(45) NULL,
  `phone` VARCHAR(45) NULL,
  `email` VARCHAR(45) NULL,
  `website` VARCHAR(45) NULL,
  `sec_no` VARCHAR(45) NULL,
  `consignee` VARCHAR(45) NULL,
  `franchisee` VARCHAR(45) NULL,
  `credit_limit` FLOAT NULL,
  `transaction_limit` FLOAT NULL,
  `payment_term_id` INT NULL,
  `shipping_mode_id` INT NULL,
  `percent_commision` VARCHAR(45) NULL,
  `sales_executive` INT NULL,
  `price_type_id` INT NULL,
  `customer_status` VARCHAR(45) NULL,
  PRIMARY KEY (`customer_id`),
  INDEX `fk_Customers_Price_Types1_idx` (`price_type_id` ASC),
  INDEX `fk_Customers_Payment_Terms1_idx` (`payment_term_id` ASC),
  INDEX `fk_Customers_Categories1_idx` (`category_id` ASC),
  INDEX `fk_Customers_Customer_Types1_idx` (`customer_type_id` ASC),
  INDEX `fk_Customers_Users1_idx` (`sales_executive` ASC),
  INDEX `fk_Customers_shipping_modes1_idx` (`shipping_mode_id` ASC),
  CONSTRAINT `fk_Customers_Price_Types1`
    FOREIGN KEY (`price_type_id`)
    REFERENCES `blpi`.`Price_Types` (`price_type_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Customers_Payment_Terms1`
    FOREIGN KEY (`payment_term_id`)
    REFERENCES `blpi`.`Payment_Terms` (`payment_term_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Customers_Categories1`
    FOREIGN KEY (`category_id`)
    REFERENCES `blpi`.`Categories` (`category_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Customers_Customer_Types1`
    FOREIGN KEY (`customer_type_id`)
    REFERENCES `blpi`.`Customer_Types` (`customer_type_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Customers_Users1`
    FOREIGN KEY (`sales_executive`)
    REFERENCES `blpi`.`Users` (`user_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Customers_shipping_modes1`
    FOREIGN KEY (`shipping_mode_id`)
    REFERENCES `blpi`.`shipping_modes` (`shipping_mode_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `blpi`.`provinces`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `blpi`.`provinces` ;

CREATE TABLE IF NOT EXISTS `blpi`.`provinces` (
  `province_id` INT NOT NULL AUTO_INCREMENT,
  `province_name` VARCHAR(45) NULL,
  `country_id` INT NULL,
  `record_status` VARCHAR(45) NULL DEFAULT 'Active',
  PRIMARY KEY (`province_id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `blpi`.`cities`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `blpi`.`cities` ;

CREATE TABLE IF NOT EXISTS `blpi`.`cities` (
  `city_id` INT NOT NULL AUTO_INCREMENT,
  `city_name` VARCHAR(45) NULL,
  `province_id` INT NULL,
  `record_status` VARCHAR(45) NULL DEFAULT 'Active',
  PRIMARY KEY (`city_id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `blpi`.`Countries`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `blpi`.`Countries` ;

CREATE TABLE IF NOT EXISTS `blpi`.`Countries` (
  `country_id` INT NOT NULL AUTO_INCREMENT,
  `country_name` VARCHAR(45) NULL,
  `record_status` VARCHAR(45) NULL DEFAULT 'Active',
  PRIMARY KEY (`country_id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `blpi`.`Address`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `blpi`.`Address` ;

CREATE TABLE IF NOT EXISTS `blpi`.`Address` (
  `address_id` INT NOT NULL AUTO_INCREMENT,
  `customer_id` INT NULL,
  `address_type` VARCHAR(45) NULL,
  `street_landmark` VARCHAR(45) NULL,
  `city_id` INT NULL,
  `province_id` INT NULL,
  `country_id` INT NULL,
  `zipcode` VARCHAR(45) NULL,
  `record_status` VARCHAR(45) NULL DEFAULT 'Active',
  PRIMARY KEY (`address_id`),
  INDEX `fk_Address_provinces1_idx` (`province_id` ASC),
  INDEX `fk_Address_cities1_idx` (`city_id` ASC),
  INDEX `fk_Address_Countries1_idx` (`country_id` ASC),
  INDEX `fk_Address_Customers1_idx` (`customer_id` ASC),
  CONSTRAINT `fk_Address_provinces1`
    FOREIGN KEY (`province_id`)
    REFERENCES `blpi`.`provinces` (`province_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Address_cities1`
    FOREIGN KEY (`city_id`)
    REFERENCES `blpi`.`cities` (`city_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Address_Countries1`
    FOREIGN KEY (`country_id`)
    REFERENCES `blpi`.`Countries` (`country_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Address_Customers1`
    FOREIGN KEY (`customer_id`)
    REFERENCES `blpi`.`Customers` (`customer_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `blpi`.`Contacts`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `blpi`.`Contacts` ;

CREATE TABLE IF NOT EXISTS `blpi`.`Contacts` (
  `contact_id` INT NOT NULL AUTO_INCREMENT,
  `customer_id` INT NULL,
  `position` VARCHAR(45) NULL,
  `primary` VARCHAR(45) NULL,
  `full_name` VARCHAR(45) NULL,
  `email` VARCHAR(45) NULL,
  `phone` VARCHAR(45) NULL,
  `record_status` VARCHAR(45) NULL DEFAULT 'Active',
  PRIMARY KEY (`contact_id`),
  INDEX `fk_Contacts_Customers1_idx` (`customer_id` ASC),
  CONSTRAINT `fk_Contacts_Customers1`
    FOREIGN KEY (`customer_id`)
    REFERENCES `blpi`.`Customers` (`customer_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

-- -----------------------------------------------------
-- Data for table `blpi`.`Suppliers`
-- -----------------------------------------------------
START TRANSACTION;
USE `blpi`;
INSERT INTO `blpi`.`Suppliers` (`supplier_id`, `supplier_name`, `record_status`) VALUES (1, 'Sample Supplier 1', 'Active');
INSERT INTO `blpi`.`Suppliers` (`supplier_id`, `supplier_name`, `record_status`) VALUES (2, 'Sample Supplier 2', 'Active');

COMMIT;


-- -----------------------------------------------------
-- Data for table `blpi`.`Brands`
-- -----------------------------------------------------
START TRANSACTION;
USE `blpi`;
INSERT INTO `blpi`.`Brands` (`brand_id`, `brand_name`, `record_status`) VALUES (1, 'Sample Brand 1', 'Active');
INSERT INTO `blpi`.`Brands` (`brand_id`, `brand_name`, `record_status`) VALUES (2, 'Sample Brand 2', 'Active');

COMMIT;


-- -----------------------------------------------------
-- Data for table `blpi`.`Classifications`
-- -----------------------------------------------------
START TRANSACTION;
USE `blpi`;
INSERT INTO `blpi`.`Classifications` (`classification_id`, `classification_name`, `classification_status`) VALUES (1, 'Product', 'Active');
INSERT INTO `blpi`.`Classifications` (`classification_id`, `classification_name`, `classification_status`) VALUES (2, 'Marketing', 'Active');

COMMIT;


-- -----------------------------------------------------
-- Data for table `blpi`.`Payment_Terms`
-- -----------------------------------------------------
START TRANSACTION;
USE `blpi`;
INSERT INTO `blpi`.`Payment_Terms` (`payment_term_id`, `payment_term_name`, `record_status`) VALUES (1, 'Cash', 'Active');
INSERT INTO `blpi`.`Payment_Terms` (`payment_term_id`, `payment_term_name`, `record_status`) VALUES (2, '30 Days', 'Active');

COMMIT;


-- -----------------------------------------------------
-- Data for table `blpi`.`Products`
-- -----------------------------------------------------
START TRANSACTION;
USE `blpi`;
INSERT INTO `blpi`.`Products` (`product_id`, `product_code`, `product_name`, `product_description`, `classification_id`, `brand_id`, `supplier_id`, `size`, `weight`, `product_status`, `payment_term_id`, `part_number`, `bl_code`, `printed_code`) VALUES (1, '123', 'sample', 'sample', 1, 1, 1, '100', '100', NULL, NULL, NULL, NULL, NULL);

COMMIT;


-- -----------------------------------------------------
-- Data for table `blpi`.`Categories`
-- -----------------------------------------------------
START TRANSACTION;
USE `blpi`;
INSERT INTO `blpi`.`Categories` (`category_id`, `category_type`, `category_name`, `record_status`) VALUES (1, 'product', 'Product Category 1', 'Active');
INSERT INTO `blpi`.`Categories` (`category_id`, `category_type`, `category_name`, `record_status`) VALUES (2, 'product', 'Product Category 2', 'Active');
INSERT INTO `blpi`.`Categories` (`category_id`, `category_type`, `category_name`, `record_status`) VALUES (3, 'customer', 'Customer Category 1', 'Active');
INSERT INTO `blpi`.`Categories` (`category_id`, `category_type`, `category_name`, `record_status`) VALUES (4, 'customer', 'Customer Category 2', 'Active');

COMMIT;


-- -----------------------------------------------------
-- Data for table `blpi`.`Uoms`
-- -----------------------------------------------------
START TRANSACTION;
USE `blpi`;
INSERT INTO `blpi`.`Uoms` (`uom_id`, `uom_name`, `record_status`) VALUES (1, 'piece', 'Active');
INSERT INTO `blpi`.`Uoms` (`uom_id`, `uom_name`, `record_status`) VALUES (2, 'box', 'Active');

COMMIT;


-- -----------------------------------------------------
-- Data for table `blpi`.`Designations`
-- -----------------------------------------------------
START TRANSACTION;
USE `blpi`;
INSERT INTO `blpi`.`Designations` (`designation_id`, `designation_name`, `record_status`) VALUES (1, 'Developer', 'Active');

COMMIT;


-- -----------------------------------------------------
-- Data for table `blpi`.`Users`
-- -----------------------------------------------------
START TRANSACTION;
USE `blpi`;
INSERT INTO `blpi`.`Users` (`user_id`, `user_name`, `password`, `full_name`, `designation_id`, `email`, `mobile`, `user_status`) VALUES (1, 'chito', 'chito', 'chito cascante', 1, 'chito@yahoo.com', '9297700514', 'Active');

COMMIT;

