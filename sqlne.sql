a. Truy vấn người dùng
1. Lấy ra danh sách người dùng theo thứ tự tên theo Alphabet (A->Z)
select*from users ORDER BY user_name ASC;
2. Lấy ra 07 người dùng theo thứ tự tên theo Alphabet (A->Z)
select*from users ORDER BY user_name ASC LIMITED 7;
3. Lấy ra danh sách người dùng theo thứ tự tên theo Alphabet (A->Z), trong đó tên 
người dùng có chữ a
select*from users where user_name like '%a%' order by user_name ASC;
4. Lấy ra danh sách người dùng trong đó tên người dùng bắt đầu bằng chữ m
select*from users where user_name like 'm%'
5. Lấy ra danh sách người dùng trong đó tên người dùng kết thúc bằng chữ i
select*from users where user_name like '%i'
6. Lấy ra danh sách người dùng trong đó email người dùng là Gmail (ví dụ: 
example@gmail.com)
SELECT*from users where user_email like '%gmail%';
7. Lấy ra danh sách người dùng trong đó email người dùng là Gmail (ví dụ: 
example@gmail.com), tên người dùng bắt đầu bằng chữ m
SELECT*from users where user_email like '%gmail%' and user_name like 'm%';
8. Lấy ra danh sách người dùng trong đó email người dùng là Gmail (ví dụ: 
example@gmail.com), tên người dùng có chữ i và tên người dùng có chiều dài lớn 
hơn 5
SELECT*from users where user_email like '%gmail%' and  user_name like '%i%' order by length(user_name) > 5;
9. Lấy ra danh sách người dùng trong đó tên người dùng có chữ a, chiều dài từ 5 đến 9, 
email dùng dịch vụ Gmail, trong tên email có chữ i
select*from users where user_name like '%a%' and user_email LIKE '%gmail%' and user_email LIKE '%i' ORDER by length(user_name) > 5 and length(user_name) < 9 ;
10. Lấy ra danh sách người dùng trong đó tên người dùng có chữ a, chiều dài từ 5 đến 
9 hoặc tên người dùng có chữ i, chiều dài nhỏ hơn 9 hoặc email dùng dịch vụ Gmail, 
trong tên email có chữ i
SELECT*from users where user_name like '%a%' or user_name like '%i%' or user_email like '%gmail%' and user_email like '%i%' order by length(user_name) < 9;