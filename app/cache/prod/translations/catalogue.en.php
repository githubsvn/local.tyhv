<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('en', array (
  'validators' => 
  array (
    'This value should be false.' => 'This value should be false.',
    'This value should be true.' => 'This value should be true.',
    'This value should be of type {{ type }}.' => 'This value should be of type {{ type }}.',
    'This value should be blank.' => 'This value should be blank.',
    'The value you selected is not a valid choice.' => 'The value you selected is not a valid choice.',
    'You must select at least {{ limit }} choices.' => 'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.',
    'You must select at most {{ limit }} choices.' => 'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.',
    'One or more of the given values is invalid.' => 'One or more of the given values is invalid.',
    'The fields {{ fields }} were not expected.' => 'The fields {{ fields }} were not expected.',
    'The fields {{ fields }} are missing.' => 'The fields {{ fields }} are missing.',
    'This value is not a valid date.' => 'This value is not a valid date.',
    'This value is not a valid datetime.' => 'This value is not a valid datetime.',
    'This value is not a valid email address.' => 'This value is not a valid email address.',
    'The file could not be found.' => 'The file could not be found.',
    'The file is not readable.' => 'The file is not readable.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.',
    'This value should be {{ limit }} or less.' => 'This value should be {{ limit }} or less.',
    'This value is too long. It should have {{ limit }} characters or less.' => 'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.',
    'This value should be {{ limit }} or more.' => 'This value should be {{ limit }} or more.',
    'This value is too short. It should have {{ limit }} characters or more.' => 'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.',
    'This value should not be blank.' => 'This value should not be blank.',
    'This value should not be null.' => 'This value should not be null.',
    'This value should be null.' => 'This value should be null.',
    'This value is not valid.' => 'This value is not valid.',
    'This value is not a valid time.' => 'This value is not a valid time.',
    'This value is not a valid URL.' => 'This value is not a valid URL.',
    'The two values should be equal.' => 'The two values should be equal.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'The file is too large.',
    'The file could not be uploaded.' => 'The file could not be uploaded.',
    'This value should be a valid number.' => 'This value should be a valid number.',
    'This file is not a valid image.' => 'This file is not a valid image.',
    'This is not a valid IP address.' => 'This is not a valid IP address.',
    'This value is not a valid language.' => 'This value is not a valid language.',
    'This value is not a valid locale.' => 'This value is not a valid locale.',
    'This value is not a valid country.' => 'This value is not a valid country.',
    'This value is already used.' => 'This value is already used.',
    'The size of the image could not be detected.' => 'The size of the image could not be detected.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.',
    'This value should be the user current password.' => 'This value should be the user current password.',
    'This value should have exactly {{ limit }} characters.' => 'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.',
    'The file was only partially uploaded.' => 'The file was only partially uploaded.',
    'No file was uploaded.' => 'No file was uploaded.',
    'No temporary folder was configured in php.ini.' => 'No temporary folder was configured in php.ini.',
    'Cannot write temporary file to disk.' => 'Cannot write temporary file to disk.',
    'A PHP extension caused the upload to fail.' => 'A PHP extension caused the upload to fail.',
    'This collection should contain {{ limit }} elements or more.' => 'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.',
    'This collection should contain {{ limit }} elements or less.' => 'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.',
    'This collection should contain exactly {{ limit }} elements.' => 'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.',
    'This form should not contain extra fields.' => 'This form should not contain extra fields.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'The uploaded file was too large. Please try to upload a smaller file.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'The CSRF token is invalid. Please try to resubmit the form.',
  ),
  'SMFrontBundle' => 
  array (
    'News' => 'News title',
  ),
));

$catalogueVi = new MessageCatalogue('vi', array (
  'SMAdminBundle' => 
  array (
    'Welcome' => 'Admin Panel',
    'Profile' => 'Thông Tin Tài Khoản',
    'Sign Out' => 'Đăng Xuất',
    'System' => 'Hệ Thống',
    'Add new' => 'Thêm Mới',
    'List' => 'Danh Sách',
    'Edit' => 'Chỉnh Sửa',
    'Delete all' => 'Xóa tất cả',
    'Top' => 'Phía trên',
    'Left' => 'Bên trái',
    'Right' => 'Bên phải',
    'Bottom' => 'Phía dưới',
    'Do you want to delete' => 'Bạn có muốn xóa mẫu tin không?',
    'Please choose at least one item' => 'Xin vui lòng chọn ít nhất một mẫu tin!',
    'Do you want to change status of the item' => 'Bạn có muốn thay đổi trạng thái của mẫu tin không?',
    'Created Time' => 'Ngày tạo',
    'Active' => 'Trạng thái',
    'Action' => 'Thao tác',
    'Create a new entry' => 'Tạo Mới',
    'Back to the list' => 'Quay lại danh sách',
    'Save' => 'Lưu',
    'Previous' => 'Trang trước',
    'Next' => 'Trang sau',
    'Show' => 'Chi tiết',
    'Delete' => 'Xóa',
    'Status' => 'Tình trạng',
    'Promotion' => 'Khuyến mãi',
    'Select' => 'Lựa chọn',
    'Search' => 'Tìm kiếm',
    'Not set value in this language' => 'Ngôn ngữ này không được thiết lập',
    'Checked if you want to delete this image' => 'Check vào đây nếu bạn muốn xóa hình này.',
    'Checked if you want to delete this file' => 'Check vào đây nếu bạn muốn xóa tập tin này.',
    'Select image' => 'Lựa chọn hình ảnh',
    'Type of media' => 'Thể loại media',
    'Select All' => 'Chọn tất cả',
    'Clear All' => 'Bỏ chọn tất cả',
    'Close' => 'Đóng',
    'Total' => 'Tổng số',
    'Page' => 'Trang',
    'The operation is success' => 'Thao tác thành công',
    'The operation is fail' => 'Thao tác thất bại',
    'The data input is invalid' => 'Dữ liệu nhập bị sai.',
    'Could not find page with id' => 'Không tin thấy mẩu tin có id.',
    'Unable to find entity' => 'Không thể tìm thấy mẩu tin.',
    'Username' => 'Tên đăng nhập',
    'Fullname' => 'Họ & Tên',
    'Email' => 'Email',
    'Last Updated' => 'Ngày cập nhật',
    'User list' => 'Danh Sách Người Dùng',
    'User creation' => 'Thêm Người Dùng',
    'Password' => 'Mật khẩu',
    'Roles' => 'Roles',
    'Group' => 'Nhóm người dùng',
    'Current Password' => 'Mật khẩu hiện tại',
    'Repeat Password' => 'Nhập lại mật khẩu',
    'User detail' => 'Thông Chi Tiết',
    'Name' => 'Tên',
    'Language list' => 'Danh Sách Ngôn Ngữ',
    'Lang key' => 'Key',
    'Is default' => 'Ngôn ngữ mặc định',
    'Language creation' => 'Thêm Mới Ngôn Ngữ',
    'Language edit' => 'Chỉnh Sửa Ngôn Ngữ',
    'Language show' => 'Chi Tiết Ngôn Ngữ',
    'Media Category List' => 'Danh Sách Thể Loại Media',
    'Media Category Creation' => 'Thêm Mới Thể Loại Media',
    'Media Category Edit' => 'Chỉnh Sửa Thể Loại Media',
    'Media Category Show' => 'Chi Tiết Thể Loại Media',
    'Media List' => 'Danh Sách Hình Ảnh',
    'Image' => 'Hình ảnh',
    'Media Creation' => 'Thêm Mới Hình Ảnh',
    'Category' => 'Thể loại hình ảnh',
    'File' => 'Tập tin',
    'Width' => 'Chiều rộng',
    'Height' => 'Chiều cao',
    'Link' => 'Link',
    'Media Edit' => 'Chỉnh Sửa Media',
    'Media Show' => 'Chi Tiết Media',
    'Company Type List' => 'DS Loại Hình Công Ty',
    'Company Type Creation' => 'Thêm Mới Loại Hình Công Ty',
    'Company Type Edit' => 'Chỉnh Sửa Loại Hình Công Ty',
    'Company List' => 'Danh Sách Công Ty',
    'Company Type' => 'Loại hình công ty',
    'Company Creation' => 'Thêm Mới Công Ty',
    'Charter Capital' => 'Vốn điều lệ',
    'Phone' => 'Điện thoại',
    'Fax' => 'Fax',
    'Mst' => 'Mst',
    'Website' => 'Website',
    'Logo' => 'Logo',
    'Address' => 'Địa chỉ',
    'Representation' => 'Người đại diện',
    'Company Edit' => 'Chỉnh Sửa Công Ty',
    'Branch List' => 'Danh Sách Ngành Hàng',
    'Branch Creation' => 'Thêm Mới Ngành Hàng',
    'Branch Edit' => 'Chỉnh Sửa Ngành Hàng',
    'Product Group List' => 'Danh Sách Nhóm Hàng',
    'Product Group Creation' => 'Tạo Mới Nhóm Hàng',
    'Branch' => 'Ngành hàng',
    'Product Group Edit' => 'Chỉnh Sửa Nhóm Hàng',
    'Product List' => 'Danh Sách Sản Phẩm',
    'Product Group' => 'Nhóm hàng',
    'Product Creation' => 'Thêm Mới Sản Phẩm',
    'Price' => 'Giá Cả',
    'Unit' => 'Đơn vị tính',
    'Discount' => 'Triết khấu',
    'Amount' => 'Số lượng',
    'Thumbnail' => 'Hình đại diện',
    'Description' => 'Mô tả',
    'Introduction' => 'Mô tả ngắn',
    'Product Edit' => 'Chỉnh Sửa Sản Phẩm',
    'Results of search product' => 'Kết quả tìm kiếm',
    'Hot Product' => 'Sản phẩm nổi bật?',
    'Category List' => 'Danh Sách Chuyên Mục',
    'Category Creation' => 'Tạo Mới Chuyên Mục',
    'Parent' => 'Chuyên mục cha',
    'Category Edit' => 'Chỉnh Sửa Chuyên Mục',
    'Menu List' => 'Danh Sách Menu',
    'Menu Creation' => 'Thêm Mới Menu',
    'Menu Edit' => 'Chỉnh Sửa Menu',
    'Menu Type' => 'Loại',
    'Menu Param' => 'Tham số',
    'News List' => 'Danh Sách Tin Tức',
    'News Creation' => 'Thêm Mới Tin Tức',
    'News Edit' => 'Chỉnh Sửa Tin Tức',
    'News Category' => 'Loại tin',
    'Position' => 'Vị trí',
    'Page List' => 'Danh Sách Trang Tỉnh',
    'Page Creation' => 'Thêm Mới Trang Tỉnh',
    'Page Edit' => 'Chỉnh Sửa Trang Tỉnh',
    'File List' => 'Danh Sách Tập Tin',
    'File Creation' => 'Thêm Mới Tập Tin',
    'File Edit' => 'Chỉnh Sửa Tập Tin',
    'Config' => 'Tham Số',
    'Config List' => 'Danh Sách Tham Số',
    'Value' => 'Giá trị',
    'Config Creation' => 'Thêm Mới Tham Số',
    'Config Edit' => 'Chỉnh Sửa Tham Số',
    'Item Type Creation' => 'Tạo Chuyện Mục',
    'Item Type Edit' => 'Chỉnh Sửa Chuyên Mục',
    'Item List' => 'Danh Sách Mặt Hàng',
    'Item Category' => 'Chuyên Mục',
    'Item Creation' => 'Tạo Mặt Hàng',
    'Old Price' => 'Giá cũ',
    'Item Edit' => 'Chỉnh Sửa Mặt Hàng',
    'Comment List' => 'Danh sách nhận xét',
    'Approval' => 'Tán thành',
    'Not approval' => 'Không tán thành',
    'Change Status' => 'Cập nhật trạng thái',
    'View Comment' => 'Xem nhận xét',
  ),
  'SMFrontBundle' => 
  array (
    'Toi Yeu Hang Viet' => 'Tôi Yêu Hàng Việt',
    'Advertisement' => 'Quảng Cáo',
    'Logo Company' => 'Logo Đối Tác',
    'News & Events' => 'Tin tức và sự kiện',
    'Newest Product' => 'Sản Phẩm Mới Nhất',
    'View more' => 'Xem thêm',
    'Speciality Product' => 'Đặc Sản Vùng Miền',
    'New Product' => 'Đặc Sản Mới',
    'Relation Product' => 'Sản Phẩm Cùng Loại',
    'Promotion Product' => 'Sản Phẩm Khuyến Mãi',
    'No data was be found' => 'Chưa cập nhật dữ liệu cho chuyên mục này.',
    'Page' => 'Trang',
    'Hot line' => 'Đường dây nóng',
    'Search' => 'Tìm kiếm sản phẩm',
    'Menu Product' => 'Menu Sản Phẩm',
    'Detail Information' => 'Thông Tin Chi Tiết',
    'News' => 'Tin tức',
    'Relation News' => 'Tin khác',
    'Lastest News' => 'Tin mới',
    'Oldest News' => 'Tin cũ',
    'Comments' => 'Phần gửi nhận xét',
    'Share' => 'Chia sẻ',
    'Title' => 'Tiêu đề nhận xét',
    'Name' => 'Họ tên',
    'Comment' => 'Viết nhận xét của bạn vào bên dưới',
    'Send Comment' => 'Gửi nhận xét',
    'Loading' => 'Đang xữ lý ...',
    'Comment of custommer' => 'Nhận xét của Khách Hàng',
    'Support' => 'Hỗ Trợ Trực Tuyến',
    'Register to get product' => 'Đăng ký nhận tin sản phẩm',
    'Inputting a email that to recieve new and sale product' => 'Nhập email để nhận bảng giá sản phẩm mới và tin khuyến mãi',
    'Send' => 'Gửi',
    'Search Results' => 'Kết quả tìm kiếm',
    'No result was found' => 'Không tìm thấy sản phẩm nào',
    'Market price' => 'Giá cả thị trường',
    'Item' => 'Mặt hàng',
    'Old price' => 'Giá cũ',
    'New price' => 'Giá mới',
  ),
));
$catalogue->addFallbackCatalogue($catalogueVi);


return $catalogue;
