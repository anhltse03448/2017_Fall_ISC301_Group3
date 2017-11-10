# 2017_Fall_ISC301_Group3

Link website: https://winestore.ml/
<br/>
<br/>
<h3>Account for Paypal testing </h3>

<b>Username</b>: test@winestore.com
<br/>
<b>Password </b>: 1234qwer
<br/>

Hướng dẫn cài đặt: 7 bước

1. Cài localhost

2. Cài chứng chỉ ssl trên localhost (xampp có hỗ trợ localhost chứng chỉ ssl)

https://itshare.online/knowledge/web-server/cai-dat-ssl-cho-xampp-tren-windows/

3. Giải nén file winestoreml.zip

4. import file winestoreml.sql vào trong mysql

5. Trong table prefix_options, đổi giá trị của cột option_value tương ứng với các cột option_name [site_url] và option_name [home]
    thành link của thư mục gốc home (Ví dụ https://localhost:8000)

6. Vào file winestore/wp-config.php và <br/>
    Sửa các thông tin về localhost trong wp-config.php Các thông tin cần thay đổi: <br>
    a.	DB_NAME: wine <br>
    b.	DB_USER: user_localhost_mysql <br>
    c.	DB_PASSWORD: password_localhost_mysql <br>
    d.	DB_HOST: localhost <br>
    
7. Vào đường link thư mục và chạy
