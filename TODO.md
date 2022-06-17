## TODO
Viết API ListAll, Get, Edit, Delete cho các bài đăng
- ListAll (Lấy tất cả các bài post trong bảng)
- Get (Lấy thông tin bài post theo id)
- Chỉnh sửa title, body của bài post theo id
- Xoá bài post khỏi database
## Flow 
routes(api) -> PostController -> PostService -> PostRepository
## How to run
- Tạo .env file có nội dung giống .env.example
- Tạo database example_app trong mysql
- Chạy compose i
- Chạy php artisan migrate
- Chạy php artisan serve
