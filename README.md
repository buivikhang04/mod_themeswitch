# Module: ThemeSwitch (Tùy Chỉnh Giao Diện & Cỡ Chữ)

## Giới thiệu

**ThemeSwitch** là một module dành cho Joomla giúp người dùng tùy chọn **chế độ sáng/tối** và **thay đổi kích thước chữ** trên toàn bộ trang web. Module này giúp cải thiện trải nghiệm người dùng bằng cách cho phép họ điều chỉnh giao diện phù hợp với thị giác và môi trường sử dụng.

## Tính năng chính

- ✅ Chuyển đổi giữa chế độ **sáng** và **tối**.
- ✅ Thay đổi cỡ chữ toàn trang:
    - Nhỏ: ví dụ 12px
    - Tiêu chuẩn: 13px (mặc định)
    - Lớn: ví dụ 15px
- ✅ Giao diện đơn giản, dễ sử dụng.
- ✅ Tùy chỉnh giá trị mặc định của giao diện và kích thước chữ từ phần quản trị module (admin).

## Yêu cầu hệ thống

- Joomla! (Phiên bản cụ thể, ví dụ: Joomla 4.x trở lên hoặc Joomla 3.x nếu có)
- Trình duyệt web hiện đại hỗ trợ `localStorage`.

## Hướng dẫn cài đặt

1.  Vào trang quản trị Joomla (`/administrator`).
2.  Truy cập **Extensions** (Tiện ích mở rộng) → **Manage** (Quản lý) → **Install** (Cài đặt).
3.  Chọn tab **"Upload Package File"** (Tải lên tệp gói).
4.  Nhấp vào nút **"Or browse for file"** (Hoặc duyệt tìm tệp) và chọn gói `.zip` của module `mod_themeswitch` đã tải về.
5.  Tiến hành cài đặt.
6.  Sau khi cài đặt thành công, vào **System** (Hệ thống) → **Site Modules** (Module trang) (hoặc **Extensions** → **Modules** trong các phiên bản Joomla cũ hơn).
7.  Tìm module `ThemeSwitch` trong danh sách.
8.  Nhấp vào tên module để chỉnh sửa.
9.  Thiết lập trạng thái là **"Published"** (Đã xuất bản).
10. Chọn một **vị trí (Position)** phù hợp trên template của bạn để module hiển thị.
11. Định cấu hình các tùy chọn trong tab **"Module"** (chi tiết ở phần "Tùy chỉnh").
12. Lưu lại cấu hình.

## Hướng dẫn sử dụng / Tùy chỉnh

Sau khi cài đặt và publish module, người dùng cuối sẽ thấy các điều khiển để chuyển đổi giao diện và cỡ chữ tại vị trí bạn đã chọn.

Trong phần quản trị của module `ThemeSwitch` (khi bạn chỉnh sửa module trong Site Modules), bạn có thể cấu hình các mục sau:

-   **Giao diện mặc định (Default Theme):**
    -   `Sáng (Light)`
    -   `Tối (Dark)`
-   **Cỡ chữ mặc định (Default Font Size):**
    -   `Tiêu chuẩn (Standard)`
-   **Giá trị cỡ chữ nhỏ (Small Font Size Value):** Nhập giá trị số (ví dụ: `12`). Đơn vị `px` sẽ được tự động thêm.
-   **Giá trị cỡ chữ tiêu chuẩn (Standard Font Size Value):** Nhập giá trị số (ví dụ: `13`). Đây là giá trị sẽ được áp dụng khi chọn "Tiêu chuẩn" và cũng là giá trị cơ sở.
-   **Giá trị cỡ chữ lớn (Large Font Size Value):** Nhập giá trị số (ví dụ: `15`). Đơn vị `px` sẽ được tự động thêm.

Các lựa chọn của người dùng sẽ được lưu trong `localStorage` của trình duyệt và tự động áp dụng lại trong các lần truy cập sau.

## Đóng góp

Nếu bạn muốn đóng góp vào sự phát triển của module này, vui lòng:

-   Báo cáo lỗi hoặc đề xuất tính năng mới qua tab **Issues** của kho lưu trữ GitHub.
-   Gửi **Pull Request** nếu bạn có các cải tiến hoặc sửa lỗi muốn đóng góp.

## Liên hệ

Nếu bạn có câu hỏi hoặc cần hỗ trợ, bạn liên:

-  SDT: 0338822924
-  Email: thanhnguyen12022004@gmail.com
