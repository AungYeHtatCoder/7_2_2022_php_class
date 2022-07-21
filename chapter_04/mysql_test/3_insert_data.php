<?php  
$link = mysqli_connect("localhost", "root", "", "my_lesson_db");
$sql = "INSERT INTO users (name, email, phone, message) VALUES ('John', 'doe', '123456789', 'Lorem ipsum dolor sit amet'),
('Jane', 'doe', '123456789', 'Lorem ipsum dolor sit amet'),
('John', 'doe', '123456789', 'Lorem ipsum dolor sit amet'),
('Jane', 'doe', '123456789', 'Lorem ipsum dolor sit amet'),
('John', 'doe', '123456789', 'Lorem ipsum dolor sit amet'),
('Jane', 'doe', '123456789', 'Lorem ipsum dolor sit amet'),
('John', 'doe', '123456789', 'Lorem ipsum dolor sit amet'),
('Jane', 'doe', '123456789', 'Lorem ipsum dolor sit amet'),
('John', 'doe', '123456789', 'Lorem ipsum dolor sit amet'),
('Jane', 'doe', '123456789', 'Lorem ipsum dolor sit amet'),
('John', 'doe', '123456789', 'Lorem ipsum dolor sit amet'),
('Jane', 'doe', '123456789', 'Lorem ipsum dolor sit amet'),
('John', 'doe', '123456789', 'Lorem ipsum dolor sit amet'),
('Jane', 'doe', '123456789', 'Lorem ipsum dolor sit amet'),
('John', 'doe', '123456789', 'Lorem ipsum dolor sit amet'),
('Jane', 'doe', '123456789', 'Lorem ipsum dolor sit amet'),
('John', 'doe', '123456789', 'Lorem ipsum dolor sit amet'),
('Jane', 'doe', '123456789', 'Lorem ipsum dolor sit amet'),
('John', 'doe', '123456789', 'Lorem ipsum dolor sit amet'),
('Jane', 'doe', '123456789', 'Lorem ipsum dolor sit amet')";

if(mysqli_query($link, $sql)){
    echo "Data inserted successfully";
} else {
    echo "Error inserting data: " . mysqli_error($link);
}