lang: 1(VN) 2(EN)

Giới thiệu	http://103.98.152.37:5010/api/data/introduces/?lang=1

Đvị trực thuộc	http://103.98.152.37:5010/api/data/affiliatedUnits/?lang=1

Lĩnh vực hđ		
List	http://103.98.152.37:5010/api/data/operations/?lang=1&page=1&pageSize=4
Chi tiết	http://103.98.152.37:5010/api/data/operations/detail/?lang=1&id=4

Dự án		
List	http://103.98.152.37:5010/api/data/projects/?lang=1&page=1&pageSize=4
Chi tiết	http://103.98.152.37:5010/api/data/project/detail/?lang=1&id=3

Quan hệ cổ đông	http://103.98.152.37:5010/api/data/stakeholders/?lang=2&page=1&pageSize=4

Tin tức sự kiện		
List	http://103.98.152.37:5010/api/data/news/?lang=1&page=1&pageSize=4
Chi tiết	http://103.98.152.37:5010/api/data/news/detail/?lang=1&id=2

Tin tuyển dụng		
List	http://103.98.152.37:5010/api/data/recruitments/?lang=2&page=1&pageSize=4
Chi tiết	http://103.98.152.37:5010/api/data/recruitments/detail/?lang=2&id=4

Liên hệ	http://103.98.152.37:5010/api/data/contact/?lang=2

Đối tác	http://103.98.152.37:5010/api/data/partners	

Quan hệ cổ đông		categoryCode lấy theo List Category
List cổ đông theo category	http://localhost:5010/api/data/stakeholders/?categoryCode=bao-cao-tai-chinh&lang=1&page=1&pageSize=10
Chi tiết	http://localhost:5010/api/data/stakeholder/detail/?id=7&lang=1
List Category	http://localhost:5010/api/data/StakeholderCategories/

Trang chủ	http://localhost:5010/api/data/homepage/?lang=1

api lấy thông tin trang chủ nhé a @Phan

còn chỗ nội dung điền liên hệ

http://localhost:5010/api/data/contactInfo

{
"title": "Header2",
"email": "john.doe@example.com",
"name": "John Doe",
"phone": "123",
"content": "AAA"
}

