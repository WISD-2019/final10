# 訪客頁面
<p align="center"><img src=https://i.imgur.com/SZQJTpj.png ></p>

# 預約畫面
- 選取房型
<p align="center"><img src=https://i.imgur.com/1kXA5LG.png ></p>

- 選擇入住和退訂日期
<p align="center"><img src=https://i.imgur.com/ZKZqsNU.png ></p>

# 結帳預約明細
<p align="center"><img src=https://i.imgur.com/RwnI12A.png ></p>

# 預約表單和取消預約
<p align="center"><img src=https://i.imgur.com/AgJMacw.png ></p>

# 後台畫面
<p align="center"><img src=https://i.imgur.com/7WAo9sd.png ></p>



# 系統的作用

## 線上訂房系統

- 讓使用者透過此系統的簡單操作就可以預約房間
- 讓使用者隨時掌握房間的最新狀況
- 讓管理者在一套系統裡就可管理客戶帳號
- 讓管理者在一套系統裡就可管控所有顧客的預約資料
- 讓管理者可以隨時修改房間的狀況


## 系統的主要功能

- 訪客首頁(Route::get('/')) [3A632095 朱泰宇](https://github.com/3A632095)[3A632096 蔡侑秦](https://github.com/3A632096)

前端
- 判斷客戶或管理者(Route::get('/go_home'))[3A632096 蔡侑秦](https://github.com/3A632096)
- 預約房間(Route::get('/go_home'))[3A632095 朱泰宇](https://github.com/3A632095)[3A632096 蔡侑秦](https://github.com/3A632096)
  - 訂房日期((Route::post('/posts'))[3A632095 朱泰宇](https://github.com/3A632095)
- 查詢預約的房間((Route::get('/contact))[3A632095 朱泰宇](https://github.com/3A632095)[3A632096 蔡侑秦](https://github.com/3A632096)
- 取消預約(Route::POST('/welcome'))[3A632095 朱泰宇](https://github.com/3A632095)[3A632096 蔡侑秦](https://github.com/3A632096) 

後台

- 帳號管理(Route::get('admin/account'))
  -  新增(Route::post('admin/account/create'))
  -  修改(Route::post('admin/account/update'))
  -  刪除(Route::post('admin/account/destroy'))[3A632096 蔡侑秦](https://github.com/3A632096)
- 顧客管理 (Route::get('admin/customer')
  -  新增(Route::post('admin/customer/create'))
  -  修改(Route::post('admin/customer/update'))
  -  刪除(Route::post('admin/customer/destroy'))[3A632096 蔡侑秦](https://github.com/3A632096)
- 管理訂單(Route::get('admin/reservation'))
  -  新增(Route::post('admin/reservation'/create'))
  -  修改(Route::post('admin/reservation'/update'))
  -  取消(Route::post('admin/reservation'/destroy'))
  -  輸入付款時間(Route::post('admin/reservation'/pay'))
  -  輸入實際入住時間(Route::post('admin/reservation/check_in'))
  -  輸入實際退房時間(Route::post('admin/reservation/check_out'))[3A632096 蔡侑秦](https://github.com/3A632096)
- 管理房間(Route::get('admin/room'))
  -  新增(Route::get('admin/room/create'))
  -  修改(Route::get('admin/room/update'))
  -  刪除(Route::get('admin/room/destroy'))[3A632096 蔡侑秦](https://github.com/3A632096)


## 初始專案與DB負責的同學

- 初始專案 [3A632095 朱泰宇](https://github.com/3A632095)
- 資料庫及資料表建立、資料表關連 [3A632095 朱泰宇](https://github.com/3A632095)[3A632096 蔡侑秦](https://github.com/3A632096)

## 額外使用的套件或樣板

前台樣板- [Clean Blog](https://startbootstrap.com/template-overviews/clean-blog/)

-畫面供使用者使用，且使用起來方便且舒適。

後台樣板

-簡易操作的畫面，供管理者使用。

## 系統測試資料存放位置

- uwamp->www->final10->public->final10.sql

## 系統使用者測試帳號

前台-使用者

-帳號:11@gmail.com
-密碼:123456789

後台-管理者

-帳號:33@gmail.com
-密碼:987654321

## 系統開發人員與工作分配
- [3A632095 朱泰宇](https://github.com/3A632095)  (前端+readme)
- [3A632096 蔡侑秦](https://github.com/3A632096)  (後端+修改前端)
