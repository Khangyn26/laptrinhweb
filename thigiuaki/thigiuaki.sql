Thi giữa kì

Ngô Nhật Khang
22001963
22CTMĐT01
Thời gian: HTML, CSS: 30p
			SQL : 60p
			Tạo Branch: 1 điểm
Đề 3:
a. Truy vấn người dùng

3. Lấy ra danh sách khách hàng theo thứ tự tên theo Alphabet (Z->A), trong đó Tên
khách hàng có chữ a hoặc bắt đầu bằng chữ m, trong đó Email phải là dịch vụ của
Yahoo (example@yahoo.com). Thông tin hiển thị gồm: Mã khách hàng, Tên
khách hàng, Email.

SELECT 
	user_id as' Mã khách hàng', user_name as'Tên khách hàng',  user_email as'Email'
FROM
	users
where 
	(user_name LIKE '%a%' or user_name like 'm%')
	and user_email like '%@yahoo.com'
order by user_name desc

b. Truy vấn đơn hàng

3. Liệt kê danh sách mua hàng của user bao gồm giá tiền của mỗi đơn hàng, thông tin
hiển thị gồm: mã user, tên user, mã đơn hàng, tổng tiền. Mỗi user chỉ chọn ra 1 đơn
hàng 

SELECT u.user_id, u.user_name, o.order_id as'mã đơn hàng', product_price*order_detail_id as 'tổng tiền'
from users u join orders o on u.user_id = o.user_id
			join order_details d on d.order_id = o.order_id
			join products p on p.product_id = d.product_id
group by user_id
order by 'tổng tiền' desc






