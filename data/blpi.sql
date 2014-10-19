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
  `supplier_status` VARCHAR(45) NOT NULL DEFAULT 'Active',
  PRIMARY KEY (`supplier_id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `blpi`.`Brands`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `blpi`.`Brands` ;

CREATE TABLE IF NOT EXISTS `blpi`.`Brands` (
  `brand_id` INT NOT NULL AUTO_INCREMENT,
  `brand_name` VARCHAR(45) NOT NULL,
  `brand_status` VARCHAR(45) NOT NULL DEFAULT 'Active',
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
  `payment_term_status` VARCHAR(45) NULL DEFAULT 'Active',
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
  `category_status` VARCHAR(45) NOT NULL DEFAULT 'Active',
  PRIMARY KEY (`category_id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `blpi`.`Uoms`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `blpi`.`Uoms` ;

CREATE TABLE IF NOT EXISTS `blpi`.`Uoms` (
  `uom_id` INT NOT NULL AUTO_INCREMENT,
  `uom_name` VARCHAR(45) NOT NULL,
  `uom_status` VARCHAR(45) NOT NULL DEFAULT 'Active',
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
  `price_type_status` VARCHAR(45) NOT NULL DEFAULT 'Active',
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
  `currency_status` VARCHAR(45) NULL DEFAULT 'Active',
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


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

-- -----------------------------------------------------
-- Data for table `blpi`.`Suppliers`
-- -----------------------------------------------------
START TRANSACTION;
USE `blpi`;
INSERT INTO `blpi`.`Suppliers` (`supplier_id`, `supplier_name`, `supplier_status`) VALUES (1, 'Sample Supplier 1', 'Active');
INSERT INTO `blpi`.`Suppliers` (`supplier_id`, `supplier_name`, `supplier_status`) VALUES (2, 'Sample Supplier 2', 'Active');

COMMIT;


-- -----------------------------------------------------
-- Data for table `blpi`.`Brands`
-- -----------------------------------------------------
START TRANSACTION;
USE `blpi`;
INSERT INTO `blpi`.`Brands` (`brand_id`, `brand_name`, `brand_status`) VALUES (1, 'Sample Brand 1', 'Active');
INSERT INTO `blpi`.`Brands` (`brand_id`, `brand_name`, `brand_status`) VALUES (2, 'Sample Brand 2', 'Active');

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
INSERT INTO `blpi`.`Payment_Terms` (`payment_term_id`, `payment_term_name`, `payment_term_status`) VALUES (1, 'Cash', 'Active');

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
INSERT INTO `blpi`.`Categories` (`category_id`, `category_type`, `category_name`, `category_status`) VALUES (1, 'product', 'Product Category 1', 'Active');
INSERT INTO `blpi`.`Categories` (`category_id`, `category_type`, `category_name`, `category_status`) VALUES (2, 'product', 'Product Category 2', 'Active');
INSERT INTO `blpi`.`Categories` (`category_id`, `category_type`, `category_name`, `category_status`) VALUES (3, 'customer', 'Customer Category 1', 'Active');

COMMIT;


-- -----------------------------------------------------
-- Data for table `blpi`.`Uoms`
-- -----------------------------------------------------
START TRANSACTION;
USE `blpi`;
INSERT INTO `blpi`.`Uoms` (`uom_id`, `uom_name`, `uom_status`) VALUES (1, 'piece', 'Active');
INSERT INTO `blpi`.`Uoms` (`uom_id`, `uom_name`, `uom_status`) VALUES (2, 'box', 'Active');

COMMIT;

