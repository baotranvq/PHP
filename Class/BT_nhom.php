<?php
    class library_book{
        private $id_book;
        private $location;
        private $date;
        private $quantity;

        public function library_book($id_book,$location,$date,$quantity){
            $this -> id_book = $id_book;
            $this -> location = $location;
            $this -> date = $date;
            $this -> quantity =$quantity;
        }
        public function display(){
            return
            "Ma " .$this->id_book."<br>".
            "Vi Tri " .$this->location."<br>".
            "Date " .$this->date."<br>".
            "Ma " .$this->quantity."<br>";
        }
    }
    class Author{
        private $tentacgia;
        private $gioitinh;
        private $ngaysinh;
        private $diachi;

        public function Author($tentacgia,$gioitinh,$ngaysinh,$diachi){
            $this->tentacgia=$tentacgia;
            $this->gioitinh=$gioitinh;
            $this->ngaysinh=$ngaysinh;
            $this->diachi=$diachi;
        }
        public function Display_Author()
        {
            return
                "Tên tác giả".$this->tentacgia."<br>".
                "Giới tính".$this->gioitinh."<br>".
                "Ngày sinh".$this->ngaysinh."<br>".
                "Địa chỉ".$this->diachi."<br>";
        }
    }

    class Category{
        private $id_category;
        private $name_category;
        private $des_category;

        public function Category($id_category,$name_category,$des_category){
            $this->id_category=$id_category;
            $this->name_category=$name_category;
            $this->des_category=$des_category;
        }

        public function Display_Category(){
            return 
                "Mã chuyên mục ".$this->id_category. "<br>".
                "Tên chuyên mục ".$this->name_category."<br>".
                "Mô tả ".$this->des_category."<br>";
        }
    }

    class Book{
        private $isbn;
        private $title;
        private $pub;
        private $year;
        private $price;

        public function Book($isbn,$title,$pub,$year,$price){
            $this->isbn=$isbn;
            $this->title=$title;
            $this->pub=$pub;
            $this->year=$year;
            $this->price=$price;
        }

        public function Display_Book(){
            return 
                "Số isbn: ".$this->isbn."<br>".
                "Tiêu đề sách: ".$this->title."<br>".
                "Nhà xuất bản: ".$this->pub."<br>".
                "Năm xuất bản: ".$this->year."<br>".
                "Giá: ".$this->price."<br>";
        }
    }

    class Loan {
        private $ID;
        private $Date;
        private $Num;
    
        public function Student($ID,$Date,$Num){
            $this->ID=$ID;
            $this->Date=$Date;
            $this->Num=$Num;
           
        }
    
        public function DisplayLoan_BookInfo()
        {
        return
                "ID Loan".$this->ID."<br>".
                "Ngày mượn".$this->Date."<br>".
                "Số lượng cuốn mượn".$this->Num."<br>";   
        }
    }

?>